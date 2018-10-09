<?php
session_start();
include "../../config.php";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}?>

<?php
date_default_timezone_set('Asia/Kolkata');

if($_POST['image_form_submit'] == 1)
{
    //$frame_id=$_POST['frame_id'];
	$images_arr = array();
	foreach($_FILES['images']['name'] as $key=>$val){
		$image_name = $_FILES['images']['name'][$key];
		$tmp_name 	= $_FILES['images']['tmp_name'][$key];
		$size 		= $_FILES['images']['size'][$key];
		$type 		= $_FILES['images']['type'][$key];
		$error 		= $_FILES['images']['error'][$key];
		
		############ Remove comments if you want to upload and stored images into the "uploads/" folder #############
		
		$target_dir = "uploads/";
		$target_file = $target_dir.'logo-'.date('h').''.date('i').''.date('s').'-'.$_FILES['images']['name'][$key];
		if(move_uploaded_file($_FILES['images']['tmp_name'][$key],"../".$target_file))
		{
			$images_arr[] = $target_file;
                    $sql="select * from LogoMaster where phm_id=".$_POST['phm_id']." ";
                    $query=mysqli_query($conn,$sql);

                    if(mysqli_num_rows($query)>0)
                    {

                    	$sql=mysqli_query($conn,"select * from `LogoMaster` where `phm_id`=".$_POST['phm_id']." ");
                    	while($row=mysqli_fetch_array($sql))
                    	{
                    		 $name=basename($row['logo']);
                    		@unlink($name);                    		
                    	}
                    	$sql=mysqli_query($conn,"update  `LogoMaster` set `logo`='".$target_file."'  where `phm_id`=".$_POST['phm_id']." ");

                    }
                    else
	                {
				        $insert_sql = "INSERT INTO LogoMaster( `logo`, `phm_id`)VALUES( '".$target_file."', ".$_POST['phm_id'].")";
				        mysqli_query($conn, $insert_sql) or die("database error: ". mysqli_error($conn));
			        }
		}
		
		//display images without stored
		$extra_info = getimagesize($_FILES['images']['tmp_name'][$key]);
    	$images_arr[] = "data:" . $extra_info["mime"] . ";base64," . base64_encode(file_get_contents($_FILES['images']['tmp_name'][$key]));
	}
	
	//Generate images view
	if(!empty($images_arr)){ $count=0;
		foreach($images_arr as $image_src){ $count++?>
			<ul class="reorder_ul reorder-photos-list">
            	<li id="image_li_<?php echo $count; ?>" class="ui-sortable-handle">
                	<a href="javascript:void(0);" style="float:none;" class="image_link"><img src="<?php echo $image_src; ?>" alt=""></a>
               	</li>
          	</ul>
	<?php }
	}
}
?>

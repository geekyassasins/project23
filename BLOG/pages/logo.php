<?php
    $title="Add Logo";
    $mainmenu="ADMINISTRATOR";
    $menu="PHOTOGRAPHER";
    $submenu="BANNER";
  //$submenu=71;
  include "header.php";
  $istable=0;
  $multipleselect=0;
  $upload=1;	
    $id=decrypt_url($_GET['id']);
  $sql=mysqli_query($conn,"select * from LogoMaster where phm_id=".$id." ");
  $img=mysqli_fetch_array($sql);    
 // echo "sdfdf".$img['logo'];  
  ?>
  <!-- Select2 -->
<style>
ul, ol, li {
	margin: 0;
	padding: 0;
	list-style: none;
}
.gallery{ width:100%; float:left; margin-top:30px;}
.gallery ul{ margin:0; padding:0; list-style-type:none;}
.gallery ul li{ padding:7px; border:2px solid #ccc; float:left; margin:10px 7px; background:none; width:auto; height:auto;}
.gallery img{ width:250px;}
.none{ display:none;}
.upload_div{ margin-bottom:50px;}
.uploading{ margin-top:15px;}
</style>

<!-- Content Wrapper. Contains page content -->

<script type="text/javascript">
$(document).ready(function(){
	$('#images').on('change',function(){
		$('#multiple_upload_form').ajaxForm({
			target:'#images_preview',
			beforeSubmit:function(e){
				$('.uploading').show();
			},
			success:function(e){
				$('.uploading').hide();
                location.reload(); 
			},
			error:function(e){
			}
		}).submit();
        
	});
});
</script>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!------------------------------------------------------------------------------------------------------->

    <div class="col-sm-12">
      <div class="box box-primary box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Add Logo Image</h3>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <center><img src="<?php echo $img['logo']?>" style="height:200px;width:auto;" class="img-responsive"></center>
		<div class="upload_div">
	    <form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="uploads/upload.php">
            <font color="red">Do not refresh the page and only required image upload..</font><br>
            <div class="form-group">
    	    	  <input type="hidden" name="image_form_submit" value="1"/>
    	    	  <input type="hidden" name="phm_id" value="<?php echo $id;?>"/>
		          <label>Choose Image</label>
		          <input type="file" name="images[]"  class="form-control" id="images"  required>
            </div>
		  <div class="uploading none">
		      <label>&nbsp;</label>
		      <img src="uploading.gif"/>
		  </div>
              <br><br>  
                <!--<input type="submit" class="btn btn-success" id="submit" name="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">-->
	    </form>
	    </div>
	
	    <div class="gallery" id="images_preview"></div>
            <hr></hr>

        </div>
        <!-- /.box-body -->
        <!-- /.box -->
      </div>

<!------------------------------------------------------------------------------------------------------->
    </div>
    <!-- /.row (main row) -->
</section>
<!-- /.content-wrapper -->
<?php
  include "footer.php";
?>


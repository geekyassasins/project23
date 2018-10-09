<?php
  $fa="fa-newspaper-o";
  $maintitle="Blog";
  $title="Create Blog";
  $mainmenu="ADMINISTRATOR";
  $menu="BLOG";
  include "header.php";
    $id=$_GET['id'];  
  $istable=1;
  $page_name="blog.php";  
  $ajax="../Validation/ajax-blog.php";  
  if($page=="PR")
  {  
    $page="Presse Release";
    $page_name="pr.php";
    $ajax="ajax-pr.php";
  }

?>

<!-- Content Wrapper. Contains page content -->
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!------------------------------------------------------------------------------------------------------->
    <div class="col-sm-12">
      <div class="box box-primary box-solid">
        <div class="box-header with-border">
          <h3 class="box-title"> List of <?php $page ?>
          </h3>
        </div>
        <div class="box-body">
          <!----------------------------------------------------------------------------> 
              <table id="example1" class="table table-striped table-bordered no-footer dtr-inline dataTable" >
                <thead>
                  <tr>
                    <th style="width:1%;">#</th>
                    <th style="width:5%;">Title</th>
                    <th style="width:15%;">Date</th>

                    <th style="width:3%;">Edit</th>
                    <th style="width:3%;">Delete</th>

                  </tr>
                </thead>
<?php
                $cnt=1;
                $query2=mysqli_query($conn,"select * from KitoDiet where isBlog=".$id." order by blog_id desc");
                while($row2=mysqli_fetch_array($query2))
                {
?>
                <tr>
                    <td><?php echo $cnt;?></td>

                    <td><?php echo $row2['title'];?></td>
                    <td><?php echo date('d F, Y', strtotime($row2['create_date']));?></td>
                    <td><a href="<?php echo $page_name;?>?id=<?php echo $row2['blog_id'];?>">Edit</a></td>

                    <td><a href="" onclick="deleteindustry(<?php echo $row2['blog_id'];?>)">delete</a> </td>
                </tr>

<?php
                    $cnt++;
                }
?>
                <tbody>
                </tbody>
             </table> 

          <!---------------------------------------------------------------------------->  
        </div>
     </div>
  </div>
<!------------------------------------------------------------------------------------------------------->
</div>
<!-- /.row (main row) -->
</section>
<!-- /.content -->

<!-- /.content-wrapper -->
<?php
include "footer.php";
?>
<script>
function deleteindustry(id)
{
        id=id;
    if(confirm('Are you sure want to delete ? '))
    {


   $.post('<?php echo $ajax;?>',
      {
        id:id,deletei:'-1'

      },
      function(res)
      {
        var string = $.trim(res);
       // alert(string);
        if (string == "true")
        {
          //alert('Registration Successfull');
          //          window.location = 'view-industries.php';
            window.location.reload(true);
        }
        else
        {
          alert('Something wrong');
        }
        document.getElementById('save').disabled = false;
      });



    }

}
</script>

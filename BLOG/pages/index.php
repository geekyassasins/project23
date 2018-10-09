<?php
    $title="Home";
    $mainmenu="ADMINISTRATOR";
    $menu="HOME";
    include "header.php";
    $bannerimg="";
    $featurevideo="";
    $featureimg="";
    include "functions.php";

?>
<section class="content">
  <div class="row">
    <!------------------------------------------------------------------------------------------------------->
    <div class="col-sm-12">
      <div class="box box-primary box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Canvera</h3>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">

      <!-- Small boxes (Stat box) -->
      <div class="row">


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo (getName("count(*)","KitoDiet", " ")=="")?0:getName("count(*)","KitoDiet", " ");?></h3>

              <p>Blog</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="blog.php" class="small-box-footer">Add Blog <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


      </div>
      <!-- /.row -->


        </div>
      </div>
    </div>
  </div>
</section>


<?php
    include "footer.php";
?>

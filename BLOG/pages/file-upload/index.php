    <!-- Bootstrap core CSS -->

<?php
    $title="Albume";
    $mainmenu="ADMINISTRATOR";
    $menu="ALBUM";
  //$submenu=71;
    include "header.php";
    $id=decrypt_url($_GET['id']);

  $istable=0;
  $multipleselect=0;
  $upload=1;	
  $file=1;
  ?>
  <!-- Select2 -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" >
    <link href="dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!------------------------------------------------------------------------------------------------------->

    <div class="col-sm-12">
      <div class="box box-primary box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Add Images in <?php echo $_SESSION['album_name']?>
            <a href="../album.php" class="btn btn-default pull-right">Add New Album</a>
        </h3>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <!------------------------------------------------------------------------------------------------------->
      <div class="row">
        <div class="col-md-6 col-sm-12">
          
          <!-- Our markup, the important part here! -->
          <div id="drag-and-drop-zone" class="dm-uploader p-5" >
            <h3 class="mb-5 mt-5 text-muted">Drag &amp; drop files here</h3>

            <div class="btn btn-primary btn-block mb-5">
                <span>Open the file Browser</span>
                <input type="file" title='Click to add Files' />
            </div>
          </div><!-- /uploader -->

        </div>
        <div class="col-md-6 col-sm-12" >
          <div class="card h-100"  >
            <div class="card-header" >
              File List
            </div>

            <ul class="list-unstyled p-2 d-flex flex-column col" id="files" >
              <li class="text-muted text-center empty">No files uploaded.</li>
            </ul>
          </div>
        </div>
      </div><!-- /file list -->


      <div class="row">
        <div class="col-sm-12">
           <div class="card h-100" >
            <div class="card-header">
              Debug Messages
            </div>

            <ul class="list-group list-group-flush" id="debug">
              <li class="list-group-item text-muted empty">Loading plugin....</li>
            </ul>
          </div>
        </div>
      </div> <!-- /debug -->

        <!------------------------------------------------------------------------------------------------------->
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
  include "../footer.php";
?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>

    <script src="dist/js/jquery.dm-uploader.min.js"></script>
    <script src="demo-ui.js"></script>
    <script src="demo-config.js"></script>

    <!-- File item template -->
    <script type="text/html" id="files-template">
      <li class="media">
        <div class="media-body mb-1">
          <p class="mb-2">
            <strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
          </p>
          <div class="progress mb-2">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" 
              role="progressbar"
              style="width: 0%" 
              aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
          <hr class="mt-1 mb-1" />
        </div>
      </li>
    </script>

    <!-- Debug item template -->
    <script type="text/html" id="debug-template">
      <li class="list-group-item text-%%color%%"><strong>%%date%%</strong>: %%message%%</li>
    </script>


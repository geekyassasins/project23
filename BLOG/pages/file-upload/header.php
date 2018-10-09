<?php
    //session_start();
    include "../../config.php";
    include "../../lib/connect.php";
    $SERVER="http://narmware.com/Links/";
    date_default_timezone_set('Asia/Kolkata');
    if(isLoggedin($conn))
    {
            $query = mysqli_query($conn, "SELECT * FROM AdminMaster WHERE admin_id=".mysqli_real_escape_string($conn, $_SESSION['admin_id'])."") or die(mysql_error());
            $details = mysqli_fetch_array($query, MYSQLI_ASSOC);
            $fname=$details['name'];
    }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?> </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<style>
/* Preloader */
#preloader {
	position: fixed;
	top:0;
	left:0;
	right:0;
	bottom:0;
	background-color:#fff; /* change if the mask should be a color other than white */
	z-index:99; /* makes sure it stays on top */
}
.btn{
    font-weight:600 !important;
}
#status {
	width:200px;
	height:200px;
	position:absolute;
	left:50%; /* centers the loading animation horizontally on the screen */
	top:50%; /* centers the loading animation vertically on the screen */
	background-image:url(ajax-loader.gif); /* path to your loading animation */
	background-repeat:no-repeat;
	background-position:center;
	margin:-100px 0 0 -100px; /* is width and height divided by two */
}
.star{
    color:red;
}

.alert{
    color:red;
}

.header{
    font-size:1em !important;
}
.square{

    color:red;font-weight:bold;
}
.squareright{
    background-color:green;
    color:white;font-weight:bold;

}

@media (max-width: 767px) {
.resphide{
    display:none;
}
}
.square{
    background-color:red;
    color:white;font-weight:bold;
}
.squareright{
    background-color:green;
    color:white;font-weight:bold;

}
#mainregform .alert{
    color:red;
}
</style>  

<!-- jQuery Plugin -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Preloader -->
<script type="text/javascript">
	//<![CDATA[
		$(window).on('load', function() { // makes sure the whole site is loaded 
			$('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(450).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({'overflow':'visible'});
		})
	//]]>
</script> 
    <!-- Bootstrap 3.3.6 -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $SERVER;?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
      folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo $SERVER;?>dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo $SERVER;?>plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo $SERVER;?>plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo $SERVER;?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo $SERVER;?>plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo $SERVER;?>plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo $SERVER;?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo $SERVER;?>plugins/datatables/dataTables.bootstrap.css">


  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>

    <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="../index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b><i class="fa fa-home" aria-hidden="true"></i></b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b><i class="fa fa-home" aria-hidden="true" style="font-size:1.5em;"></i>&nbsp;Admin</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu" id="menu_update">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less--><!--
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">	
              <i class="fa fa-commenting"></i>
              <span class="label label-success"></span>
              </a>
           </li>-->
            <!-- Notifications: style can be found in dropdown.less --><!--
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-warning"></span>
              </a>
         </li>-->
            <!-- Tasks: style can be found in dropdown.less -->
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $SERVER;?>dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $fname." ".$lname?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo $SERVER;?>dist/img/avatar5.png" class="img-circle" alt="User Image">
                  <p>
                    <?php echo $fname." ".$lname?>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-12 text-center">
                      <a href="#">Change Password</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                  </div>
                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <!--<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>-->
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">


        <ul class="sidebar-menu">
          <li class="header" style="color:white;font-weight:bold;"><i class="fa fa-user-secret" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;Administrator</li>
<!------------------------------------------------------------------------------------------------------------>
          <li class="treeview <?php if($mainmenu=='ADMINISTRATOR') echo 'active';?>">
            <a href="#">
            <i class="fa fa-users"></i>
            <span>Administrator</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              <li <?php if($menu=="HOME") echo "class='active'"; ?>><a href="../index.php"><i class="fa fa-circle-o"></i> Home</a></li>
              <!--<li <?php if($menu=="CATEGORY") echo "class='active'"; ?>><a href="phm-category-list.php"><i class="fa fa-circle-o"></i> Category</a></li>-->
              <li <?php if($menu=="PHOTOGRAPHER") echo "class='active'"; ?>><a href="../Customer-photographer-list.php"><i class="fa fa-circle-o"></i> Photographer</a></li>
              <li <?php if($menu=="ALBUM") echo "class='active'"; ?>><a href="../album-list.php"><i class="fa fa-circle-o"></i> Album Master</a></li>

<!--              <li <?php if($menu=="CUSTOMER") echo "class='active'"; ?>><a href="customer-list.php"><i class="fa fa-circle-o"></i> Customer</a></li>-->



            </ul>
          </li>

<!------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------>
          <li class="<?php if($mainmenu=='ALLOCATION') echo 'active';?>">
            <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span>Reports</span>
            </a>
          </li>





        </ul>
      </section>

      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->


<?php
        include "BLOG/config.php";
        include "BLOG/lib/connect.php";

    $id=decrypt_url($_GET['id']);
    $sql=mysqli_query($conn,"select * from KitoDiet where blog_id=".$id." ");
    $blog=mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get Free Keto Diet Plan,all information about what is keto diet,keto dinner, keto diet,ketosis,keto,ketogenic,keto diet plan,keto meal plan,keto meals,keto food list,keto diet menu,ketogenic diet menu">
    <meta name="keywords" content=" kito diet,ketosis,keto,keto diet plan,keto meal plan,what is keto diet,ketodiet,keto meals,keto food list,keto diet menu">
    <meta name="author" content="">
    <title>Get Free Keto Diet Plan | All info about KETO DIET| Kito diet <?php echo date('Y')?></title>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">    
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       <!--
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">--->
</head><!--/head-->

<body id="home" class="homepage">
   <?php include "social.php";?>

    <header id="header"  style="margin-bottom:0 !important;">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="text-center">
                        <a href="#home"><i class="fa fa-facebook"></i></a>
                        <a href="about.php"><i class="fa fa-twitter"></i></a>
                        <a href="#meet-team"><i class="fa fa-whatsapp"></i></a>
                </div>

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Keto Diet</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll"><a href="index.php">Home</a></li>
                        <li class="scroll"><a href="about.php">About</a></li>
                        <li class="scroll"><a href="index.php#meet-team">FAQ</a></li>
                        <li class="scroll"><a href="blog.php">Blog</a></li> 
                        <li class="scroll"><a href="#contact">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

<style>
.container p, .container ul, .container ol{
    text-align: justify;
    text-justify: inter-word;
    color:black;

}
.mypanel ul, .mypanel ol{
        font-style: italic;
}
.mypanel{
        margin-bottom:20px !important;
}
.call{
        margin-top:40px;
}
.title-symbol{
        height:30px !important;
        width:auto !important;
}
</style>

    <section id="features" style="margin-top:20px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                        <div class="col-sm-12 mypanel">                
                            <h3 class="column-title"> <img src="images/target_small.png" class=" title-symbol" alt="title symobol"> &nbsp;&nbsp;<?php echo $blog['title']?> </h3>
                                <!---------------------CONTENT START------------------------------------------------------>
                                  <div class="social" style="font-size:1em !important;"> </div>
<?php
    {
?>
            <div class="">
               <div class="media">
                  <a class="pull-left" href="#">
                  <!--<i class="fa fa-user" aria-hidden="true" style="font-size:50px;"></i>-->
                  </a>
                  <div class="media-body">
                     <h4 class="media-heading"></h4>
                     <p class="text-right">By Admin</p>
                    <hr></hr>
                     <p style="text-align: justify;text-justify: inter-word;"><?php echo $blog['blog'];?>
                     </p>
                     <ul class="list-inline list-unstyled">
                        <li><span><i class="glyphicon glyphicon-calendar"></i> <?php echo date('d F, Y', strtotime($blog['create_date'])); ?> </span></li>
                        <li>|</li>
                        <li>
                                <div class="social-send"> </div>
<!--
                           <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
<style>

.social-send svg {
  width: 15px;
  height: 15px;
  margin: 0 10px;
}
</style>

<!--
                           <span><i class="fa fa-facebook-square"></i></span>
                           <span><i class="fa fa-twitter-square"></i></span>
                           <span><i class="fa fa-google-plus-square"></i></span>
-->
                        </li>

                     </ul>
                  </div>
               </div>
            </div><!-- -->
<?php
    }
?>

            <?php
                if($blog['call_to_action']!="")
                {
           ?>
                    <div class="alert alert-danger">
                        <a href="#" class="btn btn-xs btn-danger pull-right" title="<?php echo $blog['title'];?>" data-toggle="modal" data-target="#<?php echo $blog['blog_id'];?>">Request</a>
                        <strong><?php echo $blog['call_to_action'];?></strong>
                    </div>
           <?php     
                        include "call.php";
                
                }
            ?>

                                <!---------------------CONTENT END------------------------------------------------------>
                        </div>



                </div>
                <!---------------------NEWS START------------------------------------------------------>
                <div class="col-sm-3">
                    <h3 class="column-title">News</h3>
                    
                </div>
                <!---------------------NEWS END------------------------------------------------------>
            </div>

        </div>
    </section>
<?php
        include "footer.php";
?>
<script src="socialLinkBuilder.js"></script> 
<script>
    $('.social').socialLinkBuilder({print: {
            isUsed: true
        },
        email: {
            isUsed: true,
            mailto: 'info@kitodeit.com'
        }});
</script>
<style>
.social svg {
  width: 15px;
  height: 15px;
  margin: 0 10px;
}
</style>


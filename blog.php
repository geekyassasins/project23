<?php 
        include "BLOG/config.php";
        include "BLOG/lib/connect.php";
        $type=1;
	include "function.php";
	if(isset($_GET["page"]))
	$page = (int)$_GET["page"];
	else
	$page = 1;
	$setLimit = 3;
	$pageLimit = ($page * $setLimit) - $setLimit;
        
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
                            <h3 class="column-title"> <img src="images/target_small.png" class=" title-symbol" alt="title symobol"> &nbsp;&nbsp;Blog </h3>
                                <!---------------------CONTENT START------------------------------------------------------>
<?php
    $sql=mysqli_query($conn,"select * from KitoDiet where isblog=".$type." order by blog_id desc LIMIT  ".$pageLimit." , ".$setLimit." ");

    $rows=mysqli_num_rows($sql);
    if($rows>0)
    {
    while($blog=mysqli_fetch_array($sql))
    {
?>
            <div class="well">
               <div class="media">
                  <a class="pull-left" href="#">
                  </a>
                  <div class="media-body">
                     <h4 class="media-heading text-left" style="color:black;font-size:20px;"><?php echo $blog['title']?></h4>
                     <p class="text-right">By Admin</p>
                     <p style="text-align: justify;text-justify: inter-word;"><?php echo $small = substr(strip_tags($blog['blog']), 0, 500);?>...<br><?php echo "<a href='blog-view.php?id=".encrypt_url($blog['blog_id'])."'>"?>Read More</a>
                     </p>
                     <ul class="list-inline list-unstyled text-left" style="color:black">
                        <li><span><i class="glyphicon glyphicon-calendar"></i> <?php echo date('d F, Y', strtotime($blog['create_date'])); ?> </span></li>
                     </ul>
                  </div>
               </div>
            </div><!-- -->
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
<?php
    }
    }
    else
    {
            echo"No Blog Present...";
    }

?>
                                
                                
              	<?php
	// Call the Pagination Function to load Pagination.
        //echo "".$sqldata['c_id'];
	    echo displayPaginationBelow($setLimit,$page,$type,$conn);
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

<style type="text/css">
.fadeInDown h2{
    border-bottom:4px solid transparent !important;
    font-size:24px !important;
}
	

	ul.setPaginate li.setPage{
	padding:15px 10px;
	font-size:14px;
	}

	ul.setPaginate{
	margin:0px;
	padding:0px;
	height:100%;
	overflow:hidden;
	font:12px 'Tahoma';
	list-style-type:none;	
	}  

	ul.setPaginate li.dot{padding: 3px 0;}

	ul.setPaginate li{
	float:left;
	margin:0px;
	padding:0px;
	margin-left:5px;
	}



	ul.setPaginate li a
	{
	background: none repeat scroll 0 0 #ffffff;
	border: 1px solid #cccccc;
	color: #999999;
	display: inline-block;
	font: 15px/25px Arial,Helvetica,sans-serif;
	margin: 5px 3px 0 0;
	padding: 0 5px;
	text-align: center;
	text-decoration: none;
	}	

	ul.setPaginate li a:hover,
	ul.setPaginate li a.current_page
	{
	background: none repeat scroll 0 0 #0d92e1;
	border: 1px solid #000000;
	color: #ffffff;
	text-decoration: none;
	}

	ul.setPaginate li a{
	color:black;
	display:block;
	text-decoration:none;
	padding:5px 8px;
	text-decoration: none;
	}




	</style> 


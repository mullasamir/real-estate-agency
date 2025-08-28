<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();

	
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}

///code								
?><!--Developed by Samir :@the_sam_sm -->
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
<!--Developed by Samir :@the_sam_sm -->
<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="apple-touch-icon" sizes="144x144" href="fonts/flaticon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="fonts/flaticon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="fonts/flaticon/favicon-16x16.png">
<link rel="manifest" href="fonts/flaticon/site.webmanifest">
<link rel="mask-icon" href="fonts/flaticon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">


<!--	Title
	=========================================================-->
<title>Real Estate Agency - Worker</title>
</head>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header One -->
        <!--	Header start  -->
		<?php include("include/header.php");?><!--Developed by Samir :@the_sam_sm -->
        <!--	Header end  -->

        <!--	Banner   --->
        <!-- <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Agent</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Agent</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
         <!--	Banner   --->


        <div class="full-row">
            <div class="container">
				<div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Workers</h2>
                        </div>
                </div>
                <div class="row">
                <!--Developed by Samir :@the_sam_sm -->
                    <?php 
							$query=mysqli_query($con,"SELECT * FROM user WHERE utype='worker'");
								while($row=mysqli_fetch_array($query))
								{
                            ?>
                            
                    <div class="col-md-6 col-lg-4">
                        <div class="hover-zoomer bg-white shadow-one mb-4">
                            <div class="overflow-hidden"> <img src="admin/user/<?php echo $row['6'];?>" alt="aimage" height="230px" width="180px"> </div>
                            <div class="py-3 text-center">
                             <h5 class="text-secondary hover-text-success"><a href="#">Name : <?php echo $row['1'];?></a></h5>
							 <h5 class="text-secondary hover-text-success"><a href="#">E-mail : <?php echo $row['2'];?></a></h5>
							 <h5 class="text-secondary hover-text-success"><a href="#">Phone : <?php echo $row['3'];?></a></h5>
                             <h5 class="text-secondary hover-text-success"><a href="#">Address : <?php echo $row['7'];?></a></h5>
                                <span>Real Estate - Worker</span> </div>
                        </div>
                    </div>
                   
                    <?php } ?>
                
                  
                </div>
            </div>
        </div>


        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->


        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 

<script src="js/custom.js"></script>
</body>

</html> 
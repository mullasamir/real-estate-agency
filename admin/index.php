<?php 
	session_start();
	include("config.php");
	$error="";
	if(isset($_POST['login']))
	{
		$user=$_REQUEST['user'];
		$pass=$_REQUEST['pass'];
		$pass= sha1($pass);
		
		if(!empty($user) && !empty($pass))
		{
			$query = "SELECT auser, apass FROM admin WHERE auser='$user' AND apass='$pass'";
			$result = mysqli_query($con,$query)or die(mysqli_error());
			$num_row = mysqli_num_rows($result);
			$row=mysqli_fetch_array($result);
			if( $num_row ==1 )
			{
				$_SESSION['auser']=$user;
				header("Location: dashboard.php");
			}
			else
			{
				$error='* Invalid User Name and Password';
			}
		}else{
			$error="* Please Fill all the Fileds!";
		}
		
	}   
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>ADMIN - Login</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="apple-touch-icon" sizes="144x144" href="../fonts/flaticon/android-chrome-144x144.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../fonts/flaticon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../fonts/flaticon/favicon-16x16.png">
		<link rel="manifest" href="../fonts/flaticon/site.webmanifest">
		<link rel="mask-icon" href="../fonts/flaticon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
    </head>
    <body class="bg-img">
	<style>
	.bg-img{
	
	background-image:url(upload/login-bg.jpg);
	background-position:center;
	background-size:cover;
	}
	</style>
	
		<!-- Main Wrapper -->
        <div class="page-wrappers login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox" style="background-color: rgba(0, 0, 0, .25);">
                        <div class="login-right">
							<div class="login-right-wrap">
							<center>
							<a href="../index.php"><img src="../images/logo/restatelg_white.png" style="margin-bottom:20px;"></a></center>
								<h1>Admin Login Panel</h1>
								<b><p class="account-subtitle">Access to our dashboard</p></b>
								<p style="color:red;"><?php echo $error; ?></p>
								<!-- Form -->
								<form method="post">
									<div class="form-group">
										<input class="form-control" name="user" type="text" placeholder="User Name">
									</div>
									<div class="form-group">
										<input class="form-control" type="password" name="pass" placeholder="Password">
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
									</div>
								</form>
								
																
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
    </body>

</html>
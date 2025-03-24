<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];


$sql="INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

$query = $dbh -> prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Mr.Perfect</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	<!-- Page Preloder -->
	

	<!-- Header Section -->
	<?php include 'include/header.php';?>
	<!-- Header Section end -->

	

	                                                                              
	<!-- Page top Section -->
	<section class="page-top-section set-bg" >
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>About Us!</h2>
					<p>Physical Activity Or Can Improve Your Health</p>
				</div>
			</div>
		</div>
	</section>



	<!-- Pricing Section -->
	<section class="pricing-section spad">
		<div class="container">
			<div class="about">
				<div class="acontainer">
					<div class="paragraph">
						<p>SAFE BODY BUILDING PROPER SOLUTIONS THAT SAVES VALUABLE TIME!</p>
						<h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab aliquid aut est. Hic cum dolor dolores sunt aliquam omnis, suscipit dignissimos. Esse omnis numquam ut reprehenderit ad quaerat dolore minima?</h3>
					</div>
				</div>
				<button class="button"><a href="login.php">BECOME A MEMBER</a></button>
				</div>
			</div>
	</section>
	

	<!-- Footer Section -->
	<?php include 'include/footer.php'; ?>
	<!-- Footer Section end -->

	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
	<style>
		.about {
			background-color: #000;
			height: auto;
			width: 100%;
			margin: auto;
			padding: 20px;
			text-align: left;
			display: flex;
			flex-wrap: wrap;
		}
		.acontainer .paragraph {
			float: left;
			color: #fff;
			width: 80%;
		}
		.acontainer .paragraph h1{
			color: #740000;
			font-size: 60px;
			margin:20px;
		}
		.acontainer .paragraph p{
			font-size: 40px;
			margin: 20px;
		}
		.acontainer .paragraph h3{
			font-size: 30px;
			margin: 20px;
		}
		.about .button{
			max-width: 200px;
			background: rgb(204,0,0);
			background: radial-gradient(circle, rgba(204,0,0,1) 0%, rgba(0,0,0,1) 100%);;
			color: #fff;
			border: 2px solid #fff;
			padding: 10px 10px;
			text-align: center;
			font-size: 16px;
			cursor: pointer;
			margin: 20px;
		}
		.about .button a{
			text-decoration: none;
			color: #fff;
		}
		@media only screen and (max-width: 900px) {
			.acontainer{
				width: 100%;
				background-size:530px 550px;
				height: 100vh;
			}
		}

	</style>
</html>

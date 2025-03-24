
<?php
session_start();
error_reporting(0);
require_once('include/config.php');
$msg = ""; 
if(isset($_POST['submit'])) {
  $email = trim($_POST['email']);
  $password = md5(($_POST['password']));
  if($email != "" && $password != "") {
    try {
      $query = "select id, fname, lname, email, mobile, password, address, create_date from tbluser where email=:email and password=:password";
      $stmt = $dbh->prepare($query);
      $stmt->bindParam('email', $email, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
        $_SESSION['uid']   = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['fname'];
       header("location: index.php");
      } else {
        $msg = "Invalid username and password!";
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
    $msg = "Both fields are required!";
  }
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Mr.Perfect</title>
	<meta charset="UTF-8">
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
					<h2>Login</h2>
					<p>Physical Activity Or Can Improve Your Health</p>
				</div>
			</div>
		</div>
	</section>



	<!-- Pricing Section -->
	<section class="pricing-section spad">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					
				</div>
				<div class="col-lg-6 col-sm-6">
				<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>Error</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
				
					<form class="singup-form contact-form" method="post">
						<h4 class="txt">Login to continue...</h4>
						<div class="row">
							<div class="col-md-12">
								<input type="text" name="email" id="email" placeholder="Your Email" autocomplete="off" required>
							</div>
							<div class="col-md-12">
								<input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
							</div>
						</div>
						<div class="row">
					<div class="col-md-6">
					<input type="submit" id="submit" name="submit" value="Login" class="site-btn sb-gradient">
					</div>
					<h6 style="margin-left:25px; color:#fff;">if you don't have account? <a href="registration.php">Create Account</a></h6>
				</div>
	
</form>
					
				</div>
				<div class="col-lg-3 col-sm-6">
					
				</div>
				
			</div>
		</div>
	</section>
	

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
	<style>
		.errorWrap, .succWrap{
			color: red;
			background-color: #fff;
			padding: 5px;
			margin-bottom: 20px;
		}
		.txt{
			margin: 20px auto;
			color: #fff;
		}
	</style>
	</body>
</html>

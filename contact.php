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
					<h2>Contact Us!</h2>
					<p>Physical Activity Or Can Improve Your Health</p>
				</div>
			</div>
		</div>
	</section>



	<!-- Pricing Section -->
	<section class="pricing-section spad">
	<article id="cont">
		<div class="contact">
			<div class="cont cont-detail">
				<h3>Meet Us</h3>
				<pre><span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
					<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
					<path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
				</svg></span>9361524859</pre>
				<pre><span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
					<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
					<path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
					<path d="M3 7l9 6l9 -6" />
				</svg></span>muthudmj2@gmail.com</pre>
				<pre><span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
					<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
					<path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
					<path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
				</svg></span> Ariyalur, Tamil Nadu-621704.</pre>
			</div>

			<div class="cont cont-form">
				<form action="#">
					<h3>Contact Me!</h3>
					<input type="text" name="name" id="name" placeholder="NAME">
					<input type="email" placeholder="EMAIL">
					<input type="tel" name="number" id="number" placeholder="Number">
					<button value="go">Send</button>
				</form>
			</div>
			<div class="cont cont-map">
			<h3>Map</h3>   
			<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10654.039684024996!2d79.08453191028542!3d11.139251391195247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baadfef14f0e1b9%3A0xb5867f842056f443!2sMr.Perfectfitnesstudio!5e0!3m2!1sen!2sin!4v1700169362337!5m2!1sen!2sin" width="315" height="270" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
		</article>
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
		
#cont{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
.contact{
    width: 90%;
    background-color: rgba(255, 255, 255, 0.2);
    color: #000;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    margin: 20px 60px 40px 60px;
}
.contact .cont{
    width: 325px;
    height: 350px;
    background:rgba(255, 255, 255, 0.3);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    color: #fff;
    border-radius: 5px;
    padding: 5px;
    margin: 20px;
}


.contact h3 {
    text-align: center;
    margin-bottom: 5px; 
    padding: 10px 25px; 
    font-size: 40px; 
    color: #000;/* Center the heading */
}

.contact pre {
    margin: 10px 0; /* Add some spacing between elements */
}

.contact .icon {
    vertical-align: middle; /* Align icons vertically */
    margin: 5px 20px; /* Add some spacing to the right of icons */
}

.contact span {
    display: inline-block; /* Ensure the icon and text are on the same line */
}


.contact .cont-form input {
    padding: 10px 25px;
    color: #bf0101;
    margin:10px;
    border: 1px solid #ccc;
    border-radius: 50px;
    font-size: 15px;
    width: 80%;
}
.contact .cont-form button{
    padding: 10px 0;
    background: rgb(204,0,0);
    background: radial-gradient(circle, rgba(204,0,0,1) 0%, rgba(0,0,0,1) 100%);;
    color: #fff;
    border: none;
    width: 40%;
    margin: 10px;
    font-size: 20px;
    border-radius: 50px;
    cursor: pointer;
}
.contact .cont-form button:hover{
    color: #000;
}

.contact .cont-map{
    width: 325px;
    height: 350px;
    background:rgba(255, 255, 255, 0.3);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    color: #fff;
    border-radius: 5px;
    padding: 5px;
    margin: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
.contact .cont-map .map{
    background:rgba(255, 255, 255, 0.3);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    color: #fff;
    border-radius: 5px;
}
	</style>
</html>

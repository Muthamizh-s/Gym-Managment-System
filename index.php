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
<body style="background-color:#000;">
	<!-- Page Preloder -->
	

	<!-- Header Section -->
	<?php include 'include/header.php';?>
	<!-- Header Section end -->

	

	                                                                              
	<!-- Page top Section -->
	<section class="page-top-section set-bg" >
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>Home</h2>
					<p>Physical Activity Or Can Improve Your Health</p>
				</div>
			</div>
		</div>
	</section>



	<!-- Pricing Section -->
	<section class="pricing-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Pricing plans</h2>
				<p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
			</div>
			<div class="row">
				        <?php 
                        $sql ="SELECT id, category, titlename, PackageType, PackageDuratiobn, Price, uploadphoto, Description, create_date from tbladdpackage";
                        $query= $dbh -> prepare($sql);
                        $query-> execute();
                        $results = $query -> fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query -> rowCount() > 0)
                        {
                        foreach($results as $result)
                        {
                        ?>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-item begginer">
						<div class="pi-top">
							<h4><?php echo $result->titlename;?></h4>
						</div>
						<div class="pi-price">
							<h3><?php echo htmlentities($result->Price);?></h3>
							<p>	<?php echo $result->PackageDuratiobn;?></p>
						</div>
						<ul>
							<?php echo $result->Description;?>
							
						</ul>
						<?php if(strlen($_SESSION['uid'])==0): ?>
						<a href="login.php" class="site-btn sb-line-gradient">Booking Now</a>
						<?php else :?>
							<!-- <a href="#" class="site-btn sb-line-gradient">Booking Now</a> -->
							 <form method='post'>
                            <input type='hidden' name='pid' value='<?php echo htmlentities($result->id);?>'>
                          

                        <input class='site-btn sb-line-gradient' type='submit' name='submit' value='Booking Now' onclick="return confirm('Do you really want to book this package.');"> 
                        </form> 
							 <?php endif;?>
					</div>
				</div>
				<?php  $cnt=$cnt+1; } } ?>
			</div>
		</div>
	</section>
	
	<section class="calculator">
	<div class="bmi">
    <div class="txt">
        <h2 style="color:#fff;">IT'S <span> GYM </span> TIME. LET'S GO WE ARE READY TO  <span>FIT YOU</span></h2>
        <button id="toggleButton">BMI Calculator</button>
    </div>

    <div class="bmi-container" id="myElement">
        <h1 style="color: #000; font-size:25px;">BMI Calculator</h1>
        <div>
            <label for="height">Height (cm):</label>
            <input type="number" id="height" placeholder="Enter your height" required>
        </div>
        <div>
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" placeholder="Enter your weight" required>
        </div>
        <button onclick="calculateBMI()">Calculate BMI</button>
        <div id="result"></div>
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
		body{
			font-family: 'lufga', sans-serif;
		}
		.calculator{
			background: rgb(204,0,0);
    		background: radial-gradient(circle, rgba(204,0,0,1) 0%, rgba(0,0,0,1) 100%);
		}
		#myElement {
    display: none;
  }
.bmi #toggleButton{
    padding: 10px 10px;
    background: rgb(204,0,0);
    background: radial-gradient(circle, rgba(204,0,0,1) 0%, rgba(0,0,0,1) 100%);;
    color: #fff;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    border: none;
    width: 50%;
    margin: 10px;
    font-size: 20px;
    border-radius: 5px;
    cursor: pointer
}
.bmi{
    height: 100vh;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
.bmi .txt{
    margin: 25px;
    padding: 10px;
    font-size: 30px;
    width: 30%;
    color: #fff;
}
.bmi .txt span{
    color: #000;
}
@media screen and (max-width: 600px) {
    .bmi{
        height: auto;
    }
    .bmi .txt{
        margin: 35px;
        width: auto;
        font-size: 30px;
        padding: 10px;
    }
    .bmi #toggleButton{
        margin: 10px;
        width: 100%;
    }

}

.bmi-container {
    display: none;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.4);
    margin: 10px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.bmi-container div {
    margin-bottom: 15px;
}

.bmi-container label {
    font-weight: bold;
}

.bmi-container input {
    padding: 10px 25px;
    color: #bf0101;
    margin:10px;
    border: 1px solid #ccc;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    border-radius: 5px;
    font-size: 15px;
    width: 80%;
}

.bmi-container button {
    padding: 10px 0;
    background: rgb(204,0,0);
    background: radial-gradient(circle, rgba(204,0,0,1) 0%, rgba(0,0,0,1) 100%);;
    color: #fff;
    border: none;
    width: 50%;
    margin: 10px;
    font-size: 20px;
    border-radius: 5px;
    cursor: pointer
}

.bmi-container #result {
    font-weight: bold;
    color: #000000;
    margin-top: 15px;
}

	</style>
	<script>
		
		function calculateBMI() {
    var height = parseFloat(document.getElementById('height').value);
    var weight = parseFloat(document.getElementById('weight').value);
    var resultElement = document.getElementById('result');
    var heightInputElement = document.getElementById('height');
    var weightInputElement = document.getElementById('weight');

    if (isNaN(height) || isNaN(weight) || height <= 0 || weight <= 0) {
        resultElement.innerText = 'Please enter valid values for height and weight.';
        return;
    }

    var bmi = weight / ((height / 100) * (height / 100));
    var bmiCategory;

    if (bmi < 18.5) {
        bmiCategory = 'Underweight';
    } else if (bmi < 24.9) {
        bmiCategory = 'Normal weight';
    } else if (bmi < 29.9) {
        bmiCategory = 'Overweight';
    } else {
        bmiCategory = 'Obese';
    }

    var resultText = `Your BMI is ${bmi.toFixed(2)} (${bmiCategory}).`;

    resultElement.innerText = resultText;

    var countdown = 15;

    // Display countdown in result
    var countdownInterval = setInterval(function () {
        resultElement.innerText = `${resultText}\nAuto-erasing in ${countdown} seconds.`;
        countdown--;

        if (countdown < 0) {
            clearInterval(countdownInterval);
            resultElement.innerText = ''; // Clear the result after countdown
        }
    }, 1000);

    // Auto-erase input details after 15 seconds
    setTimeout(function () {
        heightInputElement.value = '';
        weightInputElement.value = '';
    }, 16000);
}

document.getElementById('toggleButton').addEventListener('click', function () {
    var myElement = document.getElementById('myElement');
    if (myElement.style.display === 'none') {
        myElement.style.display = 'block';
    } else {
        myElement.style.display = 'none';
    }
});
	</script>
</html>

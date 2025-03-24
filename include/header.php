	<style>
		nav{
			box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
			background-color: rgba(0, 0, 0, 0.6);
			border-radius: 15px;
			padding: 10px;
		}
		nav ul { 
			display: flex;
			align-items: flex-end;
			justify-content: flex-end;
			padding: 0; 
			list-style: none; 
			text-align: center;
		}

		nav li { 
			display: table-cell;  
			padding: 15px 0;
		}
		nav a {
			color: #fff;
			font-family: 'Lufga';
			src: local('Lufga'), url('Lufga.woff') format('woff');
			/*font-family: 'GROUPE MEDIUM';
			src: local('GROUPE MEDIUM'), url('GroupeMedium-8MXgn.woff') format('woff');*/
			text-transform: uppercase;
			text-decoration: none;
			letter-spacing: 0.15em;
			display: inline-block;
			padding: 15px 20px;
			position: relative;
		}
		nav a:after {    
			background: none repeat scroll 0 0 transparent;
			bottom: 0;
			content: "";
			display: block;
			height: 2px;
			left: 50%;
			position: absolute;
			background: #fff;
			transition: width 0.3s ease 0s, left 0.3s ease 0s;
			width: 0;
		}
		nav a:hover{
			color: #bf0101;
		}
		nav a:hover:after { 
			width: 100%; 
			left: 0; 
		}
		nav  li:first-child:hover { 
			text-shadow: 5px 5px 15px rgba(255, 0, 0, 0.4), 0 0 20px rgba(255, 0, 0, 0.4), 0 0 30px rgba(255, 0, 0, 0.4);
		
		}
		nav li:first-child, b{
			margin-right: auto;
			display: flex;
			flex-wrap: wrap;
			color: #bf0101;
		}
		nav li:first-child span{
			margin-right: auto;
			display: flex;
			flex-wrap: wrap;
			font-size: 10px;
			color: #fff;
		}
		
	</style>
	<header class="header-section">
		<div class="header-top">
			<div class="row m-0">
				<div class="col-md-6 d-none d-md-block p-0">
					<div class="header-info">
						<i class="material-icons">map</i>
						<p>TRY-PBML Bypass Road.</p>
					</div>
					<div class="header-info">
						<i class="material-icons">phone</i>
						<p>(+91) 9361524859</p>
					</div>
				</div>
				<div class="col-md-6 text-left text-md-right p-0">
                 <?php if(strlen($_SESSION['uid'])==0): ?>
					<div class="header-info d-none d-md-inline-flex">
						<i class="material-icons">account_circle</i>
						<a href="admin/"><p>Admin</p></a>
					</div>
					<?php else :?>
					<div class="header-info d-none d-md-inline-flex">
						<i class="material-icons">account_circle</i>
						<a href="profile.php"><p>My Profile</p></a>
					</div>
					<div class="header-info d-none d-md-inline-flex">
						<i class="material-icons">brightness_7</i>
						<a href="changepassword.php"><p>Change Password</p></a>
					</div>
					<div class="header-info d-none d-md-inline-flex">
						<i class="material-icons">logout</i>
						<a href="logout.php"><p>Logout</p></a>
					</div>
					
					<?php endif;?>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<!-- <a href="index.php" class="site-logo" style="color:#fff; font-weight:bold; font-size:26px;">
				MrPerfect<br/>
				<small style="margin-top:-4%; font-size:18px;">Fitness Studio</small>
			</a>
			
			<div class="container">
				<ul class="main-menu">
					<li><a href="index.php" class="active">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					
					<?php if(strlen($_SESSION['uid'])==0): ?>
			<li><a href="admin/">Admin</a></li>
					<?php else :?>
						<li><a href="booking-history.php">Booking History</a></li>
						<?php endif;?>
				</ul>
			</div> -->
			<nav>
				<ul>
					<li><a href="index.php" class="logo"><b>Mr.Perfect</b><span>Fitnessstudio</span></a></li>
					<li><a href="index.php" class="active">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<?php if(strlen($_SESSION['uid'])==0): ?>
					<li><a href="login.php">Login</a></li>
					<?php else :?>
						<li><a href="booking-history.php">Booking History</a></li>
						<li><a href="https://cosmofeed.com/vp/65d3da8767e67d0013c83471">Payment</a></li>
						<?php endif;?>
				</ul>
			</nav>
		</div>
	</header>
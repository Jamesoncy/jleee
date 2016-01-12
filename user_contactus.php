<?php
require_once("include/auth.php");
 ?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>We want to hear from you <?php echo $_SESSION['name']; ?></title>
<link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|" rel="stylesheet" type="text/css">
		<link href="html/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="html/style.css">
		
<script type="text/javascript">
$.validator.setDefaults({
	//submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {	
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			content: "required"
		},
		messages: {
			email: "Please enter a valid email address",
			content: "Don't leave this area Empty"
				}
	});
});
</script>
<style type="text/css">
#signupForm { width: 670px; }
#signupForm label.error {
	margin-left: 5px;
	width: auto;
	font-size:10PX;
	display: inline;
	color:#FF0000;
}
</style>
</head>


	<body>
		
		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="html/images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">JLEEM Realty</h1>
							<small class="site-description">A Home is Where your Heart is</small>
						</div>
					</a> <!-- #branding -->

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item "><a href="user_index.php">Home</a></li>
							<li class="menu-item"><a href="user_updates.php">Location Map</a></li>
							<li class="menu-item"><a href="user_modelhouses.php">Model Houses</a></li>
							<li class="menu-item"><a href="requirements.php">Requirements</a></li>
							<li class="menu-item current-menu-item"><a href="user_contactus.php">Contact</a></li>
							<li class="menu-item"><a href="user.php">My Reservation</a></li>
							<li class="menu-item"><a href="userlogout.php">Logout</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</div> <!-- .site-header -->

	<main class="main-content">
				
				<div class="page">
					<div class="container">
						<a href="user_modelhouses.php" class="button-back"><img src="html/images/arrow-back.png" alt="" class="icon">Back to the projects</a>

						<div class="row">
							<div class="col-md-8">
								<div class="map"></div>

								<div class="contact-detail">
									<address>
										<div class="contact-icon">
											<img src="html/images/icon-marker.png" class="icon">
										</div>
										<p><strong>JLEEM Realty</strong> <br>1B233, L25, St. Anne Deca Homes <br>Loma de Gato Marilao Bulacan</p>
									</address>
									<a href="#" class="phone"><span class="contact-icon"><img src="html/images/icon-phone.png" class="icon"></span>  +(034)709-14-86</a>
									<a href="#" class="email"><span class="contact-icon"><img src="html/images/icon-envelope.png" class="icon"></span> violetaespano@yahoo.com</a>
								</div>
							</div>
							<div class="col-md-3 col-md-offset-1">
								<div class="contact-form">
									<h2 class="section-title">Write us</h2>
									<p>What's in your mind?</p>

									<form action="#">
										<input type="text" placeholder="Your name..">
										<input type="text" placeholder="Email..">
										<textarea placeholder="Message..."></textarea>
										<p class="text-right">
											<button type="submit">Send message</button>
										</p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .page -->

			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="pull-left">

						<address>
							<strong>JLEEM Realty</strong>
							<p>1B233, L25, St. Anne Deca Homes
									Loma de Gato
									Marilao Bulacan</p>
						</address>

						<a href="#" class="phone">+(034)709-14-86</a>
					</div> <!-- .pull-left -->
					<div class="pull-right">

						<div class="social-links">

							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>

						</div>

					</div> <!-- .pull-right -->

					
				</div> <!-- .container -->
			</footer> <!-- .site-footer -->
		</div>

		<script src="html/js/jquery-1.11.1.min.js"></script>
		<script src="html/js/plugins.js"></script>
		<script src="html/js/app.js"></script>
			<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
	</body>

</html>

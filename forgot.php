<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['id']);
	unset($_SESSION['firstname']);
	unset($_SESSION['lastname']);
?>

<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
	  
		  <link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />


      <title>Forgot Password</title>
   <link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|" rel="stylesheet" type="text/css">
		<link href="html/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="html/style.css">

		
		
<script src="js/jquery.validate.js" type="text/javascript"></script>

<script type="text/javascript">
$.validator.setDefaults({
	//submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {	
	// validate signup form on keyup and submit
	$("#signupForm").validate({			
		rules: {
			email: "required"
			},
		messages: {
		email: "Please enter a valid email address"		
		}
	});
});
</script>
<style type="text/css">
#signupForm { margin:0 auto }
#signupForm label.error {
	width: auto;
	font-size:10PX;
	display:list-item;
	/*display: inline;*/
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
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item "><a href="update.php">Location Map</a></li>
							<li class="menu-item "><a href="profile.php">Profile</a></li>
							<li class="menu-item "><a href="modelhouse.php">Model Houses</a></li>
							<li class="menu-item "><a href="contactus.php">Contact</a></li>
							<li class="menu-item current-menu-item"><a href="userlogin.php">Customer Login</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</div> <!-- .site-header -->

<div class="content">
<br />
<form action="forgotpass.php" method="post"  id="signupForm">
  <table width="428" height="140" border="0" align="center"> 
    <tr>
      <td width="146">Email Address </td>
      <td width="272"><input type="text" name="email" id="email" class="input" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center"><input type="submit" name="register" value="Send Password to my Email"  class="btn"/></td>
    </tr>
  </table>
</form>
<div style="clear:both"></div>
</div>

<div style="clear:both"></div>
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
</div>
</body>
</html>


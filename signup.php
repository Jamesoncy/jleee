<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>JLEEM REALTY</title>
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
			bday: "required",
			name: "required",
			username: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				minlength: 6
			},
			confirm_password: {
				required: true,
				minlength: 6,
				equalTo: "#password"
			},
			confirm_email: {
				required: true,
				minlength: 6,
				equalTo: "#email"
			},
			email: {
				required: true,
				email: true
			},
			address: {
				required: true
			},
			agree: "required"
			},
			content: {
			 	 required:true,
				 content: true
		},
		messages: {
			bday: "Please enter date of birth (numbers only)",
			name: "Please enter your Complete Name",
			username: {
				required: "Please enter a username",
				minlength: "Your username must consist of at least 6 characters"
			},
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 6 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 6 characters long",
				equalTo: "Please enter the same password as above"
			},
			confirm_email: {
				required: "Please provide a valid Email Address",
				equalTo: "Please enter the same Email Address as above"
			},
			email: "Please enter a valid email address",
			address: "Please enter your address"
		}
	});
});
</script>
<style type="text/css">
#signupForm { width: 100%; margin:0 auto }
#signupForm label.error {
	margin-left: 40px;
	width: auto;
	font-size:10PX;
	display: inline;
	color:#FF0000;
}
</style>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
<script>
  $(function() {
    $("#datepicker").datepicker();
  });
  </script>
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
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="update.php">Location Map</a></li>
							<li class="menu-item"><a href="profile.php">Profile</a></li>
							<li class="menu-item"><a href="modelhouse.php">Model Houses</a></li>
							<li class="menu-item"><a href="contactus.php">Contact</a></li>
							<li class="menu-item"><a href="userlogin.php">Customer Login</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</div> <!-- .site-header -->
			
			
<div class="content">
  <div class="content1"><br />
<form action="register.php" method="post" id="signupForm">
<table width="748" height="314" border="0" align="center">
  <tr>
    <td width="212">First Name: </td>
    <td width="526"><input type="text" name="name" class="input" id="name" style=" text-transform:capitalize"/></td>
  </tr>
  <tr>
    <td width="212">Last Name: </td>
    <td width="526"><input type="text" name="name" class="input" id="name" style=" text-transform:capitalize"/></td>
  </tr>
    <tr>
      <td>Date of Birth</td>
	  <td><input type="text" name="bday" id="datepicker" class="input" onkeypress="return isNumberKey(event)" /></td>
    <tr>
    <td>Gender </td>
    <td><select name="gender" id="gender" class="input">
	<option> Select Gender</option>
	<option> Male</option>
	<option> Female</option>
	</select></td>
  </tr>
  <tr>
    <td>Complete Address</td>
    <td><input type="text" name="address" class="input" /></td>
  </tr>
  <tr>
    <td>Email Address *</td>
    <td><input type="text" name="email" id="email" class="input" /></td>
  </tr>
  <tr>
    <td>Confirm Email Address</td>
    <td><input type="text" name="confirm_email" id="confirm_email" class="input" /></td>
  </tr>
  <tr>
    <td>Password *</td>
    <td><input type="password" name="password" id="password" class="input" /></td>
  </tr>
  <tr>
    <td>Confrim Password </td>
    <td><input type="password" name="confirm_password" id="confirm_password" class="input" /></td>
  </tr>
  <tr>
    <td height="5"></td>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="register" value="register"  class="btn1"/></td>
  </tr>
</table>
</form>
<div align="center">
  <?php 
	  if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<font color="red"><br><br>',$msg,'</font></br>'; 
		}
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
  <br />
<br /></div>
</div>

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
		
	</body>

</html>
</html>


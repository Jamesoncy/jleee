<?php 
session_start();
include("include/dbconnection.php"); ?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Requirements of <?php echo $_SESSION['name']; ?></title>
<link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|" rel="stylesheet" type="text/css">
		<link href="html/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="html/style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

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
							<li class="menu-item current-menu-item"><a href="requirements.php">Requirements</a></li>
							<li class="menu-item"><a href="user_contactus.php">Contact</a></li>
							<li class="menu-item"><a href="user.php">My Reservation</a></li>
							<li class="menu-item"><a href="userlogout.php">Logout</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</div> <!-- .site-header -->
			
			
			
			
			
<div class="content">
  <div class="req" align="center"> <br />
 <a href="uploadtinno.php"><img src="img/tin.png"/></a>
	<?php	
  $result = mysql_query("SELECT * FROM `tincard` WHERE email='".$_SESSION['email'] ."' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$tincard = MYSQL_RESULT($result,$i,"filename");						
	echo '<img src="img/check.png" alt="Unable to View" >';
		}
	?>
 <br /><br />
 <a href="upload2x2.php" ><img src="img/2x2.png"/></a>
 	<?php	
  $result = mysql_query("SELECT * FROM `picture` WHERE email='".$_SESSION['email'] ."' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$pix = MYSQL_RESULT($result,$i,"filename");						
	
	echo '<img src="img/check.png" alt="Unable to View" >';
		}
	?>

 <br /><br />
 <a href="cedula.php"><img src="img/comtax.png"/></a>
 	<?php	
  $result = mysql_query("SELECT * FROM `cedula` WHERE email='".$_SESSION['email'] ."' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$cedula = MYSQL_RESULT($result,$i,"filename");						
	
	echo '<img src="img/check.png" alt="Unable to View" >';
		}
	?>

 <br /><br />
 <a href="billingstat.php"><img src="img/bill.png"/></a>
  	<?php	
  $result = mysql_query("SELECT * FROM `billingstatement` WHERE email='".$_SESSION['email'] ."' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$bill = MYSQL_RESULT($result,$i,"filename");						
	
	echo '<img src="img/check.png" alt="Unable to View" >';
		}
	?>

 <br /><br />
 <a href="validid.php"><img src="img/id.png"/></a>
   	<?php	
  $result = mysql_query("SELECT * FROM `validid` WHERE email='".$_SESSION['email'] ."' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$validid = MYSQL_RESULT($result,$i,"filename");						
	
	echo '<img src="img/check.png" alt="Unable to View" >';
		}
	?>

 <br /><br />
 <a href="birth_marriage.php"><img src="img/marriage.png"/></a>
   	<?php	
  $result = mysql_query("SELECT * FROM `birth_marriage` WHERE email='".$_SESSION['email'] ."' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$marriage = MYSQL_RESULT($result,$i,"filename");						
	
	echo '<img src="img/check.png" alt="Unable to View" >';
		}
	?>

 <br /><br />
 <a href="birthcert.php"><img src="img/birth.png"/></a>
   	<?php	
  $result = mysql_query("SELECT * FROM `birthcert` WHERE email='".$_SESSION['email'] ."' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$birth = MYSQL_RESULT($result,$i,"filename");						
	
	echo '<img src="img/check.png" alt="Unable to View" >';
		}
	?>


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
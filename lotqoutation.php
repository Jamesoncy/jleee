<?php 
session_start();
include("include/dbconnection.php"); ?>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
	  
		  <link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />


      <title>Location Map</title>
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
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item current-menu-item"><a href="update.php">Location Map</a></li>
							<li class="menu-item"><a href="profile.php">Profile</a></li>
							<li class="menu-item"><a href="modelhouse.php">Model Houses</a></li>
							<li class="menu-item"><a href="contactus.php">Contact</a></li>
							<li class="menu-item"><a href="userlogin.php">Customer Login</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</div> <!-- .site-header -->
			<center>

	<?php require("include/dbconnection.php") ?>
	<?php	

	$lotid =$_GET['lotid'];	
	$result = mysql_query("SELECT * from `lot` WHERE lot_id = '$lotid' ");     
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	
	If ($numberOfRows == 0) 
		{
		//echo 'Sorry No Record Found!';
		}
	else if ($numberOfRows > 0) 
		{
		$i=0;
		
			$lotid = MYSQL_RESULT($result,$i,"lot_id");	
			$subname = MYSQL_RESULT($result,$i,"subdname");
			$phase = MYSQL_RESULT($result,$i,"phase");
			$block = MYSQL_RESULT($result,$i,"block");	
			$lotno = MYSQL_RESULT($result,$i,"lotno");	
			$lotarea = MYSQL_RESULT($result,$i,"lotarea");
			$price = MYSQL_RESULT($result,$i,"price");
			$status = MYSQL_RESULT($result,$i,"lotstatus");	
		}
		
	?>
	<div class="search1"><img src="img/signage.png" height="210" width="245" style="margin-top:10PX; margin-left:10px; margin-bottom:10px;"/></div>
	<br /><br />
	<div class="searchresult1">
	Subdivision Name: &nbsp;<strong><?php echo $subname; ?></strong><br />
	phase Number:&nbsp; <strong><?php echo $phase; ?></strong><br />
	Block Number:&nbsp; <strong><?php echo $block; ?></strong><br />
	Lot Number:&nbsp;<strong><?php echo $lotno; ?></strong><br />
	Lot Area: &nbsp;<strong><?php echo $lotarea; ?></strong><br />
	Price/sq.m: &nbsp;Php &nbsp;<strong><?php echo  number_format($price,2); ?></strong><br />
	<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$subname.'">';
	echo '<input type="hidden" name="phase" value="'.$phase.'">';
	echo '<input type="hidden" name="block" value="'.$block.'">';
	echo '<input type="hidden" name="lotno" value="'.$lotno.'">';
	echo '<input type="hidden" name="lotarea" value="'.$lotarea.'">';
	echo '<input type="hidden" name="price" value="'.$price.'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation...Select Another Lot...</font>';
	echo '<br><br><h8><marquee behavior="alternate">See Available Lot Suggestions Below</marquee></h8>';
	}
	 
	?>
<br />
  </div>
	<br /><br />
	<br /><br /><br /><br /><br />
	
	<div  class="insideleft">
	<?php 
	
	
	require("include/dbconnection.php");
		$avail='Available';
$result = mysql_query("SELECT * FROM lot WHERE phase='$phase' and lotstatus='$avail' ORDER BY RAND() LIMIT 2");
while($row = mysql_fetch_array($result))
		  {
	if ($status!="Available"){
	echo '<div class="search2"><img src="img/signage.png" height="150" width="`150" style="margin-top:10PX; margin-left:10px; margin-bottom:10px;"/>';
	echo '<div class="searchresult2">';
	echo 'Subdivision Name:'.$row['subdname'].'<br>';
	echo 'Phase Number:'.$row['phase'].'<br>';
	echo 'Block Number:'.$row['block'].'<br>';
	echo 'Lot Number:'.$row['lotno'].'<br>';
	echo 'Lot Area:'.$row['lotarea'].'<br>';
	echo 'Price sq.m:'.number_format($row['price'],2).'<br>';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$subname.'">';
	echo '<input type="hidden" name="phase" value="'.$phase.'">';
	echo '<input type="hidden" name="block" value="'.$block.'">';
	echo '<input type="hidden" name="lotno" value="'.$lotno.'">';
	echo '<input type="hidden" name="lotarea" value="'.$lotarea.'">';
	echo '<input type="hidden" name="price" value="'.number_format($price,2).'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div><br></div><br /><br />';
	}
	}
	?>
</div>
<div class="insideright">	
	<?php 
	require("include/dbconnection.php");
	$avail='Available';
$result = mysql_query("SELECT * FROM lot WHERE phase='$phase' and lotstatus='$avail' ORDER BY RAND() LIMIT 2");
while($row = mysql_fetch_array($result))
		  {
	if ($status!="Available"){
	echo '<div class="search2"><img src="img/signage.png" height="150" width="`150" style="margin-top:10PX; margin-left:10px; margin-bottom:10px;"/>';
	echo '<div class="searchresult2">';
	echo 'Subdivision Name:'.$row['subdname'].'<br>';
	echo 'Phase Number:'.$row['phase'].'<br>';
	echo 'Block Number:'.$row['block'].'<br>';
	echo 'Lot Number:'.$row['lotno'].'<br>';
	echo 'Lot Area:'.$row['lotarea'].'<br>';
	echo 'Price sq.m:'.number_format($row['price'],2).'<br>';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$subname.'">';
	echo '<input type="hidden" name="phase" value="'.$phase.'">';
	echo '<input type="hidden" name="block" value="'.$block.'">';
	echo '<input type="hidden" name="lotno" value="'.$lotno.'">';
	echo '<input type="hidden" name="lotarea" value="'.$lotarea.'">';
	echo '<input type="hidden" name="price" value="'.number_format($price,2).'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div><br></div><br /><br />';
	}
	}
	?>	</div>
	<div style="clear:both"></div>
<div align="center">
*Note:<br />
Price may change without prior notice
</div></center>
<div align="center"></div>
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

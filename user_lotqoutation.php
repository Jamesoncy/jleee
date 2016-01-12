<?php session_start(); ?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>JLEEM Realty <?php echo $_SESSION['name']; ?></title>
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
		<center>
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
							<li class="menu-item current-menu-item "><a href="user_index.php">Home</a></li>
							<li class="menu-item"><a href="user_updates.php">Location Map</a></li>
							<li class="menu-item"><a href="user_modelhouses.php">Model Houses</a></li>
							<li class="menu-item"><a href="requirements.php">Requirements</a></li>
							<li class="menu-item"><a href="user_contactus.php">Contact</a></li>
							<li class="menu-item"><a href="userlogout.php">Logout</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</div> <!-- .site-header -->
<div class="content"><br /> 


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
	
	
		<?php			
			if( isset($_GET['status']) && $_GET['status'] == 0 ){
				echo '<br><div style="dsplay:block;text-align:center;font-size:18px;color:red;"><p>You Already reached maximum reservation.</p></div>';
			}
			else{
		?>
	<div class="search1"><img src="img/signage.png" height="210" width="245" style="margin-top:10PX; margin-left:10px; margin-bottom:10px;"/></div>
	<br /><br />
	<div class="searchresult1">
	Subdivision Name: &nbsp; <?php echo $subname; ?><br />
	phase Number:&nbsp; <?php echo $phase; ?><br />
	Block Number:&nbsp; <?php echo $block; ?><br />
	Lot Number:&nbsp; <?php echo $lotno; ?><br />
	Lot Area: &nbsp; <?php echo $lotarea; ?><br />
	Price/sq.m: &nbsp;Php &nbsp;<?php echo $price; ?><br />
	<form action="user_directreservation.php" method="post">
	<input type="hidden" name="subname"  value="<?php echo $subname; ?>"/>
	<input type="hidden" name="phase"  value="<?php echo $phase; ?>"/>
	<input type="hidden" name="block"  value="<?php echo $block; ?>"/>
	<input type="hidden" name="lotno"  value="<?php echo $lotno; ?>"/>
	<input type="hidden" name="lotarea"  value="<?php echo $lotarea; ?>"/>
	<input type="hidden" name="price"  value="<?php echo $price; ?>"/>	
	<input type="submit" name="direct" value="Reserve Now" />
	</form>
	<FORM METHOD="post" ACTION="Locationmap.php">
			<INPUT TYPE="submit" VALUE="Find Location">
</FORM>
	<br />
  </div>
	<br /><br />
	<br /><br /><br /><br />
*Note:<br />
Price may change without prior notice
</center>
	
<?php
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
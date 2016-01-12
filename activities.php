<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Company Activities</title>
<link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|" rel="stylesheet" type="text/css">
		<link href="html/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="html/style.css">
<!--
lightbox
<script type="text/javascript" src="css/js/prototype.js"></script>
<script type="text/javascript" src="css/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="css/js/lightbox.js"></script>

<link href="css/css/lightbox.css" rel="stylesheet" type="text/css" />-->

<script type="text/javascript" src="highslide/highslide-full.js" ></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css"/>
<script type="text/javascript">
	hs.graphicsDir = '../highslide/graphics/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.outlineType = 'rounded-white';
	hs.fadeInOut = true;
	hs.dimmingOpacity = 0.75;

	// define the restraining box
	hs.useBox = true;
	hs.width = 640;
	hs.height = 480;

	// Add the controlbar
	hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 5000,
		repeat: false,
		useControls: true,
		fixedControls: 'fit',
		overlayOptions: {
			opacity: 1,
			position: 'bottom center',
			hideOnMouseOut: true
		}
	});
</script>
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
			
			

        <h1><u>Activities</u></h1>
        <?php 
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM activity  ORDER BY datemake")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<h1><a href=activities.php?activityid='.$row['activity_id'].'>'.$row['activity_name'] . '</a></h1>'; 
        } 
?>
      
    </div>
    
  </div>
<br /></center>
<div class="insidecontent">
	<?php	
include("include/dbconnection.php");
$activityid =$_GET['activityid'];
	$result = mysql_query("SELECT * from `activitylist` WHERE activity_id = '$activityid' ");     
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
		
			$name = MYSQL_RESULT($result,$i,"activity_name");
		}			
	?>				

<?php 
include("include/dbconnection.php");
$activityid =$_GET['activityid'];
$result = mysql_query("SELECT * FROM activitylist WHERE activity_id='$activityid'  ORDER BY dateuploaded DESC");


while($row = mysql_fetch_array($result))
  {
	echo "<a href='" . $row["filename"] . "' class='highslide' onclick='return hs.expand(this)'>";
	echo "<img src='" . $row["filename"] . "' width=150 height=150>";
  //echo "<a href='" . $row["filename"] . "' rel='lightbox[roadtrip]'><img style='margin-right:7px;margin-bottom:20px;' width=150 height=150 alt='Unable to View'  src='" . $row["filename"] . "'></a>";
 
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

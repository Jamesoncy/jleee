<?php
require_once("include/auth.php");
require_once("dbconn.php");


$stmt = $conn->prepare("SELECT * FROM reserve WHERE user_id=? AND Rstatus = 'Sold'");
$stmt->execute(array($_SESSION['id']));
$bool = false;
$rs = $stmt->fetch();
if($rs){
	$bool = true;
}

$stmt1 = $conn->prepare("SELECT count(*) as xcount FROM payment_history WHERE user_id = ? AND reserveid = ?");
$stmt1->execute(array($rs['user_id'],$rs['reserveid']));

$rs1 = $stmt1->fetch();

$allowedPay = true;

$remainingMonths = ($rs['terms']*12) - $rs1['xcount'];
$remainingYear = (int)($remainingMonths/12);
$comMOnth =  $remainingMonths - ($remainingYear*12);

if($rs1['xcount'] >= ($rs['terms']*12)){
	$allowedPay = false;
}

?>

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
		<main class="main-content">
				<div class="fullwidth-block latest-projects-section">
					<div class="container">
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
							<li class="menu-item  "><a href="user_index.php">Home</a></li>
							<li class="menu-item"><a href="user_updates.php">Location Map</a></li>
							<li class="menu-item"><a href="user_modelhouses.php">Model Houses</a></li>
							<li class="menu-item"><a href="requirements.php">Requirements</a></li>
							<li class="menu-item"><a href="user_contactus.php">Contact</a></li>
							<li class="menu-item current-menu-item"><a href="user.php">My Property</a></li>
							<li class="menu-item"><a href="userlogout.php">Logout</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</div> <!-- .site-header -->


<?php
mysql_connect('localhost','root','');
mysql_select_db ('reservation');
$userid = $_SESSION['id'];
$sql="SELECT * FROM reserve WHERE user_id='$userid' ";
$records = mysql_query($sql);
?>

<html>

<head>
<title> User Profile </title>
</head>

<?php
$host_name = "localhost";
$database = "reservation"; // Change your database name
$username = "root"; // Your database user id 
$password = ""; // Your password

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?>
<div class="col-md-12">
<h2 class="section-title">My Property</h2>
<ul class="news">
<li>
<?php 

while ($user=mysql_fetch_assoc($records)){
	if ($user['Rstatus'] == 'Sold'){

	echo "<div><h1> Name : ".$user['buyer']."</h1></div>";
	echo "<div><h1> Reserve ID : ".$user['reserveid']."</div>";
	echo "<div><h1> Subdivision Name :".$user['subname']."</div>";
	echo "<div><h1> Phase No. : ".$user['phase']."</div>";
	echo "<div><h1> Block No. : ".$user['block']."</div>";
	echo "<div><h1> Lot No. : ".$user['lotno']."</div>";
	echo "<div><h1> Area : ".$user['area']."</div>";
	echo "<div><h1> Price : ".$user['price']."</div>";
	echo "<div><h1> Terms of Payment (Years) : ".$user['terms']."</div>";
	echo "<div><h1> Downpayment : ".$user['downpayment']."</div>";
	echo "<div><h1> Start Date for Payment : ".$user['start_date']."</div>";
	echo "<div><h1> Total Monthly Amortization : ".$user['total_amort']."</div>";
	echo "<div><h1> Status : ".$user['Rstatus']."</div>";

	
}


	
}//end while




?>

<?php 

while ($user=mysql_fetch_assoc($records)){
	if ($user['Rstatus'] == 'Reserved'){

	echo "<div><h1> Name : ".$user['buyer']."</h1></div>";
	echo "<div><h1> Reserve ID : ".$user['reserveid']."</div>";
	echo "<div><h1> Subdivision Name :".$user['subname']."</div>";
	echo "<div><h1> Phase No. : ".$user['phase']."</div>";
	echo "<div><h1> Block No. : ".$user['block']."</div>";
	echo "<div><h1> Lot No. : ".$user['lotno']."</div>";
	echo "<div><h1> Area : ".$user['area']."</div>";
	echo "<div><h1> Price : ".$user['price']."</div>";
	echo "<div><h1> Terms of Payment (Years) : ".$user['terms']."</div>";
	echo "<div><h1> Downpayment : ".$user['downpayment']."</div>";
	echo "<div><h1> Start Date for Payment : ".$user['start_date']."</div>";
	echo "<div><h1> Total Monthly Amortization : ".$user['total_amort']."</div>";
	echo "<div><h1> Status : ".$user['Rstatus']."</div>";

	
}


	
}//end while




?>

<?php 

while ($user=mysql_fetch_assoc($records)){
	if ($user['Rstatus'] == 'Temporarily Reserved'){

	echo "<div><h1> Name : ".$user['buyer']."</h1></div>";
	echo "<div><h1> Reserve ID : ".$user['reserveid']."</div>";
	echo "<div><h1> Subdivision Name :".$user['subname']."</div>";
	echo "<div><h1> Phase No. : ".$user['phase']."</div>";
	echo "<div><h1> Block No. : ".$user['block']."</div>";
	echo "<div><h1> Lot No. : ".$user['lotno']."</div>";
	echo "<div><h1> Area : ".$user['area']."</div>";
	echo "<div><h1> Price : ".$user['price']."</div>";
	echo "<div><h1> Terms of Payment (Years) : ".$user['terms']."</div>";
	echo "<div><h1> Downpayment : ".$user['downpayment']."</div>";
	echo "<div><h1> Start Date for Payment : ".$user['start_date']."</div>";
	echo "<div><h1> Total Monthly Amortization : ".$user['total_amort']."</div>";
	echo "<div><h1> Status : ".$user['Rstatus']."</div>";

	
}


	
}//end while




?>

</li>
</ul>
</div>

<?php if($bool && $allowedPay){
	echo '<div style="dsplay:block;text-align:center;font-size:18px;"><p>Remaining Year(s) : '.$remainingYear.' -- Month(s) : '.$comMOnth.' </p></div>';
	?>
<form class="paypal" action="payments.php" method="post" id="paypal_form" target="_blank">
		<input type="hidden" name="cmd" value="_xclick" />
		<input type="hidden" name="no_note" value="1" />
		<input type="hidden" name="lc" value="PHP" />
		<input type="hidden" name="currency_code" value="PHP" />
		<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
		<input type="hidden" name="first_name" value="Customer's First Name"  />
		<input type="hidden" name="last_name" value="Customer's Last Name"  />
		<input type="hidden" name="payer_email" value="customer@example.com"  />
		<input type="hidden" name="item_number" value="Amortization" / >
		<input type="submit" name="submit" value="Submit Payment for Amortization"/>
	</form>
<?php }else { echo '<br><div  class="col-md-12" style="dsplay:block;text-align:center;font-size:18px;color:red;"><p>You don\'t have any reservation.</p></div>'; } ?>
				<div class="container col-md-12">
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
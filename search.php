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

				<br>
				<br>
				<br>
		    <div id="first-block">
            <div class="line">
  <form action="search.php" method="post">
<center>  <h1>Property Finder:</h1> </center>
				<center>
				<select name="range" style="width:200px" class="input">
                  <option>Select Price Range</option>
				  <option value="1">Php 100,000 - Php 200,000</option>
				  <option value="2">Php 200,000 - Php 300,000</option>
				  <option value="3">Php 300,000 - Php 400,000</option>
				  <option value="4">Php 400,000 - Php 500,000</option>
				  <option value="5">Php 500,000 - Php 600,000</option>
				  <option value="6">Php 600,000 - Php 700,000</option>
				  <option value="7">Php 700,000 - Php 800,000</option>
				  <option value="8">Php 800,000 - Php 900,000</option>
				  <option value="9">Php 900,000 - Php 1M</option>
				  <option value="10">Php 1M - Above</option>
                </select>
				<br />
                  <br />
                  <select name="category" style="width:200px" class="input">
                    <option>Select Category </option>
                    <option value="house">House</option>
                    <option value="lot">Lot</option>
                  </select>		  
               
                  <span class="search"></span><br />
                  <input type="submit" name="search" value="Search"  class="btn"/>
		  </center>
      </form><br><br /></div>
	  <a href="signup.php"><br />
    </a>
	<br />
	<br />
<div class="insidecontent"><br/>

<?php
	require ("include/dbconnection.php");
		$range=$_POST['range'];
	if (isset($_POST['search'])){
		if ($range=="Select Price Range"){
			echo "<font size=4 color=red>Select Price Range and Category First to Proceed!!!</font>"; 
			}
		else if ($_POST['range']=="Select Category") {
			echo "<font size=4 color=red>Select Price Range and Category First to Proceed!!!</font>"; 
			}
		}
		
	if ($_POST['category']=="house" and $range=='1') {
$result = mysql_query("SELECT * FROM house WHERE costprice<200000 and costprice>=100000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search"><center><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['costprice'],2); ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div></h6>
	</div>
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 2ndhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='2') {
$result = mysql_query("SELECT * FROM house WHERE costprice<300000 and costprice>=200000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="search">	
		<div class="col-md-12"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 3rdhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='3') {
$result = mysql_query("SELECT * FROM house WHERE costprice<400000 and costprice>=300000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
		<div class="col-md-12"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 4thhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='4') {
$result = mysql_query("SELECT * FROM house WHERE costprice<500000 and costprice>=400000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 5thhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='5') {
$result = mysql_query("SELECT * FROM house WHERE costprice<600000 and costprice>=500000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 6thhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='6') {
$result = mysql_query("SELECT * FROM house WHERE costprice<700000 and costprice>=600000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 7thhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='7') {
$result = mysql_query("SELECT * FROM house WHERE costprice<800000 and costprice>=700000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 8thhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='8') {
$result = mysql_query("SELECT * FROM house WHERE costprice<900000 and costprice>=800000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 9thhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='9') {
$result = mysql_query("SELECT * FROM house WHERE costprice<1000000 and costprice>=900000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 10thhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='10') {
$result = mysql_query("SELECT * FROM house WHERE costprice>=1000000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult">
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>



<!-- 1st-->
<?php
	if ($_REQUEST['category']=="lot" and $range=="1" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<200000 and tcp>=100000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
<!--	    <a href="update.php"><img src="img/signage.png" alt='Unable to View' width=180 height=150 border="0" style='margin-left: 17px; margin-top: 27px;' /></a>
-->	    <div class="searchresult">
<h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
	    echo '<a href="phase1A.php"></a>';
	}
	else if ($row['phase']=="1-B"){
	    echo '<a href="phase1B.php"></a>';
	}
	else if ($row['phase']=="2-A"){
	    echo '<a href="phase2A.php"></a>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"></a>';
	}
	else if ($row['phase']=="3-A"){
	    echo '<a href="phase3A.php"></a>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"></a>';
	}

	?>

	<?php
	if ($status=='Available'){
	echo '<div style=""> ';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo ' </div>';
	}
	else{
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 2nd -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="2" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<300000 and tcp>=200000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
<!--	<img src="img/signage.png" width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
-->	<div class="searchresult">
<h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:0px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-0px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-0px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-0px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -200px; margin-top: -130px;" /></a>';
	}

	?>
	<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6>
</div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 3rd -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="3" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<400000 and tcp>=300000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
<!--	<img src="img/signage.png" width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
-->	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
	<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:0px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-0px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-0px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -200px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-0px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
    <?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
</h6>
</div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 4th -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="4" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<500000 and tcp>=400000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-0px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-0px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:0px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
			echo '<div style=" margin-left:0px;"';
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:0px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
			echo '<div style=" margin-left:0px;"';
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
		echo '</div>';
	}

	?>
		<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 5th -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="5" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<600000 and tcp>=500000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
		<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 6th -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="6" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<700000 and tcp>=600000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 7th -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="7" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<800000 and tcp>=700000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
		<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 8th -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="8" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<900000 and tcp>=800000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
		<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 9th -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="9" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<1000000 and tcp>=900000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
		<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 10th -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="10" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp>=1000000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
	<div class="searchresult"><h2>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
		<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h2></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>

</div>
   <!-- FOOTER -->   
   
   
   
   
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
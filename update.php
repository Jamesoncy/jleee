<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\
<?php 
//session_start();
//include("include/dbconnection.php"); ?>
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

			<div class="hero hero-slider">
				<ul class="slides">
					<li data-bg-image="html/img/header1.jpg">
						<div class="container">
							<div class="slide-title">
								<span>Find the place </span> <br>
								<span>you belong</span>
							</div>
						</div>
					</li>
					<li data-bg-image="html/img/untitled3.png">
						<div class="container">
							<div class="slide-title">
								<span>Find the place </span> <br>
								<span>you belong</span>
							</div>
						</div>
					</li>
					<li data-bg-image="html/img/header-slider-1.jpg">
						<div class="container">
							<div class="slide-title">
								<span>Find the place </span> <br>
								<span>you belong</span>
							</div>
						</div>
					</li>
				</ul> <!-- .slides -->
			</div> <!-- .hero-slider -->
 
   
			<hr class="separator">

<div align="center"><h1>Click on Subdivision Phases to view...</h1></div>
 <div class="mapbutton">

</div>
<div class='my-legend'>
<div class='legend-scale'>
  <ul class='legend-labels'>
     <h2> <li><span style='background:#8DD3C7;'></span>Available</li></h2>
     <h2> <li><span style='background:#FFFFB3;'></span>Not Avalilable</li></h2>
   <h2> <li><span style='background:#FB8072;'></span>Reserve</li></h2>
      <h2><li><span style='background:#80B1D3;'></span>Not Confirmed</li></h2>
  </ul>
</div>
</div>
<p><img src="html/img/ff.PNG" alt="map" width="784" height="527" usemap="#Map"/>
        <map name="Map">
        <!--Phase2A -->
          <area  shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 1 &#013;Lot Status: Available" coords="76,62,91,76,102,66,86,54" href="user_lotqoutation.php?lotid=181.php" >
          <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 2 &#013;Lot Status: Available"coords="74,82,81,72,90,78,83,88" href="user_lotqoutation.php?lotid=182">
          <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 3 &#013;Lot Status: Available"coords="87,92,95,98,103,88,96,82" href="user_lotqoutation.php?lotid=183.php" >
          <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 4 &#013;Lot Status: Available"  coords="95,76,105,85,116,76,105,67" href="user_lotqoutation.php?lotid=184.php" >
          <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 5 &#013;Lot Status: Available"  coords="102,102,109,110,119,98,111,92" href="user_lotqoutation.php?lotid=185.php" >
          <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 6 &#013;Lot Status: Available" coords="114,109,120,119,131,109,122,100" href="user_lotqoutation.php?lotid=186.php" >
          <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 7 &#013;Lot Status: Available" coords="123,122,134,132,144,116,134,112" href="user_lotqoutation.php?lotid=187.php" >
          <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 8 &#013;Lot Status: Available" coords="140,132,147,138,157,125,150,119" href="user_lotqoutation.php?lotid=188.php" >
          <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 9 &#013;Lot Status: Available" coords="171,125,5" href="lotqoutation.php?lotid=189.php" >
          <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 10 &#013;Lot Status: Available" coords="163,137,3" href="lotqoutation.php?lotid=190.php" >
          <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 11 &#013;Lot Status: Available" coords="167,144,4" href="lotqoutation.php?lotid=191.php" >
          <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 12 &#013;Lot Status: Available" coords="184,137,3" href="lotqoutation.php?lotid=192.php" >
          <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 13 &#013;Lot Status: Available" coords="176,148,3" href="lotqoutation.php?lotid=193.php" >
		<area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 14 &#013;Lot Number: 15 &#013;Lot Status: Available" coords="178,132,3" href="lotqoutation.php?lotid=194.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 15 &#013;Lot Status: Available" coords="192,142,3" href="lotqoutation.php?lotid=#.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 16 &#013;Lot Status: Available" coords="182,155,3" href="lotqoutation.php?lotid=195.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 17 &#013;Lot Status: Available" coords="214,168,0" href="lotqoutation.php?lotid=196.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 18 &#013;Lot Status: Available" coords="182,162,192,170,200,160,190,153,191,152" href="lotqoutation.php?lotid=197.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 19 &#013;Lot Status: Available" coords="209,166,203,162,214,149,218,153" href="lotqoutation.php?lotid=198.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 20 &#013;Lot Status: Available" coords="219,162,4" href="lotqoutation.php?lotid=199.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 21 &#013;Lot Status: Available" coords="226,168,4" href="lotqoutation.php?lotid=200.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 22 &#013;Lot Status: Available" coords="217,179,4" href="lotqoutation.php?lotid=201.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 23 &#013;Lot Status: Available" coords="232,175,3" href="lotqoutation.php?lotid=202.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 24 &#013;Lot Status: Available" coords="223,185,3" href="lotqoutation.php?lotid=203.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 25 &#013;Lot Status: Available" coords="235,182,242,174,251,181,245,191" href="lotqoutation.php?lotid=204.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 26 &#013;Lot Status: Available" coords="231,190,4" href="lotqoutation.php?lotid=205.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 27 &#013;Lot Status: Available" coords="237,196,3" href="lotqoutation.php?lotid=206.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 28 &#013;Lot Status: Available" coords="242,209,250,213,256,203,250,199,247,197" href="lotqoutation.php?lotid=207.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 29 &#013;Lot Status: Available" coords="252,214,258,215,264,208,258,204" href="lotqoutation.php?lotid=208.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 30 &#013;Lot Status: Available" coords="256,222,262,225,272,214,265,209" href="lotqoutation.php?lotid=209.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 31 &#013;Lot Status: Available" coords="269,191,281,200,272,212,265,205" href="lotqoutation.php?lotid=210.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 32 &#013;Lot Status: Available" coords="289,224,296,231,306,224,296,214" href="lotqoutation.php?lotid=259.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 33&#013;Lot Status: Available" coords="288,231,294,237,286,248,279,243" href="lotqoutation.php?lotid=260.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 34 &#013;Lot Status: Available" coords="289,252,298,241,308,250,299,261" href="lotqoutation.php?lotid=261.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 35 &#013;Lot Status: Available" coords="304,242,313,234,321,242,313,248" href="lotqoutation.php?lotid=262.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 36 &#013;Lot Status: Available" coords="301,264,316,251,321,265,309,275" href="lotqoutation.php?lotid=263.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 37 &#013;Lot Status: Available" coords="313,277,319,286,330,277,324,267" href="lotqoutation.php?lotid=264.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 38 &#013;Lot Status: Available" coords="325,288,336,300,347,292,335,280" href="lotqoutation.php?lotid=265.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 39 &#013;Lot Status: Available" coords="338,257,343,266,335,271,329,264" href="lotqoutation.php?lotid=266.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 40 &#013;Lot Status: Available" coords="337,277,345,271,354,280,349,287" href="lotqoutation.php?lotid=267.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 41 &#013;Lot Status: Available" coords="351,292,359,302,369,295,358,284" href="lotqoutation.php?lotid=268.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 42 &#013;Lot Status: Available" coords="349,314,355,321,366,313,357,307" href="lotqoutation.php?lotid=.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 43 &#013;Lot Status: Available" coords="372,297,378,304,371,311,362,305" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 44 &#013;Lot Status: Available" coords="369,319,375,325,365,333,358,327" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 45&#013;Lot Status: Available" coords="381,307,387,313,381,322,374,316" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 46 &#013;Lot Status: Available" coords="382,329,392,341,382,351,370,343" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 47 &#013;Lot Status: Available" coords="386,352,394,365,403,356,395,343" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 48 &#013;Lot Status: Available" coords="416,316,424,331,439,327,430,311" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 49 &#013;Lot Status: Available" coords="426,336,438,331,443,340,430,346" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 50 &#013;Lot Status: Available" coords="418,367,426,375,418,386,407,378" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 51 &#013;Lot Status: Available" coords="436,350,446,346,450,355,439,360" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 52 &#013;Lot Status: Available" coords="441,375,453,368,457,378,446,383" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 53 &#013;Lot Status: Available" coords="462,388,444,398,454,404,468,394,462,399" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 54 &#013;Lot Status: Available" coords="452,305,453,314,462,311,460,302" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 55 &#013;Lot Status: Available" coords="455,318,463,317,469,323,459,327" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 56 &#013;Lot Status: Available" coords="464,286,473,283,476,292,468,296" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 57 &#013;Lot Status: Available" coords="465,303,476,299,487,316,477,323" href="lotqoutation.php?lotid=181.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 58 &#013;Lot Status: Available" coords="469,333,3" href="lotqoutation.php?lotid=181.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 59 &#013;Lot Status: Available" coords="472,342,4" href="lotqoutation.php?lotid=181.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 60 &#013;Lot Status: Available" coords="476,350,3" href="lotqoutation.php?lotid=181.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 61 &#013;Lot Status: Available" coords="478,358,4" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 62 &#013;Lot Status: Available" coords="477,369,482,376,492,371,487,361" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 63 &#013;Lot Status: Available" coords="486,344,493,356,500,352,495,341" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 64 &#013;Lot Status: Available" coords="495,358,506,355,508,363,498,366" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 65 &#013;Lot Status: Available" coords="500,368,502,375,512,373,509,365" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 66 &#013;Lot Status: Available" coords="485,379,489,389,497,386,495,376" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 67 &#013;Lot Status: Available" coords="501,382,510,377,513,386,505,389" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 68 &#013;Lot Status: Available" coords="492,396,502,392,507,400,497,405" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 69 &#013;Lot Status: Available" coords="520,387,525,397,512,403,508,394" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 70 &#013;Lot Status: Available" coords="474,249,484,246,491,264,482,270" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 71 &#013;Lot Status: Available" coords="489,244,499,240,505,249,494,254" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 72 &#013;Lot Status: Available" coords="504,268,505,275,516,270,515,263" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 73 &#013;Lot Status: Available" coords="519,273,524,292,513,297,506,280" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 74 &#013;Lot Status: Available" coords="516,301,529,296,533,307,521,310" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 75 &#013;Lot Status: Available" coords="504,316,508,326,520,323,516,313" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 76 &#013;Lot Status: Available" coords="534,319,537,325,532,329,527,320" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 77 &#013;Lot Status: Available" coords="512,332,521,328,526,333,515,339" href="lotqoutation.php?lotid=181.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 78 &#013;Lot Status: Available" coords="540,335,4" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 79 &#013;Lot Status: Available" coords="544,337,547,343,540,346,536,343" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 80 &#013;Lot Status: Available" coords="523,349,528,354,534,351,531,345" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 81 &#013;Lot Status: Available" coords="550,348,553,353,546,355,541,350" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 82 &#013;Lot Status: Available" coords="537,362,542,369,533,374,528,366" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 83 &#013;Lot Status: Available" coords="545,366,555,362,557,373,549,377" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 84 &#013;Lot Status: Available" coords="535,381,544,376,551,390,541,395" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 85 &#013;Lot Status: Available" coords="552,382,561,377,567,386,556,393" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 86 &#013;Lot Status: Available" coords="529,260,541,256,548,267,535,274" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 87 &#013;Lot Status: Available" coords="561,305,568,319,558,325,550,309" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 88 &#013;Lot Status: Available" coords="568,302,578,297,584,307,573,312" href="lotqoutation.php?lotid=181.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 89 &#013;Lot Status: Available" coords="580,318,2" href="lotqoutation.php?lotid=181.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 90 &#013;Lot Status: Available" coords="585,326,4" href="lotqoutation.php?lotid=181.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 90 &#013;Lot Status: Available" coords="588,333,3" href="lotqoutation.php?lotid=181.php" >
        <area shape="circle" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 92 &#013;Lot Status: Available" coords="591,341,3" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 93 &#013;Lot Status: Available" coords="596,347,602,354,592,359,586,351" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 94 &#013;Lot Status: Available" coords="603,357,608,366,599,372,592,362" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 95 &#013;Lot Status: Available" coords="600,375,609,371,615,380,605,387" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 96 &#013;Lot Status: Available" coords="586,385,590,396,602,390,596,379" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 97 &#013;Lot Status: Available" coords="561,333,573,329,579,342,569,346" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 98 &#013;Lot Status: Available" coords="593,208,593,217,601,218,600,207" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 99 &#013;Lot Status: Available" coords="605,216,602,234,617,236,617,215" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 100 &#013;Lot Status: Available" coords="600,243,601,257,614,256,617,242" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 101 &#013;Lot Status: Available" coords="606,269,609,278,619,278,617,269" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 102 &#013;Lot Status: Available" coords="589,276,591,287,605,285,600,271" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 103 &#013;Lot Status: Available" coords="595,293,599,301,610,298,606,290" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 104 &#013;Lot Status: Available" coords="615,305,619,315,631,310,626,300" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 105 &#013;Lot Status: Available" coords="610,325,611,332,641,319,637,313" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 106 &#013;Lot Status: Available" coords="613,333,616,340,645,328,642,321" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 107 &#013;Lot Status: Available" coords="619,341,620,346,646,336,644,331" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 108 &#013;Lot Status: Available" coords="621,350,623,355,631,352,630,346" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 109 &#013;Lot Status: Available" coords="634,345,636,354,641,350,640,344" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 110 &#013;Lot Status: Available" coords="629,375,633,389,665,382,659,361" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 111 &#013;Lot Status: Available" coords="670,167,675,155,665,151,660,161" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 112 &#013;Lot Status: Available" coords="667,169,666,175,658,174,657,167" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 113 &#013;Lot Status: Available" coords="663,185,666,179,656,176,654,181" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 114 &#013;Lot Status: Available" coords="664,187,660,191,649,189,651,183" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 115 &#013;Lot Status: Available" coords="657,195,656,200,646,197,648,192" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 116 &#013;Lot Status: Available" coords="652,209,655,202,645,200,644,205" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 117 &#013;Lot Status: Available" coords="654,215,651,225,640,221,643,209" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 118 &#013;Lot Status: Available" coords="649,234,649,245,636,244,636,232" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 119 &#013;Lot Status: Available" coords="661,213,668,213,673,201,665,197" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 120 &#013;Lot Status: Available" coords="655,231,656,221,666,223,665,231" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 121 &#013;Lot Status: Available" coords="642,273,644,279,651,277,650,269" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 122 &#013;Lot Status: Available" coords="658,277,660,285,673,278,670,271" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 123 &#013;Lot Status: Available" coords="663,286,664,291,677,286,675,279" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 124 &#013;Lot Status: Available" coords="667,293,668,298,682,292,678,287" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 125 &#013;Lot Status: Available" coords="669,302,672,308,686,301,683,294" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 126 &#013;Lot Status: Available" coords="649,299,656,313,666,309,661,295" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 127 &#013;Lot Status: Available" coords="674,310,679,321,692,316,685,305" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 128 &#013;Lot Status: Available" coords="658,316,662,327,674,322,671,312" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 129 &#013;Lot Status: Available" coords="665,330,666,336,678,332,676,325" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 130 &#013;Lot Status: Available" coords="681,325,686,337,697,332,693,320" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 131 &#013;Lot Status: Available" coords="668,338,669,342,682,339,679,333" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 132 &#013;Lot Status: Available" coords="688,342,692,354,705,348,698,337" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 133 &#013;Lot Status: Available" coords="671,345,674,352,684,347,682,340" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 134 &#013;Lot Status: Available" coords="676,354,679,359,688,356,685,349" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 135 &#013;Lot Status: Available" coords="678,361,684,372,695,367,690,357" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 136 &#013;Lot Status: Available" coords="695,357,699,369,711,365,706,352" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 137 &#013;Lot Status: Available" coords="703,261,706,266,693,271,690,266" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 138 &#013;Lot Status: Available" coords="707,268,710,273,697,279,693,273" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 139 &#013;Lot Status: Available" coords="711,277,714,284,700,290,696,282" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 140 &#013;Lot Status: Available" coords="709,307,712,314,726,306,722,300" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 141 &#013;Lot Status: Available" coords="727,338,736,333,740,339,730,344" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 142 &#013;Lot Status: Available" coords="742,340,744,345,734,351,730,346" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2A";?> &#013;Block Number: 15 &#013;Lot Number: 143 &#013;Lot Status: Available" coords="743,349,747,355,739,358,735,353" href="lotqoutation.php?lotid=181.php" >
        
        <!--Phase1 -->
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 1 &#013;Lot Status: Available" coords="134,64,141,56,147,59,140,68" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 2 &#013;Lot Status: Available" coords="147,71,141,68,149,62,153,65" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 3 &#013;Lot Status: Available" coords="156,68,161,72,154,80,149,76" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 4 &#013;Lot Status: Available" coords="183,102,188,107,194,99,190,94" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 5 &#013;Lot Status: Available" coords="190,107,193,111,201,104,196,99" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 6 &#013;Lot Status: Available" coords="197,112,199,117,205,110,203,105" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 7 &#013;Lot Status: Available" coords="203,120,208,124,217,117,211,111" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 8 &#013;Lot Status: Available" coords="245,134,253,138,244,147,238,143" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 9 &#013;Lot Status: Available" coords="295,185,302,176,305,182,298,190" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 10 &#013;Lot Status: Available" coords="301,193,306,197,314,188,308,184" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 11 &#013;Lot Status: Available" coords="313,203,319,208,330,197,323,192" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 12 &#013;Lot Status: Available" coords="38,79,40,91,57,89,53,77" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 13 &#013;Lot Status: Available" coords="45,97,57,93,59,103,49,106" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 14 &#013;Lot Status: Available" coords="56,116,66,119,63,128,55,126" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 15 &#013;Lot Status: Available" coords="58,133,67,132,70,142,62,144" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 16 &#013;Lot Status: Available" coords="63,153,70,152,72,161,66,164" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 17 &#013;Lot Status: Available" coords="98,244,98,252,87,255,83,245" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 18 &#013;Lot Status: Available" coords="86,261,99,258,102,269,90,273" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 19 &#013;Lot Status: Available" coords="94,282,105,279,107,290,98,295" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 20 &#013;Lot Status: Available" coords="99,300,108,299,111,308,102,311" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 21 &#013;Lot Status: Available" coords="102,317,113,315,114,324,105,327" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 22 &#013;Lot Status: Available" coords="107,334,115,332,117,339,110,343" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 23 &#013;Lot Status: Available" coords="110,349,120,347,124,357,114,361" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 24 &#013;Lot Status: Available" coords="116,369,124,367,127,377,119,379" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 25 &#013;Lot Status: Available" coords="118,382,126,380,129,390,122,392" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 26 &#013;Lot Status: Available" coords="123,396,130,395,133,405,125,408" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 27 &#013;Lot Status: Available" coords="127,418,135,416,138,427,131,429" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 28 &#013;Lot Status: Available" coords="132,436,140,434,143,444,135,447" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 1";?> &#013;Block Number: 15 &#013;Lot Number: 29 &#013;Lot Status: Available" coords="134,454,142,451,145,461,137,464" href="lotqoutation.php?lotid=181.php" >
        
        <!--Phase2b -->
        
        
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 1 &#013;Lot Status: Available" coords="92,120,103,125,91,133,85,125" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 2 &#013;Lot Status: Available" coords="114,132,122,139,114,151,103,143" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 3 &#013;Lot Status: Available" coords="128,142,157,167,141,189,109,165" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 4 &#013;Lot Status: Available" coords="142,194,150,183,162,191,152,201" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 5 &#013;Lot Status: Available" coords="170,180,180,189,177,200,165,190" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 6 &#013;Lot Status: Available" coords="190,207,198,202,190,193,183,200" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 7 &#013;Lot Status: Available" coords="170,215,180,226,189,213,178,205" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 8 &#013;Lot Status: Available" coords="204,209,210,213,205,220,199,216" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 9 &#013;Lot Status: Available" coords="195,219,201,221,194,233,187,229" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 10 &#013;Lot Status: Available" coords="207,226,213,235,209,245,198,238" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 11 &#013;Lot Status: Available" coords="220,241,227,246,221,256,213,250" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 12 &#013;Lot Status: Available" coords="229,222,243,232,233,242,222,233" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 13 &#013;Lot Status: Available" coords="249,236,256,242,249,251,241,248" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 14 &#013;Lot Status: Available" coords="232,250,240,253,236,264,227,257" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 15 &#013;Lot Status: Available" coords="262,267,268,260,280,270,272,276" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 16 &#013;Lot Status: Available" coords="264,276,273,281,261,289,256,283" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 17 &#013;Lot Status: Available" coords="288,278,293,284,284,294,278,286" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 1 &#013;Lot Status: Available" coords="272,304,280,295,276,290,264,293" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 1 &#013;Lot Status: Available" coords="301,290,308,298,297,307,290,300" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 1 &#013;Lot Status: Available" coords="312,302,318,310,309,318,303,311" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 1 &#013;Lot Status: Available" coords="322,316,329,324,318,330,313,324" href="lotqoutation.php?lotid=181.php" >
        <area shape="poly" title="<?php echo "Subdivision: Oasis";?> &#013;<?php echo "Phase 2b";?> &#013;Block Number: 15 &#013;Lot Number: 1 &#013;Lot Status: Available" coords="318,334,308,322,302,329,310,338" href="lotqoutation.php?lotid=181.php" >
        </map>
        <br>
        </map>
      </p>
    </nav>
  </div>
</div>
		
		
        <form action="search.php" method="post">
          <h1><center>Property Finder:</h1>
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
            <br />
            <br />
            <br />
            <input type="submit" name="search" value="Search"  class="btn"/>
          </center>
        </form>
		
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
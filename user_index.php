<?php
require_once("include/auth.php");
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
			
			
<hr class="separator">
<div class="container">
			<main class="main-content">
			<div class="row">
							<div class="col-md-6">
								<h2 class="section-title">What to expect</h2>
								<div class="testimonial-slider">
									<ul class="slides">
										<li>
											<blockquote>
												<p>Nurture your family as you celebrate life in a friendly neighborhood.<p>
											</blockquote>
										</li>
										<li>
											<blockquote>
												<p>Spend quality time with your family swimming or have a barbeque party at our landscaped parks and playground.<p>
											</blockquote>
										</li>
										<li>
											<blockquote>
												<p>Sleep soundly knowing that you and your family are safe with our 24 hour security and perimeter wall.</p>
											</blockquote>
												<blockquote>
												<p>Stay physically and spiritually fit as you jog on our tree lined joggin park and meditation park.</p>
											</blockquote>
												<blockquote>
												<p>A sure investments that appreciates in time.</p>
											</blockquote>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<h2 class="section-title">Latest News</h2>
								<?php 
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM activity  ORDER BY datemake")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<h1><a href=activities.php?activityid='.$row['activity_id'].'>'.$row['activity_name'] . '</a></h1>'; 
        } 
?>
									
								
							</div>
						</div> <!-- .row -->
						
					</div> <!-- .container -->
				</div> 
						</div>
						</div>
						</div>
				<div class="fullwidth-block latest-projects-section">
					<div class="container">
						<h2 class="section-title">Our latest projects</h2>
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="project">
									<figure class="project-thumbnail"><img src="html/dummy/thumb-1.jpg" alt="Project 1"></figure>
									<h3 class="project-title"><a href="Amara.html">AMARA</a></h3>
										<small class="project-subtitle">House and Lot</small>
									<p>Found in this place.</p>
									<a href="loria.html" class="more-link"><img src="html/images/arrow.png" alt=""></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="project">
									<figure class="project-thumbnail"><img src="html/dummy/thumb-2.jpg" alt="Project 2"></figure>
								<h3 class="project-title"><a href="erica.html">ERICA</a></h3>
									<small class="project-subtitle">House and Lot</small>
									<p>Found in this place.</p>
									<a href="loria.html" class="more-link"><img src="html/images/arrow.png" alt=""></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="project">	
									<figure class="project-thumbnail"><img src="html/dummy/thumb-3.jpg" alt="Project 3"></figure>
							<h3 class="project-title"><a href="carmela.html"></a>CARMELA</h3>
									<small class="project-subtitle">House and Lot</small>
									<p>Found in this place.</p>
									<a href="loria.html" class="more-link"><img src="html/images/arrow.png" alt=""></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="project">
									<figure class="project-thumbnail"><img src="html/dummy/thumb-4.jpg" alt="Project 4"></figure>
									<h3 class="project-title"><a href="loria.html">LORIA</a></h3>
									<small class="project-subtitle">House and Lot</small>
									<p>Found in this place.</p>
									<a href="loria.html" class="more-link"><img src="html/images/arrow.png" alt=""></a>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> 
				</div> <!-- .fullwidth-block -->
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
		
	</body>

</html>
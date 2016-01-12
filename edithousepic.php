<?php
session_start();
?><html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
<title>Edit House Picture</title>

<link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />

 
	<meta name="description" content="">
	<meta name="author" content="Akshay Kumar">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" /> 

	<!-- Calendar Styling  -->
    <link rel="stylesheet" href="assets/css/plugins/calendar/calendar.css" />
    
    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
    
    <!-- Base Styling  -->
    <link rel="stylesheet" href="assets/css/app/app.v1.css" />
</head>


	
	
<header>
<aside class="left-panel">
    		
            <div class="user text-center">
                  <img src="assets/images/avtar/user.png" class="img-circle" alt="...">
                  <h4 class="user-name"> <h4><?php echo $_SESSION['fname'];?></h4>
                  
                  <div class="dropdown user-login">
                  <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" aria-expanded="true">
                    <i class="fa fa-circle status-icon available"></i> Available <i class="fa fa-angle-down"></i>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" href="#"><i class="fa fa-circle status-icon busy"></i> Busy</a></li>
                    <li role="presentation"><a role="menuitem" href="#"><i class="fa fa-circle status-icon invisibled"></i> Invisible</a></li>
                    <li role="presentation"><a role="menuitem" href="logout.php"><i class="fa fa-circle status-icon signout"></i> Sign out</a></li>
                  </ul>
                  </div>	 
            </div>
         
		 
 <nav class="navigation">
            	<ul class="list-unstyled">
                	<li ><a href="admin_index.php"><i class="fa fa-bookmark-o"></i><span class="nav-label">Dashboard</span></a></li>
					
                    <li class="active"><a href="subdivision.php"><i class="fa fa-university"></i> <span class="nav-label">Subdivision</span></a>
                    	<ul class="list-unstyled">
							<li><a href="subdivision.php">View all Subdivision</a></li>
                        	<li><a href="addsub.php">Add Subdivision</a></li>
                        </ul>
						
                    </li>
					
                   <li class="has-submenu"><a href="lot.php"><i class="fa fa-fire"></i> <span class="nav-label">Lot</span></a>
                    	<ul class="list-unstyled">
						<li><a href="lot.php">View all Lot</a></li>
                        	<li><a href="addlot.php">Add Lot</a></li>
                        </ul>
                    </li>
									
                    <li class="has-submenu"><a href="house.php"><i class="fa fa-home"></i> <span class="nav-label">House</span></a>
                    	<ul class="list-unstyled">
						<li><a href="house.php">View all House</a></li>
                        	<li><a href="addhouse.php">Add House</a></li>
                        </ul>
                    </li>
					
                   <li class="has-submenu"><a href="report.php"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Reports</span></a>
                    <ul class="list-unstyled">
					 
						<li><a href="sold.php?status=sold">Sold</a></li>
                        	<li><a href="available.php?status=Available">Available</a></li>
							
							<li><a href="temporary.php?status=Temporarily Reserved">Temporary</a></li>
                        	<li><a href="reserved.php?status=Reserved">Reserved</a></li>
                        </ul>
                    </li>
					
                    <li class="has-submenu"><a href="events.php"><i class="fa fa-building"></i> <span class="nav-label">Company Events</span></a>
                    	<ul class="list-unstyled">
						<li><a href="events.php">View all Company Events</a></li>
                            <li><a href="createevent.php">Create Event</a></li>
                        </ul>
                    </li>
					
                </ul>
            </nav>
            
    </aside>
		<section class="content">
<div class="content1"><br />
  <?php require("include/dbconnection.php") ?>
  <center>
    <h1>Upload New House Image</h1>

	<form method="post" enctype="multipart/form-data">
File Name:
    <input type="file" name="image"> <br /><br />
    <input type="submit" value="Upload" class="btn">
</form>

	<p>
	  <?php
	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);
	$houseid=$_GET['houseid'];
	
		if ($image_size==FALSE) {
		
			echo "<font color='#FF0000'>Select an Image</font>";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"houseimg/" . $_FILES["image"]["name"]);
			$location="houseimg/" . $_FILES["image"]["name"];
			if(!$update=mysql_query("UPDATE house SET houseimg = '$location' WHERE house_id='$houseid'" ))
			 {
				echo mysql_error();
				}
				header("location:viewhouse.php?houseid=".$houseid."");
			exit();
			}
			}


?>
	  <br />
	    <br />
	  <br />
    </p>
  </center>
</div>
<footer>     </footer>
     <!-- JQuery v1.9.1 -->
	<script src="assets/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/underscore/underscore-min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Globalize -->
    <script src="assets/js/globalize/globalize.min.js"></script>
    
    <!-- NanoScroll -->
    <script src="assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    
    <!-- Chart JS -->
    <script src="assets/js/plugins/DevExpressChartJS/dx.chartjs.js"></script>
    <script src="assets/js/plugins/DevExpressChartJS/world.js"></script>
   	<!-- For Demo Charts -->
    <script src="assets/js/plugins/DevExpressChartJS/demo-charts.js"></script>
    <script src="assets/js/plugins/DevExpressChartJS/demo-vectorMap.js"></script>
    
    <!-- Sparkline JS -->
    <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- For Demo Sparkline -->
    <script src="assets/js/plugins/sparkline/jquery.sparkline.demo.js"></script>
    
    <!-- Angular JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular.min.js"></script>
    <!-- ToDo List Plugin -->
    <script src="assets/js/angular/todo.js"></script>
    
    
    
    <!-- Calendar JS -->
    <script src="assets/js/plugins/calendar/calendar.js"></script>
    <!-- Calendar Conf -->
    <script src="assets/js/plugins/calendar/calendar-conf.js"></script>
	
    
    
    <!-- Custom JQuery -->
	<script src="assets/js/app/custom.js" type="text/javascript"></script>
    

    
	<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-56821827-1', 'auto');
    ga('send', 'pageview');
    
    </script>
</body>
</html>

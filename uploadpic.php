
<?php
require_once("include/auth.php");
?>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	
<title>Upload Pic</title>


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
<script type="text/javascript">
$.validator.setDefaults({
	//submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {	
	// validate signup form on keyup and submit
	$("#signupForm").validate({			
		rules: {
			image: "required"
			},
		messages: {
			image: "Please Select Image First to Proceed"
		}
	});
});
</script>


</head>
<body>
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
                	<li class="active"><a href="admin_index.php"><i class="fa fa-bookmark-o"></i><span class="nav-label">Dashboard</span></a></li>
					
                    <li class="has-submenu"><a href="subdivision.php"><i class="fa fa-university"></i> <span class="nav-label">Subdivision</span></a>
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
		
		<header class="top-head container-fluid">
            <button type="button" class="navbar-toggle pull-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
			
       <ul class="nav-toolbar">
   <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                	<div class="dropdown-menu lg pull-right arrow panel panel-default arrow-top-right">
                    	<div class="panel-heading">
                        	More Apps
                        </div>
                        <div class="panel-body text-center">
                        	<div class="row">
                            	<div class="col-xs-6 col-sm-4"><a href="viewmessage2.php" class="text-green"><span class="h2"><i class="fa fa-envelope-o"></i></span><p class="text-gray no-margn">
								 <?php
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM message WHERE status='unread' ORDER BY date DESC");
$rows = mysql_numrows($result);	
echo '<font size="2" color="black"><b>' . $rows. '</b></font>';
?>
					Messages</p></a></div>
								
								
                                <div class="col-xs-6 col-sm-4"><a href="unreadcomment.php" class="text-purple"><span class="h2"><i class="fa fa-comments"></i></span><p class="text-gray no-margn">
								<?php
include("include/dbconnection.php");

$result = mysql_query("SELECT * FROM comment WHERE status='unpost' ORDER BY date DESC");
$rows = mysql_numrows($result);	
echo '<font size="2" color="black"><b>' . $rows. '</b></font>';
?>
					Comments</p></a></div>
                        <div class="col-xs-12 visible-xs-block"><hr></div>
                                
								
								
                                <div class="col-xs-6 col-sm-4"><a href="pendingreservation.php" class="text-red"><span class="h2"><i class="fa fa-meh-o"></i></span><p class="text-gray no-margn">
								<?php
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM reserve WHERE Rstatus='Temporarily Reserved' ORDER BY date ASC");
$rows = mysql_numrows($result);	
echo '<font size="2" color="black"><b>' . $rows. '</b></font>';
?>

								Pending Reservation</p></a></div>
          
                                <div class="col-lg-12 col-md-12 col-sm-12  hidden-xs"><hr></div>
                            
							
							
                            	<div class="col-xs-6 col-sm-4"><a href="confirmed.php" class="text-yellow"><span class="h2"><i class="fa fa-thumbs-up"></i></span><p class="text-gray">Confirmed Reservation</p></a></div>
                                
                                <div class="col-xs-12 visible-xs-block"><hr></div>
                                
                                <div class="col-xs-6 col-sm-4"><a href="customers.php" class="text-primary"><span class="h2"><i class="fa fa-users"></i></span><p class="text-gray">Clients</p></a></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </header>


           

 <div class="warper container-fluid">
 
 

  <?php	
require("include/dbconnection.php");
$activityid =$_GET['activityid'];
	$result = mysql_query("SELECT * from `activitylist` WHERE activity_id = '$activityid' ");     
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
		if ($numberOfRows > 0) 
		{
		$i=0;
		
			$name = MYSQL_RESULT($result,$i,"activity_name");
			$id = MYSQL_RESULT($result,$i,"activity_id");
		}	
			else if ($numberOfRows == 0) 
		{
	echo "<div align='center'>";
	echo "<strong>No Picture Found On ".$name."</strong><br>";
		echo "<br>";
	echo "</div>";	
		}
		
	?>
  <h1><?php echo $name; ?></h1>
  <?php 
require("include/dbconnection.php");
$activityid =$_GET['activityid'];
$result = mysql_query("SELECT * FROM activitylist WHERE activity_id='$activityid'  ORDER BY dateuploaded DESC");


while($row = mysql_fetch_array($result))
  {

  echo "<a href='" . $row["filename"] . "' rel='lightbox[roadtrip]'><img style='margin-right:7px;margin-bottom:20px;' width=150 height=150 alt='Unable to View'  src='" . $row["filename"] . "'></a>"; 
  }
?>
  <br />
<br />
<div align="center">
<form action="activity.php" method="post" enctype="multipart/form-data" id="signupForm">
<br /><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload Picture for <?php echo $name; ?></h1>
<br />
<input type="hidden" name="date"  value="<?php echo date("D, M d, Y"); ?>"/>
				<input type="hidden" name="directory"  value="<?php echo $name; ?>"/>
		<input type="hidden" name="id"  value="<?php echo $activityid; ?>"/>
<input type="file" name="image" id="image" class="input"/><br /> <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" class="btn" name="save" value="Upload Picture" />
</form>
</div>
</div>
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

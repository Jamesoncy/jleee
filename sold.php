<?php
session_start();
?>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>List of <?php echo $_GET['status']; ?> Lots</title>

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
					
                   <li class="active"><a href="report.php"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Reports</span></a>
                   <ul class="list-unstyled">
					 
						<li><a href="sold.php?status=sold">Sold</a></li>
                        	<li><a href="available.php?status=Available">Available</a></li>
							
							<li><a href="temporary.php?status=Temporarily Reserved">Temporary</a></li>
                        	<li><a href="reserved.php?status=Reserved">Reserved</a></li>
                        </ul>
                    </li>
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
 
   <div class="page-header"><h1>Sold <small>JLEEM Realty</small></h1></div>
  
  
    
						<div class="panel panel-default">
                       <div class="panel-body table-responsive">
<a href="Sold_pdf.php"> Print </a>
  <table class="table table-bordered">
            <?php
mysql_connect('localhost','root','');
mysql_select_db ('reservation');
$sql="SELECT * FROM reserve WHERE Rstatus= 'Sold' ";
$records = mysql_query($sql);
?>

            
                <div class="panel panel-default">
                    
                    
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                           
<?php
$host_name = "localhost";
$database = "reservation"; // Change your database name
$username = "root"; // Your database user id 
$password = ""; // Your password
?>


                  
 
                                <thead>
                                  <tr>
                                    <th style="width:20%">Name</th>
                                    <th style="width:20%">Reserve ID</th>
									<th style="width:20%">Subname</th>
									<th style="width:20%">Phase</th>
									<th style="width:20%">Block</th>
									<th style="width:20%">Lot No.</th>
                                    <th style="width:20%">Area</th>
                                    <th style="width:20%">Price</th>
									<th style="width:20%">Terms</th>
									<th style="width:20%">Downpayment</th>
									<th style="width:20%">Start Date</th>
									<th style="width:20%">Total Monthly Amortization</th>
									
                                  </tr>
                                </thead>


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

<?php 
while ($user=mysql_fetch_assoc($records)){
	
	
	
	

	echo "<tr>";
	echo "<td>".$user['buyer']."</td>";
	echo "<td>".$user['reserveid']."</td>";
	echo "<td>".$user['subname']."</td>";
	echo "<td>".$user['phase']."</td>";
	echo "<td>".$user['block']."</td>";
	echo "<td>".$user['lotno']."</td>";
	echo "<td>".$user['area']."</td>";
	echo "<td>".$user['price']."</td>";
	echo "<td>".$user['terms']."</td>";
	echo "<td>".$user['downpayment']."</td>";
	echo "<td>".$user['start_date']."</td>";
	echo "<td>".$user['total_amort']."</td>";
	echo "<tr>";	
}//end while
?>
</table>
		
</div>
</div>
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
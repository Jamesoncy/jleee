<?php
session_start();
?>

<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
<title>Add Lot</title>

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
					
                   <li class="active"><a href="lot.php"><i class="fa fa-fire"></i> <span class="nav-label">Lot</span></a>
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
 
 
 
 <div class="page-header"><h1>Add Lot <small>JLEEM Realty</small></h1></div>
            
            
            
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
					<form action="savelot.php" method="post" id="signupForm">
					
    <table width="472" height="210" border="0">
    <tr>
     <td width="146" height="32">Subdivision:</td>
      <td width="293">
        <select name="subname" id="subname" style="width:225px" class="input" >
          <option value="-1">Select Subdivision</option>
          <?php
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM subdivision  ORDER BY subdname ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option value="' . $row['subdname'] . '">' . $row['subdname'] . '<br></option>'; 
        } 
?>
        </select></td>
    </tr>
	<tr>
	  <td width="146" height="32">Phase:</td>
      <td width="293"><select name="phase" id="phase" style="width:225px" class="input" >
          <option value="-1">Select Phase</option>
          <?php
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM phase  ORDER BY phase ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option value="' . $row['phase'] . '">' . $row['phase'] . '<br></option>'; 
        } 
?>
        </select></td>
	</tr>
	
    <tr>
      <td width="146" height="32">Block</td>
      <td width="293"><input name="block" id="block" type="text" class="input" onkeypress="return isNumberKey(event)" /></td>
    </tr>
	<tr>
	    <td width="146" height="32">Lot Number:</td>
        <td width="293"><input name="lotno" id="lotno" type="text" class="input" onkeypress="return isNumberKey(event)"/></td>
	</tr>
    <tr>
	<tr>
	    <td width="146" height="32">Class:</td>
        <td width="293"><input name="class" id="class" type="text" class="input"/></td>
	</tr>
    <tr>
      <td width="146" height="32">Lot Area:</td>
      <td><input name="lotarea" id="lotarea" type="text" class="input" onkeypress="return isNumberKey(event)"/></td>
	</tr>
	<tr>
     <td width="146" height="32">Price:</td>
      <td><input name="price" id="price" type="text" class="input" onkeypress="return isNumberKey(event)"/></td>
	</tr>
		<tr>
	   <td width="146" height="32">Lot Status:</td>
        <td width="293"><select name="lotstatus" style="width:225px" class="input">
		<option>Select Lot Status</option>
		<option>Available</option>
		<option>Reserved</option>
		<option>Sold</option>
		</select></td>
		</tr>

	<tr>
      <td >Remarks:</td>
      <td><textarea name="remarks" cols="30" rows="5" class="input"></textarea></td>
    </tr>
  </table><br />
  <div style="margin-left:100px;"><input type="submit" name="save" value="Save" class="btn1" onclick="return validateR();" /></div>
</form><br />

  <div class="error">
    <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<br><font color="red"><br>',$msg,'</font></br>'; 
		}
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
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

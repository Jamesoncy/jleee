<?php
session_start();
?>

<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>View comments</title>

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
 


               <div class="page-header"><h1>Pending Reservations</h1></div>
 		<div class="panel panel-default">

                        <div class="panel-body table-responsive">
  
 
  <table class="table table-bordered">
                      <thead>
                        <tr>
                              <th style="width:20%">RID</th>
                              <th style="width:20%">RCode</td>
                              <th style="width:20%">Buyer</td>
                              <th style="width:20%">Address</td>
                              <th style="width:20%">Date Reserved</td>
                              <th style="width:20%">Date Today</td>
                              <th style="width:20%">Requirements</td>
                              <th style="width:20%">View</td>
                              <th style="width:20%">Delete</td>
                              <th style="width:20%">Action</td>
						
                            </div>
                            </tr>
                            <?php 
include("include/dbconnection.php");

// sending query
$result = mysql_query("SELECT * FROM reserve where Rstatus='Temporarily Reserved' ORDER BY reserveid DESC");
if (!$result) 
	{
    die("Query to show fields from table failed");
	}
$rows = MYSQL_NUMROWS($result);

If ($rows == 0) 
	{
	echo '<div style=" color:red; text-align:center;">No Pending Lot Reservation Found !</div>';
	}
else if ($rows > 0) 
	{
	$i=0;
	while ($i<$rows)
		{		
			if(($i%2)==0) 
				{
					$bgcolor ='#FFFFFF';
				}
			else
				{
					$bgcolor ='@C0C0C0';
				}	
			$reserveid = MYSQL_RESULT($result,$i,"reserveid");
			$email = MYSQL_RESULT($result,$i,"email");
			$ccode = MYSQL_RESULT($result,$i,"ccode");
			$buyer = MYSQL_RESULT($result,$i,"buyer");
			$address = MYSQL_RESULT($result,$i,"address");
			$subname = MYSQL_RESULT($result,$i,"subname");
			$phase = MYSQL_RESULT($result,$i,"phase");
			$terms = MYSQL_RESULT($result,$i,"terms");
			$block = MYSQL_RESULT($result,$i,"block");
			$lotno = MYSQL_RESULT($result,$i,"lotno");
			$down = MYSQL_RESULT($result,$i,"downpayment");
			$amort = MYSQL_RESULT($result,$i,"amort");
			$datesubmitted = MYSQL_RESULT($result,$i,"date");
			//$datelapsed=(date("D, M d, Y"))-$datesubmitted;
			
			
		
?>
							
                            <tr>
                              <td height="38" align="center"><?php echo $reserveid ?></td>
                              <td align="center"><?php echo $ccode ?></td>
                              <td align="center"><?php echo $buyer ?></td>
                              <td align="center"><?php echo $address ?></td>
                              <td align="center"><?php echo $datesubmitted ?></td>
                              <td align="center"><?php echo date("M d, Y"); ?></td>
                              <td align="center"><a href="viewreq.php?email=<?php echo $email; ?>"><img src="img/doc.png" border="0"width="25" height="25"/></a></td>
                              <td align="center"><a target="blank" href="viewreservation.php?reserveid= <?php echo $reserveid; ?>"><img src="img/view.png" alt="q"width="25" height="25" border="0"/></td>
                              <td align="center">
							  <form action="deletependingreserve.php" method="post">
	<input type="hidden" name="reserveid" value="<?php echo $reserveid; ?>" />
	<input type="hidden" name="subname" value="<?php echo $subname; ?>" />
	<input type="hidden" name="phase" value="<?php echo $phase; ?>" />
	<input type="hidden" name="block" value="<?php echo $block; ?>" />
	<input type="hidden" name="lotno" value="<?php echo $lotno; ?>" />
	<input type="submit" name="Delete" value="Delete" onclick="return confirm('Are you sure you want to delete Reservation no.<?php echo $reserveid ?>');"  />
</form></td>
<td align="center">
		<form action="confirmreservation.php" method="post">
		  <input type="hidden" name="reserveid" value="<?php echo $reserveid; ?>" />
		  <input type="hidden" name="subname" value="<?php echo $subname; ?>" />
	<input type="hidden" name="phase" value="<?php echo $phase; ?>" />
	<input type="hidden" name="block" value="<?php echo $block; ?>" />
	<input type="hidden" name="lotno" value="<?php echo $lotno; ?>" />
	<input type="hidden" name="buyer" value="<?php echo $buyer; ?>" />
	<input type="hidden" name="email" value="<?php echo $email; ?>" />
	<input type="hidden" name="terms" value="<?php echo $terms; ?>"/>
	<input type="hidden" name="down" value="<?php echo $down; ?>"/>
	<input type="hidden" name="amort" value="<?php echo $amort; ?>"/>
	<input type="hidden" name="date" value="<?php echo date("M d, Y");?>"/>
		<input type="submit" name="Confirm" value="Confirm" onclick="return confirm('Are you sure you want to Confirm Reservation no.<?php echo $reserveid ?>');"/>
		</form>							  </td>
                            </tr>
                            <?php 	
$i++;		
	}
	}	
?>
      </table>
	

 <!-- JQuery v1.9.1 -->
	<script src="assets/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/underscore/underscore-min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Globalize -->
    <script src="assets/js/globalize/globalize.min.js"></script>
    
    <!-- NiceScroll -->
    <script src="assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    
	<!-- Wysihtml5 -->
    <script src="assets/js/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js"></script>
    <script src="assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.js"></script>
    
    <!-- ckeditor -->
    <script src="assets/js/plugins/ckeditor/ckeditor.js"></script>
    <script src="assets/js/plugins/ckeditor/adapters/jquery.js"></script>
    
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

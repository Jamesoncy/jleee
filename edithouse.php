<?php
session_start();
?>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
<title>Edit House</title>

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
									
                    <li class="active"><a href="house.php"><i class="fa fa-home"></i> <span class="nav-label">House</span></a>
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
           </header>


				 <div class="warper container-fluid">
				 
				 
				 
				  <div class="page-header"></div>
							
							
							
								<div class="panel panel-default">
									<div class="panel-heading"></div>
									<div class="panel-body">
										
				<form method="post" action="saveedithouse.php">

	<?php require("include/dbconnection.php") ?>
	<?php	
	$houseid =$_GET['houseid'];
	
	$result = mysql_query("SELECT * from `house` WHERE house_id = '$houseid' ");     
  
  

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
		
			$houseid = MYSQL_RESULT($result,$i,"house_id");						
			$subname = MYSQL_RESULT($result,$i,"subdname");
			$model = MYSQL_RESULT($result,$i,"model");
			$type = MYSQL_RESULT($result,$i,"type");	
			$desc = MYSQL_RESULT($result,$i,"description");	
			$lotarea = MYSQL_RESULT($result,$i,"lotarea");
			$floorarea = MYSQL_RESULT($result,$i,"floorarea");
			$price = MYSQL_RESULT($result,$i,"price");
	}
	
	?>
	<br />
	<table width="516" border="0" align="center">
	<center><h1>Edit House<small>JLEEM Realty</small></h1></center>
      <tr>
        <td width="71">House ID </td>
        <td width="288"><input name="text2" type="text" class="input" value="<?php echo $houseid; ?>" /></td>
      </tr>
      <tr>
        <td>Subdivision</td>
        <td><select name="subname"  id="subname" style="width: 220px; margin-left:27px;" class="input" >
          <option>Select Subdivision</option>
          <?php 
				$result = mysql_query("SELECT * FROM subdivision ORDER BY subdname ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) {
            echo '<option selected="selected">' . $row['subdname'] . '<br></option>'; 
        } 
?>
        </select></td>
      </tr>
      <tr>
        <td>Model</td>
        <td><input name="model" type="text" class="input" value="<?php echo $model; ?>" /></td>
      </tr>
      <tr>
        <td>Type</td>
        <td><select name="type"  id="subname" style="width: 220px; margin-left:27px; " class="input">
		<option>Select House Type</option>
		<option selected="selected"><?php echo $type ?></option>
		<option>Bungalow</option>
		</select>
		</td>
      </tr>
 <tr>
        <td>Description</td>
        <td><input name="description" type="text" class="input" value="<?php echo $desc; ?>" />        </td>
      </tr>      <tr>
        <td>Lot Area</td>
        <td><input name="lotarea" type="text" class="input" value="<?php echo $lotarea; ?>" />        </td>
      </tr>
      <tr>
        <td>Floor Area</td>
        <td><input name="floorarea" type="text" class="input" value="<?php echo $floorarea; ?>" /></td>
      </tr><br>
      <tr>
        <td>Price/sq.m</td>
        <td><input name="price" type="text" class="input" value="<?php echo $price; ?>" />
          <input type="hidden" name="house"  value="<?php echo $houseid; ?>"/></td>
      </tr>
    </table>
	<br />
	<br />
<div align="center">
<input type="submit" name="save" id="save" value=" Save " class="btn" />
<input type="submit" name="cmdcancel" id="cmdcancel" class="btn" value="Cancel" />   
</div>
</form>

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
    
    </script> </div></div>
</body>
</html>

</body>
</html>

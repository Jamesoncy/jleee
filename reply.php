<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />

 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
    </script>
    <link href="icomoon/style.css" rel="stylesheet">
    
    
      <link href="css2/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet">
  <link href="css2/wysiwyg/wysiwyg-color.css" rel="stylesheet">
  <link href="css2/main.css" rel="stylesheet"> 
  <link href="css2/charts-graphs.css" rel="stylesheet">

<title>Reply</title>


</head>
<body>

<header>
<a href="#" class="logo">
        <img src="img1/logo.png" alt="logo" />
      </a>
      
       <div class="btn-group">
        <button class="btn btn-primary">
          <?php echo $_SESSION['fname'];?>&nbsp;<?php echo $_SESSION['lname'];?>
        </button>
        
        </div>
      
    </header>
      

 <div class="container-fluid">
      <div class="dashboard-container">
        <div class="top-nav">
	
    <ul>

  <li>
  <a href="admin_index.php" class="selected">
  <div class="fs1" aria-hidden="true" data-icon="&#xe000;"></div> Home
  </a>
  </li>
  
  <li>
  <a href="subdivision.php">
  <div class="fs1" aria-hidden="true" data-icon="&#xe021;"></div>
  Subdivision
  </a>
  </li>	
  
  <li>
  <a href="lot.php">
  <div class="fs1" aria-hidden="true" data-icon="&#xe05a;"></div>
  Lot
  </a>
  </li>
  
  <li>
  <a href="house.php">
  <div class="fs1" aria-hidden="true" data-icon="&#xe001;"></div>
  House
  </a>
  </li>
  
  <li>
  <a href="reports.php">
  <div class="fs1" aria-hidden="true" data-icon="&#xe02c;"></div>
  Reports
  </a>
  </li>  			
  
  <li>
  <a href="events.php">
  <div class="fs1" aria-hidden="true" data-icon="&#xe01d;"></div>
  Events
  </a>
  </li>
	
  
  <li class="top"><a href="logout.php" class="top_link"><span>Logout</span></a></li>
</ul>



<br />
<br />
</div>
</div>
</div>
<div class="sub-nav">
<ul>
            <li><a href="admin_index.php">Dashboard</a></li>
            <li>
              <a href="editaccount.php">
                Edit Account
              </a>
            </li>


<li>
<span class="info-label badge badge-info">
              <?php
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM message WHERE status='unread' ORDER BY date DESC");
$rows = mysql_numrows($result);	
echo '<font size="2" color="black"><b>' . $rows. '</b></font>';
?>
            </span>
            <a href="viewmessage2.php"  class="heading">Message/s</a>	</li>



<li>
<span class="info-label badge badge-info">
<?php
include("include/dbconnection.php");

$result = mysql_query("SELECT * FROM comment WHERE status='unpost' ORDER BY date DESC");
$rows = mysql_numrows($result);	
echo '<font size="2" color="black"><b>' . $rows. '</b></font>';
?>
</span>
<a href="unreadcomment.php">Comment/s</a> 
</li>

<li>
<span class="info-label badge badge-info">
<?php
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM reserve WHERE Rstatus='Temporarily Reserved' ORDER BY date ASC");
$rows = mysql_numrows($result);	
echo '<font size="2" color="black"><b>' . $rows. '</b></font>';
?>
</span>
<a href="pendingreservation.php">Pending Reservation</a></li>

<li>
              <a href="confirmed.php">
               Confirmed Reservation
              </a>
            </li>

<li>
              <a href="customers.php">
                Clients
              </a>
            </li>
</ul>

</div>
<div class="dashboard-wrapper">

	<?php require("include/dbconnection.php") ?>
	<?php	
	$id =$_POST['id'];
	
	$result = mysql_query("SELECT * from `message` WHERE message_id = '$id' ");     
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
		
			$email = MYSQL_RESULT($result,$i,"email");	
			$content = MYSQL_RESULT($result,$i,"content");
	}
mysql_query("UPDATE  message Set  status='read' where message_id='$id'")
	
	?>
<form action="sendreply.php" method="post">
<input type="hidden" name="content" value="<?php echo $content; ?>"/>

 <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">

<h5> Reply To:</h5>
<input type="text" name="email" class="input4" style="text-align:center"  value="<?php echo $email ?>"/>

<h5>Message:</h5>
<span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
<div class="widget-body">
                    
                    <div class="wysiwyg-container">
                      
                      <textarea id="wysiwyg" class="input-block-level" placeholder="Enter text ..." style="height: 200px">
                      </textarea>
                      
                    </div>
                  </div>
<input type="submit" name="send" value="Send  Message"  class="btn"/>
</div>
</form>	

        <br />
        <br />
  <div style="clear:both"></div>
</div>
</div></div>
</div>
</div>
</div>
</div>
</div>


</div>
</div>
<footer></footer>
</body>
</html>

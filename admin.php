<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['id']);
	unset($_SESSION['firstname']);
	unset($_SESSION['lastname']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />
<link href="dudong/css/style.css" rel="stylesheet" type="text/css" >
<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
<title>Administrator Log-in</title>
</head>
<body>
 <div class="wrapper">
	<div class="container">
        <h1> Log-in as Admin </h1>
		
		
<p>
<form action="login.php" method="post" class="form">
  	<input type="text" name="username" class="input" placeholder="Username" />
  	<input type="password" name="pword" class="input" placeholder="Password" />
	<input type="submit" name="register" value="Log-In"  class="btn1"/>

</form></p>
</div>

<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>


<div align="center">
 <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<br><font color="red"><br>',$msg,'</font></br>'; 
		}
		unset($_SESSION['ERRMSG_ARR']);
	}
?></div>

<div style="clear:both"></div>
</div>
</div>
</div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="dudong/js/index.js"></script>
</body>
</html>


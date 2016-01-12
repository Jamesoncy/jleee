
<?php
//Start session
	session_start();
	include("include/dbconnection.php");
	
$subdname = $_POST['name'];
$location =$_POST['location'];
$city =$_POST['city'];
$postal =$_POST['postal'];

//Input Validations
if($subdname == '') {
		$errmsg_arr[] = 'House Model is  missing';
		$errflag = true;
	}
	 if (!preg_match("/^[a-zA-Z ]*$/",$subdname)){
       $errmsg_arr[] = 'Please input a valid subdivision name';
		$errflag = true;
     }
	 
if($location== ""){
	$errmsg_arr[] = 'Please provide a location name';
		$errflag = true;
}
if($city == '') {
		$errmsg_arr[] = 'Please Input a city';
		$errflag = true;
	}
if($postal == '') {
		$errmsg_arr[] = 'Please Input a city';
		$errflag = true;
	}
if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();	
		header("location: addsub.php");
		exit();
	}


$qry = "INSERT INTO subdivision(subdname, location, city, postal) VALUES('$subdname','$location','$city','$postal')";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: subdivision.php");		
		exit();
	}else {
		die("Query failed");
	}


?>

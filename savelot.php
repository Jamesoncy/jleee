<?php
	//Start session
	session_start();
	include("include/dbconnection.php");
	
$subname = $_POST['subname'];
$phase = $_POST['phase'];	
$block =$_POST['block'];
$lotarea =$_POST['lotarea'];
$class =$_POST['class'];
$price =$_POST['price'];
$remarks =$_POST['remarks'];
$lotstatus =$_POST['lotstatus'];
$lotno =$_POST['lotno'];
$tcp=$lotarea*$price;

//Input Validations

if($subname == "");{
	$errmsg_arr[] = 'Please select a subdivision name';
		$errflag = true;
}
if($phase == "");{
	$errmsg_arr[] = 'Please select a phase name';
		$errflag = true;
}
if($block == '') {
		$errmsg_arr[] = 'Block Number  is  missing';
		$errflag = true;
	}
	if (!is_numeric($block)) {
       $errmsg_arr[] = 'Please input a valid Block';
		$errflag = true;
     }
if($lotno == '') {
		$errmsg_arr[] = 'Lot Number  is  missing';
		$errflag = true;
	}
	if (!is_numeric($lotno)) {
       $errmsg_arr[] = 'Please input a valid Lot Number';
		$errflag = true;
     }
if($lotarea == '') {
		$errmsg_arr[] = 'Lot Area  is  missing';
		$errflag = true;
	}
	if (!is_numeric($lotarea)) {
       $errmsg_arr[] = 'Please Input a valid Area square meter';
		$errflag = true;
     }
if($price == '') {
		$errmsg_arr[] = 'Price is  missing';
		$errflag = true;
	}
	if (!is_numeric($price)) {
       $errmsg_arr[] = 'Please input a valid Price Number';
		$errflag = true;
     }
if($Remark == '') {
		$errmsg_arr[] = 'Please input a Remark';
		$errflag = true;
	}
if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();	
		header("location: addlot.php");
		exit();
	}

	$qry = "INSERT INTO lot(subdname,phase, block,lotno, lotarea,class, price,tcp,lotstatus, remarks) VALUES('$subname','$phase','$block','$lotno','$lotarea','$class','$price','$tcp','$lotstatus', '$remarks')";
	$result =mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: addlot.php");
		exit();
	}else {
		die("Query failed");
	}
?>

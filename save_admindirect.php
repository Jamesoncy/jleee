
<?php
include("include/dbconnection.php");
$date=$_POST['date'];
$buyer=$_POST['buyer'];
$status=$_POST['status'];
$spouse=$_POST['spouse'];
$gender=$_POST['gender'];
$tax=$_POST['tax'];
$address=$_POST['address'];
$sss=$_POST['sss'];
$bday=$_POST['bday'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$subname=$_POST['subname'];
$phase=$_POST['phase'];
$block=$_POST['block'];
$lotno=$_POST['lotno'];
$area=$_POST['area'];
$price=$_POST['price'];
$terms=$_POST['terms'];
$totalprice=$_POST['costprice'];
$discount=$_POST['discount'];
$downbal=$_POST['downbal'];
$amortbal=$_POST['amortbal'];
$amort=$_POST['amort'];
$Rstatus="Temporarily Reserved";


	$qry="INSERT INTO reserve (date, buyer, spouse, address, status, gender, tax, bday, sss, mobile, email, subname, phase, block,lotno, area, price, terms, downpayment, discount, amortbal, amort,Rstatus) VALUES ('$date','$buyer','$spouse','$address','$status','$gender','$tax','$bday','$sss','$mobile','$email','$subname', '$phase', '$block', '$lotno', '$area', '$price', '$terms', '$discount', '$discount','$amortbal', '$amort','$Rstatus')";
				mysql_query("UPDATE lot SET lotstatus = 'Temporarily Reserved' WHERE phase='$phase' and block='$block' and lotno='$lotno'");
				$result = @mysql_query($qry) ;
	
				//Check whether the query was successful or not
				if($result) {
					header("location: adminreservationsuccess.php");		
				exit();
				}else {
					die("Query failed");
				}
			
?>
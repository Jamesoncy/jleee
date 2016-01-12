
<?php
mysql_connect('localhost','root','');
mysql_select_db ('reservation');
$sql="SELECT * FROM reserve WHERE Rstatus= 'Sold' ";
$records = mysql_query($sql);
?>

<html>
<head>
<title>Amortization Monitoring </title>
</head>

<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>


<th>Name</th>
<th>Reserve ID</th>
<th>Subdivision Name</th>
<th>Phase</th>
<th>Block</th>
<th>Lot No.</th>
<th>Area</th>
<th>Price</th>
<th>Terms</th>
<th>Downpayment</th>
<th>Date</th>
<th>Monthly Amortization</th>

</tr>


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




</body>
</html>

<?php  
	$conn = mysql_connect('mysql15.000webhost.com', 'a7869948_reserve', 'sxapulkapreh123','a7869948_reserve');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("reservation", $conn);
?>
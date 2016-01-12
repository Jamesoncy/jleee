<?php  
	$conn = mysql_connect('http://sql10.000webhost.com/', 'a7869948_reserve', 'sxapulkapreh123');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("a7869948_reserve", $conn);
?>
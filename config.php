<?php

/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","12345Seis") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

$mysqli = mysqli_connect("localhost", "root", "12345Seis", "test");

//$res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DUAL");
//$row = mysqli_fetch_assoc($res);
	
?>

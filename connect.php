<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dan_peng";

$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_error()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
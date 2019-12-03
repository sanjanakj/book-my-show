<?php
$hostname = "localhost";
$dbUsername = "test123";
$dbPassword = "12345";
$dbName = "test123";

$connect = mysqli_connect($hostname, $dbUsername, $dbPassword, $dbName);

if(!$connect){
	echo "ERROR IN CONNECTING.....";	
}

?>
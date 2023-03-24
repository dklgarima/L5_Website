<?php 
	$hostname = 'localhost'; 
	$username = 'root'; 
	$password = ''; //ampps myadminphp password
	$databaseName = 'garima77261088'; 
	$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!"); 
	session_start();
?>
<?php
include 'connection.php';

//Gather details submitted from the $_POST array and store in local vars
if (isset($_POST['subLogin'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	//build query to SELECT records from the users table WHERE
	//the username AND password in the table are equal to those entered.
	$query = "SELECT * FROM registeruser WHERE username = '".$username."' AND password ='".$password."'";

	//run query and store result
	//check result and generate message with code below
	$result = mysqli_query($connection, $query);

	if (mysqli_num_rows($result) == 1) {
		$row=mysqli_fetch_assoc($result);
	    $_SESSION['user']=$username;
	    $_SESSION['role']=$row['role'];
		header ('location:sortSearch.php');
	}else {
		$_SESSION['error']= 'User not recognised';
		header ('location: loginForm.php');
	}
}
?>

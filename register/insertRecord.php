<?php
//Make connection to database
include 'connection.php'; 
//(a)Gather from $_POST[]all the data submitted and store in variables
if (isset($_POST['submit'])) {
	$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
	$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
	$age = filter_var($_POST['age'], FILTER_SANITIZE_STRING);
	$terms = filter_var($_POST['terms'], FILTER_SANITIZE_STRING);
	$role = 0;

	// $err = '';
	if (empty($username)) {
		$err = $err."Please fill the username";
	} elseif (!preg_match('/^[aA-zZ]+$/', $username)) {
		$err = $err."Username can only have alpha characters";
	}

	if (empty($email)) {
		$err = $err."Please fill the email";
	}

	if (empty($password)) {
		$err = $err."Please fill the password";
	} elseif (!preg_match('/^(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/', $password)) {
		$err = $err."Password must includes at least one capital letter, a number and a symbol";
	} else {
		$password = md5($password);
	}

	if (empty($age)) {
		$err = $err."Please select an age";
	}

	if (empty($terms)) {
		$err = $err."Please accept all the terms";
	}
	$_SESSION['username']= $username;
	$_SESSION['email']= $email;
	$_SESSION['age']= $age;
	$_SESSION['terms']= $terms;
	if(!empty($err)){
		trim($err, "&");
		header ('location:register.php?'.$err); 
	} else {
		$query="INSERT INTO registeruser (username, email, password, age, role) VALUES ('".$username."', '".$email."', '".$password."', '".$age."','0')";

		if(mysqli_query($connection, $query)){
			echo "Record inserted successfully of ".$username.".";
			session_destroy();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
		}
		header ('location:register.php');
	}
	exit();
}
?>

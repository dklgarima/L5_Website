<?php 
//Make connection to database
include 'connection.php'; 
if (isset($_POST['Submit'])) {
	$name = $_POST['name'];
	$price = $_POST['price'];
	$category = $_POST['category'];
	$image = $_POST['image'];

	$query="INSERT INTO search (name, price, category, image) VALUES ('".$name."', '".$price."', '".$category."', '".$image."')";

	if(mysqli_query($connection, $query)){
		echo "Record inserted successfully.";
		header("Location: {$_SERVER['HTTP_REFERER']}");
	} 
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
	}
	exit();
} 
?>
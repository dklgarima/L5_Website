<?php
if (isset($_GET['id'])) { 
	$id =$_GET['id'];
	$query ="DELETE FROM search WHERE id =".$id;
	include_once('connection.php');
	if(mysqli_query($connection, $query)){
		echo "Record deleted successfully.";
		header("Location: sortSearch.php");
	} 
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
	}
	exit();
}
?>
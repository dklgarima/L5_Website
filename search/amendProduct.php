<!DOCTYPE html>
<html>
<head>
	<title>Amend Product</title>
</head>
<body>
	<?php
	if (isset($_GET['id'])) { 
		$id =$_GET['id'];
		include 'connection.php'; 
		$query="SELECT * FROM search WHERE id = ".$id;
		$result=mysqli_query($connection, $query);
		$row=mysqli_fetch_assoc($result);
	}
	?>
	<form method="POST" action="updateProduct.php "> 
		<fieldset> 
			<legend> Update Product Details </legend> 
			<input type="hidden" name="id" value="<?php echo $row['id']?>" /> 
			<label for="text">Product Name: </label><br /> <input type="text" name="name" value="<?php echo $row['name']?>" /><br /> <br />
			<label for="text">Price: </label><br /> <input type="text" name="price" value="<?php echo $row['price']?>"/><br /><br />
			<label for="text">Category: </label><br /> <input type="text" name="category" value="<?php echo $row['category']?>"/><br /><br />
			<label for="text">Image File Name: </label><br /> <input type="text" name="image" value="<?php echo $row['image']?>"/><br /><br />
			<input type="submit" value="Submit" name="Submit" /> 
		</fieldset> 
	</form>

</body>
</html>
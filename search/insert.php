<!DOCTYPE html>
<html>
<head>
	<title>Insert Product</title>
</head>
<body>
	<form method="POST" action="insert.php"> 
		<fieldset> 
			<legend> Entre New Product Details </legend> 
			<label for="text">Product Name: </label><br /> <input type="text" name="name"/><br /> <br />
			<label for="text">Price: </label><br /> <input type="text" name="price"/><br /><br />
			<label for="text">Category: </label><br /> <input type="text" name="category"/><br /><br />
			<label for="text">Image File Name: </label><br /> <input type="text" name="image"/><br /><br />
			<input type="submit" value="Submit" name="Submit" /> <input type="reset" value="Clear" /> 
		</fieldset> 
	</form>

</body>
</html>
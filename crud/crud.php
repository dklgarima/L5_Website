<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<h1><b>Manage Products</b></h1>

<?php
include "displayProducts.php";
?>

<fieldset>
<legend>Enter New Product Details</legend>
    <form action="insertProduct.php" method="POST">
        <label for="ProductName"> Product Name:</label>
        <input type="text" name="ProductName" /><br />

        <br><label for="Price"> Price:</label>
        <input type="text" name="Price" /><br />

        <br><label for="ImageFilename"> Image Filename:</label>
        <input type="text" name="ImageFilename" /><br /><br>

        <input type="submit" value="Submit" name="btnSubmit"/>
        <input type="reset" value="Clear"/>
    </form>
</fieldset>
</body>
</html>
<?php

    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE ProductID = " .$id;
    $ProductID = "";
    $ProductName = "";
    $ProductPrice = "";
    $ProductImageName ="";

    include "connection.php";
    $sql = "SELECT * FROM product WHERE ProductID = " .$id;
    $result = mysqli_query($connection, $sql);
    while($row=mysqli_fetch_assoc($result))
        {
            $ProductID = $row['ProductID'];
            $ProductName = $row['ProductName'];
            $ProductPrice = $row['ProductPrice'];
            $ProductImageName = $row['ProductImageName'];
        }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<fieldset>
<legend>Enter New Product Details</legend>
    <form action="updateProduct.php" method="POST">
        <input type="hidden" name="hdProductID" value="<?php echo $ProductID; ?>" />
        <label for="ProductName"> Product Name:</label>
        <input type="text" name="txtProductName" value="<?php echo $ProductName; ?>"/><br />
        
        <br><label for="Price"> Price:</label>
        <input type="text" name="txtPrice" value="<?php echo $ProductPrice; ?>" /><br />

        <br><label for="ImageFilename"> Image Filename:</label>
        <input type="text" name="txtImageFilename" value="<?php echo $ProductImageName;?>" /><br />

        <input type="submit" value="Submit" name="btnSubmit"/>
        <input type="reset" value="Clear"/>
    </form>
</fieldset>
</body>
</html>

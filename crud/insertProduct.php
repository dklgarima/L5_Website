<?php 
include "connection.php";

if(isset($_POST['btnSubmit']))
    {
        $name=$_POST['ProductName'];
        $price=$_POST['Price'];
        $imagename=$_POST['ImageFilename'];
        include 'connection.php';
        $sql = "insert into product(ProductID, ProductName, ProductPrice, ProductImageName) values (null,'$name', $price, '$imagename')";
        echo $sql;

        mysqli_query($connection, $sql);
        echo "<br>Data Inserted Successfully";
    }
    header("Location: {$_SERVER['HTTP_REFERER']}");
    echo '<a href= "crud.php">Go to List Page</a>';

    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<?php

include "connection.php";
$sql = "SELECT * FROM product";
$result=mysqli_query($connection, $sql);

echo "<table border= 1 cellpadding =10 >";
    echo "<tr>";
        echo "<td width = 100>Product Name</td>";
        echo "<td width = 100>Price</td>";
        echo "<td>Images</td>";
        echo "<td width = 100>Amend</td>";
        echo "<td width = 100>Delete</td>";
    echo"</tr>";

    if (mysqli_fetch_assoc($result)>0){
        while ($row=mysqli_fetch_assoc($result)){
            $id = $row['ProductID'];
        
    echo "<tr>";
        echo "<td>" .$row['ProductName']. "</td>";
        echo "<td>" .$row['ProductPrice']. "</td>";
        echo "<td><img src ='images/" . $row['ProductImageName'] . "' height = 100 width = 100></td>";
        echo '<td><a href = "amendProduct.php?id=' .$row['ProductID'].'">Amend</a></td>';
        echo '<td><a href="deleteProduct.php?id=' .$row['ProductID'].'">Delete</a></td>';
    echo"</tr>";
        }
    }
    echo "</table>";
?>


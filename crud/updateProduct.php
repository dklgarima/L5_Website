<?php
include "connection.php";
//$id = $_GET['id'];
    if(isset($_POST['btnSubmit']))
    {
    include "connection.php";
    $ProductID = $_POST['hdProductID'];
    $ProductName = $_POST['txtProductName'];
    $ProductPrice = $_POST['txtPrice'];
    $ProductImageName =$_POST['txtImageFilename'];
    $sql = "UPDATE product SET ProductName='$ProductName', ProductPrice=$ProductPrice, ProductImageName='$ProductImageName' WHERE ProductID=$ProductID";
    //echo $sql;
    //die;
    mysqli_query($connection, $sql);
    }

    header( 'Location: crud.php' ) ;
?>
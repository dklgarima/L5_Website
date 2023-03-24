
<?php
    if(isset($_POST['btnSubmit']))
    {
    include "connection.php";
    //read data from form
    //create sql query with your input data
    $FirstName = $_POST['txtFirstName'];
    $Surname = $_POST['txtSurName'];
    $email=$_POST['txtEmail'];
    $password=$_POST['txtPass'];
    $gender = $_POST['gender'];
    $age = $_POST['txtage'];

    $query = "INSERT INTO Customer(CustomerID, FirstName, LastName, Email, Password, Gender, Age) values (null, '$FirstName', '$Surname', '$email', '$password', '$gender', $age)";
   // echo $query;
    //exit();
    mysqli_query($connection, $query);
    if(mysqli_query($connection, $query)){
        echo "Record inserted successfully.";
       } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
       }
    }
?>

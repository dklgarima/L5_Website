<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<fieldset>
<legend>Enter Customer Details</legend>

<form method="POST" action="insertRecord.php">
    <label for="FirstName">First Name: </label>
    <input type="text" name="txtFirstName"/><br />
    <br><label for="SurName">Surname: </label>
    <input type="text" name="txtSurName"/><br />
    <br><label for="email">Email: </label>
    <input type="text" name="txtEmail"/><br />
    <br><label for="passwd">Password: </label>
    <input type="password" name="txtPass" /><br />
    <br><label for="gender"> Gender:</label>
    <select name="gender">
    <option value="none" selected>Gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">other</option>
    </select><br />

    <br><label for="age">Age: </label>
    <input type="age" name="txtage" />
    
    <br><input type="submit" value="Submit" name="btnSubmit">
</fieldset>
</form>

<?php
include 'selectRecord.php';
?>
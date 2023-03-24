<html>
<head>
</head>
<body>
    <h1>Order Form</h1><br>
    <p>Please fill out this form to fill out your order.</p>

    <form method="post" action="order_form.php">
        <fieldset>
            <legend>Enter your login details</legend>
            <label for="username">User Name: </label>
            <input type="text" name="username">
            <label for="email">Email: </label>
            <input type="text" name="email">
        </fieldset>

        <fieldset>
            <legend>Pizza Selection</legend>
            <label for="size">Size: </label>
            <input type="radio" id="small" name="size" value="small">
            <label for="small">small</label>
            <input type="radio" id="medium" name="size" value="medium">
            <label for="medium">medium</label>
            <input type="radio" id="large" name="size" value="large">
            <label for="large">large</label><br><br>

            <label for="topping">Topping: </label>
            <select name="topping">
                <option value="nothing">Please select</option>
                <option value="Seafood">Seafood</option>
                <option value="Pineapple">Pineapple</option>
                <option value="Mango">Mango</option>
            </select><br><br>

            <label for="extras">Extras: </label>
            <input type="checkbox" id="parmesan" name="extras[]" value="parmesan">
            <label for="parmesan">Parmesan</label>
            <input type="checkbox" id="olives" name="extras[]" value="olives">
            <label for="olives">Olives</label>
            <input type="checkbox" id="capers" name="extras[]" value="capers">
            <label for="capers">Capers</label>
        </fieldset>

        <input type="submit" value="Submit" name="btnSubmit">
        <input type="reset" value="Clear">
    </form>
    
    <?php
        if(isset($_POST['btnSubmit'])){
            $username = "";
            $email = "";
            $size = "";
            $topping = "";
            $extras = array();

            if(!empty($_POST['username'])){
                $username = $_POST['username'];
            }
            else{
                $username = "Username Empty!";
            }

            if(!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $email = $_POST['email'];
            }
            else{
                $email = "Email Invalid or Empty!";
            }

            if(!empty($_POST['size'])){
                $size = $_POST['size'];
            }
            else{
                $size = "Please select a size!";
            }

            if(!empty($_POST['topping'])){
                $topping = $_POST['topping'];
            }
            else{
                $topping = "No topping!";
            }

            if(!empty($_POST['extras'])){
                $extras = $_POST['extras'];
            }
            else{
                $extras = "No extras!";
            }

            echo "<h3> Thank you for your order: </h3>";
            echo "Customer ID: " . $username;
            echo "<br>Email: " . $email;
            echo "<br>Your order: " . ucfirst(strtolower($size)) . " " . $topping;
            echo "<br>Extra Toppings: ";
            for($i=0; $i<sizeof($extras); $i++){
                echo ucfirst(strtolower($extras[$i])) . " ";
            }
        }
    ?>

</body>
</html>
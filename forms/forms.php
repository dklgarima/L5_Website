<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Web Applications and Technologies</title>
    <link type="text/css" rel="stylesheet" href="main.css" />
    </head>
    <body>
    <header>
    <h1>Garima Dhakal 77261088</h1> 
 </header>
 
    <section id="container">
    <h1>Forms of PHP</h1>
    <h1>Processing Input from HTML Forms</h1>
    <h2>Login Form using POST</h2>
    <fieldset>
    <legend>Login</legend>

    <form method="post" action="forms.php">
        <label for="email">Email: </label>
        <input type="text" name="txtEmail"/><br />
        <label for="passwd">Password: </label>
        <input type="password" name="txtPass" /><br />
        <input type="submit" value="Submit" name="loginSubmit" />
        <input type="reset" value="Clear" />
    </fieldset>
    </form>
    <?php
        if(isset($_POST['loginSubmit'])){
            $login_email = "";
            $login_password = "";
    
            // Validation for email
            if(!empty($_POST['txtEmail']) && filter_var($_POST['txtEmail'], FILTER_VALIDATE_EMAIL)){
                $login_email = $_POST['txtEmail'];
            }
            else{
                $login_email = "Email is not valid!";
            }
    
            // Checking for password
            if(!empty($_POST['txtPass'])){
                $login_password = $_POST['txtPass'];
            }
            else{
                $login_password = "Password is empty!";
            }
    
            echo "Email: " . $login_email;
            echo "<br /> Password: " . $login_password;
        
        }
    ?>
            
    <form method="post" action="forms.php">
        <fieldset>
            <legend>Comments</legend>
            <label for="">Email: </label>
            <input type="text" name="cmtEmail" value="<?php if(isset($_POST['cmtEmail'])){echo $_POST['cmtEmail'];}?>" /><br />
            <textarea rows="4" cols="50" name="cmt" value="<?php if(isset($_POST['cmt'])){echo $_POST['cmt'];}?>"></textarea><br />
            <label for="">Click to Confirm: </label>
            <input type="checkbox" name="chkConfirm" value="agree"><br />
            <input type="submit" value="Submit" name="cmtSubmit"/>
            <input type="reset" value="Clear" />
        </fieldset>
    </form>
    
    <?php
        if(isset($_POST['cmtSubmit'])){
            $comment_email = "";
            $comment = "";
    
            // Validation for email
            if(!empty($_POST['cmtEmail']) && filter_var($_POST['cmtEmail'], FILTER_VALIDATE_EMAIL)){
                $comment_email = $_POST['cmtEmail'];
            }
            else{
                $comment_email = "Email is not valid!";
            }
    
            // Validation for comment
            if(!empty($_POST['cmt'])){
                $comment = $_POST['cmt'];
            }
            else{
                $comment = "Comment is not entered!";
            }
                
            // Check confirm
            if(isset($_POST['chkConfirm'])){
                $confirm = 'Agreed <br/>';
            }
            else{
                $confirm = "Not Agreed <br/>";
            }
    
            echo "Email: " . $comment_email;
            echo "<br>Comments: " . $comment;
            echo "<br>Confirm: " . $confirm;
        }
    ?>
    
        <form method="post" action="forms.php">
            <fieldset>
                <legend>Without TAX Calculator</legend>
                <label for="">After Tax Price: </label>
                <input type="text" name="finalPrice" value="<?php if(isset($_POST['finalPrice'])){echo $_POST['finalPrice'];}?>" />
                <label for="">Tax Rate: </label>
                <input type="text" name="taxRate" value="<?php if(isset($_POST['taxRate'])){echo $_POST['taxRate'];}?>" />
                <input type="submit" value="Submit" name="taxSubmit"/>
                <input type="reset" value="Clear" />
            </fieldset>
        </form>
    
        <?php
            if(isset($_POST['taxSubmit'])){
                $decimalPattern = ' /^\d+(:?[.]\d{2})$/ ';
                $wholeNumPattern = ' /^[1-9][0-9]*$/ ';
                $finalPrice = 0;
                $taxRate = 0;
                $initialPrice = 0;
    
                if(!empty($_POST['finalPrice']) && !empty($_POST['taxRate'])){
                    if(preg_match($decimalPattern, $_POST['finalPrice'])){
                        $finalPrice = $_POST['finalPrice'];
    
                        if(preg_match($wholeNumPattern, $_POST['taxRate'])){
                            $taxRate = $_POST['taxRate'];
    
                            $initialPrice = (100*$finalPrice)/(100+$taxRate);
    
                            echo "Price before tax = £" . number_format($initialPrice, 2);
                        }
                        else{
                            echo "Please enter a whole number for tax rate.<br>";
                        }
                    }
                    else{
                        echo "Please enter the price in the format 9.99.<br>";
                    }
                }
                else{
                    echo "All fields required!";
                }
            }
        ?>
	<h1>Passing Data Appended to an URL</h1> 
	<h2>Pick a category</h2> 
	<a href="forms.php?cat=Films">Films</a> 
	<a href=" forms.php?cat=Books">Books</a> 
	<a href=" forms.php?cat=Music">Music</a>
	<br>
	<?php
		if (isset($_GET["cat"])) {
			if ($_GET["cat"]=="Films") {
				echo "The choosen category is Films";
			}
			if ($_GET["cat"]=="Books") {
				echo "The choosen category is Books";
			}
			if ($_GET["cat"]=="Music") {
				echo "The choosen category is Music";
			}
		}
	?>
    
        <a href ="order_form.php">Order Form </a>
        
    
 </section>
 <footer> 
 <small> <a href="../watIndex.html">Home</a></small>
 </footer>
 </body>
</html>





    


    

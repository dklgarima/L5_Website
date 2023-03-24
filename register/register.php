<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style type="text/css">
		.red {
			color: red;
			padding-left: 20px;
		}
		h1, legend {
			text-align: center;
		}
		form {
			text-align: left;
			width: 540px;
			margin: 0 auto;
		}
		label {
			padding-left: 20px;
		}
		input, select {
			margin-left: 20px;
		}
	</style>
</head>
<body>
	<?php
	session_start();
	if (isset($_SESSION['username'])) {
		$username=$_SESSION['username'];
		$email=$_SESSION['email'];
		$age = $_SESSION['age'];
		$terms = $_SESSION['terms'];
	}
	session_destroy();
	?>
	<h1>Registration Form</h1>
	<form method="POST" action="insertRecord.php">
		<fieldset>
			<legend>Register New User</legend><br>
			<label>Username: </label><input type="text" name="username" placeholder= "Your Name"><br>
			<?php
			//$err = $_SESSION['username'];
			// echo "<em class='red'>".$err."</em>";
			
			?><br><br>

			<label>Email: </label><input type="email" name="email" placeholder= "Your Email"><br>
			<?php
			// $err = $_GET['emailerr'];
			// echo "<em class='red'>".$err."</em>";
			
			?><br><br>

			<label>Password: </label><input type="password" name="password" placeholder= "Enter Password Here"><br>
			<?php
			// $err = $_GET['passworderr'];
			// echo "<em class='red'>".$err."</em>";
			
			?><br><br>

			<label>Age: </label><select name="age" style="width: 50px;">
				<option value=""></option>
				<?php
				$i = 18;
				while ( $i<= 80) {
					?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					
					<?php
					$i++;
				}
				?>
			</select> <br>
			<br><br>

			<input type="checkbox" name="terms" <?php if (!empty($terms)) {echo "checked";}?>><label> I agree to all the terms and condition</label><br>
			<?php
			// $err = $_GET['termserr'];
			
			?><br><br>

			<input type="submit" name="submit" value="Submit" class="submit"><br><br>
			<a href="../search/loginForm.php">Login</a>
		</fieldset>
	</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h3>Login</h3>
	<form method="POST" action="login.php">
		<label>Username: </label><input type="text" name="username" value=''/>
		<label>Password: </label><input type="password" name="password" />
		<input type="submit" name="subLogin" value="submit" /><br><br>
		<a href="../register/register.php">Register a new user</a>
	</form>
</body>
</html>
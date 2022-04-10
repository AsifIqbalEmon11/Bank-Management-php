<?php 
session_start();
if(isset($_SESSION['username']))
{
	header("Location: Homepage.php");
}

setcookie("username", $username);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>

	<form  method="post" action="../controller/LoginController.php"   novalidate>
<label for="username">User Name :</label>
        <input  type="text" id="username" required name="username"> <br>

        <label for="password">Password  :</label>
        <input  type="password" id="password" required name="password"> <br>

        <input type="submit" name="login" value="Login">
        </form>
<br>
<a href="ForgottenPassword.php">Forget Password</a><br>
<a href="registration1.html">Don't have an account, Create one</a><br>
</body>
</html>
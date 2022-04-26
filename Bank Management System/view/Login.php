<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script src="js/login.js"></script>
	<?php 
    require 'css/text.php';
	?>
</head>
<body>
	<center>
	<h1> Login</h1>
	<form action="../controller/LoginAction.php" method="post"  onsubmit=" return validateAndSubmit(this);">
<label> User name : </label>
<input type="text" name="username">
<span id="err1"></span><br><br>

<label>Password: </label>
<input type="Password" name="password">
<span id="err2"></span>
<br><br>

<input type="submit" id="button" name="submit" value="Login">
</form>


<br>
<a style="color:Tomato;"href="ForgottenPassword.php">Forget Password</a><br>
<a style="color:blueviolet;"href="Registration.html">Don't have an account, Create one</a><br>
</center>
</body>
</html>
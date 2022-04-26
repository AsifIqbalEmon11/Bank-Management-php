<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
         <?php 
    require 'css/text.php';
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forget Password</title>
        <script src="js/newpass.js"></script>
</head>
<body>
        <center>
<h1>Reset Password</h1>
<form method="post" action="../controller/ForgetPassController.php" onsubmit=" return validateAndSubmit(this);">
	

        <label for="password">New Password  :</label>
        <input  type="password"  name="password"><span id="err1"></span> <br><br>
                <label for="password">Confirm Password  :</label>
        <input  type="password"  name="cpassword"><span id="err2"></span> <br><br>

         <input type="submit" name="update" value="Update"><br><br>

        </form>
        <form action="Login.php">
    <input type="submit" value="Go Back" />
</form>
</center>
</body>
</html>
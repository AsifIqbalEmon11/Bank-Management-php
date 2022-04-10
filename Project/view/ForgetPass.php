<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forget Password</title>
</head>
<body>
<h1>Reset Password</h1>
<form method="post" action="../controller/ForgetPassController.php" >
	

        <label for="password">New Password  :</label>
        <input  type="password"  name="password"> <br>
                <label for="password">Confirm Password  :</label>
        <input  type="password"  name="cpassword"> <br>

         <input type="submit" name="update" value="Update"><br>

        </form>
        <form action="Login.php">
    <input type="submit" value="Go Back" />
</form>
</body>
</html>
<?php 
session_start();
if(isset($_COOKIE['username'])){
    $uname=$_COOKIE['username'];
}

 ?>
<!DOCTYPE html>
<html>
<head>
          <?php 
    require 'css/text.php';
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Password</title>
        <script src="js/upPas.js"></script>
</head>
<body>
        <center>
<h1>Update Password</h1>
<form method="post" action="../controller/UpPassController.php" onsubmit=" return validateAndSubmit(this);">
	<br>
        <label for="password">Old Password  :</label>
        <input  type="password"  name="opassword"><span id="err1"></span> <br><br>

                <label for="password">New Password  :</label>
        <input  type="password"  name="password"><span id="err2"></span> <br><br>
                <label for="password">Confirm Password  :</label>
        <input  type="password"  name="cpassword"><span id="err3"></span> <br><br>

         <input type="submit" name="update" value="Update"><br><br>

        </form>
        <form action="Homepage.php">
    <input type="submit" value="Go Back" />
</form>
</center>
</body>
</html>
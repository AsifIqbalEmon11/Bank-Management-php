<?php 
session_start();
if(isset($_COOKIE['username'])){
    $username=$_COOKIE['username'];
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Homepage</title>
</head>
<body>
	<h1>Homepage</h1>
<p>Welcome, <?php echo $_COOKIE['username']; ?> </p>
<?php
include'../controller/button.html'; 
	?>
</body>
</html>
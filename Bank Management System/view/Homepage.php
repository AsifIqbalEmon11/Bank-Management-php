<?php 
session_start();
if(isset($_COOKIE['username'])){
    $username=$_COOKIE['username'];
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
	<center>
	<title>Homepage</title>
</head>
<body>
	<h1>BANK MANAGEMENT SYSTEM</h1>
	<h2>Homepage</h2>
<p>Welcome, <?php echo strtoupper($_COOKIE['username']); ?> </p>

<?php

if(isset($_COOKIE["username"])){

    include'button.html';
}else {
	header("Location: Login.php");
    echo "You are not logged in";
}

?>

</center>
</body>
</html>
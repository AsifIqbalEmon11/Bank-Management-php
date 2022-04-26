<?php 
session_start();
session_unset();
session_destroy();
setcookie("username", "", time()-3600,'/');

header("Location: ../view/Login.php")

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Logout</title>
 </head>
 <body>
 
 </body>
 </html>
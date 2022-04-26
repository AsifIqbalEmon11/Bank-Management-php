<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>

<?php
require '../model/user.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
 
  $username = test($_POST['username']);
  $password =test($_POST['password']) ;
  $_COOKIE['username'] =$username;
  setcookie("username", $username, time()+660,'/');

  if (empty($username) or empty($password) ) {
   echo "Please enter name and password properly";
  } else {

$login= login($username,$password);

if($login === true){
  echo "Login Successfull";
  header("Location: ../view/Homepage.php");
}
  else {
  echo "username and password didnt matched ";

}
  }
}

?>
<form action="../view/Login.php">
               <input type="submit" value="Go Back to Login" >
               </form>
</body>
</html>
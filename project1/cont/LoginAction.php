<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $name = $_POST['username'];
  $pass = $_POST['password'];

  if (empty($name) or empty($pass) ) {
   echo "Please enter name and password properly";
  } else {


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users
WHERE username = '{$name}' && password = '{$pass}'";

if ($conn->query($sql)->num_rows > 0) {
  echo "Login Successfull";
 // header("Location: ../view/Homepage.php");
}
 else {
  echo "username and password didnt matched ";

  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


  }
}

?>
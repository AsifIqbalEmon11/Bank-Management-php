<?php

function check($name){

require 'connect.php';
$sql = "SELECT username FROM users
WHERE username = '{$name}'";

if ($conn->query($sql)->num_rows > 0) {
 // echo "Login Successfull";
 // header("Location: ../view/Homepage.php");
 return true;
}
 else {

  return false;
}
$conn->close();
}



function login($name,$pass){

require 'connect.php';

$sql = "SELECT * FROM users
WHERE username = '{$name}' && password = '{$pass}'";

if ($conn->query($sql)->num_rows > 0) {
 // echo "Login Successfull";
 // header("Location: ../view/Homepage.php");
 return true;
}
 else {
  echo "";

  echo "Error: " . $sql . "<br>" . $conn->error;
  return false;
}
$conn->close();
}


function forget($email,$phone){

require 'connect.php';

$sql = "SELECT * FROM users
WHERE email = '{$email}' && Phone = '{$phone}'";

if ($conn->query($sql)->num_rows > 0) {
 // echo "Login Successfull";
 // header("Location: ../view/Homepage.php");
 return true;
}
 else {
  echo "";

  echo "Error: " . $sql . "<br>" . $conn->error;
  return false;
}
$conn->close();
}

function Updatepassword($pass){

  if(isset($_COOKIE['email'])){
    $email=$_COOKIE['email'];
}
  require 'connect.php';

$sql = "UPDATE users SET password ='$pass' WHERE email = '$email'";
$result = $conn->query($sql);

 return true;

$conn->close();

}



function regist($fname,$lname,$gend,$presentAddress,$phone,$bday,$rel,$mail,$uname,$pasword){

require 'connect.php';

$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, gender,PresentAddress,Phone,birthday,religion,email, username, password) VALUES (?, ?, ? ,? ,?, ?, ?, ? ,? ,?)");
$stmt->bind_param("ssssssssss", $firstname, $lastname, $gender,$PresentAddress,$Phone,$day,$religion,$email,$username,$password);

$firstname = $fname;
$lastname = $lname ;
$gender = $gend;
$PresentAddress=$presentAddress;
$Phone=$phone;
$day=$bday;
$religion=$rel;
$email=$mail;
$username = $uname;
$password= $pasword;
$stmt->execute();

//header("Location: ../view/Login.php");

$stmt->close();
$conn->close();
return true;
}



function update($uname,$fname ,$lname ,$presentAddress,$bday,$phone,$email){

require 'connect.php';

$sql = "UPDATE users SET firstname ='$fname', lastname ='$lname',PresentAddress='$presentAddress',birthday='$bday',Phone='$phone',email='$email' WHERE username = '$uname'";
$result = $conn->query($sql);

 return true;

$conn->close();
}

function oldpass($pass){

require 'connect.php';
$sql = "SELECT password FROM users
WHERE password = '{$pass}'";

if ($conn->query($sql)->num_rows > 0) {
 
 return true;
}
 else {

  return false;
}
$conn->close();
}

function updatepass($pass,$password){
  if(isset($_COOKIE['username'])){
    $uname=$_COOKIE['username'];
}

require 'connect.php';

$sql = "UPDATE users SET password ='$pass' WHERE username = '$uname'";
$result = $conn->query($sql);

 return true;

$conn->close();
}

?>
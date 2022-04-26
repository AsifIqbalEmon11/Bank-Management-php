<?php 
require 'connect.php';
	
  $username= $bday=$fname = $lname = $presentAddress =  $phone = $email = "";

  $sql = "SELECT * FROM users
WHERE username = '{$uname}'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
   $username= $row["username"];
   $fname =  $row["firstname"];
   $lname =  $row["lastname"];
   $presentAddress =$row["PresentAddress"];
   $phone =$row["Phone"];
   $email =$row["email"];
   $bday=$row["birthday"];
  }
}
$conn->close();
    ?>   

<?php

require 'connect.php';

$sql = "SELECT * FROM customers WHERE username = '$Username'";
$result = $conn->query($sql);
if($result->num_rows > 0){
  
 while($row = $result->fetch_assoc()) {
   $id=$row["id"];
   $username= $row["username"];
   $fname =  $row["firstname"];
   $lname =  $row["lastname"];
   $presentAddress =$row["PresentAddress"];
   $phone =$row["Phone"];
   $email =$row["email"];
   $gender= $row["gender"];
   $bday=$row["birthday"];
   $religion=$row["religion"];
  
  }

 return true;
}
else{
  return false;
}

$conn->close();


?>

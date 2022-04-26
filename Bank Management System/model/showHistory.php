
<?php

require 'connect.php';

$sql = "SELECT * FROM customeracc WHERE AccId = '$id'";
$result = $conn->query($sql);
if($result->num_rows > 0){
  
 while($row = $result->fetch_assoc()) {
   $id=$row["AccId"];
   $username= $row["username"];
   $fname =  $row["firstname"];
   $lname =  $row["lastname"];
   $acctype =$row["Accountype"];
   $phone =$row["Date"];
   $email =$row["Balance"];
   $gender= $row["TransactionId"];
   $bday=$row["TransactionTime"];
   $tid=$row["TransactionTo"];
  
  }

 return true;
}
else{
  return false;
}

$conn->close();


?>

<?php
    $ftname = $lname =$uname = $pasword = $confirmpassword = "";
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
		function test($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		 $fname = test($_POST['fname']);
		 $lname = test($_POST['lname']);
		
		 $uname = test($_POST['username']);
		 $pasword = test($_POST['password']);
		 $confirmpassword = test($_POST['confirmpassword']);
		 $gend = test($_POST['gender']);

         	if (empty($fname)  ) {
         			echo "Please fill up the firstname";
         		}else if(empty($lname)){
         		echo "Please fill up the lastname";}

         		else if(empty($uname)){
         		echo "Please fill up the username";
         		}
         		else if(empty($pasword)){
         		echo "Please fill up the password";
         		}
         		else if( empty($confirmpassword)){
         		echo "Please fill up the confirmpassword";
         		}else if ($pasword != $confirmpassword){
         		echo "password dont match";
         		}else{
$servername = "localhost";
$usname = "root";
$pword = "";
$dbname = "reg";

$conn = new mysqli($servername, $usname, $pword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, gender, username, password) VALUES (?, ?, ? ,? ,?)");
$stmt->bind_param("sssss", $firstname, $lastname, $gender,$username,$password);

$firstname = $fname;
$lastname = $lname ;
$gender = $gend;
$username = $uname;
$password= $pasword;
$stmt->execute();

header("Location: ../view/Login.php");

$stmt->close();
$conn->close();


}
}

?>
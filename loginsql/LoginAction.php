<?php
    $uname = $pasword = "";
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
		function test($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		
		 $uname = test($_POST['username']);
		 $pasword = test($_POST['password']);

         		if(empty($uname)){
         		echo "Please fill up the username";
         		}
         		else if(empty($pasword)){
         		echo "Please fill up the password";
         		}
         		else{
$servername = "localhost";
$usname = "root";
$pword = "";
$dbname = "reg";

$conn = new mysqli($servername, $usname, $pword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username FROM users WHERE username=" .$uname. && "password =".$pasword;
$result = $conn->query($sql);

if ($result==true) {
header("Location: Homepage.php");
}
}
$conn->close();
}

?>
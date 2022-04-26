<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ForgetPassAction</title>
</head>
<body>
	<?php 
	require '../model/user.php';

    $email = $phone ="";
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
		function test($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
         $email = test($_POST['email']);
		 $phone = test($_POST['Phone']);
		  $_COOKIE['email'] =$email;
  setcookie("email", $email, time()+660,'/');

		        if(empty($email)){
         		echo "Please fill up the email";
         		}
         		else if(empty($phone)){
         		echo "Please fill up the phone number";
         	}
         		else{
         			
			      $check=forget($email,$phone);

			      if($check=== true){
			      	header("Location: ../view/ForgetPass.php");
			      }
			        	
			        	else{
			        		echo "Email and phone did not matched";
			        	}
			        }
         		}
		
	?><br>
	<a href="../view/ForgottenPassword.php">Go Back</a>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ForPassController</title>
</head>
<body>

<?php 
	require '../model/user.php';

		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test($data) {
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
                     
				     $password  = test($_POST['password']);
            		 $cpassword = test($_POST["cpassword"]);

            		 if (empty($password) or empty($cpassword)) {
				echo "Please fill up the form properly";
			}
			else if ($password != $cpassword){
         		echo "password dont match";
         		}
			else {
				$pass=Updatepassword($password);
				if($pass=== true){
					echo "Password Updated";
				}
				else{
					echo "Password did not Updated";

				}

			}

		}


?>

<a href="../view/ForgetPass.php">Go back</a>
</body>
</html>
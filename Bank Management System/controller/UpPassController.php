<?php 
session_start();
if(isset($_COOKIE['username'])){
    $uname=$_COOKIE['username'];
}

require '../model/user.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UpPassController</title>
</head>
<body>

<?php 

		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test($data) {
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
                     $opassword = test($_POST["opassword"]);
				     $password  = test($_POST['password']);
            		 $cpassword = test($_POST["cpassword"]);

            		 if (empty($opassword) or empty($password) or empty($cpassword)) {
				echo "Please fill up the form properly";
			}
			else if ($password != $cpassword){
         		echo "password dont match";
         		}
			else {

		 $oldPass=oldpass($opassword);
		 if($oldPass=== false){
		 	echo "Old password did not matched";
		 }
		 else{
		 $updatePass=updatepass($password,$opassword);
         if($updatePass=== true){
         	echo"Password updated";
         }else{
         	echo"Password did not updated";
         }

		 }
		
		}
	}


?>

<a href="../view/UpdatePassword.php">Go back</a>
</body>
</html>
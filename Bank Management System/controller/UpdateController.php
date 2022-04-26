<?php 
if(isset($_COOKIE['username'])){
    $username=$_COOKIE['username'];
}
require '../model/user.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update User</title>
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
                     $username = test($_POST["username"]);
				     $fname = test($_POST['fname']);
            		 $lname = test($_POST["lname"]);
            		 $phone = test($_POST['Phone']);
            		 $bday = test($_POST['birthday']);
            		 $email = test($_POST['email']);
                     $presentAddress  = test($_POST['PresentAddress']);

        $update= update($username,$fname ,$lname ,$presentAddress,$bday,$phone,$email);
        if($update===true){
        	echo "Update successful";
        }
        else{
        	echo"Update unsuccessful";
        }
    }
                    
			
	?>
	<br>
<a href="../view/Profile.php">Go to Profile</a><br>
<a href="../view/Update.php">Go back</a>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<?php
require '../model/user.php';
    $fname = $lname =$uname = $pasword = $confirmpassword = "";
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
		function test($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		 $fname = test($_POST['fname']);
		 $lname = test($_POST['lname']);
		 $presentAddress = test($_POST['PresentAddress']);
		 $phone = test($_POST['Phone']);
		 $bday = test($_POST['birthday']);
		 $email = test($_POST['email']);
		 $religion = test($_POST['religion']);
		 $uname = test($_POST['username']);
		 $pasword = test($_POST['password']);
		 $confirmpassword = test($_POST['confirmpassword']);
		 $gend = $_POST["gender"];

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
         		else if(isset($gend)===""){
         		echo "Please fill up the gender";
         		}
         		 else if($religion === 0){
         		echo "please select religion";
         		} 
         		else if( empty($presentAddress)){
         		echo "Please fill up the permanentAddress";
         		}
         		else if( empty($phone)){
         		echo "Please fill up the phone";
         		}
         		else if( empty($email)){
         		echo "Please fill up the email";
         		}
         		else if( empty($confirmpassword)){
         		echo "Please fill up the confirmpassword";
         		}else if ($pasword != $confirmpassword){
         		echo "password dont match";
         		}else{
$check=check($uname);
if($check=== true){
	echo "The username is already taken try another one";
}
else{

$reg= regist($fname,$lname,$gend,$presentAddress,$phone,$bday,$religion,$email,$uname,$pasword);
if($reg === true){
  echo "Login Successfull";
  header("Location: ../view/Login.php");
}
  else {
  echo "username and password didnt matched ";
}

}
}
}
?>
<form action="../view/Registration.html">
               <input type="submit" value="Go Back to Registration" >
               </form>
</body>
</html>
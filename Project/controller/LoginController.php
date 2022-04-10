<?php 
session_start();
setcookie("username", $username);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LoginController</title>
</head>
<body>
	<?php 

	    $username = $password ="";
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
		function test($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	     $username = test($_POST['username']);
		 $password = test($_POST['password']);

		        if(empty($username)){
         		echo "Please fill up the username";
         		}
         		else if(empty($password)){
         		echo "Please fill up the password";
         	}
         		else{
         			define("FILENAME", "../model/user.json");
         			$handle = fopen(FILENAME, "r");
			       	$fr = fread($handle, filesize(FILENAME));
			       	$arr1 = json_decode($fr);
			       	$fc = fclose($handle);
                        

                        for ($i = 0; $i < count($arr1); $i++) {
			        	if($arr1[$i]->username == $username && $arr1[$i]->password == $password ){
			        		$_SESSION['username'] =$username;
			        		$_COOKIE['username'] =$username;
			        		header("Location: ../view/Homepage.php");
			        		
			        	}
			        	else if ($arr1[$i]->username != $username) {
			        		echo "No User Found";
			        		break;
			  
			        	}
			        	else if ($arr1[$i]->password != $password) {
			        		echo "password did not matched";
			        		break;
		       
			        	}
			        	else{
			        		echo "User name and password did not matched";
			        		break;
			        
              
			        	}
			        }
         		}
		}
	?>
 <form action="../view/Login.php">
               <input type="submit" value="Go Back to Login" />
               </form>
</body>
</html>
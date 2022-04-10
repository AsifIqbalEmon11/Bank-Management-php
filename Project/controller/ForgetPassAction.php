<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ForgetPassAction</title>
</head>
<body>
	<?php 

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

		        if(empty($email)){
         		echo "Please fill up the email";
         		}
         		else if(empty($phone)){
         		echo "Please fill up the phone number";
         	}
         		else{
         			
			        define("FILENAME", "../model/user.json");
		            $handle = fopen(FILENAME, "r");
		            $fr = fread($handle, filesize(FILENAME));
		            $arr1 = json_decode($fr);
		            $fc = fclose($handle);
                        

                        for ($i = 0; $i < count($arr1); $i++) {
			        	if($arr1[$i]->email == $email && 
						   $arr1[$i]->Phone == $phone){
			        		header("Location: ../view/ForgetPass.php");
			        		
			        	}
			        	else if ($arr1[$i]->email != $email) {
			        		echo "No Email Found";
			        	}
			        	else if ($arr1[$i]->Phone != $phone) {
			        		echo "phone did not matched";
			        	}
			        	else{
			        		echo "Email and phone did not matched";
			        	}
			        }
         		}
		}
	?>

</body>
</html>
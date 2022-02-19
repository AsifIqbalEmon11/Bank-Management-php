
<?php
    $firstname = $lastname = $presentAddress = $permanentAddress = $phone = $email = $weblink = $username = $password = $confirmpassword = "";
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
		function test($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		 $firstname = test($_POST['fname']);
		 $lastname = test($_POST['lname']);
		 $presentAddress = test($_POST['presentAddress']);
		 $permanentAddress = test($_POST['parmanentAddress']);
		 $phone = test($_POST['Phone']);
		 $email = test($_POST['email']);
		 $weblink = test($_POST['website']);
		 $username = test($_POST['username']);
		 $password = test($_POST['password']);
		 $confirmpassword = test($_POST['confirmpassword']);
		 $gender = test($_POST['gender']);
		 $religion = test($_POST['religion']);



		try {
         	if (empty($firstname)  ) {
         			echo "Please fill up the firstname";
         		}else if(empty($lastname)){
         		echo "Please fill up the lastname";
         		}else if(empty($presentAddress)){
         		echo "Please fill up the presentAddress";
         		}
         		else if( empty($permanentAddress)){
         		echo "Please fill up the permanentAddress";
         		}
         		else if( empty($phone)){
         		echo "Please fill up the phone";
         		}
         		else if( empty($email)){
         		echo "Please fill up the email";
         		}
         		else if( empty($weblink)){
         		echo "Please fill up the weblink";
         		}
         		else if(empty($username)){
         		echo "Please fill up the username";
         		}
         		else if(empty($password)){
         		echo "Please fill up the password";
         		}
         		else if( empty($confirmpassword)){
         		echo "Please fill up the confirmpassword";
         		}else if ($password != $confirmpassword){
         		echo "password dont match";
         		}else if ($gender!=1 ||$gender != 2){
         		echo "please select gender";
         		}else if($religion == 0){
         		echo "please select religion";
         		}else{
         		echo "file validated successfully";
         		}
        }

        //catch exception
        catch(Exception $e) {
          echo 'Message: ' .$e->getMessage();
        }


	}

?>
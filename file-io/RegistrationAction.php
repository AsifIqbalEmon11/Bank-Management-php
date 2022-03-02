
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
		 $bday = test($_POST['birthday']);
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
         		}  else if($religion == 0){
         		echo "please select religion";
         		}else{

         		$myfile = fopen("asif.txt", "w") or die("Unable to open file!");


                fwrite($myfile, "First Name: " . $firstname." \n".
                "Last Name: " . $lastname . " \n".
                 "Present Address: " . $presentAddress . " \n".
                  "Parmanent Address: " . $permanentAddress . " \n".
                   "Birth Day " . $bday . " \n".
                   "Phone Number: " . $phone . " \n".
                    "Email: " . $email . " \n".
                     "Web Link: " . $weblink . " \n".
                      "Username: " . $username . " \n".
                       "Password: " . $password . " \n".
                        "Confirm Password: " . $confirmpassword . " \n".
                         "Gender: " . $gender . " \n".
                          "Religion: " . $religion . " \n"
                );



                fclose($myfile);
                header("Location: Login.php");

         		}
        }

        //catch exception
        catch(Exception $e) {
          echo 'Message: ' .$e->getMessage();
        }


	}

?>
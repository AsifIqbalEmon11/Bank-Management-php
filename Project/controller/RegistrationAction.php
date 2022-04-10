
<?php

    $firstname = $lastname = $presentAddress = $permanentAddress = $phone = $email = $username = $password = $confirmpassword = "";
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
		 
		 $username = test($_POST['username']);
		 $password = test($_POST['password']);
		 $confirmpassword = test($_POST['confirmpassword']);
		 $gender = test($_POST['gender']);
		 $religion = test($_POST['religion']);



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
         		} 
         		else{
         			define("FILENAME", "../model/user.json");

         				     $handle = fopen(FILENAME, "r");
			        	$fr = fread($handle, filesize(FILENAME));
			        	$arr1 = json_decode($fr);
			        	$lastIndex = count($arr1);
			        	$fc = fclose($handle);

                $handle = fopen(FILENAME, "w");

                $data =array('id' => $lastIndex + 1,'fname'=>$firstname, 'lname'=>$lastname,'presentAddress'=>$presentAddress,'parmanentAddress'=>$permanentAddress,'Phone'=>$phone,'birthday'=>$bday,'email'=>$email,'username'=>$username,'password'=>$password,'gender'=>$gender,'religion'=>$religion);

         		    if($arr1 === NULL){
         		    	$data = array($data);
         		    	$data =json_encode($data);
         		    }
         		    else{
         		    $arr1[] = $data;
         		    $data  =json_encode($arr1);
         		  }
         		    $fw=fwrite($handle,$data);
         		    $fc= fclose($handle);

         		    if ($fw) {
         		    	echo "Data Saved ";
         		    	header("Location: ../view/Login.php");
         		    }
        

        //catch exception
    


	}
}

?>
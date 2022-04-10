<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Customer</title>
</head>
<body>

	<?php 


	$fname = $lname = $account = $balance = $phone = $email = $bday =$religion="";

   if ($_SERVER['REQUEST_METHOD'] === "POST") {
		function test($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		 $Username = test($_POST['sname']);

		 if (empty($Username)) {
         			echo "Please fill up the User name";
         		}

			define("FILENAME", "../model/userc.json");
		$handle = fopen(FILENAME, "r");
		$fr = fread($handle, filesize(FILENAME));
		$arr1 = json_decode($fr);
		$fc = fclose($handle);

			for ($i = 0; $i < count($arr1); $i++) {
				if ($Username == $arr1[$i]->username) {
                    
					$fname = $arr1[$i]->fname;
					$lname = $arr1[$i]->lname;
					$phone = $arr1[$i]->Phone;
					$email = $arr1[$i]->email;
					$account =$arr1[$i]->acctype;
					$balance =$arr1[$i]->balance;
					$bday = $arr1[$i]->birthday;
					$religion = $arr1[$i]->religion;
					
                    break;
				}

		
		else {
			echo "User not found";
		}
	}
	}
	 ?>

	<h1>Customer Profile</h1>

	<form>
<br> <br>
        
        <label> First name : </label>
        <input type="text"  name="fname" value="<?php echo $fname; ?>"readonly> <br><br>
        <label >Last name:</label>
        <input type="text" name="lname " value="<?php echo $lname; ?>"readonly> <br><br>

        <label >Account Type : </label>
        <input type="text" name="acctype" value="<?php echo $account; ?>"
        readonly ><br><br>

        <label >Balance : </label>
        <input type="text" name="balance" value="<?php echo $balance; ?>"
        readonly ><br><br>

        <label>Birthday:</label>
        <input type="text" id="birthday" name="birthday" value="<?php echo $bday; ?>" readonly><br><br>
        <label >Religion</label>
        <input type="text" name="religion" id="religion" value="<?php echo $religion; ?>" readonly>
            
  
        <br><br>

        <label >Phone </label>
        <input type="text" id="Phone" name="Phone" value="<?php echo $phone; ?>"
        readonly ><br><br>
        <label >Email Address </label>
        <input name ="email" type="email" id="email"  name="email" value="<?php echo $email; ?> "readonly> <br> <br>
        </form>
         

<form action="CustomerDetails.php">
    <input type="submit" value="Go Back" />
</form>

 <br><br>


</body>
</html>
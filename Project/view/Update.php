<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Profile</title>
</head>
<body>

	<?php 
	
  $username= $bday=$fname = $lname = $presentAddress = $permanentAddress = $phone = $email= $religion = "";

            if($_SESSION['username']){
            	$username=$_SESSION['username'];

		define("FILENAME", "../model/user.json");
		$handle = fopen(FILENAME, "r");
		$fr = fread($handle, filesize(FILENAME));
		$arr1 = json_decode($fr);
		$fc = fclose($handle);

			for ($i = 0; $i < count($arr1); $i++) {
				if ($username == $arr1[$i]->username) {
					$fname = $arr1[$i]->fname;
					$lname = $arr1[$i]->lname;
					$presentAddress = $arr1[$i]->presentAddress;
					$permanentAddress = $arr1[$i]->parmanentAddress;
					$phone = $arr1[$i]->Phone;
					$email = $arr1[$i]->email;
					$bday = $arr1[$i]->birthday;
					$religion = $arr1[$i]->religion;

				}
			}
		}
		
		else {
			die("Invalid Request");
		}
	 ?>

	<h1>Update Profile</h1>

        <form action="../controller/UpdateController.php" method="post">
        <label> User name : </label>
        <input type="text"  name="username" value="<?php echo $username; ?>" readonly> 
        <br><br>
        <label> First name : </label>
        <input type="text"  name="fname" value="<?php echo $fname; ?>"> <br><br>
        <label >Last name:</label>
        <input type="text" name="lname" value="<?php echo $lname; ?>"> <br><br>

        <label for="birthday" required>Birthday:</label>
        <input type="date" id="birthday" name="birthday"value="<?php echo $bday; ?>" ><br><br>

	    <label > Present Address </label>
        <input type="text" id="Present Address"  name="presentAddress" value="<?php echo $presentAddress; ?>">
         <br><br>

        <label >Parmanent Address </label>
        <input type="text" id="Permanent Address" name="parmanentAddress" value="<?php echo $permanentAddress ?>"  >

         <br> <br>
 
        <label >Phone </label>
        <input type="text" id="Phone" name="Phone" value="<?php echo $phone; ?>"
         ><br><br>
        <label >Email Address </label>
        <input name ="email" type="email" id="email"  name="email" value="<?php echo $email; ?> "> <br> <br>
         
         <input type="submit" value="Update">

<br><br>
<form action="Homepage.php">
    <input type="submit" value="Go Back" />
</form>

 <br><br>


</body>
</html>
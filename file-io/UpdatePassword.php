<!DOCTYPE HTML>
<html>  
<body>
<h1> Update Password </h1>

<?php

    $fileData = fopen("asif.txt", "r\w") or die("Unable to open file!");
    $dataString =  fread($fileData,filesize("asif.txt"));

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $oldPassword = $_POST["oldPassword"];
          $password = $_POST["password"];
          $confirmPassword = $_POST["confirmpassword"];

          if($password == $confirmPassword){

                $fileData = fopen("asif.txt", "r") or die("Unable to open file!");
                $dataString =  fread($fileData,filesize("asif.txt"));
                fclose($fileData);

                 $writeData = fopen("asif.txt", "w") or die("Unable to open file!");



                  fwrite($writeData, str_ireplace($oldPassword, $password, $dataString));
                  fclose($writeData);
                  echo "Password changed successfully";

          }else{
          echo "password dont match";
          }

       }

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	 <fieldset>

       <label for="password">Old Password </label>
       <input  type="password" id="password" required name="oldPassword"> <br>

        <label for="password">New Password </label>
        <input  type="password" id="password" required name="password"> <br>

        <label for="Confirm Password">Confirm Password </label>
        <input  type="confirmpassword" id="confirmpassword" required name="confirmpassword">

    </fieldset>
    <br>
    <input type="submit" value="Submit">

	</form>

</body>
</html>
<!DOCTYPE HTML>
<html>  
<body>

<?php


//echo $dataString;


    $username = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = test_input($_POST["username"]);
      $password = test_input($_POST["password"]);

      if($username!==null||$password!==null){

$fileData = fopen("asif.txt", "r") or die("Unable to open file!");
$dataString =  fread($fileData,filesize("asif.txt"));

      if(strpos($dataString, $username) !== false && strpos($dataString, $password) !== false){
        header("Location: Profile.php");
      // echo $dataString;

        fclose($fileData);
      }else{
             echo "No User Found";
              fclose($fileData);
      }
      }else{
      echo "please enter valid username and password";
      }

    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
      }


?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Username: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
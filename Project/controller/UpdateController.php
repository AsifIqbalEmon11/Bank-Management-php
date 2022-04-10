<?php 
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update User</title>
</head>
<body>

	<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test($data) {
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
                     $username = test($_POST["username"]);
				     $fname = test($_POST['fname']);
            		 $lname = test($_POST["lname"]);
            		 $phone = test($_POST['Phone']);
            		 $bday = test($_POST['birthday']);
            		 $email = test($_POST['email']);
                     $presentAddress  = test($_POST['presentAddress']);
                     $permanentAddress= test($_POST['parmanentAddress']);
   

			if (empty($fname) or empty($lname) or empty($bday) or empty($phone)or empty($email) or empty($presentAddress) or empty($permanentAddress)) {
				echo "Please fill up the form properly";
			}

			else {
		define("FILENAME", "../model/user.json");
		$handle = fopen(FILENAME, "r");
		$fr = fread($handle, filesize(FILENAME));
		$arr1 = json_decode($fr);
		$fc = fclose($handle);

				$handle = fopen(FILENAME, "w");

				for ($i = 0; $i < count($arr1); $i++) {
					if ($username == $arr1[$i]->username) {
				     $arr1[$i]->fname = $fname ;
                     $arr1[$i]->lname = $lname ;
                     $arr1[$i]->Phone =  $phone ;
                     $arr1[$i]->email = $email ;
                     $arr1[$i]->birthday =  $bday ;
                     $arr1[$i]->presentAddress = $presentAddress ;
                     $arr1[$i]->parmanentAddress = $permanentAddress ;
					}
				}

				$data = json_encode($arr1);
				$fw = fwrite($handle, $data);
				$fc = fclose($handle);
				header("Location: ../view/Profile.php");

			}
		}
	?>
	<br>
<a href="../view/Update.php">Go back</a>

</body>
</html>
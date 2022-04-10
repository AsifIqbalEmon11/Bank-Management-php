<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ForPassController</title>
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
                     
				     $password  = test($_POST['password']);
            		 $cpassword = test($_POST["cpassword"]);

            		 if (empty($password) or empty($cpassword)) {
				echo "Please fill up the form properly";
			}
			else if ($password != $cpassword){
         		echo "password dont match";
         		}
			else {
		define("FILENAME", "../model/user.json");
		$handle = fopen(FILENAME, "r");
		$fr = fread($handle, filesize(FILENAME));
		$arr1 = json_decode($fr);
		$fc = fclose($handle);

				$handle = fopen(FILENAME, "w");


				for ($i = 0; $i < count($arr1); $i++) {
					if ($password ===$cpassword ) {
				     $arr1[$i]->password= $password ;
				     header("Location: ../view/Login.php");
                }
                else{
                    echo "old password dont match";
                    break;
                }
				}

				$data = json_encode($arr1);
				$fw = fwrite($handle, $data);
				$fc = fclose($handle);
				

			}

		}


?>

<a href="../view/ForgetPass.php">Go back</a>
</body>
</html>
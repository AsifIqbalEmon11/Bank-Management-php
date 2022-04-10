<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Remove Action</title>
</head>
<body>
	<?php 
  if ($_SERVER['REQUEST_METHOD'] === "POST") {
		function test($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		 $Username = test($_POST['uname']);

		 if (empty($Username)) {
         			echo "Please fill up the User name";
         		}
          else{
          	define("FILENAME", "../model/userc.json");
		$handle = fopen(FILENAME, "r");
		$fr = fread($handle, filesize(FILENAME));
		$arr1 = json_decode($fr);
		$fc = fclose($handle);

		$handle = fopen(FILENAME, "w");
		$arr2 = array();

        for ($i = 0; $i < count($arr1); $i++) {
				if ($Username != $arr1[$i]->username) {
                 array_push($arr2, $arr1[$i]);

				}

          }
          $data = json_encode($arr2);
			$fw = fwrite($handle, $data);
			$fc = fclose($handle);
            header("Location: ../view/Remove.php");
         	}
         	echo "no user found";


		}
	?>
 <a href="../view/Remove.php">Go Back</a>
</form>
</body>
</html>
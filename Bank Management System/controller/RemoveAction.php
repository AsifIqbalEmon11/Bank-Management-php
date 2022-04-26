<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Remove Action</title>
</head>
<body>
	<?php 
	require '../model/customer.php';

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
        $delete=delete($Username);
        if($delete===true){
        	echo "user deleted";
        }else{
          	
         	echo "no user found";
         }

		}
	}
	?>
 <a href="../view/Remove.php">Go Back</a>
</form>
</body>
</html>
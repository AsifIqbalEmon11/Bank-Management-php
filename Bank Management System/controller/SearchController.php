<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer Details</title>
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

		 $Username = test($_POST['sname']);
		  $_COOKIE['sname'] =$Username;
          setcookie("sname", $Username, time()+660,'/');

		 if (empty($Username)) {
         			echo "Please fill up the User name";
         		}
		else{

			require '../model/customer.php';

		$search=search($Username);
        
        if($search===true){

        	header("Location: ../view/ShowCustomer.php");
        }
        else{
        	echo "No record found";
        }

		}

	}
	 ?>
	 	<a href="../view/SearchCustomer.php">Go Back</a>

</body>
</html>

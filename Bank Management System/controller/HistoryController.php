<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer History</title>
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

		 $id = test($_POST['id']);
		  $_COOKIE['id'] =$id;
          setcookie("id", $id, time()+660,'/');

		 if (empty($id)) {
         			echo "Please fill up the User id";
         		}
		else{

			require '../model/customerAcc.php';

		$search=search($id);
        
        if($search===true){

        	header("Location: ../view/ShowHistory.php");
        }
        else{
        	echo "No record found";
        }

		}

	}
	 ?>
	 	<a href="../view/SearchHistory.php">Go Back</a>

</body>
</html>

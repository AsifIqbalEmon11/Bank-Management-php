<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer Details</title>
</head>
<body>

	<h1>Customer List</h1>
    
	<form action="SearchCustomer.php">
    <input type="submit" value="Search">
    </form>

	<?php 
	    define("FILENAME", "../model/userc.json");
		$handle = fopen(FILENAME, "r");
		$fr = fread($handle, filesize(FILENAME));
		$arr1 = json_decode($fr);
		$fc = fclose($handle);
	?>

	<?php 
		if ($arr1 === NULL) {
			echo "<p>No records found.</p>";
		}
		else {
			echo "<table border='1'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>User Name</th>";
			echo "<th>First Name</th>";
			echo "<th>Last Name</th>";
			echo "<th>Account Type</th>";
			echo "<th>Balance</th>";
			echo "<th>Email</th>";
			echo "<th>Phone</th>";
			echo "<th>Gender</th>";
			echo "<th>Birthday</th>";
			echo "<th>Religion</th>";
			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
			for ($i = 0; $i < count($arr1); $i++) {
				echo "<tr>";
				echo "<td>" . $arr1[$i]->username . "</td>";
				echo "<td>" . $arr1[$i]->fname . "</td>";
				echo "<td>" . $arr1[$i]->lname . "</td>";
				echo "<td>" . $arr1[$i]->acctype . "</td>";
				echo "<td>" . $arr1[$i]->balance . "</td>";
				echo "<td>" . $arr1[$i]->email . "</td>";
				echo "<td>" . $arr1[$i]->Phone . "</td>";
				echo "<td>" . $arr1[$i]->gender . "</td>";
				echo "<td>" . $arr1[$i]->birthday . "</td>";
				echo "<td>" . $arr1[$i]->religion . "</td>";

				
			}
			echo "</tbody>";
			echo "</table>";
		}
	?>

	<br><br>

	<a href="Homepage.php">Go Back</a>

</body>
</html>




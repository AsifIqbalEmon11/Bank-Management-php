<!DOCTYPE html>
<html>
<head>
	<?php 
    require 'css/text.php';
    require 'css/table.php';
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer Details</title>
</head>
<body>
	<center>

	<h1>Customer List</h1>
    
	

	<?php 

	require '../model/showCus.php';
	
		if ($result === NULL) {
			echo "<p>No records found.</p>";
		}
		else {
			echo "<table id='customers'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>User Id</th>";
			echo "<th>User Name</th>";
			echo "<th>First Name</th>";
			echo "<th>Last Name</th>";
			echo "<th>Present Address</th>";		
			echo "<th>Email</th>";
			echo "<th>Phone</th>";
			echo "<th>Gender</th>";
			echo "<th>Birthday</th>";
			echo "<th>Religion</th>";
			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";

	if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()){ 
				echo "<tr>";
				echo "<td>" . $row["id"] . "</td>";
				echo "<td>" . $row["username"] . "</td>";
				echo "<td>" . $row["firstname"]. "</td>";
				echo "<td>" . $row["lastname"] . "</td>";
				echo "<td>" . $row["PresentAddress"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td>" . $row["Phone"] . "</td>";
				echo "<td>" . $row["gender"]. "</td>";
				echo "<td>" . $row["birthday"] . "</td>";
				echo "<td>" . $row["religion"]. "</td>";

				
			}
			echo "</tbody>";
			echo "</table>";
		}
	}


	?>

	<br><br>
	<form action="SearchCustomer.php">
    <input type="submit" value="Search">
    </form>
    <br><br>

<form action="Homepage.php">
               <input type="submit" value="Go Back " >
               </form>
</center>
</body>
</html>




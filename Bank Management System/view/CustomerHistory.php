<!DOCTYPE html>
<html>
<head>
	<?php 
    require 'css/text.php';
    require 'css/table.php';
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer History Details</title>
</head>
<body>
	<center>

	<h1>Customer History List</h1>
    
	

	<?php require '../model/customerAcc.php';
	
		if ($result === NULL) {
			echo "<p>No records found.</p>";
		}
		else {
			echo "<table id='customers'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>Account Id</th>";
			echo "<th>User Name</th>";
			echo "<th>First Name</th>";
			echo "<th>Last Name</th>";
			echo "<th>Account Type</th>";		
			echo "<th>Date of Account</th>";
			echo "<th>Balance</th>";
			echo "<th>Transaction Id</th>";
			echo "<th>Transaction Time</th>";
			
			echo "<th>Transaction To</th>";
			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";

	if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()){ 
				echo "<tr>";
				echo "<td>" . $row["AccId"] . "</td>";
				echo "<td>" . $row["username"] . "</td>";
				echo "<td>" . $row["firstname"]. "</td>";
				echo "<td>" . $row["lastname"] . "</td>";
				echo "<td>" . $row["Accountype"] . "</td>";
				echo "<td>" . $row["Date"] . "</td>";
				echo "<td>" . $row["Balance"] . "</td>";
				echo "<td>" . $row["TransactionId"] . "</td>";
				echo "<td>" . $row["TransactionTime"] . "</td>";
				echo "<td>" . $row["TransactionTo"] . "</td>";
				
				
				echo "</tr>";

				
			}
			echo "</tbody>";
			echo "</table>";
		}
	}

	?>
	<br>

	<form action="SearchHistory.php">
    <input type="submit" value="Search">
    </form>

	<br><br>

	<form action="Homepage.php">
               <input type="submit" value="Go Back " >
               </form>
               </center>
</body>
</html>




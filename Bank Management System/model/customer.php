
<?php
function delete($uname){
 
require 'connect.php';

$sql = "DELETE FROM customers WHERE username = '$uname'";
$result = $conn->query($sql);

 return true;

$conn->close();
}

function search($uname){

require 'connect.php';

$sql = "SELECT * FROM customers WHERE username = '$uname'";
$result = $conn->query($sql);
if($result->num_rows > 0){
 return true;
}
else{
	return false;
}


$conn->close();

}


?>


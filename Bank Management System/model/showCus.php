
<?php
require 'connect.php';

$sql = "SELECT * FROM customers ";

$result =$conn->query($sql);



$conn->close();

?>


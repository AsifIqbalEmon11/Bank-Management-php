
<?php

function post($ad,$int,$time,$des){

require 'connect.php';

$stmt = $conn->prepare("INSERT INTO customerad (ad, interest,ttime,description) VALUES (?, ?, ? ,?)");
$stmt->bind_param("ssss", $ads,$ints,$ttime,$descrip);

$ads=$ad;
$ints=$int;
$ttime=$time;
$descrip=$des;
$stmt->execute();

$stmt->close();
$conn->close();
return true;
}

?>


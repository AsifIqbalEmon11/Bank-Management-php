<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>

<?php
require '../model/customerAd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
 
  $ad = test($_POST['ad']);
  $int = test($_POST['interest']);
  $time = test($_POST['time']);
  $des =test($_POST['description']) ;
  

  if (empty($ad) or empty($int) or empty($time)or empty($des)) {
   echo "Please enter name and password properly";
  } else {

$post= post($ad,$int,$time,$des);

if($post === true){
  echo "Ad/Offer Successfully added";
 // header("Location: ../view/Homepage.php");
}
  else {
  echo "Ad/Offer did not added ";

}
  }
}

?>
<form action="../view/PostAd.php">
               <input type="submit" value="Go Back " >
               </form>
</body>
</html>
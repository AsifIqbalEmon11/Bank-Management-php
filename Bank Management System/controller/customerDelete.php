<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>

<?php
require '../model/customerAcc.php';
if (isset($_GET['id'])) {
      $id = $_GET['id'];

  $approve=delete($id);
  if($approve=== true){
   echo "Customer Account adding has been declined!!";
  }

}

?>
<form action="../view/Approve.php">
               <input type="submit" value="Go Back " >
               </form>
</body>
</html>
<?php  
session_start();
if(isset($_COOKIE['id'])){
    $id=$_COOKIE['id'];
}
require '../model/showHistory.php';
 ?>
<!DOCTYPE html>
<html>
<head>
     <?php 
    require 'css/text.php';
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Customer</title>
</head>
<body>
    <center>

	<h1>Customer History Details</h1>

	<form>
<br> <br>

         <label> Account Id : </label>
         <input type="text"  name="username" value="<?php echo $id; ?>" readonly> 
        <br><br>
         <label> User name : </label>
         <input type="text"  name="username" value="<?php echo $username; ?>" readonly> 
        <br><br>
        
        <label> First name : </label>
        <input type="text"  name="fname" value="<?php echo $fname; ?>"readonly> <br><br>
        <label >Last name:</label>
        <input type="text" name="lname " value="<?php echo $lname; ?>"readonly> <br><br>


        <label>Account Type:</label>
        <input type="text" id="birthday" name="AccType" value="<?php echo $acctype; ?>" readonly><br><br>

        <label  >Date of Account:</label>
        <input type="text" id="" name="gender"value="<?php echo $phone; ?>"readonly ><br><br>

        <label >Balance</label>
        <input type="text" name="religion" id="religion" value="<?php echo $email; ?>" readonly>
    
        <br><br>

        <label >Transaction Id </label>
        <input type="text" id="Phone" name="Phone" value="<?php echo $gender; ?>"
        readonly ><br><br>
        <label >Transaction Time </label>
        <input name ="email" type="email" id="email"  name="email" value="<?php echo $bday; ?> "readonly> <br> <br>
        <label >Transaction To</label>
        <input name ="email" type="email" id="email"  name="email" value="<?php echo $tid; ?> "readonly> <br> <br>
        </form>
         

 <br><br>
</center>

</body>
</html>
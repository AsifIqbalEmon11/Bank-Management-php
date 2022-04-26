<?php 
session_start();
if(isset($_COOKIE['username'])){
    $uname=$_COOKIE['username'];
}

 ?>
<!DOCTYPE html>
<html>
<head>
      <?php 
    require 'css/text.php';
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Profile</title>
    <script src="js/upPro.js"></script>
</head>
<body><center>

	<?php 
require '../model/update.php';

    ?>    

	<h1>Update Profile</h1>

        <form action="../controller/UpdateController.php" method="post" onsubmit=" return validateAndSubmit(this);">
         <label> User name : </label>
         <input type="text"  name="username" value="<?php echo $username; ?>" readonly> 
        <br><br>
        <label> First name : </label>
        <input type="text"  name="fname" value="<?php echo $fname; ?>"><span id="err1"></span>
         <br><br>
        <label >Last name:</label>
        <input type="text" name="lname" value="<?php echo $lname; ?>"> <span id="err2"></span>
        <br><br>

        <label for="birthday" required>Birthday:</label>
        <input type="date" id="birthday" name="birthday"value="<?php echo $bday; ?>" ><span id="err3"></span>
        <br><br>

	    <label > Present Address :</label>
        <input type="text" id="Present Address"  name="PresentAddress" value="<?php echo $presentAddress; ?>"><span id="err4"></span>
         <br><br>
 
        <label >Phone :</label>
        <input type="text" id="Phone" name="Phone" value="<?php echo $phone; ?>"
         ><span id="err5"></span>
         <br><br>
        <label >Email Address :</label>
        <input name ="email" type="email" id="email"  name="email" value="<?php echo $email; ?> "><span id="err6"></span>
         <br> <br>
         
         <input type="submit" value="Update">

 <br><br>
 </form>
 <form action="Profile.php">
    <input type="submit" value="Go Back" >
</form>
</center>

</body>
</html>
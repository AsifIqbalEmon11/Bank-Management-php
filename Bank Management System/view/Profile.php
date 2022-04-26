<?php 
session_start();
if(isset($_COOKIE['username'])){
    $name=$_COOKIE['username'];
}
require '../model/showUser.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <?php 
    require 'css/text.php';
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
</head>
<body>
    <center>
	<h1>Profile</h1>
<form >
 <p>Profile details of : <?php echo strtoupper($_COOKIE['username']); ?> </p>

</form>
<form >
	<label> User Id : </label>
         <input type="text"  name="username" value="<?php echo $id; ?>" readonly> 
        <br><br>
         <label> User name : </label>
         <input type="text"  name="username" value="<?php echo $username; ?>" readonly> 
        <br><br>
        <label> First name : </label>
        <input type="text"  name="fname" value="<?php echo $fname; ?>"readonly> <br><br>
        <label >Last name:</label>
        <input type="text" name="lname" value="<?php echo $lname; ?>"readonly> <br><br>

        <label for="birthday" >Birthday:</label>
        <input type="date" id="birthday" name="birthday"value="<?php echo $bday; ?>" readonly><br><br>
        <label for="gender" >Gender:</label>
        <input type="text" id="" name="gender"value="<?php echo $gender; ?>"readonly ><br><br>

	    <label > Present Address </label>
        <input type="text" id="Present Address"  name="PresentAddress" value="<?php echo $presentAddress; ?>"readonly>
         <br><br>
 
        <label >Phone </label>
        <input type="text" id="Phone" name="Phone" value="<?php echo $phone; ?>"readonly
         ><br><br>
         <label >Religion </label>
        <input type="text" id="religion" name="religion" value="<?php echo $religion; ?>"readonly
         ><br><br>
        <label >Email Address </label>
        <input name ="email" type="email" id="email"  name="email" value="<?php echo $email; ?> "readonly> <br> <br>

        </form> 
	<form action="Update.php">
    <input type="submit" value="Update Profile">
</form>
<br><br>
<form action="Homepage.php">
    <input type="submit" value="Go Back" />
</form>

 <br><br>

</center>
</body>
</html>
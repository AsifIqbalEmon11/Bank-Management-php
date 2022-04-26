<!DOCTYPE html>
<html>
<head>
<?php 
    require 'css/text.php';
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Post Ad</title>
      <script src="js/ad.js"></script>
</head>
<body>
    <center>
<h1>Post An Ad/Offer</h1>

<form action="../controller/PostAction.php" method="post" onsubmit=" return validateAndSubmit(this);">
    

	<br><br>

	    <label >Ad's name  : </label>
        <input type="text"  name="ad" ><span id="err1"></span><br><br>

	    <label >Discount % : </label>
        <input type="text"  name="interest" ><span id="err2"></span><br><br>

        <label > Time : </label>
        <input type="text"  name="time" ><span id="err3"></span><br><br>

        <label>Description : </label>
        <textarea id="Description" name="description" rows="4" cols="50">

        </textarea> <span id="err4"></span><br><br>

    <input type="submit" value="Submit">
    <br>
<br>
   
</form>
	<form action="Homepage.php">
    <input type="submit" value="Go Back" >
</form>
</center>
</body>
</html>
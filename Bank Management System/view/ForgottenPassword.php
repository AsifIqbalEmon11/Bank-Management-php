<!DOCTYPE html>
<html>
<head>
    <?php 
    require 'css/text.php';
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ForgottenPassword</title>
    <script src="js/fpas.js"></script>
</head>
<body>
    <center>
	<h3>Can't remember your password? Please provide your email and phone number.</h3>
    <br><br>

	<form  method="post" action="../controller/ForgetPassAction.php" onsubmit=" return validateAndSubmit(this);">
        
        <label for="email">Email : </label>
        <input name ="email" placeholder="makreto@gmail.com" type="email" id="email" name="email"> <span id="err1"></span>
        <br> <br>

        <label for="Phone">Phone: </label>
        <input type="tel" id="Phone" name="Phone" placeholder="+880"  >
        <span id="err2"></span>
        <br><br>

        <input type="submit" name="submit" value="Submit"> <br><br>

    </form>
     <form action="Login.php">
    <input type="submit" value="Go Back" />
</form>
    </center>
</body>
</html>
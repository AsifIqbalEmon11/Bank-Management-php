<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ForgottenPassword</title>
</head>
<body>
	<h3>Can't remember your password? Please provide your email and phone number.</h3>
    <br><br>

	<form  method="post" action="../controller/ForgetPassAction.php" novalidate>
        
        <label for="email">Email : </label>
        <input name ="email" placeholder="makreto@gmail.com" type="email" id="email" required name="email"> 
        <br> <br>

        <label for="Phone">Phone: </label>
        <input type="tel" id="Phone" name="Phone" placeholder="+880"  required>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
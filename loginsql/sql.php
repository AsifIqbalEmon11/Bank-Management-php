<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form  method="post" action="RegistrationAction.php"   novalidate>
    <fieldset>
        <legend>Basic Information :</legend>
        <label for="fname">First name : </label>
        <input type="text" id="fname" name="fname" required><br><br>
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname" required><br><br>


        <label >Gender : </label><br>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">male</label><br>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">female</label><br>
        <br>



    </fieldset>
    <br>
    <br>

    <fieldset>

        <legend>Credential :</legend>
        <label for="username">User Name </label>
        <input  type="text" id="username" required name="username"> <br>

        <label for="password">Password </label>
        <input  type="password" id="password" required name="password"> <br>

        <label for="confirmpassword">Confirm Password </label>
        <input  type="confirmpassword" id="confirmpassword" required name="confirmpassword">

    </fieldset>
    <br>
    <input type="submit" value="Submit">


</form>


</body>
</html>
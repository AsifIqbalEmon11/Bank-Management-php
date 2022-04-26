
<!DOCTYPE html>
<html>
<head>
    <?php 
    require 'css/text.php';
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Customer</title>
     <script src="js/search.js"></script>
</head>
<body>
    <center>

<h1>Search A Customer</h1>

<form method="post" action="../controller/SearchController.php" onsubmit=" validateAndSubmit(this); return false;">

    <label >User name : </label>
        <input type="text"  name="sname" ><span id="err1"></span>
        <br><br>

    <input type="submit" value="Search"><br>
    <br>
</form>
<p id="msg"></p>
<form action="CustomerDetails.php">
               <input type="submit" value="Go Back " >
               </form>
 
</center>
</body>
</html>
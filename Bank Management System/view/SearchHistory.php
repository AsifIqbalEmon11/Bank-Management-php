
<!DOCTYPE html>
<html>
<head>
     <?php 
    require 'css/text.php';
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Customer</title>
     <script src="js/history.js"></script>
</head>
<body>
    <center>
<h1>Search A Customer</h1>

<form method="post" action="../controller/HistoryController.php" onsubmit="validateAndSubmit(this);return false;">
<br>
    <label >User Id : </label>
        <input type="text"  name="id" ><span id="err1"></span><br><br>

    <input type="submit" value="Search"><br>
    <br>

</form>
<p id="msg"></p>
<form action="CustomerHistory.php">
               <input type="submit" value="Go Back " >
               </form>

</center>
</body>
</html>
<!DOCTYPE HTML>
<html>
<body>

<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $oldData = $_POST["oldData"];
          $newData = $_POST["newData"];
          $fileData = fopen("asif.txt", "r") or die("Unable to open file!");
          $dataString =  fread($fileData,filesize("asif.txt"));
          fclose($fileData);

          $writeData = fopen("asif.txt", "w") or die("Unable to open file!");
          fwrite($writeData, str_ireplace($oldData, $newData, $dataString));
          fclose($writeData);


  }

?>


      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

      <select name="field" id="field" required>
                  <option value="0">Select what to update</option>
                  <option value="FirstName">First Name</option>
                  <option value="lastName">Last Name</option>
                  <option value="gender">Gener</option>
                  <option value="birthday">Birthday</option>
                   <option value="presentAddress">Present Address</option>
                    <option value="parmanentAddress">Parmanent Address</option>
                     <option value="phone">Phone</option>
                      <option value="email">Email</option>
                       <option value="personalWebsite">Personal Website</option>

              </select><br>
              <label>Enter your old data</label>
              <input type="text" name="oldData"><br>
              <label>Enter Your New Data</label>
              <input type="text" name="newData">
               <br>
                  <input type="submit" value="Submit">

        </form>

</body>
</html>
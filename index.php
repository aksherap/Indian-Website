<html>
<html>
  <head>
</head>
  <script src="style.js"></script>
<body>
  <h1>USERS PAGE</h2>

<?php
include "connect.php";
include "keyword.php";
?>

<form action="specific.php">
  Please enter a letter/first name to search for:<br>
  <input type="text" name="keyword"><br>
  <input type="submit" value="Submit">
</form>
<hr>
<form action="add_keyword.php">
Please enter a first name here:<br>
  <input type="text" name="fname"><br>
Please enter a last name here:<br>
<input type="text" name="lname"><br>
  
  <input type="submit" value="Submit">
</form>



<?php
include "specific.php";





$mysqli->close();
?>


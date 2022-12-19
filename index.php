<html>
<html>
  <head>
</head>
  <script src="style.js"></script>
 //Title of php Page
<body>
  <h1>USERS PAGE</h2>

<?php
 //connects to database
include "connect.php";
 //finds all users in database
include "keyword.php";
?>
//form is shown to user so they can fill it out
<form action="specific.php">
  Please enter a letter/first name to search for:<br>
  <input type="text" name="keyword"><br>
  <input type="submit" value="Submit">
</form>
<hr>
 //form is shown to user so they can fill it out
<form action="add_keyword.php">
Please enter a first name here:<br>
  <input type="text" name="fname"><br>
Please enter a last name here:<br>
<input type="text" name="lname"><br>
  
  <input type="submit" value="Submit">
</form>



<?php
 //finds specific user that the person typed in the search
include "specific.php";





$mysqli->close();
?>


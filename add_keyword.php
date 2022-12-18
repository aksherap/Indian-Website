<?php
include "connect.php";
$new_fname = $_GET["fname"];
$new_lname = $_GET["lname"];


//search the database for keyword
echo "<h2>Trying to add: $new_fname and $new_lname</h2>";
$sql = "INSERT INTO LoginSystem (id, username, passcode) VALUES(NULL,'$new_fname','$new_lname')";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
  echo "added a row";
}
//include "keyword.php";

?>
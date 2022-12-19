<?php
//connects to database
include "connect.php";
//if there are any values in the table, display them one at a time.
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")  " . $mysqli->connect_error;
}

echo $mysqli->host_info . "<br>";
//searches the database and the table
$sql = "SELECT id, username, passcode FROM LoginSystem";

$result = $mysqli->query($sql);
//tells the user all the information stored in the database
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " username " . $row["username"]. "passcode " . $row["passcode"]. "<br>";
  }
} else {
  echo "0 results";
}
?>

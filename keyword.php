<?php
include "Connection.php";
//if there are any values in the table, display them one at a time.
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")  " . $mysqli->connect_error;
}

echo $mysqli->host_info . "<br>";

$sql = "SELECT id, username, passcode FROM LoginSystem";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " username " . $row["username"]. "passcode " . $row["passcode"]. "<br>";
  }
} else {
  echo "0 results";
}
?>
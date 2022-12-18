<?php
include "connect.php";
$keywordfromform = $_GET["keyword"];

//search the database for keyword
echo "<h2>Show all users with the word $keywordfromform </h2>";
$sql = "SELECT id, username, passcode FROM LoginSystem WHERE username LIKE '%".$keywordfromform ."%' ";

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
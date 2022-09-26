<?php
$servername = "151.106.124.51";
$username = "u188140722_government";
$password = "Admin#3025";
$dbname = "u188140722_government";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

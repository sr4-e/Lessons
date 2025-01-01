<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "samr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to database $dbname";

//Close the Connection
//$conn->close();
?>

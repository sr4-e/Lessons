<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "samr";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully to database $dbname'";
} 
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
//Close the Connection
//$conn = null;

?>


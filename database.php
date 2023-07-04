<?php
ini_set('display_errors', 1);
error_reporting(-1);
$servername = "localhost";
$username = "ashish";
$password = "Root@123";

try {
  $conn = new PDO("mysql:host=$servername;dbname=crawl", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 
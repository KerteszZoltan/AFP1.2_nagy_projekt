<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "webshop";
$port ="3308";

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
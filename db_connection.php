<?php
// Database configuration
$host = "localhost";
$user = "root";
$password = "";
$db = "uploadphp";

// Create connection
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

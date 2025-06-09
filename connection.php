<?php
$servername = "127.0.0.1";  // Or use "localhost"
$username = "root";
$password = "";  // Leave empty for XAMPP default
$database = "library_management_db";  // Update to match your actual DB name
$port = 3307;  // Use the correct port

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

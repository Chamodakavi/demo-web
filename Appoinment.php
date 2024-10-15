<?php
// Database connection parameters
$servername = "localhost"; // Usually localhost
$username = "root";         // Default user for XAMPP/WAMP
$password = "";             // Default password (often empty)
$database = "hotel"; // Replace with your database name

// Create a connection
$conn = new mysqli('localhost', 'root', '', 'hotel');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Close the connection (when done)
$conn->close();
?>


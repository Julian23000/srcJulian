<?php
$servername = "your_servername"; // Replace with your MySQL server hostname
$username = "your_username";     // Replace with your MySQL username
$password = "your_password";     // Replace with your MySQL password
$dbname = "your_database";       // Replace with the name of your MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$servername = "localhost"; // Replace with your MySQL server hostname
$username = "julian23000";     // Replace with your MySQL username
$password = "8IiuTJrM";     // Replace with your MySQL password
$dbname = "wp_julian23000";       // Replace with the name of your MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

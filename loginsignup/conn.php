<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Aryanboy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create the users table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Run the query and check for errors
if ($conn->query($sql) === TRUE) {
  //hello world
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the connection


?>

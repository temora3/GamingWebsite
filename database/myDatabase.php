<?php
// Database connection parameters
$host = "nexus-azure-server.mysql.database.azure.com"; // Replace with your MySQL server name
$username = "rat3mo@nexus-azure-server";       // Replace with your username
$password = "Marindi@12";                         // Replace with your password
$database = "gaming";                    // Replace with your database name

// Connect to the MySQL database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to the Azure MySQL database!";
?>

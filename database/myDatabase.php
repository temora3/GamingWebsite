<?php
// Get the database connection string from environment variables
$dbConnectionString = getenv('gaming'); // Ensure 'gaming' is set in your environment

try {
    // Create the PDO instance
    $db = new PDO($dbConnectionString);

    // Set PDO error mode to exception for better error handling
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Database connection successful!";
} catch (PDOException $e) {
    // Handle connection errors
    die("Connection error: " . $e->getMessage());
}
?>

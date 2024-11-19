<?php
// Get the database connection string from environment variables
$dbConnectionString = getenv('gaming'); // Ensure 'gaming' is set in your environment

try {
    // Define the database connection parameters
    $dsn = "sqlsrv:server=tcp:nexus-server-sql.database.windows.net,1433;Database=nexusgaming-database";
    $username = "rat3mo";
    $password = "Aur0ratriad@5720";

    // Create a PDO instance and set attributes for error handling
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully to SQL Server!";
} catch (PDOException $e) {
    // Handle connection errors
    echo "Error connecting to SQL Server: " . $e->getMessage();
    die();
}
?>

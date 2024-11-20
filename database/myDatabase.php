<?php
// Azure MySQL Database Connection Configuration
$host = 'nexus-azure-server.mysql.database.azure.com';
$username = 'rat3mo';
$password = 'Marindi@12';
$dbname = 'gaming';
$port = 3306; // Default MySQL port

// SSL Configuration (recommended for Azure)
$ssl_ca = '/Users/seanratemo/Downloads/DigiCertGlobalRootCA.crt.pem'; // Download this from Azure portal

try {
    // Create PDO connection with SSL options
    $dsn = "mysql:host=$host;dbname=$dbname;port=$port;charset=utf8mb4";
    
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_SSL_CA => $ssl_ca, // SSL certificate
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    // Establish the database connection
    $pdo = new PDO($dsn, $username, $password, $options);
    
    echo "Successfully connected to Azure MySQL database!";

} catch(PDOException $e) {
    // Error handling
    die("Connection failed: " . $e->getMessage());
}
?>
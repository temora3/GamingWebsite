<?php
// Constants
$servername = "nexus-azure-server.mysql.database.azure.com"; // Update with your Azure MySQL hostname
$username = "rat3mo@nexus-azure-server";               // Update with your Azure MySQL username
$password = "Marindi@12";                              // Update with your Azure MySQL password
$dbname = "gaming";                                      // Update with your Azure database name

// Enable SSL (Optional)
// $ssl_certificate = "/path/to/your/ssl-certificate.pem";  // Path to your SSL certificate file (if needed)

// Create the database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// // Enable SSL if required by Azure
// if (!empty($ssl_certificate)) {
//     $conn->ssl_set(null, null, $ssl_certificate, null, null);
// }

// Verify the database connection
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
} else {
    printf("Database connection successful\n");
}
?>

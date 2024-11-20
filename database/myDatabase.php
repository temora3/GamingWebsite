<?php
//constants
$servername = "nexus-azure-server.mysql.database.azure.com"; // Azure MySQL server hostname
$username = "rat3mo"; // Azure MySQL username with server name
$password = "Marindi@12"; // Your Azure MySQL password
$dbname = "gaming"; // Your database name
$ssl_ca = "/Users/seanratemo/Downloads/DigiCertGlobalRootCA.crt.pem";

// create the database connection
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, $ssl_ca, NULL, NULL); // Enable SSL/TLS connection
mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306, MYSQLI_CLIENT_SSL);

// verify the db connection
if (mysqli_connect_errno($conn)) {
    die("Connection error: " . mysqli_connect_error());
} else {
    printf("Database connection Successful\n");
}
?>
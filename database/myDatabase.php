<?php
$serverName = "nexus-server-sql.database.windows.net";
$username = "rat3mo";
$password = "Aur0ratriad@5720";
$database = "nexusgaming-database";

// Create connection using mysqli
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
mysqli_real_connect(
    $conn, 
    $serverName, 
    $username, 
    $password, 
    $database,
    3306, 
    MYSQLI_CLIENT_SSL
);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// If you want to use PDO instead, you can keep the PDO code:
try {
    $conn = new PDO(
        "sqlsrv:server = tcp:nexus-server-sql.database.windows.net,1433; Database = nexusgaming-database", 
        "rat3mo", 
        "Aur0ratriad@5720"
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>
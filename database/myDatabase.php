<?php
try {
    $dsn = "sqlsrv:server=tcp:nexus-server-sql.database.windows.net,1433;Database=nexusgaming-database";
    $username = "rat3mo";
    $password = "your_actual_password_here"; // Replace with the actual password

    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully to SQL Server!";
} catch (PDOException $e) {
    echo "Error connecting to SQL Server: " . $e->getMessage();
    die();
}
?>

<?php
require_once "myDatabase.php";

if (isset($_POST["submit-btn"])) {
    $username = $_POST["userName"];
    $email = $_POST["userEmail"];
    $password = $_POST["userPassword"];
    $confirmPass = $_POST["confirmPass"];
    $role = $_POST["role"];
    $current_date = date('Y-m-d');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address");
    }

    if (strcmp($password, $confirmPass) !== 0) {
        die("Passwords do not match");
    }

    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    $insert_stmt = $conn->prepare("INSERT INTO userdetails (userName, userEmail, userPassword, roleId) VALUES (?, ?, ?, ?)");
    $insert_stmt->bind_param("ssss", $username, $email, $hashedPass, $role);

    if ($insert_stmt->execute()) {
        header("Location: ../signIn.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $insert_stmt->close();
}
?>

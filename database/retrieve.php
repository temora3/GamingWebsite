<?php
require_once "myDatabase.php";
session_start();

$email = $_POST["userEmail"];
$password = $_POST["userPassword"];

$_SESSION['userEmail'] = $email;

$select_data = $conn->prepare("SELECT * FROM gaming.userdetails WHERE userEmail = ?");
$select_data->bind_param("s", $email); // Bind the email parameter
$select_data->execute();
$result = $select_data->get_result();

if (isset($_POST['submit'])) {
    $_SESSION['userEmail'] = $email; 

    $nameQuery = $conn->prepare("SELECT userName FROM userDetails WHERE userEmail = ?");
    $nameQuery->bind_param("s", $email);
    $nameQuery->execute();
    $userName = $nameQuery->get_result()->fetch_assoc();
    $savedName = $userName['userName'];

    $roleQuery = $conn->prepare("SELECT roleId FROM userDetails WHERE userEmail = ?");
    $roleQuery->bind_param("s", $email);
    $roleQuery->execute();
    $userRole = $roleQuery->get_result()->fetch_assoc();
    $savedRoleValue = $userRole['roleId'];

    $roleTextQuery = $conn->prepare("SELECT role FROM roles WHERE roleId = ?");
    $roleTextQuery->bind_param("s", $savedRoleValue);
    $roleTextQuery->execute();
    $role = $roleTextQuery->get_result()->fetch_assoc();
    $savedRole = $role['role'];

    if (isset($savedRole)) {
        $_SESSION['userName'] = $savedName;
        $_SESSION['role'] = $savedRole;
    }
} else {
    $_SESSION['role'] = null;
}

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    if (password_verify($password, $row['userPassword'])) {

        if (isset($_SESSION['userName'])) {
            header("Location: ../index.php");
            exit();
        }
    } else {
        echo "Incorrect password";
    }
} else {
    echo "Email not found";
}

$select_data->close();
$nameQuery->close();
$roleQuery->close();
$roleTextQuery->close();
$conn->close();
?>

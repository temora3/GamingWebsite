<?php
require_once "myDatabase.php";


if(isset($_POST["submit-btn"])){
    $username = $_POST["userName"];
    $email = $_POST["userEmail"];
    $password = $_POST["userPassword"];
    $confirmPass = $_POST["confirmPass"];
    $role = $_POST["role"];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        print "Invalid email address";
    };

    if(strcmp($password,$confirmPass)!==0){
        print "Passwords not matching";
    }

    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    $insert_data = "INSERT INTO userdetails(userName,userEmail,userPassword,roleId)VALUES('$username', '$email','$password',$role)";

    if($conn->query($insert_data)===TRUE){
        header("Location: ../signIn.php");
        exit();
    }
    else{
        echo $conn -> error;
    }
}
?>
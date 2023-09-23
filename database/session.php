<?php
if (isset($_POST['submit'])) {
    $_SESSION['userEmail'] = $email; 
    
        // Query the database to get the user's name
        $query = "SELECT * FROM userDetails WHERE userEmail = '$email'";
        $nameQuery = mysqli_query($conn, $query);
        $userName = mysqli_fetch_array($nameQuery);
        $savedName = $userName['userName'];
    
        $query2 = "SELECT * FROM userDetails WHERE userEmail = '$email'";
        $roleValue = $conn->query($query2);
        $userRole =  mysqli_fetch_array($roleValue);
        $savedRoleValue = $userRole['roleId'];
    
        $sql = "SELECT * FROM roles where  roleId = '$savedRoleValue'";
        $roleText = $conn->query($sql);
        $role = mysqli_fetch_array($roleText);
        $savedRole = $role['role'];
        
    
        if (isset($savedRole)){
            // Store the user type in the session
            $_SESSION['userName'] = $savedName;
            $_SESSION['role'] = $savedRole;
    }
}else{
    $_SESSION['role'] = null;
}
?>
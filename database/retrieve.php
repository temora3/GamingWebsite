<?php
  session_start();
?>
<?php
    require_once "myDatabase.php";

    $email = $_POST["userEmail"];
    $password = $_POST["userPassword"];

    $_SESSION['userEmail'] = $email;

    // Prepare the SQL statement
    $select_data = "SELECT * FROM gaming.userdetails WHERE userEmail = '$email'";

    // Execute the query
    $result = $conn->query($select_data);

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
    }
    else{
        $_SESSION['role']  = null;
    }

    if ($result->num_rows > 0) {
        // Fetch the row as an associative array
        $row = $result->fetch_assoc();
        // Verify the password
        if ($password == $row['userPassword']){
            // Password is correct
        if(isset($_SESSION['userName'])){
            header("Location: ../index.php");
            exit();
            }
        } else {
            // Password is incorrect
            print "Incorrect password\n";
        }
    } else {
        // No matching email found
        echo "Email not found";
    }

    
?>

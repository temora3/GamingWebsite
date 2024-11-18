<?php
     require_once "../database/myDatabase.php";
     if(isset($_POST["update"])){
      $fullname = ucwords(strtolower($_POST["userName"]));
      $email = strtolower($_POST["userEmail"]);
      $userRole = strtolower($_POST["role"]);
      $userId = $_POST["userID"];
      // $roleId = $_POST["roleID"];
      
      $query = "SELECT * FROM roles WHERE role = '$userRole'";
      $roleValue = $conn->query($query);
      $role = mysqli_fetch_array($roleValue);
      $savedRole = $role['roleId'];

        $sql = "UPDATE userDetails SET userName='$fullname', userEmail='$email', roleID='$savedRole' WHERE userID='$userId' LIMIT 1";

        if ($conn->query($sql) === TRUE) {
          header("Location: ../viewUsers.php?roleID=$roleId");
          exit();
        } else {
          echo "Error updating record: " . $conn->error;
        }
        $conn->close();
     }
?>
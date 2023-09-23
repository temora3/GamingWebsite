<?php
 require_once "../database/myDatabase.php";
 if(isset($_GET["userID"])){
     $userID = $_GET["userID"];
     $sql = "DELETE FROM userDetails WHERE userID=$userID";

     if ($conn->query($sql) === TRUE) {
         header("Location: ../viewUsers.php");
         exit();
     } else {
       echo "Error deleting record: " . $conn->error;
     }
     
     $conn->close();
 }

?>
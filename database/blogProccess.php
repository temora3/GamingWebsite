<?php
require_once "myDatabase.php";
                               
if(isset($_POST["blogSubmit"])) {
    // Get the submitted form data
    $authorName = $_POST['authorName'];
    $blogTitle = $_POST['blogTitle'];
    $blogSubtitle = $_POST['blogSubtitle'];
    $blogText = $_POST['blogText'];
    $blogImage = $_FILES['blogImage']['name'];
    $authorImage = $_FILES['authorImage']['name'];
    $current_time = date('Y-m-d H:i:s');

    // Move uploaded images to a folder (adjust the folder path as needed)
    if (move_uploaded_file($_FILES['blogImage']['tmp_name'], 'D:/Download/htdocs/GamingWeb/Images/' . $blogImage)){
        $blogImagePath = 'Images/' . $blogImage;
    }else{
        echo "Failed to move uploaded image";
    };

    if (move_uploaded_file($_FILES['authorImage']['tmp_name'], 'D:/Download/htdocs/GamingWeb/Images/' . $authorImage)){
        $authorImagePath = 'Images/' . $authorImage;
    }else{
        echo "Failed to move uploaded image";
    };
    };

    $insert_data = "INSERT INTO blogdetails(authorName,blogTitle,blogSubtitle,blogText,imagePath,authorPath,uploadTime)VALUES('$authorName', '$blogTitle','$blogSubtitle','$blogText','$blogImagePath','$authorImagePath','$current_time')";

    if($conn->query($insert_data)===TRUE){
        header("Location: ../viewBlog.php");
        exit();
    }
    else{
        echo $conn -> error;
    }    
?>


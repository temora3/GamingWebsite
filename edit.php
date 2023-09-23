<?php
  session_start();
  require_once "database/myDatabase.php";
  if(isset($_GET["userID"])){
    $userId = $_GET["userID"];
    $spot_user = "SELECT * FROM userDetails LEFT JOIN roles USING (roleId) WHERE userDetails.userId=$userId";
    $res = $conn->query($spot_user);
    $row_spot_user = $res->fetch_assoc();
  }
?>
<!DOCTYPE html>
<html> 
    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
        <meta charset="utf-8">
        <title>Blog create section</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Css/usersTable.css">
    </head>
    <body id="contactStyling" style="background-image: url(../Images/glassEffect.png);">
        <div class="editContainer">
            <div class="item">
            <div class="submitForm">
                    <h4 class="thirdText">Edit <?php print $row_spot_user["userName"];?>'s Data</h4>
                <form action="database/update.php" class="formStyling" enctype="multipart/form-data" method="post">
                    <div class="input-box">
                        <input type="text" class="input" name="userName" value="<?php print $row_spot_user["userName"];?>" required>
                        <label for="">userName</label>
                    </div>

                    <div class="input-box">
                        <input type="text" class="input" name="userEmail" value="<?php print $row_spot_user["userEmail"];?>"required>
                        <label for="">userEmail</label>
                    </div>

                    <div class="input-box">
                        <input type="text" class="input" name="userID" value="<?php print $row_spot_user["userID"];?>" required readonly>
                        <label for="">userID</label>
                    </div>

                    <div class="input-box">
                        <input type="text" class="input" name="role" value="<?php print $row_spot_user["role"];?>" required readonly>
                        <label for="">role</label>
                    </div>

                    <input type="submit" class="btnSubmit" value="Confirm Edit" style="font-family: Poppins;" name="update" id="update">
                </form>
                </div>
            </div>
            <div>
                <nav id="navbar" class="navbar" style="justify-content: right;">
                    <ul style="font-family: Montserrat; top: -250px; " >
                        <li><a href="index.php"><strong>Home</strong></a></li>
                        <li><a href="viewBlog.php"><strong>Blog</strong></a></li>
                        <li><a href="testimonials.php"><strong>Testimonials</strong></a></li>
                        <li><a href="signUp.php"><strong>Sign Up</strong></a></li>
                        <li><a href="signIn.php"><strong>Sign In</strong></a></li>
                        <li><a href="FAQ.php"><strong>FAQ</strong></a></li>
                        <?php  if(isset($_SESSION['role']) && $_SESSION['role'] == "Admin")
                            {?>
                                <li><a href="viewUsers.php"><strong>View Users</strong></a></li>
                            <?php
                            }else{
                            }
                            ?>
                        <li class="dropdown"><i class="bi bi-chevron-right"></i><script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                            <lord-icon 
                                src="https://cdn.lordicon.com/hbvyhtse.json"
                                trigger="hover"
                                colors="primary:#ffffff"
                                style="width:40px;height:40px">
                            </lord-icon>
                            <ul>
                            <li><a href="#"><?php
                                    if(isset($_SESSION['userName'])){
                                        print "Logged in as:".$_SESSION['userName']."<br><br>";
                                        print "Status:".$_SESSION['role'];
                                        ?> 
                                        <a href="includes/logOut.php"><strong>Log Out</strong></a>
                                    <?php 
                                    }else{?>
                                        <a href="signIn.php">Not logged in</a>
                                    <?php };
                                ?></a></li>
                            </ul>
                        </li>
                    </ul>
                <div class="dropdown mobile-nav-toggle" style="top: 40px; right: 70px;"><img src="Images/menu.svg" alt="Menu"/> 
                    <ul style="font-family: Poppins;">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="viewBlog.php">Blog</a></li>
                        <li><a href="testimonials.php">Testimonial</a></li>
                        <li><a href="signUp.php">Sign Up</a></li>
                        <li><a href="signIn.php">Sign In</a></li>
                        <li><a href="FAQ.php">FAQ</a></li>
                        <?php  if(isset($_SESSION['role']) && $_SESSION['role'] == "Admin")
                            {?>
                                <li><a href="viewUsers.php">View Users</a></li>
                            <?php
                            }else{
                            }
                            ?>
                    </ul>
                  </div>

                <div class="dropdown mobile-nav-toggle" style="top: 40px; right: 200px;"><script src="https://cdn.lordicon.com/bhenfmcm.js"></script> 
                    <li class="dropdown"><i class="bi bi-chevron-right"></i>
                        <lord-icon 
                            src="https://cdn.lordicon.com/hbvyhtse.json"
                            trigger="hover"
                            colors="primary:#ffffff"
                            style="width:40px;height:40px">
                        </lord-icon>
                        <ul>
                        <li><a href="#" style="font-family: Poppins;"><?php
                                    if(isset($_SESSION['userName'])){
                                        print "Logged in as:".$_SESSION['userName'];
                                        ?> 
                                        <a href="#" style="font-family: Poppins;"><?php print "Status:".$_SESSION['role']?></a>;
                                        <a href="includes/logOut.php" style="font-family: Poppins;"><strong>Log Out</strong></a>
                                    <?php 
                                    }else{?>
                                        <a href="signIn.php">Not logged in</a>
                                    <?php };
                                ?></a></li>
                        </ul>
                    </li>
                </div>
                </nav>
            </div>
        </div>
    </body>
</html>
<?php
  session_start();
  require_once "includes/dbConnect.php";           
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Existing Users</title>
    <link rel="stylesheet" href="Css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
</head>
<body class="bodyStyle">
  <div>
            <header id="header" class="fixed-top ">
                <div class="container d-flex align-items-center justify-content-between">
                    <nav class="navbar">
                        <ul style="font-family: Poppins; top: 25px; right: 10px;" >
                            <li><a href="index.php"><strong>Home</strong></a></li>
                            <li><a href="viewBlog.php"><strong>Blog</strong></a></li>
                            <li><a href="contactUs.php"><strong>Contact us</strong></a></li>
                            <li><a href="testimonials.php"><strong>Testimonials</strong></a></li>
                            <li><a href="signUp.php"><strong>Sign Up</strong></a></li>
                            <li><a href="signIn.php"><strong>Sign In</strong></a></li>
                            <li><a href="FAQ.php" style="padding-right: 20px;"><strong>FAQ</strong></a></li>
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
                    <div class="dropdown mobile-nav-toggle" style="top: 40px;"><img src="Images/menu.svg" alt="Menu"/> 
                        <ul style="font-family: Poppins;">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="viewBlog.php"><strong>Blog</strong></a></li>
                            <li><a href="contactUs.php"><strong>Contact us</strong></a></li>
                            <li><a href="testimonials.php"><strong>Testimonials</strong></a></li>
                            <li><a href="signUp.php"><strong>Sign Up</strong></a></li>
                            <li><a href="signIn.php"><strong>Sign In</strong></a></li>
                            <li><a href="FAQ.php"><strong>FAQ</strong></a></li> 
                        </ul>
                      </div>

                      <div class="dropdown mobile-nav-toggle" style="top: 40px; right: 80px;"><script src="https://cdn.lordicon.com/bhenfmcm.js"></script> 
                        <li class="dropdown"><i class="bi bi-chevron-right"></i>
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
                      </div>
                    </nav>
                </div>
            </nav>
        </header>
  </div><br><br><br><br><br>
    <table class="content-table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>User Role</th>
            <th>Date Registered</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
              <?php include "includes/table.php" ?>
        </tbody>
      </table>
  </body>
</html>
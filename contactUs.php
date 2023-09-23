<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
        <meta charset="utf-8">
        <title>Contact page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Css/contact.css">
    </head>
    <body id="contactStyling">
        <div class="contactContainer">
            <div class="item">
                <div class="contact">
                    <div class="first-text">Keep in touch</div>
                    <img src="Images/CustomerSupport.png" alt="support" class="controller-img">
                    <div class="socialLinks">
                        <span class="secondText">Connect with us:</span>
                        <div style="display: flex; gap: 1em;">
                            <button class="BtnSocial" style="background: linear-gradient(45deg,#0d1117,#0c25a0);">
                                <a href="https://github.com/temora3" class="signSocial"><img src="Images/github.svg" alt=""></a>
                                <a href="https://github.com/temora3" class="text">Github</a>
                            </button>

                            <button class="BtnSocial" style="background: linear-gradient(45deg,#0628d4,#00f7ff);">
                                <a href="https://www.linkedin.com/in/sean-ratemo-563b20278" class="signSocial"><img src="Images/linkedIn.svg" alt=""></a>
                                <a href="https://www.linkedin.com/in/sean-ratemo-563b20278" class="text">LinkedIn</a>
                            </button>

                            <button class="BtnSocial" style="background: linear-gradient(45deg,#ab06d4,#ff006f,#ff4000,#e9a004);">
                                <div class="signSocial"><img src="Images/Phone.svg" alt=""></div>
                                <div class="text">0717092295</div>
                            </button>
                        </div>
                </div>
                </div>
                <div class="submitForm">
                    <h4 class="thirdText">Contact Us</h4>
                <form action="" class="formStyling">
                    <div class="input-box">
                        <input type="text" class="input" required>
                        <label for="">Name</label>
                    </div>

                    <div class="input-box">
                        <input type="email" class="input" required>
                        <label for="">Email</label>
                    </div>

                    <div class="input-box">
                        <input type="tel" class="input" required>
                        <label for="">Phone</label>
                    </div>

                    <div class="input-box">
                        <textarea name="" class="input" required cols="30" rows="10"></textarea>
                        <label for="">Message</label>
                    </div>
                    <input type="submit" class="btnSubmit" value="Submit" style="font-family: Poppins;">
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
                                        print "Logged in as:".$_SESSION['userName'];
                                        ?>
                                        <a href="#" style="font-family: Poppins;">Status:<?php print$_SESSION['role']?></a>;
                                        <a href="includes/logOut.php" style="font-family: Poppins;"><strong>Log Out</strong></a>
                                    <?php 
                                    }else{?>
                                        <a href="signIn.php">Not logged in</a>
                                    <?php };
                                ?></a></li>
                              </ul>
                            </li>
                        </ul>
                    <div class="dropdown mobile-nav-toggle" style="top: 40px; font-family: Poppins;"><img src="Images/menu.svg" alt="Menu"/> 
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

                      <div class="dropdown mobile-nav-toggle" style="right: 150px; top: 40px;"><script src="https://cdn.lordicon.com/bhenfmcm.js"></script> 
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
                    </nav>
                </div>
        </div>
    </body>
</html>
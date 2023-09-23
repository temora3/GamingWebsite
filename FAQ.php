<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Css/FAQ.css">
    </head>
    <body>
        <section>
            <nav id="navbar" class="navbar">
                <ul style="font-family: Poppins; top: 0em;">
                    <li><a href="index.php"><strong>Home</strong></a></li>
                    <li><a href="viewBlog.php"><strong>Blog</strong></a></li>
                    <li><a href="contactUs.php"><strong>Contact us</strong></a></li>
                    <li><a href="testimonials.php"><strong>Testimonials</strong></a></li>
                    <li><a href="signUp.php"><strong>Sign Up</strong></a></li>
                    <li><a href="signIn.php"><strong>Sign In</strong></a></li>
                    <?php  
                    if(isset($_SESSION['role']) && $_SESSION['role'] == "Admin")
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
            <div class="dropdown mobile-nav-toggle" style="top: 40px;"><img src="Images/menu.svg" alt="Menu"/> 
                <ul style="font-family: Poppins;">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="viewBlog.php">Blog</a></li>
                    <li><a href="contactUs.php">Contact us</a></li>
                    <li><a href="testimonials.php">Testimonial</a></li>
                    <li><a href="signUp.php">Sign Up</a></li>
                    <li><a href="signIn.php">Sign In</a></li>
                    <?php  
                    if(isset($_SESSION['role']) && $_SESSION['role'] == "Admin")
                    {?>
                        <li><a href="viewUsers.php">View Users</a></li>
                    <?php
                    }else{
                    }
                    ?>
                </ul>
            </div>

            <div class="dropdown mobile-nav-toggle" style="top: 40px; right: 50px;"><script src="https://cdn.lordicon.com/bhenfmcm.js"></script> 
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
            <div class="faq">
                <div class="faq-left-desktop">
                    <div class="faq-left-image-desktop">
                        <img src="https://rvs-faq-accordion-card.netlify.app/images/illustration-woman-online-desktop.svg" alt="illustration-woman-online-desktop">
                    </div>
                    <img src="https://rvs-faq-accordion-card.netlify.app/images/illustration-box-desktop.svg" alt="illustration-box-desktop">
                </div>
                <div class="faq-left-mobile">
                    <div class="faq-left-image-mobile">
                        <img src="https://rvs-faq-accordion-card.netlify.app/images/illustration-woman-online-mobile.svg" alt="illustration-woman-online-mobile">
                    </div>
                </div>
                <div class="faq-right">
                    <div class="faq-title">FAQ</div>
                    <div class="faq-body">
                        <details>
                            <summary>Are my card details secure</summary>
                            <p>No one even the people working behind the scenes can see your data as it is secured in a vault</p>
                        </details>
                        <details>
                            <summary>Can I get a refund</summary>
                            <p>Yes. A refund can be given within 2 weeks of purchase if user didnt like the game</p>
                        </details>
                        <details>
                            <summary>How do I reset my password?</summary>
                            <p>Click “Forgot password” from the login page or “Change password” from your profile page. A reset link will be emailed to you.</p>
                        </details>
                        <details>
                            <summary>Can I cancel my subscription?</summary>
                            <p>Yes! Send us a message and we’ll process your request no questions asked.</p>
                        </details>
                        <details>
                            <summary>Do you provide additional support?</summary>
                            <p>Chat and email support is available 24/7. Phone lines are open during normal business hours.</p>
                        </details>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
<?php
  session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
        <meta charset="utf-8">
        <title>Blog Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body class="blogPreset">
        <section id="blog">
            <div class="container d-flex align-items-center justify-content-between">
                <nav id="navbar" class="navbar">
                    <ul style="right: -20px; font-family: Poppins;">
                        <li><a href="index.php"><strong>Home</strong></a></li>
                        <li><a href="contactUs.php"><strong>Contact us</strong></a></li>
                        <li><a href="testimonials.php"><strong>Testimonials</strong></a></li>
                        <li><a href="signUp.php"><strong>Sign Up</strong></a></li>
                        <li><a href="signIn.php"><strong>Sign In</strong></a></li>
                        <li><a href="FAQ.php"><strong>FAQ</strong></a></li>
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
                        </li>
                    </ul>   
                
                </nav>
                
                <nav id="navbar" class="navbar" style="font-family: Poppins;"> 
                    <div class="dropdown mobile-nav-toggle" style="top: 40px;"><img src="Images/menu.svg" alt="Menu" />
                            <ul style="font-family: Montserrat;">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="contactUs.php">Contact us</a></li>
                                <li><a href="testimonials.php">Testimonial</a></li>   
                                <li><a href="signUp.php">Sign Up</a></li>
                                <li><a href="signIn.php">Sign In</a></li>
                                <li><a href="FAQ.php">FAQ</a></li>
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
                </nav>

                <div class="dropdown mobile-nav-toggle" style="top: 40px; right: 100px; font-family: Poppins;"><script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <li class="dropdown"><i class="bi bi-chevron-right"></i>
                <nav id="navbar" class="navbar"> 
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
                </nav>
                </li>
                </div>
            </div>
            <div class="socialLinks">
                <?php  if(isset($_SESSION['role']) && $_SESSION['role'] == "Author")
                {?>
                    <div class="BtnDiv">
                        <button class="BtnSocial" style="background: linear-gradient(45deg,#822300,#d43901,#c10043,#ee0053,#ee0053);">
                            <a href="writeBlog.php" class="signSocial"><img src="Images/bxs-edit.svg" alt=""></a>
                            <a href="writeBlog.php" class="text">Write Blog</a>
                        </button>
                    </div>
                <?php }elseif(!isset($_SESSION['role'])){
                    }?>
            </div>
            <div class="blog-heading slide-fade-up">
                <strong>Recent Blog</strong>
                <h3>Our Blog</h3>
            </div>

            <?php include "includes/functions.php"; ?>
            <div class="blog-box-container">
            <?php  
                $query = "select * from blogdetails order by uploadTime desc limit 6";
                $rows = query($query);
                if($rows)
                {
                foreach ($rows as $row) {
                    ?>
                    <div class="blog-post" onclick="$_SESSION['blog_id_val'] = $row['blog_id'];">
                        <?php include 'includes/blogDetails.php'; ?>
                    </div>
                    <?php
                }
                }else{
                    ?>
                    <div class ="emptyBlog">No blogs have been uploaded </div>
                    <?php
                }
                ?>
            </div>
        </section>
    </body>
</html>
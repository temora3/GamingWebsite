<?php
  session_start();
  die($_SESSION['blogTitle'])
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
        <meta charset="utf-8">
        <title>Blog Article</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Css/style.css">
    </head>
    
    <body class="blogPreset">
        <div id="article">
            <nav id="navbar" class="navbar">
                <ul style="right: -20px;">
                    <li><a href="index.php"><strong>Home</strong></a></li>
                    <li><a href="viewBlog.php"><strong>Blog</strong></a></li>
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
                </ul>
            <div class="dropdown mobile-nav-toggle" style="top: 40px;"><img src="Images/menu.svg" alt="Menu" /> 
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="viewBlog.php">Blog</a></li>
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
            </nav><br><br>
            <?php include "includes/functions.php"; ?>
            <?php
            $blogTitle = $_SESSION['blogTitle'];
            if(isset($_SESSION['blogTitle']))
            { 
                $query = "select * from blogdetails where blogdetails.blogTitle = $blogTitle";
                $row = query($query);
            }
                if(!empty($row))
                {?>
                   <div class="blog-box">
                        <a href="blogArticle.php">
                            <div class="blog-box-img">
                                <img src="<?=get_image($row["imagePath"])?>" alt="blogImg1">
                            </div>
                            <div class="blog-box-text">
                                <strong><?=esc($row["blogTitle"]) ?></strong>
                                <a href="#"><?=esc($row["blogSubtitle"]) ?></a>
                                <p><?=esc($row["blogText"]) ?></p>
                                    <div class="blog-author">
                                        <div class="blog-author-img">
                                            <img src="<?=get_image($row["authorPath"]) ?>" alt="author1">
                                        </div>
                                        <div class="blog-author-text">
                                            <strong><?=esc($row["authorName"]) ?></strong>
                                            <span><?esc($row["uploadTime"])?></span>
                                        </div>
                                    </div>
                            </div>
                        </a>
                    </div>   
                </div> 
                <?php
                }else{
                ?>
                    <div class ="emptyBlog">This Blog does not exist</div>
                    <?php
                }
                ?>
            </div>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
        <meta charset="utf-8">
        <title>Blog Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body class="blogPreset">
        <section id="blog">
            <div>
                <nav id="navbar" class="navbar">
                    <ul style="right: -20px; font-family: Poppins;">
                        <li><a href="index.php"><strong>Home</strong></a></li>
                        <li><a href="contactUs.php"><strong>Contact us</strong></a></li>
                        <li><a href="testimonials.php"><strong>Testimonials</strong></a></li>
                        <li><a href="signUp.php"><strong>Sign Up</strong></a></li>
                        <li><a href="signIn.php"><strong>Sign In</strong></a></li>
                        <li><a href="FAQ.php"><strong>FAQ</strong></a></li>
                    </ul>
                <div class="dropdown mobile-nav-toggle" style="top: 40px;"><img src="Images/menu.svg" alt="Menu" /> 
                    <ul style="font-family: Poppins;">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contactUs.php">Contact us</a></li>
                        <li><a href="testimonials.php">Testimonial</a></li>   
                        <li><a href="signUp.php">Sign Up</a></li>
                        <li><a href="signIn.php">Sign In</a></li>
                        <li><a href="FAQ.php">FAQ</a></li>
                    </ul>
                  </div>
                </nav>
            </div>
            <div class="socialLinks">
                <div class="BtnDiv">
                    <button class="BtnSocial" style="background: linear-gradient(45deg,#822300,#d43901,#c10043,#ee0053,#ee0053);">
                        <a href="writeBlog.html" class="signSocial"><img src="Images/bxs-edit.svg" alt=""></a>
                        <a href="writeBlog.html" class="text">Write Blog</a>
                    </button>
                </div>
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
                    include 'includes/blogDetails.php';
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
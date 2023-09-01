<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
        <meta charset="utf-8">
        <title>Blog create section</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Css/write.css">
    </head>
    <body id="contactStyling">
        <div class="contactContainer">
            <div class="item">
            <div class="submitForm">
                    <h4 class="thirdText">Blog Creation Form</h4>
                <form action="database/blogProccess.php" class="formStyling" enctype="multipart/form-data" method="post">
                    <div class="input-box">
                        <input type="text" class="input" name="authorName" required>
                        <label for="">Author Name</label>
                    </div>

                    <div class="input-box">
                        <input type="text" class="input" name="blogTitle" required>
                        <label for="">Blog Title</label>
                    </div>

                    <div class="input-box">
                        <input type="text" class="input" name="blogSubtitle" required>
                        <label for="">Blog Subtitle</label>
                    </div>

                    <div class="input-box">
                        <input type="text" name="blogText" class="input" required cols="30" rows="10"></input>
                        <label for="">Text</label>
                    </div>

                    <div class="inputFile-box">
                        <input type="file" name="blogImage" id="blogImageUpload" class="inputFile" required>
                        <label for="">Blog Image</label>
                    </div>

                    <div class="inputFile-box" style="left: 400px; top: -273px;">
                        <input type="file" name="authorImage" id="authorImageUpload" class="inputFile" required>
                        <label for="">Author Image</label>
                    </div>

                    <input type="submit" class="btnSubmit" value="Upload Blog" style="font-family: Poppins;" name="blogSubmit" id="blogSubmit">
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
                    </ul>
                <div class="dropdown mobile-nav-toggle" style="top: 40px;"><img src="Images/menu.svg" alt="Menu"/> 
                    <ul style="font-family: Poppins;">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="viewBlog.php">Blog</a></li>
                        <li><a href="testimonials.php">Testimonial</a></li>
                        <li><a href="signUp.php">Sign Up</a></li>
                        <li><a href="signIn.php">Sign In</a></li>
                        <li><a href="FAQ.php">FAQ</a></li>
                    </ul>
                  </div>
                </nav>
            </div>
        </div>
    </body>
</html>
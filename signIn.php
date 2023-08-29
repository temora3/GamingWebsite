<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
        <meta charset="utf-8">
        <title>Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Css/style.css">
    </head>
    <body>
        <div class = "sign">
            <header id="header" class="fixed-top ">
                <div class="container d-flex align-items-center justify-content-between">
                    <nav id="navbar" class="navbar">
                        <ul style="font-family: Poppins; top: 25px; right: 10px;" >
                            <li><a href="index.php"><strong>Home</strong></a></li>
                            <li><a href="viewBlog.php"><strong>Blog</strong></a></li>
                            <li><a href="contactUs.php"><strong>Contact us</strong></a></li>
                            <li><a href="testimonials.php"><strong>Testimonials</strong></a></li>
                            <li><a href="FAQ.php"><strong>FAQ</strong></a></li>
                        </ul>
                    <div class="dropdown mobile-nav-toggle" style="top: 40px;"><img src="Images/menu.svg" alt="Menu"/> 
                        <ul style="font-family: Poppins;">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="viewBlog.php">Blog</a></li>
                            <li><a href="contactUs.php">Contact us</a></li>
                            <li><a href="testimonials.php">Testimonial</a></li>
                            <li><a href="FAQ.php">FAQ</a></li>    
                        </ul>
                      </div>
                    </nav>
                </div>
            </header>
            <div class="formContainer">
            <div class="form-box" style="height: 410px;">
                <div class="button-box">
                    <div class ="btn>"></div>
                    <a href="signUp.php" class="untoggled-button">Sign Up</a>

                    <a href="signIn.php" class="toggled-button">Sign In</a>
                </div>
              <form action="database/retrieve.php" class="input-group" method="post" style="top: 180px;">
                <input type="email" class="input-field" placeholder="Email" name="userEmail" required>
                <input type="password" class="input-field" placeholder="Password" name="userPassword" required>
                <!-- <input type="checkbox" class="check-box"><span class="spanStyl">Remember me</span> -->
                <button type="submit" name="signin" class="submit-btn">Sign in</button>
              </form>
            </div>
        </div>
        </div>
    </body>
</html>
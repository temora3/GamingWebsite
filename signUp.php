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
                    <nav id="navbar" class="navbar" style="justify-content: right;">
                        <ul style="font-family: Poppins; top: 25px;">
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

            <div class="form-box" style="height: 520px;">
                <div class="button-box">
                    <div class ="btn>"></div>
                    <a href="signUp.php" class="toggled-button">Sign Up</a>

                    <a href="signIn.php"class="untoggled-button">Sign In</a>
                </div>
              <form action="database/call.php" class="input-group" method="post" style="top: 120px;">
                <input type="text" class="input-field" placeholder="Name" name="userName" required>
                <input type="email" class="input-field" placeholder="Email" name="userEmail" required>
                <input type="password" class="input-field" placeholder="Password" name="userPassword" required>
                <input type="password" class="input-field" placeholder="Confirm Password" name ="confirmPass" required><br>
                <div class="dropdown-container">
                    <select name="role" class="input-field">
                        <option>--Select Role--</option>
                        <?php
                        require_once "includes/dbConnect.php";

                        $sql = "SELECT * FROM roles";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                            ?>
                                <option value="<?php print $row["roleId"]; ?>"><?php print $row["role"]; ?></option>
                            <?php
                             }
                        } else { print '<option> No results </option>'; }
                        ?>
                    </select><br>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="checkbox" required>
                    <label for="checkbox" class="check-box">
                        <span class="spanStyl">I agree to <a href="terms_and_conditions.html" target="_blank">terms and conditions</a></span>
                    </label>
                </div>
                <button type="submit" class="submit-btn" id="submit-btn" name="submit-btn"> Register</button>
              </form>
            </div>
        </div>
    </body>
</html>
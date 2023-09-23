<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
        <meta charset="utf-8">
        <title>Testimonials</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Css/testmonial.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body class="detailsbody"">
        <nav id="navbar" class="navbar">
              <ul style="font-family:Poppins; top: 0px;">
                  <li><a href="index.php"><strong>Home</strong></a></li>
                  <li><a href="viewBlog.php"><strong>Blog</strong></a></li>
                  <li><a href="contactUs.php"><strong>Contact us</strong></a></li>
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
                      </ul>
                  </li>
              </ul>
          <div class="dropdown mobile-nav-toggle" style="top: 40px;"><img src="Images/menu.svg" alt="Menu"/> 
              <ul style="font-family: Poppins;">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="viewBlog.php">Blog</a></li>
                  <li><a href="contactUs.php">Contact us</a></li>
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

            <div class="dropdown mobile-nav-toggle" style="top: 40px; right: 120px;"><script src="https://cdn.lordicon.com/bhenfmcm.js"></script> 
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
        <h1 style="padding-top: 100px;"> Testimonials</h1>
        <h3 style="text-align: center; font-size: 20px; color: #0fb000;">See what people are saying</h3>
<div class="container">
  <input type="radio" name="nav" id="first" checked/>
  <input type="radio" name="nav" id="second" />
  <input type="radio" name="nav" id="third" />
  
  <label for="first" class="first"></label>
<label for="second"  class="second"></label>
<label for="third" class="third"></label>
 
  <div class="one slide">
    <blockquote>
      <span class="leftq quotes">&ldquo;</span>The site gave me great recommendations on games and I havent stopped playing since<span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img src="Images/person1.jpg" width="170" height="150" />
    <h2>Eren Jaeger</h2>
    <h6>Professional Video Game Tournament Competitor</h6>
  </div>
  
  <div class="two slide">
    <blockquote>
      <span class="leftq quotes">&ldquo;</span>Gave me great discounts on very popular games and helped me save alot of money<span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img src="Images/person2.jpg" width="170" height="140" />
    <h2>Kanado Tanjiro</h2>
    <h6>Casual Gamer</h6>
  </div>
  
  <div class="three slide">
    <blockquote>
      <span class="quotes leftq"> &ldquo;</span>Handles gaming to a very professional level and completely tries to improve user experience<span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img src="Images/person3.jpg" width="170" height="160" />
    <h2>Yuji Itadori</h2>
    <h6>Game Developer Respawn Studios</h6>
  </div>
  
  
</div>
    </body>
</html>
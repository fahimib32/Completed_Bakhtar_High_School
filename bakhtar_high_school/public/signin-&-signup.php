<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<!DOCTYPE html>
    <html lang="en-us">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>Sight Up &amp; Sign In</title>

            <link rel="stylesheet" type="text/css" media="all" href="stylesheets/stylesheet_signin_and_signup.css" />
            <script src="javascripts/singin_signup.js" type="text/javascript"></script>
        </head>
        <body>
            <div class="content wrap">
                <header>
                    <h1>Bakhtar School</h1>
                </header>
                <main>
                    <div class="main wrap">
                        <article>
                            <figure>
                                <a href="index.php">
                                    <img src="images/left-arrow.png" alt="" title="" />
                                </a>
                            </figure>
                            <section>
                                <?php 
                                    echo message();
                                    echo errors();
                                ?>
                                <div class="forms wrap">

                                    <!-- Sign In Form -->
                                    <div class="form signin">
                                        <form action="signin.php" method="post" enctype="multipart/form-data" id="sign-in">
                                            <header>
                                                <h3>Sign In</h3>
                                            </header>
                                            <span>
                                                <input type="email" name="useremail" value="" id="useremail" required autocomplete="off" />
                                                <label for="useremail">Email</label>
                                            </span>
                                            <span>
                                                <input type="password" name="userpassword" value=""  id="userpassword" required />
                                                <label for="userpassword">Password</label>
                                            </span>
                                            <span>
                                                <button type="submit" name="submit">Sign In</button>
                                            </span>
                                        </form>
                                    </div>

                                    <!-- Sign Up Form-->
                                    <div class="form signup">
                                        <form action="create_admin_user.php" method="post" enctype="multipart/form-data" id="sign-up">
                                            <header>
                                                <h3>Sign Up</h3>
                                            </header>
                                            <span>
                                                <input type="email" name="useremail" value="" id="signupemail" required autocomplete="off" />
                                                <label for="signupemail">Email</label>
                                            </span>
                                            <span>
                                                <input type="password" name="userpassword" value="" id="signuppassword" required />
                                                <label for="signuppassword">Password</label>
                                            </span>
                                            <span>
                                                <input type="password" name="confirmpassword" value="" id="confirmpassword" required />
                                                <label for="confirmpassword">Confirm Password</label>
                                            </span>
                                            <span>
                                                <button type="submit" name="submit">Sign Up</button>
                                            </span>
                                            <span>
                                                <a href="#">Forget password?</a>
                                            </span>
                                        </form>
                                    </div>

                                    <!-- Overlay Container-->
                                    <div class="overlay-container">
                                        <div class="overlay-photo">
                                            <div class="signup-face">
                                                <button class="signup-BTN">Sign Up</button>
                                            </div>
                                            <div class="signin-face">
                                                <button class="signin-BTN">Sign In</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>
                        </article>
                    </div>
                </main>
                <footer>
                    <div id="footer-wrap">
                        <figure>
                            <a href="https://www.youtube.com/channel/UCWeqOhfeEvvBpkYH_R5lLpg/featured" target="_blank">
                                <img src="images/social icons/youtube(1).png" alt="" title="" /> 
                            </a>
                        </figure>
                        <figure>
                            <a href="https://github.com/fahimib32/web-deployment#repastory-name---deployee-we" target="_blank">
                                <img src="images/social icons/github (2).png" alt="" title="" />
                            </a>
                        </figure>
                        <figure>
                            <a href="https://twitter.com/fahimib32" target="_blank">
                                <img src="images/social icons/twitter (1).png" alt="" title="" />
                            </a>
                        </figure>
                        <figure>
                            <a href="https://www.facebook.com/" target="_blank">
                                <img src="images/social icons/facebook.png" alt="" title="" />
                            </a>
                        </figure>
                        <div>
                            <p>Copyright &copy; 2022</p>
                        </div>
                    </div>
                </footer>
            </div>
        </body>
    </html>
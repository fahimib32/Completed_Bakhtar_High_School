<?php require_once("../includes/session.php"); ?>

<!DOCTYPE html>
    <html>
        <head lang="en-us">
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>Registeration</title>

            <link rel="stylesheet" type="text/css" media="all" href="stylesheets/stylesheet_registeration.css" />
            <script src="javascripts/dynamic-header-picture.js" type="text/javascript"></script>
        </head>
        <body>
            <div class="content wrap">
                <div class="head wrap">
                    <nav>
                        <button id="menuBTN">
                            <img src="images/align-justify(1).png" alt="" title="" />
                        </button>
                        <div class="nav wrap">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="registeration.php">Registration</a></li>
                                <li><a href="teacher.php">Teacher</a></li>
                                <li><a href="student-feedback.php"> <span id="hide-part">Student</span>Feedback</a></li>
                            </ul>
                        </div>
                    </nav>
                    <header>
                        <h1>Bakhtar School</h1>
                    </header>
                    <div id="user-aria">
                        <button>
                            <a href="signin-&-signup.php">Login</a>
                        </button>
                        <button>
                            <a href="signin-&-signup.php">Sign Up</a>
                        </button>
                    </div>
               </div>
               <main>
                    <article>
                        <section id="slid-wrap">
                            <div>
                                <figure>
                                    <img src="images/school-cropted-big-01.jpg" alt="" title="" />
                                    <figcaption>
                                        Bakhtar High School has expert teachers in the field.
                                    </figcaption>
                                </figure>
                                <figure>
                                    <img src="images/school-cropted-big-02.jpg" alt="" title="" />
                                    <figcaption>
                                        Bakhtar High School has gratuated more than 500,000 students.
                                    </figcaption>
                                </figure>
                                <figure>
                                    <img src="images/school-cropted-big-03.jpg" alt="" title="" />
                                    <figcaption>
                                         If you want the best future for your child, Bakhtar High School is the best choce.
                                    </figcaption>
                                </figure>
                                <figure>
                                    <img src="images/school-cropted-big-08.jpg" alt="" title="" />
                                    <figcaption>
                                        Bakhtar high school has more than 15 years of teaching.
                                    </figcaption>
                                </figure>
                                <figure>
                                    <img src="images/school-cropted-big-05.jpg" alt="" title="" />
                                    <figcaption>
                                        Bakhtar high school has best Libary and Computer Lab.
                                    </figcaption>
                                </figure>
                                <figure>
                                    <img src="images/school-cropted-big-06.jpg" alt="" title="" />
                                    <figcaption>
                                        Knowledege is power.
                                    </figcaption>
                                </figure>
                            </div>
                            <div id="btn-holders">
                                <label for="" class="btn-01"></label>
                                <label for="" class="btn-02"></label>
                                <label for="" class="btn-03"></label>
                                <label for="" class="btn-04"></label>
                                <label for="" class="btn-05"></label>
                                <label for="" class="btn-06"></label>
                            </div>
                        </section>
                        <section>
                            <?php 
                                echo message();
                                echo errors();
                            ?>
                            <div id="registration-wrap">
                                <form action="registered_student.php" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                        <hgroup>
                                            <h3>Edit Student Registration</h3>
                                        </hgroup>
                                        <span class="input-group">
                                            <input type="text" name="studentname" value="" autocomplete="off" id="username" required/>
                                            <label for="username">Name:</label>
                                        </span>
                                        <span class="input-group">
                                            <input type="text" name="fathername" value="" autocomplete="off" id="fathername" required/>
                                            <label for="fathername">Father Name:</label>
                                        </span>
                                        <span class="input-group">
                                            <input type="text" name="lastname" value=""autocomplete="off" id="lastname" required/>
                                            <label for="lastname">Last Name:</label>
                                        </span>
                                        <span class="input-group">
                                            <input type="text" name="grandpaname" value="" autocomplete="off" id="grandpaname" required/>
                                            <label for="grandpaname">Grand Father Name:</label>
                                        </span>
                                        <span class="input-group">
                                            <input type="number" name="idnumber" value="" autocomplete="off" id="national-id-number" required/>
                                            <label for="national-id-number">National Id Number:</label>
                                        </span>
                                        <span class="input-group">
                                            <input type="email" name="studentemail" value="" autocomplete="off" id="useremail" required/>
                                            <label for="useremail">Email Address:</label>
                                        </span>
                                        <span>
                                            <label for="birdhday">Birthday:</label>
                                        </span>
                                        <span>
                                            <input type="date" name="studentbirthday" value="" id="birdhday" />
                                        </span>
                                        <span>
                                            <label for="male">Gender:</label>
                                        </span>
                                        <span>
                                            <label for="male">Male:</label>
                                            <input type="radio" name="gender" value="male" id="male" />
                                            
                                            <label for="female">Female:</label>
                                            <input type="radio" name="gender" value="female" id="female" />
                                        </span>
                                        <figure>
                                            <img src="images/bank/paypal (1).png" alt="" title="" />
                                            <img src="images/bank/master-card.png" alt="" title="" />
                                        </figure>
                                        <span class="input-group">
                                            <input type="number" name="bankaccountnumber" value="" id="card-number" required />
                                            <label for="card-number">Master Card or Paypal Card <span id="hide">number</span></label>
                                        </span>
                                        <span>
                                            <button type="submit" name="submit">Register</button>
                                        </span>
                                    </fieldset>
                                </form>
                            </div>
                        </section>
                    </article>
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
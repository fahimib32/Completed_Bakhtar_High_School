<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>


<!DOCTYPE html>
    <html lang="en-us">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Student Feedback</title>
           
            <link rel="stylesheet" type="text/css" media="all" href="stylesheets/stylesheet_student_feedback.css" />
            
            <script src="javascripts/dynamic-header-picture.js" type="text/javascript"></script>
            <script src="javascripts/teacher-feedback.js" type="text/javascript" defer></script>
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
                        <h1>Bakhar School</h1>
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
                            <div id="feedback-wrap">
                                <form action="add_feedback.php" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                        <hgroup>
                                            <h3>Student Feedback</h3>
                                        </hgroup>
                                        <span class="input-group">
                                            <input type="email" name="student_email" value="" placeholder="" id="useremail" autocomplete="off" required />
                                            <label for="useremail">Email:</label>
                                        </span>
                                        <span class="input-group">
                                            <input type="number" name="student_grade" value="" placeholder="" id="grade" autocomplete="off" required />
                                            <label for="grade">Grade:</label>
                                        </span>
                                        <span>
                                            <label for="school">Feedback about:</label>
                                        </span>
                                        <span>
                                            <span>
                                                <label for="school">Bakhter School</label>
                                                <input type="radio" name="feedback_about" value="school" id="school" />
                                            </span>
                                            <span>
                                                <label for="teacher">Teacher</label>
                                                <input type="radio" name="feedback_about" value="teacher" id="teacher" />
                                            </span>
                                        </span>
                                        <span class="teacher_feedback">
                                            <label for="techerName">Teacher Name:</label>
                                        </span>
                                        <span class="teacher_feedback">
                                            <select id="techerName" name="teachernames">
                                                <optgroup label="1th - 6th grade:">
                                                    <option>Shabir Ahmmad</option>
                                                    <option>Abdull Warise</option>
                                                    <option>Lieqat Sadat</option>
                                                    <option>Ershaddueden</option>
                                                    <option>Hammedulla</option>
                                                    <option>Mahbobe Seqhee</option>
                                                </optgroup>
                                                <optgroup label="7th - 9th grade:">
                                                    <option>Faisal</option>
                                                    <option>Hajiee Mohammad</option>
                                                    <option>Akram</option>
                                                </optgroup>
                                                <optgroup label="10th - 12 grade:">
                                                    <option>Mortaza Nazi</option>
                                                    <option>Tage Mohammad Tlashe</option>
                                                </optgroup>
                                            </select>
                                        </span>
                                        <span>
                                            <label for="comment">Feedback:</label>
                                        </span>
                                        <span>
                                            <textarea id="comment" cols="50" rows="10" name="feedback"></textarea>
                                        </span>
                                        <span>
                                            <button type="submit" name="submit" id="BTNsu">Feedback sent</button>
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
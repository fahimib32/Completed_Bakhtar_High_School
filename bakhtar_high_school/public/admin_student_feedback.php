<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php confirm_logged_in(); ?>

<?php 

    $query = read_query("student_feedback");
    $result = mysqli_query($connection, $query);
    
    query_faild_message($result);

    if($result) {
?>

<!DOCTYPE html>
    <html lang="en-us">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Student Feedback</title>
           
            <link rel="stylesheet" type="text/css" media="all" href="stylesheets/stylesheet_admin_student_feedback.css" />
            
            <script src="javascripts/dynamic-header-picture.js" type="text/javascript"></script>
            <script src="javascripts/teacher-feedback.js" type="text/javascript" async></script>
            <script src="javascripts/showOrHideInformation.js" type="text/javascript" defer></script>
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
                                <li><a href="admin_home.php">Home</a></li>
                                <li><a href="admin_about.php">About</a></li>
                                <li><a href="admin_registration.php">Registration</a></li>
                                <li><a href="admin_teacher.php">Teacher</a></li>
                                <li><a href="admin_student_feedback.php"> <span id="hide-part">Student</span>Feedback</a></li>
                            </ul>
                        </div>
                    </nav>
                    <header>
                        <h1>Bakhar School</h1>
                    </header>
                    <div id="user-aria">
                        <button>
                            <a href="index.php">Home</a>
                        </button>
                        <button>
                            <a href="logout.php">Sign Out</a>
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
                                <?php 
                                    if(isset($_GET["id"])) {
                                        $teacher_id = mysqli_real_escape_string($connection, $_GET["id"]);
                                        
                                        $query = find_feedback_by_id($teacher_id);
                                        $result = mysqli_query($connection, $query);

                                        query_faild_message($result)

                                 ?>
                                <?php while($feedback_table_by_id = mysqli_fetch_assoc($result)) { ?>
                                <form action="update_feedback.php?id=<?php echo $feedback_table_by_id["id"]; ?>" method="post" enctype="multipart/form-data" style=" position: relative;">
                                    <a href="admin_student_feedback.php" class="close" style="position: absolute; right: 1.5rem; top: 0.5rem; font-size: 2rem; font-weight: 900; text-decoration: none; color: inherit;">&times;</a>
                                    <fieldset>
                                        <hgroup>
                                            <h3>Student Feedback</h3>
                                        </hgroup>
                                        <span class="input-group">
                                            <input type="email" name="student_email" value="<?php echo $feedback_table_by_id["student_email"]; ?>" id="useremail" autocomplete="off" required />
                                            <label for="useremail">Email:</label>
                                        </span>
                                        <span class="input-group">
                                            <input type="number" name="student_grade" value="<?php echo $feedback_table_by_id["student_grade"]; ?>" id="grade" autocomplete="off" required />
                                            <label for="grade">Grade:</label>
                                        </span>
                                        <span>
                                            <label for="school">Feedback about:</label>
                                        </span>
                                        <span>
                                            <span>
                                                <label for="school">Bakhter School</label>
                                                <input type="radio" name="feedback_about" value="school" id="school" <?php echo $feedback_table_by_id["feedback_about"] == "school" ? "checked" : null; ?> />
                                            </span>
                                            <span>
                                                <label for="teacher">Teacher</label>
                                                <input type="radio" name="feedback_about" value="teacher" id="teacher" <?php echo $feedback_table_by_id["feedback_about"] == "teacher" ? "checked" : null; ?> />
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
                                            <textarea id="comment" name="feedback" cols="50" rows="10">
                                                <?php echo $feedback_table_by_id["student_comment"]; ?>
                                            </textarea>
                                        </span>
                                        <span>
                                            <button type="submit" name="submit" id="BTNsu">Feedback sent</button>
                                        </span>
                                    </fieldset>
                                </form>
                                    <?php } ?>                                        
                                    <?php } ?>
                            </div>
                        </section>
                        <section>
                            <div class="feedback-card">
                            <?php while($student_feedback_table = mysqli_fetch_assoc($result)) { ?>
                                <div class="student-feedback">
                                    <div class="feedback-card-wrap">
                                        <div class="figcaption-card">
                                            <div class="comment">
                                                <div>
                                                    <h3> Student Feedback about: <?php echo $student_feedback_table["feedback_about"]; ?> </h3>
                                                    <div class="hgroup-card">
                                                        <?php 
                                                            echo $student_feedback_table["feedback_about"] == "teacher" ?
                                                            "<p>Teacher Name: " . $student_feedback_table["teacher_name"] . "</p>" : null 
                                                        ?>
                                                        <p>Student Eamil : <?php echo $student_feedback_table["student_email"]; ?> </p>
                                                        <p>Student Grade : <?php echo $student_feedback_table["student_grade"]; ?> grade</p>
                                                    </div>
                                                    <p>
                                                        <?php echo $student_feedback_table["student_comment"]; ?>
                                                    </p>
                                                </div>
                                                <div class="comment-edit-option">
                                                    <button>
                                                        <a href="?id=<?php echo $student_feedback_table["id"]; ?>#feedback-wrap">Edit</a>
                                                    </button>
                                                    <button>
                                                        <a href="delete_feedback.php?feedback-id=<?php echo $student_feedback_table["id"]; ?>" onclick="return confirm('Are you sure you want to delete student comment?')">Delete</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button>See More</button>
                                    </div>
                                </div>
                            <?php } ?>

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

    <?php  } ?>
<?php isset($connection) ? mysqli_close($connection) : null ?>
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php confirm_logged_in(); ?>


<?php 
    $registered_query = read_query("registered_student");
    $registered_result = mysqli_query($connection, $registered_query);
    
    query_faild_message($registered_result);

    if($registered_result) {
?>


<!DOCTYPE html>
    <html lang="en-us">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>Teacher in Bakhtar School</title>
            
            <link rel="stylesheet" type="text/css" media="all" href="stylesheets/stylesheet_admin_registration.css" />
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
                            <div class="registared-student wrap">
                                <div id="header">
                                    <h3>Registered Student</h3>
                                </div>      
                                <div class="student-card table-header">
                                    <div>
                                        <span>
                                            <p>Name:</p>
                                        </span>
                                        <span>
                                            <p>Father Name:</p>
                                        </span>
                                        <span>
                                            <p>Last Name:</p>
                                        </span>
                                        <span>
                                            <p>Grand Father Name:</p>
                                        </span>
                                        <span>
                                            <p>Email Address:</p>
                                        </span>
                                        <span>
                                            <p>Birthday:</p>
                                        </span>
                                        <span>
                                            <p>Gender:</p>
                                        </span>
                                        <span>
                                            <p>Debit Card Type:</p>
                                        </span>
                                        <span>
                                            <p>Card Number:</p>
                                        </span>
                                        <span>
                                            <p>National ID:</p>
                                        </span>
                                    </div>
                                </div>
                    <?php while($registered_student_table = mysqli_fetch_assoc($registered_result)) { ?> 
                                <div class="student-card">
                                    <div>
                                        <span>
                                            <p><?php echo $registered_student_table["name"]; ?></p>
                                        </span>
                                        <span>
                                            <p><?php echo $registered_student_table["father_name"]; ?></p>
                                        </span>
                                        <span>
                                            <p><?php echo $registered_student_table["last_name"]; ?></p>
                                        </span>
                                        <span>
                                            <p><?php echo $registered_student_table["grand_father_name"]; ?></p>
                                        </span>
                                        <span>
                                            <p><?php echo $registered_student_table["email_address"]; ?></p>
                                        </span>
                                        <span>
                                            <p><?php echo $registered_student_table["birthday"]; ?></p>
                                        </span>
                                        <span>
                                            <p><?php echo $registered_student_table["gender"]; ?></p>
                                        </span>
                                        <span>
                                            <p><?php echo $registered_student_table["card_type"]; ?></p>
                                        </span>
                                        <span>
                                            <p><?php echo $registered_student_table["account_number"]; ?></p>
                                        </span>
                                        <span>
                                            <p><?php echo $registered_student_table["national_id"]; ?></p>
                                        </span>
                                    </div>
                                    <div class="edit-option-registeration">
                                        <button>
                                            <a href="?id=<?php echo $registered_student_table["id"]; ?>#edit-section">Edit</a>
                                        </button>
                                        <button>
                                            <a href="delete_registered_student.php?id=<?php echo $registered_student_table["id"]; ?>" onclick="return confirm('Are you sure you want to delete student registration?')">Delete</a>
                                        </button>
                                    </div>
                                </div>

                            <?php } ?>

                                <div class="student-card">
                                    <div>
                                        <span>
                                            <p>Fahim</p>
                                        </span>
                                        <span>
                                            <p>Shira Jan</p>
                                        </span>
                                        <span>
                                            <p>Ibrahimi</p>
                                        </span>
                                        <span>
                                            <p>Mohammad Sediq</p>
                                        </span>
                                        <span>
                                            <p>fahimib32@gmail.com</p>
                                        </span>
                                        <span>
                                            <p>1998/06/03</p>
                                        </span>
                                        <span>
                                            <p>Male</p>
                                        </span>
                                        <span>
                                            <p>PayPal</p>
                                        </span>
                                        <span>
                                            <p>12345678131214</p>
                                        </span>
                                        <span>
                                            <p>32428</p>
                                        </span>
                                    </div>
                                    <div class="edit-option-registeration">
                                        <button>
                                            <a href="#edit-section">Edit</a>
                                        </button>
                                        <button>
                                            <a href="#">Delete</a>
                                        </button>
                                    </div>
                                </div>
                                <div class="student-card">
                                    <div>
                                        <span>
                                            <p>Shabir</p>
                                        </span>
                                        <span>
                                            <p>Mohammad</p>
                                        </span>
                                        <span>
                                            <p>Mohammady</p>
                                        </span>
                                        <span>
                                            <p>Abdull Kram</p>
                                        </span>
                                        <span>
                                            <p>Shabir.mohammady@gmail.com</p>
                                        </span>
                                        <span>
                                            <p>1970/02/15</p>
                                        </span>
                                        <span>
                                            <p>Male</p>
                                        </span>
                                        <span>
                                            <p>Master Card</p>
                                        </span>
                                        <span>
                                            <p>12345678131214</p>
                                        </span>
                                        <span>
                                            <p>12345</p>
                                        </span>
                                    </div>
                                    <div class="edit-option-registeration">
                                        <button>
                                            <a href="#edit-section">Edit</a>
                                        </button>
                                        <button>
                                            <a href="#">Delete</a>
                                        </button>
                                    </div>
                                </div>
                                <div class="student-card">
                                    <div>
                                        <span>
                                            <p>Warese</p>
                                        </span>
                                        <span>
                                            <p>Ahammad</p>
                                        </span>
                                        <span>
                                            <p>Ahammady</p>
                                        </span>
                                        <span>
                                            <p>Ahmady father</p>
                                        </span>
                                        <span>
                                            <p>wares.ahmmad@gmail.com</p>
                                        </span>
                                        <span>
                                            <p>1970/03/20</p>
                                        </span>
                                        <span>
                                            <p>Male</p>
                                        </span>
                                        <span>
                                            <p>Master Card</p>
                                        </span>
                                        <span>
                                            <p>12345678131214</p>
                                        </span>
                                        <span>
                                            <p>123444</p>
                                        </span>
                                    </div>
                                    <div class="edit-option-registeration">
                                        <button>
                                            <a href="#edit-section">Edit</a>
                                        </button>
                                        <button>
                                            <a href="delete_registered_student.php">Delete</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                if(isset($_GET["id"])) {
                                    $student_id = mysqli_real_escape_string($connection, $_GET["id"]);
                                    $registered_query_by_id = find_registered_student($student_id);
                                    $result = mysqli_query($connection, $registered_query_by_id);

                                    query_faild_message($result);

                                    while($registered_student_by_id_table = mysqli_fetch_assoc($result)) {
                            ?>
                            <div id="edit-section">
                                <form action="update_registered_student.php?student_id=<?php echo $registered_student_by_id_table["id"]; ?>" method="post" enctype="multipart/form-data">
                                    <a href="#" class="close">&times;</a>
                                    <fieldset>
                                        <hgroup>
                                            <h3>Edit Student Registration</h3>
                                        </hgroup>
                                        <span class="input-group">
                                            <input type="text" name="studentname" value="<?php echo $registered_student_by_id_table["name"]; ?>" autocomplete="off" id="username" required/>
                                            <label for="username">Name:</label>
                                        </span>
                                        <span class="input-group">
                                            <input type="text" name="fathername" value="<?php echo $registered_student_by_id_table["father_name"]; ?>" autocomplete="off" id="fathername" required/>
                                            <label for="fathername">Father Name:</label>
                                        </span>
                                        <span class="input-group">
                                            <input type="text" name="lastname" value="<?php echo $registered_student_by_id_table["last_name"]; ?>" autocomplete="off" id="lastname" required/>
                                            <label for="lastname">Last Name:</label>
                                        </span>
                                        <span class="input-group">
                                            <input type="text" name="grandpaname" value="<?php echo $registered_student_by_id_table["grand_father_name"]; ?>" autocomplete="off" id="grandpaname" required/>
                                            <label for="grandpaname">Grand Father Name:</label>
                                        </span>
                                        <span class="input-group">
                                            <input type="number" name="idnumber" value="<?php echo $registered_student_by_id_table["national_id"]; ?>" autocomplete="off" id="national-id-number" required/>
                                            <label for="national-id-number">National Id Number:</label>
                                        </span>
                                        <span class="input-group">
                                            <input type="email" name="studentemail" value="<?php echo $registered_student_by_id_table["email_address"]; ?>" autocomplete="off" id="useremail" required/>
                                            <label for="useremail">Email Address:</label>
                                        </span>
                                        <span>
                                            <label for="birdhday">Birthday:</label>
                                        </span>
                                        <span>
                                            <input type="date" name="studentbirthday" value="<?php echo $registered_student_by_id_table["birthday"]; ?>" id="birdhday" />
                                        </span>
                                        <span>
                                            <label for="male">Gender:</label>
                                        </span>
                                        <span>
                                            <label for="male">Male:</label>
                                            <input type="radio" name="gender" value="male" id="male" <?php echo $registered_student_by_id_table["gender"] == "male" ? "checked" : null;  ?> />
                                            
                                            <label for="female">Female:</label>
                                            <input type="radio" name="gender" value="female" id="female" <?php echo $registered_student_by_id_table["gender"] == "female" ? "checked" : null;  ?> />
                                        </span>
                                        <figure>
                                            <img src="images/bank/paypal (1).png" alt="" title="" />
                                            <img src="images/bank/master-card.png" alt="" title="" />
                                        </figure>
                                        <span class="input-group">
                                            <input type="number" name="bankaccountnumber" value="<?php echo $registered_student_by_id_table["account_number"]; ?>" id="card-number" required />
                                            <label for="card-number">Master Card or Paypal Card <span id="hide">number</span></label>
                                        </span>
                                        <span>
                                            <button type="submit" name="submit">Register</button>
                                        </span>
                                    </fieldset>
                                </form>
                            </div>
                                    <?php } ?>
                            <?php } ?>
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
                    
<?php } ?>
<?php isset($connection) ? mysqli_close($connection) : null ?>
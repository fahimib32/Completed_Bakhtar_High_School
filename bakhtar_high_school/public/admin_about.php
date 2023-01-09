<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
    
<?php confirm_logged_in(); ?>

<?php 
    $query_information = read_query("information");
    $information_result = mysqli_query($connection, $query_information);

    query_faild_message($information_result);

    if($information_result) {
?>

<!DOCTYPE html>
    <html lang="en-us">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>About Bakhtar School</title>
            
            <link rel="stylesheet" type="text/css" media="all" href="stylesheets/stylesheet_admin_about.css" />
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
                            <div id="info">
                                <figure id="add-teacher">
                                    <div class="new-teacher">
                                        <img src="images/avatar.jpg" alt="" title="" />
                                        <div>
                                            <button>
                                                <a href="#add-section">Add Teacher</a>
                                            </button>
                                        </div>
                                    </div>
                                </figure>
                                <?php while($information_table = mysqli_fetch_assoc($information_result)) { ?>
                                             <figure>
                                                    <?php 
                                                        $teacher_photo_query = find_teacher_photo($information_table["id"]);
                                                        $teacher_photo_result = mysqli_query($connection, $teacher_photo_query);
                                                        query_faild_message($teacher_photo_result);
                                                    ?>
                                                    <?php 
                                                        while($teacher_photo_table = mysqli_fetch_assoc($teacher_photo_result)) {
                                                    ?>
                                                        <img src="images/New folder/images/<?php echo htmlentities($teacher_photo_table["teacher_photo"]); ?>" alt="" title="" />
                                                    <?php } ?>
                                                <div class="info-caption">
                                                    <figcaption>
                                                        <h3><?php echo $information_table["class"]; ?></h3>
                                                        <p>
                                                            Fees: <?php echo $information_table["class_fee"] . " AF" . "<br />"; ?>
                                                            <?php echo "+ " . $information_table["bonus"]; ?>
                                                        </p>
                                                    </figcaption>
                                                    <div class="edit-option">
                                                        <button>
                                                            <a href="?id=<?php echo $information_table["id"]; ?>#edit-section">Edit</a>
                                                        </button>
                                                        <button>
                                                            <a href="delete_info_card.php?info_id=<?php echo $information_table["id"]; ?>" onclick="return confirm('Are you sure you want to delete info card')">Delete</a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </figure>
                                <?php } ?>
                            </div>
                            <?php if(isset($_GET["id"])) {

                                $info_card_id = mysqli_real_escape_string($connection, $_GET["id"]);
                                $query = find_info_by_id($info_card_id);

                                $informatino_by_id_result = mysqli_query($connection, $query);

                                query_faild_message($informatino_by_id_result);
                             ?>
                            <div id="edit-section">
                                <form action="edit_info_card.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
                                    <a href="#" class="close">&times;</a>
                                    <?php while($information_table_by_id = mysqli_fetch_assoc($informatino_by_id_result)) { ?>
                                    <fieldset>
                                        <hgroup>
                                            <h3>Edit Information</h3>
                                        </hgroup>
                                        <span>
                                            <input type="text" name="infograde" value="<?php echo $information_table_by_id['class']; ?>" id="grade" required />
                                            <label for="grade">Grade Include:</label>
                                        </span>
                                        <span>
                                            <input type="number" name="classfees" value="<?php echo $information_table_by_id['class_fee']; ?>" id="gradefees" required />
                                            <label for="gradefees">Fees:</label>
                                        </span>
                                        <span>
                                            <input type="text" name="classbonus" value="<?php echo $information_table_by_id['bonus']; ?>" id="gradebonce" required />
                                            <label for="gradebonce">Bonce:</label>
                                        </span>
                                        <span>
                                            <button type="submit" name="submit">Submit Changes</button>
                                        </span>
                                    </fieldset>
                                    <?php } ?>
                                </form>
                            </div>
                            <?php } ?>
                            <div id="add-section">
                                <form action="add_info_card.php" method="post" enctype="multipart/form-data">
                                    <a href="#" class="close">&times;</a>
                                    <fieldset>
                                        <hgroup>
                                            <h3>Add Information</h3>
                                        </hgroup>
                                        <span>
                                            <input type="text" name="infograde" value="" id="addgrade" required />
                                            <label for="addgrade">Grade Include:</label>
                                        </span>
                                        <span>
                                            <input type="number" name="classfees" value="" id="addgradefees" required />
                                            <label for="addgradefees">Fees:</label>
                                        </span>
                                        <span>
                                            <input type="text" name="classbonce" value="" id="addgradebonce" required />
                                            <label for="addgradebonce">Bonce:</label>
                                        </span>
                                        <span>
                                            <button type="submit" name="submit">Add Info</button>
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

<?php } ?>
<?php if(isset($connection)) { mysqli_close($connection);}?>
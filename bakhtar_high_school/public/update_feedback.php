<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php confirm_logged_in(); ?>

<?php 

	if(isset($_POST["submit"]) && isset($_GET["id"])) {

		$feedback_id 	 	= (int) $_GET["id"];
		$student_email		= mysqli_real_escape_string($connection, $_POST["student_email"]);
		$student_grade		= mysqli_real_escape_string($connection, $_POST["student_grade"]);
		$feedback_about		= mysqli_real_escape_string($connection, $_POST["feedback_about"]);
		$teacher_names  	= mysqli_real_escape_string($connection, $_POST["teachernames"]);
		$feedback 			= mysqli_real_escape_string($connection, $_POST["feedback"]);


		$query = update_feedback_query($feedback_id, $student_email, $student_grade, $feedback_about, $teacher_names, $feedback);

		$result = mysqli_query($connection, $query);

		query_faild_message($result);

		if($result) {

			$_SESSION["message"] = "You have successfully edited your comment.";
			header("Location: admin_student_feedback.php");
			exit;
		} else {

			$_SESSION["errors"] = "You have failed to edite your comment.";
			header("Location: admin_student_feedback.php");
			exit;
		}
		
	} else {
		header("Location: admin_student_feedback.php");
		exit;
	}
?>
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php confirm_logged_in(); ?>

<?php 
	if(isset($_GET["feedback-id"])) {

		$feedback_id = (int) $_GET["feedback-id"];

		$query = delete_feedback_query ($feedback_id);
		$result = mysqli_query($connection, $query);

		query_faild_message($result);

		if($result) {

			$_SESSION["message"] = "You have successfully deleted your comment.";
			header("Location: admin_student_feedback.php");
			exit;
		} else {

			$_SESSION["errors"] = "You have failed to delete your comment.";
			header("Location: admin_student_feedback.php");
			exit;
		}

	} else {
		header("Location: admin_student_feedback.php");
		exit;
	}

?>
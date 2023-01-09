<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php confirm_logged_in(); ?>

<?php 

	if(isset($_GET["id"])) {

		$student_id = (int) $_GET["id"];

		$delete_query = delete_student_registeration_query($student_id);
		$result = mysqli_query($connection, $delete_query);

		query_faild_message($result);

		if($result) {

			$_SESSION["message"] = "You have successfully deleted students' registeration.";
			header("Location: admin_registration.php");
			exit;
		} else {

			$_SESSION["errors"] = "You have failed to delete students' registeration.";
			header("Location: admin_registration.php");
			exit;
		}

	} else {
		header("Location: admin_registration.php");
		exit;
	}
?>
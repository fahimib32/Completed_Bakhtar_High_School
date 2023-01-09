<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php confirm_logged_in(); ?>

<?php 
	if(isset($_POST["submit"])) {

		$teacher_name 		= mysqli_real_escape_string($connection, $_POST["addteachername"]);
		$teacher_background = mysqli_real_escape_string($connection, $_POST["addteacherinfor"]);

		$query = add_query($teacher_name, $teacher_background);
		$result = mysqli_query($connection, $query);

		query_faild_message($result);

		if($result) {
			
			$_SESSION["message"] = "You have successfully created a Teacher Info Card";
			header("Location: admin_home.php");
			exit;
		} else {

			$_SESSION["errors"] = "You have failed to create a Teacher Info Card";
			header("Location: admin_home.php");
			exit;
		}

	} else {

		header("Location: admin_home.php");
		exit;
	}
?>
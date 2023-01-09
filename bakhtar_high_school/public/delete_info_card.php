<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php confirm_logged_in(); ?>


<?php 

	if(isset($_GET["info_id"])) {

		$info_id = mysqli_real_escape_string($connection, $_GET["info_id"]);
		$query = delete_info_query($info_id);

		$delete_query_result = mysqli_query($connection, $query);

		query_faild_message($delete_query_result);

		if(mysqli_affected_rows($connection) > 0) {

			$_SESSION["message"] = "You have successfully deleted an Info Card";
			header("Location: admin_about.php");
			exit;
		} else {

			$_SESSION["errors"] = "You have failed to delete an Info Card";
			header("Location: admin_about.php");
			exit;
		}
	} else {
		header("Location: admin_about.php");
		exit;
	}
?>
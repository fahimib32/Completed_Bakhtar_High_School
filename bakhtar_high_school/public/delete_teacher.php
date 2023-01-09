<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php confirm_logged_in(); ?>


<?php 

	if(isset($_GET["id"])) {

		$teacher_id = $_GET["id"];
		
		$query = delete_query ($teacher_id);
		$result = mysqli_query($connection, $query);

		query_faild_message($result);

		if($result) {
			
			$_SESSION["message"] = "You have successfully deleted a Teacher Info Card";
			header("Location: admin_home.php");
			exit;
		} else {

			$_SESSION["errors"] = "You have failed to delete a Teacher Info Card";
			header("Location: admin_home.php");
			exit;
		}

	} else {
		header("Location: admin_home.php");
		exit;
	}
?>
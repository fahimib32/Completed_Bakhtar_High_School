<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php confirm_logged_in(); ?>

<?php 
	if(isset($_POST["submit"]) && isset($_GET["id"])) {

		$info_id 		= (int) mysqli_real_escape_string($connection, $_GET["id"]);
		$class_info 	= mysqli_real_escape_string($connection, $_POST["infograde"]);
		$class_fees 	= mysqli_real_escape_string($connection, $_POST["classfees"]);
		$class_bonus 	= mysqli_real_escape_string($connection, $_POST["classbonus"]);

		$query = update_info_query($info_id, $class_info, $class_fees, $class_bonus);

		$result = mysqli_query($connection, $query);

		query_faild_message($result);

		if($result) {
			
			$_SESSION["message"] = "You have successfully edited an Info Card";
			header("Location: admin_about.php");
			exit;
		} else {

			$_SESSION["errors"] = "You have failed to edite an Info Card";
			header("Location: admin_about.php");
			exit;
		}

	} else {
		header("Location: admin_about.php");
		exit;
	}

?>

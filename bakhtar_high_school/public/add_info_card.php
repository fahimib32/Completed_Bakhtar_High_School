<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php confirm_logged_in(); ?>

<?php
	if(isset($_POST["submit"])) {

		$class_info 	= mysqli_real_escape_string($connection, $_POST["infograde"]);
		$class_fees  	= (int) $_POST["classfees"]; 
		$class_bonus 	= mysqli_real_escape_string($connection, $_POST["classbonce"]);


		$query = add_info_query($class_info, $class_fees, $class_bonus);
		$result = mysqli_query($connection, $query);

		query_faild_message($result);

		if($result) {
			
			$_SESSION["message"] = "You have successfully created an Info Card";
			header("Location: admin_about.php");
			exit;
		} else {

			$_SESSION["errors"] = "You have failed to create an Info Card";
			header("Location: admin_about.php");
			exit;
		}

	} else {
		header("Location: admin_about.php");
		exit;
	}
?>
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php confirm_logged_in(); ?>

<?php 

	if(isset($_POST["submit"]) && isset($_GET["student_id"])) {

		$student_id = (int) $_GET["student_id"];
		$student_name = mysqli_real_escape_string($connection, $_POST["studentname"]);
		$father_name = mysqli_real_escape_string($connection, $_POST["fathername"]);
		$last_name = mysqli_real_escape_string($connection, $_POST["lastname"]);
		$grand_father_name = mysqli_real_escape_string($connection, $_POST["grandpaname"]);
		$natinal_id_number = mysqli_real_escape_string($connection, $_POST["idnumber"]);
		$student_email = mysqli_real_escape_string($connection, $_POST["studentemail"]);
		$student_birthday = mysqli_real_escape_string($connection, $_POST["studentbirthday"]);
		$student_gender = mysqli_real_escape_string($connection, $_POST["gender"]);
		$student_account_number = mysqli_real_escape_string($connection, $_POST["bankaccountnumber"]);	

		if(strlen($student_account_number) >= 8) {
			$cardtype = "Master Card";
		} else {
			$cardtype = "Paypal Card";
		}


		$update_query = update_student_registeration_query ($student_name, $father_name, $last_name, $grand_father_name, $student_email, $student_birthday, $student_gender, $cardtype, $student_account_number, $natinal_id_number, $student_id);

		$update_student_registered = mysqli_query($connection, $update_query);

		query_faild_message($update_student_registered);

		if($update_student_registered) {

			$_SESSION["message"] = "You have successfully updated student registeration.";
			header("Location: admin_registration.php");
			exit;
		} else {

			$_SESSION["errors"] = "You have failed to edite student registeration.";
			header("Location: admin_registration.php");
			exit;
		}

	} else {
			header("Location: admin_registration.php");
			exit;
	}

?>
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>


<?php 
	if(isset($_POST["submit"])) {

		$student_name = mysqli_real_escape_string($connection, $_POST["studentname"]);
		$father_name = mysqli_real_escape_string($connection, $_POST["fathername"]);
		$last_name = mysqli_real_escape_string($connection, $_POST["lastname"]);
		$grand_father_name = mysqli_real_escape_string($connection, $_POST["grandpaname"]);
		$natinal_id_number = mysqli_real_escape_string($connection, $_POST["idnumber"]);
		$student_email = mysqli_real_escape_string($connection, $_POST["studentemail"]);
		$student_birthday = mysqli_real_escape_string($connection, $_POST["studentbirthday"]);
		$student_gender = mysqli_real_escape_string($connection, $_POST["gender"]);
		$student_account_number = mysqli_real_escape_string($connection, $_POST["bankaccountnumber"]);
		// $student_account_number = $_POST["bankaccountnumber"];


		if(strlen($student_account_number) >= 8) {
			$cardtype = "Master Card";
		} else {
			$cardtype = "Paypal Card";
		}

		$query =  student_registeration_query($student_name, $father_name, $last_name,
					$grand_father_name, $student_email, $student_birthday, $student_gender, $cardtype, $student_account_number,
					$natinal_id_number);

		echo $query;

		$result = mysqli_query($connection, $query);
		query_faild_message($result);


		if($result) {
			$_SESSION["message"] = "You have successfully registered.";
			header("Location: registeration.php");
		} else {
			$_SESSION["errors"] = "You have failed to register.";
			header("Location: registeration.php");
		}
	} else {
		header("Location: registeration.php");
	}

?>
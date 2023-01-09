<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>


<?php 
	if(isset($_POST["submit"])) {

		$useremail = mysqli_real_escape_string($connection, $_POST["useremail"]);
		$userpassword = $_POST["userpassword"];
		$userconfirmpassword = $_POST["confirmpassword"];

		if($userpassword === $userconfirmpassword) {

			$employees_query = find_staff_employee_by_email($useremail);
			$employees_result = mysqli_query($connection, $employees_query);
			query_faild_message($employees_result);

			if($employees_result && mysqli_affected_rows($connection) > 0)  {
				while ($employees_table = mysqli_fetch_assoc($employees_result)) {

					if($employees_table["employee_email"] == $useremail) {

						$crypted_password = crypt_password($userpassword);
					
						$query = add_admin($useremail, $crypted_password);
						$result = mysqli_query($connection, $query);

						query_faild_message($result);

						if($result) {
							$_SESSION["message"] = "You have successfully created an Admin Account.";
							header("Location: signin-&-signup.php");
						} else {
							$_SESSION["errors"] = "You have faild to created an Admin Account.";
							header("Location: signin-&-signup.php");
						}
					} else {
						header("Location: signin-&-signup.php");
						$_SESSION["errors"] = "Only staff member can create account!";

					}
				}

			} else {
				header("Location: signin-&-signup.php");
				$_SESSION["errors"] = "Only staff member can create account!";
			}

		} else {
			header("Location: signin-&-signup.php");
			$_SESSION["errors"] = "Your password with confirm passowrd did not match!";
		}

	} else {
		header("Location: signin-&-signup.php");
		exit;
	}
?>
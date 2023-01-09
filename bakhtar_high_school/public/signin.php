<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php

	if(isset($_POST["submit"])) {

		session_start();

		$useremail = mysqli_real_escape_string($connection, $_POST["useremail"]);
		$userpassword = $_POST["userpassword"];


		$query = find_admin_user_by_email($useremail);
		$result = mysqli_query($connection, $query);

		query_faild_message($result);

		if($result && mysqli_affected_rows($connection) > 0) {

			while($admin_user_table = mysqli_fetch_assoc($result)) {

				if(check_password($_POST["userpassword"], $admin_user_table["password"])) {
					$_SESSION["username"] = $admin_user_table["username"];
					$_SESSION["message"] = "You have successfully signed in to Admin Page.";
					header("Location: admin_home.php");
				} else {
					$_SESSION["errors"] = "Username/Password is wrong!";
					header("Location: signin-&-signup.php");
				}
			}
		} else {
			$_SESSION["errors"] = "Username/Password is wrong!";
			header("Location: signin-&-signup.php");
		}

	}	
?>
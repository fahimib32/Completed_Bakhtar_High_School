<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php 

	$_SESSION[] = array();

	if(isset($_COOKIE[session_name()])) {

		setcookie(session_name(), "", time() - 3600, "/");
	}

	session_destroy();
	header("Location: index.php");

?>
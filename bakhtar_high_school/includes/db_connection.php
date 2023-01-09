<?php 
	DEFINE("DB_HOST", "localhost");
	DEFINE("DB_USER", "bakhtar_cms");
	DEFINE("DB_PASS", "news");
	DEFINE("DB_NAME", "bakhtar_high_school");

	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if(mysqli_connect_errno($connection)) {
		$message  = "database connection has failed ";
		$message .= " " . mysqli_connect_error();
		$message .= "( ";
		$message .= mysqli_connect_errno();
		$message .= " )";
	
		die ($message);
	}
?>
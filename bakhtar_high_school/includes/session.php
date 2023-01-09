<?php 

	session_start();

	function message() {

		if(isset($_SESSION["message"])) {

			$output  = "<div class = \" message \" >";
			$output .= "<p>";
			$output .= htmlentities($_SESSION["message"]);
			$output .= "</p>";
			$output .= "</div>";
		
			$_SESSION["message"] = null;

			return $output;
		}

	}


	function errors () {

		if(isset($_SESSION["errors"])) {
			$errors  = "<div class = \" errors \" >";
			$errors .= "<p>";
			$errors .= htmlentities($_SESSION["errors"]);
			$errors .= "</p>";
			$errors .= "</div>";

			$_SESSION ["errors"] = null;

			return $errors;
		}
	}


?>
<?php require_once("../includes/db_connection.php"); ?>

<?php 

	function query_faild_message($query_result) {
		global $connection;

		if(!$query_result) {
			die("Query did not implemented due to " . " (" . mysqli_error($connection) . " ) ");
		}
	}

	function delete_feedback_query ($teacherid) {
		$query  = "DELETE FROM student_feedback ";
		$query .= "WHERE id={$teacherid} ";
		$query .= "LIMIT 1; ";

		return $query;
	}

	function delete_query ($teacher_id) {

		$query  = "DELETE FROM teacher ";
		$query .= "WHERE id={$teacher_id} ";
		$query .= "LIMIT 1;";

		return $query;
	}

	function delete_info_query($info_card_id) {
		$query  = "DELETE FROM information ";
		$query .= "WHERE id = {$info_card_id} ";
		$query .= "LIMIT 1; ";

		return $query;
	}

	function update_query($teacher_name, $teacher_information, $teacher_id) {

		$update_teacher_query  = "UPDATE teacher SET ";
		$update_teacher_query .= "teacher_name = '{$teacher_name}', ";
		$update_teacher_query .= "teacher_info = '{$teacher_information}' ";
		$update_teacher_query .= "WHERE id = {$teacher_id} ";
		$update_teacher_query .= "LIMIT 1;";

		return $update_teacher_query;
	}

	function update_info_query($info_id, $class_info, $class_fees, $class_bonus) {
		$query  = "UPDATE information SET ";
		$query .= "class 		= '{$class_info}', ";
		$query .= "class_fee 	= {$class_fees}, ";
		$query .= "bonus 		= '{$class_bonus}' ";
		$query .= "WHERE id = {$info_id} ";
		$query .= "LIMIT 1";

		return $query;
	}

	function update_feedback_query($commentid, $studentemail, $studentgrade, $commentabout, $teachername, $studentcomment) {

		$query  = "UPDATE student_feedback SET ";
		$query .= "student_email  = '{$studentemail}', ";
		$query .= "student_grade  =  {$studentgrade},  ";
		$query .= "feedback_about = '{$commentabout}', ";
		$query .= $commentabout == "teacher" ? "teacher_name = '{$teachername}', " : null;
		$query .= "student_comment = '{$studentcomment}' ";
		$query .= "WHERE id = {$commentid} ";
		$query .= "LIMIT 1; ";

		return $query;
	}

	function add_query($teacher_name, $teacher_information) {
		$add_teacher_query  = "INSERT INTO teacher (teacher_name, teacher_info) ";
		$add_teacher_query .= " VALUES ('{$teacher_name}', '{$teacher_information}'); ";

		return $add_teacher_query;
	}

	function add_info_query($class_info, $class_fees, $class_bonus) {
		$query  = "INSERT INTO information ( ";
		$query .= "class, class_fee, bonus ";
		$query .= ") VALUES ( ";
		$query .= "'{$class_info}', {$class_fees}, '{$class_bonus}' ";
		$query .= "); ";

		return $query;
	}

	function add_student_feedback_query($studenteamil, $studentgrade, $commentabout, $commentaboutteacher, $comment) {

		$query  = "INSERT INTO student_feedback ( ";
		$query .= "student_email, student_grade, feedback_about, ";
		$query .= $commentabout == "teacher" ? "teacher_name, " : null;
		$query .= " student_comment ";
		$query .= ") VALUES ( ";
		$query .= "'{$studenteamil}', {$studentgrade}, '{$commentabout}', ";
		$query .= $commentabout == "teacher" ? "'{$commentaboutteacher}', " : null;
		$query .= " '{$comment}' );";

		return $query; 
	}

	function read_query($table_name = "teacher") {
		$query_read_teacher  = "SELECT * FROM ";
		$query_read_teacher .= "{$table_name}; ";

		return $query_read_teacher;
	}

	function find_teacher_by_id($teacher_id) {

		$query_find_teacher  = "SELECT * FROM ";
		$query_find_teacher .= "teacher WHERE ";
		$query_find_teacher .= "id = {$teacher_id} ";
		$query_find_teacher .= "LIMIT 1; ";

		return($query_find_teacher);
	}

	function find_info_by_id($info_id) {
		$query  = "SELECT * FROM ";
		$query .= "information WHERE ";
		$query .= "id = {$info_id} ";
		$query .= "LIMIT 1; ";

		return $query;
	}

	function find_feedback_by_id($student_id) {
		$query  = "SELECT * FROM ";
		$query .= "student_feedback WHERE ";
		$query .= "id = {$student_id} ";
		$query .= "LIMIT 1; ";

		return $query;
	}

	function find_admin_user_by_email($useremail) {
		$query  = "SELECT * FROM admin_user ";
		$query .= "WHERE username = '{$useremail}' ";
		$query .= "LIMIT 1; ";

		return $query;
	}

	function find_staff_employee_by_email($useremail) {
		$query  = "SELECT * FROM staff_employee ";
		$query .= "WHERE employee_email = '{$useremail}' ";
		$query .= "LIMIT 1";

		return $query;
	}

	function add_admin($username, $password) {

		$query  = "INSERT INTO admin_user ( ";
		$query .=" username, password ";
		$query .= ") VALUES ( ";
		$query .= "'{$username}', '{$password}' ";
		$query .= "); ";

		return $query;
	}

	function delete_student_registeration_query($studentid) {
		$query  = "DELETE FROM registered_student ";
		$query .= "WHERE id = {$studentid} ";
		$query .= "LIMIT 1";

		return $query;
	}

	function update_student_registeration_query ($studentname, $fathername, $last_name, $grandfathername, $emailaddress, $birthday, $gender, $cardtype, $bankaccount, $nationalid, $studentid) {
		$query  = "UPDATE registered_student SET ";
		$query .= "name = '{$studentname}', ";
		$query .= "father_name = '{$fathername}', ";
		$query .= "last_name = '{$last_name}', ";
		$query .= "grand_father_name = '{$grandfathername}', ";
		$query .= "email_address = '{$emailaddress}', ";
		$query .= "birthday = '{$birthday}', ";
		$query .= "gender = '{$gender}', ";
		$query .= "card_type = '{$cardtype}', ";
		$query .= "account_number = {$bankaccount}, ";
		$query .= "national_id = {$nationalid} ";
		$query .= "WHERE id = {$studentid} ";
		$query .= "LIMIT 1";

		return $query;
	}

	function student_registeration_query($studentname, $fathername, $last_name, $grandfathername, $emailaddress, $birthday, $gender, $cardtype, $bankaccount, $nationalid) {
		$query  = "INSERT INTO registered_student ( ";
		$query .= " name, father_name, last_name, ";
		$query .= " grand_father_name, email_address, ";
		$query .= " birthday, gender, card_type, account_number, ";
		$query .= " national_id ) VALUES ( ";
		$query .= " '{$studentname}', '{$fathername}', '{$last_name}', ";
		$query .= " '{$grandfathername}', '{$emailaddress}', '{$birthday}', ";
		$query .= " '{$gender}', '{$cardtype}', {$bankaccount}, {$nationalid} ";
		$query .= "); ";

		return $query;
	}

	function find_registered_student($studentid) {
		$query  = "SELECT * FROM registered_student ";
		$query .= "WHERE id = {$studentid} ";
		$query .= "LIMIT 1";

		return $query;
	}

	function find_teacher_photo($teacher_id) {
		$query  = "SELECT * FROM teacher_photo ";
		$query .= "WHERE teacher_id = {$teacher_id} ";
		$query .= "LIMIT 1; ";

		return $query;
	}

	function generate_salt($length) {
		$random_unique_string = md5(uniqid(mt_rand(), true));
		$base64_string = base64_encode($random_unique_string);
		$modified_base64_string = str_replace("+", ".", $base64_string);
		$salt = substr($modified_base64_string, 0, $length);

		return $salt;
	}

	function crypt_password($password) {
		$length 		 = 22;
		$salt 			 = generate_salt($length);
		$format 		 = "$2y$10$";
		$format_and_salt = $format . $salt;

		$hash = crypt($password, $format_and_salt);

		return $hash;
	}

	function check_password($password, $existing_hash) {

		$hash = crypt($password, $existing_hash);
		if($hash === $existing_hash) {
			return true;
		} else {
			return false;
		}
	}

	function logged_in() {
		return isset($_SESSION["username"]);
	}

	function confirm_logged_in() {
		if(!logged_in() && logged_in() === false) {
			header("Location: signin-&-signup.php");
			exit;
		}
	}

	// function crypt_password($password) {
	// 	$length = 22;
	// 	$salt = generate_salt($length);
	// 	$format = "$2y$10$";
	// 	$format_and_salt = $format . $salt;

	// 	$hash = crypt($password, $format_and_salt);

	// 	return $hash;
	// }
?>
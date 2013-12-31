<?php
	if (basename($_SERVER['HTTP_REFERER']) != "login.php") {
		$loc = 'Location: login.php';
		header($loc);
	}
	
	include('library.php');

	connect_isit();

	if($_POST) {
		if (login_to_db($_POST["username"], $_POST["password"])) {
			close_con();
			$loc = 'Location: admin.php';
			header($loc);
		} else {
			close_con();
			$loc = 'Location: login.php?auth=failed';
			header($loc);
		}
	}
?>

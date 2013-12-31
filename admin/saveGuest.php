<?php

	include('library.php');

	connect_isit();

	if (!$_POST) {
		header('Location: admin.php');
	}

	if (add_guest($_POST["fName"], $_POST["lName"], $_POST["email"], $_POST["phone"])) {
		close_con();
		$loc = 'Location: viewGuests.php';
		header($loc);
	} else {
		close_con();
		$loc = 'Location: admin.php';
		header($loc);
	}
?>

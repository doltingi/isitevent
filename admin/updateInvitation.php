<?php

	include('library.php');

	connect_isit();

	if (update_inv($_GET["guestId"])) {
		close_con();
		$loc = 'Location: viewGuests.php';
		header($loc);
	} else {
		close_con();
		$loc = 'Location: admin.php';
		header($loc);
	}
?>

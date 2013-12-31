<?php

	include('library.php');

	connect_isit();

	if (!$_POST) {
		header('Location: admin.php');
	}

	$email_groups = array();
	$email_list = array();

	for ($i = 0; $i < count($_POST["sendTo"]); $i++) {
		$email_groups[] = $_POST["sendTo"][$i];
	}

	$admin_list = retrieve_admin_list();
	$norsvp_list = retrieve_no_rsvp_list();
	$attending_list = retrieve_rsvp_attending_list();
	$not_attending_list = retrieve_rsvp_not_attending_list();

	close_con();

	for ($i = 0; $i < count($email_groups); $i++) {
		if ($email_groups[$i] == 'admin') {
			for($j = 0;$j < mysql_num_rows($admin_list); $j++) {
	  			$row = mysql_fetch_array($admin_list);
	  			$email_list[] = $row["email"];
	  		}
		} elseif ($email_groups[$i] == 'norsvp') {
			for($j = 0;$j < mysql_num_rows($norsvp_list); $j++) {
	  			$row = mysql_fetch_array($norsvp_list);
	  			$email_list[] = $row["email"];
	  		}
		} elseif ($email_groups[$i] == 'attending') {
			for($j = 0;$j < mysql_num_rows($attending_list); $j++) {
	  			$row = mysql_fetch_array($attending_list);
	  			$email_list[] = $row["email"];
	  		}
		} elseif ($email_groups[$i] == 'notattending') {
			for($j = 0;$j < mysql_num_rows($not_attending_list); $j++) {
	  			$row = mysql_fetch_array($not_attending_list);
	  			$email_list[] = $row["email"];
	  		}
		}
	}

	$comma_separated = implode(",", $email_list);

	$subject = $_POST["title"];
	
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
	$headers .= "From: admin@isitevent.ca\r\n";
	$headers .= "Reply-To: admin@isitevent.ca\r\n";
    
    $message = '<html lang="en">';
    $message .= '<body><style>.container {padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;}';
    $message .= '@media (min-width: 1200px) {.container {max-width: 1170px;}}@media (min-width: 992px) {.container {max-width: 970px;}}@media (min-width: 768px) {.container {max-width: 750px;}}';
    $message .= '.jumbotron {padding: 30px;margin-bottom: 30px;font-size: 21px;font-weight: 200;line-height: 2.1428571435;color: inherit;background-color: #eeeeee;}';
    $message .= '.jumbotron h1 {line-height: 1;color: inherit;}.jumbotron p {line-height: 1.4;}.container .jumbotron {border-radius: 6px;}';
    $message .= '@media (min-width: 768px) {.jumbotron {padding-top: 48px;padding-bottom: 48px;}.container .jumbotron {padding-right: 60px;padding-left: 60px;}.jumbotron h1 {font-size: 40px;}}';
    $message .= '</style><div class="container"><div class="jumbotron"><h1>' . $_POST["title"] . '</h1><br /><br />';
    $message .= '<p>' . $_POST["message"] . '</p></div></div>';
    $message .= '</body></html>';
	mail($comma_separated, $subject, $message, $headers);
	header('Location: viewGuests.php');
?>

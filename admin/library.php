<?php 

	$db_name = "isitevent";
	$db_username = "isitevent";
	$db_admin = "Admin";
	$db_guest = "Guest";
	$db_response = "Response";
	$db_pwd = "P@ssw0rd00";
	$hostname = "isitevent.db.11837442.hostedresource.com";
	$db_con;

	function connect_isit() {
		global $hostname, $db_username, $db_pwd, $db_name, $db_con;
		$db_con = mysql_connect($hostname, $db_username, $db_pwd) or die("There was an error connecting");
		mysql_select_db($db_name) or die("There was an error in selecting the database.");
	}

	function close_con() {
		global $db_con;
		mysql_close($db_con);
	}
	
	function login_to_db($uname, $pword) {
		$success = false;
		global $db_admin;
		
		// extracts a row from users table that matches user name from the input.
		// the input has been securely enhanced by using mysql_real_escape_string()
		$qry = sprintf("SELECT password FROM %s WHERE adminId='%s'", $db_admin, mysql_real_escape_string($uname));
		$qry_res = mysql_query($qry) or die ("Username or password does not exist.<br />".mysql_error());
		
		// if there is a row extracted, there is a user id that matches the input by the user
		if (mysql_num_rows($qry_res) == 1) {
			$row = mysql_fetch_array($qry_res);
			// holds values from the extracted row
			$encrypted_pw = $row["password"];
			// compare the encrypted password
			if ($encrypted_pw == md5($pword)) {
				$success = true;
				session_start();
				// sets the attempt to true, and stores session values accordingly
				setcookie ("PHPSESSID", session_id(), time() + 600);
				$_SESSION["uname"] = $uname;
			}
		}
		// otherwise, login attempt failed
		return $success;
	}

	function check_login() {
		return isset($_SESSION["uname"]);
	}

	function retrieve_guest_email($guest_email) {
		$qry = sprintf("SELECT fName, lName FROM Guest WHERE email='%s'", mysql_real_escape_string($guest_email));
		$qry_res = mysql_query($qry) or die ("There is no such guest<br />".mysql_error());

	  	// retrieve the user's bringGuest result and return
	  	if (mysql_num_rows($qry_res) == 1) {
	  		$row = mysql_fetch_array($qry_res);
	  		return $row;
	  	} else {
	  		return NULL;
	  	}
	}

	function retrieve_guest_phone($guest_phone) {

		$phone_trim = array("(", ")", "-");

		$qry = sprintf("SELECT fName, lName FROM Guest WHERE phone='%s'", mysql_real_escape_string(str_replace($phone_trim, "", $phone)));
		$qry_res = mysql_query($qry) or die ("There is no such guest<br />".mysql_error());

	  	// retrieve the user's bringGuest result and return
	  	if (mysql_num_rows($qry_res) == 1) {
	  		$row = mysql_fetch_array($qry_res);
	  		return $row;
	  	} else {
	  		return NULL;
	  	}
	}

	function retrieve_rsvp_attending_list() {
		$qry = sprintf("SELECT Guest.guestId AS guestId, fName, lName, email, phone FROM Guest RIGHT JOIN Response ON (Guest.guestId = Response.guestId) WHERE Response.attending='y'");
		$qry_res = mysql_query($qry) or die ("Error collecting guest list<br />".mysql_error());
		return $qry_res;
	}

	function retrieve_rsvp_not_attending_list() {
		$qry = sprintf("SELECT Guest.guestId AS guestId, fName, lName, email, phone, attending FROM Guest RIGHT JOIN Response ON (Guest.guestId = Response.guestId) WHERE Response.attending='n'");
		$qry_res = mysql_query($qry) or die ("Error collecting guest list<br />".mysql_error());
		return $qry_res;
	}

	function retrieve_no_rsvp_list() {
		$qry = sprintf("SELECT Guest.guestID AS guestId, fName, lName, email, phone FROM Guest LEFT JOIN Response ON (Guest.guestId = Response.guestId) WHERE Response.guestID IS NULL AND invited='y'");
		$qry_res = mysql_query($qry) or die("Error collecting no rsvp guest list<br />".mysql_error());
		return $qry_res;
	}

	function retrieve_no_inv_list() {
		$qry = sprintf("SELECT Guest.guestID AS guestId, fName, lName, email, phone FROM Guest WHERE invited='n'");
		$qry_res = mysql_query($qry) or die("Error collecting no rsvp guest list<br />".mysql_error());
		return $qry_res;
	}

	function retrieve_admin_list() {
		$qry = sprintf("SELECT fName, lName, email, phone FROM Admin");
		$qry_res = mysql_query($qry) or die("Error collecting admin list<br />".mysql_error());
		return $qry_res;
	}

	function retrieve_admin($admin) {
		$qry = sprintf("SELECT adminId, password, fName, lName, email, phone FROM Admin WHERE adminId='%s'", mysql_real_escape_string($admin));
		$qry_res = mysql_query($qry) or die ("There is no such guest<br />".mysql_error());
		if (mysql_num_rows($qry_res) == 1) {
	  		$row = mysql_fetch_array($qry_res);
	  		return $row;
	  	} else {
	  		return NULL;
	  	}
	}

	function update_inv($guestId) {
		$qry = sprintf("UPDATE Guest SET invited='y' WHERE guestId=%s", mysql_real_escape_string($guestId));
		$qry_res = mysql_query($qry) or die ("There is no such guest<br />".mysql_error());
		
		return true;
	}

	function add_guest($fName, $lName, $email, $phone) {

		$phone_trim = array("(", ")", "-", " ");

		$qry = sprintf("INSERT INTO Guest (guestId, fName, lName, email, phone, invited) VALUES (NULL , '%s', '%s', '%s', '%s', 'n')", $fName, $lName, $email, str_replace($phone_trim, "", $phone));
		$qry_res = mysql_query($qry) or die("Error adding a guest<br />".mysql_error());

		return true;
	}
?>
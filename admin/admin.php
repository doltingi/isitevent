<?php 

	include('library.php');
	session_start();
	if(!check_login()) {
		$loc = 'Location: login.php';
		header($loc);
	}

	connect_isit();
	$admin_name = retrieve_admin($_SESSION["uname"]);
	close_con();
	include('header.php');
?>
		<div class="container">

			<!-- Main component for a primary marketing message or call to action -->
			<div class="jumbotron">
				<h1>ISIT Admin Page</h1><br />
				<p>View and manage guests : <a href="viewGuests.php" class="btn btn-primary btn-small">Click Here!</a></p>
				<p>Also, you can view the statistics for questions answered by the guests : <a href="viewStats.php" class="btn btn-primary btn-small">Click Here!</a></p>
			</div>

		</div> <!-- /container -->
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>
	</body>
</html>

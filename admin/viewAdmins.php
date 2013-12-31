<?php 

	include('library.php');
	session_start();
	if(!check_login()) {
		$loc = 'Location: login.php';
		header($loc);
	}

	connect_isit();
	$admin_name = retrieve_admin($_SESSION["uname"]);
	$admin_list = retrieve_admin_list();
	close_con();
	include('header.php');
?>
		<div class="container">
			<div class="bs-callout bs-callout-info">
				<h1>Fellow Admins</h1>
				<div class="table-responsive">
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th class="col-md-1 text-center">#</th>
								<th class="col-md-2 text-center">Full Name</th>
								<th class="col-md-4 text-center">E-Mail Address</th>
								<th class="col-md-4 text-center">Phone Number</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						for($i = 0;$i < mysql_num_rows($admin_list); $i++) {
		  					$row = mysql_fetch_array($admin_list); ?>
		  					<tr>
								<td class="text-center"></td>
								<td class="text-center"><?php echo $row["fName"] . " ". $row["lName"]; ?></td>
								<td class="text-center"><a href="mailto:<?php echo $row["email"]; ?>"><?php echo $row["email"]; ?></a></td>
								<td class="text-center"><?php echo $row["phone"]; ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<br /><br />
			<p>Please send email to <a href="mailto:admin@isitevent.ca">admin@isitevent.ca</a> to promote someone as an admin with their name, and contact information.</p>
		</div> <!-- /container -->
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>
	</body>
</html>

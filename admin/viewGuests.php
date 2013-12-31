<?php 

	include('library.php');
	session_start();
	if(!check_login()) {
		$loc = 'Location: login.php';
		header($loc);
	}

	connect_isit();
	$admin_name = retrieve_admin($_SESSION["uname"]);
	$rsvp_attending_list = retrieve_rsvp_attending_list();
	$rsvp_not_attending_list = retrieve_rsvp_not_attending_list();
	$no_rsvp_list = retrieve_no_rsvp_list();
	$no_inv_list = retrieve_no_inv_list();
	close_con();
	include('header.php');
?>
		<div class="container">
			<div class="bs-callout bs-callout-info">
				<h1>Responded Guests</h1>
				<h2>Attending</h2>
				<div class="table-responsive">
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th class="col-md-1 text-center">#</th>
								<th class="col-md-2 text-center">Full Name</th>
								<th class="col-md-4 text-center">E-Mail Address</th>
								<th class="col-md-4 text-center">Phone Number</th>
								<th class="col-md-1 text-center">Answers</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$i = 0;
						for(;$i < mysql_num_rows($rsvp_attending_list); $i++) {
							$row = mysql_fetch_array($rsvp_attending_list); ?>
							<tr>
								<td class="text-center"></td>
								<td class="text-center"><?php echo $row["fName"] . " ". $row["lName"]; ?></td>
								<td class="text-center"><a href="mailto:<?php echo $row["email"]; ?>"><?php echo $row["email"]; ?></a></td>
								<td class="text-center"><?php echo $row["phone"]; ?></td>
								<td class="text-center"><a href="viewAnswers.php?id=<?php echo $row["guestId"]; ?>">View</a></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<h2>Not Attending</h2>
				<div class="table-responsive">
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th class="col-md-1 text-center">#</th>
								<th class="col-md-2 text-center">Full Name</th>
								<th class="col-md-4 text-center">E-Mail Address</th>
								<th class="col-md-4 text-center">Phone Number</th>
								<th class="col-md-1 text-center">Answers</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$i = 0;
						for(;$i < mysql_num_rows($rsvp_not_attending_list); $i++) {
							$row = mysql_fetch_array($rsvp_not_attending_list); ?>
							<tr>
								<td class="text-center"></td>
								<td class="text-center"><?php echo $row["fName"] . " ". $row["lName"]; ?></td>
								<td class="text-center"><a href="mailto:<?php echo $row["email"]; ?>"><?php echo $row["email"]; ?></a></td>
								<td class="text-center"><?php echo $row["phone"]; ?></td>
								<td class="text-center"><a href="viewAnswers.php?id=<?php echo $row["guestId"]; ?>">View</a></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="bs-callout bs-callout-danger">
				<h2>No Response Guests</h2>
				<div class="table-responsive">
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th class="col-md-1 text-center">#</th>
								<th class="col-md-2 text-center">Full Name</th>
								<th class="col-md-4 text-center">E-Mail Address</th>
								<th class="col-md-5 text-center">Phone Number</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$i = 0;
						for(;$i < mysql_num_rows($no_rsvp_list); $i++) {
							$row = mysql_fetch_array($no_rsvp_list); ?>
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
			<div class="bs-callout bs-callout-danger">
				<h2>Invitation Not Sent</h2>
				<div class="table-responsive">
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th class="col-md-1 text-center">#</th>
								<th class="col-md-2 text-center">Full Name</th>
								<th class="col-md-4 text-center">E-Mail Address</th>
								<th class="col-md-2 text-center">Phone Number</th>
								<th class="col-md-2 text-center">Invitation</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$i = 0;
						for(;$i < mysql_num_rows($no_inv_list); $i++) {
							$row = mysql_fetch_array($no_inv_list); ?>
							<tr>
								<td class="text-center"></td>
								<td class="text-center"><?php echo $row["fName"] . " ". $row["lName"]; ?></td>
								<td class="text-center"><a href="mailto:<?php echo $row["email"]; ?>"><?php echo $row["email"]; ?></a></td>
								<td class="text-center"><?php echo $row["phone"]; ?></td>
								<td class="text-center"><a href="#generate<?php echo $row["guestId"]; ?>" data-toggle="modal" class="btn btn-primary btn-xs">Generate</a>&nbsp;<a class="btn btn-primary btn-xs" href="updateInvitation.php?guestId=<?php echo $row["guestId"]; ?>">Mark as Sent</a></td>
							</tr>
							<div class="modal fade" id="generate<?php echo $row["guestId"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<form class="form" method="get" action="updateInvitation.php">
											<input type="hidden" name="guestId" value="<?php echo $row["guestId"]; ?>">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title">Generate Invitation</h4>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-md-4 col-sm-12 col-xs-12 text-right">
														Link for E-Mail :
													</div>
													<div class="col-md-8 col-sm-12 col-xs-12">
														http://www.isitevent.ca/invitedEmail.php
													</div>
												</div>
												<div class="row">
													<div class="col-md-4 col-sm-12 col-xs-12 text-right">
														Link for Text Message :
													</div>
													<div class="col-md-8 col-sm-12 col-xs-12">
														http://www.isitevent.ca/invitedPhone.php
													</div>
												</div><br />
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Sent</button>
											</div>
										</form>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div> <!-- /container -->
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>
	</body>
</html>
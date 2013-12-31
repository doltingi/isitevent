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
			<div class="well">
				<form id="contactForm" name="contactForm" action="sendToGroup.php" method="post">
					<div class="row">
						<div class="col-md-3 col-sm-12 col-xs-12 text-right">
							<h3>Groups To Send To<br /><small>You can select multiple groups</small></h3><br /><br />
							<div class="btn-group-vertical btn-group" data-toggle="buttons">
								<label class="btn btn-primary btn-lg <?php if ($_GET["to"] == 'admin' || $_GET["to"] == "all") echo "active" ?>">
									<input type="checkbox" name="sendTo[]" value="admin" class="form-control"<?php if ($_GET["to"] == 'admin' || $_GET["to"] == "all") echo " checked" ?>> Admin Only
								</label>
								<label class="btn btn-primary btn-lg <?php if ($_GET["to"] == 'norsvp' || $_GET["to"] == "all") echo "active" ?>">
									<input type="checkbox" name="sendTo[]" value="norsvp" class="form-control"<?php if ($_GET["to"] == 'norsvp' || $_GET["to"] == "all") echo " checked" ?>> No RSVPed Guests
								</label>
								<label class="btn btn-primary btn-lg <?php if ($_GET["to"] == 'attending' || $_GET["to"] == "all") echo "active" ?>">
									<input type="checkbox" name="sendTo[]" value="attending" class="form-control"<?php if ($_GET["to"] == 'attending' || $_GET["to"] == "all") echo " checked" ?>> Attending Guests
								</label>
								<label class="btn btn-primary btn-lg <?php if ($_GET["to"] == 'notattending' || $_GET["to"] == "all") echo "active" ?>">
									<input type="checkbox" name="sendTo[]" value="notattending" class="form-control"<?php if ($_GET["to"] == 'notattending' || $_GET["to"] == "all") echo " checked" ?>> Not Attending Guests
								</label>
							</div>
						</div>
						<div class="col-md-9 col-sm-12 col-xs-12">
							<label>Title</label>
							<input type="text" class="form-control" placeholder="Title" name="title" required="required">
							<label>Message</label>
							<textarea name="message" id="message" rows="10" class="form-control" required="required"></textarea><br />
							<div class="alert alert-info"><small>(Please note mails will be sent using admin@isitevent.ca)</small></div>
						</div>
					</div><br />
					<div class="row">
						<div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
							<a href="#sendConfirm" class="btn btn-success form-control" data-toggle="modal">Send</a>
						</div>
					</div>
					<div class="modal fade" id="sendConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Confirm Send?</h4>
								</div>
								<div class="modal-body">
									<p>You are about to send the email. Continue?</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Send</button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
				</form>
			</div>
		</div>

		<script src="http://jquery.bassistance.de/validate/jquery.validate.js"></script>
		<script src="http://jquery.bassistance.de/validate/additional-methods.js"></script>
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>
	</body>
</html>
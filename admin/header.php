<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Admin are able to manage guests using this website">
		<meta name="author" content="Sanghyun Lee">
		<link rel="shortcut icon" href="../favicon.png">

		<title>ISIT Event Admin Members Page</title>

		<!-- Bootstrap core CSS -->
		<link href="../css/bootstrap.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="../css/navbar-fixed-top.css" rel="stylesheet">
		<link href="../css/callouts.css" rel="stylesheet">

	</head>

	<body>

	<!-- Fixed navbar -->
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="../" target="_blank">ISIT Event</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li <?php if (basename($_SERVER['PHP_SELF']) == 'admin.php') echo "class='active'"; ?>><a href="admin.php">Admin Home</a></li>
						<li class="dropdown <?php if (basename($_SERVER['PHP_SELF']) == 'viewGuests.php' || basename($_SERVER['PHP_SELF']) == 'addGuest.php') echo "active"; ?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Members <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="viewGuests.php">View All Guests</a></li>
								<li><a href="addGuest.php">Add A Guest</a></li>
								<li><a href="viewAdmins.php">View All Admins</a></li>
							</ul>
            			</li>
						<li class="dropdown <?php if (basename($_SERVER['PHP_SELF']) == 'viewStats.php' || basename($_SERVER['PHP_SELF']) == 'viewAnswers.php') echo "active"; ?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Questions <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="dropdown-header">Results</li>
								<li><a href="viewAnswers.php">View By Guests</a></li>
								<li><a href="viewStats.php">View By Questions</a></li>
								<li class="divider"></li>
								<li class="dropdown-header">Questions</li>
								<li><a href="addQuestion.php">Add Questions</a></li>
								<li><a href="viewQuestions.php">View Questions</a></li>
								
							</ul>
						</li>
						<li class="dropdown <?php if (basename($_SERVER['PHP_SELF']) == 'sendEmail.php') echo "active"; ?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Send Group E-Mail <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="sendEmail.php?to=admin">Admin Only</a></li>
								<li><a href="sendEmail.php?to=norsvp">No RSVP'ed Guests</a></li>
								<li><a href="sendEmail.php?to=attending">Attending Guests</a></li>
								<li><a href="sendEmail.php?to=notattending">Not Attending Guests</a></li>
								<li><a href="sendEmail.php?to=all">Everyone</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right navbar-collapse">
						<li><a href="#infoNotice" data-toggle="modal"><label><?php echo $admin_name["fName"] . " " . $admin_name["lName"]; ?></label></a></li>
						<li><a href="logout.php">Log Out</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>

		<!-- Update Password Modal -->
			<div class="modal fade" id="infoNotice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<form class="form-signin" method="post" action="updatePassword.php">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Contact Information</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-4 col-sm-12 col-xs-12 text-right">
										E-Mail :
									</div>
									<div class="col-md-8 col-sm-12 col-xs-12">
										<?php echo $admin_name["email"]; ?>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-12 col-xs-12 text-right">
										Phone :
									</div>
									<div class="col-md-8 col-sm-12 col-xs-12">
										<?php echo $admin_name["phone"]; ?>
									</div>
								</div><br />
								<p>You do not have permission to update your contact information. Please contact <a href="mailto:admin@isitevent.ca">admin@isitevent.ca</a> immediately if your contact information is not correct.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
							</div>
						</form>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
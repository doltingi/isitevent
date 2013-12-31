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
				<form class="form" method="post" action="saveGuest.php">
					<div class="row">
						<div class="col-md-8 col-md-offset-4 col-xs-12 col-sm-12">
							<h1>Add A Guest</h1>
						</div><br />
					</div><br />
					<div class="row">
						<div class="col-md-2 col-md-offset-2 col-xs-12 col-sm-12 text-right">
							<button class="btn disabled">First Name</button>
						</div>
						<div class="col-md-6 col-xs-12 col-sm-12">
							<input type="text" class="form-control" placeholder="First Name" name="fName">
						</div>
					</div><br />
					<div class="row">
						<div class="col-md-2 col-md-offset-2 col-xs-12 col-sm-12 text-right">
							<button class="btn disabled">Last Name</button>
						</div>
						<div class="col-md-6 col-xs-12 col-sm-12">
							<input type="text" class="form-control" placeholder="Last Name" name="lName">
						</div>
					</div><br />
					<div class="row">
						<div class="col-md-2 col-md-offset-2 col-xs-12 col-sm-12 text-right">
							<button class="btn disabled">E-Mail Address</button>
						</div>
						<div class="col-md-6 col-xs-12 col-sm-12">
							<input type="text" class="form-control" placeholder="example@example.com" name="email">
						</div>
					</div><br />
					<div class="row">
						<div class="col-md-2 col-md-offset-2 col-xs-12 col-sm-12 text-right">
							<button class="btn disabled">Phone Number</button>
						</div>
						<div class="col-md-6 col-xs-12 col-sm-12">
							<input type="text" class="form-control" placeholder="123-456-7890" name="phone">
						</div>
					</div><br /><br />
					<div class="row">
						<div class="col-md-4 col-md-offset-4 col-xs-12 col-sm-12">
							<button type="submit" class="btn btn-primary form-control">Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>
	</body>
</html>
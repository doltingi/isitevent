<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="ISIT Event Admin Page">
		<meta name="author" content="Sanghyun Lee">
		<link rel="shortcut icon" href="../../assets/ico/favicon.png">

		<title>ISITEvent Admin Page</title>

		<link href="../css/bootstrap.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="../css/signin.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="container">
			<form class="form-signin" method="post" action="authenticate.php">
				<h2 class="form-signin-heading">Please sign in</h2>
				<input type="text" class="form-control" placeholder="user ID" autofocus name="username">
				<input type="password" class="form-control" placeholder="Password" name="password">
				<button class="btn btn-lg btn-primary btn-block" type="submit">Connect&nbsp;&nbsp;<span class="glyphicon glyphicon-glass"></span></button>
				<?php if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["auth"])) { ?>
				<div>&nbsp;</div>
				<div class="alert alert-danger"><small>Your username or password combination does not exist. Try again.</small></div>
				<?php } ?>
			</form>
		</div> <!-- /container -->
	</body>
</html>
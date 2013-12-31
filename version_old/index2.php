<?php include('library.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <title><?php echo(TITLE . " ::: " . QUOTE) ?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="Sanghyun Lee">
	    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/foursons.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
	    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->

	    <!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="ico/favicon.png">
	</head>

	<body>

		<div class="container">

      		<?php include('header.php'); ?>

			<!-- Jumbotron -->
			<div class="jumbotron">
				<h1>FS Special</h1>
				<p class="lead">$99 ($3.5/ea) for 28-30 bottles</p>
				<p><a class="btn btn-large btn-success" href="#">Reserve Yours Today</a></p>
			</div>

			<hr />

			<!-- Example row of columns -->
			<div class="row">
				<div class="span4 well well-small foursons">
					<h2>Choose Your Wine</h2>
					<p>Winemaking with over 40 different wines to choose from, you're sure to find one that you'll love. Each batch makes 28-30 bottles, and the price you see includes all the material, labels, corks, and seals. Bottles $1 each or bring your own.</p>
					<p><a class="btn" href="products.php">View Wine List &raquo;</a></p>
				</div>
				<div class="span4 well well-small foursons">
					<h2>Reserve Wine</h2>
					<p>Because you participate in certain aspects of the winemaking process: yeasting, bottling, capping, and labelling to name a few (no experience necessary) - you avoid the massive taxes and mark up you'd pay at LCBO.</p>
					<p><a class="btn" href="#">Make A Reservation &raquo;</a></p>
				</div>
				<div class="span4 well well-small foursons">
					<h2>Bottling Appointment</h2>
					<p>Six to ten weeks after you make wine, we will contact you to let you know your wine is ready to bottle. Bring your own bottles for sterilization, or purchase new ones from us ($1/bottle). This visit takes about 30 minutes.</p>
				</div>
			</div>

			<hr />
			<?php include('footer.php'); ?>
		</div> <!-- /container -->

	</body>
</html>
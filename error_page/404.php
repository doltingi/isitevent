<?php include('library.php'); 
if (basename($_SERVER["PHP_SELF"]) == "confirmation.php" || basename($_SERVER["PHP_SELF"]) == "reservation.php" || basename($_SERVER["PHP_SELF"]) == "pickdate.php") {	
	if ($_SERVER["REQUEST_METHOD"] != "POST") {
		header('Location:index.php');
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <title><?php echo(TITLE . " ::: " . QUOTE) ?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="Sanghyun Lee">
	    <!-- Le styles -->
	    <link href="../css/bootstrap.css" rel="stylesheet">
	    <link href="../css/bootstrap-theme.css" rel="stylesheet">
	    <link href="../css/justified-nav.css" rel="stylesheet">
	    <link href="../css/foursons.css" rel="stylesheet">
	    <link rel="shortcut icon" href="../favicon.png" type="image/png">
	    <script type="text/javascript" src="../js/jquery.js"></script>
	    <script type="text/javascript" src="../js/bootstrap.js"></script>

	    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->

	    <!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="../ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="favicon.png">
	</head>

	<body>
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
	  			var js, fjs = d.getElementsByTagName(s)[0];
	  			if (d.getElementById(id)) return;
	  			js = d.createElement(s); js.id = id;
	  			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="container">
			<div class="masthead">
	        	<h3 class="text-muted"><?php echo(TITLE) ?>
	        		<a href="https://www.facebook.com/FoursonsWineMaker" title="Visit Our Facebook">
					<img src="ico/facebook-link.png" alt="To Our Facebook Page" width="20px" class="img-rounded pull-right"></a></h3>
	            <div class="navbar-header">
			       	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				    </button>
				</div>

				<ul class="nav nav-justified">
					<li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') { ?>class="active"<?php } ?>>
						<a href="index.php"><?php echo(HOME) ?></a></li>
					<li <?php if (basename($_SERVER['PHP_SELF']) == 'craft.php') { ?>class="active"<?php } ?>>
						<a href="craft.php"><?php echo(CRAFT) ?></a></li>
					<li <?php if (basename($_SERVER['PHP_SELF']) == 'products2.php') { ?>class="active"<?php } ?>>
						<a href="products2.php"><?php echo(PRODUCT) ?></a></li>
					<li <?php if (basename($_SERVER['PHP_SELF']) == 'pickwine.php' || basename($_SERVER['PHP_SELF']) == 'pickdate.php' 
					|| basename($_SERVER['PHP_SELF']) == 'reservation.php' || basename($_SERVER['PHP_SELF']) == 'confirmation.php' ||
					basename($_SERVER['PHP_SELF']) == 'reserved.php') { ?>class="active"<?php } ?>>
						<a href="pickwine.php"><?php echo(RESERVE) ?></a></li>
					<li <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php' || basename($_SERVER['PHP_SELF']) == 'contacted.php') { ?>class="active"<?php } ?>>
						<a href="contact.php"><?php echo(CONTACT) ?></a></li>
				</ul>
				<hr />
			</div>
		<?php include('../footer.php'); ?>
		</div> <!-- /container -->
	</body>
</html>
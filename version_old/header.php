<div class="masthead">
        		<h3 class="muted"><?php echo(TITLE) ?> Banner Here!</h3>
        		<div class="navbar">
	          		<div class="navbar-inner">
	          			<!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
						<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
				        </button>
						<div class="container">
							<ul class="nav">
								<li <?php if (basename($_SERVER['PHP_SELF']) == 'index2.php') { ?>class="active"<?php } ?>>
									<a href="index2.php"><?php echo(HOME) ?></a></li>
								<li <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') { ?>class="active"<?php } ?>>
									<a href="index2.php"><?php echo(ABOUT) ?></a></li>
								<li <?php if (basename($_SERVER['PHP_SELF']) == 'products.php') { ?>class="active"<?php } ?>>
									<a href="products.php"><?php echo(PRODUCT) ?></a></li>
								<li <?php if (basename($_SERVER['PHP_SELF']) == 'reservation.php') { ?>class="active"<?php } ?>>
									<a href="reservation.php"><?php echo(RESERVE) ?></a></li>
								<li <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') { ?>class="active"<?php } ?>>
									<a href="contact.php"><?php echo(CONTACT) ?></a></li>
							</ul>
						</div>
					</div>
				</div><!-- /.navbar -->
				<hr />
			</div>

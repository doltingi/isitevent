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
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
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
      		<div class="bs-docs-grid">
	      		<div class="row-fluid show-grid">
	      			<div class="span4 well foursons">
	      				<h3 class="text-center">Regular $135 <small>4 weeks</small></h3>
	      				<dl>
	      					<dt>Red</dt>
	      					<dd>(A) Chianti, Pinot Noir</dd>
	      					<dd>(B) Malbec, Merlot</dd>
	      					<dd>(C) Cabernet Sauvignon, Barolo, Shiraz</dd>
	      					<dt>White</dt>
	      					<dd>(A) Pinot Grigio, Sauvignon Blanc</dd>
	      					<dd>(B) Gewurztraminer, Riesling</dd>
	      					<dd>(C) Chardonnay</dd>
	      				</dl>
	      			</div>
	      			<div class="span4 well foursons">
	      				<h3 class="text-center">Premium $170 <small>6 weeks</small></h3>
	      				<dl>
	      					<dt>Red</dt>
	      					<dd>(A) California Pinot Noir</dd>
	      					<dd>(B) Chilean Malbec, French Merlot</dd>
	      					<dd>(C) Amarone, Australian Cabernet Sauvignon, Italian Barolo, Australian Shiraz</dd>
	      					<dt>White</dt>
	      					<dd>(A) Italian Pinot Grigio, New Zealand Sauvignon Blanc</dd>
	      					<dd>(B) German Gewurztraminer</dd>
	      					<dd>(C) Australian Chardonnay</dd>
	      				</dl>
	      			</div>
	      			<div class="span4 well foursons">
	      				<h3 class="text-center">Deluxe $210 <small>8 weeks</small></h3>
	      				<dl>
	      					<dt>Red</dt>
	      					<dd>(A) New Zealand Pinot Noir</dd>
	      					<dd>(B) Chilean Malbec, Chilean Merlot</dd>
	      					<dd>(C) Amarone della Valpolicella, California Cabernet Sauvignon, California Syrah</dd>
	      					<dt>White</dt>
	      					<dd>(A) Australian Sauvignon Blanc, Italian Pinot Grigio</dd>
	      					<dd>(B) German Riesling Gewurztraminer</dd>
	      					<dd>(C) Australian Chardonnay</dd>
	      				</dl>
	      			</div>
	      		</div>
	      		<div class="row-fluid show-grid">
	      			<div class="span4 well foursons">
	      				<h3 class="text-center">Ice Wine $160/190 <small>6 weeks</small></h3>
	      				<dl>
	      					<dt>Red</dt>
	      					<dd>Cabernet Franc</dd>
	      					<dt>White</dt>
	      					<dd>Riesling, Vidal</dd>
	      				</dl>
	      			</div>
	      			<div class="span4 well foursons">
	      				<h3 class="text-center">Rose/Blush $150 <small>4 - 6 weeks</small></h3>
	      				<dl>
	      					<dt></dt>
	      					<dd>Zinfandel Blush, Green Apple Gewurztraminer, Strawberry White Zinfandel, Kiwi Melon Pinot Grigio</dd>
	      				</dl>
	      			</div>
	      		</div>
	      		<br />
	      		<hr />
	      		<div class="well well-large foursons">
		      		<table class="table table-striped">
		              <thead>
		                <tr>
		                  <th>#</th>
		                  <th>Body</th>
		                  <th>Characteristic</th>
		                  <th>Taste Hints Of</th>
		                </tr>
		              </thead>
		              <tbody>
		                <tr>
		                  <td>A</td>
		                  <td>Light</td>
		                  <td>Light, Lively, Sweet, Smooth, Mellow, Warm</td>
		                  <td>Strawberry, Cherries, Plumb, Mint, Vanilla, Herbs</td>
		                </tr>
		                <tr>
		                  <td>B</td>
		                  <td>Medium</td>
		                  <td>Complex, Fruity, Spicy, Assertive, Soft, Silky</td>
		                  <td>Bell Pepper, Nutmeg, Black Currant, Cherries, Red Currant</td>
		                </tr>
		                <tr>
		                  <td>C</td>
		                  <td>Full</td>
		                  <td>Bold, Spicy, Big, Sophisticated</td>
		                  <td>Dark Red Berries, Jammy Red Berries, Black Pepper Corn, Ripe Dark Fruit, Chocolate</td>
		                </tr>
		              </tbody>
		            </table>
	        	</div>
	      	</div>
	      	<hr />
	      	<?php include('footer.php'); ?>
      	</div> <!-- /container -->
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Work Sample: Kansas Dems | Logo Design, Directory Design | flow14</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="flow14 Work Sample: Logo design and directory design for Kansas Dems">
	<meta name="keywords" content="logo design, publication design, collateral materials">
	<meta name="author" content="Kyle Johnston">
	<?php include('includes/head.php'); ?>
</head>

<body>
	<div class="intro" style="background-color:#f7c33f;">
		<?php include('includes/header-nav.php'); ?>
		<div class="container">
			<div class="row">
				<div class="introduction">
					<h1>Kansas Dems</h1>
					<p><strong>The Story.</strong> In late 2011, the Kansas Dems put out a call for entries – they wanted to refresh their brand, starting with a new logo that could be used across a variety of materials, both in print and online.</p>
					<p><strong>The Services.</strong> Logo Design, Printed Materials</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container marketing">
		<!-- Logo Design -->
<div class="featurette">
	<div class="container">
		<div class="row">
			<div class="span5 offset1">
				<div class="inner">
				<h2>Logo Design</h2>
				<p>The logo incorporates a stylized sunflower, bold type and vivid colors. The graphic treatment in the flower petals ensures the design can be reproduced at any size while maintaining detail and dimension.</p>
				</div>
			</div>
			<div class="span6">
				<img class="featurette-image" src="img/samples/kansas-dems/kdp-logo.png">
			</div>
		</div>
	</div>
</div>

<!-- Logo Design -->
<div class="featurette featurette-alt">
	<div class="container">
		<div class="row">
			<div class="span6">
				<img class="featurette-image" src="img/samples/kansas-dems/washington-days-logo.png">
			</div>
			<div class="span6">
				<div class="inner">
					<h2>Logo Design – Washington Days</h2>
					<p>In 2012, I also developed a mark for Washington Days – an annual event that attracts hundreds of Democrats from across the state.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Directory Design -->
<div class="featurette">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner">
					<h2>Directory Design</h2>
					<p>Each year, the Kansas Dems produce an expansive directory; printed copies are distributed across the state and electronic copies are available through their website. Starting in 2012, I redesigned the layout of the internal pages and designed the directory cover.</p>
				</div>
			</div>
			<div class="span8">
				<div id="main-slider" class="flexslider">
					<ul class="slides">
						<li>
							<p class="flex-caption">Directory Covers, 2013 &amp; 2012</p>
							<img src="img/samples/kansas-dems/directory.png">
						</li>
						<li style="text-align:center;">
							<p class="flex-caption">Interior Spread - Before</p>
							<img src="img/samples/kansas-dems/spread-before.png">
						<li>
							<p class="flex-caption">Interior Spread - After</p>
							<img src="img/samples/kansas-dems/spread-after.png">
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

		<?php include('includes/footer.php'); ?>
	</div><!-- /.container -->

	<?php include('includes/foot.php'); ?>
	<script type="text/javascript">
	$(window).load(function(){
		$('#main-slider').flexslider({
			animation: "slide",
			controlsContainer: '.flex-container',
			start: function(slider){
				$('body').removeClass('loading');
			}
		});
	});
	</script>
</body>
</html>

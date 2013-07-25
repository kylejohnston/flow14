<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Work Sample: IBGreek | Logo Design, Business Cards + Hang Tags, Website | flow14</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="flow14 Work Sample: Logo design, business card design and website design for IBGreek">
	<meta name="keywords" content="logo design, business card design, custom type, website design">
	<meta name="author" content="Kyle Johnston">
	<?php include('includes/head.php'); ?>
</head>

<body>
	<div class="dark intro" style="background-color:#db4b3c;">
		<?php include('includes/header-nav.php'); ?>
		<div class="container">
			<div class="row">
				<div class="introduction">
					<h1>IBGreek</h1>
					<p><strong>The Story.</strong> IBGreek is in the t-shirt business, but not just any t-shirt business – they specialize in tees for Sororities and Fraternities.</p>
					<p><strong>The Services.</strong> Custom Type, Logo Design, Business Cards + Hang Tags, Website</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container marketing">
		<!-- Custom Type -->
		<div class="featurette">
			<div class="inner">
				<h2>Custom Type</h2>
				<img class="featurette-image" src="img/samples/ibgreek/custom-type.png">
				<p>I started with the type; Eurostile was the base font, but it lacked personality. So edges were rounded & softened; certain characters – like “e” and “r” – were infused with personality.</p>
			</div>
		</div>
		<!-- Logo Design -->
		<div class="featurette featurette-alt">
			<div class="inner">
				<h2>Logo Design</h2>
				<img class="featurette-image" src="img/samples/ibgreek/logo.png">
				<p>With the right logotypes in the hopper, IBGreek needed a complete logo that would stand out from the crowd.</p>
			</div>
		</div>
		<!-- Business Cards + Hang Tags -->
		<div class="featurette">
			<div class="inner">
				<h2>Business Cards + Hang Tags</h2>
				<img class="featurette-image" src="img/samples/ibgreek/ibgreek-card.png">
				<p>With a logo in hand, it was time to develop business cards. As a young company with a tight budget, IBGreek needed more than the same old same old, so these cards serve double-duty as t-shirt hang tags.</p>
				<p>Multiple sets of cards were printed; some bear the founders’ names, others are blanks that can be passed out to new sales reps &amp; designers or attached to shirts.</p>
			</div>
		</div>
		<!-- Website Design -->
		<div class="featurette featurette-alt">
			<div class="inner">
				<h2>Website Design</h2>
				<div id="main-slider" class="flexslider flexslider-50">
					<ul class="slides">
						<li><img src="img/samples/ibgreek/web-home.png" /></li>
						<li><img src="img/samples/ibgreek/web-designs.png" /></li>
					</ul>
				</div>
				<p>IBGreek’s website features a catalog of t-shirt designs, multiple points of contact and a clear call to action on nearly every page.</p>
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

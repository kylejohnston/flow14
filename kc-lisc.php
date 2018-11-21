<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Work Sample: Kansas City LISC | Infographic &times; Data Visualization | flow14</title>
	<meta name="description" content="Interactivce infographics designed and developed for Kansas City LISC, a local nonprofit." />
	<meta name="geo.placename" content="Kansas City" />
	<link href="https://plus.google.com/103758963959064535451" rel="publisher" />
	<link href="http://www.flow14.com/kc-lisc" rel="canonical" />
	<?php include('includes/head.php'); ?>
</head>
<body class="neutral">
	<?php include('includes/header-nav.php'); ?>
	<article class="content">
		<section class="block">
			<div class="pattern__2-8-2">
				<div class="inner">
					<h1 id="fittext" class="center">Kansas City LISC</h1>
					<p>Greater Kansas City LISC (Local Initiative Support Corporation) approached flow<small>14</small> with a need for an infographic they could use to communicate their ties to the community, both in the services and causes they support and how they compare to and interact with other local organizations.</p>
				</div>
			</div>
		</section>

		<section class="block item">
			<div class="pattern__3-6-3">
				<div class="inner">
					<h2>The Challenge</h2>
					<p>Initially, we were asked to create a network diagram, but as we looked through the data provided, we realized a network diagram would result in an extremely complex visual, making it difficult for viewers to understand and difficult to update in the future.</p>
					<h2>The Solution</h2>
					<p>We decided to use <a href="http://d3js.org/" title="d3 - data-driven documents">d3js</a>, a JavaScript library that enables relatively simple and flexible visualization of complex data. d3 provides the added benefits of being maintainable, functional across mobile and desktop devices, and offers the ability to export vector graphics that can be reproduced in print.</p>
					<p class="center"><a class="ghost-button" href="http://www.flow14.com/lisc/" title="LISC Kansas City Interactive Diagram">View the live version here</a></p>
				</div>
			</div>
		</section>
		<section class="block block--wide">
			<div class="col-12"><img src="img/samples/kc-lisc/chord-diagram__1400x600.jpg" width="100%"></div>
		</section>

		<section class="block item">
			<div class="pattern__3-6-3">
				<div class="inner">
					<h2>Interacting with the Infographic</h2>
					<p>Viewers can roll over any of the services or organizations to see how they're connected to each other.</p>
				</div>
			</div>
			<div class="col-6">
				<div class="inner"><img data-src="img/samples/kc-lisc/kc-lisc-view.jpg" class="lazyload" width="100%"></div>
			</div>
			<div class="col-6">
				<div class="inner"><img data-src="img/samples/kc-lisc/service-view.jpg" class="lazyload" width="100%"></div>
			</div>
		</section>

		<section class="block text__center">
			<div class="col-12">
				<div class="inner"><?php include('includes/cta_np.php'); ?></div>
			</div>
		</section>
	</article>

<?php include('includes/footer.php'); ?>

<script type="text/javascript">
	window.fitText(document.getElementById("fittext"), .75)
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Work Sample: Kansas City LISC | Infographic &times; Data Visualization | flow14</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include('includes/head.php'); ?>
</head>
<body>
<header>
</header>
<div class="container">
	<div class="row">
		<div class="col-2 center shade">
				<!--<a href="#">Design Works &#187;</a>
				<a href="#">About &#187;</a>
				<a href="#">Contact &#187;</a>-->
			<h1>Logo</h1>
			<nav>
				<a href="#">Design Works &#187;</a>
				<a href="#">About &times; Contact &#187;</a>
			</nav>
		</div>
		<!--<div class="col-2 hidden-sm">&#160;</div>-->
		<div class="col-8 item">
			<div class="inner">
				<p class="mono mono-light">Design Works.</p>
				<h1 class="center"><span>Kansas City LISC</span></h1>
					<p><strong>The Story.</strong> Greater Kansas City LISC (Local Initiative Support Corporation) approached me with a need for an infographic they could use to communicate their ties to the community, both in the services and causes they support and how they compare to and interact with other local organizations.</p>
					<p class="mono"><strong>The Services.</strong> Infographic design &amp; data visualization</p>
				<p class="mono mono-light">&therefore;</p>
			</div>
		</div>
	</div>
</div>

<div class="container item">
	<div class="row">
		<div class="col-8">
			<img src="img/samples/kc-lisc/kc-lisc-view.jpg" width="100%">
			<p class="mono">Data visualization</p>
		</div>
		<div class="col-4">
			<div class="inner">
				<p>Initially, I was asked to create a network diagram, but as I looked through the matrix provided, I realized a network diagram would result in an extremely complex visual, making it difficult for viewers to understand and difficult to update in the future.</p>
				<p>I decided to use <a href="http://d3js.org/" title="d3 - data-driven documents">d3js</a>, a JavaScript library that enables relatively simple and flexible visualization of complex data. d3 provides the added benefits of being maintainable, functional across mobile and desktop devices, and offers the ability to export vector graphics that can be reproduced in print.</p>
				<p><a href="http://www.flow14.com/lisc/">View the live version here</a></p>
				<img src="img/samples/kc-lisc/source-data.jpg" width="100%">
				<p class="mono">A small portion of the complex source data</p>
			</div>
		</div>
	</div>
</div>
<div class="container item gap">
	<div class="row">
		<div class="col-4">
			<div class="inner">
				<h2>Interacting with the infographic</h2>
				<p>Viewers can roll over any of the organizations or services to see how they're connected to each other.</p>
			</div>
		</div>
		<div class="col-4">
			<img src="img/samples/kc-lisc/kc-lisc-view.jpg" width="100%">
		</div>
		<div class="col-4">
			<img src="img/samples/kc-lisc/service-view.jpg" width="100%">
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12 center">
			<div class="inner">
				<?php include('includes/cta.php'); ?>
			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>



</body>
</html>

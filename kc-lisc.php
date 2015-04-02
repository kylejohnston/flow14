<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Work Sample: Kansas City LISC | Infographic &amp; Data Visualization | flow14</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="flow14 Work Sample: Infographic &amp; data visualization for Kansas City LISC">
	<meta name="keyword" content="infographic, data visualization">
	<meta name="author" content="Kyle Johnston">
	<?php include('includes/head.php'); ?>
</head>

<body>
	<div class="intro dark" style="background-color:#06165c;">
		<?php include('includes/header-nav.php'); ?>
		<div class="container">
			<div class="row">
				<div class="introduction">
					<h1>Kansas City LISC</h1>
					<p><strong>The Story.</strong> Greater Kansas City LISC (Local Initiative Support Corporation) approached me with a need for an infographic they could use to communicate their ties to the community, both in the services and causes they support and how they compare to and interact with other local organizations.</p>
					<p><strong>The Services.</strong> Infographic design &amp; data visualization</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container marketing">
		<!-- Website Design -->
		<div class="featurette">
			<div class="container">
				<div class="row">
					<div class="span5">
						<div class="inner">
							<p>Initially, they asked me to create a network diagram, but as I looked through the matrix they provided, I realized a network diagram would result in an extremely complex visual, making it difficult for their audience to understand and making it difficult to update in the future.</p>
							<p>I decided to use <a href="http://d3js.org/" title="d3 - data-driven documents">d3js</a>, a JavaScript library that enables relatively simple and flexible visualization of complex data. d3 provides the added benefits of being maintainable, functional across mobile and desktop devices, and offers the ability to export vector graphics that can be reproduced in print.</p>
							<p><a href="http://www.flow14.com/lisc/">View the live version here</a></p>
						</div>
					</div>
					<div class="span7">
						<div id="main-slider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="flex-caption">Data Visualization</p>
									<img src="img/samples/kc-lisc/default-view.jpg" />
								</li>
								<li style="text-align:center;">
									<p class="flex-caption">A small portion of the complex source data</p>
									<img src="img/samples/kc-lisc/source-data.png" />
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="featurette featurette-alt">
			<div class="container">
				<div class="row">
					<div class="span7">
						<div id="main-slider" class="flexslider">
							<ul class="slides">
								<li>
									<img src="img/samples/kc-lisc/kc-lisc-view.jpg" />
								</li>
								<li style="text-align:center;">
									<img src="img/samples/kc-lisc/service-view.jpg" />
								</li>
							</ul>
						</div>
					</div>
					<div class="span5">
						<div class="inner">
							<h2>Interacting with the infographic</h2>
							<p>Viewers can roll over any of the organizations or services to see how they're connected to each other.</p>
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
		$('.flexslider').flexslider({
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

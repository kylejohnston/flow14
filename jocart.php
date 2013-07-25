<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Work Sample: JoCART | Logo Design, Web Presence | flow14</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="flow14 Work Sample: Logo Design and Web Presence for JoCART - Johnson County Animal Response Team">
	<meta name="keywords" content="logo design, website design, seo">
	<meta name="author" content="Kyle Johnston">
	<?php include('includes/head.php'); ?>
</head>

<body>
	<div class="intro dark" style="background-color:#10243f;">
		<?php include('includes/header-nav.php'); ?>
		<div class="container">
			<div class="row">
				<div class="introduction">
					<h1>JoCART</h1>
					<p><strong>The Story.</strong> JoCART is a non-profit organization dedicated providing training and resources to help communities support displaced pets in the event of a disaster. They wanted to create a distinctive identity that would allow them to present a professional image to the communities they serve.</p>
					<p><strong>The Services.</strong> Logo Design, Web Presence</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container marketing">
		<!-- Logo Design -->
		<div class="featurette">
			<div class="inner">
				<h2>Logo Design</h2>
				<img class="featurette-image" src="img/samples/jocart/jocart-logo_.png">
				<p>The logo is fashioned after a badge, underscoring the idea that JoCART is a source of authority and an organization dedicated to public service.</p>
			</div>
		</div>
		<!-- Yard Sign -->
		<div class="featurette featurette-alt">
			<div class="inner">
				<h2>Logotype</h2>
				<img class="featurette-image" src="img/samples/jocart/logotype_.png">
				<p>When separated from the badge, the logotype accommodates a broader range of sizes and applications while maintaining a distinctive brand identity.</p>
			</div>
		</div>
		<!-- Website -->
		<div class="featurette">
			<div class="inner">
				<h2>Website Redesign</h2>
				<div id="main-slider" class="flexslider flexslider-50">
					<ul class="slides">
						<li>
							<img src="img/samples/jocart/wireframe-home.png" />
							<p class="flex-caption">Wireframes - Homepage</p>
						</li>
						<li>
							<img src="img/samples/jocart/web-home.png" />
							<p class="flex-caption">Homepage</p>
						</li>
						<li>
							<img src="img/samples/jocart/wireframe-content.png" />
							<p class="flex-caption">Wireframes - Content</p>
						</li>
						<li>
							<img src="img/samples/jocart/web-train.png" />
							<p class="flex-caption">Training Resources</p>
						</li>
					</ul>
				</div>
				<p>JoCART existing website was built with a generic template and the functions weren't meeting the needs of the organization. I started the site redesign by designing wireframes for key pages, which allowed the JoCART team to quickly provide feedback on content organization, site structure, and other key considerations.</p>
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
		$('#secondary-slider').flexslider({
			animation: "slide"
			}
		);
	});
	</script>
</body>
</html>

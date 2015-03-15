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
			<div class="container">
				<div class="row">
					<div class="span5 offset2">
						<div class="inner">
							<h2>Logo Design</h2>
							<p>The logo is fashioned after a badge, underscoring the idea that JoCART is a source of authority and an organization dedicated to public service.</p>
						</div>
					</div>
					<div class="span5">
							<img class="featurette-image" src="img/samples/jocart/jocart-logo_.png">
					</div>
				</div>
			</div>
		</div>
		<!-- Yard Sign -->
		<div class="featurette featurette-alt">
			<div class="container">
				<div class="row">
					<div class="span7">
						<img class="featurette-image" src="img/samples/jocart/logotype_.png">
					</div>
					<div class="span5">
						<div class="inner">
							<h2>Logotype</h2>
							<p>When separated from the badge, the logotype accommodates a broader range of sizes and applications while maintaining a distinctive brand identity.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Website -->
		<div class="featurette">
			<div class="container">
				<div class="row">
					<div class="span4">
						<div class="inner">
							<h2>Website Redesign</h2>
							<p>JoCART existing website was built with a generic template and the functions weren't meeting the needs of the organization. I started the site redesign by designing wireframes for key pages, which allowed the JoCART team to quickly provide feedback on content organization, site structure, and other key considerations.</p>
						</div>
					</div>
					<div class="span8">
						<div id="main-slider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="flex-caption">Wireframes - Homepage</p>
									<img src="img/samples/jocart/wireframe-home.png" />
								</li>
								<li>
									<p class="flex-caption">Homepage</p>
									<img src="img/samples/jocart/web-home.png" />
								</li>
								<li>
									<p class="flex-caption">Wireframes - Content</p>
									<img src="img/samples/jocart/wireframe-content.png" />
								</li>
								<li>
									<p class="flex-caption">Training Resources</p>
									<img src="img/samples/jocart/web-train.png" />
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
		$('#secondary-slider').flexslider({
			animation: "slide"
			}
		);
	});
	</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Work Sample: Lisa for Kansas Senate | Logo Design, Printed Materials, Web Presence | flow14</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="flow14 Work Sample: Logo Design, Printed Materials and Web Presence for Lisa for Kansas Senate">
	<meta name="keywords" content="logo design, mailers, walk cards, collateral materials, website design, seo">
	<meta name="author" content="Kyle Johnston">
	<?php include('includes/head.php'); ?>
</head>

<body>
	<div class="intro dark" style="background-color:#063472;">
		<?php include('includes/header-nav.php'); ?>
		<div class="container">
			<div class="row">
				<div class="introduction">
					<h1>Lisa for Kansas Senate</h1>
					<p><strong>The Story.</strong> In June 2012, my wife began her campaign for the Kansas Senate, a 21-week marathon for the newly-redrawn 8th district. This provided me with the unique opportunity to develop a distinctive brand and design a host of high-quality campaign materials on tight timelines and a shoestring budget.</p>
					<p><strong>The Services.</strong> Logo Design, Printed Materials, Web Presence</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container marketing">
		<!-- Logo Design -->
		<div class="featurette">
			<div class="inner">
				<h2>Logo Design</h2>
				<img class="featurette-image" src="img/samples/lisa-for-kansas-senate/logo.png">
				<p>This logo was an evolution of the look I developed for Lisa's <a href="/lisa-for-kansas">U.S. Senate bid</a>. I maintained the emphasis on her first name – it's easy to read and remember and helped her stand apart from her opponents.</p>
			</div>
		</div>
		<!-- Yard Sign -->
		<div class="featurette featurette-alt">
			<div class="inner">
				<h2>Yard Signs</h2>
				<div id="main-slider" class="flexslider flexslider-80">
					<ul class="slides">
						<li>
							<img src="img/samples/lisa-for-kansas-senate/yard-sign.png" />
							<p class="flex-caption">Yard Sign</p>
						</li>
						<li>
							<img src="img/samples/lisa-for-kansas-senate/yard-sign-prototype.png" />
							<p class="flex-caption">Prototype Yard Sign</p>
						</li>
					</ul>
				</div>
				<p>The yard signs were designed to be extremely readable and highly visible. Before printing the signs, I created full-size prototypes, placed them in a yard and drove by to ensure they would be easy to read.</p>
			</div>
		</div>
		<!-- Website -->
		<div class="featurette">
			<div class="inner">
				<h2>Website</h2>
				<div id="secondary-slider" class="flexslider flexslider-50">
					<ul class="slides">
						<li>
							<img src="img/samples/lisa-for-kansas-senate/web-home-combo.png" />
							<p class="flex-caption">Homepage - Desktop &amp; Mobile</p>
						</li>
						<li>
							<img src="img/samples/lisa-for-kansas-senate/web-candidate.png" />
							<p class="flex-caption">About Lisa</p>
						</li>
						<li>
							<img src="img/samples/lisa-for-kansas-senate/web-issues.png" />
							<p class="flex-caption">On the Issues</p>
						</li>
						<li>
							<img src="img/samples/lisa-for-kansas-senate/web-news.png" />
							<p class="flex-caption">Events, News, &amp; Endorsements</p>
						</li>
					</ul>
				</div>
				<p>Lisa’s distinctive website was developed to work in any browser – from desktop to mobile (mobile devices accounted for 14% of traffic during the campaign). We maintained the URL from the last campaign to ensure the site came out at the top of most search results, an important advantage in a short election cycle.</p><p>Reactions were positive; we heard other candidates wanted to copy the design and the site was reviewed on a <a href="http://blog.propaganda3.com/blog/2012/8/8/election-site-rumble-iii.html">local design blog</a>.</p>
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

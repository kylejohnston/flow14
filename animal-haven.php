<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Work Sample: AnimalHavenKC.org | Website architecture, Website design, CMS + Blog, SEO | flow14</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="flow14 Work Sample: Website design for Animal Haven Kansas City">
	<meta name="keyword" content="website architecture, website design, CMS, SEO">
	<meta name="author" content="Kyle Johnston">
	<?php include('includes/head.php'); ?>
</head>

<body>
	<div class="intro dark" style="background-color:#103553;">
		<?php include('includes/header-nav.php'); ?>
		<div class="container">		
			<div class="row">
				<div class="introduction">
					<h1>AnimalHavenKC.org</h1>
					<p><strong>The Story.</strong> Animal Haven came to flow14 frustrated by an outdated website that was confusing to navigate, difficult to maintain and not focused on their primary mission: adoptions. After talking with the leadership and staff and learning about their vision for the organization and the website, I delivered a colorful, easy to use website that focuses on their audience and their mission.</p>
					<p><strong>The Services.</strong> Website architecture, Website design, CMS + Blog, SEO</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container marketing">
		<!-- Logo Design -->
		<div class="featurette">
			<div class="inner">
				<h2>Website Design</h2>
				<div id="main-slider" class="flexslider flexslider-50">
					<ul class="slides">
						<li>
							<img src="img/samples/animalhavenkc/web-home.png" />
							<p class="flex-caption">Homepage</p>
						</li>
						<li style="text-align:center;">
							<img src="img/samples/animalhavenkc/web-about.png" />
							<p class="flex-caption">Internal Page - About Us</p>
						</li>
						<li>
							<img src="img/samples/animalhavenkc/web-volunteer.png" />
							<p class="flex-caption">Internal Page - Volunteer</p>
						</li>
					</ul>
				</div>

				<h3>The Solution</h3>
				<p>The homepage was revamped to prominently feature adoptions; photos of their featured pets are immediately visible, and visitors can view all of Animal Haven’s adoptable pets without leaving the site.</p>
				<p>Thanks to the new content management system, they can easily manage the site and incorporate content from tools they were already using, like Google Calendar for event listings and Google checkout for donations. Last but not least, I added a blog to help them share their success stories, shelter news, event information and more.</p>
				<h3>The Results</h3>
				<p>Since launching the site, overall visits have increased 70%. Pageviews have increased 173%. The bounce rate has dropped over 72% – from 66% to 18%, the average time spent on the site has increased 69%, and blog subscribers continue to grow.</p>
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

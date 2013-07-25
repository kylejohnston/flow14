<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Personal Project: iPhone 365 |  flow14</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="iPhone 365: take a photo a day, every day.">
	<meta name="keywords" content="iphone 365, photography">
	<meta name="author" content="Kyle Johnston">
	<?php include('includes/head.php'); ?>
</head>

<body>
	<div class="intro dark" style="background-color:#000;">
		<?php include('includes/header-nav.php'); ?>
		<div class="container">
			<div class="row">
				<div class="introduction">
					<h1>iPhone 365</h1>
					<p><strong>The Story.</strong> Since 2009, I’ve participated in <a href="http://www.flickr.com/groups/iphone365/">iPhone 365</a>, a project created by a couple of friends who challenged themselves to take a photo a day, every day. At the end of each year, I’ve strung my photos together to create a video, set to the song I listened to the most during the year.</p>
					<p><strong>Stats.</strong> 2009: 212 photos, 2010: 280 photos, 2011: 365 photos, 2012: 366 photos (leap year)</p>
				</div>
			</div>
		</div>
	</div>


	<div class="container marketing">
		<!-- 2012 -->
		<div class="featurette">
			<div class="inner">
				<h2>2012 <span class="caption">(Leap Year)</span></h2>
				<div class="container">
					<div class="row">
						<div class="span9 offset2 video" style="text-align:center;">
							<iframe src="http://player.vimeo.com/video/56615870?byline=0&amp;portrait=0&amp;color=c9ff23" width="600" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 2011 -->
		<div class="featurette featurette-alt">
			<div class="inner">
				<h2>2011</h2>
				<div class="container">
					<div class="row">
						<div class="span9 offset2 video" style="text-align:center;">
							<iframe src="http://player.vimeo.com/video/34446500?byline=0&amp;portrait=0&amp;color=c9ff23" width="600" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 2010 -->
		<div class="featurette">
			<div class="inner">
				<h2>2010</h2>
				<div class="container">
					<div class="row">
						<div class="span9 offset2 video" style="text-align:center;">
							<iframe src="http://player.vimeo.com/video/18376909?byline=0&amp;portrait=0&amp;color=c9ff23" width="600" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 2009 -->
		<div class="featurette featurette-alt">
			<div class="inner">
				<h2>2009</h2>
				<div class="container">
					<div class="row">
						<div class="span9 offset2 video" style="text-align:center;">
							<iframe src="http://player.vimeo.com/video/8490705?byline=0&amp;portrait=0&amp;color=c9ff23" width="600" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('includes/footer.php'); ?>
	</div>
	<?php include('includes/foot.php'); ?>
	<script src="js/jquery.fitvids.min.js"></script>
	<script>
		$(document).ready(function(){
			// Target your .container, .wrapper, .post, etc.
			$(".video").fitVids();
		});
	</script>

</body>
</html>

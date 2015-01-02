<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Personal Project: iPhone 365 Project |  flow14</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="iPhone 365 Project: take a photo a day, every day.">
	<meta name="keywords" content="iphone 365, 365 project, photography">
	<meta name="author" content="Kyle Johnston">
	<?php include('includes/head.php'); ?>
</head>

<body>
	<div class="intro dark" style="background-color:#000;">
		<?php include('includes/header-nav.php'); ?>
		<div class="container">
			<div class="row">
				<div class="introduction">
					<h1>iPhone 365 Project</h1>
					<p><strong>The Story.</strong> Since 2009, I’ve participated in <a href="http://www.flickr.com/groups/iphone365/">iPhone 365</a>, a project created by a couple of friends who challenged themselves to take a photo a day, every day. At the end of each year, I’ve compiled my photos into a short video, set to the song I listened to the most during the year.</p>
					<p><strong>Stats.</strong>1,953 photos since 2009. Year-by-year: 2009: 212 photos, 2010: 280 photos, 2011: 365 photos, 2012: 366 photos (leap year), 2013: 365 photos, 2014: 365 photos</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container marketing">
		<!-- 2014 -->
		<div class="featurette">
			<div class="container">
				<div class="row">
					<div class="span3">
						<div class="inner" style="text-align: center;">
							<h2>2014</h2>
						</div>
					</div>
					<div class="span9 video">
						<div class="inner">
							<iframe src="http://player.vimeo.com/video/115783465?byline=0&amp;portrait=0&amp;color=c9ff23" width="600" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- 2013 -->
		<div class="featurette featurette-alt">
			<div class="container">
				<div class="row">
					<div class="span3">
						<div class="inner" style="text-align: center;">
							<h2>2013</h2>
						</div>
					</div>
					<div class="span9 video">
						<div class="inner">
							<iframe src="http://player.vimeo.com/video/83177011?byline=0&amp;portrait=0&amp;color=c9ff23" width="600" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- 2012 -->
		<div class="featurette">
			<div class="container">
				<div class="row">
					<div class="span3">
						<div class="inner" style="text-align: center;">
							<h2>2012 <span class="caption">(Leap Year)</span></h2>
						</div>
					</div>
					<div class="span9 video">
						<div class="inner">
							<iframe src="http://player.vimeo.com/video/56615870?byline=0&amp;portrait=0&amp;color=c9ff23" width="600" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- 2011 -->
		<div class="featurette featurette-alt">
			<div class="container">
				<div class="row">
					<div class="span3">
						<div class="inner" style="text-align: center;">
							<h2>2011</h2>
						</div>
					</div>
					<div class="span9 video">
						<div class="inner">
							<iframe src="http://player.vimeo.com/video/34446500?byline=0&amp;portrait=0&amp;color=c9ff23" width="600" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- 2010 -->
		<div class="featurette">
			<div class="container">
				<div class="row">
					<div class="span3">
						<div class="inner" style="text-align: center;">
							<h2>2010</h2>
						</div>
					</div>
					<div class="span9 video">
						<div class="inner">
							<iframe src="http://player.vimeo.com/video/18376909?byline=0&amp;portrait=0&amp;color=c9ff23" width="600" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- 2009 -->
		<div class="featurette featurette-alt">
			<div class="container">
				<div class="row">
					<div class="span3">
						<div class="inner" style="text-align: center;">
							<h2>2009</h2>
						</div>
					</div>
					<div class="span9 video">
						<div class="inner">
							<iframe src="http://player.vimeo.com/video/8490705?byline=0&amp;portrait=0&amp;color=c9ff23" width="600" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- 2009 -->
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

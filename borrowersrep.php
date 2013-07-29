<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Work Sample: BorrowersRep.com | Logo Design, Collateral Materials, Website Design, SEO | flow14</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="flow14 Work Sample: Logo design, collateral materials, website design and SEO for BorrowersRep.com">
	<meta name="keywords" content="logo design, business card design, letterhead design, collateral materials, website design, seo">
	<meta name="author" content="Kyle Johnston">
	<?php include('includes/head.php'); ?>
</head>

<body>
	<div class="intro dark" style="background-color:#224362;">
		<?php include('includes/header-nav.php'); ?>
		<div class="container">
			<div class="row">
				<div class="introduction">
					<h1>BorrowersRep.com</h1>
					<p><strong>The Story.</strong> BorrowersRep came to flow14 with a clear business concept – give homebuyers the confidence that they're getting fair terms from their lender. I created a clean and inviting logo and website that communicated a friendly, professional image.</p>
					<p><strong>The Services.</strong> Logo Design, Collateral Materials, Website Design, SEO</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container marketing">
		<!-- Logo Design -->
		<div class="featurette">
			<div class="inner">
				<h2>Logo Design</h2>
				<img class="featurette-image" src="img/samples/borrowersrep/br-logo.png">
				<p>&nbsp;</p>
			</div>
		</div>
		<!-- Directory Design -->
		<div class="featurette featurette-alt">
			<div class="inner">
				<h2>Website</h2>
				<div id="main-slider" class="flexslider flexslider-50">
					<ul class="slides">
						<li>
							<img src="img/samples/borrowersrep/web-home.png">
							<p class="flex-caption">Homepage</p>
						</li>
						<li style="text-align:center;">
							<img src="img/samples/borrowersrep/web-how-it-works.png">
							<p class="flex-caption">How It Works</p>
					</ul>
				</div>
				<p>The website was designed to quickly communicate the benefits of BorrwersRep and invite visitors to learn more about the service.</p>
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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>flow14 - Design Works.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="flow14 is a design studio that specializes in helping small businesses, non-profits, and political groups connect with customers through engaging websites, logo design, collateral material and more.">
	<meta name="keywords" content="graphic design, web design, business cards, website, logo design, overland park, kansas city">
	<meta name="author" content="Kyle Johnston">
	<!-- Le styles -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--<link href="css/bootstrap-responsive.css" rel="stylesheet">-->
	<link href="css/custom.css?20130303924" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>
<body style="padding: 0 20px; margin: 0 auto; position: relative; box-sizing: border-box; background: yellow none;">
	<?php include('includes/header-nav.php'); ?>
    <!-- Carousel
    ================================================== -->
    <div class="carousel ">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/banner.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1><span style="font-weight:400; color:#222222;">Design Works. Anywhere.</span><br>Whether it's on-screen or on paper, flow14 specializes in helping small businesses, non-profits, and political groups connect with customers through engaging websites, logo design, collateral material and more.<br><a href="work">See the work I’ve created</a> or <a href="contact">contact me for a quote</a>.</h1>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel -->

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
	<div class="container items" style="margin: 0 -20px;">
		<div class="row">
			<h2 class="span12">Recent Work</h2>
			<div class="span4 item">
				<img src="http://placekitten.com/320/180" alt="">
				<div class="inner">
					<h2>Title</h2>
					<p>Donec ullamcorper nulla non metus auctor fringilla.</p>
				</div>
			</div>
			<div class="span4 item">
				<img src="http://placekitten.com/320/180" alt="">
				<div class="inner">
					<h2>Title</h2>
					<p>Donec ullamcorper nulla non metus auctor fringilla.</p>
				</div>
			</div>
			<div class="span4 item">
				<img src="http://placekitten.com/320/180" alt="">
				<div class="inner">
					<h2>Title</h2>
					<p>Donec ullamcorper nulla non metus auctor fringilla.</p>
				</div>
			</div>
			<p>&nbsp;</p>
			<div class="caption"><h3 class="span12"><a href="work">View more work samples ></a></h3></div>
		</div>
	</div>
	<div id="footer" style="background: rgba(0,0,0,.1); margin: 2em -20px -20px -20px;">
		<p style="padding:20px;">FOOTER</p>
	</div>


	<!--<?php include('includes/footer.php'); ?>-->
    <!-- Le javascript
    ================================================== -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.js">\x3C/script>')</script>
	<script src="js/jquery.flexslider-min.js"></script>
<!-- Place in the <head>, after the three links -->
	<script type="text/javascript">
	$(window).load(function(){
		$('#main-slider').flexslider({
			animation: "slide",
			controlsContainer: '.flex-container',
			start: function(slider){
				$('body').removeClass('loading');
			}
		});
		$('#secondary-slider').flexslider();
	});
	</script>
</body>
</html>

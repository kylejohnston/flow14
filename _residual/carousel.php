<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Carousel Template &middot; Bootstrap</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<?php include('includes/head.php'); ?>
</head>
<body>
	<?php include('includes/header-nav.php'); ?>
    <!-- Carousel
    ================================================== -->
    <div class="carousel ">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/examples/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
	<div class="container items">
		<div class="row">
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
		</div>
	</div>
    
    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <div class="featurette">
      	<div class="inner">
			<img class="featurette-image pull-right" src="img/examples/browser-icon-chrome.png">
			<h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
			<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      	</div>
      </div>

      <div class="featurette featurette-alt">
      	<div class="inner">
			<img class="featurette-image pull-left" src="img/examples/browser-icon-firefox.png">
			<h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
			<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      	</div>
      </div>

      <div class="featurette">
      	<div class="inner">
			<img class="featurette-image pull-right" src="img/examples/browser-icon-safari.png">
			<h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
			<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      	</div>
      </div>

		<!-- /END THE FEATURETTES -->
		<!-- FOOTER -->
    </div><!-- /.container -->
	<?php include('includes/footer.php'); ?>
	<?php include('includes/foot.php'); ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kansas City LISC Data Visualization | flow14. A Design Studio.</title>
	<meta name="description" content="Interactivce infographics designed and developed for Kansas City LISC, a local nonprofit." />
	<meta name="geo.placename" content="Kansas City" />
	<link href="https://plus.google.com/103758963959064535451" rel="publisher" />
	<link href="http://www.flow14.com/work/kc-lisc/" rel="canonical" />
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
</head>
<body>
	<div class="grid">
		<header class="mt-2 ml-2">
      <div>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/logo.php'); ?>
      </div>
		</header>

		<div class="grid-intro px-2 mt-2">
			<h1><div class="color-light-blue">Bringing Data to Life</div>Kansas City LISC</h1>
      <p class="mb-4">Greater Kansas City LISC (Local Initiative Support Corporation) approached flow<small>14</small> with a need for an infographic they could use to communicate their ties to the community, both in the services and causes they support and how they compare to and interact with other local organizations.</p>
    </div>

    <section class="main grid-in mt-2 mb-4">
      <div class="full shift-4">
        <div class="grid-content">
          <picture class="img hidden mb-2">
            <source srcset="/img/samples/kc-lisc/chord-diagram.lg.webp" media="(min-width: 63em)" type="image/webp">
            <source srcset="/img/samples/kc-lisc/chord-diagram.lg.jpg" media="(min-width: 63em)">
            <source srcset="/img/samples/kc-lisc/chord-diagram.sm.webp" type="image/webp">
            <source srcset="/img/samples/kc-lisc/chord-diagram.sm.jpg">
            <img class="shadow" src="/img/samples/kc-lisc/chord-diagram.jpg" width="100%" height="auto" alt="LISC KC Data Visualization" loading="lazy" />
          </picture>
        </div>
      </div>
      <div class="half-right">
        <div class="grid-content">
          <h3>The Challenge</h3>
					<p class="mb-3">Initially, we were asked to create a network diagram, but as we looked through the data provided, we realized a network diagram would result in an extremely complex visual, making it difficult for viewers to understand and difficult to update in the future.</p>
					<h3>The Solution</h3>
					<p class="mb-3">We created an engaging data visualization by using <a href="http://d3js.org/" title="d3 - data-driven documents">d3js</a>, a JavaScript library that enables relatively simple and flexible visualization of complex data. d3 provides the added benefits of being maintainable, functional across mobile and desktop devices, and offers the ability to export vector graphics that can be reproduced in print.</p>
					<a class="cta" style="width:auto;" href="http://www.flow14.com/lisc/" title="LISC Kansas City Interactive Diagram"><h3 class="m-none">View the live version</h3></a>
        </div>
      </div>
    </section>

    <section class="main grid-in mb-4">
      <div class="half-left grid-content">
        <picture class="img hidden mb-2">
            <source srcset="/img/samples/kc-lisc/kc-lisc-view.webp" media="(min-width: 63em)" type="image/webp">
            <source srcset="/img/samples/kc-lisc/kc-lisc-view.jpg" media="(min-width: 63em)">
            <source srcset="/img/samples/kc-lisc/kc-lisc-view.sm.webp" type="image/webp">
            <source srcset="/img/samples/kc-lisc/kc-lisc-view.sm.jpg">
            <img class="" src="/img/samples/kc-lisc/kc-lisc-view.jpg" width="100%" height="auto" alt="Data visualization: LISC KC view" loading="lazy" />
          </picture>
          <picture class="img hidden mb-2">
            <source srcset="/img/samples/kc-lisc/service-view.webp" media="(min-width: 63em)" type="image/webp">
            <source srcset="/img/samples/kc-lisc/service-view.jpg" media="(min-width: 63em)">
            <source srcset="/img/samples/kc-lisc/service-view.sm.webp" type="image/webp">
            <source srcset="/img/samples/kc-lisc/service-view.sm.jpg">
            <img class="" src="/img/samples/kc-lisc/service-view.jpg" width="100%" height="auto" alt="Data visualization: service view" loading="lazy" />
          </picture>
      </div>
      <div class="half-right mt-2">
        <div class="grid-content sticky">
          <h3>Interacting with the Infographic</h3>
					<p>Viewers can rollover any of the services or organizations to see how they're connected to each other.</p>
        </div>
      </div>
    </section>

    <section class="main grid-in mb-4">
      <div class="half-right grid-content">
        <h3>Need a design that works harder for your nonprofit?</h3>
        <a class="cta my-1" href="/contact/" style=""><h3 class="m-none">Let&rsquo;s Talk<span style="letter-spacing:-3px;">――――</span></h3></a>
      </div>
    </section>

  </div>

	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>
</html>

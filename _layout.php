<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>flow14 — A Design Studio in Kansas City</title>
	<meta name="description" content="flow14 is a design studio based in Kansas City. We make design work wonders for small businesses, nonprofits, and political groups." />
	<meta name="geo.placename" content="Kansas City" />
	<link href="https://plus.google.com/103758963959064535451" rel="publisher" />
	<link href="http://www.flow14.com/" rel="canonical" />
	<!-- < ?php include('includes/head.php'); ? > -->
	<link href="/css/gridkit.min.css" rel="stylesheet">
	<link href="/css/stylesheet.min.css" rel="stylesheet">

	<style type="text/css">
		.grid {
			display: grid;
			grid-template-columns:
				[full-start] 48px
				[main-start] repeat(6, 1fr) [main-end]
				48px [full-end];
		}
		/* .grid > * { grid-column: main; } */
		.container-inner {
			display:grid;
			/* grid-column: main; */
			grid-template-columns: minmax(0, 1fr);
		}
		.grid > .item {
			grid-column: span 1;
			background: #ccc9;
			border: 1px solid #ff0;
			height: 100px;
		}
		.grid > .gutter { background: yellow; }
		.grid > .full { grid-column: full; }
		@media screen and (max-width: 600px) {
			.grid {
				grid-template-columns:
					[full-start] 24px
					[main-start] 1fr [main-end]
					24px [full-end];
			}
			.grid > .item { grid-column: main; }
			.grid > .full { grid-column: full;}
		}

	.layout {
		display:grid;
		grid-template-columns: repeat( 0, 1fr );
		/* max-width: 72rem; */
		border: 1px solid red;
	}
	</style>

</head>
<body class="neutral welcome-home homepage">
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header-nav.php'); ?>

	<div class="grid" style="">
		<div class="gutter" style=""></div>
		<div class="item" style="">01</div>
		<div class="item" style="">02</div>
		<div class="item" style="">03</div>
		<div class="item" style="">04</div>
		<div class="item" style="">05</div>
		<div class="item" style="">06</div>
		<div class="gutter" style=""></div>
		<div class="item full" style="">FULL</div>
	</div>

<div class="layout">

	<section class="xwelcome">
		<div class="block">
			<div class="pattern__2-8-2">
				<div class="inner intro">
					<h1 id="fittext">We Make Design Work Wonders</h1>
					<p class="text__center heavyweight">A branding and web design studio making design work wonders for growing businesses and nonprofits. <a href="about" title="Learn more about flow14">Learn more about us…</a></p>
				</div>
				<div class="recent"><h4>Recent Projects</h4></div>
			</div>
		</div>
		<div class="/color-block"></div>
		<div class="/photo-block"></div>
	</section>



	<!-- < ?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?> -->

</div>


</body>
</html>

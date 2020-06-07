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
	<link href="/css/normalize.css" rel="stylesheet">
	<!-- <link href="/css/stylesheet.min.css" rel="stylesheet"> -->

	<style type="text/css">
		:root {
			--base-space: 24px;
			--grid-offset-left: calc( var(--base-space) * 2 );
			--grid-offset-right: calc( var(--base-space) * 2 );
		}
		body { font-size:clamp(1.25rem, calc( 0.125rem + 1vw), 1.5rem); line-height: 1.5; }
		.grid {
			display: grid;
			grid-template-columns:
				[full-start] var(--grid-offset-left) [main-start half-left-start] 1fr [intro-start] repeat(2, 1fr) [half-left-end half-right-start] repeat(3, 1fr) [half-right-end main-end] var(--grid-offset-right) [intro-end full-end];
		}
		.grid-in {
			display: grid;
			grid-template-columns: [full-start half-left-start] repeat(3, 1fr) [half-left-end half-right-start] repeat(3, 1fr) [half-right-end full-end];
		}
		.grid .item {
			grid-column: span 1;
			background: #179BCF22;
			/* border: 1px solid #ff0; */
			height: 100px;
		}
		.imgfpo {
			grid-column: full;
			min-height: 75vh;
			background: #BDBDBD;
			/* margin-top:-96px; */
		}
		.shift { margin-top:-96px;}
		.grid .item:nth-child(even) {
			background-color: #aaa2;
		}

		.gutter { background: yellow; }
		.full { grid-column: full; }
		.main { grid-column: main; }
		.intro-block { grid-column: intro; background: #179BCF; color: #F0F8FA; }
		.half-left { grid-column: half-left; }
		.half-right { grid-column: half-right; }

		header:after {
			content: "";
			background: #179BCF14;
			height:80vh;
			position:absolute;
			left:0;
			top:0;
			width:90vw;
			z-index:-1;
			background-blend-mode:multiply;
		}


		.blok { background: #eee; border: 1px solid blue; height:48px; padding:12px; }
		@media screen and (max-width: 600px) {
			:root {
				--base-space: 12px;
		}
			.grid {
				grid-template-columns:
					[full-start] 24px
					main
					24px [full-end];
			}
			.half-left { grid-column: main; }
			.half-right { grid-column: main; }

			.grid-in { grid-template-columns: 1fr; background:#f0f; }
			/* .grid > .item { grid-column: main; } */
			/* .grid > .full { grid-column: full;} */
		}

	.layout {
		display:grid;
		grid-template-columns: repeat( 0, 1fr );
		/* max-width: 72rem; */
		border: 1px solid red;
	}
	</style>

</head>
<body class="neutral welcome-home homepage" >
	<!--< ?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header-nav.php'); ? >-->

	<div class="grid" style="">
		<header class="" style="margin:48px 0 0 48px; display:grid; grid-column: 1 / 3;">
			<div class="logo"><img src="img/flow14-logo.svg" alt="" width="auto" height="36"></div>
		</header>

		<div class="intro-block" style="display:grid; grid-template-columns:repeat(5,1fr) 48px; margin-top:48px; padding:0 48px;">
			<h1 style="display:grid;grid-column: 1 / 4;height:50vh;align-content:center;">client Name: short project headline</h1>
			<p style="grid-column: 1 / 4;margin-bottom:192px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus tincidunt est id fringilla. In convallis commodo sem. Quisque ultricies purus et fermentum blandit. Pellentesque pellentesque est non ligula malesuada sodales.</p>
		</div>

		<article class="main grid-in">

			<div class="imgfpo shift"></div>
			<div class="half-right">
				<h2>Headline</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus tincidunt est id fringilla. In convallis commodo sem. Quisque ultricies purus et fermentum blandit. Pellentesque pellentesque est non ligula malesuada sodales.</p>
				<div class="item"></div>
				<h2>Headline</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus tincidunt est id fringilla. In convallis commodo sem. Quisque ultricies purus et fermentum blandit. Pellentesque pellentesque est non ligula malesuada sodales.</p>
			</div>

		</article>
		<article class="main grid-in">

			<div class="imgfpo"></div>
			<div class="half-right">
				<h2>Headline</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus tincidunt est id fringilla. In convallis commodo sem. Quisque ultricies purus et fermentum blandit. Pellentesque pellentesque est non ligula malesuada sodales.</p>
				<div class="item"></div>
				<h2>Headline</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus tincidunt est id fringilla. In convallis commodo sem. Quisque ultricies purus et fermentum blandit. Pellentesque pellentesque est non ligula malesuada sodales.</p>
			</div>

		</article>
		<div class="blok full" style="">FULL</div>

		<div class="main grid-in" style="">
			<!-- <p style="grid-column:span 6">Grid: Main</p> -->
			<div class="item">Item</div>
			<div class="item">Item</div>
			<div class="item">Item</div>
			<div class="item">Item</div>
			<div class="item">Item</div>
			<div class="item">Item</div>
		</div>
	</div>
	<!-- <div class="grid">
		<div class="item intro-block">Intro</div>
		<div class="half-right">
			<div class="blok"><p style="border:1px solid red;">Half-right</p></div>
		</div>
	</div> -->




</body>
</html>

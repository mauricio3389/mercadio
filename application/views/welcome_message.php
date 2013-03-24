<!doctype html>
<!--[if IE 7]>	<html class="no-js  lt-ie10 lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>	<html class="no-js lt-ie10 lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9]>	<html class="no-js lt-ie10 ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
	<script></script>
	<meta charset="utf-8" />
	<title>Mercadio</title>

	<!-- Mobile viewport optimization http://goo.gl/b9SaQ -->
	<meta name="HandheldFriendly" content="True">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="cleartype" content="on">

	<link rel="stylesheet" href="http://static.mercadio.com.ar/css/reset-min-0.13.1.css">
	<link rel="stylesheet" href="http://static.mercadio.com.ar/css/chico-min-0.13.1.css">
	<link rel="stylesheet" href="http://static.mercadio.com.ar/css/mesh-min-2.1.css">
	<style>
		/**
		 * Carousel demo
		 */
		.myCarousel .ch-carousel-item {
			width: 1100px;
			height: 258px;
		}

		.myCarousel img {
			max-width: 100%;
			max-height: 100%;
		}

		/* Icons demo */
		.showroomIcons {
			overflow: hidden;
		}

		.showroomIcons li{
			float:left;
			width: 33%;
			line-height: 2em;
		}

		.autoComplete {
			width: 250px;
		}

		.autoComplete2 {
			width: 350px;
		}

		.autoComplete3 {
			width: 450px;
		}

		.ch-loading-small {
			display: block;
			margin:0 auto;
		}
	</style>
</head>

<body>

	<div class="ch-clearfix">
		<div class="ch-g1">
			<div class="ch-box-lite"><img src="http://static.mercadio.com.ar/imagenes/mercadiologo.png"></div>
		</div>
		<div class="ch-g1">
			<div class="ch-box-lite">
			
			<div class="myCarousel ch-carousel">
			<ul>
                            <li><img src="http://static.mercadio.com.ar/imagenes/filter1.png"></li>
				<li><img src="http://static.mercadio.com.ar/imagenes/filter2.png"></li>
				<li><img src="http://static.mercadio.com.ar/imagenes/filter3.png"></li>
				<li><img src="http://static.mercadio.com.ar/imagenes/filter4.png"></li>

			</ul>
		</div>
               <?php 
               $this->load->helper('url'); ?>
                            <p style="text-align:center;"><a href="<?php echo site_url("user")?>" class="ch-btn ch-btn-big" >Comenzar ahora, es gratis!"</a></p>
                       
		
			
			</div>
		</div>
			
	</div>

	<script src="http://static.mercadio.com.ar/js/jquery.js"></script>
	<script src="http://static.mercadio.com.ar/js/chico-min-0.13.1.js"></script>
	<script>
		// Carousel
		//var carousel = $(".myCarousel").carousel({"pagination": true});
		var carousel = $.carousel($(".myCarousel"), {"pagination": true});


		// Menu
		var menu = $(".YOUR_SELECTOR_Menu").menu({
			'selected': 5
		});

	</script>
</body>
</html>

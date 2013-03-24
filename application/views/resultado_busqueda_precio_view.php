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
			width: 250px;
			height: 250px;
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
		    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      


	  function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
          ['x', 'Competencia A', 'Mi producto', 'Competencia B'],
          ['Ene',   10,       7,           6],
          ['Feb',   20,       14,         5],
          ['Mar',   40,       28,           4],
          ['Abr',   80,       56,         3],
          ['May',   70,       49,           7],
          ['Jun',   70,       49,         8],
          ['Jul',   80,       56,           9],
          ['Ago',   40,       28,         10],
          ['Sep',   20,       14,           20],
          ['Oct',   60,     42,         23],
          ['Nov',   30,       21,           24],
          ['Dic',   70,     49,         27],
          
        ]);
      
        // Create and draw the visualization.
        new google.visualization.LineChart(document.getElementById('visualization')).
            draw(data, {curveType: "function",
                        width: "100%", height: 300, 
                        vAxis: {maxValue: 10}}
                );
      }
	  

      google.setOnLoadCallback(drawVisualization);
    </script>
</head>

<body>

	<div class="ch-clearfix">
		<!-- HEADER -->
		<div class="ch-g1">
			<div class="ch-box-lite"><a href="<?php echo site_url('home/logout')?>"><img src="http://static.mercadio.com.ar/imagenes/mercadiologo.png"><p style="float:right">Cerrar sesión</p></a></div>
		</div>
		<!-- HEADER -->
		
		<!-- menu-left -->
		<div class="ch-g1-5">
			<div class="ch-box-lite ch-leftcolumn">
			<div class="ch-box-container">
		<h2>Menu</h2>
		<ul class="YOUR_SELECTOR_Menu">
			<li>
				<a href="<?php echo site_url('crm');?>">CRM</a>
			</li>
			<li>
				<a href="<?php echo site_url('home');?>">Tablero de control</a>
			</li>
			<li>
				<a href="<?php echo site_url('conversiones');?>">Métricas claves</a>
			</li>
			<li>
				<a href="<?php echo site_url('busqueda_precio');?>">Estadísticas de precios</a>
			</li>
			<li>
				<a href="#">Tendencias</a>
			</li>
		</ul>
	</div>

			</div>
		</div>
		
		<!-- menu left -->
		
		<!-- cuerpo derecha -->
		<div class="ch-g4-5">
			<div class="ch-box-lite ch-rightcolumn">
				<span><h2>Comparador de precios</h2></span>
				<div class="ch-form-row">
					<label for="characters">
						Seleccionar mi producto:
					</label>
					<select id="select1">
						<option value="-1">Seleccionar...</option>
						<option value="1">Cámara digital...</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
						<option value="4">Option 4</option>
					</select>				</div>
		</div>
		</div>
		
		<div class="ch-g4-5">
			<div class="ch-box-lite ch-rightcolumn">
				
				<form action="./ajax.html" class="YOUR_SELECTOR_FormdatePicker ch-form">
			<span  class="ch-form-row">
				<label for="val_date">
					Date:
				</label>
				<input type="date" id="val_date" class="myDatePicker" placeholder="DD/MM/YYYY">
			</span>
			<span class="ch-form-row">
				<label for="val_date2">
					Date:
				</label>
				<input type="date" id="val_date2" class="myDatePicker2" placeholder="DD/MM/YYYY">
			</span>
		</form>
		</div>
		</div>

		<div class="ch-g4-5">
			<div class="ch-box-lite ch-rightcolumn">
			
			<div id="visualization"></div>
			
		</div>
		</div>

		
	</div>

	

	<script src="http://static.mercadio.com.ar/js/jquery.js"></script>
	<script src="http://static.mercadio.com.ar/js/chico-min-0.13.1.js"></script>
	<script>
	
		
		// Date Picker
		var	datePicker = $("#val_date").datePicker({
			"selected": "2011/11/15",
			"to": "today"
		});

		var	datePicker2 = $("#val_date2").datePicker({
			"selected": "2011/11/15",
			"to": "today"
		});

		
		// Menu
		var menu = $(".YOUR_SELECTOR_Menu").menu({
			'selected': 5
		});

		// Form
		var form = $('.myForm').form();


	</script>
</body>
</html>

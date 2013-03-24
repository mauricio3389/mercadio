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
</head>

<body>

	<div class="ch-clearfix">
		<!-- HEADER -->
		<div class="ch-g1">
			<div class="ch-box-lite"><img src="http://static.mercadio.com.ar/imagenes/mercadiologo.png"><p style="float:right">Cerrar sesión</p></div>
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
				
				<div class="ch-form-row">
					<label for="characters">
						Búsqueda de competencia:
					</label>
					<input type="text"  size="35" id="characters"placeholder="Búscar competencia por palabra clave">
					<span><input type="button" class="ch-btn" value="Buscar"></span>
					
						<label for="range">
						Filtro de precio:
						<em>*</em>
					</label>
					<input type="range" id="range" name="range" min="1" max="20">
				</div>
		</div>
		</div>

		<div class="ch-g4-5">
			<div class="ch-box-lite ch-rightcolumn">
			
			<table class="ch-datagrid" summary="Listado de cobros en MercadoPago">
				<caption>Listado de competencia</caption>
				<thead>
					<tr>
						<th scope="col">Foto</th>
						<th scope="col">Descripción</th>
						<th scope="col">Nuevo/Usado</th>
						<th scope="col">Cant. Vendida</th>
						<th scope="col">Ubicación</th>
						<th scope="col">Precio</th>
						<th scope="col">Acción</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a id="YOUR_SELECTOR_Zoom" href="http://bimg1.mlstatic.com/samsung-st68-16mpx-foto-panoramica-pant-27-8gb-funda-trip_MLA-F-3106136826_092012.jpg" target="_blank"><img src="http://img2.mlstatic.com/s_MLA_v_S_f_3106136826_092012.jpg" width:"70" height="70"></a></td>
						
						<td><a href="#">Samsung St68 16mpx Foto Panorámica Pant 2.7 8gb Funda Trip</a></td>
						<td>Nuevo</td>
						<td>305</td>
						<td><span class="value">Capital federal</span></td>
						<td><strong>$999</strong></td>
						<td><button class="ch-btn-skin ch-btn-small">Seguir</button></td>
					</tr>
					
					<tr>
						<td><a id="YOUR_SELECTOR_Zoom" href="http://bimg1.mlstatic.com/samsung-st68-16mpx-foto-panoramica-pant-27-8gb-funda-trip_MLA-F-3106136826_092012.jpg" target="_blank"><img src="http://img2.mlstatic.com/s_MLA_v_S_f_3106136826_092012.jpg" width:"70" height="70"></a></td>
						
						<td><a href="#">Samsung St68 16mpx Foto Panorámica Pant 2.7 8gb Funda Trip</a></td>
						<td>Nuevo</td>
						<td>305</td>
						<td><span class="value">Capital federal</span></td>
						<td><strong>$999</strong></td>
						<td><button class="ch-btn-skin ch-btn-small">Seguir</button></td>
					</tr>
					
					<tr>
						<td><a id="YOUR_SELECTOR_Zoom" href="http://bimg1.mlstatic.com/samsung-st68-16mpx-foto-panoramica-pant-27-8gb-funda-trip_MLA-F-3106136826_092012.jpg" target="_blank"><img src="http://img2.mlstatic.com/s_MLA_v_S_f_3106136826_092012.jpg" width:"70" height="70"></a></td>
						
						<td><a href="#">Samsung St68 16mpx Foto Panorámica Pant 2.7 8gb Funda Trip</a></td>
						<td>Nuevo</td>
						<td>305</td>
						<td><span class="value">Capital federal</span></td>
						<td><strong>$999</strong></td>
						<td><button class="ch-btn-skin ch-btn-small">Seguir</button></td>
					</tr>
					
					<tr>
						<td><a id="YOUR_SELECTOR_Zoom" href="http://bimg1.mlstatic.com/samsung-st68-16mpx-foto-panoramica-pant-27-8gb-funda-trip_MLA-F-3106136826_092012.jpg" target="_blank"><img src="http://img2.mlstatic.com/s_MLA_v_S_f_3106136826_092012.jpg" width:"70" height="70"></a></td>
						
						<td><a href="#">Samsung St68 16mpx Foto Panorámica Pant 2.7 8gb Funda Trip</a></td>
						<td>Nuevo</td>
						<td>305</td>
						<td><span class="value">Capital federal</span></td>
						<td><strong>$999</strong></td>
						<td><button class="ch-btn-skin ch-btn-small">Seguir</button></td>
					</tr>
					
				</tbody>
			</table>

			
		</div>
		</div>

		
	</div>



	<script src="http://static.mercadio.com.ar/js/jquery.js"></script>
	<script src="http://static.mercadio.com.ar/js/chico-min-0.13.1.js"></script>
	<script>
		


		// Zoom
		var zoom = $("#YOUR_SELECTOR_Zoom").zoom();


		// Menu
		var menu = $(".YOUR_SELECTOR_Menu").menu({
			'selected': 5
		});

		// Form
		var form = $('.myForm').form();


	</script>
</body>
</html>

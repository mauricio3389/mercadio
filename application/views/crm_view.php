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
                            <a href="<?php echo site_url('crm'); ?>">CRM</a>
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
						Búsqueda de usuario:
					</label>
					<input type="text"  size="35" id="characters"placeholder="Buscar por apodo, nombre, o e-mail">
					<span><input type="button" class="ch-btn" value="Buscar"></span>
				</div>
		</div>
		</div>

		<div class="ch-g4-5">
			<div class="ch-box-lite ch-rightcolumn">
			
			<table class="ch-datagrid" summary="Listado de cobros en MercadoPago">
				<caption>Listado de clientes</caption>
				<thead>
					<tr>
						<th scope="col">Fecha</th>
						<th scope="col">Cliente</th>
						<th scope="col">Producto</th>
						<th scope="col">Preguntas</th>
						<th scope="col">Pago</th>
						<th scope="col">Envío</th>
						<th scope="col">Calificaciones</th>
						<th scope="col">Acciones</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<td>02/04/2011</td>
						<td><a href="#">Martín Lopez</a></td>
						<td>Cámara digital samsung lcd pdf</td>
						<td>
						<a class="YOUR_SELECTOR_Modal_invisible ch-btn-skin ch-btn-small">Ver preguntas</a>

		<div id="invisible-content" class="ch-hide">
<table class="ch-datagrid" summary="Listado de cobros en MercadoPago">
				<caption>Ver preguntas y respuestas</caption>
				<thead>
					<tr>
						<th scope="col">Preguntas</th>
						<th scope="col">Respuestas</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><i class="ch-icon-comment"></i>Hola que tal hacen envios a todos el pais</td>
						<td><i class="ch-icon-comment-alt"></i>Si, tranqui, a todos lados</td>
					</tr>
					<tr>
						<td><i class="ch-icon-comment"></i>Hola que tal hacen envios a todos el pais</td>
						<td><i class="ch-icon-comment-alt"></i>Si, tranqui, a todos lados</td>
					</tr>
				</tbody></table>			
		</div>					
						
						</td>
						<td><span class="value">Acreditado</span></td>
						<td>Retira</td>
						<td><i class="ch-icon-plus-sign"></i></td>
						<td><div class="myDropdown ch-dropdown-skin">
			<p class="ch-dropdown-trigger"><i class="ch-icon-cog"></i></p>
			<menu label="Links" class="ch-dropdown-content">
				<li><a href="http://www.mercadolibre.com">Calificar</a></li>
				<li><a href="http://www.mercadopago.com">Enviar codigo de seguimiento</a></li>
				<li><a href="http://www.mercadoshops.com">Responder pregunta</a></li>
				<li><a href="http://www.mercadoclics.com">Enviar datos de retiro</a></li>
			</menu>
		</div>
				</td>
					</tr>
										<tr>
						<td>02/04/2011</td>
						<td><a href="#">Martín Lopez</a></td>
						<td>Cámara digital samsung lcd pdf</td>
						<td>
						<a class="YOUR_SELECTOR_Modal_invisible ch-btn-skin ch-btn-small">Ver preguntas</a>

		<div id="invisible-content" class="ch-hide">
<table class="ch-datagrid" summary="Listado de cobros en MercadoPago">
				<caption>Ver preguntas y respuestas</caption>
				<thead>
					<tr>
						<th scope="col">Preguntas</th>
						<th scope="col">Respuestas</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><i class="ch-icon-comment"></i>Hola que tal hacen envios a todos el pais</td>
						<td><i class="ch-icon-comment-alt"></i>Si, tranqui, a todos lados</td>
					</tr>
					<tr>
						<td><i class="ch-icon-comment"></i>Hola que tal hacen envios a todos el pais</td>
						<td><i class="ch-icon-comment-alt"></i>Si, tranqui, a todos lados</td>
					</tr>
				</tbody></table>			
		</div>					
						
						</td>
						<td><span class="value">Acreditado</span></td>
						<td>Retira</td>
						<td><i class="ch-icon-plus-sign"></i></td>
						<td><div class="myDropdown ch-dropdown-skin">
			<p class="ch-dropdown-trigger"><i class="ch-icon-cog"></i></p>
			<menu label="Links" class="ch-dropdown-content">
				<li><a href="http://www.mercadolibre.com">Calificar</a></li>
				<li><a href="http://www.mercadopago.com">Enviar codigo de seguimiento</a></li>
				<li><a href="http://www.mercadoshops.com">Responder pregunta</a></li>
				<li><a href="http://www.mercadoclics.com">Enviar datos de retiro</a></li>
			</menu>
		</div>
				</td>
					</tr>
										<tr>
						<td>02/04/2011</td>
						<td><a href="#">Martín Lopez</a></td>
						<td>Cámara digital samsung lcd pdf</td>
						<td>
						<a class="YOUR_SELECTOR_Modal_invisible ch-btn-skin ch-btn-small">Ver preguntas</a>

		<div id="invisible-content" class="ch-hide">
<table class="ch-datagrid" summary="Listado de cobros en MercadoPago">
				<caption>Ver preguntas y respuestas</caption>
				<thead>
					<tr>
						<th scope="col">Preguntas</th>
						<th scope="col">Respuestas</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><i class="ch-icon-comment"></i>Hola que tal hacen envios a todos el pais</td>
						<td><i class="ch-icon-comment-alt"></i>Si, tranqui, a todos lados</td>
					</tr>
					<tr>
						<td><i class="ch-icon-comment"></i>Hola que tal hacen envios a todos el pais</td>
						<td><i class="ch-icon-comment-alt"></i>Si, tranqui, a todos lados</td>
					</tr>
				</tbody></table>			
		</div>					
						
						</td>
						<td><span class="value">Acreditado</span></td>
						<td>Retira</td>
						<td><i class="ch-icon-plus-sign"></i></td>
						<td><div class="myDropdown ch-dropdown-skin">
			<p class="ch-dropdown-trigger"><i class="ch-icon-cog"></i></p>
			<menu label="Links" class="ch-dropdown-content">
				<li><a href="http://www.mercadolibre.com">Calificar</a></li>
				<li><a href="http://www.mercadopago.com">Enviar codigo de seguimiento</a></li>
				<li><a href="http://www.mercadoshops.com">Responder pregunta</a></li>
				<li><a href="http://www.mercadoclics.com">Enviar datos de retiro</a></li>
			</menu>
		</div>
				</td>
					</tr>
										<tr>
						<td>02/04/2011</td>
						<td><a href="#">Martín Lopez</a></td>
						<td>Cámara digital samsung lcd pdf</td>
						<td>
						<a class="YOUR_SELECTOR_Modal_invisible ch-btn-skin ch-btn-small">Ver preguntas</a>

		<div id="invisible-content" class="ch-hide">
<table class="ch-datagrid" summary="Listado de cobros en MercadoPago">
				<caption>Ver preguntas y respuestas</caption>
				<thead>
					<tr>
						<th scope="col">Preguntas</th>
						<th scope="col">Respuestas</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><i class="ch-icon-comment"></i>Hola que tal hacen envios a todos el pais</td>
						<td><i class="ch-icon-comment-alt"></i>Si, tranqui, a todos lados</td>
					</tr>
					<tr>
						<td><i class="ch-icon-comment"></i>Hola que tal hacen envios a todos el pais</td>
						<td><i class="ch-icon-comment-alt"></i>Si, tranqui, a todos lados</td>
					</tr>
				</tbody></table>			
		</div>					
						
						</td>
						<td><span class="value">Acreditado</span></td>
						<td>Retira</td>
						<td><i class="ch-icon-plus-sign"></i></td>
						<td><div class="myDropdown ch-dropdown-skin">
			<p class="ch-dropdown-trigger"><i class="ch-icon-cog"></i></p>
			<menu label="Links" class="ch-dropdown-content">
				<li><a href="http://www.mercadolibre.com">Calificar</a></li>
				<li><a href="http://www.mercadopago.com">Enviar codigo de seguimiento</a></li>
				<li><a href="http://www.mercadoshops.com">Responder pregunta</a></li>
				<li><a href="http://www.mercadoclics.com">Enviar datos de retiro</a></li>
			</menu>
		</div>
				</td>
					</tr>
				</tbody>
			</table>

			
		</div>
		</div>

		
	</div>

	
	<script src="http://static.mercadio.com.ar/js/jquery.js"></script>
	<script src="http://static.mercadio.com.ar/js/chico-min-0.13.1.js"></script>
	<script>
		// Modal
		var modal1 = $(".YOUR_SELECTOR_Modal").modal({
			"width": "500px",
			"height": "300px"
		});

		// Modal with invisible DOM Content
		var modal2 = $(".YOUR_SELECTOR_Modal_invisible").modal($("#invisible-content"));

		// Dropdown
		var dropdown = $(".myDropdown").dropdown();

		// Menu
		var menu = $(".YOUR_SELECTOR_Menu").menu({
			'selected': 5
		});

		// Form
		var form = $('.myForm').form();


	
	</script>
</body>
</html>

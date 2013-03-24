<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    
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
	<link rel="stylesheet" href="css/mesh-min-2.1.css">
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
          ['Task', 'Hours per Day'],
          ['Positivas', 80],
          ['Negativas', 2],
          ['Neutrales', 5]
        ]);
      
        // Create and draw the visualization.
        new google.visualization.PieChart(document.getElementById('calificaciones')).
            draw(data, {title:"", width:"100%"});
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
	
	<script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Producto A', 'Producto B', 'Producto C'],
          ['',  1336060,   3817614,       974066],
          
        ]);
      
        // Create and draw the visualization.
        new google.visualization.ColumnChart(document.getElementById('productos')).
            draw(data,
                 {title:"",
                  width:"100%", height:"100%",
                  hAxis: {title: ""}}
            );
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
</head>
    <body>
        
    <?php
    $this->load->helper('url');
    $this->load->library('session');
    $usuario = $this->session->userdata('usuario');
    $nickname = $this->session->userdata('nickname');
    $login_in_MELI = $this->session->userdata('logged_in_MELI');
    ?>
        <p><h2>Bienvenido <?php echo $usuario; if($login_in_MELI == TRUE) echo ", Logueado como $nickname";?>!</h2></p>

        <?php if($login_in_MELI == FALSE || $login_in_MELI == NULL)
        {?>
        <p><a href="home/Conect">Conectarse con mercado libre</a></p>
        <?php }?>
	<div class="ch-clearfix">
		<!-- HEADER -->
		<div class="ch-g1">
                    <div class="ch-box-lite"><a href="home/logout"><img src="http://static.mercadio.com.ar/imagenes/mercadiologo.png"><p style="float:right">Cerrar sesión</p></a></div>
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
			
<div style="width:30%; display:inline-table;" class="ch-box">
		<h2>Ventas</h2>
		<p style="font-size:3em">$35.065</p>
		<p></p>	</div>
	
	<div style="width:30%; display:inline-table;" class="ch-box">
		<h2>Cobros</h2>
		<p style="font-size:3em">$35.065</p>
		<p></p>
	</div>
	
	<div style="width:30%; display:inline-table;" class="ch-box">
		<h2>Venta promedio</h2>
		<p style="font-size:3em">$35.065</p>
		<p></p>
	</div>	

<div style="width:30%; display:inline-table;" class="ch-box">
		<h2>Unidades Vendidas</h2>
		<p style="font-size:3em">$35.065</p>
		<p></p>
	</div>
	
	<div style="width:30%; display:inline-table;" class="ch-box">
		<h2>Unidades cobradas</h2>
		<p style="font-size:3em">$35.065</p>
		<p></p>
	</div>
	
	<div style="width:30%; display:inline-table;" class="ch-box">
		<h2>Alertas</h2>
		<p>3 preguntas sin contestar</p>
		<p>3 operaciones sin calificar</p>
	</div>	

<div style="width:30%; display:inline-table;" class="ch-box">
		<h2>Calificaciones recibidas</h2>
		<p><div id="calificaciones"></div></p>
	</div>
	
	<div style="width:63%; display:inline-table;" class="ch-box">
		<h2>Top 3 en ventas</h2>
		<p><div id="productos"></div></p>
	</div>
	
	
	

			</div>
		</div>

		
	</div>



	<script src="http://static.mercadio.com.ar/js/jquery.js"></script>
	<script src="http://static.mercadio.com.ar/js/chico-min-0.13.1.js"></script>
	<script>

		// Right
		$("#ltrt").tooltip({
			"points": "lt rt",
			"offset": "10 0"
		});
		$("#lmrm").tooltip({
			"points": "lm rm",
			"offset": "10 0"
		});
		$("#lbrb").tooltip({
			"points": "lb rb",
			"offset": "10 0"
		});

		// Left
		$("#rtlt").tooltip({
			"points": "rt lt",
			"offset": "-10 0"
		});
		$("#rmlm").tooltip({
			"points": "rm lm",
			"offset": "-10 0"
		});
		$("#rblb").tooltip({
			"points": "rb lb",
			"offset": "-10 0"
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

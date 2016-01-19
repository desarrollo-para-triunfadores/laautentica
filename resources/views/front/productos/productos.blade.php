<!DOCTYPE html>
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<title>La Autentica Distribuidora SA - Resistencia-Chaco</title>
		@include('front.partes.estilos')
	</head>
	<body>
		@include('front.partes.cabeceraPartes')
		<div class="content-block parallax" id="parallax"></div><!-- #parallax -->
		<div id="wrapper">
			<div class="content-block" id="portfolio">
				<div class="container portfolio-sec">
					<header class="block-heading cleafix">
						<a  onclick="ocultarBusqueda();" class="btn btn-o btn-lg pull-right"><i id="bot-buscar" class="fa fa-search"> Mostrar filtros</i></a>
						<div class="title-page">
							<p class="main-header">Productos </p>
						    <p class="sub-header">Heche un vistazo a los productos con los que trabajamos</p>
					    </div>
					</header>	
					@include('front.productos.cabeceraTabla')
					@include('front.productos.contenidoTabla')
				</div>
			</div>
		</div><!--/#wrapper-->
		@include('front.partes.scripts')
	</body>
</html>
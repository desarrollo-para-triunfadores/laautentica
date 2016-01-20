<!DOCTYPE html>
<html class="noIE" lang="es-AR">
	<head>
		<title>La Autentica Distribuidora SA - Resistencia-Chaco</title>
		@include('front.partes.estilos')
	</head>
	<body>
		@include('front.partes.cabeceraPartes')
		<div id="modalProducto"></div>		
		<div class="content-block parallax" id="parallax"></div><!-- #parallax -->
		<div id="wrapper">
			<div class="content-block" id="portfolio">
				<div class="container portfolio-sec">
					<header class="block-heading cleafix">
						<a  onclick="ocultarBusqueda();" class="btn btn-o btn-lg pull-right"><i id="bot-buscar" class="fa fa-search"> Mostrar Filtros</i></a>
						<div class="title-page">
							<p class="main-header">Marcas </p>
						    <p class="sub-header">Heche un vistazo a las marcas con las que trabajamos</p>
					    </div>
					</header>	
					@include('front.marcas.cabeceraTabla')
					@include('front.marcas.contenidoTabla')
				</div>
			</div>
		</div>
		<button id="boton-modal" class="hide" data-toggle="modal" data-target=".bs-example-modal-lg"></button>
		@include('front.partes.scripts')
	    <script src="{{ asset('js/marcas.js') }}"></script>
	    <script>
	        var route = "/marcas";
	    </script>
	</body>
</html>
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
			@include('front.marcas.descripcionMarca')
			<div class="content-block" id="portfolio">
				<div class="container portfolio-sec">
					{!! Form::select('bus-marca', array($marca->id => 'marca seleccionada'), $marca->id, ['class' => 'hide', 'id' => 'bus-marca']) !!}
					<header class="block-heading cleafix">
						<a  onclick="ocultarBusqueda();" class="btn btn-o btn-lg pull-right"><i id="bot-buscar" class="fa fa-search"> Mostrar Filtros</i></a>
						<div class="title-page">
							<p class="main-header">Productos  </p>
						    <p class="sub-header">Heche un vistazo a los Productos que contamos de esta marca</p>
					    </div>
					</header>	
					@include('front.marcas.cabeceraProductoMarca')
					@include('front.productos.contenidoTabla')
				</div>
			</div>
		</div>
		<button id="boton-modal" class="hide" data-toggle="modal" data-target=".bs-example-modal-lg"></button>
		@include('front.partes.scripts')
	    <script src="{{ asset('js/productos.js') }}"></script>
	    <script>
	        var route = "/productos";
	    </script>
	</body>
</html>
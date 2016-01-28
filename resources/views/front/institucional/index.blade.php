<!DOCTYPE html>
<html class="noIE" lang="es-AR">
	<head>
		<title>La Autentica Distribuidora SA - Resistencia-Chaco</title>
		@include('front.partes.estilos')
	</head>
	<body>
		@include('front.partes.cabeceraPartes')
				<div class="content-block juampy " id="parallax"></div><!-- #parallax -->

		<!--Carrouselirijillo-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="first-slide img-responsive center-block " style="width:100%" src="{{ asset('imagenes/institucional/fotos/8.jpg') }} " alt="First slide">

					<div class="container">
						<div class="carousel-caption">
							<h1>La Autentica Distribuidora S.R.L.</h1>
							<p>LA Distribuidora Mayorista...
							</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Ordenar Catalogo</a></p>
						</div>
					</div>
					</img>
				</div>
				<div class="item">
					<img class="second-slide img-responsive center-block  " style="width:100%" src="{{ asset('imagenes/institucional/fotos/7.jpg') }} " alt="Second slide">
					<div class="container">

						<div class="carousel-caption">
							<h1>Flota renovada de transporte de sustencias.</h1>
							<p>Nos renovamos constantemente para optimizar nuestros servicios</p>
							<!--Boton <p><a class="btn btn-lg btn-primary" href="#" role="button"></a></p>-->
						</div>
					</div>
				</div>
				<div class="item">
					<img class="third-slide img-responsive center-block " style="width:100%" src="{{ asset('imagenes/institucional/fotos/6.jpg') }} " alt="Third slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Mision</h1>
							<p>Ser su aliado estrategico creciendo dia a dia, garantizando a nuestra distinguidos clientes lo mejor en servicio y calidad.
							</p>
							<p><a class="btn btn-lg btn-primary" href="{{ route('marcas.index') }}" role="button">Ver Marcas</a></p>
						</div>
					</div>
				</div>
			</div>
			<!--
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			-->
		</div><!-- /.carousel -->


		<div id="about" class="about-us">
			@include('front.institucional.origenes')
		</div>

		<div id="about" class="about-us">
			@include('front.institucional.experiencia')
		</div>


		<div id="about" class="about-us">
			@include('front.institucional.proveedores')
		</div>


		@include('front.partes.pie')
		@include('front.partes.scripts')
	</body>
</html>



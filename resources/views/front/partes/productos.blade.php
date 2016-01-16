<!DOCTYPE html>
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<title>La Autentica Distribuidora SA - Resistencia-Chaco</title>
		@include('front.partes.estilos')
	</head>
	
	<body>
		<header class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-5 col-sm-4 header-logo">
						<br>
						<a href="index.html"> 
							<h1 class="logo">La Autentica <span class="logo-head"></span></h1>
						</a>
					</div>

					<div class="col-md-8 col-md-offset-1 col-xs-7">
						<nav class="navbar navbar-default">
						  	<div class="container-fluid nav-bar">
						    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header">
							      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								        <span class="sr-only">Toggle navigation</span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
							      	</button>
							    </div>

						    	<!-- Collect the nav links, forms, and other content for toggling -->
							    <div class="collapse navbar-collapse navbar-def" id="bs-example-navbar-collapse-1">
							      
							      	<ul class="nav navbar-nav navbar-right">
							        	<li>
											<a href="#wrapper"><i class="fa fa-home"></i> Inicio</a>
										</li>
										<li>
											<a href="#about"><i class="fa fa-bookmark"></i> Acerca de nosotros</a>
										</li>
										<li>
											<a href="#portfolio"><i class="fa fa-bookmark"></i> Marcas</a>
										</li>
										<li>
											<a href="#services"><i class="fa fa-tasks"></i> Productos</a>
										</li>
										<li>
											<a href="#blog"><i class="fa fa-wordpress"></i> Contacto</a>
										</li>
										<li>
											<a href="#testimonials"><i class="fa fa-thumbs-up"></i> Mapa</a>
										</li>
							      	</ul>
							    </div><!-- /navbar-collapse -->
						  	</div><!-- / .container-fluid -->
						</nav>
					</div>
				</div>
			</div>
		</header>

		<div id="wrapper">
			
			


			<div class="content-block" id="portfolio">
				<div class="container portfolio-sec">
					<header class="block-heading cleafix">
						<a href="#" class="btn btn-o btn-lg pull-right">Ver todas</a>
						<div class="title-page">
							<p class="main-header">Marcas </p>
						    <p class="sub-header">Heche un vistazo a las marcas con las que trabajamos</p>
					    </div>
					</header>
					<section class="block-body">
						<div class="row">
							<div class="col-sm-4">
								<a href="/marcas/baggio" class="recent-work" style="background-image:url(imagenes/baggio.jpg)">
									<span class="btn btn-o-white">Baggio</span>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/min_icons_thumb1-320x240.jpg)">
									<span class="btn btn-o-white">Marca 2</span>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/flat_icons_thumb.jpg)">
									<span class="btn btn-o-white">Marca 3</span>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/wood-320x240.jpg)">
									<span class="btn btn-o-white">Marca 4</span>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/bike-320x240.jpg)">
									<span class="btn btn-o-white">Marca 5</span>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/six_1-320x240.jpg)">
									<span class="btn btn-o-white">Marca 6</span>
								</a>
							</div>
						</div>
					</section>
				</div>
			</div><!-- #portfolio -->

	




		

			

		
			

		</div><!--/#wrapper-->
	@include('front.partes.scripts')
	</body>
</html>
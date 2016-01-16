<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<title>La Autentica Distribuidora SA - Resistencia-Chaco</title>
		@include('front.partes.estilos')
	</head>
	
	<body>
	@include('front.partes.scripts')

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
			
			<div id="header" class="content-block">
				<!-- <section class="top clearfix">
					<div class="pull-left">
						<h1><a class="logo" href="index.html">Nevada <span class="logo-head">Plus</span></a></h1>
					</div>
					<! <div class="pull-right">
						<a class="toggleDrawer" href="#"><i class="fa fa-bars fa-2x"></i></a>
					</div> 
				</section>-->
				<section class="center">
					<div class="slogan">
						La Autentica Distribuidora S.R.L.
					</div>
					<div class="secondary-slogan">
						Un equipo responsable con la calidad que tu negocio necesita.
					</div>
				</section>
			</div><!-- header -->

			<!-- About us -->
	        <div id="about" class="about-us">
	            <div class="container about-sec">
	                <header class="block-heading cleafix">
							<div class="title-page">
								<p class="main-header">Quienes somos</p>
							    <p class="sub-header">Enviamos calidad a todo el Nea</p>
							</div>
						</header>
	                <div class="divide50"></div>
	                <div class="row">
	                    <div class="col-md-4 text-center">
	                        <div class="aboutus-item">
	                            <i class="aboutus-icon fa fa-plane"></i>
	                            <h4 class="aboutus-title">Transporte</h4>
	                            <p class="aboutus-desc">Entregas en tiempo y forma en Chaco y todo el Nordeste Argentino, garantizando la confiabilidad del transporte.</p>
	                        </div>
	                    </div>
	                    <div class="col-md-4 text-center">
	                        <div class="aboutus-item">
	                            <i class="aboutus-icon fa fa-usd"></i>
	                            <h4 class="aboutus-title">Not Expensive</h4>
	                            <p class="aboutus-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni voluptatum et, alias vero, reprehenderit doloremque neque dignissimos voluptas.</p>
	                        </div>
	                    </div>
	                    <div class="col-md-4 text-center">
	                        <div class="aboutus-item">
	                            <i class="aboutus-icon fa fa-cutlery"></i>
	                            <h4 class="aboutus-title">Delicious Food</h4>
	                            <p class="aboutus-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni voluptatum et, alias vero, reprehenderit doloremque neque dignissimos voluptas.</p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- /About us -->

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

			<div class="content-block parallax" id="services">
				<div class="container services-sec">
					<div class="title-page">
						<p class="main-header">Our Services </p>
					    <p class="sub-header">A little about what we do</p>
					</div>
					<section class="block-body">
						<div class="row">
							<div class="col-md-4">
								<div class="service">
									<div class="bar">
										<i class="fa fa-send-o"></i>
									</div>
									<h2 class="service-head">Illustration</h2>
									<p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="service">
									<div class="bar">
										<i class="fa fa-heart-o"></i>
									</div>	
									<h2 class="service-head">3D Modeling</h2>
									<p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="service">
									<div class="bar">
										<i class="fa fa-camera-retro"></i>
									</div>	
									<h2 class="service-head">Photography</h2>
									<p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div><!-- #services -->


			<div class="content-block" id="blog">
				<div class="container blog-sec">
					<header class="block-heading cleafix">
						<a href="#" class="btn btn-o btn-lg pull-right">View All</a>
						<div class="title-page">
							<p class="main-header">From the Blog</p>
						    <p class="sub-header">Keep up with the latest happenings.</p>
						</div>
					</header>
					<section class="block-body">
						<div class="row">
							<div class="col-sm-4 blog-post">
								<img src="assets/images/bike_water1-1000x600.jpg">
								<a href="#"><h2>Design Your Mind</h2></a>
								<div class="date">6 Enero 2016</div>
								<p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>
								<a href="">Read More</a>
							</div>
							<div class="col-sm-4 blog-post">
								<img src="assets/images/mac_glasses1-1000x600.jpg">
								<a href="#"><h2>Winter Is Comming</h2></a>
								<div class="date">3 Nov, 2014</div>
								<p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>
								<a href="">Read More</a>
							</div>
							<div class="col-sm-4 blog-post">
								<img src="assets/images/road-1000x600.jpg">
								<a href="#"><h2>The Illustration</h2></a>
								<div class="date">3 Nov, 2014</div>
								<p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet, hendrerit in lorem.</p>
								<a href="">Read More</a>
							</div>
						</div>
					</section>
				</div>
			</div><!-- #blog -->


			<div class="content-block parallax" id="parallax">
				<div class="container">
					<h3 class="call-action pull-left">In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis.</h3>
					<a href="#" class="pull-right btn btn-o-white btn-lg">Get a free quote</a>
				</div>
			</div><!-- #parallax -->

			<div class="content-block" id="testimonials">
				<div class="container testimonial-sec">

					<header class="block-heading cleafix">
						<div class="title-page  pull-left">
							<p class="main-header">Testimonios de clientes</p>
						    <p class="sub-header">What our client says</p>
						</div>
					</header>
					
					<section class="block-body">
						<div class="row">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							  	<!-- Indicators -->
							  	<ol class="carousel-indicators">
								    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
								    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							  	</ol><!-- /.carousel-indicators -->


							  	<!-- Wrapper for slides -->
							  	<div class="carousel-inner" role="listbox">
								    <div class="item active">
								      	<div class="img-center">	
								      		<img class="img-circle circular-img" src="assets/images/01_200x200.png">
								      	</div>	
								      	<h3>
								      		Testimonio 1.
								      	</h3>
								      
								    </div><!-- /.item -->
								    <div class="item">
								    	<div class="img-center">	
								      		<img class="img-circle circular-img" src="assets/images/02_200x200.png">
								      	</div>
								       	<h3>
								       		Testimonio 2
								       	</h3>
								      
								    </div><!-- /.item -->
								    <div class="item">
								    	<div class="img-center">	
								      		<img class="img-circle circular-img" src="assets/images/03_200x200.png">
								        </div>
								       	<h3>
								       		Testimonio 3
								       	</h3>
								    </div><!-- /.item -->
							  	</div><!-- /.carousel-inner -->
							</div><!-- /.carousel slide -->
						</div>	
					</section><!-- /.block-body -->
				</div>
			</div><!-- /#testimonials -->

			<div class="content-block" id="footer">
				<div class="container">
					<div class="row">
							<div class="col-sm-4 blog-post">
								
								<h2 class="footer-block">Tiene preguntas, consultas?</h2>
								<p>Ante cualquier inquietud no dude en enviarnos un mensaje, sera respondido a la brevedad.</p>

								<p>texto 2 </p>

								<p>texto 3 </p>
							</div>
							<div class="col-sm-4 blog-post">
								<h2 class="footer-block">Dejenos su mensaje</h2>
								<form action="contact-form.php" id="contactForm" method="post" name="contactform" class="" role="form">
									<div class="form-group">
								    	<input type="text" class="form-control form-control-white" id="name" name="name" placeholder="Nombre" required>
								  	</div>
								    <div class="form-group">
								    	<input type="email" class="form-control form-control-white" id="email" name="email" placeholder="Tu email" required>
								    </div>
								    <div class="form-group">
								    	<textarea class="form-control form-control-white" id="message" name="massage" placeholder="Deje aqui su mensaje.." required></textarea>
								    </div>
								    <div id="contactFormResponse"></div>
								    <div class="form-group">
								    	<input id="cfsubmit" type="submit" class="text-center btn btn-o-white" value="Enviar">
								  	</div>
								</form>
							</div>
							<div class="col-sm-4 blog-post">
								
								<h2 class="footer-block">Detalles de Contacto</h2>
								<ul>
									<li class="address-sub"><i class="fa fa-map-marker"></i>Direccion de Oficinas</li>
										<p>
											Calle Falsa 123 Ciudad de Resistencia-Chaco. Argentina.
										</p>
									<li class="address-sub"><i class="fa fa-phone"></i>Teléfonos de Contacto</li>
										<p>
											Local: +54 9 362-4...<br>
											Celular: +54 9 362 451-1324 (Marcia)
										</p>
									<li class="address-sub"><i class="fa fa-envelope-o"></i>Correo Electronico</li>
										<p>
											<a href="mailto:info@themewagon.com">info@laautentica.com.ar</a><br>
											<a href="http://www.laautentica.com.ar/">www.LaAutentica.com.ar</a>
										</p>


								</ul>
								<div class="social">
									<a href="https://www.facebook.com/La-Autentica-Distribuidora-579709592177010"><i class="fa fa-facebook"></i></a>

									<!--
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-pinterest-p"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-skype"></i></a>
									-->
								</div>
								
							</div>
						</div>
				</div>
			</div>
			<div class="content-block footer-bottom" id="footer">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">&copy; Copyright Caszeruk Association 2016</div>
						<!--	<div class="col-xs-6 text-right">Tema por:<a href="http://www.themewagon.com/" target="_blink">ThemeWagon</a></div>	-->
					</div>
				</div>
			</div><!-- #footer -->

		</div><!--/#wrapper-->

	</body>
</html>
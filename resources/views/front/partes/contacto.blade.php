<div class="content-block" id="footer">
	<div class="container">
		<div class="row">
			<br>
			<br>
			<br>
			<div class="col-sm-4 blog-post">				
				<h2 class="footer-block">Tiene preguntas, consultas?</h2>
				<p>Dejenos su email y le adjuntaremos un catalogo de productos a la brevedad.</p>
				<p> </p>
				<p> </p>
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
							{{ $empresa->calle}} {{ $empresa->altura}} - {{ $empresa->localidad->nombre }} ({{ $empresa->localidad->provincia->nombre }}, {{ $empresa->localidad->provincia->pais->nombre }})
						</p>
					<li class="address-sub"><i class="fa fa-phone"></i>Teléfonos de Contacto</li>
						<p>
							Local: {{ $empresa->telefono }}<br>
							Celular: {{ $empresa->celular }}
						</p>
					<li class="address-sub"><i class="fa fa-envelope-o"></i>Correo Electronico</li>
						<p>
							<a href="mailto:{{ $empresa->email }}" target="_top">{{ $empresa->email }}</a>
						</p>
				</ul>
				<div class="social">
					<a href="https://www.facebook.com/La-Autentica-Distribuidora-579709592177010"><i class="fa fa-facebook"></i></a>
				</div>				
			</div>
		</div>
	</div>
<!--Mapa de Google-->
<iframe src="https://mapsengine.google.com/map/embed?mid=zKZOQhecH1Us.k3FbMRNUYsp0" width="1349" height="600"></iframe>
</div>
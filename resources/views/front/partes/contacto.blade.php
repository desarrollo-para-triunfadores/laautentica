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
							<div class="form-group">
								<div class="panel-heading"><h3 class="panel-title"></h3></div>
								<div class="panel-body">
									{!! Form::open(['route' => 'mail.store', 'method' => 'post']) !!}
									<div class="form-group">
										{!! Form::text('name', null, array('class' => 'from-control', 'placeholder' => '   Su nombre..')) !!}
									</div>
									<div class="form-group">
										{!! Form::email('email', null ,array('class' => 'form-control', 'placeholder' => 'Su email..')) !!}
									</div>
									<div class="form-group">
										{!! Form::tel('telefono', null, array('class' => 'form-control', 'placeholder' => 'Su telefono (no obligatorio)')) !!}
									</div>
									<div class="form-group">
										{!! Form::textarea('mensaje', null, ['class' => 'form-control', 'placeholder' => 'Mensaje' ]) !!}
									</div>

									<div class="form-group">
										{!! Form::submit('Enviar', ['class' => 'btn btn-o-white' ] ) !!}
									</div>
									{!! Form::close() !!}
								</div>
							</div>
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
			</div>
		</div>
	</div>

</div>
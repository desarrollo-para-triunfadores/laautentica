<div class="content-block" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 blog-post">				
                <h2 class="footer-block">¿Tiene consultas?</h2>
                <p>Déjenos su email o teléfono de contacto y le adjuntaremos un catálogo de productos a la brevedad.</p><p> </p><p> </p>
                <p> </p>
                <p> </p><p>
                </p><p>
                <h3 class="modal-content thumbnail" style="background-color: #f5e79e"><p><b>HORARIO DE ATENCIÓN:</b></p>
                    <p>Lunes a Viernes de 8 a 12hs y 17 a 19hs</p>
                    <p> </p></h3>
            </div>
            <div class="col-sm-4 blog-post">
                <h2 class="footer-block">Déjenos su mensaje</h2>
                <div class="form-group">
                    <!--<div class="panel-heading"><h3 class="panel-title"></h3></div>-->
                    <div class="panel-body">
                        {!! Form::open(['route' => 'mail.store', 'method' => 'post']) !!}
                        <div class="form-group">
                            {!! Form::text('name', null ,array('class' => 'form-control', 'placeholder' => 'Su nombre..')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::email('email', null ,array('class' => 'form-control', 'placeholder' => 'Su email..')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::tel('telefono', null, array('class' => 'form-control', 'placeholder' => 'Su teléfono (no obligatorio)')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('mensaje', null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Mensaje' ]) !!}
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
                    <li class="address-sub"><i class="fa fa-map-marker"></i>Dirección de la Oficina</li>
                    <p>
                        {{ $empresa->calle}} {{ $empresa->altura}} - {{ $empresa->localidad->nombre }} ({{ $empresa->localidad->provincia->nombre }}, {{ $empresa->localidad->provincia->pais->nombre }})
                    </p>
                    <li class="address-sub"><i class="fa fa-phone"></i>Teléfonos de Contacto</li>
                    <p>
                        Local: {{ $empresa->telefono }}<br>
                        Celular: {{ $empresa->celular }}
                    </p>
                    <li class="address-sub"><i class="fa fa-envelope-o"></i>Correo Electrónico</li>
                    <p>
                        <a href="mailto:{{ $empresa->email }}" target="_top">{{ $empresa->email }}</a>
                    </p>
                </ul>
            </div>
        </div>
    </div>
</div>
<h3>Información General</h3>
                      <br>
                        <div class="form-group"><label class="col-sm-3 control-label">Razón Social</label>
                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="input-icon right">
                                            <i class="fa fa-pencil"></i>
                                            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'campo requerido', 'required']) !!}                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                 
                        <div class="form-group"><label class="col-sm-3 control-label">Rubro</label>
                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-12">                            
                                            {!! Form::select('rubro_id', $rubros, null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'required']) !!}                                                                                                               
                                    </div>
                                </div>
                            </div>
                        </div>                         
                        <div class="form-group"><label class="col-sm-3 control-label">Logo</label>
                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="input-icon right">
                                                <i class="fa fa-upload"></i>
                                            {!! Form::file('imagen', ['class' => 'form-control']) !!}                                                                   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                        <br>
                        <hr/>  
                        <br>                                         
                        <h3>Dirección</h3>
                        <br>
                        <div class="form-group"><label class="col-sm-3 control-label">Localidad</label>
                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-12">
                                    {!! Form::select('localidad_id', $localidades, null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'required']) !!}                                                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-3 control-label">Avenida/Calle</label>
                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="input-icon right">
                                            <i class="fa fa-map-marker"></i>
                                             {!! Form::text('calle', null, ['class' => 'form-control', 'placeholder' => 'campo requerido', 'required']) !!} 
                                        </div>                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-3 control-label">Altura</label>
                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="input-icon right">
                                            <i class="fa fa-map-marker"></i>
                                            {!! Form::text('altura', null, ['class' => 'form-control', 'placeholder' => 'campo requerido', 'required']) !!}                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr/>
                        <br> 
                        <h3>Detalles de Contacto</h3>
                        <br>
                        <div class="form-group"><label class="col-sm-3 control-label">Teléfono</label>
                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="input-icon right">
                                            <i class="fa fa-phone"></i>
                                            {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'campo opcional']) !!}                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-3 control-label">Celular</label>
                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="input-icon right">
                                            <i class="fa fa-mobile"></i>
                                            {!! Form::text('celular', null, ['class' => 'form-control', 'placeholder' => 'campo opcional']) !!}                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-3 control-label">Web</label>
                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="input-icon right">
                                            <i class="fa fa-pencil"></i>
                                            {!! Form::url('web', null, ['class' => 'form-control', 'placeholder' => 'campo opcional']) !!}                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <div class="form-group"><label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="input-icon right">
                                            <i class="fa fa-envelope"></i>
                                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'campo opcional']) !!}                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                        <br>
                        <hr/>
                        <br>                 
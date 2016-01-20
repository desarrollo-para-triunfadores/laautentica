<br>
<br>
<div id="busqueda" class="panel panel-default hide animated bounceInDown">
    <div class="panel-body">
        <div class="row col-lg-12"> 
            <div class="col-lg-3">                                         
                <div class="form-group">
                    <div class="form-group">
                    <label>Nombre</label>
                    {!! Form::select('bus-nombre', array('-1' => 'Cualquier Producto')+$productoslista, -1, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'onchange' => 'enviar();', 'id' => 'bus-nombre']) !!}                                                                                                                                                                            
                </div>                                                                                                                                                        
                </div>
            </div>
            <div class="col-lg-3">                                         
                <div class="form-group">
                    <label>Marca</label>
                    {!! Form::select('bus-marca', array('-1' => 'Cualquier Marca')+$marcas, -1, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'onchange' => 'enviar();', 'id' => 'bus-marca']) !!}                                                                                                                                                                            
                </div>
            </div> 
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Tipo de Producto</label>
                    {!! Form::select('bus-tipo', array('-1' => 'Cualquier Tipo')+$tipos, -1, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'onchange' => 'enviar();', 'id' => 'bus-tipo']) !!}                                                                                                                                                                                                                     
                </div>   
            </div> 
            <div class="col-lg-3"> 
                <div class="form-group">
                    <label>Origen</label>
                    {!! Form::select('bus-origen', array('-1' => 'Cualquier Origen')+$localidades, -1, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'onchange' => 'enviar();', 'id' => 'bus-origen']) !!}                                                                                                                                                                                                                                                                      
                </div> 
            </div> 
        </div>  
    </div>
</div>
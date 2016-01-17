<div id="busqueda" class="panel panel-default hide">
    <div class="panel-body">
        <div class="row col-lg-12"> 
            <div class="col-lg-6">                                         
                <div class="form-group">
                    <label>Nombre</label>
                    <div class="input-icon right text-white">
                        <a href="#"><i class="fa fa-search"></i></a>   
                        <input id="bus-nombre" type="text" class="form-control" placeholder="Escriba aquí el nombre de una marca...">                                                                                                                                      
                    </div>                                                                                                                                                         
                </div>
            </div>
            <div class="col-lg-3">                                         
                <div class="form-group">
                    <label>Empresa</label>
                    {!! Form::select('bus-empresa', array('-1' => 'Cualquier Empresa')+$empresas, -1, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'onchange' => 'lanzar()', 'id' => 'bus-empresa']) !!}                                                                                                                                                                            
                </div>
            </div>  
            <div class="col-lg-3"> 
                <div class="form-group">
                    <label >Estado</label>
                    {!! Form::select('bus-estado', array('-1' => 'Cualquier Estado', '1' => 'Activo', '0' => 'Inactivo'), null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true', 'onchange' => 'lanzar()', 'id' => 'bus-estado']) !!}                                                                                                                                                                                   
                </div> 
            </div> 
        </div>  
    </div>
</div>
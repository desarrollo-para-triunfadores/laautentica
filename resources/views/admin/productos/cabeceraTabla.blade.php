<div id="busqueda" class="panel panel-default hide">
    <div class="panel-body">
        <div class="row col-lg-12"> 
            <div class="col-lg-4">                                         
                <div class="form-group">
                    <label>Nombre</label>
                    <div class="input-icon right text-white">
                <a href="#"><i class="fa fa-search"></i></a>   
                <input id="bus-nombre" type="text" class="form-control" placeholder="Escriba aquí el nombre de un producto...">                                                                                                                                      
            </div>                                                                                                                                                         
                </div>
            </div>
            <div class="col-lg-2">                                         
                <div class="form-group">
                    <label>Marca</label>
                    {!! Form::select('marca_id', $marcas, null, ['class' => 'form-control selectBoot', 'data-live-search' => 'true']) !!}                                                                                                                                                                            
                </div>
            </div> 
            <div class="col-lg-2">
                <div class="form-group">
                    <label>Tipo de Producto</label>
                    <select onchange="lanzar()" id="bus-tipo" class="form-control selectBoot" data-live-search="true">                                           
                        <option value="-1">
                            Cualquier Tipo
                        </option>
                        @foreach($tipos as $tipo)                        
                            <option value="{{ $tipo }}">
                                {{ $tipo }}
                            </option>
                        @endforeach                                            
                    </select>                        
                </div>   
            </div> 
            <div class="col-lg-2"> 
                <div class="form-group">
                    <label>Origen</label>
                    <select onchange="lanzar()" id="bus-origen" class="form-control selectBoot" data-live-search="true">                                                   
                        <option value="-1">
                            Cualquier Origen
                        </option>
                        @foreach($localidades as $origen)                        
                            <option value="{{ $origen }}">
                                {{ $origen }}
                            </option>
                        @endforeach  
                    </select>                                                                                           
                </div> 
            </div> 
            <div class="col-lg-2"> 
                <div class="form-group">
                    <label >Estado</label>
                    <select onchange="lanzar()" id="bus-estado" class="form-control selectBoot" data-live-search="true">                                                                                                  
                        <option value="-1">
                            Cualquier Estado
                        </option>
                        <option value="1">
                            Activo
                        </option>
                        <option value="0">
                            Inactivo
                        </option>      
                    </select>         
                </div> 
            </div> 
        </div>  
    </div>
</div>
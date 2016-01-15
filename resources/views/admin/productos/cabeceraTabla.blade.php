<div class="col-lg-8">
    <br>
    <strong> Mostrando {!! $productos->count() !!} registros de un total de {!! $productos->total() !!}.</strong> 
</div>
<div class="col-lg-4 pull-right">                                        
    <div class="input-icon right text-white">
        <a href="#"><i class="fa fa-search"></i></a>   
        <input id="input-filtro" type="text" name="name" class="form-control" placeholder="Escriba aquí el nombre de un producto...">                                                                                                                                      
    </div>                                  
</div>                            
<br>
<br>
<hr> 
<div class="row col-lg-12"> 
    <div class="col-lg-3">                                         
        <div class="form-group">
            <label>Marca</label>
            <select onchange="filtrar()" id="bus-Marca" class="form-control selectBoot" data-live-search="true">                                           
                @foreach($marcas as $marca)                        
                    <option value="{{ $marca }}">
                        {{ $marca }}
                    </option>
                @endforeach                                            
            </select>                                                                                                                                                         
        </div>
    </div> 
    <div class="col-lg-3">
        <div class="form-group">
            <label>Tipo de Producto</label>
            <select onchange="filtrar()" id="bus-tipo" class="form-control selectBoot" data-live-search="true">                                           
                @foreach($tipos as $tipo)                        
                    <option value="{{ $tipo }}">
                        {{ $tipo }}
                    </option>
                @endforeach                                            
            </select>                        
        </div>   
    </div> 
    <div class="col-lg-3"> 
        <div class="form-group">
            <label>Origen</label>
            <select onchange="filtrar()" id="bus-origen" class="form-control selectBoot" data-live-search="true">                                                   
                @foreach($localidades as $origen)                        
                    <option value="{{ $origen }}">
                        {{ $origen }}
                    </option>
                @endforeach  
            </select>                                                                                           
        </div> 
    </div> 
    <div class="col-lg-3"> 
        <div class="form-group">
            <label >Estado</label>
            <select onchange="filtrar()" id="bus-Activo" class="form-control selectBoot" data-live-search="true">                                                                                                  
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
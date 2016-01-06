 <div id="tab-general">
    <div class="row mbl">
        <div class="col-lg-12">                                
            <div class="col-md-12">
                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                </div>
            </div>                                
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">Productos Registrados</div>
                        <div class="panel-body">
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
                            @include('admin.partes.msjError')
                            @include('flash::message')                               
                            <br>                              
                            <div class="row"> 
                                 @foreach($productos as $producto)                       
                                    <div class="col-md-3">
                                        @if ($producto->logo_producto->nombre === "sin imagen")
                                            <div class="thumbnail"><img class="img-rounded"  data-src="holder.js/300x200/text:Sin Logo"/>
                                                <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.productos.show', $producto->id) }}"> <h3>{{ $producto->nombre }}</h3></a>                                                
                                                    @if ($producto->estado)
                                                        <p> <h4>Estado: Activo</h4> </p> 
                                                    @else
                                                        <p> <h4>Estado: Inactivo</h4> </p>                                                  
                                                    @endif 
                                                    <p>Origen: {{ $producto->localidad->provincia->pais->nombre }}</p>                                                    
                                                </div>
                                            </div>
                                        @else
                                            <div class="thumbnail"><img class="img-rounded" style="width:300px;height:200px" src="{{ asset('imagenes/productos/' . $producto->logo_producto->nombre) }}"/>
                                                <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.productos.show', $producto->id) }}"> <h3>{{ $producto->nombre }}</h3></a>                                                                                                 
                                                     @if ($producto->estado)
                                                        <p> <h4>Estado: Activo</h4> </p> 
                                                    @else
                                                        <p> <h4>Estado: Inactivo</h4> </p>                                                  
                                                    @endif 
                                                    <p>Origen: {{ $producto->localidad->provincia->pais->nombre }}</p>                                                                                                                                                                                                           
                                                </div>
                                            </div>                                                 
                                        @endif                                            
                                    </div>   
                                @endforeach                               
                            </div>                               
                            {!! $productos->render() !!}            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
<div id="tab-logos" class="tablaResultados col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-yellow">
                <div class="panel-heading">Productos Registrados</div>
                <div class="panel-body">
                    <div class="col-lg-8">
                        <br>
                        <strong> Mostrando {!! $productos->count() !!} registros del total existente.</strong>  
                    </div>
                    <br>
                    <br>
                    <hr> 
                    @include('admin.partes.msjError')
                    @include('flash::message')         
                    <div class="row"> 
                        @foreach($productos as $producto)                       
                        <div class="col-md-3">
                            @if ($producto->logo_producto->nombre === "sin imagen")
                                 <div class="thumbnail"><img class="img-rounded" style="width:300px;height:200px" src="{{ asset('imagenes/productos/sin-logo.jpg') }}"/>
                                    <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.productos.show', $producto->id) }}"> <h3>{{ $producto->nombre }}</h3></a>                                                
                                        <p> <h4>Marca: {{ $producto->marca->nombre }}</h4> </p> 
                                        @if ($producto->estado)
                                            <p> Estado: Activo - Origen: {{ $producto->localidad->provincia->pais->nombre }}</p> 
                                        @else
                                            <p> Estado: Inactivo - Origen: {{ $producto->localidad->provincia->pais->nombre }}</p>                                                  
                                        @endif 
                                        <p></p>                                                    
                                    </div>
                                </div>
                            @else
                                <div class="thumbnail"><img class="img-rounded" style="width:300px;height:200px" src="{{ asset('imagenes/productos/' . $producto->logo_producto->nombre) }}"/>
                                    <div class="caption"><a data-toggle="tooltip" data-placement="left" title="Visualizar registro. Al visualizar este registro podrá acceder acciones como edición y eliminación del mismo" href="{{ route('admin.productos.show', $producto->id) }}"> <h3>{{ $producto->nombre }}</h3></a>                                                                                                 
                                        <p> <h4>Marca: {{ $producto->marca->nombre }}</h4> </p> 
                                        @if ($producto->estado)
                                            <p> Estado: Activo - Origen: {{ $producto->localidad->provincia->pais->nombre }}</p> 
                                        @else
                                            <p> Estado: Inactivo - Origen: {{ $producto->localidad->provincia->pais->nombre }}</p>                                                  
                                        @endif 
                                        <p></p>                                                                                                                                                                                                           
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

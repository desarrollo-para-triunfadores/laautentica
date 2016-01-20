<div class="content-block parallax" id="services">
				
				
					<section class="block-body">
						<div class="row">
												<div class="row">
                                        <div class="col-md-12">
                                            <div class="row mtl">
                                                <div class="col-md-4">
                                                    @if ($marca->logo_marca->nombre === "sin imagen")                                           
                                                        <div class="form-group">
                                                            <div class="text-center mbl"><img src="{{ asset('imagenes/marcas/sin-logo.jpg') }}" alt="" style="width:550px;height:350px" class="img-thumbnail"/></div>
                                                        </div>  
                                                    @else
                                                        <div class="form-group">
                                                            <div class="text-center mbl"><img src="{{ asset('imagenes/marcas/' . $marca->logo_marca->nombre) }}" alt="" style="width:350px;height:350px" class="img-thumbnail"/></div>
                                                        </div>                                   
                                                    @endif                                                 
                                                </div>
                                                <div class="col-md-7">      
                                                	<div class="title-page">
						<p class="main-header">{{ $marca->nombre }} </p>
					    <p class="sub-header">la marca que usted escogió</p>
					</div>           

					<br><br><br><br>                   
                                                    <table class="table table-striped table-hover">
                                                        <tbody> 

                                                            <tr>
                                                                <td><h4 class="box-heading">Nombre:</h4></td>
                                                                <td><h4>{{ $marca->nombre }}</h4></td>
                                                            </tr> 
                                                            <tr>
                                                                <td><h4 class="box-heading">Empresa Perteneciente:</h4></td>
                                                                <td><h4>{{ $marca->empresa->nombre }}</h4></td>
                                                            </tr>  
                                                            <tr>
                                                                <td><h4 class="box-heading">Cantidad de productos que disponemos de ella:</h4></td>
                                                                <td><h4>{{ $productos->count() }} productos</h4></td>
                                                            </tr>                                                                                         
                                                        </tbody>
                                                    </table>                            
                                                </div>
                                            </div>  
                                        </div>                          
                                    </div>
						</div>
					</section>
				
			</div><!-- #services -->
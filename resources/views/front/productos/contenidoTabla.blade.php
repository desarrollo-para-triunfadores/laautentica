<section class="block-body tablaResultados">
	<div class="row">
		@if (count($productos) === 0)
	        @include('front.partes.sinResultados')
	    @else
    		@foreach($productos as $producto)
		        @if ($producto->logo_producto->nombre === "sin imagen")
		            <div class="col-sm-4">
						<a class="recent-work " onclick="cargarModal({{ $producto->id }})" style="background-image:url({{ asset('imagenes/productos/sin-logo.jpg') }})">
							<span class="btn btn-o-white">{{ $producto->nombre }}</span>
						</a>
					</div>							
		    	@else
		            <div class="col-sm-4">
						<a class="recent-work" onclick="cargarModal({{ $producto->id }})" style="background-image:url({{ asset('imagenes/productos/' . $producto->logo_producto->nombre) }})">
							<span class="btn btn-o-white">{{ $producto->nombre }}</span>
						</a>
					</div>
		    	@endif   
			@endforeach  				
	    @endif  	  
	</div>
</section>
<section class="block-body tablaResultados">
	<div class="row">
		@if (count($marcas) === 0)
	        @include('front.partes.sinResultados')
	    @else
			@foreach($marcas as $marca)
		        @if ($marca->logo_marca->nombre === "sin imagen")
		            <div class="col-sm-4">
						<a class="recent-work " href="{{ route('marcas.show', $marca->id) }}" style="background-image:url({{ asset('imagenes/marcas/sin-logo.jpg') }})">
							<span class="btn btn-o-white">Ver todos los productos {{ $marca->nombre }}</span>
						</a>
					</div>							
		    	@else
		            <div class="col-sm-4">
						<a class="recent-work" href="{{ route('marcas.show', $marca->id) }}" style="background-image:url({{ asset('imagenes/marcas/' . $marca->logo_marca->nombre) }})">
							<span class="btn btn-o-white">Ver todos los productos {{ $marca->nombre }}</span>
						</a>
					</div>
		    	@endif   
			@endforeach  				
	    @endif  
	</div>
</section>
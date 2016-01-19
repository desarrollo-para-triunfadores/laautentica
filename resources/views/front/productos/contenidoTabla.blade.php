<div class="content-block" id="portfolio">
	<div class="container portfolio-sec">
		<header class="block-heading cleafix">
			<div class="title-page">
				<p class="main-header">Marcas </p>
			    <p class="sub-header">Heche un vistazo a las marcas con las que trabajamos</p>
		    </div>
		</header>
		<section class="block-body">
			<div class="row">
				@foreach($productos as $producto)
					@if ($producto->logo_producto->nombre === "sin imagen")
                        <div class="col-sm-4">
							<a href="/marcas/baggio" class="recent-work" style="background-image:url({{ asset('imagenes/productos/sin-logo.jpg') }})">
								<span class="btn btn-o-white">{{ $producto->nombre }}</span>
							</a>
						</div>							
                	@else
                        <div class="col-sm-4">
							<a href="/marcas/baggio" class="recent-work" style="background-image:url({{ asset('imagenes/productos/' . $producto->logo_producto->nombre) }})">
								<span class="btn btn-o-white">{{ $producto->nombre }}</span>
							</a>
						</div>
                	@endif     
				@endforeach    
			</div>
		</section>
	</div>
</div>
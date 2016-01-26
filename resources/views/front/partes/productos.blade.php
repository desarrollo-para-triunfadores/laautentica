<div class="content-block" id="productos">
    <div class="container portfolio-sec">
        <header class="block-heading cleafix">
            <a href="{{ route('productos.index') }}" class="btn btn-o btn-lg pull-right">Ver todas</a>
            <div class="title-page">
                <p class="main-header">Productos </p>
                <p class="sub-header">Estos son algunos de nuestros productos.</p>
            </div>
        </header>

    <!--Esto hay que adecuar-->
        section class="block-body tablaResultados">
        <div class="row">
            @if (count($productos) === 0)
                @include('front.partes.sinResultados')
            @else
                @foreach($productos as $producto)
                    @if ($producto->logo_producto->nombre === "sin imagen")
                        <div class="col-sm-4">
                            <a class="recent-work " style="background-image:url({{ asset('imagenes/productos/sin-logo.jpg') }})">
                                <span class="btn btn-o-white">{{ $producto->nombre }}</span>
                            </a>
                        </div>
                    @else
                        <div class="col-sm-4">
                            <a class="recent-work"  style="background-image:url({{ asset('imagenes/productos/' . $producto->logo_producto->nombre) }})">
                                <span class="btn btn-o-white">{{ $producto->nombre }}</span>
                            </a>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
        </section>



        <section class="block-body">
            <div class="row">
                <div class="col-sm-4">
                    <a href="/marcas/baggio" class="recent-work" style="background-image:url(imagenes/productos/baggioPronto.jpg)">
                        <span class="btn btn-o-white">Baggio Pronto</span>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="recent-work" style="background-image:url(imagenes/productos/mocoretaJugoNaranja.jpg)">
                        <span class="btn btn-o-white">Yerba Mate Rosamonte</span>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="recent-work" style="background-image:url(imagenes/productos/sandy.jpg)">
                        <span class="btn btn-o-white">Chocolatada Sandy</span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="#" class="recent-work" style="background-image:url(imagenes/productos/flynnPaff.jpg)">
                        <span class="btn btn-o-white">Flynn Paff</span>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="recent-work" style="background-image:url(imagenes/productos/uvitatinto.jpg)">
                        <span class="btn btn-o-white">Vinos Uvita</span>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="recent-work" style="background-image:url(imagenes/productos/siDiet.jpg)">
                        <span class="btn btn-o-white">Si Diet</span>
                    </a>
                </div>
            </div>
        </section>
    </div>
</div><!-- #portfolio -->
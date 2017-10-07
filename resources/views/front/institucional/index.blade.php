<!DOCTYPE html>
<html class="noIE" lang="es-AR">
    <head>
        <title>La Autentica Distribuidora SA - Resistencia Chaco</title>
        @include('front.partes.estilos')
    </head>
    <body>
        @include('front.partes.cabeceraPartes')
        <div class="content-block parallax" id="parallax"></div><!-- #parallax -->
        <div id="about" class="about-us">
            <div class="container about-sec">
                <header class="block-heading cleafix">
                    <div class="title-page">
                        <p class="main-header">¿Quiénes somos?</p>
                        <p class="sub-header"> Nuestra Misión
                        </p>
                    </div>
                </header>
                <section class="block-body">
                    <p class="origenes">
                        <b>La Autentica Distribuidora SRL</b> es una empresa dedicada a prestar el mejor servicio de distribuci&oacuten. <b>Nuestra misión</b> es la
                        de ser su aliado estratégico creciendo día a día y garantizandole el mejor servicio y la mayor calidad. 
                    </p>
                </section>
                <div class="divide50"></div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="aboutus-item">
                            <i class="aboutus-icon fa fa-truck"></i>
                            <h4 class="aboutus-title">Transporte</h4>
                            <p class="aboutus-desc">Entregas en tiempo y forma en todo el nordeste Argentino, garantizando la confiabilidad del transporte.</p>
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="aboutus-item">
                            <i class="aboutus-icon fa fa-usd"></i>
                            <h4 class="aboutus-title">Precios</h4>
                            <p class="aboutus-desc">Por más que busque no encontrará un mejor precio que el que le ofrecemos, solicite nuestro catálogo de precios.</p>
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="aboutus-item">
                            <i class="aboutus-icon fa fa-thumbs-up"></i>
                            <h4 class="aboutus-title">Garantía de conformidad</h4>
                            <p class="aboutus-desc">Más de veinte años en el rubro avalan nuestro compromiso con nuestros clientes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-block" id="testimonials">
            <div class="container testimonial-sec">
                <header class="block-heading cleafix">
                    <div class="title-page  pull-left">
                        <p class="main-header">Nuestros orígenes</p>                        
                    </div>
                </header>
                <section class="block-body">
                    <p class="origenes">
                        <b>La Autentica Distribuidora SRL</b> es una empresa familiar nacida hace <strong>20 a&ntildeos</strong> en la <strong>Ciudad de Resistencia (Chaco)</strong>.
                        Dedicada a prestar el mejor servicio de distribuci&oacuten, la empresa se ha ido expandiendo, abasteciendo en ciudades aleda&ntildeas como Vilelas, Fontana, Puerto Tir&oacutel, Margarita Bel&eacuten, Colonia Benitez, entre otros, lo que posiciona a la empresa como una de las distribuidoras líderes del mercado chaque&ntildeo.

                        Avalados por grandes marcas que nos acompa&ntildean en este sitio preservando su <strong>calidad</strong> y el <strong>mejor precio</strong>, <strong>cuidando la confianza depositada</strong> en nosotros, nos destacamos en la eficiencia de la distribución de una amplia gama de productos con <strong>servicio "puerta a puerta" con vendedores experimentados, capacitados y con una moderna flota</strong> de vehiculos de transporte a disposici&oacuten.
                    </p>
                    <div class="row">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol> 
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img class="first-slide img-responsive center-block " style="width:100%" src="{{ asset('imagenes/institucional/fotos/8.jpg') }} " alt="First slide">
                                    </img>
                                </div>
                                <div class="item">
                                    <img class="second-slide img-responsive center-block  " style="width:100%" src="{{ asset('imagenes/institucional/fotos/7.jpg') }} " alt="Second slide">
                                  
                                </div>
                                <div class="item">
                                    <img class="third-slide img-responsive center-block " style="width:100%" src="{{ asset('imagenes/institucional/fotos/6.jpg') }} " alt="Third slide">
                                    
                                </div>
                            </div> 
                        </div> 
                        <p><a class="btn btn-lg btn-primary" href="/contacto" role="button">¡Ordene su catálogo!</a></p>
                    </div>
                    
                </section>
            </div>
        </div>
        @include('front.partes.pie')
        @include('front.partes.scripts')
    </body>
</html>




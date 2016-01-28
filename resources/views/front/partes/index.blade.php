<!DOCTYPE html>
<html class="noIE" lang="es-ES">
	<head>
		<title>La Autentica Distribuidora S.R.L. - Resistencia-Chaco</title>
		@include('front.partes.estilos')
		<meta name="google-site-verification" content="81cd8OfnX69-tjBuieHrYmVULtWNb27AmwaQcJUUCco" />
	</head>

<body>
@include('front.partes.analyticstracking')

<header class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-5 col-sm-4 header-logo">
                    <br>
                        <h1 class="logo">La Autentica <span class="logo-head"></span></h1>
                </div>
                <div class="col-md-8 col-md-offset-1 col-xs-7">
                    <nav class="navbar navbar-default">
                          <div class="container-fluid nav-bar">
                            <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only"> </span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                            </div>
                            <div class="collapse navbar-collapse navbar-def" id="bs-example-navbar-collapse-1">
                                  <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a href="#wrapper"><i class="fa fa-home"></i> Inicio</a>
                                    </li>
                                    <li>
                                        <a href="#about"><i class="fa fa-bookmark"></i> Acerca de nosotros</a>
                                    </li>
                                    <li>
                                        <a href="#parallax2"><i class="fa fa-registered"></i> Marcas</a>
                                    </li>
                                    <li>
                                        <a href="#productos"><i class="fa fa-shopping-cart"></i> Productos</a>
                                    </li>
                                    <li>
                                        <a href="#footer"><i class="fa fa-phone"></i> Contacto</a>
                                    </li>
                                    <li>
                                        <a href="" onclick="redirigir('{{ route('admin.auth.login') }}');"><i class="fa fa-sign-in"></i> Ingresar</a>
                                    </li>
                                  </ul>
                            </div>
                          </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <div id="wrapper">
        <div id="header" class="content-block">

            <section class="center">
                <div class="slogan">
                    La Autentica Distribuidora S.R.L.
                </div>
                <div class="secondary-slogan">
                    Un equipo responsable con la experiencia y calidad que tu negocio necesita.
                </div>
            </section>
        </div>
        <h2 class="modal-content thumbnail" style="background-color: #f5e79e"><p><b>Sitio web en construcci&oacuten</b></p>
            <p></p>
            <p> </p></h2>

        @include('front.partes.aboutUs')

        @include('front.partes.marcas')

        @include('front.partes.productos')

        @include('front.partes.mapa')
        @include('front.partes.contacto')
        @include('front.partes.pie')
    </div><!--/#wrapper-->
    @include('front.partes.scripts')
    @yield('script')
	<script>$('#flash-overlay-modal').modal();</script>
    <script>
        function myFunction() {
            alert("Este sitio web se encuentra en reparacion!");
        }
    </script>
</body>
</html>
<!DOCTYPE html>

<html>
<head>
	<title>@yield('title','Default') | La Auténtica</title>
	@include('admin.partes.estilos')  
</head>
<body>
	<a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
	@include('admin.partes.navTop') 	
	<div id="wrapper">
	@yield('sidebar')
        <div id="page-wrapper">                      
            <section>            	
				@yield('content')
			</section>
			@include('admin.partes.pie')
        </div>				
	</div>
	@include('admin.partes.scripts')
	@yield('script')
</body>
</html>
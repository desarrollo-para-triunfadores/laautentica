$(document).ready(function () {  
    constructorTabla();
    constructorSelect();
    $("#"+listSidebar).addClass("active");
    $('#form-crear').parsley();
    $('#form-actualizar').parsley();
    $('#form-pass').parsley();
});


//Paginación desde el cajón de búsqueda

$(document).on('click', '.input-icon a', function (e){
	e.preventDefault();
	alert("mandando");
	enviar();
});


//Paginación desde el cajón de búsqueda presionando enter

function lanzar()
{
	$('.input-icon a').click();
}

$(document).keypress(function(e) 
{
   if(e.which == 13) 
   {
      lanzar();
   }
});

function cambiarVista()
{
	if ($('#tab-lista').hasClass('hide')){
		
    }else{
     	
    }
}

function cambiarVista(vista)
{	
	if (vista == 2)
	{	
		$('#tab-lista').removeClass("hide"); 
		$('#tab-logos').addClass("hide");
	}
	else 
	{
     	$('#tab-logos').removeClass("hide");
		$('#tab-lista').addClass("hide");
	}
}

function ocultarBusqueda()
{
	if ($('#busqueda').hasClass('hide')){
		$('#vv').html(" Ocultar Filtros");
   		$('#busqueda').removeClass("hide");
    }else{
     	$('#busqueda').addClass("hide");
     	$('#vv').html(" Mostrar filtros");
    }
}


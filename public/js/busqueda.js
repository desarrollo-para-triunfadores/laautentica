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

function cambiarVista(vista)
{	
	if (vista == 2)
	{	
		$('#tab-lista').removeClass("hide"); 
		$('#tab-logos').addClass("hide");
		$('#bot-mostrar').addClass("hide");
		$('#busqueda').addClass("hide");
     	$('#bot-buscar').html(" Mostrar filtros");
	}
	else 
	{
     	$('#tab-logos').removeClass("hide");
     	$('#bot-mostrar').removeClass("hide");
		$('#tab-lista').addClass("hide");		
	}
}

function ocultarBusqueda()
{
	if ($('#busqueda').hasClass('hide')){
		$('#bot-buscar').html(" Ocultar Filtros");
   		$('#busqueda').removeClass("hide");
    }else{
     	$('#busqueda').addClass("hide");
     	$('#bot-buscar').html(" Mostrar filtros");
    }
}


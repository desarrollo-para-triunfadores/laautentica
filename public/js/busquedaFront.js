$(document).ready(function () {  
    constructorSelect();
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


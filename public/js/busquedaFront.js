jQuery(document).ready(function($){
    $(window).scroll(function() {
      console.log("asdf");
      if ($(window).scrollTop() > 100 ){
        $('.top-header').addClass('shows');
      } else {
          $('.top-header').removeClass('shows');
        };    
    });
});

$('.selectBoot').selectpicker({
    style: 'btn-danger'
});

jQuery('.scroll').on('click', function(e){    
    e.preventDefault()
    jQuery('html, body').animate({
      scrollTop : jQuery(this.hash).offset().top
    }, 1500);
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
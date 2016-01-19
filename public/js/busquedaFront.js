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

function ocultarBusqueda()
{
	if ($('#busqueda').hasClass('hide')){
		$('#bot-buscar').html(" Ocultar Filtros");
   		$('#busqueda').removeClass("hide");
    }else{
     	$('#busqueda').addClass("hide");
     	$('#bot-buscar').html(" Mostrar Filtros");
    }
}
$(document).ready(function () {
    $('#tab-general2').hide();     
    constructorTabla();
    constructorSelect();
    $("#"+listSidebar).addClass("active");
    $('#form-crear').parsley();
    $('#form-actualizar').parsley();
    $('#form-pass').parsley();
});


//Páginación en la tabla

$(document).on('click','.pagination a', function (e){
	e.preventDefault();
	var page = $(this).attr('href').split('page=')[1];
	$.ajax({
		url:route,
		data:{page: page},
		type: 'GET',
		dataType: 'json',
		success: function(data){
			$(".page-content").html(data);
		}
	});
});

//Paginación desde el cajón de búsqueda

$(document).on('click', '.input-icon a', function (e){
	e.preventDefault();
	var name = $('#input-filtro').val();
	var page = $(this).attr('href').split('page=')[1];
	alert(name);
	$.ajax({
		url:route,
		data:{page: page,
			name: name},
		type: 'GET',
		dataType: 'json',
		success: function(data){
			alert("data");
			$(".page-content").html(data);
			$('#input-filtro').select();
		}
	});
});


//Paginación desde el cajón de búsqueda presionando enter

$(document).keypress(function(e) 
{
   if(e.which == 13) 
   {
      $('.input-icon a').click();
   }
});

function cambiarVista(vista)
{
	if (vista == 2)
	{
		$('#tab-general').hide(); //oculto mediante id
	    $('#tab-general2').show(); 
	}
	else 
	{
		$('#tab-general2').hide(); //oculto mediante id
	    $('#tab-general').show(); 
	}
}
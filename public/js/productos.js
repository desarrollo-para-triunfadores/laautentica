
function enviar ()
{
	alert("llegue");
	$.ajax({
		url:route,
		data:{
			nombre: $('#bus-nombre').val(),
			idmarca: $('#bus-marca').val(),
			idtipo: $('#bus-tipo').val(),
			estado: $('#bus-estado').val(),
			idorigen: $('#bus-origen').val()
		},
		type: 'GET',
		dataType: 'json',
		success: function(data){
		
			$(".tablaResultados").html(data);			
			$('#input-filtro').select();
		}
	});
}
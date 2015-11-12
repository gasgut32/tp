function IrHacia(lugar)
{
	var miajax = $.ajax({
		url: 'php/nexo.php',
		type: 'post',
		data:{
			queHacer: lugar
		}});
	miajax.done(function(retorno){
		$('#principal').html(retorno);
	});
}

function ErrorBaja()
{
	alert("Esta funcion es solo para usuarios registrados.");
}
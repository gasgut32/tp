function ValidarLogIn()
{
	var nombre = document.getElementById("nombre").value;
	if(nombre == "jose" || nombre == "maria")
	{
		alert("Bienvenido");
		LogIn();
	}
	else
		alert("Acceso denegado");
}

function LogIn()
{
	var nombre = document.getElementById("nombre").value;

	var miajax = $.ajax({
		url: 'php/LogIn.php',
		type: 'post',
		data:{
			nombre:nombre
		}});
	miajax.done(function(retorno){
		IrHacia('Alta');
	});
}

function LogOut()
{
	var miajax = $.ajax({
		url: 'php/LogOut.php',
		type: 'post',
		});
	miajax.done(function(retorno){
		IrHacia('LogIn');
	});
}
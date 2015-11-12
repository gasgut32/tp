function ValidarAlta()
{
	var calle = document.getElementById("calle").value;
	var numero = document.getElementById("numero").value;
	var localidad = document.getElementById("localidad").value;
	var mensaje = "";

	if(localidad == null || localidad == "")
		mensaje += "Debe completar el campo Localidad\n";
	if(calle == null || calle == "")
		mensaje += "Debe completar el campo Calle\n";
	if(numero == null || numero == "")
		mensaje += "Debe completar el campo Numero\n";
	if(mensaje == "")
		Alta();
	else
		alert(mensaje);
}

function Alta()
{
	var id;
	var calle = document.getElementById("calle").value;
	var numero = document.getElementById("numero").value;
	var localidad = document.getElementById("localidad").value;
	var direccion = calle+" "+numero+", "+localidad;
	alert(direccion);

	var miajax = $.ajax({
		url: 'php/nexo.php',
		type: 'post',
		data: {
			queHacer: 'GuardarDireccion',
			id: id,
			direccion: direccion
		}
	});
	miajax.done(function(){
		alert("Se guardo la direccion.");
	});
}

function Baja(id)
{
	var miajax = $.ajax({
		url: 'php/nexo.php',
		type: 'post',
		data: {
			queHacer: 'Baja',
			id: id
		}
	});
	miajax.done(function(){
		IrHacia("Grilla");
	});
}

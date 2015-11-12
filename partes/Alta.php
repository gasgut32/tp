<h2>Alta</h2>
<?php 
	session_start();
	if(isset($_SESSION['usuarioActual'])){
 ?>
<form name="Alta" id="Alta" method="post">
	<input type="text" name="calle" id="calle" placeholder="Ingrese su Calle...">
	<br> <br>
	<input type="text" name="numero" id="numero" placeholder="Ingrese el Numero...">
	<br> <br>
	<select name="localidad" id="localidad">
		<option value="Avellaneda">Avellaneda</option>
		<option value="Lanus">Lanus</option>
	</select> 
	<hr>
	<input type="button" value="Aceptar" onclick="ValidarAlta()">
</form>
<?php 
	}else{
		echo "<h3>No esta logueado.</h3>";
	}
 ?>
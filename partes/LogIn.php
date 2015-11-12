<h2>LogIn</h2>
<?php 
	session_start();
	if(!isset($_SESSION['usuarioActual'])){
 ?>
<form id="frmLogIn" name="frmLogIn" method="post">
	<input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre...">
	<input type="button" onclick="ValidarLogIn()" id="btnAceptar" name="btnAceptar" value="Ingresar" class="MiBotonUTN">
</form>
<?php 
	}else{
		echo "<h3>Ya se encuentra logueado.<h3>";
	}
?>	
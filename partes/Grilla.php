<?php
	session_start(); 
	require_once("../clases/Direccion.php");
	require_once("../clases/AccesoDatos.php");
	$arrayDeDirecciones = Direccion::TraerTodo();
	if ($arrayDeDirecciones != NULL){
?>
		<table class="table">
			<tr>
				<th>Id</th><th>Direccion</th><th>Localizar</th><th>Borrar</th>
			</tr>
<?php 
		foreach ($arrayDeDirecciones as $item) 
		{
			if(!isset($_SESSION['usuarioActual']))
			{
			echo "<tr>
	 				<td>$item->id</td>
	 				<td>$item->direccion</td>
	 				<td><button onclick='VerEnMapa(\"$item->direccion\")' class='btn btn-primary'>Localizar</button></td>
	 				<td><button onclick='ErrorBaja()' class='btn btn-danger'>Borrar</button></td>
	 			</tr>";
	 		}
	 		else
	 		{
	 		echo "<tr>
	 				<td>$item->id</td>
	 				<td>$item->direccion</td>
	 				<td><button onclick='VerEnMapa(\"$item->direccion\")' class='btn btn-primary'>Localizar</button></td>
	 				<td><button onclick='Baja(\"$item->id\")' class='btn btn-danger'>Borrar</button></td>
	 			</tr>";
	 		}
		}
?>
 		</table>
 <?php 
	}else{
		echo "<h3> No hay ningun dato.</h3>";
	}
?>


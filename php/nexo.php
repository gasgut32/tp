<?php 
	require_once "../clases/Direccion.php";

	$op=$_POST['queHacer'];
	
	switch ($op){
		case 'LogIn':
			include("../partes/LogIn.php");
			break;
		case 'Alta':
			include("../partes/Alta.php");
			break;
		case 'Grilla':
			include("../partes/Grilla.php");
			break;
		case 'GuardarDireccion':
			$datos = new Direccion();
			$datos->id = $_POST['id'];
			$datos->direccion = $_POST['direccion'];
			$datos->Alta();
			break;
		case 'Baja':
			$datos = new Direccion();
			$datos->id = $_POST['id'];
			$datos->Baja();
			break;
		case 'VerEnMapa':
			include("../partes/formMapa.php");
			break;
	}
?>
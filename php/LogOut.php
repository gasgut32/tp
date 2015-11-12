<?php 
	session_start();
	$_SESSION['usuarioActual'] = NULL; 
	session_destroy();
 ?>
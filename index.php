<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- disable iPhone inital scale -->
	<meta name="viewport" content=" initial-scale=1.0">
	<title>UTN FRA</title>
	<!-- main css -->
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/media-queries.css" rel="stylesheet" type="text/css">
	<link href="css/ingreso.css" rel="stylesheet">
	<!-- media queries css -->
	<link rel="stylesheet" href="bower_components/bootstrap-css/css/bootstrap.min.css">
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<link rel="icon" href="http://www.octavio.com.ar/favicon.ico">
	<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
	<script type="text/javascript" src="js/funcionesMapa.js"></script>
	<script type="text/javascript" src="js/geolocalizacionCommon.js"></script>
	<script type="text/javascript" src="js/moduloGeolocalizacion.js"></script>
	<script type="text/javascript" src="js/funcionesAjax.js"></script>
	<script type="text/javascript" src="js/funcionesLogin.js"></script>
	<script type="text/javascript" src="js/funcionesABM.js"></script>
</head>
<body>
	<div id="pagewrap">
		<header id="header">
			<hgroup>
				<h1 id="site-logo"><a href="#">TP</a></h1>
				<h2 id="site-description"></h2>
			</hgroup>
			<nav> <!-- /#main-nav -->
				<ul id="main-nav" class="clearfix">
					<li><a onclick="IrHacia('LogIn')" class="btn">LogIn</a></li>
					<li><a onclick="IrHacia('Alta')" class="btn">Alta</a> </li>
					<li><a onclick="IrHacia('Grilla')" class="btn">Grilla</a> </li>
					<li><a onclick="LogOut()" class="btn">LogOut</a></li>
				</ul> 
			</nav>
			<form id="searchform">
				
			</form>
		</header>
		<div id="content" >
			<article  class="post clearfix">
				<header>
					<h1 class="post-title"><a href="#">gaston</a></h1>
					<p class="post-meta"><time class="post-date" datetime="2011-05-08" pubdate>2015</time> <em>en</em> <a href="#">UTN FRA</a></p>
				</header>
				<hr>
				<div id="principal">
					<?php
					
					?>
				</div>		
			</article>
		</div>
		<aside id="sidebar">
			<div id="botonesABM">
				<!--contenido dinamico cargado por ajax-->
			</div>
			<section class="widget clearfix" >
				<h4 class="widgettitle">Usuario actual:</h4>
					<div id="Contador">
					<?php
						session_start();
						if(isset($_SESSION['usuarioAcutal']))
						{
							echo $_SESSION['usuarioActual'];
						}
					?>
					</div>
			</section>			
		</aside>
		<footer id="footer">
		</footer>
	</div>
</body>
</html>
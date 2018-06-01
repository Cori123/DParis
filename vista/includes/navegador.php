<!doctype html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<title>Vestido</title>
	<link rel="stylesheet" href="../vista/css/estiloVestido.css">
	<link rel="stylesheet type "text/css href="../vista/css/estiloCarrito.css">
</head>
<body>
<header>
	
	<div class="usuario">
		<p>Bienvenido <?php echo $nombre_completo; ?> </p>
	</div>
	<div class="usuario terminarSesion">
		<a href="../controlador/cLogOut.php">Terminar Sesión</a>
	</div>
	
	<div class="logotipo">
		<img src="../vista/img/dparis.png" width="140px" alt"">
	</div>
	
	<div class="busqueda">
		<input type="text" placeholder="Escribe tu busqueda" maxlength="20" name="busqueda" id="busqueda">
		<button type="button" id="search"  >Find!</button>
	
	</div>
	
	<div class="carrito">
		<a href="../controlador/cCarrito.php"><img src="../vista/img/carrito.png" width="90px" alt"" ></a>
	</div>
	
	<div class="contacto">
		<a href="#"><img src="../vista/img/contacto.png"	 alt "" > </a>
	</div>
	
	<nav class="top">
		<ul>
			<li><a href = "../controlador/cHomeUsuario.php">INICIO</a></li>
			<li><a href = "../controlador/cVestido.php">VESTIDOS </a></li>
			<li><a href = "#">TERNOS</a></li>
			<li><a href = "#">ABRIGOS</a></li>
			<li><a href = "../controlador/cZapato.php">CALZADOS</a></li>
			<?php 
				$dni = $_SESSION['usuario_dni'];
			
				echo "<li><a href = '../controlador/cVestido.php?dniuser={$dni}'>EMPREZAR A ALQUILAR</a></li>";
			?>
			


		</ul>
	</nav>
</header>
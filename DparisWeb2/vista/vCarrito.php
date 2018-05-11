<!doctype html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<title>Carrito</title>
	<link rel="stylesheet type "text/css href="../vista/css/estiloCarrito.css">
</head>
<header>
	
	<div class="usuario">
		<p> Usuario </p>
	</div>
	<div class="usuario terminarSesion">
		<a href="../index.php">Terminar Sesión</a>
	</div>
	
	<div class="logotipo">
		<img src="../vista/img/dparis.png" width="140px" alt"">
	</div>
	
	
	<div class="busqueda">
		<input type="text" placeholder="Escribe tu busqueda" maxlength="20" name="busqueda" id="busqueda">
		<button type="button" id="search"  >Find!</button>
	
	</div>
	
	
	
	<div class="contacto">
		<a href="#"><img src="../vista/img/contacto.png"	 alt "" > </a>
	</div>
	
	<nav>
		<ul>
			<li><a href = "../controlador/cHomeUsuario.php">INICIO</a></li>
			<li><a href = "../controlador/cVestido.php">VESTIDOS </a></li>
			<li><a href = "#">TERNOS</a></li>
			<li><a href = "#">ABRIGOS</a></li>
			<li><a href = "#">CALZADOS</a></li>
		</ul>
	</nav>
	
	
</header>
<body>

	<div class="carrito">
			<img src="../vista/img/carrito.png"  alt"" >
	</div>
	<div class="alquiler">
		
		<div class="contenido">
			
			<img src="//variable guardada" alt""> </img>
			
			<button type="button" id="modificar" class="modificar"><img src="../vista/img/agregar.jpg" width="30px" alt""></img></button>
			
			<button type="button" id="eliminiar"  class="eliminar"><img src="../vista/img/borrar.jpg" width="40px" alt""></img></button>		
		
		</div>
		<div class="detalle">
			<a>Detalle</a>
		</div>
		<div class="fecha">
			<a>Fecha</a>
		</div>
	</div>
	
	<footer>
	<p>Estrellitas Milagrosas ®</p>
	
	</footer>
	</body>

</html>

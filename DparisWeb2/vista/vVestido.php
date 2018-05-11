<!doctype html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<title>Vestido</title>
	<link rel="stylesheet" href="../vista/css/estiloVestido.css">
</head>
<body>
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
			<li><a href = "#">CALZADOS</a></li>
		</ul>
	</nav>
	
	<section class="cr-container">			

	<input id="select-img-1" name="radio-set-1" type="radio" class="cr-selector-img-1" checked/>
	<label for="select-img-1" class="cr-label-img-1">1</label>

	<input id="select-img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />
	<label for="select-img-2" class="cr-label-img-2">2</label>

	<input id="select-img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
	<label for="select-img-3" class="cr-label-img-3">3</label>

	<input id="select-img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />
	<label for="select-img-4" class="cr-label-img-4">4</label>

	<div class="clr"></div>	

	<div class="cr-bgimg">
		<div>
			<span>Slice 1 - Image 1</span>
			<span>Slice 1 - Image 2</span>
			<span>Slice 1 - Image 3</span>
			<span>Slice 1 - Image 4</span>
		</div>
		<div>
			<span>Slice 2 - Image 1</span>
			<span>Slice 2 - Image 2</span>
			<span>Slice 2 - Image 3</span>
			<span>Slice 2 - Image 4</span>
		</div>
		<div>
			<span>Slice 3 - Image 1</span>
			<span>Slice 3 - Image 2</span>
			<span>Slice 3 - Image 3</span>
			<span>Slice 3 - Image 4</span>
		</div>
		<div>
			<span>Slice 4 - Image 1</span>
			<span>Slice 4 - Image 2</span>
			<span>Slice 4 - Image 3</span>
			<span>Slice 4 - Image 4</span>
		</div>
	</div>

	<div class="cr-titles">
		<h3>
			<span>Elegante</span>
			<span>Colores de tonos oscuros</span>
		</h3>
		<h3>
			<span>Juvenil</span>
			<span>Vestidos de la ultima moda</span>
		</h3>
		<h3>
			<span>Natural</span>
			<span>Relieves de forma artesanal</span>
		</h3>
		<h3>
			<span>Comodo</span>
			<span>Materiales 100% organicos</span>
		</h3>
	</div>
</section>

<hr> </hr>



<div class="gallery">
    <nav>
		<ul>
				<li>
					<a href="#popup1"><img src="../vista/img/vestido1.jpg" alt"" ></a>
					
				</li>
				<li>
					<a href="#popup1"><img src="../vista/img/vestido2.jpg" alt"" ></a>
				
				</li>
				<li>
					<a href="#popup1"><img src="../vista/img/vestido3.jpg" alt"" ></a>
					
				</li>
		</ul>
		<ul>
				<li>
					<a href="#popup1"><img src="../vista/img/vestido4.jpg" alt"" ></a>
					
				</li>
				<li>
					<a href="#popup1"><img src="../vista/img/vestido5.jpg" alt"" ></a>
					
				</li>
				<li>
					<a href="#popup1"><img src="../vista/img/vestido6.jpg" alt"" ></a>
					
				</li>
		</ul>
	</nav>
 </div>


	<div class="modal-wrapper1" id="popup1">
		<div class="popup-contenedor">
				<h2>Vestidos Europeos</h2>
				<img src="../vista/img/6.jpg" alt"" >
				<h3>Detalles</h3>
			<nav>
				<ul>
					<li><a href = "#">ROJO</a></li>
					<li><a href = "#">XL </a></li>
					<li><a href = "#">GRANDE</a></li>
					<li><a href = "#">MEDIANO</a></li>
					<li><a href = "#">COMODO</a></li>
				</ul>
			</nav>
				<div class="modificar">
					<input type="submit" id="modificar" value="+">
					<img src="../vista/img/agregar.jpg" width="30px" alt""></img>
					</button>
					<a>Agregar a Carrito </a>
				</div>
				<a class="popup-cerrar" href="#">X</a>
		</div>
	</div>
<footer>
	<p>Estrellitas Milagrosas ®</p>
	
	</footer>
	
</body>
	
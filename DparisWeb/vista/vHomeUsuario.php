<!doctype html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<title>Pagina web</title>
	<link rel="stylesheet" href="../vista/css/estiloHomeUsuario.css">
</head>
<body>



<header>
	
	<div class="usuario">
		<p> Usuario </p>
	</div>
	
	<div class="logotipo">
		<img src="../vista/img/dparis.png" width="140px" alt"">
	</div>
	
	<div class="busqueda">
		<input type="text" placeholder="Escribe tu busqueda" maxlength="20" name="busqueda" id="busqueda">
		<button type="button" id="search"  >Find!</button>
	
	</div>
	
	<div class="carrito">
		<a href="carrito.html"><img src="../vista/img/carrito.png" width="90px" alt"" ></a>
	</div>
	
	<div class="contacto">
		<a href="#"><img src="../vista/img/contacto.png"	 alt "" > </a>
	</div>
	
	<nav >
		<ul>
			<li><a href = "home.html">INICIO</a></li>
			<li><a href = "vestido.html">VESTIDOS </a></li>
			<li><a href = "#">TERNOS</a></li>
			<li><a href = "#">ABRIGOS</a></li>
			<li><a href = "#">CALZADOS</a></li>
		</ul>
	</nav>
	
	
</header>

<div class="slider">
	<ul>
		<li>
			<img src="../vista/img/imagen 1.jpg" wight="100px" height="750px" alt="">
		</li>
		<li>
			<img src="../vista/img/imagen 2.png" wight="100px" height="750px"alt="">
		</li>
		<li>
			<img src="../vista/img/imagen 3.jpg" wight="100px" height="750px" alt="">
		</li>
		<li>
			<img src="../vista/img/imagen 4.jpg" wight="100px" height="750px" alt="">
		</li>
	</ul>
</div>


<div class="descuentos">
		<p> Descuentos </p>
</div>

<hr> </hr>
	<section class="main">	
		
		

	</section>
	
<div class="responsive">
	<div class="gallery">
    <a  href="#popup1">
      <img src="../vista/img/imagen 2.png"alt="Trolltunga Norway" width="300px" height="300px">
    </a>
    <div class="desc">TERNOS EUROPEOS</div>
  </div>
</div>

<div class="responsive">
	<div class="gallery">
    <a  href="#popup1">
      <img src="../vista/img/imagen 3.jpg" alt="Forest" width="300px" height="300px">
    </a>
    <div class="desc">SACOS DE ITALIA</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a  href="#popup1">
      <img src="../vista/img/imagen 4.jpg" alt="Northern Lights" width="300px" height="300px">
    </a>
    <div class="desc">CALZADOS 100% CUERO</div>
  </div>
</div>
<div class="responsive">
	<div class="gallery">
    <a  href="#popup1">
      <img src="../vista/img/imagen 2.png"alt="Trolltunga Norway" width="300px" height="300px">
    </a>
    <div class="desc">TERNOS EUROPEOS</div>
  </div>
</div>

<div class="responsive">
	<div class="gallery">
    <a  href="#popup1">
      <img src="../vista/img/imagen 3.jpg" alt="Forest" width="300px" height="300px">
    </a>
    <div class="desc">SACOS DE ITALIANOS</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a  href="#popup1">
      <img src="../vista/img/imagen 4.jpg" alt="Northern Lights" width="300px" height="300px">
    </a>
    <div class="desc">CALZADOS 100% CUERO</div>
  </div>
</div>




	<div class="modal-wrapper1" id="popup1">
		<div class="popup-contenedor">
				<h2>Ternos Europeos</h2>
				<img src="../vista/img/imagen 2.png" alt"" >
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
					<button type="button" id="modificar" ">
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
</html>
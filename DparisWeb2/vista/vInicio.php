<!doctype html>
<html>
<head>
	<meta charset ="UTF-8">

	<title>Homes</title>
	<link rel="stylesheet" href="vista/css/estiloInicio.css">
</head>
<body>

	</div>
		<ul class = "slides">
			<li id="slide1"><img src="vista/img/1.jpg" alt=""></li>
			<li id="slide2"><img src="vista/img/2.jpg" alt=""></li>
			<li id="slide3"><img src="vista/img/3.jpg" alt=""></li>
			<li id="slide4"><img src="vista/img/4.jpg" alt=""></li>
			<li id="slide5"><img src="vista/img/5.jpg" alt=""></li>
		</ul>
		
		<ul class = "thumbnails">
			<li><a href="#slide1"><img src="vista/img/1.jpg" /></a></li>
			<li><a href="#slide2"><img src="vista/img/2.jpg" /></a></li>
			<li><a href="#slide3"><img src="vista/img/3.jpg" /></a></li>
			<li><a href="#slide4"><img src="vista/img/4.jpg" /></a></li>
			<li><a href="#slide5"><img src="vista/img/5.jpg" /></a></li>
		</ul>
	
</body>

	
	
	<div class="invitado">
		<a href="home.html">Invitado</a>
	</div>
	<div class="registro">
		<a href="controlador/cRegistrarUsuario.php">Registrarse</a>
	</div>
	
	<div  class="inicio">
	  <a href="#popup1">Iniciar Sesion</a>
	</div>	
	
	<div class="modal-wrapper1" id="popup1">
		<div class="popup-contenedor">
				<h2>Iniciar Sesion</h2>
				<form action="" method="post">
					<div class="sesion">
						<p>USUARIO</p> 
						<input type="text" maxlength="10" name="usuario" id="usuario">
						<p>CONTRASEÑA</p>
						<input type="password" maxlength="10" name="contrasenia" id="contrasenia">
						<input type="submit" name="ingresar" id="ingresar" value="Ingresar">
					</div>
					<div>
						<a class="popup-cerrar" href="#">X</a>
					</div>
				</form>
		</div>  	
	</div>

</html>


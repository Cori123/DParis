<!doctype html>
<html>
<head>
	<meta charset ="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="vista/css/estiloInicio.css">
</head>
<body>

	
	
	<div class="invitado">
		<a href="home.html">INVITADO</a>
	</div>
	<nav class="navigation">
	
		<ul class="mainmenu"> 
		<li><a href="#">INICIAR SESION</a>
				<ul> 
					<li>
						<form action="" method="post">
							<div class="registrarse">
							<p>USUARIO (DNI)</p> 
							<input type="text" maxlength="10" name="usuario" id="usuario">
							<p>CONTRASEÑA</p>
							<input type="password" maxlength="10" name="contraseña" id="contraseña">
							<input type="submit" id="ingresar" value="Ingresar" name="ingresar" />
						</div>       
						</form>     
					</li>
				</ul> 
			</li> 
		</ul> 
	</nav> 
	
	<div class="registro">
		<a href="controlador/cRegistrarUsuario.php">REGISTRARME</a>
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



</html>


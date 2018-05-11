<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="vista/css/estiloIni.css">
	<title>Document</title>
</head>
<body>
	<div class="inicio">
		<ul class="inicio-menu">
			<li class="inicio-menu-item">REGISTRARME</li>
			<label for="">|</label>
			<li class="inicio-menu-item">
				<div class="iniciar" href="#">INICIAR SESION
					<div class="iniciaraparece">
						<ul class="subul"> 
							<li>
								<div class="registrarse">
									<p>USUARIO</p> 
									<input type="text" name="" maxlength="10" name="usuario" id="usuario">
									<p>CONTRASEÑA</p>
									<input type="password" name=""maxlength="10" name="contraseña" id="contraseña">
									<button type="button" id="ingresar">Ingresar</button>
								</div>            
							</li>
						</ul> 
					</div>
				</div>
			</li>
			<label for="">|</label>
			<li class="inicio-menu-item">INVITADO</li>
		</ul>
	</div>
	<div class="fondo">
		<figure class="fondo-figure">
			<img src="vista/img/fondoindexs.jpg" alt="" class="fondo-figure-img">
		</figure>
	</div>
	<div class="mostrar">
		<div class="mostrar-contgra">
			<ul class = "slides">
				<li id="slide1"><img src="vista/img/1.jpg" alt=""></li>
				<li id="slide2"><img src="vista/img/2.jpg" alt=""></li>
				<li id="slide3"><img src="vista/img/3.jpg" alt=""></li>
				<li id="slide4"><img src="vista/img/4.jpg" alt=""></li>
				<li id="slide5"><img src="vista/img/5.jpg" alt=""></li>
			</ul>
		</div>
		
		<div class="mostrar-contpeq">
			<ul class = "thumbnails">
				<li><a href="#slide1"><img src="vista/img/1.jpg" /></a></li>
				<li><a href="#slide2"><img src="vista/img/2.jpg" /></a></li>
				<li><a href="#slide3"><img src="vista/img/3.jpg" /></a></li>
				<li><a href="#slide4"><img src="vista/img/4.jpg" /></a></li>
				<li><a href="#slide5"><img src="vista/img/5.jpg" /></a></li>
			</ul>
		</div>
	</div>
</body>
</html>
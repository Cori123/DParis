<!doctype html>
<html lang="en">

<head>
	<meta charset ="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" href="../vista/css/estiloRegistrarUsuario.css">
</head>
<body>
	
	<form action="" method="POST">
		<div class="nameregistro">
			<a>Registro</a>
		</div>
		<hr></hr>
		<div class="registro-usuario">
			<?php 
				echo "Poner mensaje de que se registro";
			echo "Poner que no acepte letras."; ?>
			<a>DNI:</a>
			<input type="text" placeholder="Escriba su DNI" maxlength="20" name="dni" id="RegUsuario" required>
			
		</div>
		<div class="registro-usuario">
			<a>Nombre:</a>
			<input type="text" placeholder="Escriba su Nombre" maxlength="20" name="nombre" id="RegUsuario" required>
		</div>
		<div class="registro-usuario">
			<a>Apellido Paterno:</a>
			<input type="text" placeholder="Escriba su apellido paterno" maxlength="20" name="apellidoP" id="RegUsuario" required>
		</div>
		<div class="registro-usuario">
			<a>Apellido Materno:</a>
			<input type="text" placeholder="Escriba su apellido materno" maxlength="20" name="apellidoM" id="RegUsuario" required>
		</div>
		<div class="registro-usuario">
			<a>Número celular:</a>
			<input type="text" placeholder="Escriba su número celular" maxlength="20" name="numeroCelular" id="RegUsuario" required>
		</div>

		<div class="registro-usuario">
			<a>Distrito:</a>
			<input type="text" placeholder="Escriba su Usuario" maxlength="20" name="distrito" id="RegUsuario" required>
		</div>

		<div class="registro-usuario">
			<a>Dirección:</a>
			<input type="text" placeholder="Escriba su Dirección" maxlength="20" name="direccion" id="RegUsuario" required>
		</div>

		<div class="registro-password">
			<a>Contraseña</a>
			<input type="password" placeholder="Escriba su contraseña" maxlength="20" name="contrasenia" id="RegContraseña" required>
		</div>
	
		<div class="registro-password-two">
			<a>Conformidad Contraseña</a>
			<input type="password" placeholder="Vuelva a escribir su contraseña" maxlength="20" name="RegContraseña2" id="RegContraseña2" required>
		</div>
	
		<div class="registro-email">
			<a>Email</a>
			<input type="email" placeholder="Escriba su Email" maxlength="100" name="correo" id="RegEmail" required>
		</div>
		<div class="registrarme">
			<input type="submit" id="registro" name="btnregistrarme" value="Registrarme">
		</div>
	</form>

	<footer>
		<p>Estrellitas Milagrosas ®</p>
	</footer>
</body>
</html>
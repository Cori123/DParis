<?php 

	if (isset($_POST['btnregistrarme'])) {
		$dni = $_POST['dni'];
		$nombre = $_POST['nombre'];
		$apellidoP =$_POST['apellidoP'];
		$apellidoM =$_POST['apellidoM'];
		$numeroCelular = $_POST['numeroCelular'];
		$correo= $_POST['correo'];
		$distrito= $_POST['distrito'];
		$direccion= $_POST['direccion'];
		$contrasenia= $_POST['contrasenia'];
		$usr_ransalt = '123qwertyuiopasdfghjklmn';

		$contraencrypt = crypt($contrasenia,$usr_ransalt);

		$registrar_persona = "call registrar_persona('$dni','$nombre','$apellidoP','$apellidoM','$numeroCelular','$correo','$distrito','$direccion')";
		
		$registrar_user = "call registrar_usuario('$dni','$contraencrypt')";
		
		$bd_registrar_persona = mysqli_query($conexion, $registrar_persona);

		$bd_registrar_user = mysqli_query($conexion, $registrar_user);
		
		if (!$conexion) {
			die("Fallo en la conexión con la base de datos");
		}

		echo "<script type='text/javascript'> alert('Usuario registrado correctamente!'); 
			location.href ='../index.php';
			</script>";
	}

?>
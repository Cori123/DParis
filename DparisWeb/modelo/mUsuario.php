<?php 

	class mUsuario{

		function mUsuarioRegistrar(){
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

				$registrar_user = "call registrar_usuario('$dni','$nombre','$apellidoP','$apellidoM','$numeroCelular','$correo','$distrito','$direccion','$contraencrypt')";
				$bd_registrar_user = mysqli_query($conexion, $registrar_user);
				
				if (!$conexion) {
					die("Fallo en la conexión con la base de datos");
				}
			}
		}

	}

?>
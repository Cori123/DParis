<?php 
	include "modelo/bdconexion.php"; 

	if (isset($_POST['ingresar'])) {
		//recivir los datos de login
		$usuario = $_POST['usuario'];
		$contrasenia = $_POST['contrasenia'];
		$usr_ransalt = '123qwertyuiopasdfghjklmn';

		//llamar al SP verificar_usuario
		$proc_ver_user = "call verificar_usuario('$usuario')";
		//llamar al SP verificar_persona
		//$proc_ver_persona = "call verificar_persona('$usuario')";
		
		//enviar las consultas
		$bd_verificar_usuario = mysqli_query($conexion,$proc_ver_user);
		//$bd_verificar_persona = mysqli_query($conexion,$proc_ver_persona);




		if (mysqli_num_rows($bd_verificar_usuario)<=0) {
			echo "<script type='text/javascript'>
			  alert('Usuario no registrado!'); </script>";
		}else{

			//almacenar los datos que retornan de la base de datos
			$consulta_usuario = mysqli_fetch_array($bd_verificar_usuario);
			//$consulta_persona = mysqli_fetch_array($bd_verificar_persona);
			

			//sacamos la contraseña en caso de que exita el usuario
			$usr_contrasenia = $consulta_usuario['usr_contrasenia']; 

			//encryptamos la contraseña ingresada para compararlo con la contraseña almacenada
			$contraencrypt = crypt($contrasenia,$usr_ransalt);


			if ($contraencrypt==$usr_contrasenia) {
				$usr_estado = $consulta_usuario['usr_estado'];
				if ($usr_estado == 'Permitido') {
					//sacamos datos de la persona logeada
					//$nombre = $consulta_persona['usr_nombre'];
					//$apellido_paterno = $consulta_persona['usr_apellido_paterno'];
					//$apellido_materno = $consulta_persona['usr_apellido_materno'];
					$tipo = $consulta_usuario['usr_tipo'];


				  	$_SESSION['usuario_nombre'] = $usuario;
					$_SESSION['usuario_tipo'] = $tipo;

					header("Location: controlador/cHomeUsuario.php");
				}else{
					echo "<script type='text/javascript'> alert('Usuario Bloqueado, para consultas contáctenos.'); </script>";
				}		  	
			  	
			}else{
				echo "<script type='text/javascript'> alert('Contraseña erronea!'); </script>";
			}
		}

	}

?>
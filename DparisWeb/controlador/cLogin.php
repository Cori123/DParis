<?php 
	include "modelo/bdconexion.php"; 

	if (isset($_POST['ingresar'])) {
		
		$usuario = $_POST['usuario'];
		$contraseña = $_POST['contraseña'];

		$proc_ver_user = "call verificar_usuario('$usuario')";
		$bd_verificar_usuario = mysqli_query($conexion,$proc_ver_user);

		$consulta_usuario = mysqli_fetch_array($bd_verificar_usuario);

		$usr_contrasenia = $consulta_usuario['usr_contrasenia']; 

		if (mysqli_num_rows($bd_verificar_usuario)==0) {
			header( "Location:".$_SERVER['PHP_SELF'] );
			echo "<script type='text/javascript'>
			  alert('Usuario no registrado!'); </script>";
		}else{
			if ($contraseña==$usr_contrasenia) {
			  	
			  	$_SESSION['usuario_nombre'] = $usr_nom . " " .$usr_ape;
				$_SESSION['usuario_estado'] = $usr_est;
				$_SESSION['usuario_rol'] = $usr_rol;

				header("Location: controlador/cHomeUsuario.php");
			}
		}

	}

?>
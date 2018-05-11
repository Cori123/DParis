<?php 
	include "../modelo/bdconexion.php";
	//include "../modelo/mRegistrarUsuario.php";
	include "../vista/vRegistrarUsuario.php";
	
	include "../modelo/mUsuario";

	mUsuario().mUsuarioRegistrar();


?>
<?php 
	ob_start();
	session_start();

    if (isset($_SESSION['usuario_estado'])) {
        if (!($_SESSION['usuario_estado'] == "Permitido")) {
                header("Location: ../index.php");
        }
    }

    if (!isset($_SESSION['usuario_estado'])) {
        header("Location: ../index.php");
    }
    
	include "../modelo/bdconexion.php";
	include "../vista/vVestido.php";

?>
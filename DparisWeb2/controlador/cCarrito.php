<?php 
	session_start();

	if (isset($_SESSION['usuario_estado'])) {
        if (!($_SESSION['usuario_estado'] == "Permitido")) {
                header("Location: ../index.php");
        }
    }

    if (!isset($_SESSION['usuario_estado'])) {
        header("Location: ../index.php");
    }

	include "../vista/vCarrito.php";

?>
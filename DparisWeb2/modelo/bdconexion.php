<?php 
	
	$db['db_host'] = 'localhost';
	$db['db_user'] = 'root';
	$db['db_pass'] = 'Cori1210Llas1905';
	$db['db_name'] = 'dbdparisweb';

	foreach ($db as $key => $value) {
		define(strtoupper($key), $value);
	}

	$conexion = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

	mysqli_set_charset($conexion,"utf8");

	if (!$conexion) {
		die("Fallo en la conexión con la base de datos ---Dparis Web---");
	}

?>
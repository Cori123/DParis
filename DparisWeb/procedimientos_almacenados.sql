DELIMITER //
	CREATE PROCEDURE verificar_usuario(
		IN _usr_dni varchar(10)
	)BEGIN
	SELECT * FROM usuario WHERE usr_dni = _usr_dni;
	END
//DELIMITER ;

DELIMITER //
	CREATE PROCEDURE registrar_usuario(
		IN _usr_dni varchar(10),
		_usr_nombre varchar(45),
		_usr_apellido_paterno varchar(20),
		_usr_apellido_materno varchar(20),
		_usr_numero_celular varchar(12),
		_usr_correo varchar(100),
		_usr_distrito varchar(20),
		_usr_direccion varchar(70),
		_usr_contrasenia varchar(200)
	)BEGIN
	INSERT INTO usuario(usr_dni,usr_nombre,usr_apellido_paterno,usr_apellido_materno,usr_numero_celular,usr_correo,usr_distrito,usr_direccion,usr_contrasenia) VALUES (_usr_dni,_usr_nombre,_usr_apellido_paterno,_usr_apellido_materno,_usr_numero_celular,_usr_correo,_usr_distrito,_usr_direccion,_usr_contrasenia);
	END
//DELIMITER ;
DELIMITER //
	CREATE PROCEDURE verificar_usuario(
		IN _persona_usr_dni varchar(10)
	)BEGIN
	SELECT * FROM usuario WHERE persona_usr_dni = _persona_usr_dni;
	END
//DELIMITER ;

DELIMITER //
	CREATE PROCEDURE verificar_persona(
		IN _usr_dni varchar(10)
	)BEGIN
	SELECT * FROM persona WHERE usr_dni = _usr_dni;
	END
//DELIMITER ;

DELIMITER //
	CREATE PROCEDURE verificar_persona_usuario(
		IN _usr_dni varchar(10)
	)BEGIN
	SELECT u.persona_usr_dni, u.usr_contrasenia, u.usr_tipo, u.usr_estado, p.usr_nombre, p.usr_apellido_paterno, p.usr_apellido_materno, p.usr_numero_celular, p.usr_correo, p.usr_distrito, p.usr_direccion FROM usuario u INNER JOIN persona p WHERE u.persona_usr_dni =_usr_dni AND p.usr_dni=_usr_dni;
	END
//DELIMITER ;

DELIMITER //
	CREATE PROCEDURE registrar_persona(
		IN _usr_dni varchar(10),
		_usr_nombre varchar(45),
		_usr_apellido_paterno varchar(20),
		_usr_apellido_materno varchar(20),
		_usr_numero_celular varchar(12),
		_usr_correo varchar(100),
		_usr_distrito varchar(20),
		_usr_direccion varchar(70)
	)BEGIN
	INSERT INTO persona(usr_dni,usr_nombre,usr_apellido_paterno,usr_apellido_materno,usr_numero_celular,usr_correo,usr_distrito,usr_direccion) VALUES (_usr_dni,_usr_nombre,_usr_apellido_paterno,_usr_apellido_materno,_usr_numero_celular,_usr_correo,_usr_distrito,_usr_direccion);
	END
//DELIMITER ;

DELIMITER //
	CREATE PROCEDURE registrar_usuario(
		IN _persona_usr_dni varchar(10),
		_usr_contrasenia varchar(200)
	)BEGIN
	INSERT INTO usuario(persona_usr_dni,usr_contrasenia) VALUES (_persona_usr_dni,_usr_contrasenia);
	END
//DELIMITER ;

DELIMITER //
	CREATE PROCEDURE registrar_alquiler(
		IN _alquiler_usr_dni varchar(10)
	)BEGIN
	insert into alquiler (alquiler_usr_dni,alquiler_fecha,alquiler_hora,alquiler_estado) values (_alquiler_usr_dni,now(),now(),'Creado');
	END
//DELIMITER ;

DELIMITER //
	CREATE PROCEDURE registrar_alquiler_detalle(
		IN _alquiler_detalle_alquiler_id int(11),
		_alquiler_detalle_prenda_codigo varchar(100),
		_alquiler_detalle_monto decimal(6,2)
	)BEGIN
	insert into alquiler_detalle (alquiler_detalle_alquiler_id,alquiler_detalle_prenda_codigo, alquiler_detalle_monto, alquiler_detalle_cantidad) values (_alquiler_detalle_alquiler_id,_alquiler_detalle_prenda_codigo,_alquiler_detalle_monto,1);
	END
//DELIMITER ;

DELIMITER //
	CREATE PROCEDURE registrar_prenda(
		IN _prenda_codigo varchar(100),
		_prenda_tipo varchar(20),
		_prenda_nombre varchar(20),
		_prenda_color varchar(20),
		_prenda_talla varchar(5),
		_prenda_cantidad int(11),
		_prenda_precio_minimo decimal(6,2),
		_prenda_precio_sugerido decimal(6,2),
		_prenda_imagen varchar(100)
	)BEGIN
	insert into prenda (prenda_codigo,prenda_tipo,prenda_nombre,prenda_color,prenda_talla,prenda_cantidad,prenda_precio_minimo,prenda_precio_sugerido,prenda_imagen) values (_prenda_codigo,_prenda_tipo,_prenda_nombre,_prenda_color,_prenda_talla,_prenda_cantidad,_prenda_precio_minimo,_prenda_precio_sugerido,_prenda_imagen);
	END
//DELIMITER ;

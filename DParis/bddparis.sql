-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2018 a las 03:39:50
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bddparis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `codCliente` varchar(25) NOT NULL,
  `estadoCliente` varchar(15) NOT NULL,
  `tipoCliente` varchar(20) NOT NULL,
  `nombreCliente` varchar(20) NOT NULL,
  `apaternoCliente` varchar(20) DEFAULT NULL,
  `amaternoCliente` varchar(20) DEFAULT NULL,
  `tipodocCliente` varchar(10) DEFAULT NULL,
  `numdocCliente` varchar(20) NOT NULL,
  `telefCliente` varchar(20) DEFAULT NULL,
  `direccionCliente` varchar(255) DEFAULT NULL,
  `departamentoCliente` varchar(20) DEFAULT NULL,
  `provinciaCliente` varchar(20) DEFAULT NULL,
  `distritoCliente` varchar(20) DEFAULT NULL,
  `fechnacCliente` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`codCliente`, `estadoCliente`, `tipoCliente`, `nombreCliente`, `apaternoCliente`, `amaternoCliente`, `tipodocCliente`, `numdocCliente`, `telefCliente`, `direccionCliente`, `departamentoCliente`, `provinciaCliente`, `distritoCliente`, `fechnacCliente`) VALUES
('c47494284', 'Permitido', 'Regular', 'Fiorela', 'Tejeda', 'Rimari', 'DNI', '47494284', '992603778', 'Psj. El Sol Saños chico - El Tambo(UNCP) arriba', 'Junin', 'Huancayo', 'El Tambo', '2018-03-03'),
('c73005648', 'Permitido', 'Regular', 'Jesus Jhony', 'Condor', 'Ramos', 'DNI', '73005648', '931174101', 'Arequipa 1859', 'Junin', 'Huancayo', 'El Tambo', '2018-02-25'),
('c73005649', 'Permitido', 'Regular', 'Eduardo', 'Condor', 'Ramos', 'DNI', '73005649', '931194200', 'Arequipa 1859', 'Junin', 'Huancayo', 'El Tambo', '1998-02-12'),
('c74874421', 'Permitido', 'Regular', 'Anabel', 'Quispe', 'Jacobe', 'DNI', '74874421', '979854321', 'Av 31 de Octubre Huancan', 'Junin', 'Huancayo', 'Chilca', '2018-03-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idCompra` varchar(45) NOT NULL,
  `codTrabajador` varchar(25) NOT NULL,
  `idProveedor` varchar(30) NOT NULL,
  `tipodocCompra` varchar(20) DEFAULT NULL,
  `numdocCompra` varchar(20) DEFAULT NULL,
  `fechIngreso` date DEFAULT NULL,
  `totalCompra` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `intentos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE `detalle_compra` (
  `idCompra` varchar(45) NOT NULL,
  `idProducto` varchar(45) NOT NULL,
  `precCompra` decimal(7,2) DEFAULT NULL,
  `cantCompra` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_deuda`
--

CREATE TABLE `detalle_deuda` (
  `idVenta` varchar(45) NOT NULL,
  `fechCancelado` date NOT NULL,
  `horaCancelado` time DEFAULT NULL,
  `montoCancelado` decimal(7,2) NOT NULL,
  `codTrabajador` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_deuda`
--

INSERT INTO `detalle_deuda` (`idVenta`, `fechCancelado`, `horaCancelado`, `montoCancelado`, `codTrabajador`) VALUES
('2011181066', '2018-02-22', '10:25:19', '30.00', 't00000000'),
('2011181066', '2018-02-23', '10:26:30', '0.00', 't00000000'),
('2011181066', '2018-03-03', '10:42:31', '53.00', 't00000000'),
('4211819347', '2018-03-04', '19:05:11', '10.00', 't123'),
('202118184746', '2018-03-20', '18:48:28', '0.00', 't123'),
('202118184746', '2018-03-20', '18:48:41', '10.00', 't73005648');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `idVenta` varchar(45) NOT NULL,
  `idProducto` varchar(45) NOT NULL,
  `precioVenta` decimal(7,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `fechEntregaPrenda` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`idVenta`, `idProducto`, `precioVenta`, `cantidad`, `estado`, `fechEntregaPrenda`) VALUES
('2011181066', 'ConjVestXSVerd', '83.00', 1, 'SEPARADO', '2018-02-22'),
('4211819347', 'ConjVestXSVerd', '80.00', 1, 'SEPARADO', '2018-03-04'),
('42118192012', '1111VestXSVerd', '10.00', 1, 'ENTREGADO', '2018-03-04'),
('42118192012', '2222VestXSVerd', '10.00', 1, 'ENTREGADO', '2018-03-04'),
('202118184746', '2222VestXSVerd', '10.00', 1, 'SEPARADO', '2018-03-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivo`
--

CREATE TABLE `motivo` (
  `codCliTra` varchar(25) NOT NULL,
  `motivo` varchar(255) DEFAULT NULL,
  `fechMotivo` date DEFAULT NULL,
  `horaMotivo` time DEFAULT NULL,
  `evidenciaMotivo` longblob,
  `estadoMotivo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `motivo`
--

INSERT INTO `motivo` (`codCliTra`, `motivo`, `fechMotivo`, `horaMotivo`, `evidenciaMotivo`, `estadoMotivo`) VALUES
('c73005649', 'ASDA', '2018-03-10', '11:51:34', NULL, 'Enviado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivot`
--

CREATE TABLE `motivot` (
  `codCliTra` varchar(25) NOT NULL,
  `motivo` varchar(255) DEFAULT NULL,
  `fechMotivo` date DEFAULT NULL,
  `horaMotivo` time DEFAULT NULL,
  `evidenciaMotivo` longblob,
  `estadoMotivo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` varchar(45) NOT NULL,
  `nombreProducto` varchar(45) NOT NULL,
  `tipoProducto` varchar(20) DEFAULT NULL,
  `talla` varchar(15) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `cantidadProducto` int(11) DEFAULT NULL,
  `preciocompAntiguoProducto` decimal(7,2) DEFAULT NULL,
  `preciocompActualProducto` decimal(7,2) DEFAULT NULL,
  `preciominProducto` decimal(7,2) DEFAULT NULL,
  `precioventaProducto` decimal(7,2) DEFAULT NULL,
  `imgProducto` longblob,
  `vecesAlquilado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreProducto`, `tipoProducto`, `talla`, `color`, `cantidadProducto`, `preciocompAntiguoProducto`, `preciocompActualProducto`, `preciominProducto`, `precioventaProducto`, `imgProducto`, `vecesAlquilado`) VALUES
('1111VestXSVerd', '111111111111', 'Vestido', 'XS', 'Verde', 0, '10.00', '10.00', '10.00', '10.00', NULL, 1),
('2222VestXSVerd', '22222222222', 'Accesorio', 'XS', 'Verde', 2, '10.00', '10.00', '10.00', '10.00', NULL, 1),
('BrazAcceXSVerd', 'Brazalete', 'Accesorio', 'XS', 'Verde', 7, '5.00', '5.00', '5.00', '10.00', NULL, 1),
('ConjVestXSVerd', 'Conjunto de dama', 'Vestido', 'XS', 'Verde', 1, '350.00', '350.00', '50.00', '80.00', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` varchar(30) NOT NULL,
  `nombreProveedor` varchar(45) NOT NULL,
  `tipodocProveedor` varchar(20) DEFAULT NULL,
  `numdocProveedor` varchar(20) DEFAULT NULL,
  `departamentoProveedor` varchar(30) DEFAULT NULL,
  `provinciaProveedor` varchar(30) DEFAULT NULL,
  `distritoProveedor` varchar(30) DEFAULT NULL,
  `ubicacionProveedor` varchar(45) DEFAULT NULL,
  `telef1Proveedor` varchar(20) DEFAULT NULL,
  `telef2Proveedor` varchar(20) DEFAULT NULL,
  `correoProveedor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `nombreProveedor`, `tipodocProveedor`, `numdocProveedor`, `departamentoProveedor`, `provinciaProveedor`, `distritoProveedor`, `ubicacionProveedor`, `telef1Proveedor`, `telef2Proveedor`, `correoProveedor`) VALUES
('GenRUCGenerico', 'Generico', 'RUC', 'Generico', 'Junin', 'Huancayo', 'El Tambo', 'Generico', '', '', ''),
('JesRUC73005648', 'Jesus', 'RUC', '73005648', 'Junin', 'Huancayo', 'El Tambo', 'Real', '931174101', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `codTrabajador` varchar(25) NOT NULL,
  `estadoTrabajador` varchar(15) NOT NULL,
  `sueldoTrabajador` decimal(7,2) NOT NULL,
  `permisoTrabajador` varchar(20) NOT NULL,
  `nombreTrabajador` varchar(20) NOT NULL,
  `apaternoTrabajador` varchar(20) DEFAULT NULL,
  `amaternoTrabajador` varchar(20) DEFAULT NULL,
  `tipodocTrabajador` varchar(10) DEFAULT NULL,
  `numdocTrabajador` varchar(20) NOT NULL,
  `telefTrabajador` varchar(20) DEFAULT NULL,
  `direccionTrabajador` varchar(45) DEFAULT NULL,
  `departamentoTrabajador` varchar(20) DEFAULT NULL,
  `provinciaTrabajador` varchar(20) DEFAULT NULL,
  `distritoTrabajador` varchar(20) DEFAULT NULL,
  `fechnacTrabajador` date DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`codTrabajador`, `estadoTrabajador`, `sueldoTrabajador`, `permisoTrabajador`, `nombreTrabajador`, `apaternoTrabajador`, `amaternoTrabajador`, `tipodocTrabajador`, `numdocTrabajador`, `telefTrabajador`, `direccionTrabajador`, `departamentoTrabajador`, `provinciaTrabajador`, `distritoTrabajador`, `fechnacTrabajador`, `password`) VALUES
('t00000000', 'Permitido', '400.00', 'Administrador', 'Denis', 'Otros', 'Otros', 'DNI', '00000000', '999999999', 'Real', 'Junin', 'Huancayo', 'El Tambo', '2018-03-03', '00000000'),
('t123', 'Permitido', '400.00', 'Usuario', 'Eduardo', 'Condor', 'Ramos', 'DNI', '123', '931', 'Real', 'Junin', 'Huancayo', 'El Tambo', '2018-02-17', '123'),
('t73005648', 'Permitido', '2000.00', 'Administrador', 'Jesus', 'Condor', 'Ramos', 'DNI', '73005648', '9311741101', 'Real 496', 'Junin', 'Huancayo', 'El Tambo', '1997-10-12', '@dmi1412');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idVenta` varchar(45) NOT NULL,
  `codCliente` varchar(25) NOT NULL,
  `codTrabajador` varchar(25) NOT NULL,
  `tipoVenta` varchar(20) DEFAULT NULL,
  `fechVenta` date DEFAULT NULL,
  `horaVenta` time DEFAULT NULL,
  `totalVenta` decimal(7,2) DEFAULT NULL,
  `restaVenta` decimal(7,2) DEFAULT NULL,
  `fechEntrega` date DEFAULT NULL,
  `fechDevolucion` date DEFAULT NULL,
  `numBoleta` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idVenta`, `codCliente`, `codTrabajador`, `tipoVenta`, `fechVenta`, `horaVenta`, `totalVenta`, `restaVenta`, `fechEntrega`, `fechDevolucion`, `numBoleta`) VALUES
('2011181066', 'c47494284', 't73005648', 'ALQUILER', '2018-02-20', '10:42:42', '83.00', '0.00', '2018-02-22', '2018-02-24', NULL),
('202118184746', 'c47494284', 't00000000', 'ALQUILER', '2018-03-20', '18:48:53', '10.00', '0.00', '2018-03-20', '2018-03-20', '12312'),
('3211811346', 'c74874421', 't73005648', 'ALQUILER', '2018-03-03', '11:03:47', '0.00', '0.00', '2018-03-03', '2018-03-03', NULL),
('42118192012', 'c73005648', 't73005648', 'ALQUILER', '2018-03-04', '19:20:30', '0.00', '0.00', '2018-03-04', '2018-03-04', '010203'),
('4211819347', 'c73005648', 't123', 'ALQUILER', '2018-03-04', '19:05:21', '80.00', '70.00', '2018-03-04', '2018-03-04', '1020220');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codCliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `fk_compra_trabajador_idx` (`codTrabajador`),
  ADD KEY `fk_compra_proveedor_idx` (`idProveedor`);

--
-- Indices de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD KEY `fk_detalle_compra_compra_idx` (`idCompra`),
  ADD KEY `fk_detalle_compra_producto_idx` (`idProducto`);

--
-- Indices de la tabla `detalle_deuda`
--
ALTER TABLE `detalle_deuda`
  ADD KEY `fk_detalle_deuda_venta_idx` (`idVenta`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD KEY `fk_detalle_venta_venta_idx` (`idVenta`),
  ADD KEY `fk_detalle_venta_producto_idx` (`idProducto`);

--
-- Indices de la tabla `motivo`
--
ALTER TABLE `motivo`
  ADD KEY `fk_motivo_cliente_idx` (`codCliTra`);

--
-- Indices de la tabla `motivot`
--
ALTER TABLE `motivot`
  ADD KEY `fk_motivo_trabajador` (`codCliTra`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`codTrabajador`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idVenta`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_compra_proveedor` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`idProveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compra_trabajador` FOREIGN KEY (`codTrabajador`) REFERENCES `trabajador` (`codTrabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD CONSTRAINT `fk_detalle_compra_compra` FOREIGN KEY (`idCompra`) REFERENCES `compra` (`idCompra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_compra_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_deuda`
--
ALTER TABLE `detalle_deuda`
  ADD CONSTRAINT `fk_detalle_deuda_venta` FOREIGN KEY (`idVenta`) REFERENCES `venta` (`idVenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `fk_detalle_venta_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_venta_venta` FOREIGN KEY (`idVenta`) REFERENCES `venta` (`idVenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `motivo`
--
ALTER TABLE `motivo`
  ADD CONSTRAINT `fk_motivo_cliente` FOREIGN KEY (`codCliTra`) REFERENCES `cliente` (`codCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `motivot`
--
ALTER TABLE `motivot`
  ADD CONSTRAINT `fk_motivo_trabajador` FOREIGN KEY (`codCliTra`) REFERENCES `trabajador` (`codTrabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

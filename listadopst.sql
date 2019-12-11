-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-12-2019 a las 18:09:23
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `listadopst`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipalidad`
--

CREATE TABLE `municipalidad` (
  `id_municipalidad` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipalidad`
--

INSERT INTO `municipalidad` (`id_municipalidad`, `nombre`, `fecha_ingreso`) VALUES
(63, 'Ñuñoa', '2019-12-11 19:00:18'),
(93, 'Futrono', '2019-12-11 19:11:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordencompra`
--

CREATE TABLE `ordencompra` (
  `pst` varchar(30) NOT NULL,
  `motivo` text,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `municipalidad` int(11) DEFAULT NULL,
  `sistema` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ordencompra`
--

INSERT INTO `ordencompra` (`pst`, `motivo`, `fecha_ingreso`, `municipalidad`, `sistema`) VALUES
('PST32011438510930000004001_1', 'error de esign al generar el documento, pdf en blanco', '2019-12-11 19:13:29', 93, 2),
('PST32011438510930000006001', 'problemas de conexion', '2019-12-11 19:35:44', 63, 1),
('PST32011438510930000008001_1', 'error de esign al generar el documento, pdf en blanco', '2019-12-11 19:21:38', 93, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema`
--

CREATE TABLE `sistema` (
  `id_sistema` int(11) NOT NULL,
  `nombre_sistema` varchar(50) DEFAULT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sistema`
--

INSERT INTO `sistema` (`id_sistema`, `nombre_sistema`, `fecha_ingreso`) VALUES
(1, 'ECOM', '2019-12-11 18:59:50'),
(2, 'ECOM INTESIS', '2019-12-11 19:12:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `municipalidad`
--
ALTER TABLE `municipalidad`
  ADD PRIMARY KEY (`id_municipalidad`);

--
-- Indices de la tabla `ordencompra`
--
ALTER TABLE `ordencompra`
  ADD PRIMARY KEY (`pst`),
  ADD KEY `municipalidad` (`municipalidad`),
  ADD KEY `sistema` (`sistema`);

--
-- Indices de la tabla `sistema`
--
ALTER TABLE `sistema`
  ADD PRIMARY KEY (`id_sistema`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ordencompra`
--
ALTER TABLE `ordencompra`
  ADD CONSTRAINT `ordencompra_ibfk_1` FOREIGN KEY (`municipalidad`) REFERENCES `municipalidad` (`id_municipalidad`),
  ADD CONSTRAINT `ordencompra_ibfk_2` FOREIGN KEY (`sistema`) REFERENCES `sistema` (`id_sistema`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

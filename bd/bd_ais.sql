-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-03-2014 a las 04:31:36
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_ais`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llamada`
--

CREATE TABLE IF NOT EXISTS `llamada` (
  `Id` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `Duracion` int(11) DEFAULT NULL,
  `Costo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `llamada`
--

INSERT INTO `llamada` (`Id`, `Fecha`, `Hora`, `Duracion`, `Costo`) VALUES
(1, '0000-00-00', '00:00:00', 0, 0),
(2, '0000-00-00', '00:00:00', 0, 0),
(1, '2014-02-06', '08:10:00', 13, 39),
(2, '2014-02-19', '07:14:03', 10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llamada_telefono`
--

CREATE TABLE IF NOT EXISTS `llamada_telefono` (
  `id_tfno` varchar(20) NOT NULL,
  `Id_llamada` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_tfno`,`Id_llamada`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `llamada_telefono`
--

INSERT INTO `llamada_telefono` (`id_tfno`, `Id_llamada`, `fecha`) VALUES
('2121234567', 1, '2014-02-06'),
('4147483647', 2, '2014-02-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE IF NOT EXISTS `plan` (
  `Id_plan` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `Tipo_plan` varchar(30) NOT NULL,
  `Tipo_tele` varchar(30) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Cant_activaciones` int(11) NOT NULL,
  `Cant_desact` int(11) NOT NULL,
  PRIMARY KEY (`Id_plan`),
  UNIQUE KEY `Nombre` (`Nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`Id_plan`, `Nombre`, `Tipo_plan`, `Tipo_tele`, `Precio`, `Cant_activaciones`, `Cant_desact`) VALUES
(1, 'Plan habla 200', 'normal', 'fija', 80, 0, 0),
(2, 'Plan habla 500', 'especial', 'celular', 20, 2, 0),
(3, 'Plan habla mas', 'normal', 'celular', 80, 1, 0),
(4, 'Plan sin renta', 'normal', 'Celular', 100, 0, 0),
(5, 'Hogar con todos', 'Normal', 'Fija', 80, 1, 1),
(6, 'Plan full', 'normal', 'Celular', 300, 0, 0),
(7, 'Plan 40 llamadas', 'Normal', 'Fija', 20, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_telefono`
--

CREATE TABLE IF NOT EXISTS `plan_telefono` (
  `id_tfno` varchar(20) NOT NULL,
  `id_plan` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_tfno`,`id_plan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan_telefono`
--

INSERT INTO `plan_telefono` (`id_tfno`, `id_plan`, `fecha`) VALUES
('02120983478', 7, '2014-03-05 01:03:43'),
('02121234567', 7, '2014-03-05 01:32:22'),
('02127652314', 1, '2014-03-05 01:30:01'),
('02129873456', 1, '2014-03-05 01:29:10'),
('02129873456', 5, '2014-03-05 01:27:16'),
('04123450976', 2, '2014-03-05 01:04:45'),
('04123450976', 3, '2014-03-05 01:32:55'),
('04147483647', 2, '2014-03-05 01:06:02'),
('04169856734', 2, '2014-03-05 00:30:32'),
('4124756630', 2, '2014-03-01 17:23:04'),
('4147483647', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sva`
--

CREATE TABLE IF NOT EXISTS `sva` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Cant_activaciones` int(11) NOT NULL,
  `Cant_desact` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sva`
--

INSERT INTO `sva` (`Id`, `Nombre`, `Cant_activaciones`, `Cant_desact`) VALUES
(1, 'Noches y fines', 2, 0),
(2, 'Escribe pegado', 1, 1),
(3, 'Llamadas internacionales', 0, 0),
(4, 'Habla pegado', 1, 0),
(5, 'Noches ilimitadas', 0, 0),
(6, 'Roaming internacional', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sva_telefono`
--

CREATE TABLE IF NOT EXISTS `sva_telefono` (
  `id_tfno` varchar(20) NOT NULL,
  `id_sva` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_tfno`,`id_sva`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sva_telefono`
--

INSERT INTO `sva_telefono` (`id_tfno`, `id_sva`, `fecha`) VALUES
('02121234567', 1, '2014-01-16'),
('02127652314', 4, '2014-03-04'),
('04124756630', 1, '2014-03-03'),
('04147483647', 2, '2014-02-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE IF NOT EXISTS `telefono` (
  `Numero` varchar(20) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Modelo` varchar(30) NOT NULL,
  `Fabricacion` year(4) NOT NULL,
  `Tipo` varchar(30) NOT NULL,
  PRIMARY KEY (`Numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`Numero`, `Marca`, `Modelo`, `Fabricacion`, `Tipo`) VALUES
('02120983478', 'Panasonic', 'Z20', 2014, 'Fija'),
('02121234567', 'Sony', 'KX-20', 2008, 'Fija'),
('02127652314', 'General Electric', 'M10', 2012, 'Fija'),
('02129873456', 'Samsung', 'X25', 2008, 'Fija'),
('04123450976', 'Iphone', '5c', 2013, 'celular'),
('04124756630', 'Blackberry', 'Curve 8520', 2008, 'celular'),
('04147483647', 'Nokia', 'X3-02', 2010, 'celular'),
('04169856734', 'Blackberry', 'Curve', 2010, 'celular');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

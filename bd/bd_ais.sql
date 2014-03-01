-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-03-2014 a las 17:26:52
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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
-- Volcar la base de datos para la tabla `llamada`
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
-- Volcar la base de datos para la tabla `llamada_telefono`
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
  PRIMARY KEY (`Id_plan`),
  UNIQUE KEY `Nombre` (`Nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `plan`
--

INSERT INTO `plan` (`Id_plan`, `Nombre`, `Tipo_plan`, `Tipo_tele`, `Precio`) VALUES
(1, 'Plan habla 200', 'normal', 'fija', 80),
(2, 'Plan habla 500', 'especial', 'celular', 20),
(3, 'Plan habla mas', 'normal', 'celular', 80);

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
-- Volcar la base de datos para la tabla `plan_telefono`
--

INSERT INTO `plan_telefono` (`id_tfno`, `id_plan`, `fecha`) VALUES
('2121234567', 1, '0000-00-00 00:00:00'),
('4124756630', 2, '2014-03-01 12:53:04'),
('4124756630', 3, '2014-03-01 12:36:01'),
('4147483647', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sva`
--

CREATE TABLE IF NOT EXISTS `sva` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `sva`
--

INSERT INTO `sva` (`Id`, `Nombre`) VALUES
(1, 'Noches y fines'),
(2, 'Escribe pegado');

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
-- Volcar la base de datos para la tabla `sva_telefono`
--

INSERT INTO `sva_telefono` (`id_tfno`, `id_sva`, `fecha`) VALUES
('2121234567', 1, '2014-01-16'),
('4147483647', 2, '2014-02-14');

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
-- Volcar la base de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`Numero`, `Marca`, `Modelo`, `Fabricacion`, `Tipo`) VALUES
('2121234567', 'Sony', 'KX-20', 2008, 'fija'),
('4124756630', 'Blackberry', 'Curve 8520', 2008, 'celular'),
('4147483647', 'Nokia', 'X3-02', 2010, 'celular');

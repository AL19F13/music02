-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2015 a las 21:01:51
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `music`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `clave_cancion` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `album` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `artista` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` int(4) NOT NULL,
  PRIMARY KEY (`clave_cancion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `songs`
--

INSERT INTO `songs` (`clave_cancion`, `nombre`, `album`, `artista`, `fecha`) VALUES
(1, 'i want to break free', 'the works', 'queen', 1974);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

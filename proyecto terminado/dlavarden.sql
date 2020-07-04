-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 23-06-2019 a las 23:56:34
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dlavarden`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `idcomentario` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `fecha` datetime(6) NOT NULL,
  PRIMARY KEY (`idcomentario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dlavarden`
--

DROP TABLE IF EXISTS `dlavarden`;
CREATE TABLE IF NOT EXISTS `dlavarden` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`nombre`,`idusuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dlavarden`
--

INSERT INTO `dlavarden` (`idusuario`, `nombre`, `email`, `password`) VALUES
(1, 'ayelen', 'ayeloter@gmail.com', '111'),
(2, 'ayelen', 'ayelina24@hotmail.com.ar', '111'),
(3, 'ayelen', 'ayelina24@hotmail.com.ar', ''),
(1, 'Pacha Lotero', 'lapachi@gmail.com', 'pachi123'),
(2, 'Pacha Lotero', 'lapachi@gmail.com', 'pachi123'),
(3, 'Pacha Lotero', 'lapachi@gmail.com', 'pachi123'),
(4, 'ayelen', 'ayelina24@hotmail.com.ar', 'ayelen'),
(1, 'toti', 'tottiandres@hotmail.es', 'rori');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

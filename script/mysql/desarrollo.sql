-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-04-2016 a las 20:32:07
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `desarrollo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diseno`
--

CREATE TABLE IF NOT EXISTS `diseno` (
  `empresa` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cantidad` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombres` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `enlaces` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipos` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo_menu` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `diseno`
--

INSERT INTO `diseno` (`empresa`, `cantidad`, `nombres`, `enlaces`, `tipos`, `tipo_menu`) VALUES
('software||#', '4', 'uno||dos||tres||cuatro', '#||#||#||#', '1', '1'),
(NULL, '4', 'nueve?cinco||seis||siete||ocho', '#||#||#||#', '2', '1'),
(NULL, '2', 'once||doce', '#||#', '1', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

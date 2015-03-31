-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-10-2014 a las 01:06:28
-- Versión del servidor: 5.5.37
-- Versión de PHP: 5.5.12-2+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `demo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `internet_shop`
--

CREATE TABLE IF NOT EXISTS `internet_shop` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(6) NOT NULL DEFAULT '0',
  `img` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `img` (`img`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `internet_shop`
--

INSERT INTO `internet_shop` (`id`, `id_categoria`, `img`, `name`, `description`, `price`) VALUES
(1, 1, 'iPod.png', 'iPod', 'The original and popular iPod.', 200),
(2, 2, 'iMac.png', 'iMac', 'The iMac computer.', 1200),
(3, 1, 'iPhone.png', 'iPhone', 'This is the new iPhone.', 400),
(4, 1, 'iPod-Shuffle.png', 'iPod Shuffle', 'The new iPod shuffle.', 49),
(5, 1, 'iPod-Nano.png', 'iPod Nano', 'The new iPod Nano.', 99),
(6, 2, 'Apple-TV.png', 'Apple TV', 'The new Apple TV. Buy it now!', 300);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

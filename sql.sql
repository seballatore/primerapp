-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-05-2022 a las 15:10:49
-- Versión del servidor: 10.5.12-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id18870367_inventario`
--
CREATE DATABASE IF NOT EXISTS `inventario` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `inventario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `nombre` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contacto` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sucursal` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mpls` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `enlace1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `enlace2` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ipmpls` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ipenlace1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ipenlace2` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `fw` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `fws` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ipfw` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sw` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sws` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ipsw` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ap` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `aps` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ipap` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`nombre`, `contacto`, `sucursal`, `mpls`, `enlace1`, `enlace2`, `ipmpls`, `ipenlace1`, `ipenlace2`, `fw`, `fws`, `ipfw`, `sw`, `sws`, `ipsw`, `ap`, `aps`, `ipap`) VALUES
('sebastian', '1122334455', 'CD-GARIN', 'TELECOM', 'FIBERCORP', 'METROTEL', '1.1.1.1', '2.2.2.2', '3.3.3.3', ' FORTI', ' fortiserial', ' 4.4.4.4', ' cisco', ' ciscoserial', ' 5.5.5.5', ' tplink', ' tplinkserial', ' 6.6.6.6'),
('JAVIER', '6677889900', 'DABRA-CENTRAL', 'METROTEL', 'FIBERCORP', 'MOVISTAR', '4.4.4.4', '5.5.5.5', '6.6.6.6', ' FORTI', ' FORTISERIAL2', ' 1.1.1.1', ' CISCO', ' CISCOSERIAL2', ' 2.2.2.2', ' TPLINK', ' TPLINKSERIAL2', ' 3.3.3.3'),
('juan perez', '99999999', 'CD-GARIN', 'telefonica', 'FIBERCORP', 'claro', '4.4.4.4', '5.5.5.5', '6.6.6.6', ' asd', ' FORTISERIAL2', ' 4.4.4.4', ' cisco', ' 888888', ' 5.5.5.5', ' tplink', ' 777777', ' 6.6.6.6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

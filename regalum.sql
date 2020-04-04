-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2018 a las 23:09:47
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `regalum`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `matricula` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apaterno` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `amaterno` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` char(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tele` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`matricula`, `apaterno`, `amaterno`, `nombre`, `email`, `tele`) VALUES
('1', 'F', 'E', 'E', '', ''),
('1411109493', 'CERNA', 'NAJERA', 'isaac', NULL, NULL),
('1411109894', 'Alexis', 'Vazquez', 'Najera', 'alez@hotmail.com', '72168328-011'),
('152237778|', 'Axel', 'Cerna', 'Najera', '', ''),
('2', '2', '3', '2', '', ''),
('3', '3', '3', '3', '', ''),
('4', '4', '4', '4', '', ''),
('5', '5', '5', '5', '', ''),
('6', '6', '6', '6', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`matricula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

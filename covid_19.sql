-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2020 a las 04:14:55
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `covid_19`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido1` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido2` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedula` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` datetime DEFAULT NULL,
  `fecha_infeccion` datetime NOT NULL,
  `foto` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre`, `apellido1`, `apellido2`, `cedula`, `fecha_nacimiento`, `fecha_infeccion`, `foto`) VALUES
(1, 'RAMON LEONARDO', 'FABIAN', 'ROMAN', '00117910042', '1986-09-20 00:00:00', '2020-06-15 00:00:00', 'http://173.249.49.169:88/api/test/foto/00117910042'),
(10, 'ISRAEL ANTONIO', 'DE LA CRUZ', 'ZAPATA', '00117660704', '1986-01-22 00:00:00', '2020-06-15 00:00:00', 'http://173.249.49.169:88/api/test/foto/00117660704'),
(17, 'ELIAS', 'ALCANTARA', 'PIÑA', '00118533835', '1989-10-20 00:00:00', '2020-06-15 00:00:00', 'http://173.249.49.169:88/api/test/foto/00118533835'),
(18, 'ALMA ELISA', 'PUELLO', 'INOA', '00118629385', '1988-10-19 00:00:00', '2020-06-15 00:00:00', 'http://173.249.49.169:88/api/test/foto/00118629385'),
(19, 'MARIANO ANTONIO', 'JAZMIN', 'ABREU', '40221692995', '1992-10-29 00:00:00', '2020-06-15 00:00:00', 'http://173.249.49.169:88/api/test/foto/40221692995'),
(25, 'ROSA JULIA', 'TURBI', 'LUCAS', '08200230467', '1984-06-29 00:00:00', '2020-06-16 00:00:00', 'http://173.249.49.169:88/api/test/foto/08200230467');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

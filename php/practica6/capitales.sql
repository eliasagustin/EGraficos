-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2021 a las 18:19:42
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `capitales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `Id` int(11) NOT NULL,
  `ciudad` text NOT NULL,
  `pais` text NOT NULL,
  `habitantes` mediumint(9) NOT NULL,
  `superficie` float NOT NULL,
  `tieneMetro` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`Id`, `ciudad`, `pais`, `habitantes`, `superficie`, `tieneMetro`) VALUES
(1, 'México D.F.', 'México', 555666, 23434.3, 1),
(2, 'Barcelona', 'España', 444333, 1111.11, 0),
(3, 'Buenos Aires', 'Argentina', 888111, 333.33, 1),
(4, 'Medellín', 'Colombia', 999222, 888.88, 0),
(5, 'Lima', 'Perú', 999111, 222.22, 0),
(6, 'Caracas', 'Venezuela', 111222, 111.11, 1),
(7, 'Santiago', 'Chile', 777666, 222.22, 1),
(8, 'rosario', 'Argentina', 12345, 456.456, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

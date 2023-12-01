-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2022 a las 05:49:57
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `saci`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anexos`
--

CREATE TABLE `anexos` (
  `id` int(11) NOT NULL,
  `municipio` varchar(500) NOT NULL,
  `cajas` varchar(500) NOT NULL,
  `carpetas` varchar(500) NOT NULL,
  `documento` varchar(500) NOT NULL,
  `anaquel` varchar(500) NOT NULL,
  `entrepano` varchar(500) NOT NULL,
  `anio` varchar(500) NOT NULL,
  `observaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `anexos`
--

INSERT INTO `anexos` (`id`, `municipio`, `cajas`, `carpetas`, `documento`, `anaquel`, `entrepano`, `anio`, `observaciones`) VALUES
(6, 'Candela', '5', 'asdas', 'Copia', 'dasa', 'asda', 'asda', 'das');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rci`
--

CREATE TABLE `rci` (
  `id` int(11) NOT NULL,
  `numcarpeta` varchar(50) NOT NULL,
  `nuc` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `detenido` varchar(50) NOT NULL,
  `nombre_indiciado` varchar(50) NOT NULL,
  `delito` varchar(50) NOT NULL,
  `nombre_victima` varchar(50) NOT NULL,
  `denunciante` varchar(50) NOT NULL,
  `orden_aprehencion` varchar(500) NOT NULL,
  `audiencia` varchar(50) NOT NULL,
  `vinculacion` varchar(500) NOT NULL,
  `novinculacion` varchar(500) NOT NULL,
  `inicio` date NOT NULL,
  `conclucion` date NOT NULL,
  `acusacion` varchar(500) NOT NULL,
  `audiencia_i` varchar(500) NOT NULL,
  `juicio` varchar(500) NOT NULL,
  `audiencia_s` varchar(500) NOT NULL,
  `observaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rci`
--

INSERT INTO `rci` (`id`, `numcarpeta`, `nuc`, `fecha`, `detenido`, `nombre_indiciado`, `delito`, `nombre_victima`, `denunciante`, `orden_aprehencion`, `audiencia`, `vinculacion`, `novinculacion`, `inicio`, `conclucion`, `acusacion`, `audiencia_i`, `juicio`, `audiencia_s`, `observaciones`) VALUES
(1, 'asdasd', 'asd', '2022-06-10', 'Original', 'asda', 'asda', 'asd', 'sda', 'Concedida', 'asd', 'SADAD', 'SDAD', '2022-06-11', '2022-06-03', 'asda', 'ASD', 'asdasd', 'asdas', 'fdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user`, `psw`) VALUES
('FEHC', '123'),
('usuario_1', '123'),
('usuario_2', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anexos`
--
ALTER TABLE `anexos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rci`
--
ALTER TABLE `rci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anexos`
--
ALTER TABLE `anexos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rci`
--
ALTER TABLE `rci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

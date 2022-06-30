-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-06-2022 a las 23:16:01
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ncl-001`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `nacimiento` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` text NOT NULL,
  `cedulaRepresentante` int(11) NOT NULL,
  `nombreRepresentante` varchar(255) NOT NULL,
  `apellidoRepresentante` varchar(255) NOT NULL,
  `telefonoRepresentante` int(11) NOT NULL,
  `canto` tinyint(1) NOT NULL,
  `piano` tinyint(1) NOT NULL,
  `cuatro` tinyint(1) NOT NULL,
  `flautaDulce` tinyint(1) NOT NULL,
  `mensualidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `cedula`, `nombre`, `apellido`, `nacimiento`, `telefono`, `direccion`, `cedulaRepresentante`, `nombreRepresentante`, `apellidoRepresentante`, `telefonoRepresentante`, `canto`, `piano`, `cuatro`, `flautaDulce`, `mensualidad`) VALUES
(12, 12, 'Félix', 'Campos', '2001-05-23', 1234, 'Yktan', 12345, 'Alejandro', 'Riera', 12345, 1, 1, 1, 0, 40),
(12341, 0, 'Oriana', 'Istúriz', '2001-05-23', 1234, 'Yktan', 12345, 'Gabriel', 'Riera', 12345, 1, 1, 1, 0, 5),
(28286521, 0, 'Mauricio ', 'Istúriz', '2001-05-23', 1511816, 'Urbanización Yucatán', 28286521, 'Alejandro', 'Riera', 1511111, 1, 1, 1, 1, 0),
(28286524, 1234, 'Mauricio', 'Istúriz', '2001-05-23', 1234, 'Yktan', 12345, 'Alejandro', 'Riera', 12345, 1, 1, 1, 0, 0),
(28286525, 1234, 'Mauricio', 'Istúriz', '2001-05-23', 1234, 'Yktan', 12345, 'Alejandro', 'Riera', 12345, 1, 1, 1, 0, 0),
(28286527, 1234, 'Mauricio', 'Istúriz', '2001-05-23', 1234, 'Yktan', 12345, 'Alejandro', 'Riera', 12345, 1, 1, 1, 0, 0),
(28286528, 1234, 'Richard', 'Piña', '2001-05-23', 1234, 'Yktan', 12345, 'Alejandro', 'Riera', 12345, 1, 1, 1, 1, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `nacimiento` date NOT NULL,
  `cedula` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` text NOT NULL,
  `salario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id`, `nombre`, `apellido`, `nacimiento`, `cedula`, `telefono`, `direccion`, `salario`) VALUES
(5, 'Carolina', 'Lara', '1974-05-11', 54321, 12345, 'Yucatán', 120),
(6, 'Jorge', 'Rojas', '1974-05-11', 54321, 12345, 'Yucatán', 0),
(7, 'Massiel', 'Rojas', '1974-05-11', 342, 12345, 'Yucatán', 0),
(8, 'Mayra', 'Riera', '1974-05-11', 54321, 12345, 'Yucatán', 0),
(9, 'Mauricio', 'Riera', '1974-05-11', 54321, 12345, 'Yucatán', 160);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `clave`) VALUES
(1, 'admin', 'admin'),
(3, 'asdf', 'asdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28286529;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

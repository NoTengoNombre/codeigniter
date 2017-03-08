-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2017 a las 20:18:19
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbddblog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(25) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Comentario` text NOT NULL,
  `Imagen` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`Id`, `Titulo`, `Fecha`, `Comentario`, `Imagen`) VALUES
(2501, 'mr robot', '2017-01-05 20:08:03', 'entrada nueva', 'mrl.jpg'),
(2502, 'mr robot', '2017-01-05 20:08:03', 'entrada nueva', 'mrl.jpg'),
(2503, 'Nueva entrada', '2017-01-05 20:09:31', 'Nueva entrada', '2.gif'),
(2504, 'Nueva entrada', '2017-01-05 20:09:31', 'Nueva entrada', '2.gif'),
(2505, 'Nueva Entrada', '2017-01-05 20:13:11', 'Datos de entrada nuevos', 'mr.gif'),
(2506, 'Nueva entrada 2', '2017-01-05 20:14:33', 'Nueva entrada 2', 'satcomp.gif'),
(2507, 'tra', '2017-01-05 20:15:41', 'tra', 'cargando.gif'),
(2508, 'eee', '2017-01-05 20:17:49', 'eewww', 'c1.gif'),
(2509, 'eee', '2017-01-05 20:17:49', 'eewww', 'c1.gif');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2510;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

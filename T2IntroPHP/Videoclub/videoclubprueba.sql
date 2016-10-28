-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2016 a las 21:06:11
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videoclubprueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actuan`
--

CREATE TABLE `actuan` (
  `cod_pelicula` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cod_persona` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `cod_pelicula` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `titulo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `genero` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pais` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `genero`, `pais`, `anio`) VALUES
('a1', 'El pianista', 'drama', 'EEUU', 1999),
('b2', 'WhoAmI', 'drama', 'Germany', 2004),
('d6', 'Xmen', 'accion', 'China', 2010),
('f7', 'Top Gun', 'Accion', 'China', 1982),
('g8', '1984', 'comedia', 'Inglaterra', 1984),
('j10', 'Pepe vente a Alemania', 'suspense', 'germany', 1959),
('k11', 'El gran dictador', 'drama', 'Inglaterra', 1940),
('k13', 'Furia Dragon', 'accion', 'Taiwan', 1976),
('k14', 'Viernes 13', 'terror', 'EEUU', 1979);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `cod_persona` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pais` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`cod_persona`, `nombre`, `apellidos`, `pais`) VALUES
('a3', 'Antonio', 'Guimenez', 'China'),
('bbb', 'Son', 'Goku', 'Japon'),
('p1', 'Paco', 'Perez', 'Noruega'),
('s1', 'Socrates', 'El sabio', 'Grecia'),
('z1', 'Zoe', 'Mendez', 'España');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` varchar(30) COLLATE ucs2_spanish_ci NOT NULL,
  `user` varchar(30) COLLATE ucs2_spanish_ci NOT NULL,
  `pass` varchar(30) COLLATE ucs2_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`) VALUES
('1', 'antonio', '123'),
('2', 'pepe', '123'),
('3', 'anonimo', '123'),
('4', 'nuevo', '123'),
('5', 'admin', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actuan`
--
ALTER TABLE `actuan`
  ADD PRIMARY KEY (`cod_pelicula`,`cod_persona`),
  ADD KEY `actuan_fk_2` (`cod_persona`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`cod_pelicula`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`cod_persona`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actuan`
--
ALTER TABLE `actuan`
  ADD CONSTRAINT `actuan_fk_1` FOREIGN KEY (`cod_pelicula`) REFERENCES `peliculas` (`cod_pelicula`),
  ADD CONSTRAINT `actuan_fk_2` FOREIGN KEY (`cod_persona`) REFERENCES `personas` (`cod_persona`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

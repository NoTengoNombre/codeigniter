-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2016 a las 17:52:53
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actuar`
--

CREATE TABLE `actuar` (
  `id_video` int(10) NOT NULL,
  `id_actores` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregar`
--

CREATE TABLE `agregar` (
  `id_comentarios` int(10) NOT NULL,
  `id_video` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='comentarios peliculas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentarios` int(10) NOT NULL,
  `texto` varchar(150) NOT NULL,
  `fecha` datetime NOT NULL,
  `votaciones` int(4) NOT NULL,
  `alerta` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contener`
--

CREATE TABLE `contener` (
  `id_comentarios` int(10) NOT NULL,
  `id_temporada` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='comentarios temporadas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dirigir`
--

CREATE TABLE `dirigir` (
  `id_video` int(10) NOT NULL,
  `id_actores` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id_paises` int(4) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_actores` int(10) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `fechaNacimiento` year(4) NOT NULL,
  `fechaFallecimiento` year(4) NOT NULL,
  `nacionalidad` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporadas`
--

CREATE TABLE `temporadas` (
  `id_temporada` int(10) NOT NULL,
  `n_temporada` int(5) NOT NULL,
  `duracion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `imagen_usuario` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `biografia` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tipo_usuario` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla de los usuarios que se registran en la aplicacion';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `fechaNacimiento`, `ciudad`, `genero`, `imagen_usuario`, `email`, `biografia`, `password`, `tipo_usuario`) VALUES
(1, 'asd', '1991-11-01', 'Almería', 'mujer', 'a', 'asd@gmail.com', 'biografia', 'asd', 1),
(2, 'pepe', '1993-11-04', 'Jaen', 'Hombre', '', 'pepe@gmail.com', 'Canta en la ducha', 'pepe', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id_video` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `duracion` varchar(10) NOT NULL,
  `estreno` year(4) NOT NULL,
  `sinopsis` varchar(50) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `tipo` int(5) NOT NULL,
  `formato` varchar(20) NOT NULL,
  `enlace` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentarios`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_actores`);

--
-- Indices de la tabla `temporadas`
--
ALTER TABLE `temporadas`
  ADD PRIMARY KEY (`id_temporada`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

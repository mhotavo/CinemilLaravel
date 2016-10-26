-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2016 a las 22:49:28
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cinemil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calidad`
--

CREATE TABLE `calidad` (
  `ID_CALIDAD` int(11) NOT NULL,
  `NOM_CALIDAD` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `calidad`
--

INSERT INTO `calidad` (`ID_CALIDAD`, `NOM_CALIDAD`) VALUES
(1, 'DVDrip'),
(2, 'WEBrip'),
(3, 'BRrip'),
(4, 'Cam'),
(5, 'TS-HQ'),
(6, 'DVD-Screener'),
(7, 'Blu-Ray'),
(8, 'WEB-DL'),
(9, 'R5'),
(10, 'R6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enlace`
--

CREATE TABLE `enlace` (
  `ID_ENLACE` int(10) UNSIGNED NOT NULL,
  `TIPO_ENLACE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ID_PELICULA` int(11) NOT NULL,
  `ID_SERVIDOR` int(11) NOT NULL,
  `ID_FUENTE` int(11) NOT NULL,
  `ENLACE` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuente`
--

CREATE TABLE `fuente` (
  `ID_FUENTE` int(11) NOT NULL,
  `NOM_FUENTE` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `fuente`
--

INSERT INTO `fuente` (`ID_FUENTE`, `NOM_FUENTE`) VALUES
(6, 'Cinecalidad.com'),
(2, 'Hackstore.net'),
(5, 'Inkapelis.com'),
(7, 'Intermoviez.org'),
(4, 'Maspeliculas.cc'),
(3, 'Mega-dvdrip.com'),
(1, 'Repelis.tv');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `ID_GENERO` int(11) NOT NULL,
  `NOM_GENERO` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`ID_GENERO`, `NOM_GENERO`) VALUES
(1, 'Acción'),
(2, 'Animación'),
(3, 'Documental'),
(4, 'Fantástico'),
(5, 'Infantil'),
(6, 'Musical'),
(7, 'Romance'),
(8, 'Zombies'),
(9, 'Terror'),
(10, 'Horror'),
(11, 'Suspenso'),
(12, 'Drama'),
(13, 'Deporte'),
(14, 'Comedia'),
(15, 'Ciencia Ficcion'),
(16, 'Aventura'),
(17, 'Anime'),
(18, '+18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `ID_IDIOMA` int(11) NOT NULL,
  `NOM_IDIOMA` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`ID_IDIOMA`, `NOM_IDIOMA`) VALUES
(1, 'Español'),
(2, 'Inglés ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_10_26_151152_add_calidad_table', 2),
(4, '2016_10_26_151450_add_enlace_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `ID_PAIS` int(11) NOT NULL,
  `NOM_PAIS` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`ID_PAIS`, `NOM_PAIS`) VALUES
(1, 'USA'),
(2, 'España'),
(3, 'Rusia'),
(4, 'Francia'),
(5, 'Argentina'),
(6, 'Colombia'),
(7, 'Italia'),
(8, 'Alemania');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `ID` int(11) NOT NULL,
  `TITULO_OFICIAL` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `TITULO_LATINO` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DIRECTOR` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `REPARTO` text COLLATE utf8_spanish_ci,
  `PRODUCTORA` int(11) NOT NULL,
  `SINOPSIS` text COLLATE utf8_spanish_ci NOT NULL,
  `GENERO` int(11) NOT NULL,
  `PAIS` int(11) NOT NULL,
  `DURACION` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_ESTRENO` date NOT NULL,
  `IDIOMA` int(11) NOT NULL,
  `SUBTITULOS` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CALIDAD` int(11) DEFAULT NULL,
  `PESO` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `RESOLUCION` int(11) DEFAULT NULL,
  `TRAILER` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `PORTADA` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `CAPTURAS` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CLASIFICACION` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `VALORACION` int(5) DEFAULT NULL,
  `FECHA_INGRESO` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`ID`, `TITULO_OFICIAL`, `TITULO_LATINO`, `DIRECTOR`, `REPARTO`, `PRODUCTORA`, `SINOPSIS`, `GENERO`, `PAIS`, `DURACION`, `FECHA_ESTRENO`, `IDIOMA`, `SUBTITULOS`, `CALIDAD`, `PESO`, `RESOLUCION`, `TRAILER`, `PORTADA`, `CAPTURAS`, `CLASIFICACION`, `VALORACION`, `FECHA_INGRESO`) VALUES
(1, 'Kung Fu Panda 3 (2016)', 'Kung Fu Panda 3 (2016)', 'Jennifer Yuh Nelson, Alessandr', 'reparto', 29, 'sinpsis', 3, 1, '95', '2016-01-26', 1, 'No', 6, '0', 0, 'https://youtu.be/hmRLBgMTaXA', 'http://www.elseptimoarte.net/carteles/kung_fu_panda_3_47907.jpg', '', 'Mayores de 12 años', 8, '2016-10-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productora`
--

CREATE TABLE `productora` (
  `ID_PRODUCTORA` int(11) NOT NULL,
  `NOM_PRODUCTORA` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `productora`
--

INSERT INTO `productora` (`ID_PRODUCTORA`, `NOM_PRODUCTORA`) VALUES
(1, 'Fox Entertainment Group'),
(2, 'Fox International Channels'),
(3, 'Películas de 20th Century Fox Home Entertainment'),
(4, 'Pixar'),
(5, 'Troma Entertainment'),
(6, 'Warner Bros'),
(7, '1492 Pictures'),
(8, 'Imagine Entertainment'),
(9, 'Rooster Teeth'),
(10, 'American International Pictures'),
(11, 'Legendary Entertainment'),
(12, 'Keystone Studios'),
(13, 'Sony Pictures Entertainment'),
(14, 'Syncopy Films'),
(15, '20th Century Fox'),
(16, 'Hollywood Pictures'),
(17, 'MTV Films'),
(18, 'Paramount Animation'),
(19, 'Paramount Pictures'),
(20, 'Paramount Vantage'),
(21, 'Plan B Entertainment'),
(22, 'Republic Pictures'),
(23, 'Walt Disney Pictures'),
(24, 'WWE Studios'),
(25, 'Universal Studios'),
(26, 'Touchstone Pictures'),
(27, 'New Line Cinema'),
(28, 'Touchtones Home Entretainment'),
(29, 'DreanWorks Pictures'),
(30, 'Columbia Pictures'),
(31, 'Universal Pictures');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resolucion`
--

CREATE TABLE `resolucion` (
  `ID_RESOLUCION` int(11) NOT NULL,
  `NOM_RESOLUCION` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `resolucion`
--

INSERT INTO `resolucion` (`ID_RESOLUCION`, `NOM_RESOLUCION`) VALUES
(1, '720p'),
(2, '1080p');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servidor`
--

CREATE TABLE `servidor` (
  `ID_SERVIDOR` int(11) NOT NULL,
  `NOM_SERVIDOR` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servidor`
--

INSERT INTO `servidor` (`ID_SERVIDOR`, `NOM_SERVIDOR`) VALUES
(1, 'Filecloud.io'),
(2, 'MEGA.nz'),
(3, '4Shared.com'),
(4, '1Fichier.com'),
(5, 'Uptobox.com'),
(6, 'MediaFire.com'),
(7, 'Openload.co'),
(8, 'Netu.Tv'),
(9, ' Nowvideo.sx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calidad`
--
ALTER TABLE `calidad`
  ADD PRIMARY KEY (`ID_CALIDAD`);

--
-- Indices de la tabla `enlace`
--
ALTER TABLE `enlace`
  ADD PRIMARY KEY (`ID_ENLACE`);

--
-- Indices de la tabla `fuente`
--
ALTER TABLE `fuente`
  ADD PRIMARY KEY (`ID_FUENTE`),
  ADD KEY `NOM_FUENTE` (`NOM_FUENTE`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`ID_GENERO`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`ID_IDIOMA`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`ID_PAIS`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PRODUCTORA` (`PRODUCTORA`,`GENERO`,`PAIS`,`IDIOMA`,`CALIDAD`,`RESOLUCION`),
  ADD KEY `FK_CATEGORIA` (`GENERO`),
  ADD KEY `FK_PAIS` (`PAIS`),
  ADD KEY `FK_IDIOMA` (`IDIOMA`),
  ADD KEY `FK_CALIDAD` (`CALIDAD`),
  ADD KEY `FK_RESOLUCION` (`RESOLUCION`);

--
-- Indices de la tabla `productora`
--
ALTER TABLE `productora`
  ADD PRIMARY KEY (`ID_PRODUCTORA`);

--
-- Indices de la tabla `resolucion`
--
ALTER TABLE `resolucion`
  ADD PRIMARY KEY (`ID_RESOLUCION`);

--
-- Indices de la tabla `servidor`
--
ALTER TABLE `servidor`
  ADD PRIMARY KEY (`ID_SERVIDOR`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calidad`
--
ALTER TABLE `calidad`
  MODIFY `ID_CALIDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `enlace`
--
ALTER TABLE `enlace`
  MODIFY `ID_ENLACE` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fuente`
--
ALTER TABLE `fuente`
  MODIFY `ID_FUENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `ID_GENERO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `ID_IDIOMA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `ID_PAIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `productora`
--
ALTER TABLE `productora`
  MODIFY `ID_PRODUCTORA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `resolucion`
--
ALTER TABLE `resolucion`
  MODIFY `ID_RESOLUCION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `servidor`
--
ALTER TABLE `servidor`
  MODIFY `ID_SERVIDOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD CONSTRAINT `FK_CALIDAD` FOREIGN KEY (`CALIDAD`) REFERENCES `calidad` (`ID_CALIDAD`),
  ADD CONSTRAINT `FK_CATEGORIA` FOREIGN KEY (`GENERO`) REFERENCES `genero` (`ID_GENERO`),
  ADD CONSTRAINT `FK_IDIOMA` FOREIGN KEY (`IDIOMA`) REFERENCES `idioma` (`ID_IDIOMA`),
  ADD CONSTRAINT `FK_PAIS` FOREIGN KEY (`PAIS`) REFERENCES `pais` (`ID_PAIS`),
  ADD CONSTRAINT `FK_PRODUCTORA` FOREIGN KEY (`PRODUCTORA`) REFERENCES `productora` (`ID_PRODUCTORA`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

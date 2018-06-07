-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2018 a las 13:02:12
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mykey`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cerrajero`
--

CREATE TABLE `cerrajero` (
  `idcerrajero` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `latitud` double DEFAULT NULL,
  `longitud` double DEFAULT NULL,
  `credencialesDeUsuarios_idcredencialesDeUsuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cerrajero`
--

INSERT INTO `cerrajero` (`idcerrajero`, `nombre`, `direccion`, `telefono`, `estado`, `latitud`, `longitud`, `credencialesDeUsuarios_idcredencialesDeUsuarios`) VALUES
(4, 'cerrajero1', 'calle1', 231213, 1, NULL, NULL, 65);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credencialesdeusuarios`
--

CREATE TABLE `credencialesdeusuarios` (
  `idcredencialesDeUsuarios` int(11) NOT NULL,
  `nombreDeUsuario` varchar(45) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `credencialesdeusuarios`
--

INSERT INTO `credencialesdeusuarios` (`idcredencialesDeUsuarios`, `nombreDeUsuario`, `correo`, `contrasena`) VALUES
(63, 'Admin', 'admin@mykey.com', 'admin'),
(64, 'Mike', 'mike@com', 'mike123'),
(65, 'cerrajero1', 'cerrajero1@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idservicios` int(11) NOT NULL,
  `nombreServicio` varchar(45) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` double NOT NULL,
  `calificacionUsuario` double NOT NULL,
  `calificacionCerrajero` double NOT NULL,
  `cerrajero_idcerrajero` int(11) NOT NULL,
  `cerrajero_credencialesDeUsuarios_idcredencialesDeUsuarios` int(11) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `Usuario_credencialesDeUsuarios_idcredencialesDeUsuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `suspendido` tinyint(1) NOT NULL,
  `latitud` double DEFAULT NULL,
  `longitud` double DEFAULT NULL,
  `credencialesDeUsuarios_idcredencialesDeUsuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Nombre`, `telefono`, `direccion`, `suspendido`, `latitud`, `longitud`, `credencialesDeUsuarios_idcredencialesDeUsuarios`) VALUES
(2, 'Admin', 1231231231, 'Admin', 1, NULL, NULL, 63),
(3, 'Mike', 343434, 'por aqui', 1, NULL, NULL, 64);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cerrajero`
--
ALTER TABLE `cerrajero`
  ADD PRIMARY KEY (`idcerrajero`,`credencialesDeUsuarios_idcredencialesDeUsuarios`),
  ADD KEY `fk_cerrajero_credencialesDeUsuarios1_idx` (`credencialesDeUsuarios_idcredencialesDeUsuarios`);

--
-- Indices de la tabla `credencialesdeusuarios`
--
ALTER TABLE `credencialesdeusuarios`
  ADD PRIMARY KEY (`idcredencialesDeUsuarios`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idservicios`,`cerrajero_idcerrajero`,`cerrajero_credencialesDeUsuarios_idcredencialesDeUsuarios`,`Usuario_idUsuario`,`Usuario_credencialesDeUsuarios_idcredencialesDeUsuarios`),
  ADD KEY `fk_servicios_cerrajero1_idx` (`cerrajero_idcerrajero`,`cerrajero_credencialesDeUsuarios_idcredencialesDeUsuarios`),
  ADD KEY `fk_servicios_Usuario1_idx` (`Usuario_idUsuario`,`Usuario_credencialesDeUsuarios_idcredencialesDeUsuarios`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`,`credencialesDeUsuarios_idcredencialesDeUsuarios`),
  ADD KEY `fk_Usuario_credencialesDeUsuarios_idx` (`credencialesDeUsuarios_idcredencialesDeUsuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cerrajero`
--
ALTER TABLE `cerrajero`
  MODIFY `idcerrajero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `credencialesdeusuarios`
--
ALTER TABLE `credencialesdeusuarios`
  MODIFY `idcredencialesDeUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cerrajero`
--
ALTER TABLE `cerrajero`
  ADD CONSTRAINT `fk_cerrajero_credencialesDeUsuarios1` FOREIGN KEY (`credencialesDeUsuarios_idcredencialesDeUsuarios`) REFERENCES `credencialesdeusuarios` (`idcredencialesDeUsuarios`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `fk_servicios_Usuario1` FOREIGN KEY (`Usuario_idUsuario`,`Usuario_credencialesDeUsuarios_idcredencialesDeUsuarios`) REFERENCES `usuario` (`idUsuario`, `credencialesDeUsuarios_idcredencialesDeUsuarios`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_servicios_cerrajero1` FOREIGN KEY (`cerrajero_idcerrajero`,`cerrajero_credencialesDeUsuarios_idcredencialesDeUsuarios`) REFERENCES `cerrajero` (`idcerrajero`, `credencialesDeUsuarios_idcredencialesDeUsuarios`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_credencialesDeUsuarios` FOREIGN KEY (`credencialesDeUsuarios_idcredencialesDeUsuarios`) REFERENCES `credencialesdeusuarios` (`idcredencialesDeUsuarios`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

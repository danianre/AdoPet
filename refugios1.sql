-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2023 a las 22:37:55
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `refugios1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacion`
--

CREATE TABLE `donacion` (
  `idDonacion` int(11) NOT NULL,
  `cantidad` float NOT NULL,
  `fecha_donacion` date NOT NULL,
  `mensaje` text DEFAULT NULL,
  `finalidad_uso` varchar(100) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL,
  `idRefugio` int(11) NOT NULL,
  `idTipo_donacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_mascota`
--

CREATE TABLE `genero_mascota` (
  `idGenero_m` int(11) NOT NULL,
  `tipo_genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_usuario`
--

CREATE TABLE `genero_usuario` (
  `idGenero_u` int(11) NOT NULL,
  `tipo_genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_mascota`
--

CREATE TABLE `historial_mascota` (
  `idHistorial_m` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `diagnóstico` text NOT NULL,
  `evento` tinyint(1) NOT NULL,
  `idMascota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idMascota` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha_est_nac` date DEFAULT NULL,
  `foto` varchar(50) NOT NULL,
  `fecha` date DEFAULT NULL,
  `genero_m` tinyint(1) NOT NULL,
  `estado_salud` tinyint(1) NOT NULL,
  `tipo_mascota` tinyint(1) NOT NULL,
  `idRefugio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idNoticia` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `fecha` date NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refugio`
--

CREATE TABLE `refugio` (
  `idRefugio` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_calle`
--

CREATE TABLE `reporte_calle` (
  `idReporte` int(11) NOT NULL,
  `reporte_mascota` text NOT NULL,
  `fecha_reporte` date NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_adopcion`
--

CREATE TABLE `solicitudes_adopcion` (
  `idSolicitud_a` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fecha` date NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idMascota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_donacion`
--

CREATE TABLE `solicitudes_donacion` (
  `idSolicitud_d` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fecha` date NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idRefugio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_dejar_mascota`
--

CREATE TABLE `solicitud_dejar_mascota` (
  `idSolicitud_dejar_m` int(11) NOT NULL,
  `motivo_solicitud` text NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fecha` date NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idRefugio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_animal`
--

CREATE TABLE `tipo_animal` (
  `idTipo_animal` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_donacion`
--

CREATE TABLE `tipo_donacion` (
  `idTipo_donacion` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `idTipo_usuario` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nac` date NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `genero` tinyint(1) NOT NULL,
  `tipo_usuario` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellido`, `fecha_nac`, `correo`, `password`, `fecha_creacion`, `cedula`, `telefono`, `direccion`, `foto`, `genero`, `tipo_usuario`) VALUES
(1, 'Juan', 'Perez', '1990-05-15', 'juan@gmail.com', 'clave123', '2023-09-29', '123456789', '123-456-7890', 'Calle Principal 123', NULL, 1, 1),
(2, 'María', 'López', '1985-08-20', 'maria@gmail.com', 'password456', '2023-09-30', '987654321', '987-654-3210', 'Avenida Central 456', NULL, 0, 0),
(3, 'Laura', 'González', '1992-04-18', 'laura@gmail.com', 'pass123', '2023-10-01', '123789456', '987-654-3210', 'Calle Libertad 789', NULL, 0, 1),
(4, 'Carlos', 'Martínez', '1980-09-05', 'carlos@gmail.com', 'clave456', '2023-10-02', '789123456', '123-987-6540', 'Avenida Central 456', NULL, 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`idDonacion`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idRefugio` (`idRefugio`),
  ADD KEY `idTipo_donacion` (`idTipo_donacion`);

--
-- Indices de la tabla `genero_mascota`
--
ALTER TABLE `genero_mascota`
  ADD PRIMARY KEY (`idGenero_m`);

--
-- Indices de la tabla `genero_usuario`
--
ALTER TABLE `genero_usuario`
  ADD PRIMARY KEY (`idGenero_u`);

--
-- Indices de la tabla `historial_mascota`
--
ALTER TABLE `historial_mascota`
  ADD PRIMARY KEY (`idHistorial_m`),
  ADD KEY `idMascota` (`idMascota`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idMascota`),
  ADD KEY `idRefugio` (`idRefugio`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticia`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `refugio`
--
ALTER TABLE `refugio`
  ADD PRIMARY KEY (`idRefugio`);

--
-- Indices de la tabla `reporte_calle`
--
ALTER TABLE `reporte_calle`
  ADD PRIMARY KEY (`idReporte`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `solicitudes_adopcion`
--
ALTER TABLE `solicitudes_adopcion`
  ADD PRIMARY KEY (`idSolicitud_a`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idMascota` (`idMascota`);

--
-- Indices de la tabla `solicitudes_donacion`
--
ALTER TABLE `solicitudes_donacion`
  ADD PRIMARY KEY (`idSolicitud_d`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idRefugio` (`idRefugio`);

--
-- Indices de la tabla `solicitud_dejar_mascota`
--
ALTER TABLE `solicitud_dejar_mascota`
  ADD PRIMARY KEY (`idSolicitud_dejar_m`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idRefugio` (`idRefugio`);

--
-- Indices de la tabla `tipo_animal`
--
ALTER TABLE `tipo_animal`
  ADD PRIMARY KEY (`idTipo_animal`);

--
-- Indices de la tabla `tipo_donacion`
--
ALTER TABLE `tipo_donacion`
  ADD PRIMARY KEY (`idTipo_donacion`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`idTipo_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `donacion`
--
ALTER TABLE `donacion`
  MODIFY `idDonacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero_mascota`
--
ALTER TABLE `genero_mascota`
  MODIFY `idGenero_m` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero_usuario`
--
ALTER TABLE `genero_usuario`
  MODIFY `idGenero_u` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historial_mascota`
--
ALTER TABLE `historial_mascota`
  MODIFY `idHistorial_m` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `refugio`
--
ALTER TABLE `refugio`
  MODIFY `idRefugio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reporte_calle`
--
ALTER TABLE `reporte_calle`
  MODIFY `idReporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitudes_adopcion`
--
ALTER TABLE `solicitudes_adopcion`
  MODIFY `idSolicitud_a` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitudes_donacion`
--
ALTER TABLE `solicitudes_donacion`
  MODIFY `idSolicitud_d` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitud_dejar_mascota`
--
ALTER TABLE `solicitud_dejar_mascota`
  MODIFY `idSolicitud_dejar_m` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_animal`
--
ALTER TABLE `tipo_animal`
  MODIFY `idTipo_animal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_donacion`
--
ALTER TABLE `tipo_donacion`
  MODIFY `idTipo_donacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `idTipo_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD CONSTRAINT `donacion_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `donacion_ibfk_2` FOREIGN KEY (`idRefugio`) REFERENCES `refugio` (`idRefugio`),
  ADD CONSTRAINT `donacion_ibfk_3` FOREIGN KEY (`idTipo_donacion`) REFERENCES `tipo_donacion` (`idTipo_donacion`);

--
-- Filtros para la tabla `historial_mascota`
--
ALTER TABLE `historial_mascota`
  ADD CONSTRAINT `historial_mascota_ibfk_1` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`idMascota`);

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`idRefugio`) REFERENCES `refugio` (`idRefugio`);

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `reporte_calle`
--
ALTER TABLE `reporte_calle`
  ADD CONSTRAINT `reporte_calle_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `solicitudes_adopcion`
--
ALTER TABLE `solicitudes_adopcion`
  ADD CONSTRAINT `solicitudes_adopcion_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `solicitudes_adopcion_ibfk_2` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`idMascota`);

--
-- Filtros para la tabla `solicitudes_donacion`
--
ALTER TABLE `solicitudes_donacion`
  ADD CONSTRAINT `solicitudes_donacion_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `solicitudes_donacion_ibfk_2` FOREIGN KEY (`idRefugio`) REFERENCES `refugio` (`idRefugio`);

--
-- Filtros para la tabla `solicitud_dejar_mascota`
--
ALTER TABLE `solicitud_dejar_mascota`
  ADD CONSTRAINT `solicitud_dejar_mascota_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `solicitud_dejar_mascota_ibfk_2` FOREIGN KEY (`idRefugio`) REFERENCES `refugio` (`idRefugio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

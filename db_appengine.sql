-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2018 a las 07:16:09
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_appengine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_empresa`
--

CREATE TABLE `tb_empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombreEmpresa` varchar(45) NOT NULL,
  `direccion_Empresa` varchar(45) NOT NULL,
  `Fecha_Fundacion` varchar(45) NOT NULL,
  `telefono_Empresa` varchar(45) NOT NULL,
  `correo_Empresa` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_empresa`
--

INSERT INTO `tb_empresa` (`id_empresa`, `nombreEmpresa`, `direccion_Empresa`, `Fecha_Fundacion`, `telefono_Empresa`, `correo_Empresa`) VALUES
(1, 'UMG', '', '08/15/2017', '74244455', 'umg@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_msj`
--

CREATE TABLE `tb_msj` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `mensaje` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_msj`
--

INSERT INTO `tb_msj` (`id`, `nombre`, `email`, `tema`, `mensaje`) VALUES
(1, 'kervins', 'kervins2011@hotmail.com', 'web', 'desarrollo web'),
(2, 'khjk', 'kervins1234567@gmail.com', 'kjkjkj', 'kjkjk'),
(3, 'kervins', 'userjefatura@gmail.com', 'Desarrollo web', 'Desarrollo websites'),
(4, 'Master', 'liverpolkervins2017@gmail.com', 'sites Web', 'Desarrolladores webs'),
(5, 'Litzy', 'litzy@gmail.com', 'Pruema Tema', 'desarrrolladores '),
(6, 'Isaac ', 'kervins1234567@gmail.com', 'Base de Datos', 'Desarrollo informatico'),
(7, 'carlos', 'carlos@gmail.com', 'Desarrollo web', 'App Web'),
(8, 'carlos', 'carlos@gmail.com', 'Desarrollo web', 'App Web'),
(9, 'Tulio', 'tulio@gmail.com', 'Desarrolador', 'web sites');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_personal`
--

CREATE TABLE `tb_personal` (
  `id_Personal` int(11) NOT NULL,
  `nombreCompleto` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `Fecha_Registro` varchar(25) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_personal`
--

INSERT INTO `tb_personal` (`id_Personal`, `nombreCompleto`, `direccion`, `Fecha_Registro`, `telefono`, `correo`) VALUES
(1, '', '', '0000-00-00 00:00:00', '', ''),
(2, 'kervins', 'San Jose Acatempa', '0000-00-00 00:00:00', '32173486', 'kervins2011@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_empresa`
--
ALTER TABLE `tb_empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `tb_msj`
--
ALTER TABLE `tb_msj`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_personal`
--
ALTER TABLE `tb_personal`
  ADD PRIMARY KEY (`id_Personal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_msj`
--
ALTER TABLE `tb_msj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tb_personal`
--
ALTER TABLE `tb_personal`
  MODIFY `id_Personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

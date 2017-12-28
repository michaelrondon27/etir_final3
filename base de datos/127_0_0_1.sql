-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2015 a las 17:21:32
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `etir`
--
CREATE DATABASE IF NOT EXISTS `etir` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `etir`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `usuario` varchar(50) DEFAULT NULL,
  `contraseña` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`usuario`, `contraseña`) VALUES
('richard', 123456);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `cedula` int(11) NOT NULL,
  `codigo` varchar(40) DEFAULT NULL,
  `sexo` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono1` varchar(100) NOT NULL,
  `telefono2` varchar(100) NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `departamento` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24698239 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`nombres`, `apellidos`, `cedula`, `codigo`, `sexo`, `correo`, `telefono1`, `telefono2`, `direccion`, `departamento`, `cargo`) VALUES
('jessica', 'cuevas', 121323, '232424', 'F', 'jesicacuevas@hotmail.com', '556726676', '656565', 'pertare', 'Docente', 'cordinador'),
('morelba', 'pardes', 9954344, '12345', 'F', 'moreparedes@gmail.com', '02128781034', '042625559552', '', 'Administrativo', 'secretaria1'),
('demetrio', 'saragoza', 12377711, '1023', 'M', 'redes2023@hotmail.com', '02394567890', '86876767676', 'BARRIO ISAIAS M', 'Administrativo', 'guerrero'),
('imer', 'martinez', 20129165, '2222', 'M', 'misterboo@hotmail.com', '981787', '767676', '', 'Directivo', 'sub director'),
('yoismer', 'perez', 20978759, '1023', 'M', 'xfrickjames@gmail.com', '02128781034', '04241785932', '', 'Administrativo', 'guerrero'),
('bradon', 'velasquez', 21377726, '12345', 'M', 'brandonvelasquez@gmail.com', '0212345679', '04241874426', 'manicomio', 'Directivo', 'sud director academi'),
('keyner', 'perez', 23456789, '12345', 'M', 'keynerperez@hotmail.com', '02128780928', '2239090', '', 'Administrativo', 'aseador'),
('gleidys', 'aristimuño', 24698238, '1023', 'F', 'gledys.cruz@hotmail.com', '2999388', '898989', '', '', 'administrativo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`contraseña`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`cedula`), ADD UNIQUE KEY `nombres` (`nombres`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `cedula` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24698239;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

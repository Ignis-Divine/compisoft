-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-07-2019 a las 18:58:46
-- Versión del servidor: 10.1.38-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `c8Estadisticas`
--
CREATE DATABASE IF NOT EXISTS `c8Estadisticas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `c8Estadisticas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Navegador`
--

CREATE TABLE `Navegador` (
  `SO` varchar(30) NOT NULL,
  `Hora_I` varchar(8) NOT NULL,
  `Fecha` date NOT NULL,
  `Pais` varchar(15) NOT NULL,
  `Ciudad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Navegador`
--

INSERT INTO `Navegador` (`SO`, `Hora_I`, `Fecha`, `Pais`, `Ciudad`) VALUES
('Debian', '06:50', '2018-12-11', 'Rusia', 'Stalingrado'),
('MacOSX', '08:40', '2018-12-12', 'Argentina', 'Buenos Aires'),
('Android', '08:52:39', '2018-11-26', 'Mexico', 'Querétaro City'),
('Android', '08:52:53', '2018-11-26', 'Mexico', 'Querétaro City'),
('Android', '08:55:05', '2018-11-26', 'Mexico', 'Querétaro City'),
('Windows XP', '10:30', '2018-12-11', 'España', 'Malaga'),
('Android', '13:57:43', '2018-11-28', 'Mexico', 'Querétaro City'),
('Windows 7', '14:12:01', '2018-11-28', 'Mexico', 'Querétaro City'),
('Windows 7', '14:12:16', '2018-11-28', 'Mexico', 'Querétaro City'),
('Windows 10', '14:26:15', '2018-11-28', 'Mexico', 'Querétaro City'),
('Windows 7', '14:29:06', '2018-11-27', 'Mexico', 'Querétaro City'),
('Windows 10', '14:36:22', '2018-11-28', 'Mexico', 'Querétaro City'),
('Windows 10', '14:36:56', '2018-11-27', 'Mexico', 'Querétaro City'),
('Android', '14:40:52', '2018-11-28', 'Mexico', 'Querétaro City'),
('Windows 8.1', '14:43:28', '2018-11-28', 'Mexico', 'Querétaro City'),
('Windows 7', '14:44:33', '2018-11-28', 'Germany', ''),
('Windows 7', '14:44:34', '2018-11-28', 'Germany', ''),
('Android', '15:19:43', '2018-11-27', 'Mexico', 'Querétaro City'),
('Android', '15:22:10', '2018-11-27', 'Mexico', 'Querétaro City'),
('Android', '15:23:19', '2018-11-22', 'Mexico', 'Querétaro City'),
('Fedora', '15:40', '2018-12-11', 'Bulgaria', 'X'),
('Android', '18:19:51', '2018-11-26', 'Mexico', 'Querétaro City'),
('Windows 7', '18:54:30', '2018-11-28', 'Germany', ''),
('Windows 7', '19:03:13', '2018-11-27', 'Mexico', 'Querétaro City'),
('Unknown OS Platform', '20:13:20', '2018-11-26', 'Mexico', 'Querétaro City'),
('Ubuntu', '21:04:38', '2018-11-22', 'Mexico', 'Querétaro City'),
('Android', '21:58:06', '2018-11-15', 'Mexico', 'Querétaro City'),
('Android', '22:31:25', '2018-11-27', 'Mexico', 'Querétaro City'),
('Windows 8', '23:28', '2018-12-11', 'Brasil', 'Rio de Janeiro'),
('Windows 10', '23:29:00', '2018-11-27', 'Mexico', 'Querétaro City'),
('Android 7', '8:50', '2018-12-11', 'Alemania', 'Heidelberg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Navegador`
--
ALTER TABLE `Navegador`
  ADD PRIMARY KEY (`Hora_I`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

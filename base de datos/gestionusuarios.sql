-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2021 a las 22:17:40
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestionusuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `login` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`login`, `password`, `email`, `rol`) VALUES
('Camilo Hernan', 'camilo123', 'camilo@gmail.com', 'cliente'),
('Carol Gabriela', 'gabriela123', 'gabriela@gmail.com', 'cliente'),
('Diana Vanesa Rodriguez', 'diana123', 'diana@gmail.com', 'cliente'),
('edynson muñoz jimenez', 'edynson123', 'edinsonmjim@unicauca.edu.co', 'administrador'),
('Hector Esteban Coran', 'hector123', 'hector@unicauca.edu.co', 'administrador'),
('Jorge Adrian Muñoz Velasco', 'jorge123', 'jorge123@unicauca.edu.co', 'jefe'),
('Laura Valentina', 'laura123', 'laura@gmail.com', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

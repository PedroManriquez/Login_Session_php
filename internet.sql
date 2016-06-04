-- phpMyAdmin SQL Dump
-- version 4.5.5.1deb2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-05-2016 a las 12:47:53
-- Versión del servidor: 5.6.28-1
-- Versión de PHP: 5.6.19-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `internet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `codigo_noticia` mediumint(9) NOT NULL,
  `rut_autor` varchar(13) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `detalle` longtext NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`codigo_noticia`, `rut_autor`, `titulo`, `detalle`, `imagen`) VALUES
(1, '19683667-7', 'Debian, Â¿Le temes a linux?', 'Debian es un sistema operativo (S.O.) libre, para su computadora. El sistema operativo es el conjunto de programas bÃ¡sicos y utilidades que hacen que funcione su computadora.  Debian ofrece mÃ¡s que un S.O. puro; viene con 43000 paquetes, programas precompilados distribuidos en un formato que hace mÃ¡s fÃ¡cil la instalaciÃ³n en su computadora.', 'http://3.bp.blogspot.com/_lHhBNe-XAsw/TFyR4LZ_ObI/AAAAAAAAAHY/W5KWCAaXho8/s1600/debian.jpeg'),
(3, '19683667-7', 'Flokzu, BPM', 'Todas las organizaciones funcionan mediante procesos de negocio. Presentar una propuesta a un cliente, contratar un nuevo empleado, realizar una venta, brindar soporte, proponer ideas y mejorasâ€¦ todos son procesos. Las empresas de gran tamaÃ±o han identificado mÃ©todos para optimizar y centralizar esos procesos, utilizando por ejemplo la disciplina GestiÃ³n de Procesos de Negocio (BPM).  Pero los software que permiten modelar y automatizar procesos suelen ser demasiado costosos, complejos para PyMEs y equipos de trabajo y requieren de servicios de consultorÃ­a adicional. Por eso las PyMEs suelen conformarse con mÃ©todos alternativos menos eficientes: intercambio de mails, planillas Excel, presentaciones, etc.  Flokzu pretende solucionar esta problemÃ¡tica ofreciendo una herramienta colaborativa especialmente diseÃ±ada para PyMEs y pequeÃ±as organizaciones que quieran automatizar sus procesos de negocio de forma sencilla y econÃ³mica. No requiere de instalaciones ni conocimiento tÃ©cnico. Cualquiera puede ingresar a la web, acceder gratis a la versiÃ³n beta y crear un proceso de negocio en minutos. Este video te mostrarÃ¡ brevemente cÃ³mo crear tu primer proceso en Flokzu. Para que la configuraciÃ³n de tus procesos sea aÃºn mÃ¡s fÃ¡cil, ofrecemos una librerÃ­a de procesos predefinidos que podrÃ¡s importar en instantes.', 'https://pbs.twimg.com/profile_images/620588083940081665/wpKTT6Y3.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `rut` varchar(13) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `privilegio` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`rut`, `pass`, `privilegio`) VALUES
('18683667-7', '1234', 0),
('19683667-7', '2345', 1),
('20683667-7', '3456', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`codigo_noticia`),
  ADD KEY `FK_usuario_noticia` (`rut_autor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`rut`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `codigo_noticia` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `FK_usuario_noticia` FOREIGN KEY (`rut_autor`) REFERENCES `usuario` (`rut`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

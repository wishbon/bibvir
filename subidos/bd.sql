-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-10-2012 a las 09:21:39
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `biblio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_archivos`
--

CREATE TABLE IF NOT EXISTS `sf_archivos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `archivo_id` varchar(50) NOT NULL,
  `archivo_binario` blob NOT NULL,
  `archivo_nombre` varchar(255) NOT NULL DEFAULT '',
  `archivo_peso` varchar(15) NOT NULL DEFAULT '',
  `archivo_tipo` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `sf_archivos`
--

INSERT INTO `sf_archivos` (`id`, `archivo_id`, `archivo_binario`, `archivo_nombre`, `archivo_peso`, `archivo_tipo`) VALUES
(1, 'gbm8', '', 'Proceso de Ingesta.pdf', '853333', 'pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_colecciones`
--

CREATE TABLE IF NOT EXISTS `sf_colecciones` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `coleccion_id` varchar(200) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `logo` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_coleccion` (`coleccion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `sf_colecciones`
--

INSERT INTO `sf_colecciones` (`id`, `coleccion_id`, `nombre`, `descripcion`, `logo`) VALUES
(8, 'wwyp', 'Historia natural', 'desr', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_configuraciones`
--

CREATE TABLE IF NOT EXISTS `sf_configuraciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plantilla` varchar(200) NOT NULL,
  `idioma` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `sf_configuraciones`
--

INSERT INTO `sf_configuraciones` (`id`, `plantilla`, `idioma`) VALUES
(1, '1CanVi-Lib', 'es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_documentos`
--

CREATE TABLE IF NOT EXISTS `sf_documentos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `documento_id` varchar(50) NOT NULL,
  `subido_por` varchar(500) NOT NULL,
  `colec_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `sf_documentos`
--

INSERT INTO `sf_documentos` (`id`, `documento_id`, `subido_por`, `colec_id`) VALUES
(1, '341k', 'sfredes', 'wwyp'),
(2, 'gbm8', 'sfredes', 'wwyp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_elementos`
--

CREATE TABLE IF NOT EXISTS `sf_elementos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `elemento_id` varchar(500) NOT NULL,
  `elemento` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `sf_elementos`
--

INSERT INTO `sf_elementos` (`id`, `elemento_id`, `elemento`) VALUES
(1, '1', 'dc.title'),
(2, '2', 'dc.creator'),
(3, '3', 'dc.description'),
(4, '4', 'dc.publisher'),
(5, '5', 'dc.contributor'),
(6, '6', 'dc.date'),
(7, '7', 'dc.type'),
(8, '8', 'dc.format'),
(9, '9', 'dc.coverage'),
(10, '10', 'dc.source'),
(11, '11', 'dc.language'),
(12, '12', 'dc.relation'),
(13, '13', 'dc.identifier'),
(14, '14', 'dc.rights'),
(15, '15', 'dc.subject'),
(16, '16', 'subido_por'),
(17, '17', 'colec_id');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_elementos_cont`
--

CREATE TABLE IF NOT EXISTS `sf_elementos_cont` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `documento_id` varchar(500) NOT NULL,
  `coleccion_id` varchar(5000) NOT NULL,
  `id_elemento` varchar(500) NOT NULL,
  `elemento_cont` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `sf_elementos_cont`
--

INSERT INTO `sf_elementos_cont` (`id`, `documento_id`, `coleccion_id`, `id_elemento`, `elemento_cont`) VALUES
(1, '341k', 'wwyp', '1', 'Nuevo Documento'),
(2, '341k', 'wwyp', '3', 'Resumen del documento Resumen del documento Resumen del documento Resumen del documento Resumen del documento Resumen del documento Resumen del documento Resumen del documento Resumen del documento Resumen del documento '),
(3, '341k', 'wwyp', '7', 'Seleccionar...'),
(4, '341k', 'wwyp', '8', ''),
(5, '341k', 'wwyp', '15', 'clave 1'),
(6, '341k', 'wwyp', '15', 'clave 2'),
(7, 'gbm8', 'wwyp', '1', 'Lertr edlsu'),
(8, 'gbm8', 'wwyp', '2', 'Sergio Fredes'),
(9, 'gbm8', 'wwyp', '7', 'Libro'),
(10, 'gbm8', 'wwyp', '8', 'DOC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_noticias`
--

CREATE TABLE IF NOT EXISTS `sf_noticias` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `contenido` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_usuarios`
--

CREATE TABLE IF NOT EXISTS `sf_usuarios` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  `alias` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `tipo` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

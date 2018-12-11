-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2018 a las 09:10:07
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `job`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `idofertas` int(11) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `personaContacto` varchar(45) DEFAULT NULL,
  `telefonoContacto` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `poblacion` varchar(45) DEFAULT NULL,
  `codigoPostal` varchar(5) DEFAULT NULL,
  `provincia` char(2) DEFAULT NULL,
  `estadoOferta` int(1) DEFAULT NULL,
  `fechaCreacion` date DEFAULT NULL,
  `FechaConfirmacion` date DEFAULT NULL,
  `psicologo` char(1) DEFAULT NULL,
  `candidato` varchar(45) NOT NULL,
  `anotaciones` varchar(240) NOT NULL,
  `ofertascol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`idofertas`, `descripcion`, `personaContacto`, `telefonoContacto`, `email`, `direccion`, `poblacion`, `codigoPostal`, `provincia`, `estadoOferta`, `fechaCreacion`, `FechaConfirmacion`, `psicologo`, `candidato`, `anotaciones`, `ofertascol`) VALUES
(2, 'Oferta de prueba 1º', 'Alvaro Redondo', 616444997, 'alvaro@alvaro.es', 'C/Virgen del rocio Nº10', 'Gibraleon', '21500', '21', 3, '2018-10-26', '2020-10-28', '0', '', '', NULL),
(3, 'oferta2', 'Pedro manuel', 616444997, 'arq@asd.es', 'C/Perico de los palotes', 'Gibraleon', '21333', '25', 0, '2018-11-05', '2020-11-22', '0', '', '', NULL),
(4, 'Barrendero', 'German Palomares', 618661002, 'ayunt@cnseje.es', 'Plaza Libertad', 'La Rioja', '18955', '26', 0, '2018-11-05', '2018-12-28', 'a', '', '', NULL),
(5, 'Oferta nº2 prueba', 'Federico Sanchez', 999876512, 'defsa@ssaa.es', 'Poligono nave 3', 'Jaen', '35501', '23', 1, '2018-11-06', '2018-12-12', '1', 'Manolo', 'Tiene coche propio, disponibilidad inmediata e Ingles nivel B2', NULL),
(6, 'Prueba de oferta', 'Gonzalo', 782015522, 'asdas@sadsd.es', 'C/Alfonso VII', 'Huelva', '21050', '21', 1, '2018-11-09', '2018-12-09', '1', '', '', NULL),
(7, 'Web DEV', 'Alfredo', 753951456, 'asp@asp.es', 'C/saco', 'Roca sierra', '50053', '10', 1, '2018-11-17', '2018-11-25', '1', '', '', NULL),
(8, 'Deloitte DEVS', 'Cristobal', 12121212, 'rrhh@deloitte.es', 'Torre Sevilla', 'Sevilla', '35001', '41', 1, '2018-11-19', '2018-12-22', 'P', '', '', NULL),
(9, 'Senior PHP DEV', 'Arthur', 356882142, 'porvir@mail.com', 'C/Mackney', 'Cork', '05082', '05', 2, '2018-11-20', '2019-07-16', 'P', '', '', NULL),
(10, 'Soldador', 'Angel Barroso', 755336288, 'copinsa@copinsa.com', 'Poligono Alonso el sabio', 'San Lucas ', '00258', '11', 0, '2018-11-20', '2020-01-22', '2', '', '', NULL),
(14, 'aldfjhvbadlv', 'ascascasc', 123456789, 'hbvah@havb.es', 'uablvb', 'laijhbsc', '12455', '03', 1, '2018-11-29', '2020-01-20', '', '', '', NULL),
(15, 'asc', 'ascascasc', 123456789, 'hbvah@havb.es', 'uablvb', 'ascasc', '12455', '03', 0, '2018-11-29', '2020-01-20', '', '', '', NULL),
(16, 'aldfjhvbadlv', 'iahsbcljhsdbv', 123456789, 'hbvah@havb.es', 'uablvb', 'ascasca', '12455', '03', 0, '2018-11-29', '2020-01-20', '', '', '', NULL),
(17, 'uytre', 'yttreg', 789456123, 'sdfgh@dfgd.es', 'dafgadfg', 'asdfas', '12345', '06', 1, '2018-11-30', '2022-12-12', 'a', 'asda', 'aasgaerg', NULL),
(21, 'Mozo ', 'Alfredo', 555444333, 'alvaro@alvaro.es', 'C/zapato sucio', 'lepe', '55555', '33', 1, '2018-12-07', '2019-12-30', 'a', '', '', NULL),
(23, 'Camarero', 'Fernando', 987543211, 'asdas@dasda.es', 'c/asdqwe', '21', '12354', '21', 0, '2018-12-07', '2020-10-30', 'a', '', '', NULL),
(31, 'Tecnico', 'Samuel', 888333444, 'qweqwe@qweqwe.es', 'C/zapato sucio', 'lepe', '55555', '33', 0, '2018-12-08', '2019-12-18', 'a', '', '', NULL),
(32, 'aaaaa', 'aaaa', 888333444, 'qweqwe@qweqwe.es', 'C/zapato sucio', '33', '55555', '33', 0, '2018-12-08', '2019-12-30', 'a', '', '', NULL);

--
-- Disparadores `ofertas`
--
DELIMITER $$
CREATE TRIGGER `ofertas_BEFORE_INSERT` BEFORE INSERT ON `ofertas` FOR EACH ROW BEGIN
	set new.fechaCreacion=now();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comunidadesautonomas`
--

CREATE TABLE `tbl_comunidadesautonomas` (
  `id` tinyint(4) NOT NULL DEFAULT '0',
  `nombre` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Afiliados de alta';

--
-- Volcado de datos para la tabla `tbl_comunidadesautonomas`
--

INSERT INTO `tbl_comunidadesautonomas` (`id`, `nombre`) VALUES
(1, 'Andalucía'),
(2, 'Aragón'),
(3, 'Asturias (Principado de)'),
(4, 'Balears (IIles)'),
(5, 'Canarias'),
(6, 'Cantabria'),
(8, 'Castilla y León'),
(7, 'Castilla-La Mancha'),
(9, 'Cataluña'),
(18, 'Ceuta'),
(10, 'Comunidad Valenciana'),
(11, 'Extremadura'),
(12, 'Galicia'),
(13, 'Madrid (Comunidad de)'),
(19, 'Melilla'),
(14, 'Murcia (Región de)'),
(15, 'Navarra (Comunidad Foral de)'),
(16, 'País Vasco'),
(17, 'Rioja (La)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_provincias`
--

CREATE TABLE `tbl_provincias` (
  `cod` char(2) NOT NULL DEFAULT '00' COMMENT 'Código de la provincia de dos digitos',
  `nombre` varchar(50) NOT NULL DEFAULT '' COMMENT 'Nombre de la provincia',
  `comunidad_id` tinyint(4) NOT NULL COMMENT 'Código de la comunidad a la que pertenece'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Provincias de españa; 99 para seleccionar a Nacional';

--
-- Volcado de datos para la tabla `tbl_provincias`
--

INSERT INTO `tbl_provincias` (`cod`, `nombre`, `comunidad_id`) VALUES
('01', 'Alava', 16),
('02', 'Albacete', 7),
('03', 'Alicante', 10),
('04', 'Almera', 1),
('05', 'Avila', 8),
('06', 'Badajoz', 11),
('07', 'Balears (Illes)', 4),
('08', 'Barcelona', 9),
('09', 'Burgos', 8),
('10', 'Cáceres', 11),
('11', 'Cádiz', 1),
('12', 'Castellón', 10),
('13', 'Ciudad Real', 7),
('14', 'Córdoba', 1),
('15', 'Coruña (A)', 12),
('16', 'Cuenca', 7),
('17', 'Girona', 9),
('18', 'Granada', 1),
('19', 'Guadalajara', 7),
('20', 'Guipzcoa', 16),
('21', 'Huelva', 1),
('22', 'Huesca', 2),
('23', 'Jaén', 1),
('24', 'León', 8),
('25', 'Lleida', 9),
('26', 'Rioja (La)', 17),
('27', 'Lugo', 12),
('28', 'Madrid', 13),
('29', 'Málaga', 1),
('30', 'Murcia', 14),
('31', 'Navarra', 15),
('32', 'Ourense', 12),
('33', 'Asturias', 3),
('34', 'Palencia', 8),
('35', 'Palmas (Las)', 5),
('36', 'Pontevedra', 12),
('37', 'Salamanca', 8),
('38', 'Santa Cruz de Tenerife', 5),
('39', 'Cantabria', 6),
('40', 'Segovia', 8),
('41', 'Sevilla', 1),
('42', 'Soria', 8),
('43', 'Tarragona', 9),
('44', 'Teruel', 2),
('45', 'Toledo', 7),
('46', 'Valencia', 10),
('47', 'Valladolid', 8),
('48', 'Vizcaya', 16),
('49', 'Zamora', 8),
('50', 'Zaragoza', 2),
('51', 'Ceuta', 18),
('52', 'Melilla', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `userName` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `typeAccount` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `userName`, `pass`, `typeAccount`) VALUES
(1, 'admin', 'admin', 0),
(3, 'aaa', 'aaa', 0),
(6, 'Ioana', 'aaa', 1),
(7, 'bbb', 'bbb', 1),
(11, 'Jose', 'abc', 1),
(12, 'Victor', 'bbb', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`idofertas`),
  ADD KEY `provincia_idx` (`provincia`),
  ADD KEY `psicologo_idx` (`psicologo`);

--
-- Indices de la tabla `tbl_comunidadesautonomas`
--
ALTER TABLE `tbl_comunidadesautonomas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `tbl_provincias`
--
ALTER TABLE `tbl_provincias`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `FK_ComunidadAutonomaProv` (`comunidad_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `idofertas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `provincia` FOREIGN KEY (`provincia`) REFERENCES `tbl_provincias` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

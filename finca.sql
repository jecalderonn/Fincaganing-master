-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2019 a las 14:15:29
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `finca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `codigo` varchar(6) NOT NULL,
  `fechanac` date NOT NULL,
  `fechasac` date DEFAULT NULL,
  `raza` int(30) NOT NULL,
  `valor` int(11) NOT NULL,
  `estado` int(10) NOT NULL,
  `corral` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`id`, `codigo`, `fechanac`, `fechasac`, `raza`, `valor`, `estado`, `corral`) VALUES
(1, 'VACA1', '2018-02-12', '2019-03-12', 1, 1, 3, 1),
(2, 'VACA2', '2017-03-13', '2019-05-10', 6, 4, 2, 2),
(3, 'VACA3', '2018-12-18', NULL, 2, 2, 1, 1),
(4, 'VACA4', '2019-02-02', NULL, 4, 1, 3, 6),
(5, 'VACA5', '2019-02-03', NULL, 3, 4, 2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animalproduccion`
--

CREATE TABLE `animalproduccion` (
  `id` int(11) NOT NULL,
  `especimen` int(11) NOT NULL,
  `producido` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corral`
--

CREATE TABLE `corral` (
  `id` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `extension` varchar(10) NOT NULL,
  `ubicacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `corral`
--

INSERT INTO `corral` (`id`, `codigo`, `extension`, `ubicacion`) VALUES
(1, 'CORRAL1', '2000M2', 'LOTE1NORTE'),
(2, 'CORRAL2', '2000M2', 'LOTE1SUR'),
(6, 'CORRAL3', '2000M2', 'LOTE1OCCIDENTE'),
(7, 'CORRAL4', '2000M2', 'LOTE1ORIENTE'),
(8, 'CORRAL5', '3000M2', 'LOTE1CENTRO'),
(9, 'CORRAL6', '2500M2', 'LOTE2NORTE'),
(10, 'CORRAL7', '3000M2', 'LOTE2SUR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `descripcion`) VALUES
(1, 'Produccion Lechera'),
(2, 'Produccion Carne'),
(3, 'Crianza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impuesto`
--

CREATE TABLE `impuesto` (
  `id` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `impuesto`
--

INSERT INTO `impuesto` (`id`, `valor`) VALUES
(1, 16),
(2, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `cargo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `fechanac` date NOT NULL,
  `corral` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `cargo`, `nombre`, `cedula`, `telefono`, `fechanac`, `corral`) VALUES
(1, 1, 'Camilo Hernandez', '108909348', '302302392332', '1999-02-13', NULL),
(2, 2, 'Camilo Hernandez', '1023012584', '3203410603', '1996-03-13', 1),
(3, 3, 'Yohan Calvo', '1093123456', '3101113456', '1997-12-13', 1),
(4, 2, 'Juan Marin', '1090234567', '3002345678', '1999-08-12', 9),
(5, 2, 'Pepito Perez', '1078123456', '3001235678', '1994-12-12', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razas`
--

CREATE TABLE `razas` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `razas`
--

INSERT INTO `razas` (`id`, `descripcion`) VALUES
(1, 'Beefmaster'),
(2, 'Charolais'),
(3, 'Simmental'),
(4, 'Angus'),
(5, 'Brangus'),
(6, 'Santa Gertrudis'),
(7, 'Hereford');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Capataz'),
(3, 'Cuidador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_prod`
--

CREATE TABLE `tipo_prod` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valor`
--

CREATE TABLE `valor` (
  `id` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `valor`
--

INSERT INTO `valor` (`id`, `precio`) VALUES
(1, 2000000),
(2, 2500000),
(3, 3000000),
(4, 3500000),
(5, 4000000),
(6, 4500000),
(7, 5000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `vendedor` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `iva` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `raza` (`raza`),
  ADD KEY `estado` (`estado`),
  ADD KEY `valor` (`valor`),
  ADD KEY `corral` (`corral`);

--
-- Indices de la tabla `animalproduccion`
--
ALTER TABLE `animalproduccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `especimen` (`especimen`),
  ADD KEY `producido` (`producido`);

--
-- Indices de la tabla `corral`
--
ALTER TABLE `corral`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `impuesto`
--
ALTER TABLE `impuesto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD KEY `cargo` (`cargo`),
  ADD KEY `corral` (`corral`);

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `razas`
--
ALTER TABLE `razas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_prod`
--
ALTER TABLE `tipo_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `valor`
--
ALTER TABLE `valor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto` (`producto`),
  ADD KEY `vendedor` (`vendedor`),
  ADD KEY `iva` (`iva`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `animalproduccion`
--
ALTER TABLE `animalproduccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `corral`
--
ALTER TABLE `corral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `impuesto`
--
ALTER TABLE `impuesto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `razas`
--
ALTER TABLE `razas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_prod`
--
ALTER TABLE `tipo_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `valor`
--
ALTER TABLE `valor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`raza`) REFERENCES `razas` (`id`),
  ADD CONSTRAINT `animal_ibfk_2` FOREIGN KEY (`estado`) REFERENCES `estados` (`id`),
  ADD CONSTRAINT `animal_ibfk_3` FOREIGN KEY (`valor`) REFERENCES `valor` (`id`),
  ADD CONSTRAINT `animal_ibfk_4` FOREIGN KEY (`corral`) REFERENCES `corral` (`id`);

--
-- Filtros para la tabla `animalproduccion`
--
ALTER TABLE `animalproduccion`
  ADD CONSTRAINT `animalproduccion_ibfk_1` FOREIGN KEY (`especimen`) REFERENCES `animal` (`id`),
  ADD CONSTRAINT `animalproduccion_ibfk_2` FOREIGN KEY (`producido`) REFERENCES `produccion` (`id`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`cargo`) REFERENCES `rol` (`id`),
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`corral`) REFERENCES `corral` (`id`);

--
-- Filtros para la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD CONSTRAINT `produccion_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo_prod` (`id`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`producto`) REFERENCES `animal` (`id`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`vendedor`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`iva`) REFERENCES `impuesto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

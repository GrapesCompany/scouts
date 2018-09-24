-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2018 a las 00:42:06
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_scouts`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dirigente`
--

CREATE TABLE `dirigente` (
  `CEDULA_TRA` varchar(10) NOT NULL,
  `ID_GRUPO_SCOUT` int(11) NOT NULL,
  `UNIDAD` varchar(20) NOT NULL,
  `CARGO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dirigente`
--

INSERT INTO `dirigente` (`CEDULA_TRA`, `ID_GRUPO_SCOUT`, `UNIDAD`, `CARGO`) VALUES
('1711779825', 1, '1', 'Dirigente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `ID_GRUPO_SCOUT` int(11) NOT NULL,
  `NOMBRE_GRUPO` varchar(200) DEFAULT NULL,
  `NUMERO_INTEGRANTES` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`ID_GRUPO_SCOUT`, `NOMBRE_GRUPO`, `NUMERO_INTEGRANTES`) VALUES
(1, 'Comando Tiburon', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_grupo`
--

CREATE TABLE `jefe_grupo` (
  `CEDULA_TRA` varchar(10) NOT NULL,
  `FECHA_ELECCION` date NOT NULL,
  `INFORMACION` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jefe_grupo`
--

INSERT INTO `jefe_grupo` (`CEDULA_TRA`, `FECHA_ELECCION`, `INFORMACION`) VALUES
('1719181941', '2018-08-01', 'Es un jefe de grupo super chevere');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `CEDULA_TRA` varchar(10) NOT NULL,
  `NOMBRE_TRA` varchar(100) NOT NULL,
  `APELLIDO_TRA` varchar(100) NOT NULL,
  `TELEFONO` varchar(10) NOT NULL,
  `FECH_NAC_TRA` date NOT NULL,
  `EDAD_TRA` int(11) NOT NULL,
  `GENERO_TRA` char(50) NOT NULL,
  `EMAIL_TRA` varchar(100) NOT NULL,
  `ESTADO_TRA` int(11) NOT NULL,
  `CONTRASENA_TRA` char(100) NOT NULL,
  `DIRECCION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`CEDULA_TRA`, `NOMBRE_TRA`, `APELLIDO_TRA`, `TELEFONO`, `FECH_NAC_TRA`, `EDAD_TRA`, `GENERO_TRA`, `EMAIL_TRA`, `ESTADO_TRA`, `CONTRASENA_TRA`, `DIRECCION`) VALUES
('1711779825', 'Juan Dirigente', 'Dirigente Apellido', '0997912534', '1995-03-22', 33, 'Masculino', 'asdasd@adasdas.com', 0, '123456', 'Quition'),
('1719181941', 'Danny Alexander', 'Usca Farinango', '0997912534', '1995-03-22', 23, 'Masculino', 'danny.usca@espoch.edu.ec', 0, '123456', 'Av. Lizarzaburu y Pasaje Azuay');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `CEDULA` varchar(10) NOT NULL,
  `ID_GRUPO_SCOUT` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDO` varchar(50) NOT NULL,
  `SEXO_SCO` varchar(10) NOT NULL,
  `FECHA_NAC` date NOT NULL,
  `DIRECCION` varchar(100) NOT NULL,
  `TELEFONO` varchar(10) NOT NULL,
  `EDAD` int(11) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `UNIDAD` varchar(20) NOT NULL,
  `CED_REPRE` varchar(10) NOT NULL,
  `NOMBRE_REPRE` varchar(50) NOT NULL,
  `DIRECCION_REPRE` varchar(100) NOT NULL,
  `TELEFONO_REPRE` varchar(10) NOT NULL,
  `ESTADO` int(11) NOT NULL,
  `CONTRASENA` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`CEDULA`, `ID_GRUPO_SCOUT`, `NOMBRE`, `APELLIDO`, `SEXO_SCO`, `FECHA_NAC`, `DIRECCION`, `TELEFONO`, `EDAD`, `EMAIL`, `UNIDAD`, `CED_REPRE`, `NOMBRE_REPRE`, `DIRECCION_REPRE`, `TELEFONO_REPRE`, `ESTADO`, `CONTRASENA`) VALUES
('1719181933', 1, 'Fernanda', 'Farinango', 'Femenino', '1995-03-22', 'Quito', '0997912534', 23, 'fernanda@gmail.com', '1', '1719181941', 'Danny', 'Av. Fsdfsdf', '0997915234', 0, '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dirigente`
--
ALTER TABLE `dirigente`
  ADD PRIMARY KEY (`CEDULA_TRA`),
  ADD KEY `FK_GRUPO_DIRIGENTE` (`ID_GRUPO_SCOUT`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`ID_GRUPO_SCOUT`);

--
-- Indices de la tabla `jefe_grupo`
--
ALTER TABLE `jefe_grupo`
  ADD PRIMARY KEY (`CEDULA_TRA`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`CEDULA_TRA`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CEDULA`),
  ADD KEY `FK_GRUPO_USUARIO` (`ID_GRUPO_SCOUT`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `ID_GRUPO_SCOUT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dirigente`
--
ALTER TABLE `dirigente`
  ADD CONSTRAINT `FK_GRUPO_DIRIGENTE` FOREIGN KEY (`ID_GRUPO_SCOUT`) REFERENCES `grupo` (`ID_GRUPO_SCOUT`),
  ADD CONSTRAINT `FK_TRABAJADOR_DIRIGENTE2` FOREIGN KEY (`CEDULA_TRA`) REFERENCES `trabajador` (`CEDULA_TRA`);

--
-- Filtros para la tabla `jefe_grupo`
--
ALTER TABLE `jefe_grupo`
  ADD CONSTRAINT `FK_TRABAJADOR_JEFE2` FOREIGN KEY (`CEDULA_TRA`) REFERENCES `trabajador` (`CEDULA_TRA`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_GRUPO_USUARIO` FOREIGN KEY (`ID_GRUPO_SCOUT`) REFERENCES `grupo` (`ID_GRUPO_SCOUT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

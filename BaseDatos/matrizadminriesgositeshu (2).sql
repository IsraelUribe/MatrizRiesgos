-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2023 a las 19:33:10
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
-- Base de datos: `matrizadminriesgositeshu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas_encargados`
--

CREATE TABLE `areas_encargados` (
  `id_areaservidores` int(11) NOT NULL,
  `area` varchar(200) NOT NULL,
  `servidor` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `areas_encargados`
--

INSERT INTO `areas_encargados` (`id_areaservidores`, `area`, `servidor`) VALUES
(1, 'Dirección General', 'Mtra. Imelda Pérez Espinoza'),
(2, 'Dirección Académica', 'Mtro. Juan José Molina Montufar'),
(3, 'Subdirección Académica', 'Dr. Octavio Guerrero Andrade'),
(4, 'Dirección de Planeación y Vinculación', 'Mtra. Ada Lucía Prieto Pérez'),
(5, 'Subdirección de Investigación y Posgrado', 'Dr. Miguel Ángel Espíndola Lugo'),
(6, 'Subdirección de Vinculación y Servicios Externos ', 'L.C.C. Francisco Uriel Camacho Aranda'),
(7, 'Subdirección de Planeación y Evaluación', 'L.C.P. Juana Hernández López'),
(8, 'Subdirección de Administración y Finanzas', 'L.C. Roberto González Vargas'),
(9, 'División de Ingeniería en Sistemas Computacionales', 'Lic. Marcos Mendoza Hernández'),
(10, 'División de Ingeniería Mecatrónica', 'Mtro. Sergio Quintanar García'),
(11, 'División de Ingeniería Industrial', 'Ing. Germán Olvera Jiménez'),
(12, 'División de Ingeniería en Administración', 'Lic. María Antonieta Miranda Rodríguez'),
(13, 'División de Arquitectura', 'Arq. Juan Manuel Sánchez González'),
(14, 'División de Ingeniería en Innovación Agrícola Sustentable', 'Dr. Octavio Guerrero Andrade'),
(15, 'División de Gastronomía', 'Lic. Circe Jeannett Ayala Luis'),
(16, 'División de Ingeniería en Gestión Empresarial', 'Mtra. Jimena Escamilla Mendoza'),
(17, 'División de Ingeniería en Energías Renovables ', 'Dra. Martha Magdalena Ortiz Palacios'),
(18, 'Departamento de Desarrollo Académico ', 'Mtra. María del Rocío López Bravo'),
(19, 'Departamento de Servicios Escolares', 'Lic. María de la Luz González Anaya'),
(20, 'Departamento de Programación y Presupuesto', 'Ing. Carolina Bastida Santana'),
(21, 'Departamento de Estadística y Calidad', 'Ing. Jackelin Bautista Chávez'),
(22, 'Departamento de Promoción Cultural, Deportiva y Extensión', 'L.C.C. Pamela García Contreras'),
(23, 'Departamento de Mantenimiento', 'Lic. Juan Cruz Martínez'),
(24, 'Departamento de Recursos Financieros', 'L.C. Aurelia García Gómez'),
(25, 'Departamento de Recursos Humanos', 'Mtro. Rafael Cruz Bautista'),
(26, 'Departamento de Ciencias Básicas', 'Dra. Nancy Ramos Lora'),
(27, 'Departamento de Promoción y Desarrollo Estudiantil', 'Ing. Daniel López Vizuet'),
(28, 'Departamento de Comunicación Social y Difusión', 'L.C.C. Sara Dilian Sánchez Camacho'),
(29, 'Departamento de Convenio y Gestión de Proyecto', 'Lic. María Angélica Cruz Camargo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avance`
--

CREATE TABLE `avance` (
  `id_avance` int(11) NOT NULL,
  `id_ptar` int(11) NOT NULL,
  `actividades_realizadas` text NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `unidad_medida` varchar(150) NOT NULL,
  `meta_absoluta_total` int(11) NOT NULL,
  `meta_prog_enero` int(11) NOT NULL,
  `meta_prog_febrero` int(11) NOT NULL,
  `meta_prog_marzo` int(11) NOT NULL,
  `meta_prog_abril` int(11) NOT NULL,
  `meta_prog_mayo` int(11) NOT NULL,
  `meta_prog_junio` int(11) NOT NULL,
  `meta_prog_julio` int(11) NOT NULL,
  `meta_prog_agosto` int(11) NOT NULL,
  `meta_prog_septiembre` int(11) NOT NULL,
  `meta_prog_octubre` int(11) NOT NULL,
  `meta_prog_noviembre` int(11) NOT NULL,
  `meta_prog_diciembre` int(11) NOT NULL,
  `meta_alcanzada_enero` int(11) NOT NULL,
  `meta_alcanzada_febrero` int(11) NOT NULL,
  `meta_alcanzada_marzo` int(11) NOT NULL,
  `meta_alcanzada_abril` int(11) NOT NULL,
  `meta_alcanzada_mayo` int(11) NOT NULL,
  `meta_alcanzada_junio` int(11) NOT NULL,
  `meta_alcanzada_julio` int(11) NOT NULL,
  `meta_alcanzada_agosto` int(11) NOT NULL,
  `meta_alcanzada_septiembre` int(11) NOT NULL,
  `meta_alcanzada_octubre` int(11) NOT NULL,
  `meta_alcanzada_noviembre` int(11) NOT NULL,
  `meta_alcanzada_diciembre` int(11) NOT NULL,
  `trimestre1_prog` int(11) NOT NULL,
  `trimestre1_alcanzada` int(11) NOT NULL,
  `treimestre1_porcentaje` float NOT NULL,
  `trimestre2_prog` int(11) NOT NULL,
  `trimestre2_alcanzada` int(11) NOT NULL,
  `trimestre2_porcentaje` float NOT NULL,
  `trimestre3_prog` int(11) NOT NULL,
  `trimestre3_alcanzada` int(11) NOT NULL,
  `trimestre3_porcentaje` int(11) NOT NULL,
  `trimestre4_prog` int(11) NOT NULL,
  `trimestre4_alcanzada` int(11) NOT NULL,
  `trimestre4_porcentaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controles`
--

CREATE TABLE `controles` (
  `num_control` float NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `tipo` varchar(80) NOT NULL,
  `es_documentado` varchar(4) NOT NULL,
  `es_formalizado` varchar(4) NOT NULL,
  `se_aplica` varchar(4) NOT NULL,
  `es_afectivo` varchar(4) NOT NULL,
  `determinacion_control` varchar(30) NOT NULL,
  `num_factor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factores`
--

CREATE TABLE `factores` (
  `num_factor` float NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `clasificacion` varchar(60) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `num_riesgo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factores`
--

INSERT INTO `factores` (`num_factor`, `descripcion`, `clasificacion`, `tipo`, `num_riesgo`) VALUES
(1, 'prueba', 'Humano', 'Interno', '2022_1'),
(2, '', 'Técnico - Administrativo', 'Externo', '2022_1'),
(3, 'nans', 'TICs', 'Interno', '2022_1'),
(10, 'Prueba', 'Financiero - Presupuestal', 'Interno', '2022_1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ptar`
--

CREATE TABLE `ptar` (
  `id_part` int(11) NOT NULL,
  `num_riesgo` varchar(15) NOT NULL,
  `unidad_administrativa` varchar(100) NOT NULL,
  `responsable` varchar(300) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `medios_verificacion` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgos`
--

CREATE TABLE `riesgos` (
  `num_riesgo` varchar(15) NOT NULL,
  `unidad_administrativa` varchar(100) NOT NULL,
  `alineacion_seleccion` varchar(50) NOT NULL,
  `alineacion_descripcion` varchar(50) NOT NULL,
  `riesgo` varchar(80) NOT NULL,
  `nivel` varchar(40) NOT NULL,
  `clasificacion_riesgo_seleccion` varchar(80) NOT NULL,
  `clasificacion_riesgo_otro` varchar(80) DEFAULT NULL,
  `efecto_riesgo` varchar(120) NOT NULL,
  `valoracion_inicial_grado_impacto` varchar(11) NOT NULL,
  `valoracion_inicial_prob_ocurrencia` varchar(11) NOT NULL,
  `valoracion_inical_cuadrante` varchar(3) NOT NULL,
  `tiene_controles` varchar(2) NOT NULL,
  `riesgo_controlado_suficientemente` varchar(2) NOT NULL,
  `valoracion_final_grado_impacto` int(11) NOT NULL,
  `valoracion_final_prob_ocurrencia` int(11) NOT NULL,
  `ubicacion_cuadrante` varchar(3) NOT NULL,
  `estrategia_usar` varchar(90) NOT NULL,
  `descripcion_acciones` varchar(500) NOT NULL,
  `anio_matriz` varchar(4) NOT NULL,
  `email_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `riesgos`
--

INSERT INTO `riesgos` (`num_riesgo`, `unidad_administrativa`, `alineacion_seleccion`, `alineacion_descripcion`, `riesgo`, `nivel`, `clasificacion_riesgo_seleccion`, `clasificacion_riesgo_otro`, `efecto_riesgo`, `valoracion_inicial_grado_impacto`, `valoracion_inicial_prob_ocurrencia`, `valoracion_inical_cuadrante`, `tiene_controles`, `riesgo_controlado_suficientemente`, `valoracion_final_grado_impacto`, `valoracion_final_prob_ocurrencia`, `ubicacion_cuadrante`, `estrategia_usar`, `descripcion_acciones`, `anio_matriz`, `email_user`) VALUES
('', 'Dirección General', '1', '', '', '1', '1', '', '', '1', '1', '', 'SI', '', 1, 1, '', '1', '', '2023', 'admin@admin'),
('2022_1', 'Planeación', 'Estrategia', 'Prueba', 'Error', 'Directivo', 'Sustantivo', NULL, 'Prueba', '8', '7', 'I', 'Si', 'No', 9, 5, 'I', 'Prueba', 'Prueba', '2023', 'admin@admin'),
('2022_2', 'Dirección General', '1', '', '', '1', '1', '', '', '1', '1', '', 'SI', '', 1, 1, '', '1', '', '2023', 'a19021478@iteshu.edu.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `email_user` varchar(80) NOT NULL,
  `password_user` varchar(30) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`email_user`, `password_user`, `nombre`) VALUES
('a19021478@iteshu.edu.mx', '123', 'Israel Zuñiga Uribe'),
('admin@admin', '123', 'Prueba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas_encargados`
--
ALTER TABLE `areas_encargados`
  ADD PRIMARY KEY (`id_areaservidores`);

--
-- Indices de la tabla `avance`
--
ALTER TABLE `avance`
  ADD PRIMARY KEY (`id_avance`),
  ADD KEY `id_ptar` (`id_ptar`);

--
-- Indices de la tabla `controles`
--
ALTER TABLE `controles`
  ADD PRIMARY KEY (`num_control`),
  ADD KEY `num_factor` (`num_factor`);

--
-- Indices de la tabla `factores`
--
ALTER TABLE `factores`
  ADD PRIMARY KEY (`num_factor`),
  ADD KEY `num_riesgo` (`num_riesgo`);

--
-- Indices de la tabla `ptar`
--
ALTER TABLE `ptar`
  ADD PRIMARY KEY (`id_part`),
  ADD KEY `num_riesgo` (`num_riesgo`);

--
-- Indices de la tabla `riesgos`
--
ALTER TABLE `riesgos`
  ADD PRIMARY KEY (`num_riesgo`),
  ADD KEY `userName` (`email_user`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas_encargados`
--
ALTER TABLE `areas_encargados`
  MODIFY `id_areaservidores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `avance`
--
ALTER TABLE `avance`
  ADD CONSTRAINT `avance_ibfk_1` FOREIGN KEY (`id_ptar`) REFERENCES `ptar` (`id_part`);

--
-- Filtros para la tabla `controles`
--
ALTER TABLE `controles`
  ADD CONSTRAINT `controles_ibfk_1` FOREIGN KEY (`num_factor`) REFERENCES `factores` (`num_factor`);

--
-- Filtros para la tabla `factores`
--
ALTER TABLE `factores`
  ADD CONSTRAINT `factores_ibfk_1` FOREIGN KEY (`num_riesgo`) REFERENCES `riesgos` (`num_riesgo`);

--
-- Filtros para la tabla `ptar`
--
ALTER TABLE `ptar`
  ADD CONSTRAINT `ptar_ibfk_1` FOREIGN KEY (`num_riesgo`) REFERENCES `riesgos` (`num_riesgo`);

--
-- Filtros para la tabla `riesgos`
--
ALTER TABLE `riesgos`
  ADD CONSTRAINT `riesgos_ibfk_3` FOREIGN KEY (`email_user`) REFERENCES `usuarios` (`email_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

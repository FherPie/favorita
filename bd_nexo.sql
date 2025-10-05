-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2025 a las 00:41:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_nexo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eje`
--

CREATE TABLE `eje` (
  `id_eje` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fundacion`
--

CREATE TABLE `fundacion` (
  `id_fundacion` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_eje` int(11) DEFAULT NULL,
  `nombre_ceo` varchar(150) DEFAULT NULL,
  `correo_ceo` varchar(100) DEFAULT NULL,
  `celular_ceo` varchar(20) DEFAULT NULL,
  `nombre_comunicacion` varchar(150) DEFAULT NULL,
  `correo_comunicacion` varchar(100) DEFAULT NULL,
  `celular_comunicacion` varchar(20) DEFAULT NULL,
  `enfoque_accion` text DEFAULT NULL,
  `descripcion_historia` text DEFAULT NULL,
  `acciones_programas` text DEFAULT NULL,
  `rrss` varchar(255) DEFAULT NULL,
  `pagina_web` varchar(255) DEFAULT NULL,
  `hitos_principales` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id_proyecto` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `presupuesto` decimal(12,2) DEFAULT NULL,
  `id_fundacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_fundacion`
--

CREATE TABLE `proyecto_fundacion` (
  `id_proyecto` int(11) NOT NULL,
  `id_fundacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rambiente`
--

CREATE TABLE `rambiente` (
  `id_ambiente` int(11) NOT NULL,
  `id_reporte` int(11) NOT NULL,
  `anio` year(4) NOT NULL,
  `mes` tinyint(4) NOT NULL CHECK (`mes` between 1 and 12),
  `recuperacion_residuos_tons` decimal(12,2) DEFAULT NULL,
  `reduccion_co2_kg` decimal(12,2) DEFAULT NULL,
  `personal_fundacion` int(11) DEFAULT NULL,
  `hitos_mensuales` text DEFAULT NULL,
  `nombre_hito` varchar(255) DEFAULT NULL,
  `lugar` varchar(255) DEFAULT NULL,
  `descripcion_hito` text DEFAULT NULL,
  `link_material` text DEFAULT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reducacion`
--

CREATE TABLE `reducacion` (
  `id_educacion` int(11) NOT NULL,
  `id_reporte` int(11) NOT NULL,
  `anio` year(4) NOT NULL,
  `mes` tinyint(4) NOT NULL CHECK (`mes` between 1 and 12),
  `meta_planteada_2025` decimal(12,2) DEFAULT NULL,
  `fundaciones_capacitadas` int(11) DEFAULT NULL,
  `personas_otras_fundaciones` int(11) DEFAULT NULL,
  `personas_ff_capacitadas` int(11) DEFAULT NULL,
  `total_personas_capacitadas` int(11) DEFAULT NULL,
  `porcentaje_permanencia` decimal(5,2) DEFAULT NULL,
  `personal_labora` int(11) DEFAULT NULL,
  `acciones_destadas` text DEFAULT NULL,
  `mujeres_apoyadas_ff` int(11) DEFAULT NULL,
  `indicador_impacto` text DEFAULT NULL,
  `indicador_prevencion` text DEFAULT NULL,
  `hitos_mensuales` text DEFAULT NULL,
  `nombre_hito` varchar(255) DEFAULT NULL,
  `lugar` varchar(255) DEFAULT NULL,
  `descripcion_hito` text DEFAULT NULL,
  `link_material` text DEFAULT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remprendimiento`
--

CREATE TABLE `remprendimiento` (
  `id_emprendimiento` int(11) NOT NULL,
  `id_reporte` int(11) NOT NULL,
  `anio` year(4) NOT NULL,
  `mes` tinyint(4) NOT NULL CHECK (`mes` between 1 and 12),
  `personas_capacitadas` int(11) DEFAULT NULL,
  `mujeres_vulnerables_apoyadas` int(11) DEFAULT NULL,
  `acciones_destacadas` text DEFAULT NULL,
  `hitos_mensuales` text DEFAULT NULL,
  `nombre_hito` varchar(255) DEFAULT NULL,
  `lugar` varchar(255) DEFAULT NULL,
  `descripcion_hito` text DEFAULT NULL,
  `link_material` text DEFAULT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id_reporte` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_eje` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `anio` year(4) NOT NULL,
  `mes` tinyint(4) NOT NULL CHECK (`mes` between 1 and 12),
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requidad_genero`
--

CREATE TABLE `requidad_genero` (
  `id_genero` int(11) NOT NULL,
  `id_reporte` int(11) NOT NULL,
  `anio` year(4) NOT NULL,
  `mes` tinyint(4) NOT NULL CHECK (`mes` between 1 and 12),
  `mujeres_vulnerables_apoyadas` int(11) DEFAULT NULL,
  `hitos_mensuales` text DEFAULT NULL,
  `nombre_hito` varchar(255) DEFAULT NULL,
  `lugar` varchar(255) DEFAULT NULL,
  `descripcion_hito` text DEFAULT NULL,
  `link_material` text DEFAULT NULL,
  `indicador_impacto` text DEFAULT NULL,
  `indicador_prevencion` text DEFAULT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rnutricion`
--

CREATE TABLE `rnutricion` (
  `id_nutricion` int(11) NOT NULL,
  `id_reporte` int(11) NOT NULL,
  `anio` year(4) NOT NULL,
  `mes` tinyint(4) NOT NULL CHECK (`mes` between 1 and 12),
  `alimentos_aptos_kg` decimal(12,2) DEFAULT NULL,
  `alimentos_consumo_inmediato_kg` decimal(12,2) DEFAULT NULL,
  `produccion_kg` decimal(12,2) DEFAULT NULL,
  `total_kilos_mes` decimal(12,2) DEFAULT NULL,
  `total_raciones_343g` int(11) DEFAULT NULL,
  `recuperacion_alimentos` decimal(5,2) DEFAULT NULL,
  `instituciones_beneficiadas` int(11) DEFAULT NULL,
  `personas_alimentadas` int(11) DEFAULT NULL,
  `personal_fundacion` int(11) DEFAULT NULL,
  `mujeres_apoyadas` int(11) DEFAULT NULL,
  `co2_evitado_tn` decimal(10,2) DEFAULT NULL,
  `acciones_destacadas` text DEFAULT NULL,
  `hitos_mensuales` text DEFAULT NULL,
  `nombre_hito` varchar(255) DEFAULT NULL,
  `lugar` varchar(255) DEFAULT NULL,
  `descripcion_hito` text DEFAULT NULL,
  `link_material` text DEFAULT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eje`
--
ALTER TABLE `eje`
  ADD PRIMARY KEY (`id_eje`);

--
-- Indices de la tabla `fundacion`
--
ALTER TABLE `fundacion`
  ADD PRIMARY KEY (`id_fundacion`),
  ADD KEY `id_eje` (`id_eje`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `id_fundacion` (`id_fundacion`);

--
-- Indices de la tabla `proyecto_fundacion`
--
ALTER TABLE `proyecto_fundacion`
  ADD PRIMARY KEY (`id_proyecto`,`id_fundacion`),
  ADD KEY `id_fundacion` (`id_fundacion`);

--
-- Indices de la tabla `rambiente`
--
ALTER TABLE `rambiente`
  ADD PRIMARY KEY (`id_ambiente`),
  ADD KEY `fk_ambiente_reporte` (`id_reporte`);

--
-- Indices de la tabla `reducacion`
--
ALTER TABLE `reducacion`
  ADD PRIMARY KEY (`id_educacion`),
  ADD KEY `fk_educacion_reporte` (`id_reporte`);

--
-- Indices de la tabla `remprendimiento`
--
ALTER TABLE `remprendimiento`
  ADD PRIMARY KEY (`id_emprendimiento`),
  ADD KEY `fk_emprendimiento_reporte` (`id_reporte`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id_reporte`),
  ADD KEY `fk_reporte_proyecto` (`id_proyecto`),
  ADD KEY `fk_reporte_eje` (`id_eje`);

--
-- Indices de la tabla `requidad_genero`
--
ALTER TABLE `requidad_genero`
  ADD PRIMARY KEY (`id_genero`),
  ADD KEY `fk_genero_reporte` (`id_reporte`);

--
-- Indices de la tabla `rnutricion`
--
ALTER TABLE `rnutricion`
  ADD PRIMARY KEY (`id_nutricion`),
  ADD KEY `fk_nutricion_reporte` (`id_reporte`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eje`
--
ALTER TABLE `eje`
  MODIFY `id_eje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fundacion`
--
ALTER TABLE `fundacion`
  MODIFY `id_fundacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rambiente`
--
ALTER TABLE `rambiente`
  MODIFY `id_ambiente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reducacion`
--
ALTER TABLE `reducacion`
  MODIFY `id_educacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `remprendimiento`
--
ALTER TABLE `remprendimiento`
  MODIFY `id_emprendimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `requidad_genero`
--
ALTER TABLE `requidad_genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rnutricion`
--
ALTER TABLE `rnutricion`
  MODIFY `id_nutricion` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fundacion`
--
ALTER TABLE `fundacion`
  ADD CONSTRAINT `fundacion_ibfk_1` FOREIGN KEY (`id_eje`) REFERENCES `eje` (`id_eje`);

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`id_fundacion`) REFERENCES `fundacion` (`id_fundacion`);

--
-- Filtros para la tabla `proyecto_fundacion`
--
ALTER TABLE `proyecto_fundacion`
  ADD CONSTRAINT `proyecto_fundacion_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`),
  ADD CONSTRAINT `proyecto_fundacion_ibfk_2` FOREIGN KEY (`id_fundacion`) REFERENCES `fundacion` (`id_fundacion`);

--
-- Filtros para la tabla `rambiente`
--
ALTER TABLE `rambiente`
  ADD CONSTRAINT `fk_ambiente_reporte` FOREIGN KEY (`id_reporte`) REFERENCES `reporte` (`id_reporte`);

--
-- Filtros para la tabla `reducacion`
--
ALTER TABLE `reducacion`
  ADD CONSTRAINT `fk_educacion_reporte` FOREIGN KEY (`id_reporte`) REFERENCES `reporte` (`id_reporte`);

--
-- Filtros para la tabla `remprendimiento`
--
ALTER TABLE `remprendimiento`
  ADD CONSTRAINT `fk_emprendimiento_reporte` FOREIGN KEY (`id_reporte`) REFERENCES `reporte` (`id_reporte`);

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `fk_reporte_eje` FOREIGN KEY (`id_eje`) REFERENCES `eje` (`id_eje`),
  ADD CONSTRAINT `fk_reporte_proyecto` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`);

--
-- Filtros para la tabla `requidad_genero`
--
ALTER TABLE `requidad_genero`
  ADD CONSTRAINT `fk_genero_reporte` FOREIGN KEY (`id_reporte`) REFERENCES `reporte` (`id_reporte`);

--
-- Filtros para la tabla `rnutricion`
--
ALTER TABLE `rnutricion`
  ADD CONSTRAINT `fk_nutricion_reporte` FOREIGN KEY (`id_reporte`) REFERENCES `reporte` (`id_reporte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

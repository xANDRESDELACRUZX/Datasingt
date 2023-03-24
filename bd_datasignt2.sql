-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2021 a las 07:30:08
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_datasignt2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hora` datetime NOT NULL,
  `fecha` date NOT NULL,
  `doctores_id` bigint(20) UNSIGNED NOT NULL,
  `pacientes_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

CREATE TABLE `doctores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pri_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seg_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pri_apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seg_apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `departamento_id` bigint(20) UNSIGNED NOT NULL,
  `ciudad_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_identificacion_id` bigint(20) UNSIGNED NOT NULL,
  `num_identificacion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_telefono` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contraseña` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especializacion`
--

CREATE TABLE `especializacion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_06_132101_create_roles_table', 1),
(6, '2021_10_06_132246_create_ciudades_table', 1),
(7, '2021_10_06_132336_create_especializacion_table', 1),
(8, '2021_10_06_132359_create_departamentos_table', 1),
(9, '2021_10_06_132734_create_tipo_identificacion_table', 1),
(10, '2021_10_06_132800_create_usuarios_table', 1),
(11, '2021_10_06_133050_create_doctores_table', 1),
(12, '2021_10_06_133102_create_pacientes_table', 1),
(13, '2021_10_06_133112_create_citas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pri_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seg_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pri_apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seg_apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `departamento_id` bigint(20) UNSIGNED NOT NULL,
  `ciudad_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_identificacion_id` bigint(20) UNSIGNED NOT NULL,
  `num_identificacion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_telefono` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contraseña` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_identificacion`
--

CREATE TABLE `tipo_identificacion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pri_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seg_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pri_apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seg_apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `departamento_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ciudad_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tipo_identificacion_id` bigint(20) UNSIGNED DEFAULT NULL,
  `num_identificacion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_telefono` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contraseña` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `pri_nombre`, `seg_nombre`, `pri_apellido`, `seg_apellido`, `fecha_nacimiento`, `departamento_id`, `ciudad_id`, `tipo_identificacion_id`, `num_identificacion`, `num_telefono`, `email`, `contraseña`, `rol_id`, `created_at`, `updated_at`) VALUES
(1, 'Kevin', 'Deiby', 'Salazar', 'Rayo', '2021-10-17', NULL, NULL, NULL, NULL, NULL, 'Deiby@gmail.com', 'deiby.com', NULL, '2021-10-11 01:46:09', '2021-10-11 10:01:31'),
(2, 'deiby', 'jhon', 'salazar', 'rayo', '2021-10-17', NULL, NULL, NULL, NULL, NULL, 'zzllhdonellzz@gmail.com', '12345', NULL, '2021-10-11 08:33:41', '2021-10-11 09:04:33'),
(3, 'Andres', 'Felipe', 'Cruz', 'Vargas', '2021-10-16', NULL, NULL, NULL, NULL, NULL, 'asdasd@gmail.com', '12354', NULL, '2021-10-11 10:07:36', '2021-10-11 10:07:36'),
(4, 'Andres', 'Felipe', 'Cruz', 'Vargas', '2021-10-16', NULL, NULL, NULL, NULL, NULL, 'asdasd@gmail.com', '12354', NULL, '2021-10-11 10:07:36', '2021-10-11 10:07:36'),
(5, 'deiby', 'rayo', 'deiby', 'rayo', '2021-10-14', NULL, NULL, NULL, NULL, NULL, 'asdasd@gmail.com', '12354', NULL, '2021-10-11 10:16:45', '2021-10-11 10:16:45'),
(6, 'victor', 'manuel', 'ciro', 'ledesma', '2021-10-13', NULL, NULL, NULL, NULL, NULL, 'victor@gmail.com', '123456789', NULL, '2021-10-11 10:26:46', '2021-10-11 10:26:46');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `citas_doctores_id_foreign` (`doctores_id`),
  ADD KEY `citas_pacientes_id_foreign` (`pacientes_id`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctores_departamento_id_foreign` (`departamento_id`),
  ADD KEY `doctores_ciudad_id_foreign` (`ciudad_id`),
  ADD KEY `doctores_tipo_identificacion_id_foreign` (`tipo_identificacion_id`),
  ADD KEY `doctores_rol_id_foreign` (`rol_id`);

--
-- Indices de la tabla `especializacion`
--
ALTER TABLE `especializacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pacientes_departamento_id_foreign` (`departamento_id`),
  ADD KEY `pacientes_ciudad_id_foreign` (`ciudad_id`),
  ADD KEY `pacientes_tipo_identificacion_id_foreign` (`tipo_identificacion_id`),
  ADD KEY `pacientes_rol_id_foreign` (`rol_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarios_departamento_id_foreign` (`departamento_id`),
  ADD KEY `usuarios_ciudad_id_foreign` (`ciudad_id`),
  ADD KEY `usuarios_tipo_identificacion_id_foreign` (`tipo_identificacion_id`),
  ADD KEY `usuarios_rol_id_foreign` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `doctores`
--
ALTER TABLE `doctores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especializacion`
--
ALTER TABLE `especializacion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_doctores_id_foreign` FOREIGN KEY (`doctores_id`) REFERENCES `doctores` (`id`),
  ADD CONSTRAINT `citas_pacientes_id_foreign` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`);

--
-- Filtros para la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD CONSTRAINT `doctores_ciudad_id_foreign` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudades` (`id`),
  ADD CONSTRAINT `doctores_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `doctores_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `doctores_tipo_identificacion_id_foreign` FOREIGN KEY (`tipo_identificacion_id`) REFERENCES `tipo_identificacion` (`id`);

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ciudad_id_foreign` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudades` (`id`),
  ADD CONSTRAINT `pacientes_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `pacientes_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `pacientes_tipo_identificacion_id_foreign` FOREIGN KEY (`tipo_identificacion_id`) REFERENCES `tipo_identificacion` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ciudad_id_foreign` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudades` (`id`),
  ADD CONSTRAINT `usuarios_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `usuarios_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `usuarios_tipo_identificacion_id_foreign` FOREIGN KEY (`tipo_identificacion_id`) REFERENCES `tipo_identificacion` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-05-2022 a las 14:39:44
-- Versión del servidor: 8.0.28
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grp_idn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activos`
--

CREATE TABLE `activos` (
  `id_activos` int NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `almacen` varchar(45) NOT NULL,
  `costo_adquisicion` varchar(45) NOT NULL,
  `fecha_adquisicion` date NOT NULL,
  `codigo` varchar(45) NOT NULL,
  `asignacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayuntamiento`
--

CREATE TABLE `ayuntamiento` (
  `id_ayuntamiento` int NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `correo_contacto` varchar(45) NOT NULL,
  `telefono_contacto` varchar(45) NOT NULL,
  `facebook` varchar(45) NOT NULL,
  `instagram` varchar(45) NOT NULL,
  `pagina web` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco`
--

CREATE TABLE `banco` (
  `id_banco` int NOT NULL,
  `nombre_banco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `banco`
--

INSERT INTO `banco` (`id_banco`, `nombre_banco`) VALUES
(6, 'BANCOPPEL'),
(3, 'BBVA'),
(4, 'HSBC'),
(5, 'SANTANDER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_bancos`
--

CREATE TABLE `cajas_bancos` (
  `id_cajasBancos` int NOT NULL,
  `nombre_banco` varchar(45) NOT NULL,
  `numero_cuenta` varchar(45) NOT NULL,
  `sucursal` varchar(45) NOT NULL,
  `clabe` varchar(45) NOT NULL,
  `id_usuario` int NOT NULL,
  `caj_act` tinyint(1) NOT NULL,
  `caj_aut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `cajas_bancos`
--

INSERT INTO `cajas_bancos` (`id_cajasBancos`, `nombre_banco`, `numero_cuenta`, `sucursal`, `clabe`, `id_usuario`, `caj_act`, `caj_aut`) VALUES
(2, 'HSBC', '1234567', 'HSBC', '12345', 7, 0, 0),
(3, 'BBVA', '123456789', 'Bancomer', '12345', 6, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int NOT NULL,
  `orden` int NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `c_act` tinyint(1) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `orden`, `categoria`, `c_act`, `fecha`) VALUES
(8, 1, 'valioso', 1, '2022-04-04'),
(9, 2, 'valioso2', 2, '2022-04-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_depa` int NOT NULL,
  `nom_depa` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_depa`, `nom_depa`) VALUES
(2, 'contabilidad'),
(1, 'informatica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleados` int NOT NULL,
  `foto` blob NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `nacionalidad` varchar(45) NOT NULL,
  `estado_civil` varchar(45) NOT NULL,
  `grado_estudios` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `curp` varchar(45) NOT NULL,
  `rfc` varchar(45) NOT NULL,
  `nombre_emergencia` varchar(45) NOT NULL,
  `telefono_emergencia` varchar(45) NOT NULL,
  `parentesco_emergencia` varchar(45) NOT NULL,
  `puesto` varchar(45) NOT NULL,
  `clasificacion` varchar(45) NOT NULL,
  `departamento` varchar(45) NOT NULL,
  `nombre_jefe` varchar(45) DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  `cal_trabajando` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sal_diario` double NOT NULL,
  `nombre_banco` varchar(100) NOT NULL,
  `nu_cuenta_bancaria` varchar(30) NOT NULL,
  `cal_monto` double NOT NULL,
  `monto_extra` double NOT NULL,
  `monto_infonavit` double NOT NULL,
  `prima_vacacional` date NOT NULL,
  `sol_baja` tinyint(1) NOT NULL,
  `fecha_baja` date DEFAULT NULL,
  `e_act` tinyint(1) NOT NULL,
  `e_aut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='falta banco y cuenta bancaria';

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleados`, `foto`, `nombre`, `sexo`, `fecha_nacimiento`, `municipio`, `nacionalidad`, `estado_civil`, `grado_estudios`, `telefono`, `direccion`, `curp`, `rfc`, `nombre_emergencia`, `telefono_emergencia`, `parentesco_emergencia`, `puesto`, `clasificacion`, `departamento`, `nombre_jefe`, `fecha_ingreso`, `cal_trabajando`, `sal_diario`, `nombre_banco`, `nu_cuenta_bancaria`, `cal_monto`, `monto_extra`, `monto_infonavit`, `prima_vacacional`, `sol_baja`, `fecha_baja`, `e_act`, `e_aut`) VALUES
(5, 0x2f73746f726167652f656d706c6561646f732f774c4954444b4c316b76346331654a6c6376667173416f336832575a465751584866667654394d502e6a7067, 'Ossiel Canul', 'Masculino', '1998-10-01', 'Felipe Carrillo Puerto', 'mexicano', 'Soltero', 'Universidad', '9831069816', 'cerrada de los kerpis', 'CAMO981001HQRNSS05', 'MIYD670614', 'dsad', '211', 'mama', 'sda', 'Administrativo', 'contabilidad', 'o', '2021-12-02', '120 dias y 3 meses laborando', 23, 'BBVA', '3333344', 345, 1.2, 1.2, '2022-01-07', 0, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `id_familia` int NOT NULL,
  `familia` varchar(45) NOT NULL,
  `id_categoria` int NOT NULL,
  `f_act` tinyint(1) NOT NULL,
  `prorreater` varchar(45) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`id_familia`, `familia`, `id_categoria`, `f_act`, `prorreater`, `clave`) VALUES
(4, 'hola', 8, 1, '1', '1'),
(5, 'buenas', 8, 1, '1', '1'),
(6, 'amigo', 9, 1, '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupos` int NOT NULL,
  `id_categoria` int NOT NULL,
  `grupo` varchar(45) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `g_act` tinyint(1) NOT NULL,
  `id_familia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupos`, `id_categoria`, `grupo`, `fecha_creacion`, `g_act`, `id_familia`) VALUES
(5, 9, '3', '2022-03-09', 1, 5),
(6, 8, '6', '2022-04-06', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_28_204555_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numero_cuenta_emp`
--

CREATE TABLE `numero_cuenta_emp` (
  `id_numero_emp` int NOT NULL,
  `numero_cuenta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numero_cuenta_prov`
--

CREATE TABLE `numero_cuenta_prov` (
  `id_numero_prov` int NOT NULL,
  `numero_cuenta` varchar(45) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int NOT NULL,
  `nom_perfil` varchar(45) NOT NULL,
  `permisos` int NOT NULL,
  `p_act` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nom_perfil`, `permisos`, `p_act`) VALUES
(2, 'Administrativo', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiladmin`
--

CREATE TABLE `perfiladmin` (
  `id_perfil` int NOT NULL,
  `nom_perfil` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `perfiladmin`
--

INSERT INTO `perfiladmin` (`id_perfil`, `nom_perfil`) VALUES
(3, 'Administración'),
(2, 'Direccion'),
(4, 'Polecia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedores` int NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `nombre_comercial` varchar(45) NOT NULL,
  `tipo_proveedor` varchar(45) NOT NULL,
  `nombre_representante` varchar(45) NOT NULL,
  `telefono_representante` varchar(45) NOT NULL,
  `correo_representante` varchar(45) NOT NULL,
  `telefono_contacto` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `correo_contacto` varchar(100) NOT NULL,
  `maps` varchar(100) NOT NULL,
  `razon_social` varchar(45) NOT NULL,
  `banco` varchar(100) NOT NULL,
  `cuenta_bancaria` int NOT NULL,
  `rfc` varchar(45) NOT NULL,
  `tipo_pago` varchar(45) NOT NULL,
  `cantidad_credito` int NOT NULL,
  `dias_credito` int NOT NULL,
  `prov_act` tinyint(1) NOT NULL,
  `pro_aut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedores`, `nombre`, `nombre_comercial`, `tipo_proveedor`, `nombre_representante`, `telefono_representante`, `correo_representante`, `telefono_contacto`, `direccion`, `correo_contacto`, `maps`, `razon_social`, `banco`, `cuenta_bancaria`, `rfc`, `tipo_pago`, `cantidad_credito`, `dias_credito`, `prov_act`, `pro_aut`) VALUES
(3, 'osei', 'w', 'Isumos', 'w', 'w', 'w', '2', 'cerrada de los kerpis', 'w', 'w', 'w', 'BANCOPPEL', 1, 'MIYD670614', 'credito', 1000, 43, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicios` int NOT NULL,
  `foto` blob NOT NULL,
  `clave` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion_corta` varchar(45) NOT NULL,
  `caracteristicas` varchar(100) NOT NULL,
  `modulo` varchar(45) NOT NULL,
  `id_categoria` int NOT NULL,
  `id_familia` int NOT NULL,
  `id_grupo` int NOT NULL,
  `lista_precio` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_act` tinyint(1) NOT NULL,
  `s_aut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicios`, `foto`, `clave`, `nombre`, `descripcion_corta`, `caracteristicas`, `modulo`, `id_categoria`, `id_familia`, `id_grupo`, `lista_precio`, `s_act`, `s_aut`) VALUES
(1, 0x433a5c55736572735c70656c6f6e5c417070446174615c4c6f63616c5c54656d705c706870443538412e746d70, '111', 'DIANITA', 'sdada', 'caracteristicas', '111', 8, 4, 6, NULL, 1, 1),
(2, 0x433a5c55736572735c70656c6f6e5c417070446174615c4c6f63616c5c54656d705c7068704345322e746d70, '111', 'DIANITA', 'sdada', 'caracteristicas', '11112', 8, 4, 6, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Ex0C38Cg3vliwwOPnSvI2BBtVN8xRZULpnYV2FYl', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYWo4N0NUYUQwQ3MxME5DVGhnSThiWkIwVDBsV29tTGdPZGw2ZDV1VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9wcm95ZWN0b2lkbi50ZXN0L2FkbWluL3NlcnZpY2lvcy9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkUnFnZDlOM3VCUmVFUGxheC91YjZadXMwQ3dkaXNZakNGR1RlSFpEQ3NOOTV3amEuSFpkZXkiO30=', 1651623915),
('o5GHNGqw8HKXb0nnOCwiTVyzaA4pxQpDC3vi0pBj', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.64 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoid214NWNrUFFEcWVyZmQ3NFp6bTVuWnZnek9yeDZRb1JkV29iR1BXaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9wcm95ZWN0b2lkbi50ZXN0L2FkbWluL2FjdGl2b3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkUnFnZDlOM3VCUmVFUGxheC91YjZadXMwQ3dkaXNZakNGR1RlSFpEQ3NOOTV3amEuSFpkZXkiO30=', 1652452769),
('Sy5WAeFtOV8ZoFDMd83kjXw9JEhODEy5lMqq15a1', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiaXJvbjJ5OVVlRkNKeUl4ZEhKVm43ZHdwMmM3eWUzQ2dJeE0zUUozaiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM3OiJodHRwOi8vcHJveWVjdG9pZG4udGVzdC9hZG1pbi9hY3Rpdm9zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFJxZ2Q5TjN1QlJlRVBsYXgvdWI2WnVzMEN3ZGlzWWpDRkdUZUhaRENzTjk1d2phLkhaZGV5Ijt9', 1649190330);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Ossiel fabian', 'ossielabue@gmail.com', NULL, '$2y$10$Rqgd9N3uBReEPlax/ub6Zus0CwdisYjCFGTeHZDCsN95wja.HZdey', NULL, NULL, NULL, NULL, NULL, '2022-03-12 21:31:58', '2022-03-12 21:31:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int NOT NULL,
  `foto` blob,
  `nombre` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `perfil` varchar(45) NOT NULL,
  `proveedor` varchar(45) DEFAULT NULL,
  `u_act` tinyint(1) NOT NULL,
  `u_aut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `foto`, `nombre`, `email`, `contraseña`, `perfil`, `proveedor`, `u_act`, `u_aut`) VALUES
(6, 0x2f73746f726167652f7573756172696f732f6376454f7267624b4138746c74414f487330314c6f614e4845695341554a4638333376706f36614e2e706e67, 'osei', '161K0006@itscarrillopuerto.edu.mx', 'osiel', 'Polecia', NULL, 0, 0),
(7, 0x2f73746f726167652f7573756172696f732f30567359616f31474b6f456e6d6b6f31316b754c464c6b6c7638427331514d6f4a747a3041536b4e2e6a7067, 'Ossiel Canul', 'ossielabue@gmail.com', 'buenas', 'Administración', 'w', 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activos`
--
ALTER TABLE `activos`
  ADD PRIMARY KEY (`id_activos`);

--
-- Indices de la tabla `ayuntamiento`
--
ALTER TABLE `ayuntamiento`
  ADD PRIMARY KEY (`id_ayuntamiento`);

--
-- Indices de la tabla `banco`
--
ALTER TABLE `banco`
  ADD PRIMARY KEY (`id_banco`),
  ADD KEY `nombre_banco` (`nombre_banco`),
  ADD KEY `nombre_banco_2` (`nombre_banco`);

--
-- Indices de la tabla `cajas_bancos`
--
ALTER TABLE `cajas_bancos`
  ADD PRIMARY KEY (`id_cajasBancos`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_depa`),
  ADD KEY `nom_depa` (`nom_depa`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleados`),
  ADD KEY `departamento` (`departamento`),
  ADD KEY `nombre_banco` (`nombre_banco`),
  ADD KEY `nu_cuenta_bancaria` (`nu_cuenta_bancaria`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id_familia`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupos`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_familia` (`id_familia`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `numero_cuenta_emp`
--
ALTER TABLE `numero_cuenta_emp`
  ADD PRIMARY KEY (`id_numero_emp`),
  ADD KEY `numero_cuenta` (`numero_cuenta`);

--
-- Indices de la tabla `numero_cuenta_prov`
--
ALTER TABLE `numero_cuenta_prov`
  ADD PRIMARY KEY (`id_numero_prov`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `perfiladmin`
--
ALTER TABLE `perfiladmin`
  ADD PRIMARY KEY (`id_perfil`),
  ADD KEY `nom_perfil` (`nom_perfil`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedores`),
  ADD KEY `nombre_comercial` (`nombre_comercial`),
  ADD KEY `banco` (`banco`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicios`),
  ADD KEY `id_categoria` (`id_categoria`,`id_familia`,`id_grupo`),
  ADD KEY `id_familia` (`id_familia`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
  ADD PRIMARY KEY (`id_usuarios`),
  ADD KEY `perfil` (`perfil`),
  ADD KEY `proveedor` (`proveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activos`
--
ALTER TABLE `activos`
  MODIFY `id_activos` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ayuntamiento`
--
ALTER TABLE `ayuntamiento`
  MODIFY `id_ayuntamiento` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `banco`
--
ALTER TABLE `banco`
  MODIFY `id_banco` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cajas_bancos`
--
ALTER TABLE `cajas_bancos`
  MODIFY `id_cajasBancos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_depa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleados` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `familia`
--
ALTER TABLE `familia`
  MODIFY `id_familia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `numero_cuenta_emp`
--
ALTER TABLE `numero_cuenta_emp`
  MODIFY `id_numero_emp` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `numero_cuenta_prov`
--
ALTER TABLE `numero_cuenta_prov`
  MODIFY `id_numero_prov` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `perfiladmin`
--
ALTER TABLE `perfiladmin`
  MODIFY `id_perfil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedores` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicios` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cajas_bancos`
--
ALTER TABLE `cajas_bancos`
  ADD CONSTRAINT `cajas_bancos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuarios`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`departamento`) REFERENCES `departamento` (`nom_depa`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`nombre_banco`) REFERENCES `banco` (`nombre_banco`);

--
-- Filtros para la tabla `familia`
--
ALTER TABLE `familia`
  ADD CONSTRAINT `familia_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`id_familia`) REFERENCES `familia` (`id_familia`),
  ADD CONSTRAINT `grupos_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `numero_cuenta_emp`
--
ALTER TABLE `numero_cuenta_emp`
  ADD CONSTRAINT `numero_cuenta_emp_ibfk_1` FOREIGN KEY (`numero_cuenta`) REFERENCES `empleados` (`nu_cuenta_bancaria`);

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`banco`) REFERENCES `banco` (`nombre_banco`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `servicios_ibfk_2` FOREIGN KEY (`id_familia`) REFERENCES `familia` (`id_familia`),
  ADD CONSTRAINT `servicios_ibfk_3` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupos`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil`) REFERENCES `perfiladmin` (`nom_perfil`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`proveedor`) REFERENCES `proveedores` (`nombre_comercial`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 01:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsj`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `kandang`
--

CREATE TABLE `kandang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_kandang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kandang`
--

INSERT INTO `kandang` (`id`, `nomor_kandang`, `created_at`, `updated_at`) VALUES
(1, '0', '2022-10-24 06:13:31', '2022-10-24 06:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `kodesapi`
--

CREATE TABLE `kodesapi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_sapi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kodesapi`
--

INSERT INTO `kodesapi` (`id`, `kode_sapi`, `created_at`, `updated_at`) VALUES
(1, '221024', '2022-10-23 15:22:57', '2022-10-23 15:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2022_10_03_051755_sapi', 1),
(16, '2014_10_12_000000_create_users_table', 2),
(17, '2014_10_12_100000_create_password_resets_table', 2),
(18, '2019_08_19_000000_create_failed_jobs_table', 2),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(20, '2022_10_04_122211_sapi', 2),
(21, '2022_10_23_064249_kandang', 2),
(22, '2022_10_23_151045_kodesapi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sapi`
--

CREATE TABLE `sapi` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_sapi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_kandang` int(255) NOT NULL,
  `berat_sapi_awal` int(11) NOT NULL,
  `berat_sapi_pertama` int(11) DEFAULT NULL,
  `berat_sapi_kedua` int(11) DEFAULT NULL,
  `berat_sapi_ketiga` int(11) DEFAULT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sapi`
--

INSERT INTO `sapi` (`id`, `kode_sapi`, `nomor_kandang`, `berat_sapi_awal`, `berat_sapi_pertama`, `berat_sapi_kedua`, `berat_sapi_ketiga`, `tanggal`, `pengisi`, `created_at`, `updated_at`) VALUES
(144, '221025', 1, 250, 260, 269, 280, '2022-11-16', 'arya', '2022-11-16 06:48:35', '2022-11-16 07:10:25'),
(145, '221026', 2, 256, 269, 278, NULL, '2022-11-16', 'arya', '2022-11-16 06:48:39', '2022-11-16 07:29:51'),
(147, '221028', 4, 267, 270, NULL, NULL, '2022-11-16', 'arya', '2022-11-16 06:48:47', '2022-11-16 09:13:55'),
(148, '221029', 5, 256, 280, NULL, NULL, '2022-11-16', 'arya', '2022-11-16 06:48:50', '2022-11-16 09:14:02'),
(149, '221030', 6, 240, 250, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:17:50', '2022-11-16 19:26:24'),
(150, '221031', 7, 245, 250, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:34:39', '2022-11-19 00:30:13'),
(151, '221032', 8, 244, 252, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:34:41', '2022-11-19 00:32:36'),
(152, '221033', 9, 250, 254, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:34:44', '2022-11-19 01:32:48'),
(153, '221034', 10, 247, 255, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:34:47', '2022-11-20 19:48:08'),
(154, '221035', 11, 249, 256, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:34:50', '2022-11-20 19:48:15'),
(155, '221036', 12, 247, 257, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:34:52', '2022-11-20 19:48:24'),
(157, '221038', 14, 249, 258, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:34:56', '2022-11-28 03:21:31'),
(158, '221039', 15, 249, NULL, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:34:58', '2022-11-16 09:34:58'),
(159, '221040', 16, 247, NULL, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:35:00', '2022-11-16 09:35:00'),
(160, '221041', 17, 248, NULL, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:35:02', '2022-11-16 09:35:02'),
(161, '221042', 18, 249, NULL, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:35:05', '2022-11-16 09:35:05'),
(162, '221043', 19, 248, NULL, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:35:07', '2022-11-16 09:35:07'),
(163, '221044', 20, 240, NULL, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:35:12', '2022-11-16 09:35:12'),
(164, '221045', 21, 250, NULL, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:39:23', '2022-11-16 09:39:23'),
(165, '221046', 22, 245, NULL, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:39:26', '2022-11-16 09:39:26'),
(166, '221047', 23, 242, NULL, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:39:28', '2022-11-16 09:39:28'),
(167, '221048', 24, 243, NULL, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:39:31', '2022-11-16 09:39:31'),
(168, '221049', 25, 239, NULL, NULL, NULL, '2022-11-17', 'arya', '2022-11-16 09:39:45', '2022-11-16 09:39:45'),
(169, '221050', 26, 230, NULL, NULL, NULL, '2022-11-18', 'arya', '2022-11-17 23:02:39', '2022-11-17 23:02:39'),
(171, '221051', 27, 250, NULL, NULL, NULL, '2022-11-21', 'arya', '2022-11-20 20:35:37', '2022-11-20 20:35:37'),
(172, '221052', 28, 260, NULL, NULL, NULL, '2022-11-24', 'admin', '2022-11-24 00:16:35', '2022-11-24 00:16:35'),
(173, '221052', 28, 260, NULL, NULL, NULL, '2022-11-24', 'admin', '2022-11-24 00:16:37', '2022-11-24 00:16:37'),
(174, '221053', 29, 253, NULL, NULL, NULL, '2022-11-28', 'Arya', '2022-11-28 03:20:47', '2022-11-28 03:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'arya', 'arya@gmail.com', 'admin', NULL, '$2y$10$/e0paC0ZbfB9vZpK3FBtv.yGa405I2v46ZT7jW7O3a2wQA9Xng2WO', NULL, '2022-10-23 07:22:49', '2022-10-23 07:22:49'),
(3, 'petugas1', 'petugas1@gmail.com', 'petugas', NULL, '$2y$10$O3sw5g.xCS723oEVK/Km5ee0NPC9XY5oORie6nMPN2t7xwXcrUaEC', NULL, '2022-10-23 22:08:17', '2022-10-23 22:08:17'),
(7, 'petugas3', 'petugas3@gmail.com', 'pemilik', NULL, '$2y$10$SIhvjal4Q0x1ofAjB15yWeN2yJvUKnnecEDG1BY3mzqrw/fyKde06', NULL, '2022-11-20 09:31:53', '2022-11-21 03:14:09'),
(8, 'Arya', 'aryadelwizar@gmail.com', 'admin', '2022-11-20 09:36:43', '$2y$10$8s5nyil64.PwKxqqmc1ysumhOJ5dUqldax4xnTEyeSVwLNc5QgS5W', 'CrTHi9QJoZDCgToI00kBQZW3gCz0HFuvHDnq6TzsvefEZll9Zpu4ww9iKNX7', '2022-11-20 09:36:43', '2022-11-20 09:36:43'),
(11, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$3lE6zEFRtd3NvAjFkVQzXeH6rMmLIQUQ2O/ZTGWRuozAAThynAWzW', NULL, '2022-11-23 00:39:34', '2022-11-23 00:39:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kandang`
--
ALTER TABLE `kandang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kandang_nomor_kandang_unique` (`nomor_kandang`);

--
-- Indexes for table `kodesapi`
--
ALTER TABLE `kodesapi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sapi`
--
ALTER TABLE `sapi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kandang`
--
ALTER TABLE `kandang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kodesapi`
--
ALTER TABLE `kodesapi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sapi`
--
ALTER TABLE `sapi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

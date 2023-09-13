-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 08:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trustportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'to show unread notification in adminpanel',
  `active_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = inactive, 1 = active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `mobile_verified_at`, `password`, `avatar`, `provider`, `provider_id`, `access_token`, `remember_token`, `flag`, `active_status`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', 9800237919, '2022-09-17 07:24:19', NULL, '$2y$10$Wt7zhYAntNpYEPqnwa4cweFHDnUa1KjRlo5CHtI/VUyNWaxeGBgAq', NULL, NULL, NULL, NULL, 'YnUz0g8NQBTSgc2fnw9iUlsL2Dbx2YC8TCJGpiYey8qAMbcjUEhKxcDpacHl', 0, 0, '2022-09-17 07:24:19', '2022-09-17 07:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `tp_feed`
--

CREATE TABLE `tp_feed` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tp_feed`
--

INSERT INTO `tp_feed` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, '1694576285.jpg', 'Caption 01', '2023-09-13 03:38:05', '2023-09-13 03:38:05'),
(2, '1694576324.jpg', 'Caption 02', '2023-09-13 03:38:44', '2023-09-13 03:38:44'),
(3, '1694581557.jpg', 'test', '2023-09-13 05:05:57', '2023-09-13 05:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'to show unread notification in adminpanel',
  `active_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 = inactive, 1 = active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `mobile_verified_at`, `password`, `avatar`, `provider`, `provider_id`, `access_token`, `remember_token`, `flag`, `active_status`, `created_at`, `updated_at`) VALUES
(1, 'Ramiro Koch MD', 'jordyn50@example.net', 4038385351, '2022-09-17 07:24:19', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'jHxLoSsg6u', 0, 1, '2022-09-17 07:24:19', '2022-09-17 07:24:19'),
(2, 'Jaron Brakus', 'simeon20@example.net', 5412625914, '2022-09-17 07:24:19', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'poHsIj16VA', 0, 1, '2022-09-17 07:24:19', '2022-09-17 07:24:19'),
(3, 'Dr. Brendan Barrows DVM', 'lacy.wolf@example.org', 89813988, '2022-09-17 07:24:19', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'Ehnu8FWp3y', 0, 1, '2022-09-17 07:24:19', '2022-09-17 07:24:19'),
(4, 'Prof. Erin Kirlin', 'vdenesik@example.net', 1190179756, '2022-09-17 07:24:19', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'peqZOaLNHM', 0, 1, '2022-09-17 07:24:19', '2022-09-17 07:24:19'),
(5, 'Zachary Brown', 'alfreda.aufderhar@example.net', 808115030, '2022-09-17 07:24:19', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'RhPyD1e8SE', 0, 1, '2022-09-17 07:24:19', '2022-09-17 07:24:19'),
(6, 'Prof. Xavier Ritchie Sr.', 'orin.anderson@example.net', 1611049033, '2022-09-17 07:24:19', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'jLYMIOhHwy', 0, 1, '2022-09-17 07:24:19', '2022-09-17 07:24:19'),
(7, 'Dr. Erik Glover MD', 'gerhold.rubye@example.net', 9275901014, '2022-09-17 07:24:19', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'V79TcpwLEV', 0, 1, '2022-09-17 07:24:19', '2022-09-17 07:24:19'),
(8, 'Mr. Giovanni Beer', 'ole.walsh@example.org', 8598850787, '2022-09-17 07:24:19', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'yTjHr57f8X', 0, 1, '2022-09-17 07:24:19', '2022-09-17 07:24:19'),
(9, 'Jake Schulist', 'vanessa35@example.net', 9906545938, '2022-09-17 07:24:19', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, '4TvfDa0o2Q', 0, 1, '2022-09-17 07:24:19', '2022-09-17 07:24:19'),
(10, 'Miss Linnea Kunde MD', 'littel.nichole@example.net', 4720679138, '2022-09-17 07:24:19', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'scY7m77cFM', 0, 1, '2022-09-17 07:24:19', '2022-09-17 07:24:19'),
(11, 'Jeffery Block', 'caitlyn.hahn@example.com', 8747765504, '2022-09-19 05:57:43', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'OnillJ8IoI', 0, 1, '2022-09-19 05:57:43', '2022-09-19 05:57:43'),
(12, 'Domenic Schimmel DDS', 'fannie.hilpert@example.org', 1377068541, '2022-09-19 05:57:43', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'gBYDZf3Xc0', 0, 1, '2022-09-19 05:57:43', '2022-09-19 05:57:43'),
(13, 'Ayana Luettgen', 'dmayer@example.com', 5252544719, '2022-09-19 05:57:43', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, '2ieaAnNGfZ', 0, 1, '2022-09-19 05:57:43', '2022-09-19 05:57:43'),
(14, 'Gabriella Metz', 'terrance.lynch@example.org', 6616037594, '2022-09-19 05:57:43', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'wWJZVjftRq', 0, 1, '2022-09-19 05:57:43', '2022-09-19 05:57:43'),
(15, 'Kitty Rempel', 'kshlerin.greta@example.org', 8140443353, '2022-09-19 05:57:43', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'LHn0MsxWUg', 0, 1, '2022-09-19 05:57:43', '2022-09-19 05:57:43'),
(16, 'Dillan Skiles', 'crooks.mary@example.com', 1437956583, '2022-09-19 05:57:43', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, '1akCZlsoeA', 0, 1, '2022-09-19 05:57:43', '2022-09-19 05:57:43'),
(17, 'Jordi Sanford', 'dwehner@example.net', 8865496710, '2022-09-19 05:57:43', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, '9JxZFODLkP', 0, 1, '2022-09-19 05:57:43', '2022-09-19 05:57:43'),
(18, 'Mabel Aufderhar Jr.', 'quigley.don@example.org', 9414633228, '2022-09-19 05:57:43', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'Xo44dzBRIC', 0, 1, '2022-09-19 05:57:43', '2022-09-19 05:57:43'),
(19, 'Sherman Hodkiewicz', 'claudine99@example.org', 8636323588, '2022-09-19 05:57:43', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'typUfr51eI', 0, 1, '2022-09-19 05:57:43', '2022-09-19 05:57:43'),
(20, 'Mr. Sheridan Veum', 'tillman.cara@example.com', 9054321848, '2022-09-19 05:57:43', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'v8St5Z70cl', 0, 1, '2022-09-19 05:57:43', '2022-09-19 05:57:43'),
(21, 'Dr. Ulices Bailey V', 'guido.feest@example.net', 6034881270, '2022-09-19 05:58:07', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'eDfsizL8OW', 0, 1, '2022-09-19 05:58:07', '2022-09-19 05:58:07'),
(22, 'Winona Sawayn Sr.', 'humberto82@example.com', 5057689735, '2022-09-19 05:58:07', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'FYYhKHKWmZ', 0, 1, '2022-09-19 05:58:07', '2022-09-19 05:58:07'),
(23, 'Dorris Quigley', 'carlos.lynch@example.com', 9029848774, '2022-09-19 05:58:07', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'DNz39YZbWN', 0, 1, '2022-09-19 05:58:07', '2022-09-19 05:58:07'),
(24, 'Collin Sauer', 'allison.bartoletti@example.com', 1013572370, '2022-09-19 05:58:07', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'D8snDnOOaL', 0, 1, '2022-09-19 05:58:07', '2022-09-19 05:58:07'),
(25, 'Miss Catharine Prosacco', 'price69@example.org', 7636884685, '2022-09-19 05:58:07', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, '5oirD0DzJq', 0, 1, '2022-09-19 05:58:07', '2022-09-19 05:58:07'),
(26, 'Selina Ernser', 'nicola27@example.net', 4421722371, '2022-09-19 05:58:07', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'Xv1Ba9PNsJ', 0, 1, '2022-09-19 05:58:07', '2022-09-19 05:58:07'),
(27, 'Jabari Breitenberg', 'fhowell@example.org', 2709185857, '2022-09-19 05:58:07', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, 'GPxeuHuVTm', 0, 1, '2022-09-19 05:58:07', '2022-09-19 05:58:07'),
(28, 'Quinten Mertz', 'cordell.prosacco@example.com', 9006813685, '2022-09-19 05:58:07', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, '6TxXSKL1U5', 0, 1, '2022-09-19 05:58:07', '2022-09-19 05:58:07'),
(29, 'Opal Durgan IV', 'dora70@example.com', 9106337341, '2022-09-19 05:58:07', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, '2JtnHi10Pn', 0, 1, '2022-09-19 05:58:07', '2022-09-19 05:58:07'),
(30, 'Margarita Farrell', 'zulauf.roosevelt@example.com', 3409550387, '2022-09-19 05:58:07', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, '2Ru2Kxa8RZ', 0, 1, '2022-09-19 05:58:07', '2022-09-19 05:58:07'),
(31, 'admindf', NULL, 12453265241, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2023-09-13 04:44:56', '2023-09-13 04:44:56'),
(32, 'test', NULL, 3256124512, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2023-09-13 05:02:58', '2023-09-13 05:02:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_mobile_unique` (`mobile`);

--
-- Indexes for table `tp_feed`
--
ALTER TABLE `tp_feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tp_feed`
--
ALTER TABLE `tp_feed`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

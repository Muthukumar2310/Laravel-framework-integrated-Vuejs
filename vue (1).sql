-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 06:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vue`
--

-- --------------------------------------------------------

--
-- Table structure for table `events_calendars`
--

CREATE TABLE `events_calendars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `event_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_datetime` varchar(225) NOT NULL,
  `end_datetime` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events_calendars`
--

INSERT INTO `events_calendars` (`id`, `user_id`, `event_id`, `title`, `start_datetime`, `end_datetime`, `created_at`, `updated_at`) VALUES
(1, 1, '1f94huivd3mu5l1pt8q20t7spf', 'AWSome Day Online Conference', '2023-11-16T06:00:00+05:30', '2023-11-16T09:00:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(2, 1, '6iq9fhejsg2g9d2dngu3gp2pve', 'My Birthday', '2023-10-23T12:00:00+05:30', '2023-10-23T13:00:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(3, 1, '21itouiv24hbcn32h9lcou3t7b', 'Google Calendar get the events and show the fullcalendar ', '2023-11-01T14:00:00+05:30', '2023-11-01T15:00:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(4, 1, '5uq5qrc4dqo5l3esiacel8vs4d', 'My Sisters BirthDay', '2023-08-23T06:15:00+05:30', '2023-08-23T07:15:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(5, 1, '37vqvsl64us9851nqdls88bd89', 'My Sister Birthday', '2023-04-06T06:00:00+05:30', '2023-04-06T07:00:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(6, 1, '2m18sailgrmehv83nlcc8gdu9p', 'My Brother Birthday', '2023-04-10T06:00:00+05:30', '2023-04-10T07:00:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(7, 1, '24jkp3ftgfkvtr600suta6qcqm', 'My Daugther Birthday', '2023-09-21T06:15:00+05:30', '2023-09-21T07:15:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(8, 1, '68s6ao9m69j66bb1cph62b9kclgj0bb16osjcbb16hj3ee9g6opjie31co', 'தங்கமகள் பிறந்தநாள் ', '2023-09-21T08:00:00+05:30', '2023-09-21T09:00:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(9, 1, '4tl850u6vds5kqqeip2ojpef7e', 'synchronise calendar events automatically run setup making', '2023-11-02T09:15:00+05:30', '2023-11-02T10:15:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(10, 1, '639vft1b9dhjs6bun4c2gr81b3', 'test', '2023-11-03T17:30:00+05:30', '2023-11-03T18:30:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(11, 1, '4hqadasn8a085hmehvf492mf92', 'My Father Birthday', '1970-12-20T06:15:00+05:30', '1970-12-20T07:15:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(12, 1, '08emnt8en2gm2pi2kojrseacsj', 'My Mother Birthday', '1970-01-30T06:15:00+05:30', '1970-01-30T07:15:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(13, 1, '1685n8la4qscuefhgubni4lcd6', 'My Younger Brother Birthday ', '2023-02-28T06:00:00+05:30', '2023-02-28T07:00:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(14, 1, '5fo3n83omt0ej6untfjjvnl4pp', 'set the shecdule the synchroize the calendar events', '2023-11-02T12:00:00+05:30', '2023-11-02T13:00:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(15, 1, '7n68frlinkrd35at94fddcrs8p', 'Test agin', '2023-11-04T12:00:00+05:30', '2023-11-04T13:00:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(16, 1, '1ul0nndr4gif6f56u64i3et6ku', 'Timing Change for me working time ', '2023-11-06T15:00:00+05:30', '2023-11-06T16:00:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(17, 1, '7vgsf0h3oc1vsau8g0nuu4c6le', 'went to temple', '2023-11-07T15:30:00+05:30', '2023-11-07T16:30:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43'),
(18, 1, '32h80g3vt2bt3d6k3i2sugiaj0', 'Arun testing', '2023-11-08T15:30:00+05:30', '2023-11-08T16:30:00+05:30', '2023-11-13 22:37:43', '2023-11-13 22:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `googles`
--

CREATE TABLE `googles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `g_accesses`
--

CREATE TABLE `g_accesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `access_token` varchar(255) NOT NULL,
  `refresh_token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `g_accesses`
--

INSERT INTO `g_accesses` (`id`, `user_id`, `access_token`, `refresh_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'ya29.a0AfB_byAF6kxMfHRiQBdoRROyjoXe3NB6zYktnskA5roNjFUsiw0ezmovCYGTJmO8NaMH1sjAUuhCKOvvxN0W0ZazQNiTNo0d3R4Zlj376aYS5SASujsZ5X11FxwuBLaHCGu5sQLB7V_WopTpEhdCEw7b624nb1c_kmIVaCgYKAWsSARESFQHGX2MiFr3ahBQMlVzuRMMfz-CSVw0171', '1//0gsapHj3h9ivlCgYIARAAGBASNwF-L9Irzuw2qjkCGM8qLiN2KLHT1eXl5a8ch2evbiQTSNByZk95clNdGMsJoJVdtwCw3Ah2rJg', '2023-11-13 22:36:52', '2023-11-13 22:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_28_104840_change_profile_image_data_type_in_users_table', 1),
(6, '2023_11_01_110411_create_g_accesses_table', 1),
(7, '2023_11_02_062657_create_events_calendars_table', 1),
(8, '2023_11_06_092540_create_googles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `profile_image` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `fcm_token` longtext DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `profile_image`, `email`, `email_verified_at`, `password`, `fcm_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muthukumarsaravanan', 'Muthupandi', 'profile_images/ecpWRkf5vu3C5S22uu02qYTsdIi00emk9FqbL5yf.jpg', 'saravananit3394@gmail.com', NULL, '$2y$10$8/HO7RMHqIK1npJRNl6pAeSb54dg4AIId/z.XBRC5vvuivUzFsW9W', NULL, NULL, '2023-11-09 00:18:00', '2023-11-09 00:29:10'),
(2, 'Muthupandi', 'Arjunan', 'profile_images/HzmOC8GvLbRKDe8ppyo4Ubnluw21DNIAViWumXXD.jpg', 'Muthupandi2322@gmail.com', NULL, '$2y$10$YkZ5tWaE8v5Tte7L6vnihO4knrtOSySmW0RYutQtZtDHI068rKkNy', NULL, NULL, '2023-11-09 00:18:34', '2023-11-09 00:29:32'),
(3, 'Sundravaduvu', 'Muthupandi', 'profile_images/1efFIAArB091v5PF7UhyOCfC0xyTi4V9XjYSalbp.jpg', 'Sundravaduvu2322@gmail.com', NULL, '$2y$10$i0XxVZeMlWGZjL8w0Zsx4usfvVxk1UWiWZWFs64MiyKCZDz0BfirO', NULL, NULL, '2023-11-09 00:19:07', '2023-11-09 00:30:09'),
(4, 'Stella', 'Muthukumarsaravanan', 'profile_images/emueKciWSe2Yfiuc9GSVyvXmPMNGH2w6EjBL7XBD.png', 'Stellasaravanan@gmail.com', NULL, '$2y$10$gNiyWoeG/GxXaWyrYRJOkuhBYVN32wPZBB0p5CsjIdkKfOMHDQXxm', NULL, NULL, '2023-11-09 00:19:35', '2023-11-09 00:30:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events_calendars`
--
ALTER TABLE `events_calendars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_calendars_event_id_unique` (`event_id`),
  ADD KEY `events_calendars_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `googles`
--
ALTER TABLE `googles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g_accesses`
--
ALTER TABLE `g_accesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `g_accesses_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `events_calendars`
--
ALTER TABLE `events_calendars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `googles`
--
ALTER TABLE `googles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `g_accesses`
--
ALTER TABLE `g_accesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events_calendars`
--
ALTER TABLE `events_calendars`
  ADD CONSTRAINT `events_calendars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `g_accesses`
--
ALTER TABLE `g_accesses`
  ADD CONSTRAINT `g_accesses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

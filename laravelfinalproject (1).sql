-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 07:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelfinalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `src_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `src_photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Electronics', 'Electronic Devices', 'uploads/categories/163898589192101154115739jpeg', '2021-11-27 16:39:00', '2021-12-08 15:51:31', NULL),
(7, 'Man Clothes', 'Man Clothes', 'uploads/categories/163838920497723851969133jpg', '2021-11-27 18:15:49', '2021-12-01 18:06:44', NULL),
(8, 'Woman Clothes', 'woman Clothes', 'uploads/categories/163838886384789406619622.jpg', '2021-12-01 18:01:03', '2021-12-01 18:01:03', NULL),
(9, 'Baby Clothes', 'baby Clothes', 'uploads/categories/163838890195560231305377.jpg', '2021-12-01 18:01:41', '2021-12-01 18:01:41', NULL),
(10, 'furniture', 'From the hallway to the bedroom, each room of our home speaks volumes about us, makes our tastes visible and conveys our style through the choices we make with regards to furnishing. Archiproducts\' “Furniture” section offers a wide selection of furniture for the living area, sofas and armchairs for the relax area as well as tables and chairs for the dining area, next to bookshelves and cabin units and a rich section for the sleeping area that includes the kids bedrooms.', 'uploads/categories/163891135258431939980876.jpg', '2021-12-07 19:09:12', '2021-12-07 19:09:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_26_155556_create_categories_table', 1),
(5, '2021_11_26_155709_create_rating_table', 2),
(6, '2021_11_26_155650_create_stores_table', 3),
(7, '2021_11_26_164703_create_rating_table', 4);

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
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL,
  `ipAddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `rate`, `ipAddress`, `store_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, '80-90-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 1, '2021-11-29 19:06:47', '2021-11-29 19:06:47', NULL),
(2, 3, '80-90-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 3, '2021-11-30 17:53:16', '2021-11-30 17:53:16', NULL),
(3, 5, '80-910-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 1, '2021-11-30 18:31:46', '2021-11-30 18:31:46', NULL),
(4, 3, '80-915-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 1, '2021-11-30 18:35:02', '2021-11-30 18:35:02', NULL),
(5, 2, '80-96-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 1, '2021-11-30 18:42:59', '2021-11-30 18:42:59', NULL),
(6, 4, '80-911-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 1, '2021-11-30 18:47:24', '2021-11-30 18:47:24', NULL),
(7, 5, '84-91-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 1, '2021-11-30 20:28:58', '2021-11-30 20:28:58', NULL),
(8, 2, '86-91-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 1, '2021-11-30 20:36:34', '2021-11-30 20:36:34', NULL),
(9, 3, '80-99-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 1, '2021-11-30 20:37:46', '2021-11-30 20:37:46', NULL),
(10, 3, '80-91-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 4, '2021-12-01 15:54:15', '2021-12-01 15:54:15', NULL),
(11, 3, '80-91-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 6, '2021-12-01 16:53:58', '2021-12-01 16:53:58', NULL),
(12, 5, '80-91-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 1, '2021-12-02 15:56:30', '2021-12-02 15:56:30', NULL),
(13, 4, '80-91-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 7, '2021-12-03 10:51:59', '2021-12-03 10:51:59', NULL),
(15, 3, '80-90-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 5, '2021-12-07 18:56:04', '2021-12-07 18:56:04', NULL),
(16, 3, '80-91-31-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 5, '2021-12-07 18:58:20', '2021-12-07 18:58:20', NULL),
(17, 5, '80-91-03-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 5, '2021-12-07 18:59:22', '2021-12-07 18:59:22', NULL),
(18, 3, '80-91-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 5, '2021-12-07 19:01:21', '2021-12-07 19:01:21', NULL),
(19, 3, '80-91-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 2, '2021-12-07 19:04:46', '2021-12-07 19:04:46', NULL),
(20, 3, '80-91-33-EF-7F-B1   \\Device\\Tcpip_{534E35F6-064A-45B8-8CD0-BBD654C0257F}', 9, '2021-12-07 19:10:57', '2021-12-07 19:10:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `src_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numRating` int(11) DEFAULT 0,
  `avgRating` double DEFAULT 0,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `address`, `phone`, `src_logo`, `numRating`, `avgRating`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Shamaly', 'Al-Naser Street', '059993288', 'uploads/stores/16384733201507109214254.jpeg', 9, 3.4444444444444, 6, '2021-11-27 16:56:13', '2021-12-02 17:28:40', NULL),
(2, 'saqa', 'aaaaa', '78541222', 'uploads/stores/163804035220053988057054.jpg', 1, NULL, 6, '2021-11-27 17:12:32', '2021-12-07 19:05:19', '2021-12-07 19:05:19'),
(3, 'Moshtaha', 'Al-Rimal', '059633458', 'uploads/stores/163838923883421574826024.jpg', 1, 3, 7, '2021-11-27 18:16:38', '2021-12-01 18:07:18', NULL),
(4, 'Mersi', 'Al-Rimal', '0592478552', 'uploads/stores/163839047843040273963229.jpg', 1, 3, 8, '2021-11-27 18:17:14', '2021-12-01 18:27:58', NULL),
(5, 'Electronic store', 'Al-Naser', '05966663', 'uploads/stores/163839077865649799621536.jpg', 4, 3.6667, 6, '2021-11-28 15:09:35', '2021-12-07 19:01:21', NULL),
(6, 'Girl Fashion Store', 'Rimal Street', '0599496325', 'uploads/stores/163839135144071402006681.jpg', 1, 3, 8, '2021-11-28 15:15:04', '2021-12-01 18:42:31', NULL),
(7, 'Gaza Fashion Store', 'Al-Naser street', '0596322114', 'uploads/stores/163839147627500169791052.jpg', 1, 4, 8, '2021-11-28 15:21:07', '2021-12-03 10:51:59', NULL),
(8, 'Baby Store', 'Rimal', '05963222', 'uploads/stores/163839015845199077705050.jpg', 0, 0, 9, '2021-11-28 17:15:20', '2021-12-05 23:04:11', '2021-12-05 23:04:11'),
(9, 'Rooms Today', 'Gaza -  Naser Street', '059963258', 'uploads/stores/163891142051127986338680.jpg', 1, 3, 10, '2021-12-07 19:10:20', '2021-12-07 19:10:56', NULL),
(10, 'Modern Furniture', 'Gaza', '05963255', 'uploads/stores/163891182515881565028907.jpg', 0, 0, 10, '2021-12-07 19:17:05', '2021-12-07 19:17:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2021-11-09 16:53:16', '$2a$12$QwKyWLQV8CJ7fs57UInkeOMYS1VGQzsabHHa.zAHcYnfUfGFX8nb6', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_stores_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`);

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_categories_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

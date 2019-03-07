-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 10:24 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini-crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `Name`, `email`, `logo`, `website`, `created_at`, `updated_at`) VALUES
(1, 'ABCD Company', 'abc@gmail.com', 'abc.png', 'www.abccompany.com', '2019-02-28 01:41:22', '2019-02-28 02:40:45'),
(2, 'DEF Company', 'def@gmail.com', 'def.jpg', 'www.defcompany.com', '2019-02-28 01:41:58', '2019-02-28 01:41:58'),
(3, 'GHI company', 'ghi@gmail.com', 'ghi.png', 'www.ghfcompany.com', '2019-02-28 01:42:48', '2019-02-28 01:42:48'),
(4, 'JKL company', 'hello@gmail.com', 'logo-ex-4.png', 'www.jklcompany.com', '2019-02-28 01:44:35', '2019-02-28 01:44:35'),
(5, 'MNL Company', 'mnl@gmail.com', 'punya-logo-baru-bawaslu-kian-bersemangat-iil.jpg', 'www.mnlcompany.com', '2019-02-28 01:45:16', '2019-02-28 01:45:16'),
(6, 'OPQ Company', 'opq@gmail.com', 'hello12.jpg', 'www.opqcompany.com', '2019-02-28 01:47:20', '2019-02-28 01:47:20'),
(7, 'RST Compnay', 'rst@gmail.com', 'images.png', 'www.rst.com', '2019-02-28 01:48:03', '2019-02-28 01:48:03'),
(8, 'UVW Company', 'uvw@gmail.com', 'imagessss.png', 'www.uvwcompany.com', '2019-02-28 01:48:43', '2019-02-28 01:48:43'),
(9, 'XYZ Company', 'xyz@gmail.com', 'index123.png', 'www.xyzcompany.com', '2019-02-28 01:49:29', '2019-02-28 01:49:29'),
(10, 'a Company', 'A@gmail.com', 'logo-ex-4.png', 'www.acompany.com', '2019-02-28 01:50:12', '2019-02-28 01:50:12'),
(11, 'B Company', 'b@gmail.com', 'punya-logo-baru-bawaslu-kian-bersemangat-iil.jpg', 'www.bcompany.com', '2019-02-28 01:50:58', '2019-02-28 01:50:58'),
(13, 'E Company', 'e@gmail.com', 'punya-logo-baru-bawaslu-kian-bersemangat-iil.jpg', 'www.ecompany.com', '2019-02-28 01:52:30', '2019-02-28 01:52:30'),
(14, 'F  Company', 'f@gmail.com', 'index123.png', 'www.fcompany.com', '2019-02-28 01:53:17', '2019-02-28 01:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `lastname`, `company_id`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Mg', 'Mg', 1, 'mgmg@gmail.com', '09400500200', '2019-02-28 01:53:55', '2019-02-28 01:53:55'),
(2, 'Tun', 'Tun', 2, 'tuntun@gmail.com', '0978782888', '2019-02-28 01:54:27', '2019-02-28 01:54:27'),
(3, 'Aung', 'Aung', 3, 'aungaung@gmail.com', '0956789011', '2019-02-28 01:54:55', '2019-02-28 02:50:53'),
(4, 'Chan', 'Chan', 4, 'chanchan@gmail.com', '092345678', '2019-02-28 01:55:40', '2019-02-28 01:55:40'),
(5, 'Nyein', 'Nyein', 5, 'nyeinnyein@gmail.com', '092222222222', '2019-02-28 01:56:32', '2019-02-28 01:56:32'),
(6, 'Htet', 'Htet', 6, 'htethtet@gmail.com', '0935566677', '2019-02-28 01:57:12', '2019-02-28 01:57:12'),
(7, 'Nyi', 'Nyi', 7, 'nyinyi@gmail.com', '09780106515', '2019-02-28 01:57:48', '2019-02-28 01:57:48'),
(8, 'Aung', 'Aung', 8, 'aungaung@gmail.com', '09500529525', '2019-02-28 01:58:17', '2019-02-28 01:58:17'),
(9, 'lwin', 'lwin', 10, 'lwinlwin@gmail.com', '097868686ww', '2019-02-28 01:59:01', '2019-02-28 01:59:01'),
(10, 'Htett', 'Nyi', 11, 'htetnyi@gmail.com', '0935566677', '2019-02-28 01:59:35', '2019-02-28 02:01:13'),
(11, 'tut', 'p', 13, 'tutp@gmail.com', '09780106515', '2019-02-28 02:00:03', '2019-02-28 02:00:03'),
(13, 'Saw', 'Tin Maung', 14, 'sawtinmaung@gmail.com', '09780106515', '2019-02-28 02:52:51', '2019-02-28 02:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_27_122054_create_companies_table', 2),
(4, '2019_02_27_175034_create_employees_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$13tGQPZ3PDp3wbSCfNcx/.nlTIY4Bjh/H422P5WOoWwtD5TdMNx7a', '58SqMFE4awTSGG7MiLUo6EZPLxElJx2Y8fQWUepCxeYZk6unCJWmZTK0zkSi', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_company_id_foreign` (`company_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

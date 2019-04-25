-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 07:34 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `air_reserve`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE `book_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `b_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_lot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passenger_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adult` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_fare` int(11) NOT NULL,
  `b_fare` int(11) NOT NULL,
  `class_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_fare` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_details`
--

INSERT INTO `book_details` (`id`, `b_no`, `status`, `book_lot`, `passenger_id`, `name`, `email`, `phone`, `address`, `child`, `adult`, `e_fare`, `b_fare`, `class_type`, `total_fare`, `created_at`, `updated_at`) VALUES
(1, 'Air-001', 'Processing', '1', 1, 'admin', 'admin@yahoo.com', '12321', 'asassf212241', '1', '1', 1231, 1700, 'economy', 2462, '2019-04-13 17:43:15', '2019-04-14 16:54:45'),
(2, 'Air-002', 'Processing', '1', 2, 'user1', 'user1@gmail.com', '01257434', 'North Carolina', '1', '1', 1231, 1700, 'economy', 2462, '2019-04-14 08:41:52', '2019-04-14 09:03:06'),
(3, 'Air-003', 'Processing', '1', 2, 'user1', 'user1@gmail.com', '01257434', 'North Carolina', '1', '1', 1231, 1700, 'economy', 2462, '2019-04-14 08:53:31', '2019-04-14 09:03:07'),
(4, 'Air-004', 'Processing', 'active', 2, 'user1', 'user1@gmail.com', '01257434', 'North Carolina', '1', '1', 1231, 1700, 'economy', 2462, '2019-04-14 09:54:46', '2019-04-14 09:54:46'),
(5, 'Air-005', 'Processing', '1', 1, 'admin', 'admin@yahoo.com', '1234', 'north carolin', '1', '1', 1231, 1700, 'business', 3400, '2019-04-14 16:54:23', '2019-04-14 16:54:45'),
(6, 'Air-006', 'Processing', 'active', 9, 'user1', 'user1@gmail.com', '35322252', 'scotland', '1', '1', 1231, 1700, 'economy', 2462, '2019-04-14 17:07:22', '2019-04-14 17:07:22'),
(7, 'Air-007', 'Processing', 'active', 9, 'user1', 'user1@gmail.com', '35322252', 'scotland', '1', '1', 1231, 1700, 'economy', 2462, '2019-04-14 17:46:01', '2019-04-14 17:46:01'),
(8, 'Air-008', 'Processing', 'active', 9, 'user1', 'user1@gmail.com', '35322252', 'scotland', '2', '2', 1400, 1700, 'business', 6800, '2019-04-14 17:48:42', '2019-04-14 17:48:42'),
(9, 'Air-009', 'Processing', 'active', 8, 'xyz', 'xyz@gmail.com', '123445', 'detroit', '1', '1', 1231, 1700, 'business', 3400, '2019-04-14 17:53:53', '2019-04-14 17:53:53'),
(10, 'Air-0010', 'Processing', 'active', 8, 'xyz', 'xyz@gmail.com', '123445', 'detroit', '2', '2', 1400, 1700, 'economy', 5600, '2019-04-14 17:55:49', '2019-04-14 17:55:49'),
(11, 'Air-0011', 'Processing', 'active', 10, 'user2', 'user2@hotmail.com', '01721874893', 'New Street,auckland', '1', '1', 1231, 1700, 'economy', 2462, '2019-04-16 08:28:00', '2019-04-16 08:28:00'),
(12, 'Air-0012', 'Processing', '1', 1, 'admin', 'admin@yahoo.com', '1234', 'north carolin', '1', '1', 1231, 1700, 'business', 3400, '2019-04-16 08:35:34', '2019-04-16 16:02:14'),
(13, 'Air-0013', 'Processing', 'active', 8, 'xyz', 'xyz@gmail.com', '123445', 'detroit', '1', '1', 1231, 1700, 'economy', 2462, '2019-04-16 09:07:20', '2019-04-16 09:07:20'),
(14, 'Air-0014', 'Processing', 'active', 8, 'xyz', 'xyz@gmail.com', '123445', 'detroit', '1', '1', 1231, 1700, 'economy', 2462, '2019-04-16 15:47:26', '2019-04-16 15:47:26'),
(15, 'Air-0015', 'Processing', 'active', 1, 'admin', 'admin@yahoo.com', '1234', 'north carolin', '1', '1', 1231, 1700, 'economy', 2462, '2019-04-16 16:18:43', '2019-04-16 16:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `card_details`
--

CREATE TABLE `card_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `account_id` int(11) NOT NULL,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `card_details`
--

INSERT INTO `card_details` (`id`, `account_id`, `c_name`, `card_no`, `bank_name`, `pin_no`, `created_at`, `updated_at`) VALUES
(27, 12, 'admin', '2142', 'AB Bank', '12451', '2019-04-16 08:37:22', '2019-04-16 08:37:22'),
(28, 12, 'admin', '2142', 'AB Bank', '12463', '2019-04-16 08:41:12', '2019-04-16 08:41:12'),
(29, 13, 'xyz', '143', 'Bank Alfalah', '13417', '2019-04-16 09:07:30', '2019-04-16 09:07:30'),
(30, 14, 'xyz', '12345', 'Bank Haramain', '14642', '2019-04-16 15:47:37', '2019-04-16 15:47:37'),
(31, 15, 'admin', '214', 'Pabna Bank', '15569', '2019-04-16 16:19:02', '2019-04-16 16:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `flight_searches`
--

CREATE TABLE `flight_searches` (
  `id` int(10) UNSIGNED NOT NULL,
  `fNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrival_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adult` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_fare` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_fare` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight_searches`
--

INSERT INTO `flight_searches` (`id`, `fNo`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `adult`, `child`, `e_fare`, `b_fare`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Air India', 'India', 'Belgium', '2019-03-08', '2019-03-10', '1', '1', '1231', '1700', 1, '2019-03-25 18:00:45', '2019-03-25 18:00:45'),
(2, 'Swiss Air', 'Switzerland', 'Dohar', '2019-03-10', '2019-03-12', '2', '2', '1400', '1700', 1, '2019-03-25 18:01:33', '2019-03-25 18:01:33'),
(3, 'Lufthansa Airways', 'Germany', 'England', '2019-03-15', '2019-03-16', '3', '3', '1700', '1500', 1, '2019-03-25 18:02:37', '2019-03-25 18:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `flight_users`
--

CREATE TABLE `flight_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visa_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight_users`
--

INSERT INTO `flight_users` (`id`, `phone`, `passport_no`, `visa_no`, `address`, `dob`, `gender`, `user_id`, `created_at`, `updated_at`) VALUES
(6, '1234', '12345Passpo', '21412assfass', 'north carolin', '2019-04-12', 'male', 1, '2019-04-14 16:21:30', '2019-04-14 16:21:30'),
(7, '123445', '1241424', '1234543kav', 'detroit', '2019-04-18', 'male', 8, '2019-04-14 16:26:36', '2019-04-14 16:26:36'),
(8, '35322252', '23252sdgsds', '1242sfas', 'scotland', '2019-04-19', 'male', 9, '2019-04-14 16:49:21', '2019-04-14 16:49:21'),
(9, '01721874893', '12345pasopw', '213bkjbasd', 'New Street,auckland', '2019-04-19', 'male', 10, '2019-04-16 08:27:39', '2019-04-16 08:27:39');

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
(3, '2019_02_19_171718_create_admins_table', 1),
(14, '2019_02_24_171951_create_permission_tables', 6),
(20, '2019_02_21_150616_create_flight_searches_table', 9),
(26, '2019_02_21_111702_create_flight_users_table', 10),
(34, '2019_04_07_162354_create_book_details_table', 11),
(36, '2019_04_12_215905_create_card_details_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create', 'web', '2019-02-25 12:54:05', '2019-02-25 12:54:05'),
(2, 'view', 'web', '2019-02-25 12:54:16', '2019-02-25 12:54:16'),
(3, 'edit', 'web', '2019-02-25 12:54:25', '2019-02-25 12:54:25'),
(4, 'delete', 'web', '2019-02-25 12:54:34', '2019-02-25 12:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2019-02-24 13:50:06', '2019-02-24 13:50:06'),
(2, 'Passenger', 'web', '2019-02-25 12:48:05', '2019-02-25 12:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@yahoo.com', NULL, '$2y$10$.OIePxLFdBFVeRRzCfL6KOdSP90UHwDqbjj6oy.MyPYk5n9JGhdKe', 'ZVRhUhiKtNal4hVwV9IJuw4FGmYclQZTwXdx3GrkQF5plRnhTQ8IA1cStFrG', '2019-02-20 12:59:07', '2019-02-20 12:59:07'),
(8, 'xyz', 'xyz@gmail.com', NULL, '$2y$10$FJA/yQ682cU1p2.fIO6XCuqqO57bZlxWom1IR8v.M8CLKXZ8wTlO2', '6ozvH83hPA7bPhTwS5O2KH7NcuxJNbfIeBN9yeiEZ3p7vEjXZEIlZqdbujHk', '2019-04-14 16:24:12', '2019-04-14 16:24:12'),
(9, 'user1', 'user1@gmail.com', NULL, '$2y$10$LYt21Z5ld6y2qT02cRauq.LqxBRahDGdn29kyuEG5/rWU520hy6JW', '6LgJYhn5Aiy2dN7zhd7UgUt0S7JewcYZjr7tceg6ZUbaobQRCFOKSh1I0F9v', '2019-04-14 16:48:52', '2019-04-14 16:48:52'),
(10, 'user2', 'user2@hotmail.com', NULL, '$2y$10$ZLCqI7vSXgzLjcC.wtcth./SUQhjQAb9WqT.XtE33E.MYO6NHKPqi', 'EhyzbyoxRLtFwQCsu3KkJxMhGcowuLl0InDYkBqs16arqyG13dW3judT2Uen', '2019-04-16 08:26:27', '2019-04-16 08:26:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_details`
--
ALTER TABLE `book_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_details`
--
ALTER TABLE `card_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_searches`
--
ALTER TABLE `flight_searches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flight_searches_user_id_foreign` (`user_id`);

--
-- Indexes for table `flight_users`
--
ALTER TABLE `flight_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flight_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `book_details`
--
ALTER TABLE `book_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `card_details`
--
ALTER TABLE `card_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `flight_searches`
--
ALTER TABLE `flight_searches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flight_users`
--
ALTER TABLE `flight_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight_searches`
--
ALTER TABLE `flight_searches`
  ADD CONSTRAINT `flight_searches_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `flight_users`
--
ALTER TABLE `flight_users`
  ADD CONSTRAINT `flight_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

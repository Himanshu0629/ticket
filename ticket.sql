-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2019 at 05:02 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `movie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `created_at`, `updated_at`, `movie`, `name`, `timing`, `status`) VALUES
(1, '2019-06-11 11:12:05', '2019-06-11 22:18:44', 'Jatrai Jatra', 'Himanshu', '6pm', 'Booked'),
(2, '2019-06-11 22:27:45', '2019-06-11 22:31:39', 'John Wick 2', 'Kunal', '9am', 'Reserved'),
(3, '2019-06-12 07:21:55', '2019-06-12 07:21:55', 'Sarkar', 'himanshu', '6pm', 'Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_21_071515_create_booking_table', 1),
(4, '2019_05_23_065809_create_movie_table', 1),
(5, '2019_05_24_052513_create_ticket_table', 1),
(6, '2019_05_26_053836_create_price_table', 1),
(7, '2019_05_26_104028_create_offer_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bollywood` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hollywood` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kollywood` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `south_indian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `created_at`, `updated_at`, `bollywood`, `hollywood`, `kollywood`, `south_indian`) VALUES
(1, '2019-06-11 22:25:32', '2019-06-11 22:25:32', 'Student of the year', 'John Wick', 'Jatrai Jatra', 'Sarkar'),
(2, '2019-06-11 22:28:27', '2019-06-11 22:28:27', 'Bharat', 'John Wick', 'Bir Bikram 2', 'Sarkar');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE IF NOT EXISTS `offer` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `week_end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_offer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `created_at`, `updated_at`, `week_end`, `special_offer`) VALUES
(1, '2019-06-11 11:16:56', '2019-06-11 11:16:56', 'Sunday Special', 'in next change'),
(2, '2019-06-11 22:30:50', '2019-06-11 22:30:50', 'Thursday evening', 'now not available'),
(3, '2019-06-11 23:00:07', '2019-06-11 23:00:07', 'Sunday Special', 'in next change');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

DROP TABLE IF EXISTS `price`;
CREATE TABLE IF NOT EXISTS `price` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nepali_rupee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indian_rupee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `american_dollar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `australian_dollar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pound_sterling` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `euro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `created_at`, `updated_at`, `nepali_rupee`, `indian_rupee`, `american_dollar`, `australian_dollar`, `pound_sterling`, `euro`) VALUES
(1, '2019-06-11 11:14:35', '2019-06-11 11:14:35', '450', '250', '10', '50', '20', '15'),
(2, '2019-06-11 22:29:54', '2019-06-11 22:29:54', '400', '200', '20', '25', '10', '15');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seat_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `row` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `created_at`, `updated_at`, `seat_number`, `column`, `row`, `seat_status`, `status`) VALUES
(1, '2019-06-11 11:13:38', '2019-06-11 11:13:38', '2', '5', '10', '2', '1'),
(2, '2019-06-11 22:28:57', '2019-06-11 22:28:57', '10', '8', '4', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'himanshu', 'admin@admin.com', NULL, '$2y$10$d1272aVO7x/YgWFb7bpIOOyZOsBaHV1nbN9fJWl.1Pp8xSbC2Br9m', NULL, '2019-06-11 11:10:46', '2019-06-11 11:10:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

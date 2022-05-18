-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 11:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prechain`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `user`, `device`, `browser`, `ip`, `description`, `created_at`, `updated_at`) VALUES
(83, '1', 'WebKit', 'Chrome', '105.112.209.173', 'New Login', '2021-11-24 18:20:02', '2021-11-24 18:20:02'),
(84, '1', 'WebKit', 'Chrome', '105.112.209.173', 'New Login', '2021-11-24 18:20:02', '2021-11-24 18:20:02'),
(85, '1', '0', 'Firefox', '129.205.113.37', 'New Login', '2021-11-24 20:01:04', '2021-11-24 20:01:04'),
(86, '1', '0', 'Firefox', '129.205.113.37', 'New Login', '2021-11-24 20:01:05', '2021-11-24 20:01:05'),
(87, '1', 'iPhone', 'Chrome', '197.210.79.148', 'New Login', '2021-11-24 20:15:48', '2021-11-24 20:15:48'),
(88, '1', 'iPhone', 'Chrome', '197.210.79.148', 'New Login', '2021-11-24 20:15:48', '2021-11-24 20:15:48'),
(89, '1', 'WebKit', 'Chrome', '105.112.101.127', 'New Login', '2021-11-24 20:29:08', '2021-11-24 20:29:08'),
(90, '1', 'WebKit', 'Chrome', '105.112.101.127', 'New Login', '2021-11-24 20:29:08', '2021-11-24 20:29:08'),
(91, '1', '0', 'Firefox', '129.205.113.37', 'New Login', '2021-11-24 20:34:47', '2021-11-24 20:34:47'),
(92, '1', '0', 'Firefox', '129.205.113.37', 'New Login', '2021-11-24 20:34:47', '2021-11-24 20:34:47'),
(93, '1', 'WebKit', 'Chrome', '105.112.109.153', 'New Login', '2021-11-25 17:27:16', '2021-11-25 17:27:16'),
(94, '1', 'WebKit', 'Chrome', '105.112.109.153', 'New Login', '2021-11-25 17:27:16', '2021-11-25 17:27:16'),
(95, '1', '0', 'Firefox', '197.210.79.105', 'New Login', '2021-11-25 19:38:37', '2021-11-25 19:38:37'),
(96, '1', '0', 'Firefox', '197.210.79.105', 'New Login', '2021-11-25 19:38:37', '2021-11-25 19:38:37'),
(97, '1', 'WebKit', 'Chrome', '193.176.86.58', 'New Login', '2022-01-24 13:09:19', '2022-01-24 13:09:19'),
(98, '1', 'WebKit', 'Chrome', '193.176.86.58', 'New Login', '2022-01-24 13:09:20', '2022-01-24 13:09:20'),
(99, '1', 'WebKit', 'Chrome', '193.176.86.58', 'New Login', '2022-01-24 20:38:27', '2022-01-24 20:38:27'),
(100, '1', 'WebKit', 'Chrome', '193.176.86.58', 'New Login', '2022-01-24 20:38:27', '2022-01-24 20:38:27'),
(101, '1', 'WebKit', 'Chrome', '193.176.86.58', 'New Login', '2022-01-26 01:07:15', '2022-01-26 01:07:15'),
(102, '1', 'WebKit', 'Chrome', '193.176.86.58', 'New Login', '2022-01-26 01:07:15', '2022-01-26 01:07:15'),
(103, '1', 'WebKit', 'Chrome', '193.176.86.40', 'New Login', '2022-01-26 13:15:43', '2022-01-26 13:15:43'),
(104, '1', 'WebKit', 'Chrome', '193.176.86.40', 'New Login', '2022-01-26 13:15:43', '2022-01-26 13:15:43'),
(105, '1', 'WebKit', 'Chrome', '193.176.86.40', 'New Login', '2022-01-27 16:03:22', '2022-01-27 16:03:22'),
(106, '1', 'WebKit', 'Chrome', '193.176.86.40', 'New Login', '2022-01-27 16:03:22', '2022-01-27 16:03:22'),
(107, '1', '0', 'Firefox', '105.112.10.112', 'New Login', '2022-02-02 14:04:57', '2022-02-02 14:04:57'),
(108, '1', '0', 'Firefox', '105.112.10.112', 'New Login', '2022-02-02 14:04:57', '2022-02-02 14:04:57'),
(109, '1', '0', 'Firefox', '105.112.27.97', 'New Login', '2022-02-10 01:52:59', '2022-02-10 01:52:59'),
(110, '1', '0', 'Firefox', '105.112.27.97', 'New Login', '2022-02-10 01:52:59', '2022-02-10 01:52:59'),
(111, '1', '0', 'Firefox', '105.112.126.167', 'New Login', '2022-02-10 19:36:09', '2022-02-10 19:36:09'),
(112, '1', '0', 'Firefox', '105.112.126.167', 'New Login', '2022-02-10 19:36:09', '2022-02-10 19:36:09'),
(113, '1', '0', 'Firefox', '105.112.126.167', 'New Login', '2022-02-10 19:53:41', '2022-02-10 19:53:41'),
(114, '1', '0', 'Firefox', '105.112.126.167', 'New Login', '2022-02-10 19:53:41', '2022-02-10 19:53:41'),
(115, '1', '0', 'Firefox', '105.112.126.167', 'New Login', '2022-02-10 19:58:54', '2022-02-10 19:58:54'),
(116, '1', '0', 'Firefox', '105.112.126.167', 'New Login', '2022-02-10 19:58:54', '2022-02-10 19:58:54'),
(117, '1', '0', 'Firefox', '105.112.113.93', 'New Login', '2022-02-10 22:30:16', '2022-02-10 22:30:16'),
(118, '1', '0', 'Firefox', '105.112.113.93', 'New Login', '2022-02-10 22:30:16', '2022-02-10 22:30:16'),
(119, '1', 'iPhone', 'Chrome', '197.210.226.88', 'New Login', '2022-02-11 00:07:28', '2022-02-11 00:07:28'),
(120, '1', 'iPhone', 'Chrome', '197.210.226.88', 'New Login', '2022-02-11 00:07:28', '2022-02-11 00:07:28'),
(121, '1', 'iPhone', 'Chrome', '197.210.227.188', 'New Login', '2022-02-11 00:07:59', '2022-02-11 00:07:59'),
(122, '1', 'iPhone', 'Chrome', '197.210.227.188', 'New Login', '2022-02-11 00:07:59', '2022-02-11 00:07:59'),
(123, '1', 'Macintosh', 'Chrome', '2.216.16.10', 'New Login', '2022-02-11 10:46:45', '2022-02-11 10:46:45'),
(124, '1', 'Macintosh', 'Chrome', '2.216.16.10', 'New Login', '2022-02-11 10:46:46', '2022-02-11 10:46:46'),
(125, '1', 'iPhone', 'Chrome', '197.210.55.46', 'New Login', '2022-02-11 11:34:02', '2022-02-11 11:34:02'),
(126, '1', 'iPhone', 'Chrome', '197.210.55.46', 'New Login', '2022-02-11 11:34:02', '2022-02-11 11:34:02'),
(127, '1', 'WebKit', 'Chrome', '105.112.40.85', 'New Login', '2022-02-11 11:49:30', '2022-02-11 11:49:30'),
(128, '1', 'WebKit', 'Chrome', '105.112.40.85', 'New Login', '2022-02-11 11:49:30', '2022-02-11 11:49:30'),
(129, '1', 'iPhone', 'Chrome', '197.210.54.133', 'New Login', '2022-02-11 12:49:57', '2022-02-11 12:49:57'),
(130, '1', 'iPhone', 'Chrome', '197.210.54.133', 'New Login', '2022-02-11 12:49:57', '2022-02-11 12:49:57'),
(131, '1', '0', 'Firefox', '105.112.115.26', 'New Login', '2022-02-11 13:19:21', '2022-02-11 13:19:21'),
(132, '1', '0', 'Firefox', '105.112.115.26', 'New Login', '2022-02-11 13:19:21', '2022-02-11 13:19:21'),
(133, '1', 'WebKit', 'Chrome', '127.0.0.1', 'New Login', '2022-03-29 09:25:06', '2022-03-29 09:25:06'),
(134, '1', 'WebKit', 'Chrome', '127.0.0.1', 'New Login', '2022-03-29 09:25:07', '2022-03-29 09:25:07'),
(135, '1', 'WebKit', 'Chrome', '127.0.0.1', 'New Login', '2022-03-29 11:24:03', '2022-03-29 11:24:03'),
(136, '1', 'WebKit', 'Chrome', '127.0.0.1', 'New Login', '2022-03-29 11:24:04', '2022-03-29 11:24:04'),
(137, '1', 'WebKit', 'Chrome', '127.0.0.1', 'New Login', '2022-03-29 11:40:01', '2022-03-29 11:40:01'),
(138, '1', 'WebKit', 'Chrome', '127.0.0.1', 'New Login', '2022-03-30 09:31:50', '2022-03-30 09:31:50'),
(139, '1', 'WebKit', 'Chrome', '127.0.0.1', 'New Login', '2022-03-30 09:31:51', '2022-03-30 09:31:51'),
(140, '1', 'WebKit', 'Chrome', '127.0.0.1', 'New Login', '2022-03-30 10:22:20', '2022-03-30 10:22:20'),
(141, '1', 'WebKit', 'Chrome', '127.0.0.1', 'New Login', '2022-03-30 10:22:20', '2022-03-30 10:22:20'),
(142, '1', 'WebKit', 'Chrome', '127.0.0.1', 'New Login', '2022-03-31 07:00:56', '2022-03-31 07:00:56'),
(143, '1', 'WebKit', 'Chrome', '127.0.0.1', 'New Login', '2022-03-31 07:00:59', '2022-03-31 07:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'light',
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_2fa_expiry` datetime NOT NULL,
  `enable_2fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_2fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass_2fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `dashboard_style`, `remember_token`, `token_2fa_expiry`, `enable_2fa`, `token_2fa`, `pass_2fa`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Admins', 'admin@prechain.com', '2021-06-22 12:55:52', '$2y$10$u7Qby8f.wpYfMJaAE4TnfOTNkuvuqc8cnP9KTu4JtbNHqWucTgdvO', '065678', 'light', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, 'active', 'Super Admin', '2021-06-17 12:55:52', '2022-03-31 08:22:52');

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
-- Table structure for table `kycs`
--

CREATE TABLE `kycs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kycs`
--

INSERT INTO `kycs` (`id`, `user`, `firstname`, `lastname`, `address`, `doc1`, `dob`, `photo`, `gender`, `verify_id`, `doc_type`, `doc2`, `status`, `created_at`, `updated_at`) VALUES
(4, '1', 'Victory', 'Efekpogua', 'Ozoro', 'photos/yxHbRxJe7lmWK8eFXhZfN30pNnhmNjL7ufDqJK9M.jpg', '2022-03-01', 'photos/Z91yHoIp4b8MkLU23MK5m5N6a0R3SctkKryBzAwv.jpg', 'Male', NULL, 'Drivers Licence', 'photos/BjPPq49P3zLYmPhga4JEGUPLp19zzSOvvxryIfXP.jpg', 'Verified', '2022-03-31 09:18:19', '2022-03-31 09:21:55');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_06_15_143602_create_sessions_table', 1),
(7, '2021_06_17_122927_create_admins_table', 2),
(8, '2021_06_21_085953_add_morefields_to_users_table', 3),
(9, '2021_06_21_092000_create_transactions_table', 4),
(10, '2021_06_21_092035_create_activities_table', 4),
(11, '2021_06_21_092056_create_referrals_table', 4),
(13, '2021_06_21_092716_create_kycs_table', 5),
(14, '2021_06_23_090353_create_stages_table', 6),
(15, '2021_06_23_103657_create_settings_table', 7),
(16, '2021_06_29_092105_create_paymethods_table', 8);

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
-- Table structure for table `paymethods`
--

CREATE TABLE `paymethods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `method_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acntname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acntnum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `networkmode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paymethods`
--

INSERT INTO `paymethods` (`id`, `method_name`, `symbol`, `type`, `address`, `acntname`, `acntnum`, `bankname`, `swcode`, `networkmode`, `created_at`, `updated_at`) VALUES
(1, 'Ethereum', 'ETH', 'Crypto', '09edfgvbjnmstfgyuhjs297862', NULL, NULL, NULL, NULL, 'ERC', '2021-06-29 08:37:38', '2021-06-29 09:10:50'),
(2, 'United State Dollar', 'USD', 'Currency', NULL, 'Ekilike', '08766545676', 'Polaris', '938u83', NULL, '2021-06-29 08:53:28', '2021-06-29 08:53:28'),
(3, 'Bitcoin', 'BTC', 'Crypto', '09edfgvbjnmstfgyuhjs29786', NULL, NULL, NULL, NULL, 'ERC', '2021-06-29 09:11:13', '2021-06-29 09:11:13'),
(4, 'Litecoin', 'LTC', 'Crypto', 'ujkejkeoe893n983u9eo', NULL, NULL, NULL, NULL, 'ERC', '2021-06-29 09:11:33', '2021-06-29 09:11:33'),
(5, 'Tether', 'USDT', 'Crypto', 'wqwerk234565rg', NULL, NULL, NULL, NULL, 'ERC', '2021-06-29 09:12:10', '2021-06-29 09:12:10'),
(6, 'Great Britain Pounds', 'GBP', 'Currency', NULL, 'Pouncer haj', '08976545768', 'Firstbank', '876', NULL, '2021-06-29 09:13:11', '2021-06-29 09:13:11'),
(7, 'Euro', 'EUR', 'Currency', NULL, 'Ekilike dfw', '56789876543', 'Polaris', '4578', NULL, '2021-06-29 09:13:38', '2021-07-01 12:39:45');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token_earned` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referrals` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `token_earned`, `agent`, `ref_user`, `referrals`, `created_at`, `updated_at`) VALUES
(3, NULL, '1', NULL, NULL, '2021-06-30 08:40:01', '2022-03-30 11:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `roi_logs`
--

CREATE TABLE `roi_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `staking_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `narration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roi_logs`
--

INSERT INTO `roi_logs` (`id`, `user_id`, `staking_id`, `amount`, `narration`, `created_at`, `updated_at`) VALUES
(1, 1, 8, '2.0833333333333', 'Profit', '2021-11-24 09:58:51', '2021-11-24 09:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('00H5SIOM1DFz712mOtOYeQiwGpuuHc7QhBZN2A9N', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUVRCQnczQ2pYcUp0RGlHZ2Nqamh6cDg0S0pwVGtVWW1rUDZNMFRpSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi91c2VyLWRldGFpbHMvMTEiO31zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1648722255),
('4H0mtBKoYDXKrWPmYL83A3cZf8kIkVrWuRn9QSAv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSTBraWxyTktScHgyZndGbXI1V0cwNmlqNlJBdjd0MFNUbjdSVmxSVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zZXR0aW5ncyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1648731038),
('8EEeABVXgoTTg17pUE62ZlFXHBQVMBoGmofxDOyv', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiR1lHcnU0VWlWOWRrVmhrc005cUhNVGFGdzJmMnoyNGEwVU5WcEhXViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQvdXNlci9reWMvYXBwbGljYXRpb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkb3MzZlBITHJIQUdHMkdrZkxFMFhoT2pIM2ZJNUZtcmM4cmIuVzNueElDLk94dTlwWDNjbHEiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJG9zM2ZQSExySEFHRzJHa2ZMRTBYaE9qSDNmSTVGbXJjOHJiLlczbnhJQy5PeHU5cFgzY2xxIjt9', 1648722140),
('DIppqKVGrr4Kgn3fTEA02iPpN941nd4KRYnDy3uK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV3BUcWRIV25QN3JFekVzUFhKdVB2SlpJWTdGTzNPb2FZc1ZuM3FVUSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo1MjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZC91c2VyL2t5Yy9hcHBsaWNhdGlvbiI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1648733321),
('YVAin3HWHS8LowI6jFNUZOtludVdS7H9q85sF25V', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0dGbVlJTk1adWxmNmRxcEh6TXV3Qkt4NVNuUVJGUXdNeXRoVHRWMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649083308);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amt_usd` double DEFAULT NULL,
  `pay_methods` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`pay_methods`)),
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kyc_verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usestake` tinyint(1) DEFAULT NULL,
  `minstake` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxstake` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whitepaper` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annoucement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `livechat` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `install_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `captcha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verify` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one_month_roi` float DEFAULT NULL,
  `four_month_roi` float DEFAULT NULL,
  `six_month_roi` float DEFAULT NULL,
  `nine_month_roi` float DEFAULT NULL,
  `one_year_roi` float DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stakeduration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_com` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthday` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `btc_add` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ltc_add` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usdt_add` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eth_add` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `token_name`, `token_symbol`, `amt_usd`, `pay_methods`, `site_name`, `site_email`, `kyc_verification`, `address`, `phone`, `site_url`, `usestake`, `minstake`, `maxstake`, `whitepaper`, `annoucement`, `livechat`, `install_type`, `captcha`, `social`, `email_verify`, `logo`, `favicon`, `one_month_roi`, `four_month_roi`, `six_month_roi`, `nine_month_roi`, `one_year_roi`, `duration`, `stakeduration`, `ref_com`, `monthday`, `created_at`, `updated_at`, `btc_add`, `ltc_add`, `usdt_add`, `eth_add`) VALUES
(1, 'Prechain', 'PRC', 0.45, '[\"usd\",\"btc\",\"eth\",\"ltc\",\"bnb\"]', 'Prechain', 'admin@prechain.com', 'off', 'ksjhhjhdjd', '0655', 'http://127.0.0.1:8000', 1, '20', '50', 'You can contribute to Prechain project by purchasing PRC Token. you can even stake PRC to yield more return.\r\n\r\nYou can get a quick response to any questions, and have a chat with the project team via our support email admin@prechain.com\r\n\r\nDon’t hesitate to invite your friends! Your referral link: http://127.0.0.1:8000/ref/lulotest', 'Welcome', 'hey', 'Main-Domain', 'false', 'no', 'false', NULL, NULL, 4, 5, 8, 10, 40, '[\"onem\",\"fourm\",\"sixm\",\"ninem\",\"oney\"]', '1 Month', '3', NULL, NULL, '2022-03-31 08:24:15', 'nshshjhsjhsjsjsjhshjs', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stages`
--

CREATE TABLE `stages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stage_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_avail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stages`
--

INSERT INTO `stages` (`id`, `stage_name`, `token`, `token_avail`, `price`, `bonus`, `min`, `max`, `start_date`, `end_date`, `status`, `sales`, `created_at`, `updated_at`) VALUES
(1, 'Demo Stage 1', '100000', '79551', '10', '0', '0', '50000', '2021-06-23 11:25:00', '2021-08-26 14:29:00', 'active', 'on', '2021-06-23 08:28:18', '2022-03-31 07:49:15'),
(2, 'Demo Stage 2', '10000', '10000', '20', '0', '20', '15000', '2021-06-17 11:25:00', '2021-07-31 14:25:00', 'expired', 'paused', '2021-06-23 08:48:37', '2021-06-28 09:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `stakings`
--

CREATE TABLE `stakings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `stake_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_roi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int(255) DEFAULT NULL,
  `tokens` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_bonus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_amt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payfrom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `txn_id`, `user`, `tokens`, `token_bonus`, `total_token`, `amount`, `base_amt`, `type`, `status`, `payfrom`, `address`, `proof`, `stage`, `to`, `created_at`, `updated_at`) VALUES
(8, 'TXNvhA0Qu', 1, '10000', '0', '10000', '4500', '4500', 'PURCHASE', 'Confirmed', NULL, NULL, 'imgs.jpg1624966782', 'Demo Stage 1', 'EUR', '2021-06-29 10:39:42', '2021-06-29 10:43:36'),
(10, 'TXNR57HDk', 1, '500', '0', '500', '0', '500', 'TRANSFER', 'Confirmed', NULL, 'church@mail.com', NULL, NULL, NULL, '2021-07-21 15:54:53', '2021-07-21 15:54:53'),
(11, 'TXNR57HDk', 8, '500', '0', '500', '0', '500', 'TRANSFER', 'Confirmed', NULL, 'church@mail.com', NULL, NULL, NULL, '2021-07-21 15:54:53', '2021-07-21 15:54:53'),
(12, 'TXNwHdWCo', 1, '1000', '0', '1000', '0', '1000', 'TRANSFER', 'Confirmed', NULL, 'church@mail.com', NULL, NULL, NULL, '2021-07-23 19:03:49', '2021-07-23 19:03:49'),
(13, 'TXNwHdWCo', 8, '1000', '0', '1000', '0', '1000', 'TRANSFER', 'Confirmed', NULL, 'church@mail.com', NULL, NULL, NULL, '2021-07-23 19:03:49', '2021-07-23 19:03:49'),
(14, 'TXNxUnosL', 8, '500', NULL, NULL, '500', NULL, 'BONUS', 'Confirmed', NULL, NULL, NULL, 'Demo Stage 1', 'Manual', '2021-07-23 20:03:00', '2021-07-23 19:06:25'),
(15, 'TXNi8bKWW', 1, '500', NULL, NULL, '500', NULL, 'BONUS', 'Confirmed', NULL, NULL, NULL, 'Demo Stage 1', 'Paypal', '2021-07-23 20:04:00', '2021-07-23 19:07:34'),
(17, 'TXNljTvMJ', 1, '100', '0', '100', '0.0268756', '100', 'PURCHASE', 'Confirmed', NULL, NULL, '1631010161cu5.jpg', 'Demo Stage 1', 'ETH', '2021-09-07 14:22:41', '2021-09-07 14:29:36'),
(19, 'TXNuIHao9', 1, '20049', '0', '20049', '0.190837', '9022.05', 'PURCHASE', 'Confirmed', NULL, NULL, 'photos/gX2PHVvl6oQY5vNKIjTI78Sf4dozMZyMvUVlwYjp.jpg', 'Demo Stage 1', 'BTC', '2022-03-30 11:05:03', '2022-03-30 11:07:06'),
(20, 'TXNBlQmCk', 10, '100', '0', '100', '45', '45', 'PURCHASE', 'Confirmed', NULL, NULL, 'photos/OzUT1GHjTxHwnMzuSDTobaUL8yObesd5XvSgWvne.jpg', 'Demo Stage 1', 'USD', '2022-03-30 11:53:19', '2022-03-30 11:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usd_bal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `ltc_bal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eth_bal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_bal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_bal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tk_bonus_bal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tot_tk_bal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verification_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Not Verified',
  `acnt_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `ref_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_bonus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `roi_bal` float DEFAULT NULL,
  `roi_secret` float DEFAULT NULL,
  `bonus_to_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `wallet_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `network` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_preference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity_preference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'light',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `username`, `email`, `usd_bal`, `ltc_bal`, `eth_bal`, `btc_bal`, `token_bal`, `tk_bonus_bal`, `tot_tk_bal`, `verification_status`, `acnt_status`, `ref_by`, `ref_link`, `ref_bonus`, `roi_bal`, `roi_secret`, `bonus_to_ref`, `wallet_type`, `wallet_address`, `network`, `nationality`, `dob`, `phone_number`, `email_preference`, `activity_preference`, `dashboard_style`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Prechain Test', NULL, 'prechaintest', 'user@prechain.com', '0', NULL, NULL, NULL, '40149', '0', '40822.083333333', 'Verified', 'active', NULL, 'http://127.0.0.1:8000/ref/prechaintest', '3', 2.08333, NULL, '0', 'Ethereum', 'kjkdh767dhhd', 'ERC', 'Nigeria', '2021-06-02', '07069018215', NULL, NULL, 'light', '2022-03-29 12:28:23', '$2y$10$os3fPHLrHAGG2GkfLE0XhOjH3fI5Fmrc8rb.W3nxIC.Oxu9pX3clq', NULL, NULL, NULL, NULL, NULL, '2021-06-17 09:41:05', '2022-03-31 09:21:55'),
(10, 'Minko malla', NULL, 'victory334', 'mik@me.com', '0', NULL, NULL, NULL, '100', '0', '100', 'Not Verified', 'active', '1', 'http://127.0.0.1:8000/ref/victory334', '0', NULL, NULL, '3', 'Ethereum', '988w99chhiu8uu833', NULL, 'Bahamas', NULL, NULL, NULL, NULL, 'light', '2022-03-30 11:50:35', '$2y$10$WCFg2qynnbMetzJmAsLdCu7yp6xoT/Q71kCLzFUtRrJr01O73Xq9q', NULL, NULL, NULL, NULL, NULL, '2022-03-30 11:50:34', '2022-03-30 11:54:25'),
(11, 'Churchill', NULL, NULL, 'church@mail.com', '0', NULL, NULL, NULL, '0', '0', NULL, 'Not Verified', 'active', NULL, '/ref/', '0', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'light', '2022-03-31 08:47:42', '$2y$10$jtVes5vh6RYK3//vN60D7ueY/EEvnGlUjKgLhhqNGgAjLDhQiXDdS', NULL, NULL, NULL, NULL, NULL, '2022-03-31 08:47:42', '2022-03-31 09:24:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kycs`
--
ALTER TABLE `kycs`
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
-- Indexes for table `paymethods`
--
ALTER TABLE `paymethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roi_logs`
--
ALTER TABLE `roi_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stages`
--
ALTER TABLE `stages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stakings`
--
ALTER TABLE `stakings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kycs`
--
ALTER TABLE `kycs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `paymethods`
--
ALTER TABLE `paymethods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roi_logs`
--
ALTER TABLE `roi_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stages`
--
ALTER TABLE `stages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stakings`
--
ALTER TABLE `stakings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

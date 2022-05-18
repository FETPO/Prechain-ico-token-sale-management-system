-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `activities`;
CREATE TABLE `activities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `activities` (`id`, `user`, `device`, `browser`, `ip`, `description`, `created_at`, `updated_at`) VALUES
(83,	'1',	'WebKit',	'Chrome',	'105.112.209.173',	'New Login',	'2021-11-24 18:20:02',	'2021-11-24 18:20:02'),
(84,	'1',	'WebKit',	'Chrome',	'105.112.209.173',	'New Login',	'2021-11-24 18:20:02',	'2021-11-24 18:20:02'),
(85,	'1',	'0',	'Firefox',	'129.205.113.37',	'New Login',	'2021-11-24 20:01:04',	'2021-11-24 20:01:04'),
(86,	'1',	'0',	'Firefox',	'129.205.113.37',	'New Login',	'2021-11-24 20:01:05',	'2021-11-24 20:01:05'),
(87,	'1',	'iPhone',	'Chrome',	'197.210.79.148',	'New Login',	'2021-11-24 20:15:48',	'2021-11-24 20:15:48'),
(88,	'1',	'iPhone',	'Chrome',	'197.210.79.148',	'New Login',	'2021-11-24 20:15:48',	'2021-11-24 20:15:48'),
(89,	'1',	'WebKit',	'Chrome',	'105.112.101.127',	'New Login',	'2021-11-24 20:29:08',	'2021-11-24 20:29:08'),
(90,	'1',	'WebKit',	'Chrome',	'105.112.101.127',	'New Login',	'2021-11-24 20:29:08',	'2021-11-24 20:29:08'),
(91,	'1',	'0',	'Firefox',	'129.205.113.37',	'New Login',	'2021-11-24 20:34:47',	'2021-11-24 20:34:47'),
(92,	'1',	'0',	'Firefox',	'129.205.113.37',	'New Login',	'2021-11-24 20:34:47',	'2021-11-24 20:34:47'),
(93,	'1',	'WebKit',	'Chrome',	'105.112.109.153',	'New Login',	'2021-11-25 17:27:16',	'2021-11-25 17:27:16'),
(94,	'1',	'WebKit',	'Chrome',	'105.112.109.153',	'New Login',	'2021-11-25 17:27:16',	'2021-11-25 17:27:16'),
(95,	'1',	'0',	'Firefox',	'197.210.79.105',	'New Login',	'2021-11-25 19:38:37',	'2021-11-25 19:38:37'),
(96,	'1',	'0',	'Firefox',	'197.210.79.105',	'New Login',	'2021-11-25 19:38:37',	'2021-11-25 19:38:37'),
(97,	'1',	'WebKit',	'Chrome',	'193.176.86.58',	'New Login',	'2022-01-24 13:09:19',	'2022-01-24 13:09:19'),
(98,	'1',	'WebKit',	'Chrome',	'193.176.86.58',	'New Login',	'2022-01-24 13:09:20',	'2022-01-24 13:09:20'),
(99,	'1',	'WebKit',	'Chrome',	'193.176.86.58',	'New Login',	'2022-01-24 20:38:27',	'2022-01-24 20:38:27'),
(100,	'1',	'WebKit',	'Chrome',	'193.176.86.58',	'New Login',	'2022-01-24 20:38:27',	'2022-01-24 20:38:27'),
(101,	'1',	'WebKit',	'Chrome',	'193.176.86.58',	'New Login',	'2022-01-26 01:07:15',	'2022-01-26 01:07:15'),
(102,	'1',	'WebKit',	'Chrome',	'193.176.86.58',	'New Login',	'2022-01-26 01:07:15',	'2022-01-26 01:07:15'),
(103,	'1',	'WebKit',	'Chrome',	'193.176.86.40',	'New Login',	'2022-01-26 13:15:43',	'2022-01-26 13:15:43'),
(104,	'1',	'WebKit',	'Chrome',	'193.176.86.40',	'New Login',	'2022-01-26 13:15:43',	'2022-01-26 13:15:43'),
(105,	'1',	'WebKit',	'Chrome',	'193.176.86.40',	'New Login',	'2022-01-27 16:03:22',	'2022-01-27 16:03:22'),
(106,	'1',	'WebKit',	'Chrome',	'193.176.86.40',	'New Login',	'2022-01-27 16:03:22',	'2022-01-27 16:03:22'),
(107,	'1',	'0',	'Firefox',	'105.112.10.112',	'New Login',	'2022-02-02 14:04:57',	'2022-02-02 14:04:57'),
(108,	'1',	'0',	'Firefox',	'105.112.10.112',	'New Login',	'2022-02-02 14:04:57',	'2022-02-02 14:04:57'),
(109,	'1',	'0',	'Firefox',	'105.112.27.97',	'New Login',	'2022-02-10 01:52:59',	'2022-02-10 01:52:59'),
(110,	'1',	'0',	'Firefox',	'105.112.27.97',	'New Login',	'2022-02-10 01:52:59',	'2022-02-10 01:52:59'),
(111,	'1',	'0',	'Firefox',	'105.112.126.167',	'New Login',	'2022-02-10 19:36:09',	'2022-02-10 19:36:09'),
(112,	'1',	'0',	'Firefox',	'105.112.126.167',	'New Login',	'2022-02-10 19:36:09',	'2022-02-10 19:36:09'),
(113,	'1',	'0',	'Firefox',	'105.112.126.167',	'New Login',	'2022-02-10 19:53:41',	'2022-02-10 19:53:41'),
(114,	'1',	'0',	'Firefox',	'105.112.126.167',	'New Login',	'2022-02-10 19:53:41',	'2022-02-10 19:53:41'),
(115,	'1',	'0',	'Firefox',	'105.112.126.167',	'New Login',	'2022-02-10 19:58:54',	'2022-02-10 19:58:54'),
(116,	'1',	'0',	'Firefox',	'105.112.126.167',	'New Login',	'2022-02-10 19:58:54',	'2022-02-10 19:58:54'),
(117,	'1',	'0',	'Firefox',	'105.112.113.93',	'New Login',	'2022-02-10 22:30:16',	'2022-02-10 22:30:16'),
(118,	'1',	'0',	'Firefox',	'105.112.113.93',	'New Login',	'2022-02-10 22:30:16',	'2022-02-10 22:30:16'),
(119,	'1',	'iPhone',	'Chrome',	'197.210.226.88',	'New Login',	'2022-02-11 00:07:28',	'2022-02-11 00:07:28'),
(120,	'1',	'iPhone',	'Chrome',	'197.210.226.88',	'New Login',	'2022-02-11 00:07:28',	'2022-02-11 00:07:28'),
(121,	'1',	'iPhone',	'Chrome',	'197.210.227.188',	'New Login',	'2022-02-11 00:07:59',	'2022-02-11 00:07:59'),
(122,	'1',	'iPhone',	'Chrome',	'197.210.227.188',	'New Login',	'2022-02-11 00:07:59',	'2022-02-11 00:07:59'),
(123,	'1',	'Macintosh',	'Chrome',	'2.216.16.10',	'New Login',	'2022-02-11 10:46:45',	'2022-02-11 10:46:45'),
(124,	'1',	'Macintosh',	'Chrome',	'2.216.16.10',	'New Login',	'2022-02-11 10:46:46',	'2022-02-11 10:46:46'),
(125,	'1',	'iPhone',	'Chrome',	'197.210.55.46',	'New Login',	'2022-02-11 11:34:02',	'2022-02-11 11:34:02'),
(126,	'1',	'iPhone',	'Chrome',	'197.210.55.46',	'New Login',	'2022-02-11 11:34:02',	'2022-02-11 11:34:02'),
(127,	'1',	'WebKit',	'Chrome',	'105.112.40.85',	'New Login',	'2022-02-11 11:49:30',	'2022-02-11 11:49:30'),
(128,	'1',	'WebKit',	'Chrome',	'105.112.40.85',	'New Login',	'2022-02-11 11:49:30',	'2022-02-11 11:49:30'),
(129,	'1',	'iPhone',	'Chrome',	'197.210.54.133',	'New Login',	'2022-02-11 12:49:57',	'2022-02-11 12:49:57'),
(130,	'1',	'iPhone',	'Chrome',	'197.210.54.133',	'New Login',	'2022-02-11 12:49:57',	'2022-02-11 12:49:57'),
(131,	'1',	'0',	'Firefox',	'105.112.115.26',	'New Login',	'2022-02-11 13:19:21',	'2022-02-11 13:19:21'),
(132,	'1',	'0',	'Firefox',	'105.112.115.26',	'New Login',	'2022-02-11 13:19:21',	'2022-02-11 13:19:21'),
(133,	'1',	'WebKit',	'Chrome',	'127.0.0.1',	'New Login',	'2022-03-29 09:25:06',	'2022-03-29 09:25:06'),
(134,	'1',	'WebKit',	'Chrome',	'127.0.0.1',	'New Login',	'2022-03-29 09:25:07',	'2022-03-29 09:25:07'),
(135,	'1',	'WebKit',	'Chrome',	'127.0.0.1',	'New Login',	'2022-03-29 11:24:03',	'2022-03-29 11:24:03'),
(136,	'1',	'WebKit',	'Chrome',	'127.0.0.1',	'New Login',	'2022-03-29 11:24:04',	'2022-03-29 11:24:04'),
(137,	'1',	'WebKit',	'Chrome',	'127.0.0.1',	'New Login',	'2022-03-29 11:40:01',	'2022-03-29 11:40:01'),
(138,	'1',	'WebKit',	'Chrome',	'127.0.0.1',	'New Login',	'2022-03-30 09:31:50',	'2022-03-30 09:31:50'),
(139,	'1',	'WebKit',	'Chrome',	'127.0.0.1',	'New Login',	'2022-03-30 09:31:51',	'2022-03-30 09:31:51'),
(140,	'1',	'WebKit',	'Chrome',	'127.0.0.1',	'New Login',	'2022-03-30 10:22:20',	'2022-03-30 10:22:20'),
(141,	'1',	'WebKit',	'Chrome',	'127.0.0.1',	'New Login',	'2022-03-30 10:22:20',	'2022-03-30 10:22:20'),
(142,	'1',	'WebKit',	'Chrome',	'127.0.0.1',	'New Login',	'2022-03-31 07:00:56',	'2022-03-31 07:00:56'),
(143,	'1',	'WebKit',	'Chrome',	'127.0.0.1',	'New Login',	'2022-03-31 07:00:59',	'2022-03-31 07:00:59'),
(144,	'1',	'0',	'Firefox',	'190.2.131.206',	'New Login',	'2022-04-14 12:21:49',	'2022-04-14 12:21:49'),
(145,	'1',	'0',	'Firefox',	'190.2.131.206',	'New Login',	'2022-04-14 12:21:49',	'2022-04-14 12:21:49'),
(146,	'1',	'WebKit',	'Chrome',	'102.89.32.228',	'New Login',	'2022-04-14 18:58:04',	'2022-04-14 18:58:04'),
(147,	'1',	'WebKit',	'Chrome',	'102.89.32.228',	'New Login',	'2022-04-14 18:58:04',	'2022-04-14 18:58:04'),
(148,	'1',	'WebKit',	'Edge',	'197.211.58.190',	'New Login',	'2022-04-14 22:56:53',	'2022-04-14 22:56:53'),
(149,	'1',	'WebKit',	'Edge',	'197.211.58.190',	'New Login',	'2022-04-14 22:56:53',	'2022-04-14 22:56:53'),
(150,	'1',	'WebKit',	'Chrome',	'91.196.220.35',	'New Login',	'2022-04-15 02:24:54',	'2022-04-15 02:24:54'),
(151,	'1',	'WebKit',	'Chrome',	'91.196.220.35',	'New Login',	'2022-04-15 02:24:54',	'2022-04-15 02:24:54'),
(152,	'1',	'0',	'Firefox',	'49.36.144.100',	'New Login',	'2022-04-15 04:57:42',	'2022-04-15 04:57:42'),
(153,	'1',	'WebKit',	'Chrome',	'132.154.118.50',	'New Login',	'2022-04-15 06:36:43',	'2022-04-15 06:36:43'),
(154,	'1',	'Macintosh',	'Safari',	'188.53.138.218',	'New Login',	'2022-04-15 07:50:56',	'2022-04-15 07:50:56'),
(155,	'1',	'Macintosh',	'Safari',	'188.53.138.218',	'New Login',	'2022-04-15 07:51:27',	'2022-04-15 07:51:27'),
(156,	'1',	'0',	'Firefox',	'190.2.132.207',	'New Login',	'2022-04-15 09:45:12',	'2022-04-15 09:45:12'),
(157,	'1',	'0',	'Firefox',	'190.2.132.207',	'New Login',	'2022-04-15 09:48:34',	'2022-04-15 09:48:34'),
(158,	'1',	'0',	'Firefox',	'190.2.132.207',	'New Login',	'2022-04-15 09:48:34',	'2022-04-15 09:48:34'),
(159,	'1',	'WebKit',	'Chrome',	'197.210.55.170',	'New Login',	'2022-04-15 09:51:55',	'2022-04-15 09:51:55'),
(160,	'1',	'WebKit',	'Chrome',	'197.210.55.170',	'New Login',	'2022-04-15 09:51:55',	'2022-04-15 09:51:55');

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `dashboard_style`, `remember_token`, `token_2fa_expiry`, `enable_2fa`, `token_2fa`, `pass_2fa`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1,	'Admins',	'admin@prechain.com',	'2021-06-22 12:55:52',	'$2y$10$u7Qby8f.wpYfMJaAE4TnfOTNkuvuqc8cnP9KTu4JtbNHqWucTgdvO',	'065678',	'light',	NULL,	'0000-00-00 00:00:00',	NULL,	NULL,	NULL,	'active',	'Super Admin',	'2021-06-17 12:55:52',	'2022-03-31 08:22:52');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `kycs`;
CREATE TABLE `kycs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `doc1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `kycs` (`id`, `user`, `firstname`, `lastname`, `address`, `doc1`, `dob`, `photo`, `gender`, `verify_id`, `doc_type`, `doc2`, `status`, `created_at`, `updated_at`) VALUES
(4,	'1',	'Victory',	'Efekpogua',	'Ozoro',	'photos/yxHbRxJe7lmWK8eFXhZfN30pNnhmNjL7ufDqJK9M.jpg',	'2022-03-01',	'photos/Z91yHoIp4b8MkLU23MK5m5N6a0R3SctkKryBzAwv.jpg',	'Male',	NULL,	'Drivers Licence',	'photos/BjPPq49P3zLYmPhga4JEGUPLp19zzSOvvxryIfXP.jpg',	'Verified',	'2022-03-31 09:18:19',	'2022-03-31 09:21:55');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2021_06_15_143602_create_sessions_table',	1),
(7,	'2021_06_17_122927_create_admins_table',	2),
(8,	'2021_06_21_085953_add_morefields_to_users_table',	3),
(9,	'2021_06_21_092000_create_transactions_table',	4),
(10,	'2021_06_21_092035_create_activities_table',	4),
(11,	'2021_06_21_092056_create_referrals_table',	4),
(13,	'2021_06_21_092716_create_kycs_table',	5),
(14,	'2021_06_23_090353_create_stages_table',	6),
(15,	'2021_06_23_103657_create_settings_table',	7),
(16,	'2021_06_29_092105_create_paymethods_table',	8);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `paymethods`;
CREATE TABLE `paymethods` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `paymethods` (`id`, `method_name`, `symbol`, `type`, `address`, `acntname`, `acntnum`, `bankname`, `swcode`, `networkmode`, `created_at`, `updated_at`) VALUES
(1,	'Ethereum',	'ETH',	'Crypto',	'09edfgvbjnmstfgyuhjs297862',	NULL,	NULL,	NULL,	NULL,	'ERC',	'2021-06-29 08:37:38',	'2021-06-29 09:10:50'),
(2,	'United State Dollar',	'USD',	'Currency',	NULL,	'Ekilike',	'08766545676',	'Polaris',	'938u83',	NULL,	'2021-06-29 08:53:28',	'2021-06-29 08:53:28'),
(3,	'Bitcoin',	'BTC',	'Crypto',	'09edfgvbjnmstfgyuhjs29786',	NULL,	NULL,	NULL,	NULL,	'ERC',	'2021-06-29 09:11:13',	'2021-06-29 09:11:13'),
(4,	'Litecoin',	'LTC',	'Crypto',	'ujkejkeoe893n983u9eo',	NULL,	NULL,	NULL,	NULL,	'ERC',	'2021-06-29 09:11:33',	'2021-06-29 09:11:33'),
(5,	'Tether',	'USDT',	'Crypto',	'wqwerk234565rg',	NULL,	NULL,	NULL,	NULL,	'ERC',	'2021-06-29 09:12:10',	'2021-06-29 09:12:10'),
(6,	'Great Britain Pounds',	'GBP',	'Currency',	NULL,	'Pouncer haj',	'08976545768',	'Firstbank',	'876',	NULL,	'2021-06-29 09:13:11',	'2021-06-29 09:13:11'),
(7,	'Euro',	'EUR',	'Currency',	NULL,	'Ekilike dfw',	'56789876543',	'Polaris',	'4578',	NULL,	'2021-06-29 09:13:38',	'2021-07-01 12:39:45');

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `referrals`;
CREATE TABLE `referrals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `token_earned` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referrals` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `referrals` (`id`, `token_earned`, `agent`, `ref_user`, `referrals`, `created_at`, `updated_at`) VALUES
(3,	NULL,	'1',	NULL,	NULL,	'2021-06-30 08:40:01',	'2022-03-30 11:54:25');

DROP TABLE IF EXISTS `roi_logs`;
CREATE TABLE `roi_logs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `staking_id` bigint(20) unsigned DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `narration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roi_logs` (`id`, `user_id`, `staking_id`, `amount`, `narration`, `created_at`, `updated_at`) VALUES
(1,	1,	8,	'2.0833333333333',	'Profit',	'2021-11-24 09:58:51',	'2021-11-24 09:58:51');

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HC9eM9EWw4YvA97lsaSj5Z4F87mQHzvtJBsSEkoG',	NULL,	'122.177.155.157',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNU9iRndySXg3MnNuMkh4dVNWdzBHeHVqVkdJS0ZJTk1SVHRuM3VYWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcHJlY2hhaW4uYnJ5bmFtaWNzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1650003364),
('yK319IXAGywZUSWBhr1EVC6e0sHBEcn5z6unBbAG',	NULL,	'122.177.155.157',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoic1NZZmdZY0tvT1N4RzIxamROdmwzVDljdTNicFRaQmNiZ21Kd1BRdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vcHJlY2hhaW4uYnJ5bmFtaWNzLmNvbS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1650003508),
('LyXcbWbnpUj3hBik08tKJPmvwMXO5B5AXahZ2PKy',	NULL,	'132.154.118.50',	'Mozilla/5.0 (Linux; Android 9; Redmi Y2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWd2MXliVzRNdk9IaG5Mdk5CaEpYWXhNbnAxcXBkV1ZiUFFTd1JMciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcHJlY2hhaW4uYnJ5bmFtaWNzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1650004473),
('9CWMpvyOGRe0L1ZQo6sJypNzU1usXWZDyU88DHid',	NULL,	'132.154.118.50',	'Mozilla/5.0 (Linux; Android 9; Redmi Y2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRnYyc0d2Nmxoa3NWSVB4Z09WQjU0TFJhMWx1a3JPY0FnUGJ3WGtPMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vcHJlY2hhaW4uYnJ5bmFtaWNzLmNvbS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1650004523),
('MJeIFfaprLoLLuoSi5Fl1q9Mv0X1V2lKAG2OhMZa',	NULL,	'132.154.118.50',	'Mozilla/5.0 (Linux; Android 9; Redmi Y2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36',	'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibmF6bGw2OWk1NEpLM0JJT2JxSkQzbVhBV0N2WUZCeHNvNXp6cFZIOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHBzOi8vcHJlY2hhaW4uYnJ5bmFtaWNzLmNvbS90d28tZmFjdG9yLWNoYWxsZW5nZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NToibG9naW4iO2E6MTp7czo4OiJyZW1lbWJlciI7YjoxO319',	1650004622),
('NtX53OUbJBvxuChQdzLO6XvHpL2atwD1IOXDJKh2',	NULL,	'27.57.109.219',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36 Edg/100.0.1185.39',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZkhxbVR3WVk4Q043UExYbFpueUhWREJKTVFPb0hxbkdXdGVOWGpQNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcHJlY2hhaW4uYnJ5bmFtaWNzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1650007060),
('Ou9HIWzrcyGHAIs2pDDntzImJxruQ7wsfE1dCdv9',	NULL,	'188.53.138.218',	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.3 Safari/605.1.15',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYzZvWjg2SURXblNvaWxDeGJacFlvY1VuakE5aVFsMGx1TUJpTjg3QSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcHJlY2hhaW4uYnJ5bmFtaWNzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1650008870),
('lJz6qDvB2sowKO5IhqldNzhYT2hdqAzaxr4aXj6W',	NULL,	'188.53.138.218',	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.3 Safari/605.1.15',	'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNTVUdkZQTlpmWnI5UnMyemtwcnNTZERPR3ZCUDVQOFN5U1BoOWQxZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vcHJlY2hhaW4uYnJ5bmFtaWNzLmNvbS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjU6ImxvZ2luIjthOjE6e3M6ODoicmVtZW1iZXIiO2I6MDt9fQ==',	1650009096),
('OAXlWUCsxkaegXXXvdQmswwP1IvLXl2Y0JtqkNOn',	NULL,	'181.215.176.157',	'Mozilla/5.0 (Linux; Android 10; SM-N960F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.101 Mobile Safari/537.36',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmZ0dEFjaktmZTZ1NGJmOHlCNm9Ea1p1cHUwMmZLT3U5TEt6UE1qeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcHJlY2hhaW4uYnJ5bmFtaWNzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1650010037),
('R6H741HtjN4flMWiSjRYcw6r2cRofB7xuMzrTdS3',	NULL,	'66.249.79.84',	'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1JZR3hQN3JFeUdPeFpuRHNTaVVGOXZIYUExQW14bGRrT1daYmQ3OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcHJlY2hhaW4uYnJ5bmFtaWNzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1650012369),
('HFUgi92BWjaTEob34ajjAGGqUNX2Qgnh6oM3Wcsl',	NULL,	'66.249.79.84',	'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejFNMUtITWJpN2twb3FUeTNRUEt4Z3ZiYUYyNWNKcDdYdmw3TTh0ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcHJlY2hhaW4uYnJ5bmFtaWNzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1650012533),
('NQIMcg4j0271erUeksCv1E1OkmFHg5SRzSRViAAH',	NULL,	'66.249.79.86',	'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQmhhYXhYeW9QNk02bURuc0NyRFgxRkt3N1Z1VEszYURvSEw3c0ZqMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcHJlY2hhaW4uYnJ5bmFtaWNzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1650012534),
('Ip0eb4yH3QCtWcIwXBVA5P8ahksHTHtZMSKaUVi3',	1,	'190.2.132.207',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:97.0) Gecko/20100101 Firefox/97.0',	'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiUVNUWXJZYmtaWGs3SVc4ZW1NYUNxbVhkcWFaa1c0S1IwbklaMWt6eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcHJlY2hhaW4uYnJ5bmFtaWNzLmNvbS9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU6ImxvZ2luIjthOjI6e3M6MjoiaWQiO2k6MTtzOjg6InJlbWVtYmVyIjtiOjA7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRvczNmUEhMckhBR0cyR2tmTEUwWGhPakgzZkk1Rm1yYzhyYi5XM254SUMuT3h1OXBYM2NscSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkb3MzZlBITHJIQUdHMkdrZkxFMFhoT2pIM2ZJNUZtcmM4cmIuVzNueElDLk94dTlwWDNjbHEiO30=',	1650016115),
('KCw4yNkG15wiRfnS0H53n4UPTzEkB5H8HzeJ31tL',	1,	'197.210.55.170',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.88 Safari/537.36',	'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiOE9Xbmx5N3l0cU9GZ1Bxc2ZPWFZIMktLcndwQ01QSFJldVhFUU9mWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vcHJlY2hhaW4uYnJ5bmFtaWNzLmNvbS9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkb3MzZlBITHJIQUdHMkdrZkxFMFhoT2pIM2ZJNUZtcmM4cmIuVzNueElDLk94dTlwWDNjbHEiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJG9zM2ZQSExySEFHRzJHa2ZMRTBYaE9qSDNmSTVGbXJjOHJiLlczbnhJQy5PeHU5cFgzY2xxIjt9',	1650016315);

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `token_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amt_usd` double DEFAULT NULL,
  `pay_methods` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kyc_verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usestake` tinyint(1) DEFAULT NULL,
  `minstake` text COLLATE utf8mb4_unicode_ci,
  `maxstake` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whitepaper` text COLLATE utf8mb4_unicode_ci,
  `annoucement` text COLLATE utf8mb4_unicode_ci,
  `livechat` longtext COLLATE utf8mb4_unicode_ci,
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
  `sales_start_date` datetime DEFAULT NULL,
  `ref_com` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthday` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `btc_add` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ltc_add` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usdt_add` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eth_add` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `settings` (`id`, `token_name`, `token_symbol`, `amt_usd`, `pay_methods`, `site_name`, `site_email`, `kyc_verification`, `address`, `phone`, `site_url`, `usestake`, `minstake`, `maxstake`, `whitepaper`, `annoucement`, `livechat`, `install_type`, `captcha`, `social`, `email_verify`, `logo`, `favicon`, `one_month_roi`, `four_month_roi`, `six_month_roi`, `nine_month_roi`, `one_year_roi`, `duration`, `stakeduration`, `sales_start_date`, `ref_com`, `monthday`, `created_at`, `updated_at`, `btc_add`, `ltc_add`, `usdt_add`, `eth_add`) VALUES
(1,	'Prechain',	'PRC',	0.45,	'[\"usd\",\"btc\",\"eth\",\"ltc\",\"usdt\",\"bnb\"]',	'Prechain',	'admin@prechain.com',	'off',	'ksjhhjhdjd',	'0655',	'https://prechain.brynamics.com/',	1,	'20',	'50',	'You can contribute to Prechain project by purchasing PRC Token. you can even stake PRC to yield more return.\r\n\r\nYou can get a quick response to any questions, and have a chat with the project team via our support email admin@prechain.com\r\n\r\nDon’t hesitate to invite your friends! Your referral link: http://127.0.0.1:8000/ref/lulotest',	NULL,	'hey',	'Main-Domain',	'false',	'no',	'false',	'photos/JvjHxJqVywV1CMd0hy9iZVdbJf69Oz03r6jYco9M.png',	NULL,	4,	5,	8,	10,	40,	'[\"onem\",\"fourm\",\"sixm\",\"ninem\",\"oney\"]',	'1 Month',	'2023-04-14 19:07:24',	'3',	NULL,	NULL,	'2022-04-14 19:07:24',	'nshshjhsjhsjsjsjhshjs',	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `stages`;
CREATE TABLE `stages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `stages` (`id`, `stage_name`, `token`, `token_avail`, `price`, `bonus`, `min`, `max`, `start_date`, `end_date`, `status`, `sales`, `created_at`, `updated_at`) VALUES
(1,	'Demo Stage 1',	'16000000',	'16000000',	'0.02',	'1',	'100',	'50000',	'2022-04-14 20:03:00',	'2022-04-20 20:02:00',	'active',	'on',	'2021-06-23 08:28:18',	'2022-04-14 19:04:31'),
(2,	'Demo Stage 2',	'10000',	'10000',	'20',	'0',	'20',	'15000',	'2021-06-17 11:25:00',	'2021-07-31 14:25:00',	'expired',	'paused',	'2021-06-23 08:48:37',	'2021-06-28 09:07:33');

DROP TABLE IF EXISTS `stakings`;
CREATE TABLE `stakings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `stake_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_roi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `stakings` (`id`, `user_id`, `stake_duration`, `amount`, `expected_roi`, `status`, `expire_date`, `last_growth`, `created_at`, `updated_at`) VALUES
(1,	1,	'1 Year',	'50',	'40',	'active',	'2023-04-14 19:08:02',	'2022-04-14 19:08:02',	'2022-04-14 19:08:02',	'2022-04-14 19:08:02');

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `address` text COLLATE utf8mb4_unicode_ci,
  `proof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transactions` (`id`, `txn_id`, `user`, `tokens`, `token_bonus`, `total_token`, `amount`, `base_amt`, `type`, `status`, `payfrom`, `address`, `proof`, `stage`, `to`, `created_at`, `updated_at`) VALUES
(8,	'TXNvhA0Qu',	1,	'10000',	'0',	'10000',	'4500',	'4500',	'PURCHASE',	'Confirmed',	NULL,	NULL,	'imgs.jpg1624966782',	'Demo Stage 1',	'EUR',	'2021-06-29 10:39:42',	'2021-06-29 10:43:36'),
(10,	'TXNR57HDk',	1,	'500',	'0',	'500',	'0',	'500',	'TRANSFER',	'Confirmed',	NULL,	'church@mail.com',	NULL,	NULL,	NULL,	'2021-07-21 15:54:53',	'2021-07-21 15:54:53'),
(11,	'TXNR57HDk',	8,	'500',	'0',	'500',	'0',	'500',	'TRANSFER',	'Confirmed',	NULL,	'church@mail.com',	NULL,	NULL,	NULL,	'2021-07-21 15:54:53',	'2021-07-21 15:54:53'),
(12,	'TXNwHdWCo',	1,	'1000',	'0',	'1000',	'0',	'1000',	'TRANSFER',	'Confirmed',	NULL,	'church@mail.com',	NULL,	NULL,	NULL,	'2021-07-23 19:03:49',	'2021-07-23 19:03:49'),
(13,	'TXNwHdWCo',	8,	'1000',	'0',	'1000',	'0',	'1000',	'TRANSFER',	'Confirmed',	NULL,	'church@mail.com',	NULL,	NULL,	NULL,	'2021-07-23 19:03:49',	'2021-07-23 19:03:49'),
(14,	'TXNxUnosL',	8,	'500',	NULL,	NULL,	'500',	NULL,	'BONUS',	'Confirmed',	NULL,	NULL,	NULL,	'Demo Stage 1',	'Manual',	'2021-07-23 20:03:00',	'2021-07-23 19:06:25'),
(15,	'TXNi8bKWW',	1,	'500',	NULL,	NULL,	'500',	NULL,	'BONUS',	'Confirmed',	NULL,	NULL,	NULL,	'Demo Stage 1',	'Paypal',	'2021-07-23 20:04:00',	'2021-07-23 19:07:34'),
(17,	'TXNljTvMJ',	1,	'100',	'0',	'100',	'0.0268756',	'100',	'PURCHASE',	'Confirmed',	NULL,	NULL,	'1631010161cu5.jpg',	'Demo Stage 1',	'ETH',	'2021-09-07 14:22:41',	'2021-09-07 14:29:36'),
(19,	'TXNuIHao9',	1,	'20049',	'0',	'20049',	'0.190837',	'9022.05',	'PURCHASE',	'Confirmed',	NULL,	NULL,	'photos/gX2PHVvl6oQY5vNKIjTI78Sf4dozMZyMvUVlwYjp.jpg',	'Demo Stage 1',	'BTC',	'2022-03-30 11:05:03',	'2022-03-30 11:07:06'),
(20,	'TXNBlQmCk',	10,	'100',	'0',	'100',	'45',	'45',	'PURCHASE',	'Confirmed',	NULL,	NULL,	'photos/OzUT1GHjTxHwnMzuSDTobaUL8yObesd5XvSgWvne.jpg',	'Demo Stage 1',	'USD',	'2022-03-30 11:53:19',	'2022-03-30 11:54:25'),
(21,	'TXN8n3GmB',	1,	'500',	NULL,	NULL,	'1000',	NULL,	'PURCHASE',	'Confirmed',	NULL,	NULL,	NULL,	'Demo Stage 2',	'Manual',	'2021-04-14 20:02:00',	'2022-04-14 19:05:24');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `lname`, `username`, `email`, `usd_bal`, `ltc_bal`, `eth_bal`, `btc_bal`, `token_bal`, `tk_bonus_bal`, `tot_tk_bal`, `verification_status`, `acnt_status`, `ref_by`, `ref_link`, `ref_bonus`, `roi_bal`, `roi_secret`, `bonus_to_ref`, `wallet_type`, `wallet_address`, `network`, `nationality`, `dob`, `phone_number`, `email_preference`, `activity_preference`, `dashboard_style`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1,	'Prechain Test',	NULL,	'prechaintest',	'user@prechain.com',	'0',	NULL,	NULL,	NULL,	'40649',	'0',	'41272.083333333',	'Verified',	'active',	NULL,	'http://127.0.0.1:8000/ref/prechaintest',	'3',	2.08333,	NULL,	'0',	'Ethereum',	'kjkdh767dhhd',	'ERC',	'Nigeria',	'2021-06-02',	'07069018215',	NULL,	NULL,	'light',	'2022-03-29 12:28:23',	'$2y$10$os3fPHLrHAGG2GkfLE0XhOjH3fI5Fmrc8rb.W3nxIC.Oxu9pX3clq',	NULL,	NULL,	'KUEmM4EdNscT6652PfFdlIW2XRsA5KiVWZw4J3wcu5RqRCmmd8shxPzASUJT',	NULL,	NULL,	'2021-06-17 09:41:05',	'2022-04-15 02:29:17'),
(10,	'Minko malla',	NULL,	'victory334',	'mik@me.com',	'0',	NULL,	NULL,	NULL,	'100',	'0',	'100',	'Not Verified',	'active',	'1',	'http://127.0.0.1:8000/ref/victory334',	'0',	NULL,	NULL,	'3',	'Ethereum',	'988w99chhiu8uu833',	NULL,	'Bahamas',	NULL,	NULL,	NULL,	NULL,	'light',	'2022-03-30 11:50:35',	'$2y$10$WCFg2qynnbMetzJmAsLdCu7yp6xoT/Q71kCLzFUtRrJr01O73Xq9q',	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-03-30 11:50:34',	'2022-03-30 11:54:25'),
(11,	'Churchill',	NULL,	NULL,	'church@mail.com',	'0',	NULL,	NULL,	NULL,	'0',	'0',	NULL,	'Not Verified',	'active',	NULL,	'/ref/',	'0',	NULL,	NULL,	'0',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'light',	'2022-03-31 08:47:42',	'$2y$10$jtVes5vh6RYK3//vN60D7ueY/EEvnGlUjKgLhhqNGgAjLDhQiXDdS',	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-03-31 08:47:42',	'2022-03-31 09:24:14'),
(12,	'Benjamin Meyers',	NULL,	'bmeyers',	'bmeyers2020@yahoo.com',	'0',	NULL,	NULL,	NULL,	'0',	'0',	NULL,	'Not Verified',	'active',	NULL,	'http://127.0.0.1:8000/ref/bmeyers',	'0',	NULL,	NULL,	'0',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'light',	'2022-04-15 03:05:42',	'$2y$10$wHiaRMaDygAkifw/PlzhTuQ/iGyBV57cJ4iDAAs2xgPx7j6GhEag.',	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-04-15 03:05:42',	'2022-04-15 03:05:42'),
(13,	'hireca',	NULL,	'hireca',	'hi@hireca.com',	'0',	NULL,	NULL,	NULL,	'0',	'0',	NULL,	'Not Verified',	'active',	NULL,	'http://127.0.0.1:8000/ref/hireca',	'0',	NULL,	NULL,	'0',	'Bitcoin',	'122111',	'bep20',	NULL,	NULL,	NULL,	NULL,	NULL,	'light',	'2022-04-15 05:01:37',	'$2y$10$e3OUjEBjINcOgu.TohLVRes92I7hNUDylWLTbBHhHDLLCGZKatoEO',	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-04-15 05:01:37',	'2022-04-15 05:05:15');

-- 2022-04-15 09:52:25

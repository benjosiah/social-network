-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2020 at 03:14 PM
-- Server version: 5.7.24
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
-- Database: `social-network`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `created_at`, `updated_at`, `user_id`, `post_id`) VALUES
(1, '2019-11-07 10:07:16', '2019-11-07 10:07:16', 4, 1),
(2, '2020-01-28 08:39:33', '2020-01-28 08:39:33', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `auth_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `created_at`, `updated_at`, `message`, `user_id`, `auth_user_id`) VALUES
(1, '2019-11-07 11:12:28', '2019-11-07 11:12:28', 'guhliguihihgug', 8, 4),
(2, '2019-11-07 18:26:17', '2019-11-07 18:26:17', 'jjhjuuu', 8, 2),
(3, '2019-11-07 19:15:07', '2019-11-07 19:15:07', 'dfgfghhh', 8, 2),
(4, '2019-11-07 19:15:45', '2019-11-07 19:15:45', 'ddffdfgfd', 8, 2),
(5, '2019-11-07 19:27:48', '2019-11-07 19:27:48', 'hi ben', 5, 2),
(6, '2019-11-07 19:56:27', '2019-11-07 19:56:27', 'how far', 8, 2),
(7, '2019-11-07 19:56:40', '2019-11-07 19:56:40', 'im cool', 8, 2),
(8, '2019-11-07 19:57:47', '2019-11-07 19:57:47', 'hi', 5, 8),
(9, '2019-11-07 20:01:41', '2019-11-07 20:01:41', 'hi', 8, 8),
(10, '2019-11-07 20:02:17', '2019-11-07 20:02:17', 'ho', 7, 8),
(11, '2019-11-07 20:02:41', '2019-11-07 20:02:41', 'ji', 7, 8),
(12, '2019-11-07 20:06:19', '2019-11-07 20:06:19', 'hi', 8, 3),
(13, '2019-11-07 20:07:02', '2019-11-07 20:07:02', 'how are you', 8, 3),
(14, '2019-11-07 20:18:50', '2019-11-07 20:18:50', 'hi', 1, 3),
(15, '2019-11-08 06:04:19', '2019-11-08 06:04:19', 'hi bro', 7, 2),
(16, '2019-11-08 06:04:33', '2019-11-08 06:04:33', 'was up', 7, 2),
(17, '2019-11-08 06:05:17', '2019-11-08 06:05:17', 'have you done your assignmet?', 7, 2),
(18, '2019-11-08 07:43:18', '2019-11-08 07:43:18', 'hi', 2, 8),
(19, '2020-01-28 08:41:49', '2020-01-28 08:41:49', '', 5, 6),
(20, '2020-01-28 08:41:52', '2020-01-28 08:41:52', '', 5, 6),
(21, '2020-01-28 08:41:56', '2020-01-28 08:41:56', '', 5, 6),
(22, '2020-01-28 08:41:58', '2020-01-28 08:41:58', '', 5, 6),
(23, '2020-01-28 08:42:09', '2020-01-28 08:42:09', 'hello', 5, 6),
(24, '2020-01-28 08:42:21', '2020-01-28 08:42:21', 'hi dear', 5, 6),
(25, '2020-01-28 08:42:38', '2020-01-28 08:42:38', 'what\'s up', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2019_10_02_115408_create_posts_table', 2),
('2019_11_03_184302_create_likes_table', 3),
('2019_11_06_153941_create_messages_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `post` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `post`, `user_id`) VALUES
(1, '2019-11-07 10:07:06', '2019-11-07 10:07:06', 'if you\'re up for it, you can do it', 4),
(2, '2020-01-12 18:05:19', '2020-01-12 18:05:19', 'houguijl;kiohiojl;', 5),
(3, '2020-01-28 08:39:24', '2020-01-28 08:39:24', 'opopsjdjdj\"\"\"\"', 1),
(4, '2020-01-28 11:32:40', '2020-01-28 11:32:40', 'what the fuck\r\ni\'m not free\r\n\r\ni\'ll try tho', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ben Josiah', 'benjosiah90@gmail.com', '$2y$10$cKlU7KYiu/Fk8gSMFAElI.YNW4iYKa/ln8fE8si2aTKl/9aqqYnR.', 'nvd1e3n3rL6QXRVJF1Hj5qhZvv26hOYhRNIBgmgfEeuO99Fepyd6OrLMB9gk', '2019-10-02 14:29:55', '2020-01-28 08:41:17'),
(2, 'flexit', 'waytoaltitude@gmail.com', '$2y$10$3emddikCsIDEP2fclbVI0u0BFx2E910nP..pQs.x/cCFts7upvIEa', 'LWhQc5bVfRzOGC158XlrBRI7tOocIWISASNxmf93K4rs5jiMSj9XAPCuvq3a', '2019-10-02 19:05:38', '2019-11-08 07:42:33'),
(3, 'miky', 'Rabbimikky@gmail.com', '$2y$10$o7y6w6JHxKGX1Lnnjjd9ZetZFBSVcys6bhRxAkolom3SZx2a4ADiy', 'OIwYLOMNzzhLgfuzoYESDBGD7LTDkHO3fu7yaGsVi9FM2lGHPluaGpTN2g5k', '2019-10-08 07:18:20', '2019-11-07 20:06:25'),
(4, 'Philadek', 'okegbolatobi693@gmail.com', '$2y$10$j4MkEuCA8T5buus1IFWJ6.H0/GkNyl6qG/gxz9x8XbUaOs4sbq/SG', 'z0FWlZ3G8fMpesLSWFWYy5YTr01UuG4vKgv8SheorJrvkeTvdhnnXlGcbLfF', '2019-10-08 07:20:35', '2019-10-16 14:39:36'),
(5, 'ben', 'frfr@frfrf.com', '$2y$10$hMN5Mf1FxLkR6nEp0FsPLe0nZa70qkzu88iDVh9JodflCT.7Zr0yK', 'gNxBgLFbxyE6giR4Lta2GkUkmYkf5tI2hZC1ZRvXC8WFkDHOKNVZCPg97ew1', '2019-10-08 10:01:43', '2020-01-12 18:06:02'),
(6, 'popstar', 'popstar@gmail.com', '$2y$10$AAAUfa1QcdrrduFfT7D59.PtSNot/HNY1mPu0L6H4nFpJZDFS51gy', 'PyNAakxS7BgtLixPBrFzBAWBGUFUKvWD9oyCKdq5d3noHfw5bKuDMEBK9OpD', '2019-10-16 06:49:55', '2019-11-05 13:50:42'),
(7, 'divine', 'divine@gmail.com', '$2y$10$6RLA34VP1nuGEs5/9uwtQ.j0I78yE0Wq10cBLTzs19606qx2xfPPq', 'Y4ZjMHlVBuOpeSPemq7nzNdRvegNbCRkgOYJS8TvqApdAOlh0kQcannyfh2z', '2019-11-06 09:59:11', '2019-11-06 14:10:26'),
(8, 'lolade', 'lolade@gmail.com', '$2y$10$JZK9Oh1TFDcMjq0GdR0.5O7NVBLLjMBrHq4WoPd7KzOzgdmj0Pn4y', 'k4FeKTwDPAgIyF5V0W3rUC5CYvWrtOP1SiAbULYugV4Woh7rAivkoeuRLtHN', '2019-11-06 14:12:19', '2019-11-07 20:02:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

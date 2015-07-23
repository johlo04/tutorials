-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.20-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.2.0.4967
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table laravel.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `excerpt` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table laravel.articles: ~13 rows (approximately)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `title`, `body`, `created_at`, `updated_at`, `published_at`, `excerpt`) VALUES
	(1, 'sample updated 1', 'sample 1', '2015-06-15 15:37:28', '2015-06-15 21:38:46', '2015-06-15 15:37:28', NULL),
	(2, 'sample 2', 'sample 2', '2015-06-15 15:37:54', '2015-06-15 15:37:54', '2015-06-15 15:37:54', NULL),
	(3, 'sample 3', 'sample 3', '2015-06-15 15:38:03', '2015-06-15 15:38:03', '2015-06-15 15:38:03', NULL),
	(4, 'sample 4', 'sample 4', '2015-06-15 15:38:11', '2015-06-15 15:38:11', '2015-06-15 15:38:11', NULL),
	(5, 'sample 5', 'Lorem Ipusom Dolor Sample', '2015-06-15 15:38:23', '2015-06-15 21:50:13', '2015-06-15 15:38:23', NULL),
	(6, 'sample 6', 'sample 6 1 2 dfdgdfg dfgfg sfdfs dfsdfsdf sfsdf', '2015-06-15 15:38:32', '2015-06-15 21:47:52', '2015-06-15 15:37:28', NULL),
	(7, '', '', '2015-06-17 15:34:36', '2015-06-17 15:34:36', '2015-06-17 15:34:36', NULL),
	(8, 'new jewell', 'new jewell', '2015-06-17 16:00:56', '2015-06-17 16:00:56', '2015-07-31 16:00:56', NULL),
	(9, 'new rochell', 'new rochelle', '2015-06-17 16:01:33', '2015-06-17 16:01:33', '2015-12-25 16:01:33', NULL),
	(10, 'new jerielle', 'new jerielle', '2015-06-17 16:02:53', '2015-06-17 16:02:53', '2015-06-17 16:02:53', NULL),
	(11, 'dadasdas', 'dasdadadsasd', '2015-06-17 16:03:16', '2015-06-20 14:41:55', '2015-06-27 00:00:00', NULL),
	(12, 'jumela', 'jumela', '2015-06-17 16:04:24', '2015-06-17 16:04:24', '2015-09-25 00:00:00', NULL),
	(13, 'future', 'futrure', '2015-06-17 16:07:24', '2015-06-17 16:07:24', '2015-07-31 00:00:00', NULL);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;


-- Dumping structure for table laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table laravel.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2015_06_13_005759_create_articles_table_migrations', 1),
	('2015_06_13_010508_add_excerpt_articles', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table laravel.note
CREATE TABLE IF NOT EXISTS `note` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `writer` varchar(100) NOT NULL DEFAULT 'anonymous',
  `message` text NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.note: ~1 rows (approximately)
/*!40000 ALTER TABLE `note` DISABLE KEYS */;
INSERT INTO `note` (`id`, `subject`, `writer`, `message`, `date_added`, `date_modified`) VALUES
	(1, 'TEST', 'anonymous', 'TEST', '2015-06-23 11:02:42', '2015-06-23 11:02:42');
/*!40000 ALTER TABLE `note` ENABLE KEYS */;


-- Dumping structure for table laravel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table laravel.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Dumping structure for table laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table laravel.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

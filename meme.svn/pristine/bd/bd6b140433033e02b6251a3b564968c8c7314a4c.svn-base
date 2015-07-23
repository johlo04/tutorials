-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.20-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.2.0.4974
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

-- Dumping data for table laravel.articles: ~3 rows (approximately)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `title`, `body`, `created_at`, `updated_at`, `published_at`, `excerpt`) VALUES
	(1, 'sample', 'sample', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
	(2, 'sample', 'sample', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
	(3, 'sample', 'sample', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);
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


-- Dumping structure for table laravel.particular_header
CREATE TABLE IF NOT EXISTS `particular_header` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned DEFAULT NULL,
  `particular_name` varchar(150) NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.particular_header: ~0 rows (approximately)
/*!40000 ALTER TABLE `particular_header` DISABLE KEYS */;
INSERT INTO `particular_header` (`id`, `project_id`, `particular_name`, `status`) VALUES
	(1, NULL, 'SAMPLE PARTICULAR TITLE', 1),
	(2, NULL, 'SAMPLE PARTICULAR TITLE', 1),
	(3, NULL, 'SAMPLE PARTICULAR TITLE', 1),
	(4, NULL, 'SAMPLE PARTICULAR TITLE', 1),
	(5, NULL, 'SAMPLE PARTICULAR TITLE', 1),
	(6, NULL, 'SAMPLE PARTICULAR TITLE', 1),
	(7, NULL, 'SAMPLE PARTICULAR TITLE', 1),
	(8, NULL, 'SAMPLE PARTICULAR TITLE', 1),
	(9, NULL, 'SAMPLE PARTICULAR TITLE', 1),
	(10, NULL, 'SAMPLE PARTICULAR TITLE', 1);
/*!40000 ALTER TABLE `particular_header` ENABLE KEYS */;


-- Dumping structure for table laravel.particular_header_items
CREATE TABLE IF NOT EXISTS `particular_header_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `particular_header_id` int(10) unsigned NOT NULL,
  `particular_name` varchar(150) DEFAULT NULL,
  `unit` int(10) unsigned NOT NULL,
  `unit_label` varchar(10) NOT NULL,
  `unit_price` float(7,2) unsigned NOT NULL DEFAULT '0.00',
  `unit_subtotal` float(7,2) unsigned NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.particular_header_items: ~0 rows (approximately)
/*!40000 ALTER TABLE `particular_header_items` DISABLE KEYS */;
INSERT INTO `particular_header_items` (`id`, `particular_header_id`, `particular_name`, `unit`, `unit_label`, `unit_price`, `unit_subtotal`) VALUES
	(1, 1, 'Sample Particular Name1', 1, 'sqm', 5.00, 5.00),
	(2, 2, 'Sample Particular Name2', 4, 'sqm', 12.00, 48.00),
	(3, 2, 'Sample Particular Name3', 11, 'sqm', 7.00, 77.00),
	(4, 3, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(5, 3, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(6, 4, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(7, 5, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(8, 5, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(9, 6, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(10, 7, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(11, 7, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(12, 8, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(13, 8, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(14, 9, 'Sample Particular Name', 17, 'sqm', 29.00, 493.00),
	(15, 9, 'Sample Particular Name', 11, 'sqm', 17.00, 187.00),
	(16, 9, 'Sample Particular Name', 7, 'sqm', 16.00, 112.00),
	(17, 9, 'Sample Particular Name', 1, 'sqm', 14.00, 14.00),
	(18, 9, 'Sample Particular Name', 1, 'sqm', 6.00, 6.00),
	(19, 9, 'Sample Particular Name', 6, 'sqm', 9.00, 54.00),
	(20, 9, 'Sample Particular Name', 8, 'sqm', 7.00, 56.00),
	(21, 9, 'Sample Particular Name', 3, 'sqm', 40.00, 120.00),
	(22, 9, 'Sample Particular Name', 1, 'sqm', 15.00, 15.00),
	(23, 9, 'Sample Particular Name', 1, 'sqm', 1.00, 1.00),
	(24, 9, 'Sample Particular Name', 1, 'sqm', 7.00, 7.00),
	(25, 9, 'Sample Particular Name', 1, 'sqm', 14.00, 14.00),
	(26, 9, 'Sample Particular Name', 2, 'sqm', 1.00, 2.00),
	(27, 9, 'Sample Particular Name', 3, 'sqm', 1.00, 3.00),
	(28, 9, 'Sample Particular Name', 4, 'sqm', 4.00, 16.00),
	(29, 9, 'Sample Particular Name', 5, 'sqm', 4.00, 20.00),
	(30, 10, 'Sample Particular Name', 97, 'sqm', 208.00, 20176.00),
	(31, 10, 'Sample Particular Name', 18, 'sqm', 50002.00, 99999.99),
	(32, 10, 'Sample Particular Name', 2, 'sqm', 99999.99, 99999.99);
/*!40000 ALTER TABLE `particular_header_items` ENABLE KEYS */;


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

-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.20-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.2.0.4975
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `quotation_id` int(11) unsigned DEFAULT NULL,
  `particular_name` varchar(150) NOT NULL,
  `note` text,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.particular_header: ~0 rows (approximately)
/*!40000 ALTER TABLE `particular_header` DISABLE KEYS */;
INSERT INTO `particular_header` (`id`, `quotation_id`, `particular_name`, `note`, `status`) VALUES
	(3, 1, 'SAMPLE PARTICULAR TITLE', 'dfgdfgdgdfgdg', 1),
	(4, 1, 'SAMPLE PARTICULAR TITLE', 'gdf', 1);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.particular_header_items: ~0 rows (approximately)
/*!40000 ALTER TABLE `particular_header_items` DISABLE KEYS */;
INSERT INTO `particular_header_items` (`id`, `particular_header_id`, `particular_name`, `unit`, `unit_label`, `unit_price`, `unit_subtotal`) VALUES
	(1, 3, 'Sample Particular Name', 1, 'sqm', 1000.00, 1000.00),
	(2, 4, 'Sample Particular Name', 1, 'sqm', 2122.00, 2122.00);
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


-- Dumping structure for table laravel.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_name` varchar(100) NOT NULL,
  `description` text,
  `date_started` datetime DEFAULT NULL,
  `date_delivered` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.projects: ~14 rows (approximately)
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` (`id`, `project_name`, `description`, `date_started`, `date_delivered`, `status`) VALUES
	(1, 'PROJECT A', NULL, '2015-07-06 08:38:22', '2015-07-06 08:38:22', 1),
	(2, 'PROJECT B', NULL, '2015-07-06 08:38:32', '2015-07-06 08:38:32', 1),
	(3, 'PROJECT C', NULL, '2015-07-06 08:38:44', '2015-07-06 08:38:44', 1),
	(4, 'PROJECT D', NULL, '2015-07-06 08:38:52', '2015-07-06 08:38:52', 1),
	(5, 'PROJECT E', NULL, '2015-07-06 08:40:14', '2015-07-06 08:40:14', 1),
	(6, 'PROJECT F', NULL, '2015-07-06 08:40:21', '2015-07-06 08:40:21', 1),
	(7, 'PROJECT G', NULL, '2015-07-06 08:51:49', '2015-07-06 08:51:49', 1),
	(8, 'PROJECT H', NULL, '2015-07-06 08:51:59', '2015-07-06 08:51:59', 1),
	(9, 'PROJECT I', NULL, '2015-07-06 08:52:08', '2015-07-06 08:52:08', 1),
	(10, 'PROJECT J', NULL, '2015-07-06 08:52:16', '2015-07-06 08:52:17', 1),
	(11, 'PROJECT K', NULL, '2015-07-06 12:14:20', '2015-07-06 12:14:20', 1),
	(12, 'SAMPLE', NULL, '2015-07-13 12:37:44', '2015-07-13 12:37:44', 1),
	(13, 'FLAX INC.', NULL, '2015-07-13 15:42:38', '2015-07-13 15:42:39', 1),
	(14, 'NEW', NULL, '2015-07-14 11:05:02', '2015-07-14 11:05:02', 1);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;


-- Dumping structure for table laravel.quotation
CREATE TABLE IF NOT EXISTS `quotation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `reference_no` varchar(20) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `address` text,
  `project_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reference_no` (`reference_no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.quotation: ~0 rows (approximately)
/*!40000 ALTER TABLE `quotation` DISABLE KEYS */;
INSERT INTO `quotation` (`id`, `project_id`, `reference_no`, `project_name`, `receiver_name`, `address`, `project_date`) VALUES
	(1, 1, '3424', 'dsfsfdsfsf', 'sdfsd', 'sdf', '2015-07-23');
/*!40000 ALTER TABLE `quotation` ENABLE KEYS */;


-- Dumping structure for table laravel.quotation_agreement
CREATE TABLE IF NOT EXISTS `quotation_agreement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quotation_id` int(10) unsigned NOT NULL,
  `agreement` text CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table laravel.quotation_agreement: ~0 rows (approximately)
/*!40000 ALTER TABLE `quotation_agreement` DISABLE KEYS */;
INSERT INTO `quotation_agreement` (`id`, `quotation_id`, `agreement`) VALUES
	(1, 1, '&lt;h4&gt;&lt;strong&gt;&lt;u&gt;TERMS &amp; CONDITION&lt;/u&gt;&lt;/strong&gt;&lt;/h4&gt;\n\n&lt;hr /&gt;\n&lt;ol&gt;\n &lt;li&gt;Payment:\n &lt;ul&gt;\n  &lt;li&gt;50% DP Upon Confimation/Purchase Order&lt;/li&gt;\n  &lt;li&gt;40% Upon Initial presentation&lt;/li&gt;\n  &lt;li&gt;10% Upon completion of the project&lt;/li&gt;\n &lt;/ul&gt;\n &lt;/li&gt;\n &lt;li&gt;Down payment is non-refundable&lt;/li&gt;\n &lt;li&gt;All prices are subject to change without prior notice&lt;/li&gt;\n &lt;li&gt;Area shall be turned over to us for the construction free and clear of any debris and/or builder\'s material and rubble as well as machiner and equipment and shall be generally clean.&lt;/li&gt;\n &lt;li&gt;Water, electricityand lighting (if necessary) shall be provided to the site (areas to be painted) free of charge.&lt;/li&gt;\n &lt;li&gt;Secure and safe warehousing for our material shall be provided at the construction free of charge.&lt;/li&gt;\n &lt;li&gt;At our election we shall be allowed to work overtime&lt;/li&gt;\n &lt;li&gt;We shall not be responsible and no way liable for any delays caused by the General Contstructor, any sub or other contractor and/or owner during, before and after the exceution f waterproofing and/or other unsound structures, force majeur, natural calamities, fire or other casualty or physical damage.&lt;/li&gt;\n &lt;li&gt;Application period shall be agreed upon&lt;/li&gt;\n &lt;li&gt;Please make all payments payable to &lt;u&gt;&lt;strong&gt;FLAX INC.&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n &lt;li&gt;Processing fees for &lt;u&gt;&lt;strong&gt;PERMITS ARE NOT INCLUDED&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;p&gt;We hope that our recommendations meet your favorable approval. If so, please affix your signature in the conforme. The Signed Conforme shall also server as out contruct for this project,&lt;/p&gt;\n\n&lt;p&gt;Should you have further inquiry, please feel free to callus and we will be glad to discuss the proposals with you personally.&lt;/p&gt;\n\n&lt;p&gt; &lt;/p&gt;\n\n&lt;p&gt;Prepared By:                                                                                                                                                                              Conforme:&lt;/p&gt;\n\n&lt;p&gt; &lt;/p&gt;\n\n&lt;p&gt; &lt;/p&gt;\n\n&lt;p&gt;EVA B. BRILLANTES&lt;/p&gt;\n\n&lt;p&gt;Sr. Accounts &amp; Admin. Manager&lt;/p&gt;\n\n&lt;p&gt; &lt;/p&gt;\n\n&lt;p&gt; &lt;/p&gt;\n\n&lt;p&gt;Noted &amp; Approved By:&lt;/p&gt;\n\n&lt;p&gt; &lt;/p&gt;\n\n&lt;p&gt;KORO FUJIWARA&lt;/p&gt;\n\n&lt;p&gt;Creative Director&lt;/p&gt;\n\n&lt;hr /&gt;\n&lt;p&gt;&lt;span&gt;FLAX INC. (Philippines) Units 407 &amp; 409 Mile Long Building Amorsolo Street, Legaspi Village , Makati City&lt;/span&gt;&lt;/p&gt;\n\n&lt;p&gt;&lt;span&gt;Tel: +632-553-3320 Fax: +632-550-1519 Email: info@flax.ph&lt;/span&gt;&lt;/p&gt;\n\n&lt;p&gt;&lt;span&gt;FLAX LTD. (Hong Kong) Flat A16, 24 /F, Kwan Yick Bldg. Phase III, 271-285 Des Voeux Rd. West, Hong Kong&lt;/span&gt;&lt;/p&gt;\n\n&lt;p&gt;&lt;span&gt;Tel &amp; Fax: +852 3626 2879 Email: info@flax.hk&lt;/span&gt;&lt;/p&gt;\n');
/*!40000 ALTER TABLE `quotation_agreement` ENABLE KEYS */;


-- Dumping structure for table laravel.quotation_totals
CREATE TABLE IF NOT EXISTS `quotation_totals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quotation_id` int(10) unsigned NOT NULL,
  `subtotals` float(7,2) unsigned NOT NULL DEFAULT '0.00',
  `vat_rate` int(10) unsigned NOT NULL DEFAULT '0',
  `grand_total` float(7,2) unsigned NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.quotation_totals: ~0 rows (approximately)
/*!40000 ALTER TABLE `quotation_totals` DISABLE KEYS */;
INSERT INTO `quotation_totals` (`id`, `quotation_id`, `subtotals`, `vat_rate`, `grand_total`) VALUES
	(1, 1, 3122.00, 12, 3496.64);
/*!40000 ALTER TABLE `quotation_totals` ENABLE KEYS */;


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

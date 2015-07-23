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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.particular_header: ~30 rows (approximately)
/*!40000 ALTER TABLE `particular_header` DISABLE KEYS */;
INSERT INTO `particular_header` (`id`, `quotation_id`, `particular_name`, `note`, `status`) VALUES
	(2, NULL, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(3, NULL, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(5, NULL, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(6, NULL, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(7, NULL, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(8, NULL, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(9, NULL, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(10, NULL, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(24, NULL, 'MY ORDER', NULL, 1),
	(25, NULL, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(29, NULL, 'hello world', NULL, 1),
	(30, NULL, 'SAMPLE PARTICULAR TITLE 2', NULL, 1),
	(31, NULL, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(32, NULL, 'hello world 1', NULL, 1),
	(33, NULL, 'hello world 2', NULL, 1),
	(34, NULL, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(35, 2, 'HELLO WORLD 1', NULL, 1),
	(36, 2, 'HELLO WORLD 2', NULL, 1),
	(37, 4, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(38, 4, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(39, 14, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(40, 15, 'HELLO WORLD 1', NULL, 1),
	(41, 15, 'HELLO WORLD 2', NULL, 1),
	(42, 16, 'SAMPLE PARTICULAR TITLE 123', NULL, 1),
	(43, 16, 'SAMPLE PARTICULAR TITLE 123', NULL, 1),
	(44, 17, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(45, 19, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(46, 19, 'SAMPLE PARTICULAR TITLE', NULL, 1),
	(47, 22, 'SAMPLE PARTICULAR TITLE', 'sample note 1', 1),
	(48, 22, 'SAMPLE PARTICULAR TITLE', 'sample note 2', 1),
	(49, 23, 'WALL', 'THIS IS A NOTE FROM WALL A', 1),
	(50, 23, 'ROOM', 'ROOM A NOTE', 1);
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
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.particular_header_items: ~80 rows (approximately)
/*!40000 ALTER TABLE `particular_header_items` DISABLE KEYS */;
INSERT INTO `particular_header_items` (`id`, `particular_header_id`, `particular_name`, `unit`, `unit_label`, `unit_price`, `unit_subtotal`) VALUES
	(2, 2, 'Sample Particular Name2', 4, 'sqm', 12.00, 48.00),
	(3, 2, 'Sample Particular Name3', 11, 'sqm', 7.00, 77.00),
	(4, 3, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(5, 3, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
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
	(32, 10, 'Sample Particular Name', 2, 'sqm', 99999.99, 99999.99),
	(84, 24, 'Sample Particular Name1', 1, 'sqm', 5.00, 5.00),
	(85, 24, 'Sample Particular Name', 100, 'sqm', 14.00, 1400.00),
	(86, 25, 'Sample Particular Name', 45, 'sqm', 49.00, 2205.00),
	(101, 29, 'Sample Particular Name12', 15, 'lot', 4.00, 60.00),
	(102, 29, 'Sample Particular Name121212', 17, 'sets', 3.00, 51.00),
	(103, 29, 'Sample Particular Name112', 1, 'sqm', 2.00, 2.00),
	(104, 29, 'Sample Particular Name1', 11, 'sqm', 1005.00, 11055.00),
	(105, 29, 'Sample Particular Name22', 11, 'sqm', 1005.00, 11055.00),
	(106, 29, 'Sample Particular Name33', 11, 'sqm', 513.00, 5643.00),
	(107, 29, 'Sample Particular Name44', 1, 'sqm', 1013.00, 1013.00),
	(108, 29, 'Sample Particular Name55', 1, 'sqm', 1031.00, 1031.00),
	(109, 29, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(110, 29, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(111, 30, 'Sample Particular Name', 13, 'lot', 13.00, 169.00),
	(112, 30, 'Sample Particular Name', 16, 'sqm', 20.00, 320.00),
	(113, 30, 'Sample Particular Name', 15, 'lot', 37.00, 555.00),
	(114, 30, 'Sample Particular Name', 20, 'sets', 15.00, 300.00),
	(115, 30, 'Sample Particular Name', 36, 'sqm', 35.00, 1260.00),
	(116, 30, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(117, 30, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(118, 30, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(119, 31, 'Sample Particular Name', 4, 'sqm', 40.00, 160.00),
	(120, 31, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(121, 31, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(122, 31, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(123, 31, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(124, 31, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(125, 31, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(126, 32, 'Sample Particular Name', 10, 'sqm', 25.00, 250.00),
	(127, 32, 'Sample Particular Name', 25, 'lot', 26.00, 650.00),
	(128, 33, 'Sample Particular Name', 4, 'sqm', 27.00, 108.00),
	(129, 35, 'Sample Particular Name 1', 1, 'sqm', 5.00, 5.00),
	(130, 36, 'Sample Particular Name 2', 1, 'sqm', 100.00, 100.00),
	(131, 37, 'Sample Particular Name', 1, 'sqm', 14.00, 14.00),
	(132, 37, 'Sample Particular Name', 1, 'sqm', 500.00, 500.00),
	(133, 38, 'Sample Particular Name', 1, 'sqm', 2000.00, 2000.00),
	(134, 38, 'Sample Particular Name', 1, 'sqm', 5000.00, 5000.00),
	(135, 39, 'Sample Particular Name', 1, 'sqm', 0.00, 0.00),
	(136, 40, 'Sample Particular Names1', 5, 'sqm', 25000.00, 99999.99),
	(137, 40, 'Sample Particular Names2', 10, 'sqm', 100.00, 1000.00),
	(138, 41, 'Sample Particular Namez1', 3, 'sqm', 5000.00, 15000.00),
	(139, 41, 'Sample Particular Namez2', 5, 'sqm', 100.00, 500.00),
	(140, 41, 'Sample Particular Namez3', 2, 'sqm', 250.00, 501.00),
	(141, 42, 'Sample Particular Name', 1, 'sqm', 5000.00, 5000.00),
	(142, 43, 'Sample Particular Name', 2, 'sqm', 10000.00, 20000.00),
	(143, 44, 'Sample Particular Name', 1, 'sqm', 1212.00, 1212.00),
	(144, 45, 'Sample Particular Name', 1, 'sqm', 1212.00, 1212.00),
	(145, 46, 'Sample Particular Name', 1, 'sqm', 21.00, 21.00),
	(146, 47, 'Sample Particular Name', 1, 'sqm', 1212.00, 1212.00),
	(147, 48, 'Sample Particular Name', 1, 'sqm', 5000.00, 5000.00),
	(148, 49, 'WALL A', 5, 'lot', 1000.00, 5000.00),
	(149, 49, 'WALL B', 2, 'sets', 1000.00, 2000.00),
	(150, 49, 'WALL C', 10, 'sqm', 500.00, 5000.00),
	(151, 49, 'WALL D', 3, 'sets', 1250.00, 3750.00),
	(152, 49, 'WALL E', 10, 'sets', 950.00, 9500.00),
	(153, 49, 'WALL F', 5, 'lot', 2000.00, 10000.00),
	(154, 50, 'ROOM A', 1, 'sqm', 5000.00, 5000.00),
	(155, 50, 'ROOM B', 1, 'sqm', 1000.00, 1000.00);
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.projects: ~12 rows (approximately)
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
	(13, 'FLAX INC.', NULL, '2015-07-13 15:42:38', '2015-07-13 15:42:39', 1);
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.quotation: ~18 rows (approximately)
/*!40000 ALTER TABLE `quotation` DISABLE KEYS */;
INSERT INTO `quotation` (`id`, `project_id`, `reference_no`, `project_name`, `receiver_name`, `address`, `project_date`) VALUES
	(1, NULL, 'dd', 'fdsfds', 'sdf', 'sdfsdf', '0000-00-00'),
	(2, NULL, '23441544', 'SAMPLE PROJECT', 'ROCHELLE CANALE', 'Manila', '2015-07-31'),
	(4, NULL, '2121223', 'Test Hello', 'Rochelle Canale', 'Manila', '2015-07-31'),
	(5, NULL, '3123123', 'sdfsdf', 'dfsdfsd', 'fsdfsfsdf', '0000-00-00'),
	(6, NULL, '345345', 'gfhgfhgf', 'ghnjghj', 'gjghjgh', '0000-00-00'),
	(7, NULL, '134243', 'sdfsdfds', 'asfsdfds', 'fsdfsfsf', '0000-00-00'),
	(8, NULL, '123123', 'sdfsd', 'sdfsf', 'sdfsd', '0000-00-00'),
	(9, NULL, '2312312', 'test', 'test', NULL, '0000-00-00'),
	(10, NULL, '234123', 'test', 'test', 'test', '0000-00-00'),
	(11, NULL, '4234', 'gdf', 'gdfg', 'dgdfgddf', '0000-00-00'),
	(12, NULL, '214124', 'test', 'test', 'test', '0000-00-00'),
	(13, NULL, '3434', 'sdffsd', 'sdfsfsd', 'fsdfsdf', '0000-00-00'),
	(14, NULL, '2323', '23asdas', 'asdasdas', 'asdasd', '0000-00-00'),
	(15, NULL, '123456789', 'TEST QUOTATION', 'CEL DELCAMPO', 'Fairview QC.', '0000-00-00'),
	(16, NULL, '31323', 'test test test', 'rochelle canale', 'manila', '0000-00-00'),
	(17, NULL, '12313', 'samoke', 'sample', 'samoke', '0000-00-00'),
	(19, NULL, '23412', 'sample', 'sample', 'sample', '0000-00-00'),
	(22, 12, '212346234', 'sample', 'sample', 'sample', '0000-00-00'),
	(23, 13, '123-456-789', 'FLAX INC.', 'MR. ROCHELLE CANALE', 'MANILA', '2015-11-11');
/*!40000 ALTER TABLE `quotation` ENABLE KEYS */;


-- Dumping structure for table laravel.quotation_agreement
CREATE TABLE IF NOT EXISTS `quotation_agreement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quotation_id` int(10) unsigned NOT NULL,
  `agreement` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.quotation_agreement: ~6 rows (approximately)
/*!40000 ALTER TABLE `quotation_agreement` DISABLE KEYS */;
INSERT INTO `quotation_agreement` (`id`, `quotation_id`, `agreement`) VALUES
	(1, 14, '&lt;h4&gt;&lt;strong&gt;&lt;u&gt;TERMS &amp; CONDITION&lt;/u&gt;&lt;/strong&gt;&lt;/h4&gt;\n\n&lt;hr /&gt;\n&lt;ol&gt;\n &lt;li&gt;Payment:\n &lt;ul&gt;\n  &lt;li&gt;50% DP Upon Confimation/Purchase Order&lt;/li&gt;\n  &lt;li&gt;40% Upon Initial presentation&lt;/li&gt;\n  &lt;li&gt;10% Upon completion of the project&lt;/li&gt;\n &lt;/ul&gt;\n &lt;/li&gt;\n &lt;li&gt;Down payment is non-refundable&lt;/li&gt;\n &lt;li&gt;All prices are subject to change without prior notice&lt;/li&gt;\n &lt;li&gt;Area shall be turned over to us for the construction free and clear of any debris and/or builder\'s material and rubble as well as machiner and equipment and shall be generally clean.&lt;/li&gt;\n &lt;li&gt;Water, electricityand lighting (if necessary) shall be provided to the site (areas to be painted) free of charge.&lt;/li&gt;\n &lt;li&gt;Secure and safe warehousing for our material shall be provided at the construction free of charge.&lt;/li&gt;\n &lt;li&gt;At our election we shall be allowed to work overtime&lt;/li&gt;\n &lt;li&gt;We shall not be responsible and no way liable for any delays caused by the General Contstructor, any sub or other contractor and/or owner during, before and after the exceution f waterproofing and/or other unsound structures, force majeur, natural calamities, fire or other casualty or physical damage.&lt;/li&gt;\n &lt;li&gt;Application period shall be agreed upon&lt;/li&gt;\n &lt;li&gt;Please make all payments payable to &lt;u&gt;&lt;strong&gt;FLAX INC.&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n &lt;li&gt;Processing fees for &lt;u&gt;&lt;strong&gt;PERMITS ARE NOT INCLUDED&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;p&gt;We hope that our recommendations meet your favorable approval. If so, please affix your signature in the conforme. The Signed Conforme shall also server as out contruct for this project,&lt;/p&gt;\n\n&lt;p&gt;Should you have further inquiry, please feel free to callus and we will be glad to discuss the proposals with you personally.&lt;/p&gt;\n\n&lt;p&gt; &lt;/p&gt;\n\n&lt;table border=&quot;0&quot; cellpadding=&quot;1&quot; cellspacing=&quot;1&quot; height=&quot;132&quot; [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed] 1;&quot;&gt;Tel &amp; Fax: +852 3626 2879 Email: info@flax.hk&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\n'),
	(2, 15, '&lt;h4&gt;&lt;strong&gt;&lt;u&gt;TERMS &amp; CONDITION&lt;/u&gt;&lt;/strong&gt;&lt;/h4&gt;\n\n&lt;hr /&gt;\n&lt;ol&gt;\n &lt;li&gt;Payment:\n &lt;ul&gt;\n  &lt;li&gt;50% DP Upon Confimation/Purchase Order&lt;/li&gt;\n  &lt;li&gt;40% Upon Initial presentation&lt;/li&gt;\n  &lt;li&gt;10% Upon completion of the project&lt;/li&gt;\n &lt;/ul&gt;\n &lt;/li&gt;\n &lt;li&gt;Down payment is non-refundable&lt;/li&gt;\n &lt;li&gt;All prices are subject to change without prior notice&lt;/li&gt;\n &lt;li&gt;Area shall be turned over to us for the construction free and clear of any debris and/or builder\'s material and rubble as well as machiner and equipment and shall be generally clean.&lt;/li&gt;\n &lt;li&gt;Water, electricityand lighting (if necessary) shall be provided to the site (areas to be painted) free of charge.&lt;/li&gt;\n &lt;li&gt;Secure and safe warehousing for our material shall be provided at the construction free of charge.&lt;/li&gt;\n &lt;li&gt;At our election we shall be allowed to work overtime&lt;/li&gt;\n &lt;li&gt;We shall not be responsible and no way liable for any delays caused by the General Contstructor, any sub or other contractor and/or owner during, before and after the exceution f waterproofing and/or other unsound structures, force majeur, natural calamities, fire or other casualty or physical damage.&lt;/li&gt;\n &lt;li&gt;Application period shall be agreed upon&lt;/li&gt;\n &lt;li&gt;Please make all payments payable to &lt;u&gt;&lt;strong&gt;FLAX INC.&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n &lt;li&gt;Processing fees for &lt;u&gt;&lt;strong&gt;PERMITS ARE NOT INCLUDED&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;p&gt;We hope that our recommendations meet your favorable approval. If so, please affix your signature in the conforme. The Signed Conforme shall also server as out contruct for this project,&lt;/p&gt;\n\n&lt;p&gt;Should you have further inquiry, please feel free to callus and we will be glad to discuss the proposals with you personally.&lt;/p&gt;\n\n&lt;p&gt; &lt;/p&gt;\n\n&lt;table border=&quot;0&quot; cellpadding=&quot;1&quot; cellspacing=&quot;1&quot; height=&quot;132&quot; [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed] 1;&quot;&gt;Tel &amp; Fax: +852 3626 2879 Email: info@flax.hk&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\n'),
	(3, 16, '&lt;h4&gt;&lt;strong&gt;&lt;u&gt;TERMS &amp; CONDITION&lt;/u&gt;&lt;/strong&gt;&lt;/h4&gt;\n\n&lt;hr /&gt;\n&lt;ol&gt;\n &lt;li&gt;Payment:\n &lt;ul&gt;\n  &lt;li&gt;50% DP Upon Confimation/Purchase Order&lt;/li&gt;\n  &lt;li&gt;40% Upon Initial presentation&lt;/li&gt;\n  &lt;li&gt;10% Upon completion of the project&lt;/li&gt;\n &lt;/ul&gt;\n &lt;/li&gt;\n &lt;li&gt;Down payment is non-refundable&lt;/li&gt;\n &lt;li&gt;All prices are subject to change without prior notice&lt;/li&gt;\n &lt;li&gt;Area shall be turned over to us for the construction free and clear of any debris and/or builder\'s material and rubble as well as machiner and equipment and shall be generally clean.&lt;/li&gt;\n &lt;li&gt;Water, electricityand lighting (if necessary) shall be provided to the site (areas to be painted) free of charge.&lt;/li&gt;\n &lt;li&gt;Secure and safe warehousing for our material shall be provided at the construction free of charge.&lt;/li&gt;\n &lt;li&gt;At our election we shall be allowed to work overtime&lt;/li&gt;\n &lt;li&gt;We shall not be responsible and no way liable for any delays caused by the General Contstructor, any sub or other contractor and/or owner during, before and after the exceution f waterproofing and/or other unsound structures, force majeur, natural calamities, fire or other casualty or physical damage.&lt;/li&gt;\n &lt;li&gt;Application period shall be agreed upon&lt;/li&gt;\n &lt;li&gt;Please make all payments payable to &lt;u&gt;&lt;strong&gt;FLAX INC.&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n &lt;li&gt;Processing fees for &lt;u&gt;&lt;strong&gt;PERMITS ARE NOT INCLUDED&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;p&gt;We hope that our recommendations meet your favorable approval. If so, please affix your signature in the conforme. The Signed Conforme shall also server as out contruct for this project,&lt;/p&gt;\n\n&lt;p&gt;Should you have further inquiry, please feel free to callus and we will be glad to discuss the proposals with you personally.&lt;/p&gt;\n\n&lt;p&gt; &lt;/p&gt;\n\n&lt;table border=&quot;0&quot; cellpadding=&quot;1&quot; cellspacing=&quot;1&quot; height=&quot;132&quot; [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed] 1;&quot;&gt;Tel &amp; Fax: +852 3626 2879 Email: info@flax.hk&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\n'),
	(4, 17, '&lt;h4&gt;&lt;strong&gt;&lt;u&gt;TERMS &amp; CONDITION&lt;/u&gt;&lt;/strong&gt;&lt;/h4&gt;\n\n&lt;hr /&gt;\n&lt;ol&gt;\n &lt;li&gt;Payment:\n &lt;ul&gt;\n  &lt;li&gt;50% DP Upon Confimation/Purchase Order&lt;/li&gt;\n  &lt;li&gt;40% Upon Initial presentation&lt;/li&gt;\n  &lt;li&gt;10% Upon completion of the project&lt;/li&gt;\n &lt;/ul&gt;\n &lt;/li&gt;\n &lt;li&gt;Down payment is non-refundable&lt;/li&gt;\n &lt;li&gt;All prices are subject to change without prior notice&lt;/li&gt;\n &lt;li&gt;Area shall be turned over to us for the construction free and clear of any debris and/or builder\'s material and rubble as well as machiner and equipment and shall be generally clean.&lt;/li&gt;\n &lt;li&gt;Water, electricityand lighting (if necessary) shall be provided to the site (areas to be painted) free of charge.&lt;/li&gt;\n &lt;li&gt;Secure and safe warehousing for our material shall be provided at the construction free of charge.&lt;/li&gt;\n &lt;li&gt;At our election we shall be allowed to work overtime&lt;/li&gt;\n &lt;li&gt;We shall not be responsible and no way liable for any delays caused by the General Contstructor, any sub or other contractor and/or owner during, before and after the exceution f waterproofing and/or other unsound structures, force majeur, natural calamities, fire or other casualty or physical damage.&lt;/li&gt;\n &lt;li&gt;Application period shall be agreed upon&lt;/li&gt;\n &lt;li&gt;Please make all payments payable to &lt;u&gt;&lt;strong&gt;FLAX INC.&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n &lt;li&gt;Processing fees for &lt;u&gt;&lt;strong&gt;PERMITS ARE NOT INCLUDED&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;p&gt;We hope that our recommendations meet your favorable approval. If so, please affix your signature in the conforme. The Signed Conforme shall also server as out contruct for this project,&lt;/p&gt;\n\n&lt;p&gt;Should you have further inquiry, please feel free to callus and we will be glad to discuss the proposals with you personally.&lt;/p&gt;\n\n&lt;p&gt; &lt;/p&gt;\n\n&lt;table border=&quot;0&quot; cellpadding=&quot;1&quot; cellspacing=&quot;1&quot; height=&quot;132&quot; [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed] 1;&quot;&gt;Tel &amp; Fax: +852 3626 2879 Email: info@flax.hk&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\n'),
	(5, 19, '&lt;h4&gt;&lt;strong&gt;&lt;u&gt;TERMS &amp; CONDITION&lt;/u&gt;&lt;/strong&gt;&lt;/h4&gt;\n\n&lt;hr /&gt;\n&lt;ol&gt;\n &lt;li&gt;Payment:\n &lt;ul&gt;\n  &lt;li&gt;50% DP Upon Confimation/Purchase Order&lt;/li&gt;\n  &lt;li&gt;40% Upon Initial presentation&lt;/li&gt;\n  &lt;li&gt;10% Upon completion of the project&lt;/li&gt;\n &lt;/ul&gt;\n &lt;/li&gt;\n &lt;li&gt;Down payment is non-refundable&lt;/li&gt;\n &lt;li&gt;All prices are subject to change without prior notice&lt;/li&gt;\n &lt;li&gt;Area shall be turned over to us for the construction free and clear of any debris and/or builder\'s material and rubble as well as machiner and equipment and shall be generally clean.&lt;/li&gt;\n &lt;li&gt;Water, electricityand lighting (if necessary) shall be provided to the site (areas to be painted) free of charge.&lt;/li&gt;\n &lt;li&gt;Secure and safe warehousing for our material shall be provided at the construction free of charge.&lt;/li&gt;\n &lt;li&gt;At our election we shall be allowed to work overtime&lt;/li&gt;\n &lt;li&gt;We shall not be responsible and no way liable for any delays caused by the General Contstructor, any sub or other contractor and/or owner during, before and after the exceution f waterproofing and/or other unsound structures, force majeur, natural calamities, fire or other casualty or physical damage.&lt;/li&gt;\n &lt;li&gt;Application period shall be agreed upon&lt;/li&gt;\n &lt;li&gt;Please make all payments payable to &lt;u&gt;&lt;strong&gt;FLAX INC.&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n &lt;li&gt;Processing fees for &lt;u&gt;&lt;strong&gt;PERMITS ARE NOT INCLUDED&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;p&gt;We hope that our recommendations meet your favorable approval. If so, please affix your signature in the conforme. The Signed Conforme shall also server as out contruct for this project,&lt;/p&gt;\n\n&lt;p&gt;Should you have further inquiry, please feel free to callus and we will be glad to discuss the proposals with you personally.&lt;/p&gt;\n\n&lt;p&gt; &lt;/p&gt;\n\n&lt;table border=&quot;0&quot; cellpadding=&quot;1&quot; cellspacing=&quot;1&quot; height=&quot;132&quot; [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed] 1;&quot;&gt;Tel &amp; Fax: +852 3626 2879 Email: info@flax.hk&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\n'),
	(6, 22, '&lt;h4&gt;&lt;strong&gt;&lt;u&gt;TERMS &amp; CONDITION&lt;/u&gt;&lt;/strong&gt;&lt;/h4&gt;\n\n&lt;hr /&gt;\n&lt;ol&gt;\n &lt;li&gt;Payment:\n &lt;ul&gt;\n  &lt;li&gt;50% DP Upon Confimation/Purchase Order&lt;/li&gt;\n  &lt;li&gt;40% Upon Initial presentation&lt;/li&gt;\n  &lt;li&gt;10% Upon completion of the project&lt;/li&gt;\n &lt;/ul&gt;\n &lt;/li&gt;\n &lt;li&gt;Down payment is non-refundable&lt;/li&gt;\n &lt;li&gt;All prices are subject to change without prior notice&lt;/li&gt;\n &lt;li&gt;Area shall be turned over to us for the construction free and clear of any debris and/or builder\'s material and rubble as well as machiner and equipment and shall be generally clean.&lt;/li&gt;\n &lt;li&gt;Water, electricityand lighting (if necessary) shall be provided to the site (areas to be painted) free of charge.&lt;/li&gt;\n &lt;li&gt;Secure and safe warehousing for our material shall be provided at the construction free of charge.&lt;/li&gt;\n &lt;li&gt;At our election we shall be allowed to work overtime&lt;/li&gt;\n &lt;li&gt;We shall not be responsible and no way liable for any delays caused by the General Contstructor, any sub or other contractor and/or owner during, before and after the exceution f waterproofing and/or other unsound structures, force majeur, natural calamities, fire or other casualty or physical damage.&lt;/li&gt;\n &lt;li&gt;Application period shall be agreed upon&lt;/li&gt;\n &lt;li&gt;Please make all payments payable to &lt;u&gt;&lt;strong&gt;FLAX INC.&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n &lt;li&gt;Processing fees for &lt;u&gt;&lt;strong&gt;PERMITS ARE NOT INCLUDED&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;p&gt;We hope that our recommendations meet your favorable approval. If so, please affix your signature in the conforme. The Signed Conforme shall also server as out contruct for this project,&lt;/p&gt;\n\n&lt;p&gt;Should you have further inquiry, please feel free to callus and we will be glad to discuss the proposals with you personally.&lt;/p&gt;\n\n&lt;p&gt; &lt;/p&gt;\n\n&lt;table border=&quot;0&quot; cellpadding=&quot;1&quot; cellspacing=&quot;1&quot; height=&quot;132&quot; [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed] 1;&quot;&gt;Tel &amp; Fax: +852 3626 2879 Email: info@flax.hk&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\n'),
	(7, 23, '&lt;h4&gt;&lt;strong&gt;&lt;u&gt;TERMS &amp; CONDITION&lt;/u&gt;&lt;/strong&gt;&lt;/h4&gt;\n\n&lt;hr /&gt;\n&lt;ol&gt;\n &lt;li&gt;Payment:\n &lt;ul&gt;\n  &lt;li&gt;50% DP Upon Confimation/Purchase Order&lt;/li&gt;\n  &lt;li&gt;40% Upon Initial presentation&lt;/li&gt;\n  &lt;li&gt;10% Upon completion of the project&lt;/li&gt;\n &lt;/ul&gt;\n &lt;/li&gt;\n &lt;li&gt;Down payment is non-refundable&lt;/li&gt;\n &lt;li&gt;All prices are subject to change without prior notice&lt;/li&gt;\n &lt;li&gt;Area shall be turned over to us for the construction free and clear of any debris and/or builder\'s material and rubble as well as machiner and equipment and shall be generally clean.&lt;/li&gt;\n &lt;li&gt;Water, electricityand lighting (if necessary) shall be provided to the site (areas to be painted) free of charge.&lt;/li&gt;\n &lt;li&gt;Secure and safe warehousing for our material shall be provided at the construction free of charge.&lt;/li&gt;\n &lt;li&gt;At our election we shall be allowed to work overtime&lt;/li&gt;\n &lt;li&gt;We shall not be responsible and no way liable for any delays caused by the General Contstructor, any sub or other contractor and/or owner during, before and after the exceution f waterproofing and/or other unsound structures, force majeur, natural calamities, fire or other casualty or physical damage.&lt;/li&gt;\n &lt;li&gt;Application period shall be agreed upon&lt;/li&gt;\n &lt;li&gt;Please make all payments payable to &lt;u&gt;&lt;strong&gt;FLAX INC.&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n &lt;li&gt;Processing fees for &lt;u&gt;&lt;strong&gt;PERMITS ARE NOT INCLUDED&lt;/strong&gt;&lt;/u&gt;&lt;/li&gt;\n&lt;/ol&gt;\n\n&lt;p&gt;We hope that our recommendations meet your favorable approval. If so, please affix your signature in the conforme. The Signed Conforme shall also server as out contruct for this project,&lt;/p&gt;\n\n&lt;p&gt;Should you have further inquiry, please feel free to callus and we will be glad to discuss the proposals with you personally.&lt;/p&gt;\n\n&lt;p&gt; &lt;/p&gt;\n\n&lt;table border=&quot;0&quot; cellpadding=&quot;1&quot; cellspacing=&quot;1&quot; height=&quot;132&quot; [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed]=&quot;font-size:11px;&quot;&gt;&lt;span [removed] 1;&quot;&gt;Tel &amp; Fax: +852 3626 2879 Email: info@flax.hk&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\n');
/*!40000 ALTER TABLE `quotation_agreement` ENABLE KEYS */;


-- Dumping structure for table laravel.quotation_totals
CREATE TABLE IF NOT EXISTS `quotation_totals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quotation_id` int(10) unsigned NOT NULL,
  `subtotals` float(7,2) unsigned NOT NULL DEFAULT '0.00',
  `vat_rate` int(10) unsigned NOT NULL DEFAULT '0',
  `grand_total` float(7,2) unsigned NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.quotation_totals: ~2 rows (approximately)
/*!40000 ALTER TABLE `quotation_totals` DISABLE KEYS */;
INSERT INTO `quotation_totals` (`id`, `quotation_id`, `subtotals`, `vat_rate`, `grand_total`) VALUES
	(1, 19, 1233.00, 12, 1380.96),
	(2, 22, 6212.00, 0, 6212.00),
	(3, 23, 41250.00, 12, 46200.00);
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

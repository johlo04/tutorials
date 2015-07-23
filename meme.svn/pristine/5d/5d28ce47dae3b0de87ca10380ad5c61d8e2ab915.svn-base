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

-- Dumping structure for table laravel.particular_header
CREATE TABLE IF NOT EXISTS `particular_header` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned DEFAULT NULL,
  `particular_name` varchar(150) NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.particular_header: ~0 rows (approximately)
/*!40000 ALTER TABLE `particular_header` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table laravel.particular_header_items: ~0 rows (approximately)
/*!40000 ALTER TABLE `particular_header_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `particular_header_items` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

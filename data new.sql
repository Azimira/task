-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for assignment
CREATE DATABASE IF NOT EXISTS `assignment` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `assignment`;

-- Dumping structure for table assignment.record
CREATE TABLE IF NOT EXISTS `record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `idno` varchar(50) DEFAULT NULL,
  `busno` varchar(50) DEFAULT NULL,
  `busmodel` varchar(50) DEFAULT NULL,
  `maintenanceorder` varchar(50) DEFAULT NULL,
  `timestart` varchar(50) DEFAULT NULL,
  `timecompleted` varchar(50) DEFAULT NULL,
  `schedule` varchar(50) DEFAULT NULL,
  `remarkfront1` text,
  `remarkfront2` text,
  `remarkside1` text,
  `remarkside2` text,
  `remarkrear1` text,
  `remarkrear2` text,
  `remarkcontroller1` text,
  `remarkcontroller2` text,
  `remarkradio1` text,
  `remarkradio2` text,
  `remarkradio3` text,
  `remarktracker1` text,
  `remarktracker2` text,
  `remarktracker3` text,
  `remarktracker4` text,
  `remarkplayer1` text,
  `remarkplayer2` text,
  `remarkplayer3` text,
  `remarkplayer4` text,
  `remarkplayer5` text,
  `remarksys1` text,
  `remarksys2` text,
  `remarksys3` text,
  `remarksys4` text,
  `remarkcctv1` text,
  `remarkcctv2` text,
  `remarkcctv3` text,
  `remarkcctv4` text,
  `remarkcctv5` text,
  `remarketm1` text,
  `remarketm2` text,
  `remarkreader1` text,
  `remarkreader2` text,
  `remarkbts1` text,
  `remarkbts2` text,
  `remarkvault1` text,
  `remarkvault2` text,
  `vaulttype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table assignment.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_elpaper.tb_skck
DROP TABLE IF EXISTS `tb_skck`;
CREATE TABLE IF NOT EXISTS `tb_skck` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `tempat` varchar(200) DEFAULT NULL,
  `tanggal` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `perkerjaan` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `upload` varchar(200) DEFAULT NULL,
  `info` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table db_elpaper.tb_sktm
DROP TABLE IF EXISTS `tb_sktm`;
CREATE TABLE IF NOT EXISTS `tb_sktm` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `NIK` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `jenis` varchar(200) DEFAULT NULL,
  `tempat` varchar(200) DEFAULT NULL,
  `tanggal` varchar(200) DEFAULT NULL,
  `agama` varchar(200) DEFAULT NULL,
  `perkerjaan` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `upload` varchar(200) DEFAULT NULL,
  `info` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC COMMENT='5';

-- Data exporting was unselected.

-- Dumping structure for table db_elpaper.tb_sku
DROP TABLE IF EXISTS `tb_sku`;
CREATE TABLE IF NOT EXISTS `tb_sku` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `NIK` varchar(200) DEFAULT NULL,
  `jenis` varchar(200) DEFAULT NULL,
  `tempat` varchar(200) DEFAULT NULL,
  `tanggal` varchar(200) DEFAULT NULL,
  `agama` varchar(200) DEFAULT NULL,
  `perkerjaan` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `upload` varchar(200) DEFAULT NULL,
  `info` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table db_elpaper.tb_user
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `level` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

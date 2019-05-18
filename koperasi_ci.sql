-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table koperasi_ci.anggota
CREATE TABLE IF NOT EXISTS `anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` char(10) DEFAULT NULL,
  `username` char(50) DEFAULT NULL,
  `nama` varchar(225) NOT NULL,
  `password` char(50) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `no_telpon` char(13) DEFAULT NULL,
  `alamat` text,
  `tanggal_gabung` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `level` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  KEY `Index 1` (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table koperasi_ci.anggota: ~5 rows (approximately)
/*!40000 ALTER TABLE `anggota` DISABLE KEYS */;
REPLACE INTO `anggota` (`id`, `id_anggota`, `username`, `nama`, `password`, `jenis_kelamin`, `no_telpon`, `alamat`, `tanggal_gabung`, `level`, `status`, `tanggal_lahir`) VALUES
	(1, '1605190001', 'amar', 'Muammar', 'amar', 'L', '081914343075', 'Pruwokerto', '2019-05-16 00:00:00', 2, 1, '1998-05-06'),
	(3, '1605190003', 'ayana', 'Ayana Cicilia', 'ayana', 'P', '0895380042179', 'Jl. Tegal Mulya 5', '2019-05-16 00:00:00', 1, 1, '1995-12-29'),
	(4, '1605190004', 'aurel', 'Aurelia Citra', 'aurel', 'P', '089765342672', 'Cilacap', '2019-05-16 00:00:00', 1, 1, '1992-12-12'),
	(2, '1605190002', 'admin', 'Husein Assidiq', 'admin', 'L', '098887712734', 'bNjarnegara', '2019-05-18 03:59:47', 2, 1, '1999-05-18'),
	(14, '1805190005', NULL, 'John Legend', NULL, 'L', '-81 4141 141', 'New york', '2019-05-18 00:00:00', 1, 0, '1993-12-12');
/*!40000 ALTER TABLE `anggota` ENABLE KEYS */;

-- Dumping structure for table koperasi_ci.keuntungan
CREATE TABLE IF NOT EXISTS `keuntungan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table koperasi_ci.keuntungan: ~2 rows (approximately)
/*!40000 ALTER TABLE `keuntungan` DISABLE KEYS */;
REPLACE INTO `keuntungan` (`id`, `jumlah`, `tanggal`) VALUES
	(3, 1000000, '2019-05-18'),
	(4, 250000, '2019-05-18');
/*!40000 ALTER TABLE `keuntungan` ENABLE KEYS */;

-- Dumping structure for table koperasi_ci.pinjaman
CREATE TABLE IF NOT EXISTS `pinjaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pinjaman` char(50) DEFAULT NULL,
  `id_anggota` char(50) DEFAULT NULL,
  `jumlah` int(12) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `jenis` tinyint(1) DEFAULT '0',
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table koperasi_ci.pinjaman: ~2 rows (approximately)
/*!40000 ALTER TABLE `pinjaman` DISABLE KEYS */;
REPLACE INTO `pinjaman` (`id`, `id_pinjaman`, `id_anggota`, `jumlah`, `tanggal`, `status`, `jenis`) VALUES
	(1, '1', '1605190003', 1000000, '2019-05-06', 0, 1),
	(3, NULL, '1605190004', 150000, '2019-05-18', 0, 3);
/*!40000 ALTER TABLE `pinjaman` ENABLE KEYS */;

-- Dumping structure for table koperasi_ci.simpanan
CREATE TABLE IF NOT EXISTS `simpanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_simpanan` char(50) DEFAULT NULL,
  `id_anggota` char(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int(12) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table koperasi_ci.simpanan: ~3 rows (approximately)
/*!40000 ALTER TABLE `simpanan` DISABLE KEYS */;
REPLACE INTO `simpanan` (`id`, `id_simpanan`, `id_anggota`, `tanggal`, `jumlah`, `status`) VALUES
	(3, '3', '1605190003', '2019-05-18', 152000, 0),
	(5, '4', '1605190004', '2019-05-16', 120000, 0),
	(4, '5', '1605190003', '2019-05-16', 120000, 0);
/*!40000 ALTER TABLE `simpanan` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

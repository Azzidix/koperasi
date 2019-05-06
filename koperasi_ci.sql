CREATE TABLE IF NOT EXISTS `anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` char(10) DEFAULT NULL,
  `username` char(50) DEFAULT NULL,
  `nama` varchar(225) NOT NULL,
  `password` char(50) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `no_telpon` char(13) DEFAULT NULL,
  `alamat` text,
  `tanggal_gabung` date DEFAULT NULL,
  `level` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  KEY `Index 1` (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


REPLACE INTO `anggota` (`id`, `id_anggota`, `username`, `nama`, `password`, `jenis_kelamin`, `no_telpon`, `alamat`, `tanggal_gabung`, `level`, `status`) VALUES
	(1, '1', 'amar', 'Muammar', 'amar', 'L', '081914343075', 'Pruwokerto', '2019-04-30', 2, 1),
	(2, '2', 'admin', 'Husein Assidiq', 'admin', 'P', '081392939580', 'Banjarnegara', '2019-04-30', 1, 1);

CREATE TABLE IF NOT EXISTS `pinjaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pinjaman` char(50) DEFAULT NULL,
  `id_anggota` char(50) DEFAULT NULL,
  `jumlah` int(12) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  KEY `Index 1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `simpanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_simpanan` char(50) DEFAULT NULL,
  `id_anggota` char(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int(12) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  KEY `Index 1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



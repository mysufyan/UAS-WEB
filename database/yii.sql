-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jan 2018 pada 09.44
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode` varchar(15) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `satauan` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(12) NOT NULL,
  `suplier` varchar(200) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode`, `nama`, `satauan`, `jumlah`, `harga`, `suplier`, `tgl`) VALUES
('BK01', 'Buku Sidu', 'Lusin', 22, 24000, 'Sinar Dunia', '2018-01-17'),
('BP01', 'Bolpoin Standar', 'box', 30, 12000, 'Standart Compan', '2018-01-16'),
('PO01', 'Popok', 'pcs', 39, 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE `beli` (
  `nofaktur` varchar(15) NOT NULL,
  `tgl` date NOT NULL,
  `kode` varchar(15) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beli`
--

INSERT INTO `beli` (`nofaktur`, `tgl`, `kode`, `qty`) VALUES
('0000123401', '2018-01-16', 'BP01', 2),
('0000123402', '2018-01-16', 'BP01', 5),
('0897568900', '2018-01-15', 'PO01', 10),
('9080670001', '2018-01-15', 'PO01', 17);

--
-- Trigger `beli`
--
DELIMITER $$
CREATE TRIGGER ` TG_STOKUPDATE_BELI` AFTER INSERT ON `beli` FOR EACH ROW BEGIN
 UPDATE barang SET jumlah=jumlah+NEW.qty;
 UPDATE barang SET tgl=NEW.tgl
 WHERE kode=NEW.kode;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jual`
--

CREATE TABLE `jual` (
  `nofaktur` varchar(15) NOT NULL,
  `tgl` date NOT NULL,
  `kode` varchar(15) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jual`
--

INSERT INTO `jual` (`nofaktur`, `tgl`, `kode`, `qty`) VALUES
('0000123403', '2018-01-17', 'BK01', 3),
('0000123404', '2018-01-17', 'BK01', 7),
('0897800900', '2018-01-15', 'PO01', 10),
('0897800901', '2018-01-15', 'PO01', 5),
('0897800902', '2018-01-15', 'PO01', 1),
('0897800903', '2018-01-16', 'BK01', 7);

--
-- Trigger `jual`
--
DELIMITER $$
CREATE TRIGGER `TG_STOKUPDATE_JUAL` AFTER INSERT ON `jual` FOR EACH ROW BEGIN
 UPDATE barang SET jumlah=jumlah-NEW.qty;
 UPDATE barang SET tgl=NEW.tgl
 WHERE kode=NEW.kode;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1509172713),
('m130524_201442_init', 1509172751);

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplier`
--

CREATE TABLE `suplier` (
  `id` int(5) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `Perusahaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suplier`
--

INSERT INTO `suplier` (`id`, `kode`, `nama`, `alamat`, `Perusahaan`) VALUES
(10, 'SP01', 'Surya Adi', 'Jl.Pemuda no.9 Pekalongan', 'Sinar Dunia'),
(11, 'SP02', 'Agus Salim', 'Jl.Merpati no. 8 Semarang', 'Standart Compan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'toni', 'fF7c_qou25g8PSHeP1Fji5XOoNjpeO0J', '$2y$13$165QNX1t.CDv5rGEMofW2.l3kIK6jp1ZJ/yYrB7nT8FZZbZoJOhxC', NULL, 'muhammad@gmail.com', 10, 1509521100, 1509521100),
(2, 'admin', 'YzmsKybITpRuui8btXlWsKv6ZXqHcbOt', '$2y$13$rHd7ysFHNcHaHlI5Yi3ege4n.HG0KjokfN4/ij.jpDuesurMgw2nq', 'E0pZFZfhNTWjZQxy9VqjuKpLk6pwVKQJ_1511862791', 'admin@gmail.com', 10, 1511861757, 1511862791),
(3, 'sufyan', 'r1FMUXM55WNGNsjsa7UdoVeLNbI7wZiC', '$2y$13$BKkLMVMA02nmUsAY675eUOC04IvKayLVERjEJ2Zl2gVG23hKKpZ0S', 'VflmQXVFoBlz52SXfTtCrSbNA7H50dy2_1511862985', 'diyfya.98@gmail.com', 10, 1511862964, 1511862985),
(4, 'sodiq', 'qSRyLJ0ggOVXNKY0Xj3hjlAEnzlliSN_', '$2y$13$yIKaFcRW/SOg/D1D7kmzau0VYVsTQhwGIvr1CnFiCxiCKmU9Rw0ZC', NULL, 'sufyan.98@gmail.com', 10, 1515727483, 1515727483);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`nofaktur`);

--
-- Indexes for table `jual`
--
ALTER TABLE `jual`
  ADD PRIMARY KEY (`nofaktur`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

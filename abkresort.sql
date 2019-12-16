-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 03:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abkresort`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `nomor_hp` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `password`, `email`, `jenis_kelamin`, `nomor_hp`, `foto`, `post_date`) VALUES
(2, 'khos yakmal', 'f16da2e2146b2c2376b2ab8a23592075', 'akmalkhosy@gmail.com', 'Laki-laki', '085287736229', 'default.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id_class` int(11) NOT NULL,
  `nama_class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id_class`, `nama_class`) VALUES
(1, 'Ekonomi'),
(2, 'Bisnis');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tempat`
--

CREATE TABLE `jenis_tempat` (
  `id_jenis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_tempat`
--

INSERT INTO `jenis_tempat` (`id_jenis`, `nama`) VALUES
(1, 'Bandara'),
(2, 'Terminal');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_transport`
--

CREATE TABLE `jenis_transport` (
  `id_transport` int(11) NOT NULL,
  `nama_transport` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_transport`
--

INSERT INTO `jenis_transport` (`id_transport`, `nama_transport`) VALUES
(1, 'Pesawat'),
(2, 'Bis'),
(3, 'Mobil'),
(4, 'Kapal'),
(5, 'Kereta');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'Malang'),
(2, 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `id_penginapan` int(11) DEFAULT NULL,
  `id_transport` int(11) DEFAULT NULL,
  `id_wisata` int(11) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `id_kota`, `nama_paket`, `id_penginapan`, `id_transport`, `id_wisata`, `harga`, `foto`) VALUES
(8, 1, 'Liburan di Malang', 1, 5, 1, 1000000, 'Liburan_di_Malang.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `id_penginapan` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `nama_penginapan` varchar(30) NOT NULL,
  `jumlah_tamu` int(11) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `foto` text NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id_penginapan`, `id_kota`, `nama_penginapan`, `jumlah_tamu`, `harga`, `foto`, `post_date`) VALUES
(1, 2, 'Swiss Bellin Hotel', 1, 1000000, 'Swiss_Bellin_Hotel.jpg', '0000-00-00'),
(4, 2, 'Wind Hotel', 122, 1000000, 'Wind_Hotel.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `nomor_hp` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempat_transport`
--

CREATE TABLE `tempat_transport` (
  `id_tempat` int(11) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL,
  `jenis_tempat` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat_transport`
--

INSERT INTO `tempat_transport` (`id_tempat`, `nama_tempat`, `jenis_tempat`, `id_kota`) VALUES
(1, 'Bandara Abdurahman Saleh', 1, 1),
(2, 'Terminal Arjosari', 2, 1),
(5, 'Bandara Juanda', 1, 2),
(6, 'Terminal Bungur Asih', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `id_penginapan` int(11) DEFAULT NULL,
  `id_transport` int(11) DEFAULT NULL,
  `hari` int(11) DEFAULT '1',
  `id_wisata` int(11) DEFAULT NULL,
  `tamu` int(11) NOT NULL DEFAULT '1',
  `total_harga` int(11) NOT NULL,
  `status` enum('Peding','Sukses') NOT NULL,
  `bukti_transaksi` varchar(255) NOT NULL,
  `e_tiket` varchar(255) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id_transport` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `jenis_transport` int(11) NOT NULL,
  `nama_transp` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat_asal` int(11) NOT NULL,
  `tempat_tujuan` int(11) NOT NULL,
  `jam_berangkat` time NOT NULL,
  `jam_tiba` time NOT NULL,
  `kisaran` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id_transport`, `class`, `jenis_transport`, `nama_transp`, `tanggal`, `tempat_asal`, `tempat_tujuan`, `jam_berangkat`, `jam_tiba`, `kisaran`, `harga`, `post_date`) VALUES
(5, 1, 1, 'Garuda', '0000-00-00', 1, 5, '17:00:00', '18:00:00', '5000-70000', 150000, '0000-00-00'),
(6, 2, 1, 'Lion Air', '0000-00-00', 5, 1, '01:00:00', '02:00:00', '1000000', 100000, '0000-00-00'),
(9, 1, 5, 'KA Singosari', '2019-12-19', 2, 6, '01:02:00', '01:07:00', '1000000', 10000000, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `nomor_hp` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `password`, `email`, `jenis_kelamin`, `nomor_hp`, `foto`, `post_date`) VALUES
(5, 'Khosy', 'ff34a70a2dc3e9b0a4f319c4c30d45a8', 'akmalkhosy@gmail.com', 'Laki-laki', '085287736229', 'default.jpg', '0000-00-00'),
(6, 'Khosy Akmal R', 'd54d1702ad0f8326224b817c796763c9', 'khosy@gmail.com', 'Laki-laki', '08521283142', 'PASS.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `foto` text NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_kota`, `nama_wisata`, `harga_tiket`, `foto`, `post_date`) VALUES
(1, 1, 'Kebun Teh Wonosari', 10000, 'default.jpg', '0000-00-00'),
(2, 1, 'Kebun Binatang', 20000, 'Kebun_Binatang.jpg', '0000-00-00'),
(6, 1, 'Paralayang111', 34242, 'Paralayang111.jpg', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`);

--
-- Indexes for table `jenis_tempat`
--
ALTER TABLE `jenis_tempat`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `jenis_transport`
--
ALTER TABLE `jenis_transport`
  ADD PRIMARY KEY (`id_transport`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `FK_PAKET_PENGINAPAN` (`id_penginapan`),
  ADD KEY `FK_PAKET_WISATA` (`id_wisata`),
  ADD KEY `FK_PAKT_TRANSP` (`id_transport`),
  ADD KEY `FK_PAKT_KOTA` (`id_kota`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id_penginapan`),
  ADD KEY `FK_KOTA_PENGINAPAN` (`id_kota`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tempat_transport`
--
ALTER TABLE `tempat_transport`
  ADD PRIMARY KEY (`id_tempat`),
  ADD KEY `FK_TEMPAT_KOTA` (`id_kota`),
  ADD KEY `FK_TEMPAT_JENIS` (`jenis_tempat`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `FK_TRANS_PAKET` (`id_paket`),
  ADD KEY `FK_TRANS_PENGINAPAN` (`id_penginapan`),
  ADD KEY `FK_TRANS_WISATA` (`id_wisata`),
  ADD KEY `FK_TRANS_USER` (`id_user`),
  ADD KEY `FK_TRANS_TRANSP` (`id_transport`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id_transport`),
  ADD KEY `FK_TRANSP_JENIS` (`jenis_transport`),
  ADD KEY `FK_TRANSP_TEMPAT_ASL` (`tempat_asal`),
  ADD KEY `FK_TRANSP_TEMPAT_TUJ` (`tempat_tujuan`),
  ADD KEY `FK_TRANSP_CLASS` (`class`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `FK_WISATA_KOTA` (`id_kota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_tempat`
--
ALTER TABLE `jenis_tempat`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_transport`
--
ALTER TABLE `jenis_transport`
  MODIFY `id_transport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id_penginapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tempat_transport`
--
ALTER TABLE `tempat_transport`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id_transport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `FK_PAKET_PENGINAPAN` FOREIGN KEY (`id_penginapan`) REFERENCES `penginapan` (`id_penginapan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PAKET_WISATA` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PAKT_KOTA` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PAKT_TRANSP` FOREIGN KEY (`id_transport`) REFERENCES `transport` (`id_transport`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD CONSTRAINT `FK_KOTA_PENGINAPAN` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tempat_transport`
--
ALTER TABLE `tempat_transport`
  ADD CONSTRAINT `FK_TEMPAT_JENIS` FOREIGN KEY (`jenis_tempat`) REFERENCES `jenis_tempat` (`id_jenis`),
  ADD CONSTRAINT `FK_TEMPAT_KOTA` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_TRANS_PAKET` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TRANS_PENGINAPAN` FOREIGN KEY (`id_penginapan`) REFERENCES `penginapan` (`id_penginapan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TRANS_TRANSP` FOREIGN KEY (`id_transport`) REFERENCES `transport` (`id_transport`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TRANS_USER` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TRANS_WISATA` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `FK_TRANSP_CLASS` FOREIGN KEY (`class`) REFERENCES `class` (`id_class`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TRANSP_JENIS` FOREIGN KEY (`jenis_transport`) REFERENCES `jenis_transport` (`id_transport`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TRANSP_TEMPAT_ASL` FOREIGN KEY (`tempat_asal`) REFERENCES `tempat_transport` (`id_tempat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TRANSP_TEMPAT_TUJ` FOREIGN KEY (`tempat_tujuan`) REFERENCES `tempat_transport` (`id_tempat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `FK_WISATA_KOTA` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

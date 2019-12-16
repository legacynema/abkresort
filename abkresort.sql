-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 11:59 AM
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
CREATE DATABASE IF NOT EXISTS `abkresort` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `abkresort`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--\

CREATE TABLE `admin` (
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `nomor_hp` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `password`, `email`, `jenis_kelamin`, `nomor_hp`, `foto`) VALUES
(2, 'khos yakmal', 'f16da2e2146b2c2376b2ab8a23592075', 'akmalkhosy@gmail.com', 'Laki-laki', '085287736229', 'default.jpg');

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
(4, 'Kapal');

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
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id_penginapan`, `id_kota`, `nama_penginapan`, `jumlah_tamu`, `harga`, `foto`) VALUES
(1, 2, 'Swiss Bellin Hotel', 1, 1000000, 'Swiss_Bellin_Hotel.jpg'),
(4, 2, 'Wind Hotel', 122, 1000000, 'Wind_Hotel.jpg');

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
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_paket`, `id_penginapan`, `id_transport`, `hari`, `id_wisata`, `tamu`, `total_harga`) VALUES
(5, 5, NULL, NULL, 5, NULL, 2, 5, 2500000),
(7, 5, 1, NULL, NULL, NULL, NULL, 1, 2500000);

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
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id_transport`, `class`, `jenis_transport`, `nama_transp`, `tanggal`, `tempat_asal`, `tempat_tujuan`, `jam_berangkat`, `jam_tiba`, `kisaran`, `harga`) VALUES
(5, 1, 1, 'Garuda', '0000-00-00', 1, 5, '17:00:00', '18:00:00', '5000-70000', 150000),
(6, 2, 1, 'Lion Air', '2019-12-16', 5, 1, '01:00:00', '02:00:00', '1000000', 100000);


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
  `foto` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `password`, `email`, `jenis_kelamin`, `nomor_hp`, `foto`) VALUES
(5, 'Khosy', 'ff34a70a2dc3e9b0a4f319c4c30d45a8', 'akmalkhosy@gmail.com', 'Laki-laki', '085287736229', 'default.jpg'),
(6, 'Khosy Akmal R', 'd54d1702ad0f8326224b817c796763c9', 'khosy@gmail.com', 'Laki-laki', '08521283142', 'PASS.jpg');


-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_kota`, `nama_wisata`, `harga_tiket`, `foto`) VALUES
(1, 1, 'Kebun Teh Wonosari', 10000, 'default.jpg'),
(2, 1, 'Kebun Binatang', 20000, 'Kebun_Binatang.jpg'),
(6, 1, 'Paralayang111', 34242, 'Paralayang111.jpg');

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
  MODIFY `id_transport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id_transport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


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
--
-- Database: `greengarbage`
--
CREATE DATABASE IF NOT EXISTS `greengarbage` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `greengarbage`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sampah`
--

CREATE TABLE `sampah` (
  `id_sampah` int(11) NOT NULL,
  `nama_sampah` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `email_pembeli` varchar(50) NOT NULL,
  `id_sampah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `jumlah_sampah` int(11) NOT NULL,
  `status` enum('Selesai','Belum Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`id_sampah`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_TRANSAKSI_SAMPAH` (`id_sampah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sampah`
--
ALTER TABLE `sampah`
  MODIFY `id_sampah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_TRANSAKSI_SAMPAH` FOREIGN KEY (`id_sampah`) REFERENCES `sampah` (`id_sampah`);
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'travel', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":[\"admin\",\"jenis_penginapan\",\"jenis_transportasi\",\"kota\",\"penginapan\",\"super_admin\",\"transportasi\",\"user\",\"wisata\"],\"table_structure[]\":[\"admin\",\"jenis_penginapan\",\"jenis_transportasi\",\"kota\",\"penginapan\",\"super_admin\",\"transportasi\",\"user\",\"wisata\"],\"table_data[]\":[\"admin\",\"jenis_penginapan\",\"jenis_transportasi\",\"kota\",\"penginapan\",\"super_admin\",\"transportasi\",\"user\",\"wisata\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

--
-- Dumping data for table `pma__pdf_pages`
--

INSERT INTO `pma__pdf_pages` (`db_name`, `page_nr`, `page_descr`) VALUES
('travel', 1, 'Skema Test'),
('greengarbage', 2, 'DESAIN'),
('abkresort', 3, 'DESIGN');

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"trash\",\"table\":\"transaksi\"},{\"db\":\"trash\",\"table\":\"sampah\"},{\"db\":\"trash\",\"table\":\"users\"},{\"db\":\"tubes\",\"table\":\"user\"},{\"db\":\"greengarbage\",\"table\":\"transaksi\"},{\"db\":\"greengarbage\",\"table\":\"sampah\"},{\"db\":\"trash\",\"table\":\"password_resets\"},{\"db\":\"abkresort\",\"table\":\"transaksi\"},{\"db\":\"abkresort\",\"table\":\"transport\"},{\"db\":\"abkresort\",\"table\":\"class\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

--
-- Dumping data for table `pma__table_coords`
--

INSERT INTO `pma__table_coords` (`db_name`, `table_name`, `pdf_page_number`, `x`, `y`) VALUES
('abkresort', 'admin', 3, 710, 354),
('abkresort', 'class', 3, 90, 558),
('abkresort', 'jenis_tempat', 3, 143, 493),
('abkresort', 'jenis_transport', 3, 149, 108),
('abkresort', 'kota', 3, 449, 179),
('abkresort', 'paket', 3, 460, 255),
('abkresort', 'penginapan', 3, 708, 64),
('abkresort', 'super_admin', 3, 696, 512),
('abkresort', 'tempat_transport', 3, 143, 386),
('abkresort', 'transaksi', 3, 447, 371),
('abkresort', 'transport', 3, 148, 177),
('abkresort', 'user', 3, 709, 204),
('abkresort', 'wisata', 3, 448, 63),
('greengarbage', 'admin', 2, 777, 204),
('greengarbage', 'sampah', 2, 123, 203),
('greengarbage', 'transaksi', 2, 424, 170),
('travel', 'admin', 1, 87, 520),
('travel', 'jenis_penginapan', 1, 79, 238),
('travel', 'jenis_transportasi', 1, 81, 58),
('travel', 'kota', 1, 407, 203),
('travel', 'paket', 1, 393, 26),
('travel', 'penginapan', 1, 77, 308),
('travel', 'super_admin', 1, 639, 515),
('travel', 'transaksi', 1, 392, 303),
('travel', 'transportasi', 1, 79, 121),
('travel', 'user', 1, 381, 517),
('travel', 'wisata', 1, 650, 173);

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- Dumping data for table `pma__table_info`
--

INSERT INTO `pma__table_info` (`db_name`, `table_name`, `display_field`) VALUES
('abkresort', 'tempat_transport', 'jenis_tempat'),
('abkresort', 'transport', 'jenis_transport'),
('greengarbage', 'transaksi', 'email_pembeli'),
('travel', 'penginapan', 'nama_penginapan'),
('travel', 'wisata', 'nama_wisata');

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'travel', 'transportasi', '{\"sorted_col\":\"`transportasi`.`id_transportasi`  ASC\"}', '2019-10-10 01:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('', '2019-11-06 12:39:29', '{\"Console\\/Mode\":\"collapse\"}'),
('root', '2019-12-03 12:03:07', '{\"Console\\/Mode\":\"show\",\"Console\\/Height\":-10}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `siakadku`
--
CREATE DATABASE IF NOT EXISTS `siakadku` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `siakadku`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `foto`) VALUES
(1, 'dzikri@siakad.com', 'a6e0f11fcff95151129b78b03adec842', 'default.jpg'),
(2, 'khosy@siakad.com', 'bdab105361efd70699e7cdcd84c26132', 'default.jpg'),
(3, 'deby@siakad.com', '9bcc02b4703c28a756dbdf1e16b7aa6c', 'default.jpg'),
(4, 'falah@siakad.com', '2d0567b23f9bab484baca7e279139c0c', 'default.jpg'),
(5, 'dhandy@siakad.com', 'c4a8db4a597a9b03f1ce60fe5d5dcbc4', 'default.jpg'),
(6, 'firman@siakad.com', '9dfbbc92d99104d364bf36e07753c461', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` int(11) NOT NULL,
  `nama_bulan` varchar(10) NOT NULL,
  `id_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `nama_bulan`, `id_semester`) VALUES
(1, 'Januari', 2),
(2, 'Februari', 2),
(3, 'Maret', 2),
(4, 'April', 2),
(5, 'Mei', 2),
(6, 'Juni', 2),
(7, 'Juli', 1),
(8, 'Agustus', 1),
(9, 'September', 1),
(10, 'Oktober', 1),
(11, 'November', 1),
(12, 'Desember', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nig_guru` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `asal_kota` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nig_guru`, `password`, `nama_lengkap`, `asal_kota`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`, `alamat`, `foto`) VALUES
(1, '1741720052', 'ac9d3c581fc1660004e8c2838f77cb23', 'Dzikri Alif Abdillah S,Ag', 'Jombang', '1999-07-19', 'Laki-laki', '081234762703', 'Perumahan Indah C/5', 'default.jpg'),
(2, '1741720051', 'f2b21ef4ec5c583e71a595a36fe169c5', 'Yolanda Marissa S,Pg', 'Tuban', '1999-09-20', 'Perempuan', '08124389220', 'Perumahan Cindramata B/11', 'default.jpg'),
(3, '1741720053', '9ff7b68a010aeb99d9c909b581cdbdac', 'Sasmita Citra S,Pd', 'Surabaya', '1999-02-11', 'Perempuan', '08122521321', 'Perumahan Permata Permai D/11', 'default.jpg'),
(4, '1741720054', 'a87d4d4978f44d7bf297f1541cc87a5c', 'Yoga Herlambang S,Tm', 'Pamekasan', '1997-04-21', 'Laki-laki', '0812435331', 'Perumahan Garuda B/4', 'default.jpg'),
(5, '1741720055', '08c86177eb70554ef91ad75e302d7e47', 'Ninda Puspita Sari S,Pd', 'Probolinggo', '1995-01-19', 'Perempuan', '0816635216', 'Perumahan Aksara Permai G/10', 'default.jpg'),
(6, '1741720056', '46f83ae627b911b9421c9afbde45d4a0', 'Laras Pandhita S,Pd', 'Malang', '1998-10-15', 'Perempuan', '08124895564', 'Perumahan Green Jason D/2', 'default.jpg'),
(7, '1741720057', '306430fbe473d57e11a5ec85b3569b47', 'Ahmad Heriyawan S,Ag', 'Malang', '1998-09-08', 'Laki-laki', '0812451312', 'Perumahan Permata Permai C/16', 'default.jpg'),
(8, '1741720058', 'b0209bec36c07adedd4d7051650d1aad', 'Putra Bagus Permana S,Og', 'Bojonegoro', '1998-11-09', 'Laki-laki', '0811352342', 'Perumahan Cindramata B/4', 'default.jpg'),
(9, '1741720059', '761e69f6052a8e2ae9cdb81aeff976ab', 'Ghea Nandita Fitri S,Pd', 'Surabaya', '1997-06-02', 'Perempuan', '08124315358', 'Perumahan Garuda F/20', 'default.jpg'),
(10, '1741720060', '9f23fc6306f21171a5dc874b93aa6212', 'Bagus Sandhika S,Pd', 'Surabaya', '1995-04-11', 'Laki-laki', '0816123122', 'Perumahan Aksara Permai B/20', 'default.jpg'),
(11, '1741720070', 'e21ed367c60ecd5a55fad75fcfbcf3c0', 'Monika Gandha Rahayu S,Pd', 'Probolinggo', '1998-09-20', 'Perempuan', '08114851231', 'Perumahan Garuda C/11', 'default.jpg'),
(12, '1741720080', '8bfe2ec31ca43e138e53a413ff49b109', 'Tito Sarapea S,Og', 'Malang', '1997-01-19', 'Laki-laki', '0812466312', 'Perumahan Garuda Jaya D/11', 'default.jpg'),
(13, '1741720090', '247100a29b5d580b6739de0c3e28e755', 'Mahesa Yoga Andika S,Og', 'Jember', '1997-06-19', 'Laki-laki', '08113542123', 'Perumahan Majapahit B/4', 'default.jpg'),
(14, '1741720100', 'd08bec01bcc3ad6a2115879f64cd3ae4', 'Niken Dewi Sasmita S,Pd', 'Jember', '1998-07-21', 'Perempuan', '08124992142', 'Perumahan Garuda Jaya F/20', 'default.jpg'),
(15, '1741720110', '0f3490b994c5550049d1a876eef5ca47', 'Renaldo Kurniawan S,Ag', 'Sidoarjo', '1997-04-28', 'Laki-laki', '08123311233', 'Perumahan Cindra Perkasa C/22', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `jadwal` text NOT NULL,
  `nama_jadwal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_jurusan`, `jadwal`, `nama_jadwal`) VALUES
(1, 1, 'Jadwal_IPA.pdf', 'Jadwal IPA'),
(2, 2, 'Jadwal_IPS.pdf', 'Jadwal IPS');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'IPA'),
(2, 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_jurusan`, `nama_kelas`) VALUES
(1, 1, '10 IPA 1'),
(2, 1, '10 IPA 2'),
(4, 1, '11 IPA 1'),
(5, 1, '11 IPA 2'),
(7, 1, '12 IPA 1'),
(8, 1, '12 IPA 2'),
(10, 2, '10 IPS 1'),
(11, 2, '10 IPS 2'),
(13, 2, '11 IPS 1'),
(14, 2, '11 IPS 2'),
(15, 2, '12 IPS 1'),
(16, 2, '12 IPS 2');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Agama Islam 1'),
(2, 'Agama Islam 2'),
(3, 'Agama Islam 3'),
(4, 'Bahasa Indonesia 1'),
(5, 'Bahasa Indonesia 2'),
(6, 'Bahasa Indonesia 3'),
(7, 'Bahasa Inggris 1'),
(8, 'Bahasa Inggris 2'),
(9, 'Bahasa Inggris 3'),
(10, 'Sejarah Wajib'),
(11, 'Matematika Wajib'),
(12, 'Fisika'),
(13, 'Biologi'),
(14, 'Kimia'),
(15, 'Ekonomi'),
(16, 'Sosiologi'),
(17, 'Geografi'),
(18, 'Sejarah Peminatan'),
(19, 'Matematika Peminatan'),
(20, 'Olahraga 1'),
(21, 'Olahraga 2'),
(22, 'Olahraga 3');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nilai_siswa` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `tanggal`, `foto`, `keterangan`) VALUES
(1, 'Ujian Nasional', '2019-04-08', 'Ujian_Nasional.png', 'Ujian nasional berbasis komputer SMAN 4 MACIPO');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `semester`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(20) NOT NULL DEFAULT 'default.jpg',
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `nisn`, `password`, `nama_siswa`, `kota`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`, `alamat`, `foto`, `id_jurusan`) VALUES
(2, 1, '1904502', 'c64eefc611f176ff764934b587f06b69', 'Andreas Prayoga', 'Tegal', '2000-03-19', 'Laki-laki', '0842131242', 'Jl. Soekarno Hatta 20/B-4', 'default.jpg', 1),
(3, 1, '1904503', '69cdd8217f4e2110942ac704d78ef066', 'Bella Faradina', 'Solo', '2000-02-11', 'Perempuan', '0842198723', 'Jl. Pattimura 20/F-5', 'default.jpg', 1),
(4, 1, '1904504', 'ca4678f0bb8e2e94210d546af812d739', 'Bagas Saputra', 'Sidoarjo', '2000-06-02', 'Laki-laki', '0842198767', 'Jl. Soekarno Hatta 20/B-11', 'default.jpg', 1),
(5, 1, '1904505', 'fe84d1616aa9501ef9a947d508fa297b', 'Cantika Rahayu', 'Malang', '2000-08-25', 'Perempuan', '0842178972', 'Jl. Garuda 10/C', 'default.jpg', 1),
(6, 1, '1904001', 'daeeb683fae997226fa3ffcdc1fc4cd2', 'Aida', 'Pemalang', '1998-07-01', 'Perempuan', '082131232221', 'Jl Liku_Liku', 'default.jpg', 1),
(7, 1, '1904002', 'b1ee98b5fcd92760d230bb656846c8ee', 'Aini', 'Malang', '1998-11-09', 'Perempuan', '082132217251', 'Jl Supratman', 'default.jpg', 1),
(8, 1, '1904003', '3fedf292b58da2fdb493267d85742a3e', 'Bebi', 'Malang', '1998-02-18', 'Perempuan', '082132293821', 'Jl Lodikasi', 'default.jpg', 1),
(9, 1, '1904004', 'fce0f871aabff3b520e03b6dde2032dd', 'Cakra', 'Malang', '1998-07-19', 'Laki-laki', '082132203928', 'Jl Kertas Biru', 'default.jpg', 1),
(10, 1, '1904005', '10a1f4d86629f2456eb007585aa5c6fb', 'Doyok', 'Jombang', '1998-03-09', 'Laki-laki', '082127161221', 'Jl Anoman', 'default.jpg', 1),
(11, 2, '1904111', 'fdfcd330a34c62465476238e53ec1ade', 'Arini', 'Magetan', '1998-02-11', 'Perempuan', '082131298121', 'Jl Komang', 'default.jpg', 1),
(12, 2, '1904112', '4bbe969485681696f32adfa755520a83', 'Aska', 'Solo', '1998-11-28', 'Perempuan', '082132217788', 'Jl Supratman', 'default.jpg', 1),
(13, 2, '1904113', 'a6b20d1b3b2571f43355b57c2c746eab', 'Cika', 'Gresik', '1998-12-18', 'Perempuan', '082132281121', 'Jl Lodikasi', 'default.jpg', 1),
(14, 2, '1904114', 'fcd2ee1d9029270a5965fa3c46ca2d26', 'Darma', 'Malang', '1998-02-19', 'Laki-laki', '0821322039289', 'Jl Kunir', 'default.jpg', 1),
(15, 2, '1904115', '6a38ba521f438e02c64057db656c864b', 'Desi', 'Solo', '1998-09-11', 'Perempuan', '082127161299', 'Jl Pisang Kipas', 'default.jpg', 1),
(16, 2, '1904116', 'f27aa0df22b98f7e542647aeb7d0ffd5', 'Jihan', 'Surabaya', '1998-02-28', 'Perempuan', '082115224181', 'Jl Singajaya', 'default.jpg', 1),
(17, 2, '1904117', '23a15cbf421df4f36f69ac75aa246464', 'Karin', 'Blitar', '1998-12-12', 'Perempuan', '082132098290', 'Jl Saktijaya', 'default.jpg', 1),
(18, 2, '1904118', 'c6202a396fb5c8a5fd0c5445a8a2ee57', 'Nania', 'Denpasar', '1998-07-17', 'Perempuan', '082131123629', 'Jl Bunga Andong', 'default.jpg', 1),
(19, 2, '1904119', 'af4738222d270114a7b44f9f8881de72', 'Rokim', 'Malang', '1998-05-13', 'Laki-laki', '082132292987', 'Jl Singaraja', 'default.jpg', 1),
(20, 2, '1904120', '9833dd79fb102fa8657d5213427e4391', 'Yessi', 'Malang', '1999-08-18', 'Perempuan', '082132200092', 'Jl Bunga Melati', 'default.jpg', 1),
(21, 4, '190411', '522d88a003955fc4955a04e61548fe21', 'Ahmad Pradana', 'Malang', '1999-05-01', 'Laki-laki', '082345728', 'Jl. Garuda 16 C', 'default.jpg', 1),
(22, 4, '190412', 'ef00d7041bce703958752c21c3981ad0', 'Arpana Maulana', 'Malang', '0000-00-00', 'Laki-laki', '081785542', 'Jl. Mangga 17', 'default.jpg', 1),
(23, 4, '190413', '1a1f7ecd0141a566e4b5881e2408823f', 'Adinda Sari', 'Surabaya', '2000-12-01', 'Perempuan', '081986876', 'Jl. Pisang 72', 'default.jpg', 1),
(24, 4, '190514', '980127fe8d814d825acb2fbd795d82cc', 'Bella Sofi', 'Gresik', '2000-12-12', 'Perempuan', '089764563', 'Perumahan Mandiri 2', 'default.jpg', 1),
(25, 4, '190415', 'cfbee4a1989324171bfb342af09eb535', 'Chandra Permana', 'Babat', '2000-07-07', 'Laki-laki', '088625587', 'Jl. Biru laut 117', 'default.jpg', 1),
(26, 4, '190416', '726b9f4a15a087531308b50ed3b1edcd', 'Deddy Negoro', 'Surabaya', '1999-05-09', 'Laki-laki', '082857986', 'Jl. Merah Hati 08', 'default.jpg', 1),
(27, 4, '190417', 'd46eb9c398ddf25683a070438ed3e199', 'Damayanti Chyntia', 'Lamongan', '2000-02-09', 'Perempuan', '087998764', 'Jl. Diponegoro gg IV', 'default.jpg', 1),
(28, 4, '190418', '3a9db2b11692126ec53d5fa64b4d2828', 'Erlangga Putra', 'Surabaya', '1999-11-11', 'Laki-laki', '089963258', 'Jl. Patimura 02', 'default.jpg', 1),
(29, 4, '190419', 'd08772bc18f5eb211e9bc98018c48ae4', 'Fanani Abimanyu', 'Mojokerto', '1999-06-03', 'Laki-laki', '085373627', 'Jl. Veteran 118', 'default.jpg', 1),
(30, 4, '190422', '1076e57ce1e589e6d0b48f6a7867d5bd', 'Gilang Permadi', 'Sidoarjo', '2001-08-09', 'Laki-laki', '085678356', 'Jl. Veteran 202', 'default.jpg', 1),
(31, 5, '190501', '735df5792b5b49bec37c4fa72712db11', 'Ananda', 'Malang', '2000-03-09', 'Perempuan', '081282734', 'Jl. Pisang 72', 'default.jpg,', 1),
(32, 5, '190502', '69a92b5ac76e192566f618e41ce1154d', 'Arifany', 'Rembang', '2000-09-09', 'Laki-laki', '081275958', 'Jl.Manggis 07', 'default.jpg', 1),
(33, 5, '190502', '69a92b5ac76e192566f618e41ce1154d', 'Arifany', 'Rembang', '2000-00-00', 'Laki-laki', '081275958', 'Jl.Manggis 07', 'default.jpg', 1),
(34, 5, '190503', '534cbe8287884bc658d368689cb88858', 'Beni', 'Semarang', '2000-10-10', 'Laki-laki', '081748372', 'Jl. Mangga 55', 'default.jpg', 1),
(35, 5, '190504', 'fb9ec59501b866b56573d61b41fc2b36', 'Chindy', 'Lamongan', '2000-09-10', 'Perempuan', '081678653', 'Jl. Diponegoro 112', 'default.jpg', 1),
(36, 5, '190505', '22f90d3e1a7d7aeab5fbcb603ad54243', 'Cinta', 'Mojokerto', '2000-05-04', 'Perempuan', '081546837', 'Jl. Patimura 56', 'default.jpg', 1),
(37, 5, '190506', '6183ce6607e58f11924232ed5030a654', 'Dayang', 'Mojokerto', '2000-11-11', 'Perempuan', '081947635', 'Jl. Veteran 67', 'default.jpg', 1),
(38, 5, '190507', '05cf22dcb225cea0be727d494986f6f9', 'Erna', 'Malang', '2000-07-08', 'Perempuan', '081378987', 'Jl. Surabay 100', 'default.jpg', 1),
(39, 5, '190508', '78ba50f54766a58aca2f5e9b282dd081', 'Fanny', 'Surabaya', '2000-02-02', 'Laki-laki', '081657937', 'Jl. Jombang 009', 'deafult.jpg', 1),
(40, 5, '190509', 'a7fd015cf077166097fac9e29dc9aff8', 'Indri', 'Situbondo', '2000-12-01', 'Perempuan', '081874638', 'Jl. Wilis 50', 'default.jpg', 1),
(41, 7, '1741720030', '299049e928d93bf3ba4af71512e91ab9', 'M. Hudzaifah', 'Bontang', '1999-02-11', 'Laki-laki', '081244445248', 'Jl Hatta', 'default.jpg', 1),
(42, 7, '1741720031', 'f00d8f97614793454fe7f786b650de21', 'M. Fachri', 'Samarinda', '1999-04-21', 'Laki-laki', '081288845247', 'Jl Soekarno', 'default.jpg', 1),
(43, 7, '1741720032', 'ae746cbc8997b6dc44dac986f1c82865', 'M. Rusyda', 'Balikpapan', '1999-01-13', 'Laki-laki', '081555342347', 'Jl Candi Mendut', 'default.jpg', 1),
(44, 7, '1741720033', '9a022e5957941c21dc411654df5285da', 'Hayu Qomariah', 'Sangatta', '1999-03-12', 'Perempuan', '081177745678', 'Jl Batu', 'default.jpg', 1),
(45, 7, '1741720034', '46b5a2fc1402fc7361966219a31da85f', 'Yuthika Hesti', 'Berau', '1999-02-14', 'Perempuan', '0812123448888', 'Jl Perisai', 'default.jpg', 1),
(46, 7, '1741720035', '07d22d1fbcefe8881f747ad621af2655', 'Alya Faradilla', 'Palangkaraya', '1999-02-15', 'Perempuan', '081333348876', 'Jl Veteran', 'default.jpg', 1),
(47, 7, '1741720036', '9516c37433269439419576c3ca756997', 'Syifa Hafidha', 'Banjarmasin', '1999-03-03', 'Perempuan', '0812123332146', 'Jl Serigala', 'default.jpg', 1),
(48, 7, '1741720037', 'ab92fe88a1d11b1c5e120267f88cf32d', 'Addiena Aulia', 'Martapura', '1999-05-02', 'Perempuan', '081212348871', 'Jl Harimau', 'default.jpg', 1),
(49, 7, '1741720038', 'acf4f183de8b32ee821250d6473f26d1', 'Ibrahim Pratama', 'Yogyakarta', '1999-02-07', 'Laki-laki', '081214566778', 'Jl Bagau', 'default.jpg', 1),
(50, 7, '1741720039', 'c3b42c9969a445f4fcb4c1d068bf0805', 'Rizki Priyansyah', 'Bandung', '1999-12-30', 'Laki-laki', '081212988078', 'Jl Bage', 'default.jpg', 1),
(51, 8, '1741720020', '86bae3f126ec2bad4f26ecc5ce6d1f21', 'M. Haidar', 'Bontang', '1999-01-11', 'Laki-laki', '081212345248', 'Jl Gunung Arjuna', 'default.jpg', 1),
(52, 8, '1741720021', '2da3efabedae36cbde607270e0f7b15e', 'M. Ichsan', 'Samarinda', '1999-02-21', 'Laki-laki', '081212345247', 'Jl Bogor', 'default.jpg', 1),
(53, 8, '1741720022', '909e098b86427f1a6e1f06c6c8eadf26', 'M. Titan', 'Balikpapan', '1999-03-13', 'Laki-laki', '081212342347', 'Jl Matahari', 'default.jpg', 1),
(54, 8, '1741720023', 'd6f7ce77e967e792efbdb9193896104d', 'Kasfianti Zulhaenah', 'Sangatta', '1999-05-12', 'Perempuan', '081124645678', 'Jl Rampal', 'default.jpg', 1),
(55, 8, '1741720024', 'aa7a89ab49ad26597e3879f5c95633b2', 'Khusnul Khotimah', 'Berau', '1999-03-17', 'Perempuan', '0812123444678', 'Jl Perisai', 'default.jpg', 1),
(56, 8, '1741720025', '1240e67e3555629c59e7e8c59ab96681', 'Ailsa Rahma', 'Palangkaraya', '1999-06-15', 'Perempuan', '081212348876', 'Jl Veteran', 'default.jpg', 1),
(57, 8, '1741720026', '8fd6e53608a903145c1e2a178b9de79a', 'Najunda Sari', 'Banjarmasin', '1999-04-07', 'Perempuan', '0812123452146', 'Jl Ahmad Yani', 'default.jpg', 1),
(58, 8, '1741720027', '2bf15631967d0955f93b185eb9c5acff', 'Alma Anisa', 'Martapura', '1999-07-03', 'Perempuan', '081212347631', 'Jl Persatuan', 'default.jpg', 1),
(59, 8, '1741720028', '218640e9c974750f37a7ee88b428189d', 'Fauzi Ahmad', 'Yogyakarta', '1999-08-02', 'Laki-laki', '081212556778', 'Jl L.A Sucipto', 'default.jpg', 1),
(60, 8, '1741720029', '0353a72d05f5ba16dde06aeb6f1bf5db', 'Agung Valerry', 'Bandung', '1999-12-09', 'Laki-laki', '081212789078', 'Jl Bungur', 'default.jpg', 1),
(61, 10, '1904601', 'c0e30caf92743060dd3784a263a1cc4e', 'Angga Sandhika', 'Sidoarjo', '2000-11-19', 'Laki-laki', '0842199082', 'Jl. Soekarno Hatta 20/C-4', 'default.jpg', 2),
(62, 10, '1904602', 'de973c39d8ed0a9f315abdc48daf3948', 'Bagas Tri Pitaka', 'Malang', '2000-01-10', 'Laki-laki', '0842154667', 'Jl. Pattimura 20/F-10', 'default.jpg', 2),
(63, 10, '1904603', '628af5cf7093f24fd30e3711fd6773c6', 'Belinda Sasmita', 'Malang', '2000-02-02', 'Perempuan', '0842143343', 'Jl. Soekarno Hatta 20/D-11', 'default.jpg', 2),
(64, 10, '1904604', 'a48cee1fe713242d341831b1387ad956', 'Bulqis Citra Mahayu', 'Probolinggo', '2000-04-21', 'Perempuan', '0842165553', 'Jl. Garuda 10/G', 'default.jpg', 2),
(65, 10, '1904605', '4e73c8ed9e6f337dece2505b30a452d3', 'Bella Nadira Putri', 'Surabaya', '2000-08-25', 'Perempuan', '0842153221', 'Jl. Agus Salim 5/C', 'default.jpg', 2),
(66, 10, '19079906', '824e1bb1f2884fe3f5886cc3f5bade47', 'Bianca Shania', 'Jember', '2000-03-19', 'Perempuan', '0821312355', 'Perum Joyogrand F/20', 'default.jpg', 2),
(67, 10, '19079907', '2933c62a2b83deed6e0f69572cd91899', 'Caroline Swastika', 'Surabaya', '2000-05-10', 'Perempuan', '082151512', 'Perum Cahaya Lestari B/11', 'default.jpg', 2),
(68, 10, '19079908', '2e7231859a9138e679037e47d0f1c07a', 'Cakra Aminoto', 'Surabaya', '2000-12-15', 'Laki-laki', '0853132215', 'Perum Lestari B/25', 'default.jpg', 2),
(69, 10, '19046020', '60453fdd004247f721f96ef3d1e727a7', 'Diko Risma', 'Pekalongan', '2000-02-20', 'Perempuan', '0856324234', 'Perum Cahaya Lestari B/20', 'default.jpg', 2),
(70, 10, '19079909', '4641b28693c311969a7a0c20beb719be', 'Dendian Wahyu', 'Gresik', '2000-02-15', 'Laki-laki', '08123124', 'NGanjuk', 'default.jpg', 2),
(71, 11, '19079910', '60453fdd004247f721f96ef3d1e727a7', 'Devina Risma', 'Pekalongan', '2000-02-20', 'Perempuan', '0856324234', 'Perum Cahaya Lestari B/20', 'default.jpg', 2),
(72, 11, '19046011', 'c0e30caf92743060dd3784a263a1cc4e', 'Aryo Sandhika', 'Sidoarjo', '2000-11-19', 'Laki-laki', '0842199082', 'Jl. Soekarno Hatta 20/C-4', 'default.jpg', 2),
(73, 11, '19046012', 'de973c39d8ed0a9f315abdc48daf3948', 'Bolda Tri Pitaka', 'Malang', '2000-01-10', 'Laki-laki', '0842154667', 'Jl. Pattimura 20/F-10', 'default.jpg', 2),
(74, 11, '19046013', '628af5cf7093f24fd30e3711fd6773c6', 'Bianca Sasmita', 'Malang', '2000-02-02', 'Perempuan', '0842143343', 'Jl. Soekarno Hatta 20/D-11', 'default.jpg', 2),
(75, 11, '19046014', 'a48cee1fe713242d341831b1387ad956', 'Bella Citra Mahayu', 'Probolinggo', '2000-04-21', 'Perempuan', '0842165553', 'Jl. Garuda 10/G', 'default.jpg', 2),
(76, 11, '19046015', '4e73c8ed9e6f337dece2505b30a452d3', 'Bella Nadira Putri', 'Surabaya', '2000-08-25', 'Perempuan', '0842153221', 'Jl. Agus Salim 5/C', 'default.jpg', 2),
(77, 11, '19046016', '824e1bb1f2884fe3f5886cc3f5bade47', 'Bhero Shania', 'Jember', '2000-03-19', 'Perempuan', '0821312355', 'Perum Joyogrand F/20', 'default.jpg', 2),
(78, 11, '19046017', '2933c62a2b83deed6e0f69572cd91899', 'Chantika Swastika', 'Surabaya', '2000-05-10', 'Perempuan', '082151512', 'Perum Cahaya Lestari B/11', 'default.jpg', 2),
(79, 11, '19046018', '2e7231859a9138e679037e47d0f1c07a', 'Cakra Sebastian', 'Surabaya', '2000-12-15', 'Laki-laki', '0853132215', 'Perum Lestari B/25', 'default.jpg', 2),
(80, 11, '19046019', '4641b28693c311969a7a0c20beb719be', 'Deri Wahyu', 'Gresik', '2000-05-11', 'Laki-laki', '08123123', 'Pejagan', 'default.jpg', 2),
(81, 13, '1741720151', '3224cac9362d3b3ed186a55dc327e553', 'Aditya Ramadhan', 'Bekasi Selatan', '1999-02-09', 'Laki-laki', '08569861111', 'Jalan Bunga Sekar No 15', 'default.jpg', 2),
(82, 13, '1741720152', '9067db70b86dddafa2f39389e5d0265d', 'Aldo Detrian', 'Jakarta Barat', '2000-03-19', 'Laki-laki', '08569862222', 'Jalan KebaratBaratan No B4', 'default.jpg', 2),
(83, 13, '1741720153', 'c296d642a09404604a530df5192c3992', 'Bayu Pramata', 'Bekasi Utara', '1998-12-25', 'Laki-laki', '08569863333', 'Jalan SilihBerganti No 14', 'default.jpg', 2),
(84, 13, '1741720154', 'b6132a4d307492411bf5379617ffbf4e', 'Cyntia Bella', 'Jakarta Timur', '2000-01-19', 'Perempuan', '08569864444', 'Jalan Priuk Keras No 2A', 'default.jpg', 2),
(85, 13, '1741720155', 'cf05531ed086f4fbb0afc9f2007af502', 'Dhea Putri Ayu', 'Tangerang Selatan', '1999-04-25', 'Perempuan', '08569865555', 'Jalan Keindahan No 3', 'default.jpg', 2),
(86, 13, '1741720156', '35a29b2d26580215e789deb942795ede', 'Endah Mega Putri', 'Bogor', '1999-07-16', 'Perempuan', '08569866666', 'Jalan Padepokan Blok C No 7', 'default.jpg', 2),
(87, 13, '1741720157', 'f273c4462e1ef42792bb98b5452a0de7', 'Fatimah Azzahra', 'Bekasi Selatan', '2000-09-11', 'Perempuan', '08569867777', 'Jalan Pekayon Blok A No 1', 'default.jpg', 2),
(88, 13, '1741720158', '2b75c30ebf1242b0dbed4b51616fafff', 'Handayani Sinaga', 'Jakarta Utara', '1999-02-18', 'Perempuan', '08569868888', 'Jalan Serangkai No 3', 'default.jpg', 2),
(89, 13, '1741720159', '1531084a4ade6e1dcb2ab171edc8b50e', 'Kresna Aditya Putranto', 'Bekasi Selatan', '1999-12-12', 'Laki-laki', '08569869999', 'Jalan Dareal No 2', 'default.jpg', 2),
(90, 13, '1741720160', 'b9064b63e8552b2f615d75ef0a4eb630', 'Muhammad Hidayat', 'Jakarta Pusat', '1999-09-25', 'Laki-laki', '08569861010101010', 'Jalan Ketapel Blok C No 3', 'default.jpg', 2),
(91, 14, '1741720161', '02a00929364af39821f515527287c4eb', 'Achamd Martin', 'Bekasi Utara', '1999-02-16', 'Laki-laki', '08569871111', 'Jalan Teratai No 15', 'default.jpg', 2),
(92, 14, '1741720162', '78ea7830ea4e7d825f66a33805dc3136', 'Bagus Cahaya', 'Bandung', '1999-03-19', 'Laki-laki', '08569872222', 'Jalan Khas No B4', 'default.jpg', 2),
(93, 14, '1741720163', '8103797fa21a3878342c3ea9fbc777c0', 'Badrul Munir', 'Bekasi Utara', '1998-12-25', 'Laki-laki', '08569873333', 'Jalan Cerah No C7', 'default.jpg', 2),
(94, 14, '1741720164', 'c80dc4daf7772cb82d9a9745dadf58e6', 'Dinda Putri', 'Jakarta Timur', '2000-01-19', 'Perempuan', '08569874444', 'Jalan Ramah No 8', 'default.jpg', 2),
(95, 14, '1741720165', '6bdbadcd01f5ad3ef28f054476169c4e', 'Faris Irfan', 'Jogja', '1999-04-25', 'Laki-laki', '08569875555', 'Jalan Istimewa No 3', 'default.jpg', 2),
(96, 14, '1741720166', '0d58ff4efd47be4b2b5bb5fb5d6a0ece', 'Fathan Putra', 'Jakarta Timur', '1999-07-16', 'Laki-laki', '08569876666', 'Jalan Keputraan No 10', 'default.jpg', 2),
(97, 14, '1741720167', '9ce52b94c33bfde7437b3fa5faa25ede', 'Guntur Halilintar', 'Jakarta Selatan', '1998-02-11', 'Laki-laki', '08569877777', 'Jalan Kekayaan Blok C No 2', 'default.jpg', 2),
(98, 14, '1741720168', '49d8a997cd82ce0b64133ec02a707a3b', 'Lestari Ayyu', 'Jakarta Utara', '1999-02-26', 'Perempuan', '08569878888', 'Jalan Cantik No D3', 'default.jpg', 2),
(99, 14, '1741720169', '54b4406cd5afb20249efe42e62789dcc', 'Rizal Muzaffar', 'Bekasi Selatan', '1999-05-09', 'Laki-laki', '08569879999', 'Jalan Dareal No 2', 'default.jpg', 2),
(100, 14, '1741720170', '6a449a985f2d2e323688aa4fbd8d4bb6', 'Zahra Ajeng', 'Bekasi Selatan', '1999-02-25', 'Perempuan', '08569871010101010', 'Jalan Pondok Indah C No 3', 'default.jpg', 2),
(101, 15, '1903001', '2b84d32ed7d1b83f2c01762b3d507a50', 'Lisa Aini Bonita', 'Malang', '1998-11-01', 'Perempuan', '082146233221', 'Jl Vision', 'default.jpg', 2),
(102, 15, '1903002', '82d6a0ae5886aa3cd968b18a69b617cd', 'Bagas Ayu Purnomo', 'Malang', '1998-11-09', 'Laki-laki', '087132614221', 'Jl Supratman', 'default.jpg', 2),
(103, 15, '1903003', '6f6c34697abf44455f84c7be42ced401', 'Budi Sudarsono ', 'Sumenep', '1999-12-28', 'Laki-laki', '085182233721', 'Jl Ketombe', 'default.jpg', 2),
(104, 15, '1903004', '24b3b407fe49f4a13043addd5be66bcf', 'I Putu Pitaloka', 'Denpasar', '2000-02-19', 'Laki-laki', '081130291328', 'Jl Laut Biru', 'default.jpg', 2),
(105, 15, '1903005', '749a977a1e6984dabae0237eda887429', 'Dono Kasino Indro', 'Jakarta', '1997-01-01', 'Laki-laki', '089127964223', 'Jl Warkop Dki', 'default.jpg', 2),
(106, 15, '1903006', '28e00b2b4c0ad069ae38c3d114b4632a', 'Elly Mihara', 'Gresik', '1998-05-19', 'Perempuan', '082138574182', 'Jl Bajol', 'default.jpg', 2),
(107, 15, '1903007', 'fe732d92c5bd82bb533f5b3b53ef9094', 'Elisa Lolita', 'Kediri', '1998-01-23', 'Perempuan', '082272296292', 'Jl Inginkusapa', 'default.jpg', 2),
(108, 15, '1903008', '9d5ebe2b166cacae16a31a41e54930b8', 'Emanuel Adebayor', 'Jayapura', '1998-06-12', 'Laki-laki', '082332253321', 'Jl Cemburu Buta', 'default.jpg', 2),
(109, 15, '1903009', 'f076974a3cfc91a88e0584c2751493bc', 'Hidayat Noval', 'Malang', '1998-01-31', 'Laki-laki', '081162829231', 'Jl Bintara', 'default.jpg', 2),
(110, 15, '1903010', '73a263b1bb78c0672fc72161cf098657', 'Hilal Arifin', 'Malang', '1999-03-01', 'Laki-laki', '082132504233', 'Jl Bunga Mawar', 'default.jpg', 2),
(111, 16, '1903111', '082b5d2bf8834675f06e53a1f37edfc9', 'Almilinda Islami', 'Pamekasan', '1998-12-31', 'Perempuan', '083141597191', 'Jl Kunang-Kunang', 'default.jpg', 2),
(112, 16, '1903112', 'ef480c6d06a801cc98303385af7483cf', 'Aska Ardison', 'Jambi', '1998-12-29', 'Laki-laki', '085780417381', 'Jl Thanos', 'default.jpg', 2),
(113, 16, '1903113', '58ccc721464f588f99ba227c17c4de50', 'Citra Indri', 'Lamongan', '1999-11-11', 'Perempuan', '082162882123', 'Jl Akasi', 'default.jpg', 2),
(114, 16, '1903114', '1508e6fdeca26ad93589cff09b2d17db', 'Darmatho Leandro', 'Malang', '1999-12-19', 'Laki-laki', '0822324339269', 'Jl Kuning Sperma', 'default.jpg', 2),
(115, 16, '1903115', '2a89823bfba73a073e7b1a9613bd321d', 'Desi Karmila', 'Solo', '1999-09-10', 'Perempuan', '082127361199', 'Jl Pisang Kipas', 'default.jpg', 2),
(116, 16, '1903116', '777d27ed130135df0be4cedf00367c3d', 'Jihan Audy', 'Surabaya', '1998-02-28', 'Perempuan', '083457294181', 'Jl Sisimangaraja', 'default.jpg', 2),
(117, 16, '1903117', '4fec2f0d591aeb468bd67f7b3c0ba7a4', 'Karina Wahyuni', 'Blitar', '1998-11-02', 'Perempuan', '082132098290', 'Jl Saktijaya', 'default.jpg', 2),
(118, 16, '1903118', '54b38d4f254373a66eee2e16153663e7', 'Sholeh Abdi Jaya', 'Sampang', '1998-07-17', 'Laki-laki', '083151783029', 'Jl Bunga Andong', 'default.jpg', 2),
(119, 16, '1903119', '194fec71ca5594baf3e1b1eb153ee856', 'Sholihin Putra', 'Malang', '1998-05-13', 'Laki-laki', '082132292987', 'Jl Singaraja', 'default.jpg', 2),
(120, 16, '1903120', 'c8075f324a1b8b59cf01108d6d81b031', 'Yessi Amdini', 'Malang', '1999-08-18', 'Perempuan', '082432200092', 'Jl Bunga Melati', 'default.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `status` enum('Lunas','Belum Lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `id_siswa`, `id_kelas`, `id_bulan`, `id_semester`, `id_tahun_ajaran`, `status`) VALUES
(2, 2, 1, 4, 2, 1, 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajaran`) VALUES
(1, '2019'),
(2, '2020'),
(3, '2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`),
  ADD KEY `FK_BULAN_SEM` (`id_semester`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `FK_JADWAL` (`id_jurusan`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `FK_KELAS_JURUSAN` (`id_jurusan`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `FK_NILAI_GURU` (`id_guru`),
  ADD KEY `FK_NILAI_KELAS` (`id_kelas`),
  ADD KEY `FK_NILAI_SISWA` (`id_siswa`),
  ADD KEY `FK_NILAI_SEMESTER` (`id_semester`),
  ADD KEY `FK_NILAI_MAPEL` (`id_mapel`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `FK_KELAS_SISWA` (`id_kelas`),
  ADD KEY `FK_JURUSAN_SISWA` (`id_jurusan`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD KEY `FK_BULAN_SPP` (`id_bulan`),
  ADD KEY `FK_SISWA_SPP` (`id_siswa`),
  ADD KEY `FK_TAHUN_AJARAN_SPP` (`id_tahun_ajaran`),
  ADD KEY `FK_SEMESTER_SPP` (`id_semester`),
  ADD KEY `FK_KELAS_SPP` (`id_kelas`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bulan`
--
ALTER TABLE `bulan`
  ADD CONSTRAINT `FK_BULAN_SEM` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `FK_JADWAL` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `FK_KELAS_JURUSAN` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `FK_NILAI_GURU` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_NILAI_KELAS` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_NILAI_MAPEL` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_NILAI_SEMESTER` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_NILAI_SISWA` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `FK_JURUSAN_SISWA` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_KELAS_SISWA` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spp`
--
ALTER TABLE `spp`
  ADD CONSTRAINT `FK_BULAN_SPP` FOREIGN KEY (`id_bulan`) REFERENCES `bulan` (`id_bulan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_KELAS_SPP` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SEMESTER_SPP` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SISWA_SPP` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TAHUN_AJARAN_SPP` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `toko_barokah_kantor`
--
CREATE DATABASE IF NOT EXISTS `toko_barokah_kantor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `toko_barokah_kantor`;

-- --------------------------------------------------------

--
-- Table structure for table `manajemen`
--

CREATE TABLE `manajemen` (
  `user_id` varchar(20) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manajemen`
--

INSERT INTO `manajemen` (`user_id`, `alamat`, `gender`, `tgl_lahir`) VALUES
('ADI', 'Mojolangu', 'L', '1998-01-24'),
('IDA', 'Mojolangoo', 'P', '1999-02-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manajemen`
--
ALTER TABLE `manajemen`
  ADD PRIMARY KEY (`user_id`);
--
-- Database: `trash`
--
CREATE DATABASE IF NOT EXISTS `trash` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `trash`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_21_020701_create_transaksi_table', 1),
(5, '2019_11_21_132057_create_sampah_table', 1),
(6, '2019_11_23_151344_add_picture_to_transaksi_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sampah`
--

CREATE TABLE `sampah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sampah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sampah`
--

INSERT INTO `sampah` (`id`, `nama_sampah`, `qty`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'botol', 12, 20000, '2019-11-24 20:16:04', '2019-11-24 20:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_pembeli` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sampah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `jumlah_sampah` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('SELESAI','PENDING','EXPIRED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `tgl_transaksi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_expired` datetime DEFAULT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `email_pembeli`, `id_sampah`, `total_harga`, `jumlah_sampah`, `token`, `status`, `tgl_transaksi`, `tgl_expired`, `picture`) VALUES
(1, '', 1, 2500000, 3, '1234567sad', 'PENDING', '2019-11-25 10:17:11', '2019-11-28 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'khosy', 'khosy@gmail.com', NULL, '$2y$10$lObff2kuvQZiYGjrNCJhKucLtUY2Bk41gkDX2smBsEP/K2WtCgxGW', NULL, '2019-11-24 20:15:21', '2019-11-24 20:15:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sampah`
--
ALTER TABLE `sampah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `travel`
--
CREATE DATABASE IF NOT EXISTS `travel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `travel`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `password`, `nomor_hp`, `jenis_kelamin`, `foto`) VALUES
(1, 'firman', 'firman@gmail.com', '123', '086372283992', 'L', ''),
(2, 'citra', 'citra@gmail.com', '123', '0883628394872', 'P', '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_penginapan`
--

CREATE TABLE `jenis_penginapan` (
  `id_peng` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_penginapan`
--

INSERT INTO `jenis_penginapan` (`id_peng`, `nama`) VALUES
(1, 'HOTEL'),
(2, 'VILLA');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_transportasi`
--

CREATE TABLE `jenis_transportasi` (
  `id_trans` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_transportasi`
--

INSERT INTO `jenis_transportasi` (`id_trans`, `nama`) VALUES
(1, 'Pesawat'),
(2, 'Bis');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(255) NOT NULL
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
  `hari` int(11) NOT NULL,
  `id_jenis_transportasi` int(11) NOT NULL,
  `keberangkatan` int(11) NOT NULL,
  `tujuan` int(11) NOT NULL,
  `id_penginapan` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `hari`, `id_jenis_transportasi`, `keberangkatan`, `tujuan`, `id_penginapan`, `id_wisata`, `harga`) VALUES
(1, 5, 2, 2, 1, 2, 1, 2500000),
(2, 9, 1, 1, 2, 2, 2, 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `id_penginapan` int(11) NOT NULL,
  `id_jenis_penginapan` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `nama_penginapan` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id_penginapan`, `id_jenis_penginapan`, `id_kota`, `nama_penginapan`, `harga`, `foto`) VALUES
(1, 1, 2, 'Swiss Bell in Hotel', 1000000, 'default.jpg'),
(2, 2, 1, 'Villa Agrowisata', 400000, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id_super_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id_super_admin`, `nama`, `email`, `password`, `nomor_hp`, `jenis_kelamin`, `foto`) VALUES
(1, 'faza', 'faza@gmail.com', '123', '085287736229', 'P', ''),
(2, 'dzikri', 'dzikri@gmail.com', '123', '0883628394872', 'L', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `hari` int(11) DEFAULT NULL,
  `id_penginapan` int(11) DEFAULT NULL,
  `id_transportasi` int(11) DEFAULT NULL,
  `id_wisata` int(11) DEFAULT NULL,
  `id_keberangkatan` int(11) DEFAULT NULL,
  `id_tujuan` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_paket`, `hari`, `id_penginapan`, `id_transportasi`, `id_wisata`, `id_keberangkatan`, `id_tujuan`, `total_harga`, `id_admin`) VALUES
(3, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 2500000, 1),
(4, 1, NULL, 5, 1, 2, 2, 1, 2, 1500000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transportasi`
--

CREATE TABLE `transportasi` (
  `id_transportasi` int(11) NOT NULL,
  `id_jenis_transportasi` int(11) NOT NULL,
  `keberangkatan` int(11) NOT NULL,
  `tujuan` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportasi`
--

INSERT INTO `transportasi` (`id_transportasi`, `id_jenis_transportasi`, `keberangkatan`, `tujuan`, `harga`) VALUES
(4, 2, 2, 1, 1113);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `nomor_hp`, `jenis_kelamin`, `foto`) VALUES
(1, 'khosy', 'khosy@gmail', '123', '085287736229', 'L', ''),
(2, 'Akmal', 'akmal@gmail.com', '123', '083682263878', 'P', ''),
(3, '1234', '123', '202cb962ac59075b964b07152d234b70', '123', 'L', '1234.jpg'),
(4, '1234', '123', '202cb962ac59075b964b07152d234b70', '123', 'L', '1234.jpg'),
(5, '1234', '123', '202cb962ac59075b964b07152d234b70', '123', 'L', '1234.jpg'),
(6, 'mamal', 'akmalkhosy@gmail.com', '202cb962ac59075b964b07152d234b70', 's', 'L', 'mamal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `id_kota`, `harga`) VALUES
(1, 'Paralayang', 1, 40000),
(2, 'Kebun Binatang Surabaya', 2, 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jenis_penginapan`
--
ALTER TABLE `jenis_penginapan`
  ADD PRIMARY KEY (`id_peng`);

--
-- Indexes for table `jenis_transportasi`
--
ALTER TABLE `jenis_transportasi`
  ADD PRIMARY KEY (`id_trans`);

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
  ADD KEY `FK_PAKET_PENG` (`id_penginapan`),
  ADD KEY `FK_PAKET_WST` (`id_wisata`),
  ADD KEY `FK_PAKET_BERANGKAT` (`keberangkatan`),
  ADD KEY `FK_PAKET_TUJUAN` (`tujuan`),
  ADD KEY `FK_PAKET_TRNSPRT` (`id_jenis_transportasi`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id_penginapan`),
  ADD KEY `FK_JENIS_PENG` (`id_jenis_penginapan`),
  ADD KEY `FK_KOTA_PENG` (`id_kota`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id_super_admin`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `FK_TRANSAKSI_KEBERANGKATAN` (`id_keberangkatan`),
  ADD KEY `FK_TRANSAKSI_TUJU` (`id_tujuan`),
  ADD KEY `FK_TRANSAKSI_PENG` (`id_penginapan`),
  ADD KEY `FK_TRANSAKSI_WST` (`id_wisata`),
  ADD KEY `FK_TRANSAKSI_PAKET` (`id_paket`),
  ADD KEY `FK_TRANSAKSI_USER` (`id_user`),
  ADD KEY `FK_TRANSAKSI_TRANSPORT` (`id_transportasi`),
  ADD KEY `FK_TRANSAKSI_ADMIN` (`id_admin`);

--
-- Indexes for table `transportasi`
--
ALTER TABLE `transportasi`
  ADD PRIMARY KEY (`id_transportasi`),
  ADD KEY `FK_JENIS_TRANS` (`id_jenis_transportasi`),
  ADD KEY `FK_KEBERANGKATAN` (`keberangkatan`),
  ADD KEY `FK_TUJUAN` (`tujuan`);

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
  ADD KEY `FK_KOTA_WST` (`id_kota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_penginapan`
--
ALTER TABLE `jenis_penginapan`
  MODIFY `id_peng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_transportasi`
--
ALTER TABLE `jenis_transportasi`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id_penginapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id_super_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transportasi`
--
ALTER TABLE `transportasi`
  MODIFY `id_transportasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `FK_PAKET_BERANGKAT` FOREIGN KEY (`keberangkatan`) REFERENCES `kota` (`id_kota`),
  ADD CONSTRAINT `FK_PAKET_PENG` FOREIGN KEY (`id_penginapan`) REFERENCES `penginapan` (`id_penginapan`),
  ADD CONSTRAINT `FK_PAKET_TRNSPRT` FOREIGN KEY (`id_jenis_transportasi`) REFERENCES `jenis_transportasi` (`id_trans`),
  ADD CONSTRAINT `FK_PAKET_TUJUAN` FOREIGN KEY (`tujuan`) REFERENCES `kota` (`id_kota`),
  ADD CONSTRAINT `FK_PAKET_WST` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`);

--
-- Constraints for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD CONSTRAINT `FK_JENIS_PENG` FOREIGN KEY (`id_jenis_penginapan`) REFERENCES `jenis_penginapan` (`id_peng`),
  ADD CONSTRAINT `FK_KOTA_PENG` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_TRANSAKSI_ADMIN` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `FK_TRANSAKSI_KEBERANGKATAN` FOREIGN KEY (`id_keberangkatan`) REFERENCES `kota` (`id_kota`),
  ADD CONSTRAINT `FK_TRANSAKSI_PAKET` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`),
  ADD CONSTRAINT `FK_TRANSAKSI_PENG` FOREIGN KEY (`id_penginapan`) REFERENCES `penginapan` (`id_penginapan`),
  ADD CONSTRAINT `FK_TRANSAKSI_TRANSPORT` FOREIGN KEY (`id_transportasi`) REFERENCES `jenis_transportasi` (`id_trans`),
  ADD CONSTRAINT `FK_TRANSAKSI_TUJU` FOREIGN KEY (`id_tujuan`) REFERENCES `kota` (`id_kota`),
  ADD CONSTRAINT `FK_TRANSAKSI_USER` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `FK_TRANSAKSI_WST` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`);

--
-- Constraints for table `transportasi`
--
ALTER TABLE `transportasi`
  ADD CONSTRAINT `FK_JENIS_TRANS` FOREIGN KEY (`id_jenis_transportasi`) REFERENCES `jenis_transportasi` (`id_trans`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_KEBERANGKATAN` FOREIGN KEY (`keberangkatan`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TUJUAN` FOREIGN KEY (`tujuan`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `FK_KOTA_WST` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`);
--
-- Database: `tubes`
--
CREATE DATABASE IF NOT EXISTS `tubes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tubes`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `no_hp`, `password`, `gender`) VALUES
(5, 'admin', '132810', 'admin', 'Laki-Laki'),
(6, 'khosy', '314112414', 'khosy', 'Laki-Laki'),
(9, 'akmal', '342242', 'akmal', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `stok`, `gambar`, `harga`) VALUES
(1, 'Kasur 1', 3, 'images/kasur 2.jpg', 3000000),
(2, 'Kasur 2', 9, 'images/kasur 1.jpg', 5000000),
(3, 'Kasur 3', 8, 'images/kasur 3.jpg', 3000000),
(4, 'khosy', 5, 'images/kasur 1.jpg', 30000),
(5, 'kassur 5', 8, 'images/kasur 3.jpg', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kat_lemari`
--

CREATE TABLE `kat_lemari` (
  `id` int(11) NOT NULL,
  `nama` varchar(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_lemari`
--

INSERT INTO `kat_lemari` (`id`, `nama`, `harga`, `stok`, `gambar`) VALUES
(1, 'Lemari 1', 30000, 4, 'images/kasur 3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kat_meja`
--

CREATE TABLE `kat_meja` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kat_rak`
--

CREATE TABLE `kat_rak` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_user`, `tanggal_pembelian`, `total`) VALUES
(15, 21, '2018-12-18', 11000000),
(16, 21, '2018-12-18', 3000000),
(20, 22, '2018-12-18', 20000000),
(21, 22, '2018-12-18', 8000000),
(22, 22, '2018-12-18', 14000000),
(23, 22, '2018-12-20', 11000000),
(24, 23, '2018-12-27', 11000000),
(25, 21, '2019-10-10', 11000000),
(26, 21, '2019-10-10', 6000000),
(27, 21, '2019-10-29', 9000000),
(28, 22, '2019-11-25', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `gender`, `email`, `no_hp`, `password`) VALUES
(21, 'khosy', 'Laki-Laki', 'khosy@gmail.com', '085250036553', 'khosy'),
(22, 'Akmal', 'Laki-Laki', 'akmal@gmail.com', '084124781238', 'akmal'),
(23, 'syaid abdulrahman', 'Laki-Laki', 'syaid.ar@gmail.com', '082370003567', 'juraganmebel17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kat_lemari`
--
ALTER TABLE `kat_lemari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kat_meja`
--
ALTER TABLE `kat_meja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kat_rak`
--
ALTER TABLE `kat_rak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kat_lemari`
--
ALTER TABLE `kat_lemari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kat_meja`
--
ALTER TABLE `kat_meja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kat_rak`
--
ALTER TABLE `kat_rak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

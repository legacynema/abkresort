-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 04:55 AM
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
-- Database: `travel`
--

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
  `hari` int(11) NOT NULL,
  `nama_penginapan` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id_penginapan`, `id_jenis_penginapan`, `id_kota`, `hari`, `nama_penginapan`, `harga`) VALUES
(1, 1, 2, 1, 'Swiss Bell in Hotel', 1000000),
(2, 2, 1, 2, 'Villa Agrowisata', 400000);

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
(1, 1, 1, 2, 700000),
(2, 2, 2, 1, 100000);

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
(2, 'Akmal', 'akmal@gmail.com', '123', '083682263878', 'P', '');

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
  ADD KEY `FK_TUJUAN` (`tujuan`),
  ADD KEY `FK_KEBERANGKATAN` (`keberangkatan`);

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
  MODIFY `id_transportasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `FK_JENIS_TRANS` FOREIGN KEY (`id_jenis_transportasi`) REFERENCES `jenis_transportasi` (`id_trans`),
  ADD CONSTRAINT `FK_KEBERANGKATAN` FOREIGN KEY (`keberangkatan`) REFERENCES `kota` (`id_kota`),
  ADD CONSTRAINT `FK_TUJUAN` FOREIGN KEY (`tujuan`) REFERENCES `kota` (`id_kota`);

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `FK_KOTA_WST` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

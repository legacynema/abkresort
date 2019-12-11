-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 04:54 AM
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
(1, 1, 'Swiss Bellin Hotel', 0, 1000000, 'default.jpg'),
(4, 2, 'asdsadadsadsad', 12, 1000000, 'asdsadadsadsad.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id_penginapan`),
  ADD KEY `FK_KOTA_PENGINAPAN` (`id_kota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id_penginapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD CONSTRAINT `FK_KOTA_PENGINAPAN` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

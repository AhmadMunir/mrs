-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2019 at 08:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_detail_stok`
--

CREATE TABLE `tabel_detail_stok` (
  `id_detail_stok` int(2) NOT NULL,
  `id_barang` varchar(5) NOT NULL,
  `size` varchar(3) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_detail_stok`
--

INSERT INTO `tabel_detail_stok` (`id_detail_stok`, `id_barang`, `size`, `deskripsi`, `jumlah_stok`) VALUES
(9, 'I9qfM', '1', '1', 4),
(10, 'Hl025', '38', '-', 19),
(11, 'Hl025', '39', '-', 2),
(12, 'Hl025', '40', '-', 8);

--
-- Triggers `tabel_detail_stok`
--
DELIMITER $$
CREATE TRIGGER `stok_barang` AFTER INSERT ON `tabel_detail_stok` FOR EACH ROW UPDATE tabel_barang
SET stok = (SELECT SUM(jumlah_stok) FROM tabel_detail_stok WHERE id_barang = new.id_barang)
WHERE id_barang = new.id_barang
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `stok_barang_2` AFTER UPDATE ON `tabel_detail_stok` FOR EACH ROW UPDATE tabel_barang
SET stok = (SELECT SUM(jumlah_stok) FROM tabel_detail_stok WHERE id_barang = new.id_barang)
WHERE id_barang = new.id_barang
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_detail_stok`
--
ALTER TABLE `tabel_detail_stok`
  ADD PRIMARY KEY (`id_detail_stok`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_detail_stok`
--
ALTER TABLE `tabel_detail_stok`
  MODIFY `id_detail_stok` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_detail_stok`
--
ALTER TABLE `tabel_detail_stok`
  ADD CONSTRAINT `tabel_detail_stok_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tabel_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

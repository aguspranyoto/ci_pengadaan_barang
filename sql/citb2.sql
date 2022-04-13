-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 02:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `cover` varchar(222) NOT NULL,
  `kategori_barang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `stok`, `cover`, `kategori_barang_id`) VALUES
(1, 'Mimi White AHA', 23, '80d15aab824b87bbae2a5b7a6cc12f22.jpg', 2),
(2, 'Liptint Implora - Vampire Blood', 155, 'faa67580d27cb37de39f10b3c45b726f.png', 1),
(3, 'Ombre Combo Lipcream Implora 01 + Liptint Implora 01', 45, '366f1b2a5ff0c3671293ecdfb1e7f36c.png', 1),
(4, 'Ombre Combo Hanasui Brown Sugar + Liptint Implora 01', 30, '788212525ff79dc42750211131eb25d4.png', 1),
(5, 'Ombre Combo Hanasui Salted Caramel + Liptint Implora 01', 28, 'ded4feb5df447ebb43840dbd8045775c.png', 1),
(6, 'Ombre Combo Lip Velvet Honest + Liptint Implora 01', 72, 'e067022be6074fc7134bf7ee496b5349.png', 1),
(7, 'Gua Sha Batu Giok', 177, '4dfbb71e3ac9758aee257a188b35333c.JPG', 3),
(8, 'Sabun Arab Pyary', 110, '57ec61112195bedb011acca6d521fa7d.JPG', 3),
(9, 'Serum Implora - Luminous Brightening Serum', 150, '6ae099dc8785bd726836af073c9ca0ea.JPG', 2),
(10, 'Serum Implora - Acne Serum', 70, '00029a4f68768b9c38cbae85e9286f7f.JPG', 2),
(11, 'Serum Implora - Midnight Serum', 80, 'f1e441c50a380eced76fbbab0d42f7dc.JPG', 2),
(12, 'Serum Implora - Peeling Serum', 90, '29b050138b934e7264d1e0b163ead07a.JPG', 2),
(13, 'Pixy - 01. Natural Beige', 120, 'faaec99cfa0778f5a82eed5fb6805fb1.JPG', 6),
(14, 'Pixy - 02. Sand Beige', 130, 'd339c2afc6df73ae379aed66e13a44c5.JPG', 6),
(15, 'Pixy - 03. Cream Beige', 140, 'db2d232daa660e1a00dd50235c628368.JPG', 6);

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_barang_keluar` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `barang_id` int(10) NOT NULL,
  `jumlah_keluar` int(10) NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barang_keluar`, `user_id`, `barang_id`, `jumlah_keluar`, `tanggal_keluar`) VALUES
(17, 16, 6, 12, '2021-12-27'),
(18, 16, 1, 17, '2021-12-27'),
(19, 16, 1, 170, '2021-12-28'),
(20, 16, 5, 12, '2021-12-28'),
(21, 16, 7, 23, '2021-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_barang_masuk` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `barang_id` int(10) NOT NULL,
  `jumlah_masuk` int(10) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_barang_masuk`, `user_id`, `barang_id`, `jumlah_masuk`, `tanggal_masuk`) VALUES
(19, 16, 2, 10, '2021-12-27'),
(20, 16, 3, 25, '2021-12-27'),
(21, 16, 2, 23, '2021-12-27'),
(22, 16, 6, 34, '2021-12-28'),
(23, 16, 1, 27, '2021-12-16'),
(24, 16, 2, 0, '2021-12-16'),
(25, 16, 2, 112, '2021-12-13'),
(26, 16, 7, 100, '2021-12-01'),
(27, 16, 1, 123, '2021-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id_kategori` int(11) NOT NULL,
  `kategori_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_barang`
--

INSERT INTO `kategori_barang` (`id_kategori`, `kategori_barang`) VALUES
(1, 'Lipstik'),
(2, 'Serum'),
(3, 'Sabun'),
(6, 'Concealer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(16, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(17, 'agus', 'fdf169558242ee051cca1479770ebac3', 'Agus Pranyoto'),
(18, 'dioo', '6c51b56ac46669adfc9588f1cc932815', 'Agung Dio Asbhi'),
(19, 'tari', 'f024197cc16a7c1eda2e4c677616051d', 'Lestari Kurnia Ningsih');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `kategori_barang_id` (`kategori_barang_id`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_barang_keluar`),
  ADD KEY `barang_id` (`barang_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`),
  ADD KEY `barang_id` (`barang_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_barang_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_barang_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori_barang_id`) REFERENCES `kategori_barang` (`id_kategori`);

--
-- Constraints for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD CONSTRAINT `barang_keluar_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `barang_keluar_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `barang_masuk_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

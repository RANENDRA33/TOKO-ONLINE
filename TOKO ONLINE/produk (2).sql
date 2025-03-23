-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 06:53 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `produk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_produk`
--

CREATE TABLE `tabel_produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_produk`
--

INSERT INTO `tabel_produk` (`id`, `nama_produk`, `harga`, `jumlah`, `tanggal`, `deskripsi`, `gambar`) VALUES
(6, 'Kerudung Innova', '65000', 50, '2021-11-06', 'Kerudung sekolah dengan variasi pita serut terbuka sebagai aksen.', 'IMG-20211106-WA0002.jpg'),
(7, 'Kerudung Kalia', '55000', 50, '2021-11-06', 'Kerudung sekolah dengan variasi pita mati bagian depan sebagai aksen.', 'IMG-20211106-WA0004.jpg'),
(8, 'Gamis Muslim Wanita Kumima', '150000', 50, '2021-11-06', 'Dresslim woolpeach print, mengusung motif tartan atau plaid, disajikan dengan material yang lebih ringan.', 'IMG-20211106-WA0007.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(6, 'Sri Eni', 'Eni', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Sri Eni', 'Eni', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'Sri Eni', 'Eni', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

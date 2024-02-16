-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 04:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko-caroline`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` enum('makanan','minuman') NOT NULL,
  `stok` int(10) UNSIGNED NOT NULL,
  `harga_beli` int(10) UNSIGNED NOT NULL,
  `harga_jual` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `kategori`, `stok`, `harga_beli`, `harga_jual`, `created_at`, `updated_at`) VALUES
(1, 'black forest', 'makanan', 10, 8000, 10000, '2024-01-25 01:10:40', '2024-02-15 16:54:49'),
(2, 'cappuccino', 'minuman', 10, 5000, 10000, '2024-01-25 01:10:40', '2024-02-15 16:55:04'),
(3, 'chesse cakes', 'makanan', 5, 10000, 15000, '2024-01-25 01:10:40', '2024-02-15 16:55:16'),
(4, 'irish coffe', 'minuman', 10, 10000, 15000, '2024-01-25 01:10:40', '2024-02-15 16:55:27'),
(5, 'vancho', 'minuman', 5, 20000, 25000, '2024-01-25 01:10:40', '2024-02-15 16:55:36'),
(8, 'red velvet', 'makanan', 10, 10000, 15000, '2024-02-15 17:04:48', NULL),
(9, 'fruit cakes', 'makanan', 12, 12000, 20000, '2024-02-15 17:04:48', NULL),
(10, 'matcha cakes', 'makanan', 10, 15000, 20000, '2024-02-15 17:04:48', NULL),
(11, 'dalgona coffe', 'minuman', 20, 8000, 10000, '2024-02-15 17:04:48', NULL),
(12, 'Gooday', 'minuman', 15, 5000, 10000, '2024-02-15 17:04:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_barang` int(10) UNSIGNED NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `total_harga` int(10) UNSIGNED NOT NULL,
  `id_staff` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `id_barang`, `jumlah`, `total_harga`, `id_staff`, `created_at`, `updated_at`) VALUES
(1, 3, 10, 100000, 1, '2024-01-25 01:20:04', NULL),
(2, 2, 20, 100000, 2, '2024-01-25 01:20:04', NULL),
(3, 4, 5, 50000, 5, '2024-01-25 01:20:04', NULL),
(4, 5, 10, 200000, 4, '2024-01-25 01:20:04', '2024-01-25 01:36:15'),
(6, 4, 10, 100000, 2, '2024-01-31 13:53:07', NULL),
(7, 5, 4, 80000, 3, '2024-01-31 13:53:52', NULL),
(8, 1, 2, 16000, 5, '2024-01-31 13:54:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_barang` int(10) UNSIGNED NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `total_harga` int(10) UNSIGNED NOT NULL,
  `id_staff` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `id_barang`, `jumlah`, `total_harga`, `id_staff`, `created_at`, `updated_at`) VALUES
(1, 3, 5, 75000, 1, '2024-01-25 01:23:03', '2024-01-26 03:57:26'),
(2, 2, 5, 50000, 2, '2024-01-25 01:23:03', '2024-01-26 03:56:55'),
(3, 4, 5, 75000, 5, '2024-01-25 01:23:03', '2024-01-26 03:58:13'),
(5, 5, 9, 225000, 4, '2024-01-25 01:23:03', '2024-01-26 03:58:54'),
(6, 2, 5, 50000, 2, '2024-01-31 13:18:52', NULL),
(7, 1, 2, 20000, 3, '2024-01-31 13:20:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','keuangan','logistik') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'cici', '$2a$12$iMJZjnl5ve4Kcxf97vXVMOz7dxv94C6hUWga8J1AwosdclyIGuJPy', 'logistik', '2024-01-25 01:07:04', NULL),
(2, 'nana', '$2a$12$nFxGZ7B2QJuBEQWjKcqXXOturxi.K31Lp.bp8fcKu6H6dMMJysIAy', 'admin', '2024-01-25 01:07:04', NULL),
(3, 'nini', '$2a$12$bKKLhL7sxsXjRioXiMRxm.x8oydLNGh89xnhRGjIsUh/iJ18s6mee', 'keuangan', '2024-01-25 01:07:04', NULL),
(4, 'coco', '$2y$10$0hTMDRP/nv51MPnbcbgw3.eFANgrUhUsE8V25XJKCtGlppZXywIZy', 'admin', '2024-01-25 01:07:04', '2024-01-26 01:10:17'),
(5, 'nene', '$2a$12$WbSLRWycU/I1FGOFYsEcrehrC/htvflUFudcLUj4cVoEshcsWLifC', 'logistik', '2024-01-25 01:07:04', NULL),
(6, 'sasa', '$2y$10$yiuMp1Uvvz7U4DKGleGwr.nsw54tFbnGLjb9kU77eQucXaSrmZtQy', 'admin', '2024-01-26 00:55:09', '2024-01-26 01:23:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_staff` (`id_staff`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_staff` (`id_staff`),
  ADD KEY `id_barang` (`id_barang`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_staff`) REFERENCES `user` (`id`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_staff`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

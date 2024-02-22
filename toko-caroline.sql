-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 06:14 PM
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
  `harga_jual` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `kategori`, `stok`, `harga_jual`, `created_at`, `updated_at`) VALUES
(1, 'Palem Merah', 'makanan', 10, 50000, '2024-01-25 01:10:40', '2024-02-22 04:11:01'),
(2, 'Lidah mertua', 'makanan', 10, 20000, '2024-01-25 01:10:40', '2024-02-22 04:10:56'),
(3, 'Monstera', 'makanan', 5, 100000, '2024-01-25 01:10:40', '2024-02-22 04:10:52'),
(4, 'Rombusa Mini', 'makanan', 10, 50000, '2024-01-25 01:10:40', '2024-02-22 04:11:12'),
(5, 'Lili Paris', 'makanan', 5, 30000, '2024-01-25 01:10:40', '2024-02-22 04:11:20'),
(8, 'Philodendron', 'minuman', 10, 75000, '2024-02-15 17:04:48', '2024-02-22 04:12:37'),
(9, 'Kuping gajah', 'minuman', 12, 125000, '2024-02-15 17:04:48', '2024-02-22 04:12:59'),
(10, 'Aglaonema', 'minuman', 10, 20000, '2024-02-15 17:04:48', '2024-02-22 04:01:23'),
(11, 'Suplir', 'minuman', 20, 55000, '2024-02-15 17:04:48', '2024-02-22 04:13:13'),
(12, 'Tanduk Rusa', 'minuman', 15, 140000, '2024-02-15 17:04:48', '2024-02-22 04:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `nomor_telepon`, `created_at`, `updated_at`) VALUES
(1, 'rose', ' Jl. Mawar Indah No. 123, Kota Bahagia', '081234567890', '2024-02-18 10:18:07', NULL),
(2, 'flower', 'Blok C2 No. 45, Desa Damai Sejahtera, Kota Harapan', '080987654321', '2024-02-18 10:18:07', NULL),
(3, 'lily', 'Apartemen Melati Tower 3A, Lantai 15, Jl. Kenanga No. 78, Kota Makmur', '083844334567', '2024-02-18 10:18:07', NULL),
(4, 'jasmine', 'Jl. Anggrek No. 101, Apartemen Harmoni, Jakarta Selatan', '085612345678', '2024-02-18 10:18:07', NULL),
(5, 'orchid ', 'Jalan Merpati No. 5, Surabaya', '087798765432', '2024-02-18 10:18:07', NULL),
(6, 'dahlia', 'Jl. Kenari No. 15, Denpasar', '089634567890', '2024-02-18 10:18:07', NULL);

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
  `id_pelanggan` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `id_barang`, `jumlah`, `total_harga`, `id_staff`, `id_pelanggan`, `created_at`, `updated_at`) VALUES
(1, 3, 5, 500000, 1, 6, '2024-02-20 04:11:19', '2024-02-22 04:19:14'),
(2, 2, 5, 100000, 2, 5, '2024-02-20 04:11:19', '2024-02-22 04:19:26'),
(3, 4, 5, 250000, 5, 4, '2024-02-20 04:11:19', '2024-02-22 04:19:33'),
(4, 5, 9, 270000, 4, 3, '2024-02-20 04:11:19', '2024-02-22 04:19:44'),
(5, 8, 5, 375000, 3, 2, '2024-02-20 04:11:19', '2024-02-22 04:19:52'),
(6, 9, 2, 250000, 2, 1, '2024-02-20 04:11:19', '2024-02-22 04:20:02');

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
(6, 'sasa', '$2y$10$yiuMp1Uvvz7U4DKGleGwr.nsw54tFbnGLjb9kU77eQucXaSrmZtQy', 'admin', '2024-01-26 00:55:09', '2024-01-26 01:23:04'),
(8, 'lala', '$2y$10$f7x9jusTMSfIXo4Iz7YtCuwiHyQv9LszK8h6zXuEIZn0neFFm0/dm', 'keuangan', '2024-02-17 16:02:28', NULL),
(9, 'tata', '$2y$10$ZACXau71hoi6KhUOkgo26upcFfHv819IJePrAQl7D1ZyLn.lL.FSq', 'admin', '2024-02-20 13:53:00', '2024-02-20 15:10:47');

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
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_staff` (`id_staff`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_staff`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `penjualan_ibfk_3` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

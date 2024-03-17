-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 09:02 PM
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
  `kategori` enum('tanaman hias','tanaman aromatik','tanaman herbal') NOT NULL,
  `stok` int(10) UNSIGNED NOT NULL,
  `harga` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `kategori`, `stok`, `harga`, `created_at`, `updated_at`) VALUES
(2, 'Lidah mertua', 'tanaman hias', 10, 20000, '2024-01-25 01:10:40', '2024-03-03 10:13:33'),
(3, 'Monstera', 'tanaman hias', 5, 100000, '2024-01-25 01:10:40', '2024-03-03 10:13:42'),
(4, 'Rombusa Mini', 'tanaman hias', 10, 50000, '2024-01-25 01:10:40', '2024-03-03 10:13:50'),
(5, 'Lili Paris', 'tanaman hias', 5, 30000, '2024-01-25 01:10:40', '2024-03-03 10:13:59'),
(8, 'Philodendron', 'tanaman hias', 10, 75000, '2024-02-15 17:04:48', '2024-03-03 10:14:05'),
(10, 'Aglaonema', 'tanaman hias', 10, 20000, '2024-02-15 17:04:48', '2024-03-03 10:14:41'),
(11, 'Suplir', 'tanaman hias', 20, 55000, '2024-02-15 17:04:48', '2024-03-03 10:14:53'),
(14, 'Mint', 'tanaman aromatik', 50, 35000, '2024-03-03 09:32:41', '2024-03-03 10:15:02'),
(15, 'Rosemary', 'tanaman aromatik', 20, 40000, '2024-03-03 10:22:39', NULL);

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
  `id_pelanggan` int(10) UNSIGNED NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `total_harga` int(10) UNSIGNED NOT NULL,
  `id_staff` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `id_barang`, `id_pelanggan`, `jumlah`, `total_harga`, `id_staff`, `created_at`, `updated_at`) VALUES
(1, 3, 6, 5, 500000, 1, '2024-03-10 07:12:00', NULL),
(2, 2, 5, 5, 100000, 2, '2024-03-10 07:12:00', NULL),
(3, 4, 4, 5, 250000, 5, '2024-03-10 07:12:00', NULL),
(4, 5, 3, 9, 270000, 4, '2024-03-10 07:12:00', NULL),
(5, 8, 2, 5, 375000, 3, '2024-03-10 07:12:00', NULL),
(6, 11, 1, 2, 110000, 2, '2024-03-10 07:12:00', '2024-03-10 07:13:35');

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
(2, 'nana', '$2a$12$UBmaRoTAND4gJPHMOwDxveUFzaMU9EVe4hyYwjvXr/BWDUePrgyn2', 'admin', '2024-01-25 01:07:04', '2024-02-24 04:13:44'),
(3, 'nini', '$2a$12$bKKLhL7sxsXjRioXiMRxm.x8oydLNGh89xnhRGjIsUh/iJ18s6mee', 'keuangan', '2024-01-25 01:07:04', NULL),
(4, 'coco', '$2y$10$bYq7uzQdPBd8f0n4qb6tGOuWL9u1VVt/wg8oA5exrOU9DtfI8pOJe', 'admin', '2024-01-25 01:07:04', '2024-03-17 14:27:20'),
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
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_staff` (`id_staff`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`),
  ADD CONSTRAINT `penjualan_ibfk_3` FOREIGN KEY (`id_staff`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

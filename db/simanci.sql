-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 11:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simanci`
--

-- --------------------------------------------------------

--
-- Table structure for table `his_key`
--

CREATE TABLE `his_key` (
  `id_hk` int(5) NOT NULL,
  `id_petugas` int(5) NOT NULL,
  `id_kunci` int(5) NOT NULL,
  `tgl_pjm` date NOT NULL,
  `tgl_kbl` date NOT NULL,
  `keterangan` text NOT NULL,
  `status` enum('pinjam','kembali') NOT NULL DEFAULT 'pinjam'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `his_key`
--

INSERT INTO `his_key` (`id_hk`, `id_petugas`, `id_kunci`, `tgl_pjm`, `tgl_kbl`, `keterangan`, `status`) VALUES
(1, 2, 1, '2020-12-09', '0000-00-00', 'pinjam dulu', 'pinjam');

-- --------------------------------------------------------

--
-- Table structure for table `kunci`
--

CREATE TABLE `kunci` (
  `id_kunci` int(5) NOT NULL,
  `id_ruang` int(5) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kunci`
--

INSERT INTO `kunci` (`id_kunci`, `id_ruang`, `kode`, `keterangan`) VALUES
(1, 1, 'R1G2', 'Kunci ruangan 1 pada gedung 1');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('admin','staff') NOT NULL DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', '$2y$10$qtV7KnOIcj9vO3wEzwsB2.EFMSTNXcYV4z.sCGHAOrt3jCcxmqj5a', 'admin'),
(2, 'staff', 'staff', '$2y$10$2vOTLoSRVgZbFem6ZC3L1uL/D2nBdmEhuYX.1FBkuAa./vWflBwFi', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(5) NOT NULL,
  `nm_ruang` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nm_ruang`, `keterangan`) VALUES
(1, 'Rung 1 Gedung 1', 'Lokasi Gedung 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `his_key`
--
ALTER TABLE `his_key`
  ADD PRIMARY KEY (`id_hk`);

--
-- Indexes for table `kunci`
--
ALTER TABLE `kunci`
  ADD PRIMARY KEY (`id_kunci`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `his_key`
--
ALTER TABLE `his_key`
  MODIFY `id_hk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kunci`
--
ALTER TABLE `kunci`
  MODIFY `id_kunci` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

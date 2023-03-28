-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 06:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiptb`
--

-- --------------------------------------------------------

--
-- Table structure for table `monev`
--

CREATE TABLE `monev` (
  `no` int(5) NOT NULL,
  `perguruants` varchar(50) NOT NULL,
  `badanPenyelenggara` varchar(50) NOT NULL,
  `alpddikti` varchar(100) NOT NULL,
  `aldirektori` varchar(100) NOT NULL,
  `almonev` varchar(100) NOT NULL,
  `hasilMonev` varchar(100) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `monev`
--

INSERT INTO `monev` (`no`, `perguruants`, `badanPenyelenggara`, `alpddikti`, `aldirektori`, `almonev`, `hasilMonev`, `id`) VALUES
(1, 'Politeknik Maritim Eka Subang', 'Yayasan Pendidikan Eka Utama', 'Kab. Subang - Prov. Jawa Barat - Indonesia', 'Kabupaten Subang - Jawa Barat', 'Jl. Kapten Hanafiah No.45, Kel.Karanganyar, Kec.Subang, Kab.Subang, Jawa Barat`, `1. Lahan Perpustak', '1. Lahan Perpustakaan seluas 32,5 M2 (belum memenuhi)\r\n2. Judul buku sebanyak 136 (belum memenuhi)\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pts`
--

CREATE TABLE `pts` (
  `id` int(5) NOT NULL,
  `kode` int(25) NOT NULL,
  `pt` varchar(100) NOT NULL,
  `progressTerakhir` varchar(150) NOT NULL,
  `tglProgressTerakhir` date NOT NULL,
  `deadline` date NOT NULL,
  `stat` varchar(50) NOT NULL,
  `perhitungan` int(10) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pts`
--

INSERT INTO `pts` (`id`, `kode`, `pt`, `progressTerakhir`, `tglProgressTerakhir`, `deadline`, `stat`, `perhitungan`, `pic`) VALUES
(1, 43258, 'Sekolah Tinggi Ilmu Komunikasi Wangsa Jaya', 'Akan segera bergabung dengan STKIP Situs Banten serta pengajuan tutup pada program studi yang pembinaan', '2022-10-05', '2022-12-31', 'Menunggu pergabungan', 0, 'LLDIKTI');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'kl@gmail.com', 'LLDIKTI4 Kelembagaan', 1, 'LLDIKTI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monev`
--
ALTER TABLE `monev`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pts`
--
ALTER TABLE `pts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monev`
--
ALTER TABLE `monev`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pts`
--
ALTER TABLE `pts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

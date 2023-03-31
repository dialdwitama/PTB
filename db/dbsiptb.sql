-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 04:08 AM
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
-- Table structure for table `detail_monev`
--

CREATE TABLE `detail_monev` (
  `id_monev` int(5) NOT NULL,
  `a_monev` varchar(100) NOT NULL,
  `a_direk` varchar(200) NOT NULL,
  `a_pddikti` varchar(200) NOT NULL,
  `h_monev` varchar(300) NOT NULL,
  `id` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_monev`
--

INSERT INTO `detail_monev` (`id_monev`, `a_monev`, `a_direk`, `a_pddikti`, `h_monev`, `id`) VALUES
(1, 'Jl.PHH.Mustafa no.39', '99', 'Jl.Suci no.38', 'Lahan Perpustakaan Seluas 32,5 M2 (belum memenuhi)Judul buku sebanyak 136 (belum memenuhi)Permasalahan di SAPTO terkait pengajuan akreditasi prodi baru', 1);

-- --------------------------------------------------------

--
-- Table structure for table `monev`
--

CREATE TABLE `monev` (
  `no` int(5) NOT NULL,
  `kode` int(10) NOT NULL,
  `pt` varchar(100) NOT NULL,
  `tglmonev` date DEFAULT NULL,
  `masalah` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `monev`
--

INSERT INTO `monev` (`no`, `kode`, `pt`, `tglmonev`, `masalah`) VALUES
(1, 12121, 'Universitas Widyatama', '2023-03-08', '1.Lahan Perpustakaan Seluas 84 M2 (belum memenuhi)\r\n2.Judul buku sebanyak 162 (belum memenuhi)\r\n3.Program D3 Teknik Informatika di pantau BAN-PT karena Tidak Terakreditasi'),
(12, 21912, 'STMIK Tasik', '2023-03-24', 'PEMBELAJARAN FIKTIF');

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
  `progreport` int(10) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pts`
--

INSERT INTO `pts` (`id`, `kode`, `pt`, `progressTerakhir`, `tglProgressTerakhir`, `deadline`, `stat`, `progreport`, `pic`) VALUES
(1, 43258, 'Sekolah Tinggi Ilmu Komunikasi Wangsa Jaya', 'Akan segera bergabung dengan STKIP Situs Banten serta pengajuan tutup pada program studi yang pembinaan', '2022-10-05', '2022-12-31', 'Menunggu pergabungan', 0, 'LLDIKTI'),
(20, 2822, 'STMIK Tasik', 'PEMBELAJARAN FIKTIF', '0000-00-00', '1231-03-02', '', 0, '');

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
-- Indexes for table `detail_monev`
--
ALTER TABLE `detail_monev`
  ADD PRIMARY KEY (`id_monev`),
  ADD KEY `id` (`id`);

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
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pts`
--
ALTER TABLE `pts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_monev`
--
ALTER TABLE `detail_monev`
  ADD CONSTRAINT `detail_monev_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2023 pada 03.41
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `detail_monev`
--

CREATE TABLE `detail_monev` (
  `id` int(5) NOT NULL,
  `a_monev` varchar(100) NOT NULL,
  `a_direk` varchar(200) NOT NULL,
  `a_pddikti` varchar(200) NOT NULL,
  `h_monev` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_monev`
--

INSERT INTO `detail_monev` (`id`, `a_monev`, `a_direk`, `a_pddikti`, `h_monev`) VALUES
(1, 'Jl.PHH.Mustafa no.32', 'Jl. PHH.Mustafa no.32', 'Jl.Suci no.38', 'Lahan Perpustakaan Seluas 32,5 M2 (belum memenuhi)\r\nJudul buku sebanyak 136 (belum memenuhi)\r\nPermasalahan di SAPTO terkait pengajuan akreditasi prodi baru');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_monev`
--
ALTER TABLE `detail_monev`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

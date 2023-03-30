-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2023 pada 03.32
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `monev`
--

CREATE TABLE `monev` (
  `id` int(5) NOT NULL,
  `kode` int(10) NOT NULL,
  `pt` varchar(100) NOT NULL,
  `tglmonev` date DEFAULT NULL,
  `masalah` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `monev`
--

INSERT INTO `monev` (`id`, `kode`, `pt`, `tglmonev`, `masalah`) VALUES
(1, 12121, 'Universitas Widyatama', '2023-03-08', '1.Lahan Perpustakaan Seluas 84 M2 (belum memenuhi)\r\n2.Judul buku sebanyak 162 (belum memenuhi)\r\n3.Program D3 Teknik Informatika di pantau BAN-PT karena Tidak Terakreditasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pts`
--

CREATE TABLE `pts` (
  `id` int(5) NOT NULL,
  `kode` int(25) NOT NULL,
  `pt` varchar(100) NOT NULL,
  `progressTerakhir` varchar(150) NOT NULL,
  `tglProgressTerakhir` date NOT NULL,
  `deadline` date NOT NULL,
  `stat` varchar(50) NOT NULL,
  `progressReport` int(10) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pts`
--

INSERT INTO `pts` (`id`, `kode`, `pt`, `progressTerakhir`, `tglProgressTerakhir`, `deadline`, `stat`, `progressReport`, `pic`) VALUES
(1, 12121, 'Universitas Komputer Indonesia', 'Akan segera bergabung dengan STKIP Situs Banten serta pengajuan tutup pada program studi yang pembinaan\r\n', '2023-03-02', '2023-03-23', 'AMAN', 12, 'LLDIKTI4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'kl@gmail.com', 'LLDIKTI4 Kelembagaan', 1, 'LLDIKTI');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_monev`
--
ALTER TABLE `detail_monev`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `monev`
--
ALTER TABLE `monev`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pts`
--
ALTER TABLE `pts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `monev`
--
ALTER TABLE `monev`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pts`
--
ALTER TABLE `pts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

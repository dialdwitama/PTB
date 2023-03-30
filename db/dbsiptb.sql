-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2023 pada 03.38
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
-- Struktur dari tabel `datapts`
--

CREATE TABLE `datapts` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `pt` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datapts`
--

INSERT INTO `datapts` (`id`, `kode`, `pt`) VALUES
(1, '041001', 'Universitas Ibn Khaldun'),
(2, '041002', 'Universitas Islam Bandung'),
(3, '041003', 'Universitas Islam Nusantara'),
(4, '041004', 'Universitas Pakuan'),
(5, '041005', 'Universitas Islam Syekh Yusuf'),
(6, '041006', 'Universitas Katolik Parahyangan'),
(7, '041007', 'Universitas Kristen Maranatha'),
(8, '041008', 'Universitas Pasundan'),
(9, '041009', 'Universitas Swadaya Gunung Jati'),
(10, '041010', 'Universitas 17 Agustus 1945 Cirebon'),
(11, '041011', 'Universitas Advent Indonesia'),
(12, '041014', 'Universitas Wiralodra'),
(13, '041015', 'Universitas Langlangbuana'),
(14, '041018', 'Universitas Islam 45'),
(15, '041019', 'Universitas Djuanda'),
(16, '041020', 'Universitas Nusa Bangsa'),
(17, '041021', 'Universitas Jenderal Achmad Yani'),
(18, '041022', 'Universitas Winaya Mukti'),
(19, '041023', 'Universitas Galuh Ciamis'),
(20, '041024', 'Universitas Garut'),
(21, '041025', 'Universitas Nurtanio Bandung'),
(22, '041026', 'Universitas Swiss German'),
(23, '041027', 'Universitas Komputer Indonesia'),
(24, '041029', 'Universitas Muhammadiyah Cirebon'),
(25, '041030', 'Universitas Suryakancana'),
(26, '041031', 'Universitas Nasional Pasim'),
(27, '041032', 'Universitas Mathla ul Anwar'),
(28, '041033', 'Universitas Pamulang'),
(29, '041034', 'Universitas Widyatama'),
(30, '041035', 'Universitas Putra Indonesia'),
(31, '041037', 'Universitas Al-ghifari'),
(32, '041038', 'Universitas Kuningan'),
(33, '041039', 'Universitas Pramita Indonesia'),
(34, '041040', 'Universitas Muhammadiyah Sukabumi'),
(35, '041041', 'Universitas Presiden'),
(36, '041042', 'Universitas Subang'),
(37, '041043', 'Universitas Majalengka'),
(38, '041044', 'Universitas Sangga Buana'),
(39, '041046', 'Universitas Informatika Dan Bisnis Indonesia'),
(40, '041047', 'Universitas Wanita Internasional'),
(41, '041048', 'Universitas Bale Bandung'),
(42, '041049', 'Universitas Serang Raya'),
(43, '041050', 'Universitas Teknologi Nusantara Cilegon'),
(44, '041051', 'Universitas Muhammadiyah Tangerang'),
(45, '041053', 'Universitas Pembangunan Jaya'),
(46, '041054', 'Universitas Nahdlatul Ulama Cirebon'),
(47, '041055', 'Universitas Banten Jaya'),
(48, '041056', 'Universitas Surya'),
(49, '041057', 'Universitas Telkom'),
(50, '041058', 'Universitas Lintas Internasional Indonesia'),
(51, '041059', 'Universitas Islam Al-Ihya Kuningan'),
(52, '041060', 'Universitas Buddhi Dharma'),
(53, '041061', 'Universitas Muhammadiyah Tasikmalaya'),
(54, '041062', 'Universitas Buana Perjuangan Karawang'),
(55, '041063', 'Universitas Perjuangan Tasikmalaya'),
(56, '041064', 'Universitas Muhammadiyah Bandung'),
(57, '041065', 'Universitas Bina Bangsa'),
(58, '041066', 'Universitas Halim Sanusi Bandung'),
(59, '041067', 'Universitas Nusa Putra'),
(60, '041068', 'Universitas Bhakti Kencana'),
(61, '041069', 'Universitas Mitra Karya'),
(62, '041070', 'Universitas Faletehan'),
(63, '041071', 'Universitas Raharja'),
(64, '041072', 'Universitas Pelita Bangsa'),
(65, '041073', 'Universitas Ma\'soem'),
(66, '041074', 'Universitas Bina Insani'),
(67, '041075', 'Universitas Catur Insan Cendekia'),
(68, '041076', 'Universitas Kartamulia Purwakarta'),
(69, '041077', 'Universitas Adhirajasa Reswara Sanjaya'),
(70, '041078', 'Universitas Panca Sakti Bekasi'),
(71, '041079', 'Universitas Primagraha'),
(72, '041080', 'Universitas Muhammadiyah Banten'),
(73, '041081', 'Universitas Binaniaga Indonesia'),
(74, '041082', 'Universitas Global Jakarta'),
(75, '041083', 'Universitas Persatuan Islam'),
(76, '041084', 'Universitas Insan Cendekia Mandiri'),
(77, '041085', 'Universitas Tangerang Raya'),
(78, '041086', 'Universitas Cendekia Abditama'),
(79, '041087', 'Universitas \'Aisyiyah Bandung'),
(80, '041088', 'Universitas Sutomo'),
(81, '041089', 'Universitas Cipasung Tasikmalaya'),
(82, '041090', 'Universitas Mandiri'),
(83, '041092', 'Universitas Al-Khairiyah'),
(84, '041093', 'Universitas Indonesia Membangun'),
(85, '041094', 'Universitas Medika Suherman'),
(86, '041095', 'Universitas Indonesia Mandiri'),
(87, '041096', 'Universitas Kebangsaan Republik Indonesia'),
(88, '041097', 'Universitas Sebelas April'),
(89, '041098', 'Universitas Bakti Tunas Husada'),
(90, '041099', 'Universitas Yuppentek Indonesia'),
(91, '041100', 'Universitas Sali Al-Aitaam'),
(92, '041101', 'Universitas Muhammadiyah A.R. Fachruddin'),
(93, '041102', 'Universitas Koperasi Indonesia'),
(94, '041103', 'Monash University Indonesia'),
(95, '041104', 'Universitas Logistik dan Bisnis Internasional'),
(96, '041105', 'Universitas Yatsi Madani'),
(97, '041106', 'Universitas Internasional Jakarta'),
(98, '041107', 'Universitas Yayasan Pendidikan Imam Bonjol Majalengka'),
(99, '041108', 'Universitas Pertiwi'),
(100, '041109', 'Universitas Banten'),
(101, '041110', 'Universitas Insan Pembangunan Indonesia'),
(102, '041111', 'Universitas Teknologi Digital'),
(103, '041112', 'Universitas Ichsan Satya'),
(104, '041113', 'Universitas Muhammadiyah Bogor Raya'),
(105, '041114', 'Universitas Bestari'),
(106, '041117', 'Universitas La Tansa Mashiro'),
(107, '041118', 'Universitas Mangku Wiyata'),
(108, '041119', 'Universitas Bani Saleh'),
(109, '041120', 'Universitas Linggabuana PGRI Sukabumi'),
(110, '041121', 'Universitas Setia Budhi Rangkasbitung'),
(111, '041122', 'Universitas Utpadaka Swastika'),
(112, '042002', 'Institut Teknologi Nasional Bandung'),
(113, '042005', 'Institut Teknologi Sains Bandung'),
(114, '042006', 'Institut Teknologi Harapan Bangsa'),
(115, '042010', 'Institut Bisnis Muhammadiyah Bekasi'),
(116, '042011', 'Institut Manajemen Wiyata Indonesia'),
(117, '042012', 'Institut Keguruan dan Ilmu Pendidikan Siliwangi'),
(118, '042013', 'Institut Pendidikan Indonesia Garut'),
(119, '042015', 'Institut Teknologi Tangerang Selatan'),
(120, '042016', 'Institut Bisnis dan Informatika Kesatuan'),
(121, '042017', 'Institut Kesehatan Rajawali'),
(122, '042018', 'Institut Teknologi Dan Bisnis Bina Sarana Global'),
(123, '042019', 'Institut Teknologi dan Bisnis Visi Nusantara Bogor'),
(124, '042020', 'Institut Teknologi Garut'),
(125, '042021', 'Institut Teknologi dan Bisnis Riyadlul Ulum'),
(126, '042022', 'Institut Digital Ekonomi LPKIA'),
(127, '042023', 'Institut Pendidikan dan Bahasa Invada'),
(128, '042024', 'Institut Teknologi Al-Muhajirin'),
(129, '042025', 'Institut Kesehatan Immanuel'),
(130, '042026', 'Institut Teknologi dan Bisnis Banten'),
(131, '042027', 'Institut Teknologi Petroleum Balongan'),
(132, '042028', 'Institut Teknologi dan Kesehatan Mahardika'),
(133, '042029', 'Institut Kesehatan dan Bisnis Annisa'),
(134, '042030', 'Institut Budi Utomo Nasional'),
(135, '043001', 'Sekolah Tinggi Hukum Bandung'),
(136, '043002', 'Sekolah Tinggi Hukum Galunggung'),
(137, '043003', 'Sekolah Tinggi Hukum Pasundan'),
(138, '043010', 'Sekolah Tinggi Ilmu Administrasi Maulana Yusuf'),
(139, '043014', 'Sekolah Tinggi Ilmu Administrasi YPPT Tasikmalaya'),
(140, '043022', 'Sekolah Tinggi Ilmu Ekonomi Ekuitas'),
(141, '043027', 'Sekolah Tinggi Manajemen Informatika dan Komputer Mardira Indonesia'),
(142, '043029', 'Sekolah Tinggi Hukum Garut'),
(143, '043033', 'Sekolah Tinggi Ilmu Administrasi Menarasiswa'),
(144, '043034', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Pasundan'),
(145, '043035', 'Sekolah Tinggi Bahasa Asing Yapari'),
(146, '043040', 'Sekolah Tinggi Teknologi Mandala'),
(147, '043042', 'Sekolah Tinggi Ilmu Administrasi Bagasasi'),
(148, '043043', 'Sekolah Tinggi Ilmu Ekonomi Pasundan'),
(149, '043044', 'Sekolah Tinggi Teknologi Bina Tunggal'),
(150, '043045', 'Sekolah Tinggi Ilmu Komunikasi Bandung'),
(151, '043049', 'Sekolah Tinggi Teknologi Mineral Indonesia'),
(152, '043050', 'Sekolah Tinggi Teknologi Cirebon'),
(153, '043056', 'Sekolah Tinggi Ilmu Ekonomi Pariwisata YAPARI'),
(154, '043057', 'Sekolah Tinggi Matematika & Ilmu Pengetahuan Alam'),
(155, '043059', 'Sekolah Tinggi Teknologi Bandung'),
(156, '043063', 'Sekolah Tinggi Manajemen Informatika dan Komputer Bandung'),
(157, '043071', 'Sekolah Tinggi Manajemen Informatika dan Komputer LIKMI'),
(158, '043073', 'Sekolah Tinggi Manajemen Informatika dan Komputer IM'),
(159, '043074', 'Sekolah Tinggi Ilmu Ekonomi Yasa Anggana'),
(160, '043075', 'Sekolah Tinggi Ilmu Ekonomi Triguna'),
(161, '043078', 'Sekolah Tinggi Pariwisata Ars Internasional'),
(162, '043079', 'Sekolah Tinggi Desain Indonesia Bandung'),
(163, '043086', 'Sekolah Tinggi Manajemen dan Ilmu Komputer Jabar'),
(164, '043088', 'Sekolah Tinggi Ilmu Ekonomi Miftahul Huda Subang'),
(165, '043089', 'Sekolah Tinggi Ilmu Ekonomi Mulia Pratama'),
(166, '043093', 'Sekolah Tinggi Ilmu Ekonomi YP-Karya'),
(167, '043094', 'Sekolah Tinggi Ilmu Ekonomi Cirebon'),
(168, '043096', 'Sekolah Tinggi Ilmu Ekonomi Tri Bhakti'),
(169, '043100', 'Sekolah Tinggi Teknologi Cipasung'),
(170, '043103', 'Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Widyapuri Mandiri'),
(171, '043104', 'Sekolah Tinggi Manajamen Informatika dan Komputer Tulus Cendekia'),
(172, '043106', 'Sekolah Tinggi Ilmu Hukum Gunung Jati'),
(173, '043107', 'Sekolah Tinggi Teknologi Texmaco'),
(174, '043109', 'Sekolah Tinggi Manajemen Informatika dan Komputer Pranata Indonesia'),
(175, '043110', 'Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Tasikmalaya'),
(176, '043111', 'STKIP Arrahmaniyah'),
(177, '043114', 'Sekolah Tinggi Ilmu Ekonomi Yasmi'),
(178, '043118', 'Sekolah Tinggi Manajemen Informatika dan Komputer DCI'),
(179, '043119', 'Sekolah Tinggi Ilmu Ekonomi Sutaatmadja'),
(180, '043121', 'Sekolah Tinggi Manajaemen Informatika dan Komputer Cilegon'),
(181, '043127', 'Sekolah Tinggi Ilmu Ekonomi Fajar'),
(182, '043128', 'Sekolah Tinggi Ilmu Ekonomi Gema Widya Bangsa'),
(183, '043131', 'Sekolah Tinggi Bahasa Asing JIA'),
(184, '043132', 'Sekolah Tinggi Teknologi Industri dan Farmasi Bogor'),
(185, '043134', 'Sekolah Tinggi Ilmu Ekonomi YPN'),
(186, '043137', 'STMIK AMIK Bandung'),
(187, '043139', 'Sekolah Tinggi Manajemen Informatika dan Komputer Rosma'),
(188, '043140', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Yasika'),
(189, '043141', 'Sekolah Tinggi Ilmu Administrasi Bandung'),
(190, '043144', 'Sekolah Tinggi Manajemen Informatika dan Komputer Pamitran'),
(191, '043148', 'Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Syamsul Ulum'),
(192, '043149', 'Sekolah Tinggi Ilmu Ekonomi Pandu Madania'),
(193, '043153', 'Sekolah Tinggi Ilmu Ekonomi STAN IM'),
(194, '043167', 'Sekolah Tinggi Teknologi Wastukancana'),
(195, '043170', 'Sekolah Tinggi Ilmu Ekonomi Latifah Mubarokiyah'),
(196, '043171', 'Sekolah Tinggi Ilmu Ekonomi Dewantara'),
(197, '043172', 'Sekolah Tinggi Ilmu Ekonomi Wibawa Karta Raharja'),
(198, '043176', 'Sekolah Tinggi Ilmu Ekonomi Kalpataru'),
(199, '043177', 'Sekolah Tinggi Ilmu Komputer Poltek Cirebon'),
(200, '043178', 'Sekolah Tinggi Ilmu Kesehatan Cirebon'),
(201, '043181', 'Sekolah Tinggi Ilmu Ekonomi Tribuana Tambun'),
(202, '043182', 'Sekolah Tinggi Ilmu Teknik Bina Putera Banjar'),
(203, '043183', 'Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Bina Putera Banjar'),
(204, '043185', 'Sekolah Tinggi Manajemen Informatka dan Komputer IKMI Cirebon'),
(205, '043186', 'Sekolah Tinggi Kesehatan Indonesia Wirautama'),
(206, '043187', 'Sekolah Tinggi Seni Musik Bandung'),
(207, '043188', 'Sekolah Tinggi Ilmu Kesehatan Bina Putra Banjar'),
(208, '043189', 'Sekolah Tinggi Teknologi Dr Kh Ez Muttaqien'),
(209, '043191', 'Sekolah Tinggi Farmasi Indonesia Bandung'),
(210, '043192', 'Sekolah Tinggi Teknologi Informatika Sony Sugema'),
(211, '043194', 'Sekolah Tinggi Ilmu Ekonomi Ppi'),
(212, '043195', 'Sekolah Tinggi Ilmu Ekonomi Paripurna'),
(213, '043196', 'Sekolah Tinggi Bahasa Asing Technocrat'),
(214, '043198', 'Sekolah Tinggi Manajemen Informatika dan Komputer Ganesha Bandung'),
(215, '043199', 'Sekolah Tinggi Ilmu Ekonomi Dr Kh Ez Muttaqien'),
(216, '043200', 'Sekolah Tinggi Manajemen Informatika dan Komputer Tasikmalaya'),
(217, '043207', 'Sekolah Tinggi Ilmu Manajemen Budi Bakti'),
(218, '043212', 'Sekolah Tinggi Ilmu Kesehatan Dharma Husada'),
(219, '043213', 'Sekolah Tinggi Ilmu Kesehatan Indramayu'),
(220, '043214', 'Sekolah Tinggi Ilmu Administrasi Sandikta'),
(221, '043215', 'Sekolah Tinggi Ilmu Administrasi Banten'),
(222, '043217', 'Sekolah Tinggi Teknik Karawang'),
(223, '043218', 'Sekolah Tinggi Teknologi Fatahillah Cilegon'),
(224, '043220', 'Sekolah Tinggi Ilmu Kesehatan Respati'),
(225, '043227', 'SEKOLAH TINGGI ILMU EKONOMI BISNIS INTERNASIONAL INDONESIA'),
(226, '043231', 'Sekolah Tinggi Ilmu Kesehatan Banten'),
(227, '043232', 'Sekolah Tinggi Manajemen Informatika dan Komputer Mercusuar'),
(228, '043233', 'Sekolah Tinggi Manajemen Informatika dan Komputer Dharma Putra'),
(229, '043234', 'Sekolah Tinggi Teknologi Ilmu Komputer Insan Unggul'),
(230, '043236', 'Sekolah Tinggi Ilmu Ekonomi Budi Pertiwi'),
(231, '043238', 'Sekolah Tinggi Manajemen Informatika dan Komputer MIC Cikarang'),
(232, '043239', 'Sekolah Tinggi Ilmu Sosial dan Ilmu Poltik Banten Raya'),
(233, '043241', 'Sekolah Tinggi Ilmu Sosial Dan Ilmu Politik Bekasi'),
(234, '043242', 'Sekolah Tinggi Manajemen Informatika dan Komputer PGRI Tangerang'),
(235, '043246', 'Sekolah Tinggi Bahasa Asing Cipto Hadi Pranoto'),
(236, '043247', 'Sekolah Tinggi Ilmu Hukum Dharma Andhiga'),
(237, '043251', 'Sekolah Tinggi Manajemen Informatika dan Komputer Masa Depan'),
(238, '043253', 'Sekolah Tinggi Teknologi Muhammadiyah Cileungsi'),
(239, '043255', 'Sekolah Tinggi Ilmu Administrasi Cimahi'),
(240, '043258', 'Sekolah Tinggi Ilmu Komunikasi Wangsa Jaya'),
(241, '043259', 'Sekolah Tinggi Analis Kimia Cilegon'),
(242, '043262', 'Sekolah Tinggi Teknologi Pratama Adi'),
(243, '043268', 'Sekolah Tinggi Manajemen Informatika dan Komputer Dharma Negara'),
(244, '043269', 'Sekolah Tinggi Ilmu Ekonomi Dharma Negara'),
(245, '043270', 'Sekolah Tinggi Ilmu Kesehatan Wijaya Husada Bogor'),
(246, '043272', 'Sekolah Tinggi Bahasa Asing Bina Dinamika Cianjur'),
(247, '043273', 'Sekolah Tinggi Ilmu Ekonomi Gici'),
(248, '043277', 'Sekolah Tinggi Ilmu Kesehatan Muhammadiyah Ciamis'),
(249, '043282', 'Sekolah Tinggi Ilmu Kesehatan Widya Dharma Husada Tangerang'),
(250, '043284', 'Sekolah Tinggi Ilmu Kesehatan Budhi Luhur Cimahi'),
(251, '043286', 'Sekolah Tinggi Ilmu Kesehatan Sukabumi'),
(252, '043288', 'Sekolah Tinggi Ilmu Kesehatan Kuningan'),
(253, '043290', 'Sekolah Tinggi Teknologi Duta Bangsa'),
(254, '043291', 'Sekolah Tinggi Manajemen Informatika dan Komputer WIT Cirebon'),
(255, '043292', 'Sekolah Tinggi Ilmu Kesehatan Faathir Husada'),
(256, '043296', 'Sekolah Tinggi Ilmu Ekonomi Harapan Bangsa'),
(257, '043298', 'Sekolah Tinggi Ilmu Kesehatan Karsa Husada Garut'),
(258, '043301', 'Sekolah Tinggi Ilmu Kesehatan Santo Borromeus'),
(259, '043306', 'Sekolah Tinggi Ilmu Ekonomi Pengembangan Sistem Informasi Manajemen (Pasim)'),
(260, '043310', 'Sekolah Tinggi Ilmu Ekonomi Hidayatullah Depok'),
(261, '043311', 'Sekolah Tinggi Manajemen Informatika dan Komputer Antar Bangsa'),
(262, '043312', 'Sekolah Tinggi Bahasa Asing IEC Bekasi'),
(263, '043315', 'Sekolah Tinggi Ilmu Keperawatan PPNI Jawa Barat'),
(264, '043316', 'Sekolah Tinggi Ilmu Ekonomi Dwimulya'),
(265, '043317', 'Sekolah Tinggi Analis Bakti Asih'),
(266, '043318', 'Sekolah Tinggi Ilmu Ekonomi Bisnis Perdana Mandiri'),
(267, '043319', 'Sekolah Tinggi Pariwisata Bogor'),
(268, '043321', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Surya'),
(269, '043323', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Muhammadiyah Kuningan'),
(270, '043325', 'Sekolah Tinggi Teknologi YBS Internasional'),
(271, '043326', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Bina Mutiara'),
(272, '043327', 'Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Guna Nusantara'),
(273, '043329', 'Sekolah Tinggi Ilmu Hukum Painan'),
(274, '043331', 'Sekolah Tinggi Teknologi Terpadu Nurul Fikri Depok'),
(275, '043332', 'Sekolah Tinggi Ilmu Kesehatan Holistik'),
(276, '043333', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Mutiara Banten'),
(277, '043334', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Nahdlatul Ulama Indramayu'),
(278, '043335', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Purwakarta'),
(279, '043336', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Pangeran Dharma Kusuma Segeran Juntinyuat Indramayu'),
(280, '043339', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Situs Banten di Serang'),
(281, '043340', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Pancakarya'),
(282, '043341', 'Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Trimasda Cilegon'),
(283, '043344', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Syekh Manshur'),
(284, '043346', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Al-Amin Indramayu'),
(285, '043347', 'Sekolah Tinggi Ilmu Kesehatan An Nasher Cirebon'),
(286, '043348', 'Sekolah Tinggi Ilmu Kesehatan Prima Indonesia'),
(287, '043349', 'Sekolah Tinggi Ilmu Ekonomi Ekadharma Indonesia'),
(288, '043350', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Babunnajah Pandeglang'),
(289, '043351', 'STIKES Raflesia'),
(290, '043355', 'Sekolah Tinggi Farmasi Muhammadiyah Cirebon'),
(291, '043356', 'Sekolah Tinggi Ilmu Kesehatan Muhammadiyah Cirebon'),
(292, '043358', 'Sekolah Tinggi Ilmu Kesehatan Salsabila Serang'),
(293, '043359', 'Sekolah Tinggi Ilmu Komputer El Rahma'),
(294, '043360', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Sinar Cendekia'),
(295, '043361', 'Sekolah Tinggi Ilmu Kesehatan Muhammadiyah Kuningan'),
(296, '043364', 'Sekolah Tinggi Ilmu Hukum dan Politik Pelopor Bangsa'),
(297, '043365', 'Sekolah Tinggi Ilmu Kesehatan Bogor Husada'),
(298, '043366', 'Sekolah Tinggi Ilmu Kesehatan Khas Kempek'),
(299, '043367', 'Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Samudera Indonesia Selatan'),
(300, '043368', 'Sekolah Tinggi Pendidikan Holistik Berbasis Karakter'),
(301, '043371', 'Sekolah Tinggi Ilmu Kesehatan Pelita Ilmu Depok'),
(302, '043372', 'Sekolah Tinggi Ilmu Kesehatan Ahmad Dahlan'),
(303, '043374', 'Sekolah Tinggi Ilmu Kesehatan Permata Nusantara'),
(304, '043377', 'Sekolah Tinggi Manajemen Informatika dan Komputer Al Muslim'),
(305, '043378', 'Sekolah Tinggi Manajemen Informatika dan Komputer Horizon Karawang'),
(306, '043379', 'Sekolah Tinggi ilmu Ekonomi Manajemen Bisnis Indonesia'),
(307, '043380', 'Sekolah Tinggi Manajemen Informatika dan Komputer Al-Fath'),
(308, '043381', 'Sekolah Tinggi Ilmu Kesehatan Horizon Karawang'),
(309, '043382', 'Sekolah Tinggi Ilmu Kesehatan Cianjur'),
(310, '043383', 'Sekolah Tinggi Ilmu Kesehatan YPSDMI'),
(311, '043384', 'Sekolah Tinggi Ilmu Ekonomi Dharma Agung Indonesia'),
(312, '043385', 'Sekolah Tinggi Ilmu Kesehatan Lenggogeni'),
(313, '043386', 'Sekolah Tinggi Ilmu Kesehatan RS Dustira'),
(314, '043387', 'Sekolah Tinggi Ilmu Kesehatan Aksari'),
(315, '043388', 'Sekolah Tinggi Ilmu Kesehatan Yayasan Lembaga Pendidikan Prada'),
(316, '043389', 'Sekolah Tinggi Ilmu Kesehatan Bhakti Husada Cikarang'),
(317, '043390', 'Sekolah Tinggi Ilmu Ekonomi Triguna | 043075: Kode di PDDIKTI'),
(318, '044002', 'Akademi Akuntansi Bandung'),
(319, '044009', 'AMIK Wira Nusantara'),
(320, '044022', 'Akademi Sekretari Manajemen Taruna Bakti'),
(321, '044035', 'Akademi Maritim Suaka Bahari'),
(322, '044045', 'AMIK Bumi Nusantara'),
(323, '044049', 'Akademi Sekretari Dan Manajemen Kencana Bandung'),
(324, '044050', 'Akademi Pariwisata Bandung'),
(325, '044051', 'Akademi Perdagangan Bandung'),
(326, '044052', 'Akademi Maritim Cirebon'),
(327, '044056', 'Akademi Pariwisata Yasmi'),
(328, '044060', 'Akademi Manajemen Informatika Dan Komputer Serang'),
(329, '044064', 'Akademi Manajemen Informatika Dan Komputer Garut'),
(330, '044065', 'Akademi Pariwisata Siliwangi'),
(331, '044068', 'AMIK Sultan Agung'),
(332, '044069', 'Akademi Sekretari Triguna'),
(333, '044071', 'Akademi Sekretari Dan Manajemen Ariyanti'),
(334, '044072', 'Akademi Tata Boga Bandung'),
(335, '044074', 'Akademi Teknologi Bandung'),
(336, '044078', 'Akademi Teknologi Bogor'),
(337, '044089', 'Akademi Manajemen Informatika Dan Komputer YPAT'),
(338, '044092', 'Akademi Teknologi Aeronautika Siliwangi'),
(339, '044093', 'Akademi Pariwisata Nasional Indonesia Bandung'),
(340, '044098', 'Akademi Sekretari Dan Manajemen Insulindo'),
(341, '044102', 'Akademi Manajemen Informatika dan Komputer Purnama Niaga'),
(342, '044105', 'Akademi Telekomunikasi Bogor'),
(343, '044107', 'Akademi Pariwisata Citra Buana Indonesia'),
(344, '044108', 'Akademi Manajemen Informatika dan Komputer Citra Buana Indonesia'),
(345, '044110', 'Akademi Manajemen Informtika dan Komputer Wahana Mandiri Tangerang'),
(346, '044111', 'Akademi Pariwisata NHI Bandung'),
(347, '044116', 'Akademi Kebidanan Yayasan Husada Madani'),
(348, '044123', 'Akademi Manajemen Informatika dan Komputer Pakarti Luhur'),
(349, '044124', 'Akademi Keuangan dan Bisnis Indonesia Internasional'),
(350, '044126', 'Akademi Telekomunikasi Nusantara'),
(351, '044127', 'Akademi Kebidanan Bina Husada Tangerang'),
(352, '044129', 'Akademi Kebidanan Assyifa Tangerang'),
(353, '044132', 'Akademi Analis Kesehatan An Nasher'),
(354, '044133', 'Akademi Bahasa Asing Internasional Bandung'),
(355, '044134', 'Akademi Kebidanan Karya Bunda Husada'),
(356, '044143', 'Akademi Keperawatan Kebonjati'),
(357, '044152', 'Akademi Keperawatan YPIB Majalengka'),
(358, '044160', 'Akademi Keperawatan Buntet Pesantren'),
(359, '044172', 'Akademi Keperawatan Yatna Yuana Lebak'),
(360, '044174', 'Akademi Kebidanan Isma Husada Cirebon'),
(361, '044176', 'Akademi Perpajakan Maria Mediatrix'),
(362, '044182', 'Akademi Kebidanan Gema Nusantara Bekasi'),
(363, '044185', 'Akademi Keperawatan Dharma Husada Cirebon'),
(364, '044187', 'Akademi Radiognostik Dan Radioterapi Yapenpernus'),
(365, '044188', 'Akademi Kebidanan Ar-Rahmah Bandung'),
(366, '044196', 'Akademi Kebidanan Prima Husada Bogor'),
(367, '044197', 'Akademi Kebidanan Citama Raya Depok'),
(368, '044198', 'Akademi Kebidanan Bhakti Mitra Husada'),
(369, '044199', 'Akademi Kebidanan Suka Wangi Bekasi'),
(370, '044203', 'Akademi Pariwisata Nusantara Tangerang'),
(371, '044204', 'Akademi Kebidanan Bunda Auni Bogor'),
(372, '044207', 'Akademi Keperawatan Al-Ikhlas Cisarua'),
(373, '044208', 'Akademi Kebidanan Al-Ikhlas Cisarua'),
(374, '044211', 'Akademi Kebidanan Bakti Indonesia Bogor'),
(375, '044215', 'Akademi Kebidanan Sentra Bina Yudistira Tangerang'),
(376, '044219', 'Akademi Kebidanan Bina Husada Serang'),
(377, '044223', 'Akademi Kebidanan Sayid Sabiq Indramayu'),
(378, '044224', 'Akademi Kebidanan Medica Obgin'),
(379, '044225', 'Akademi Kebidanan Graha Husada Cirebon'),
(380, '044226', 'Akademi Kebidanan Wijaya Husada'),
(381, '044228', 'Akademi Kebidanan Bandung'),
(382, '044229', 'Akademi Kebidanan Bhakti Asih Cileduk'),
(383, '044230', 'Akademi Keperawatan RS Efarina'),
(384, '044233', 'Akademi Manajemen Informatika dan Komputer Mapan Tangerang'),
(385, '044235', 'Akademi Perpajakan Padang Bekasi'),
(386, '044236', 'Akademi Pariwisata BSI Bandung'),
(387, '044238', 'Akademi Farmasi YPF'),
(388, '044239', 'Akademi Farmasi Bumi Siliwangi Bandung'),
(389, '044243', 'Akademi Pariwisata Tunas Nusantara Mandiri'),
(390, '044244', 'Akademi Kebidanan Farmako Husada Al-Muctari Bogor'),
(391, '044245', 'Akademi Perhotelan Tunas Indonesia'),
(392, '044246', 'Akademi Farmasi Persada Sukabumi'),
(393, '045002', 'Politeknik Pajajaran Insan Cinta Bangsa Bandung'),
(394, '045003', 'Politeknik Gajah Tunggal'),
(395, '045004', 'Politeknik Bina Budaya Cipta'),
(396, '045006', 'Politeknik Krakatau'),
(397, '045010', 'Politeknik Piksi Input Serang'),
(398, '045012', 'Politeknik TMKM'),
(399, '045016', 'Politeknik TEDC'),
(400, '045018', 'Politeknik Praktisi Bandung'),
(401, '045019', 'Politeknik Gunakarya Indonesia Bekasi'),
(402, '045020', 'Politeknik Sukabumi'),
(403, '045022', 'Politeknik Agroindustri'),
(404, '045023', 'Politeknik Perdana Mandiri'),
(405, '045025', 'Politeknik Kent'),
(406, '045027', 'Politeknik Piksi Ganesha'),
(407, '045028', 'Politeknik PGRI Banten'),
(408, '045029', 'Politenik Kesehatan Yapkesbi Sukabumi'),
(409, '045030', 'Politeknik Al-Islam Bandung'),
(410, '045032', 'Politeknik Kelapa Sawit Citra Widya Edukasi'),
(411, '045033', 'Politeknik Kesehatan Bhakti Pertiwi Husada'),
(412, '045034', 'Politeknik Kesehatan TNI-AU Ciumbuleuit'),
(413, '045036', 'Politeknik Geologi Dan Pertambangan AGP'),
(414, '045037', 'Politeknik Triguna Tasikmalaya'),
(415, '045041', 'Politeknik Tunas Pemuda'),
(416, '045042', 'Politeknik Enjinering Indorama'),
(417, '045043', 'Politeknik Meta Industri Cikarang'),
(418, '045044', 'Politeknik Pariwisata Prima Internasional'),
(419, '045045', 'Politeknik Kesehatan Aisyiyah Banten'),
(420, '045046', 'Politeknik Bhakti Asih Purwakarta'),
(421, '045047', 'Politeknik Sains Seni Rekakreasi'),
(422, '045048', 'Politeknik Industri ATMI'),
(423, '045049', 'Politeknik Tiara Bunda'),
(424, '045050', 'Politeknik Bhakti Kartini'),
(425, '045051', 'Politeknik Kesehatan Genesis Medicare'),
(426, '045052', 'Politeknik Lembaga Pendidikan dan Pengembangan Profesi Indonesia'),
(427, '045053', 'Politeknik Bina Madani'),
(428, '045055', 'Politeknik Bisnis Mayasari'),
(429, '045056', 'Politeknik Digital Boash Indonesia'),
(430, '045057', 'Politeknik Kesehatan KMC Kuningan'),
(431, '045058', 'Politeknik Takumi'),
(432, '045059', 'Politeknik Kesehatan YBA Bandung'),
(433, '045060', 'Politeknik Maritim Eka Utama Subang'),
(434, '045061', 'Politeknik IDN Bogor'),
(435, '045062', 'Politeknik Merdeka Belajar Indonesia'),
(436, '045063', 'Politeknik Zanjabila Banten'),
(437, '045065', 'Politeknik Kepribadian'),
(438, '045066', 'Politeknik Istikom Bina Citra Informatika'),
(439, '045067', 'Politeknik Siber Cerdika Internasional'),
(440, '045068', 'Politeknik Yusuf Mansur Indonesia'),
(441, '046001', 'Akademi Komunitas Multistrada'),
(442, '046002', 'Akademi Komunitas Toyota Indonesia'),
(443, '046003', 'Akademi Komunitas Presiden'),
(444, '046004', 'Akademi Komunitas Insan Tazakka'),
(445, '046005', 'Akademi Komunitas Qurrota Ayun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `monev`
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
-- Dumping data untuk tabel `monev`
--

INSERT INTO `monev` (`no`, `perguruants`, `badanPenyelenggara`, `alpddikti`, `aldirektori`, `almonev`, `hasilMonev`, `id`) VALUES
(1, 'Politeknik Maritim Eka Subang', 'Yayasan Pendidikan Eka Utama', 'Kab. Subang - Prov. Jawa Barat - Indonesia', 'Kabupaten Subang - Jawa Barat', 'Jl. Kapten Hanafiah No.45, Kel.Karanganyar, Kec.Subang, Kab.Subang, Jawa Barat`, `1. Lahan Perpustak', '1. Lahan Perpustakaan seluas 32,5 M2 (belum memenuhi)\r\n2. Judul buku sebanyak 136 (belum memenuhi)\r\n', 1);

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
  `progressReport` varchar(150) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
-- Indeks untuk tabel `datapts`
--
ALTER TABLE `datapts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `monev`
--
ALTER TABLE `monev`
  ADD PRIMARY KEY (`no`);

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
-- AUTO_INCREMENT untuk tabel `datapts`
--
ALTER TABLE `datapts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=446;

--
-- AUTO_INCREMENT untuk tabel `monev`
--
ALTER TABLE `monev`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pts`
--
ALTER TABLE `pts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

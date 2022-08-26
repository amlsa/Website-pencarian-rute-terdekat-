-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2021 pada 17.01
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-gym-a-star`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `adminID` int(2) NOT NULL,
  `adminUsername` varchar(50) DEFAULT NULL,
  `adminPassword` varchar(50) DEFAULT NULL,
  `diinsertPada` timestamp NULL DEFAULT NULL,
  `diupdatePada` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`adminID`, `adminUsername`, `adminPassword`, `diinsertPada`, `diupdatePada`) VALUES
(1, 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_graf`
--

CREATE TABLE `tb_graf` (
  `graphID` int(11) NOT NULL,
  `simpulMulai` int(2) DEFAULT NULL,
  `simpulAkhir` int(2) DEFAULT NULL,
  `jarak` decimal(5,3) DEFAULT NULL,
  `diinsertPada` timestamp NULL DEFAULT NULL,
  `diupadtePada` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_graf`
--

INSERT INTO `tb_graf` (`graphID`, `simpulMulai`, `simpulAkhir`, `jarak`, `diinsertPada`, `diupadtePada`) VALUES
(174, 80, 81, '0.047', NULL, NULL),
(175, 81, 82, '0.055', NULL, NULL),
(176, 82, 83, '0.024', NULL, NULL),
(177, 83, 84, '0.052', NULL, NULL),
(178, 84, 85, '0.064', NULL, NULL),
(179, 85, 86, '0.054', NULL, NULL),
(180, 86, 87, '0.025', NULL, NULL),
(181, 87, 88, '0.040', NULL, NULL),
(182, 88, 89, '0.029', NULL, NULL),
(184, 89, 88, '0.029', NULL, NULL),
(185, 88, 87, '0.040', NULL, NULL),
(186, 87, 86, '0.025', NULL, NULL),
(187, 86, 85, '0.054', NULL, NULL),
(188, 85, 84, '0.064', NULL, NULL),
(189, 84, 83, '0.052', NULL, NULL),
(190, 83, 82, '0.024', NULL, NULL),
(191, 82, 81, '0.055', NULL, NULL),
(192, 81, 80, '0.047', NULL, NULL),
(193, 84, 90, '0.058', NULL, NULL),
(194, 90, 91, '0.026', NULL, NULL),
(195, 91, 92, '0.040', NULL, NULL),
(196, 92, 93, '0.023', NULL, NULL),
(197, 93, 94, '0.010', NULL, NULL),
(198, 94, 95, '0.026', NULL, NULL),
(199, 97, 99, '0.037', NULL, NULL),
(200, 100, 101, '0.031', NULL, NULL),
(201, 101, 102, '0.047', NULL, NULL),
(202, 102, 103, '0.062', NULL, NULL),
(203, 104, 105, '0.044', NULL, NULL),
(204, 95, 97, '0.018', NULL, NULL),
(205, 99, 100, '0.028', NULL, NULL),
(206, 103, 105, '0.019', NULL, NULL),
(207, 105, 106, '0.018', NULL, NULL),
(208, 106, 107, '0.019', NULL, NULL),
(209, 107, 89, '0.030', NULL, NULL),
(210, 89, 107, '0.030', NULL, NULL),
(211, 107, 106, '0.019', NULL, NULL),
(212, 106, 105, '0.018', NULL, NULL),
(213, 105, 104, '0.044', NULL, NULL),
(214, 105, 103, '0.019', NULL, NULL),
(215, 103, 102, '0.062', NULL, NULL),
(216, 102, 101, '0.047', NULL, NULL),
(217, 101, 100, '0.031', NULL, NULL),
(218, 100, 99, '0.028', NULL, NULL),
(219, 99, 97, '0.037', NULL, NULL),
(220, 97, 95, '0.018', NULL, NULL),
(221, 95, 94, '0.026', NULL, NULL),
(222, 94, 93, '0.010', NULL, NULL),
(223, 93, 92, '0.023', NULL, NULL),
(224, 92, 91, '0.040', NULL, NULL),
(225, 91, 90, '0.026', NULL, NULL),
(226, 90, 84, '0.058', NULL, NULL),
(227, 90, 108, '0.029', NULL, NULL),
(228, 108, 109, '0.033', NULL, NULL),
(229, 109, 110, '0.022', NULL, NULL),
(230, 110, 111, '0.007', NULL, NULL),
(231, 111, 97, '0.014', NULL, NULL),
(232, 97, 111, '0.014', NULL, NULL),
(233, 111, 110, '0.007', NULL, NULL),
(234, 110, 109, '0.022', NULL, NULL),
(235, 109, 108, '0.033', NULL, NULL),
(236, 108, 90, '0.029', NULL, NULL),
(237, 90, 84, '0.058', NULL, NULL),
(238, 108, 112, '0.051', NULL, NULL),
(239, 112, 113, '0.034', NULL, NULL),
(240, 113, 114, '0.036', NULL, NULL),
(241, 114, 115, '0.023', NULL, NULL),
(242, 115, 88, '0.037', NULL, NULL),
(243, 88, 115, '0.037', NULL, NULL),
(244, 115, 114, '0.023', NULL, NULL),
(245, 114, 113, '0.036', NULL, NULL),
(249, 113, 112, '0.034', NULL, NULL),
(250, 112, 108, '0.051', NULL, NULL),
(251, 108, 90, '0.029', NULL, NULL),
(252, 85, 116, '0.040', NULL, NULL),
(253, 116, 117, '0.020', NULL, NULL),
(254, 117, 113, '0.019', NULL, NULL),
(255, 113, 114, '0.036', NULL, NULL),
(256, 114, 115, '0.023', NULL, NULL),
(257, 114, 118, '0.002', NULL, NULL),
(258, 118, 114, '0.002', NULL, NULL),
(259, 114, 113, '0.036', NULL, NULL),
(262, 113, 117, '0.019', NULL, NULL),
(263, 117, 116, '0.020', NULL, NULL),
(264, 116, 85, '0.040', NULL, NULL),
(265, 116, 113, '0.029', NULL, NULL),
(266, 116, 117, '0.020', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_simpul`
--

CREATE TABLE `tb_simpul` (
  `simpulID` int(2) NOT NULL,
  `simpulNama` varchar(255) DEFAULT NULL,
  `simpulType` enum('gym','-') DEFAULT NULL,
  `simpulAlamat` text DEFAULT NULL,
  `simpulLat` varchar(255) DEFAULT NULL,
  `simpulLng` varchar(255) DEFAULT NULL,
  `diinsertPada` timestamp NULL DEFAULT current_timestamp(),
  `diupdatePada` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_simpul`
--

INSERT INTO `tb_simpul` (`simpulID`, `simpulNama`, `simpulType`, `simpulAlamat`, `simpulLat`, `simpulLng`, `diinsertPada`, `diupdatePada`) VALUES
(80, '1', '-', '', '-7.8832774898427544', '112.52554622120084', '2021-01-23 13:27:58', '2021-01-23 13:28:53'),
(81, '2', '-', '', '-7.88302037601207', '112.52588766723824', '2021-01-23 13:31:51', '2021-01-23 13:32:16'),
(82, '3', '-', '', '-7.88351663732935', '112.52585395469578', '2021-01-23 13:32:52', '2021-01-23 13:33:19'),
(83, '4', '-', '', '-7.88340905718627', '112.52566412008105', '2021-01-23 13:34:25', '2021-01-23 13:34:51'),
(84, '5', '-', '', '-7.8838740653183805', '112.5255950344623', '2021-01-23 13:35:15', '2021-01-23 13:37:21'),
(85, '6', '-', '', '-7.884193735049195', '112.52510914808852', '2021-01-23 13:37:47', '2021-01-23 13:38:10'),
(86, '7', '-', '', '-7.884144587614486', '112.5246200314208', '2021-01-23 13:39:06', '2021-01-23 13:40:03'),
(87, '8', '-', '', '-7.884081399100211', '112.52440642741294', '2021-01-23 13:44:14', '2021-01-23 13:44:35'),
(88, '9', '-', '', '-7.884288001937406', '112.52410374469281', '2021-01-23 13:44:53', '2021-01-23 13:45:19'),
(89, '10', '-', '', '-7.88443305153649', '112.52388838177478', '2021-01-23 13:45:42', '2021-01-23 13:46:29'),
(90, '11', '-', '', '-7.884382697597815', '112.52548124738382', '2021-01-23 13:46:58', '2021-01-23 13:47:41'),
(91, '12', '-', '', '-7.884581992445845', '112.52560091786444', '2021-01-23 13:48:03', '2021-01-23 13:48:25'),
(92, '13', '-', '', '-7.884891431393072', '112.52579475474221', '2021-01-23 13:49:16', '2021-01-23 14:18:10'),
(93, '14', '-', '', '-7.885096024369503', '112.5258020890272', '2021-01-23 13:51:27', '2021-01-23 14:17:59'),
(94, '15', '-', '', '-7.885183905339588', '112.5257993292297', '2021-01-23 13:52:08', '2021-01-23 14:10:19'),
(95, '16', '-', '', '-7.885314307048432', '112.5255993974846', '2021-01-23 13:52:41', '2021-01-23 14:09:52'),
(97, '17', '-', '', '-7.885242037148899', '112.52545430311602', '2021-01-23 14:28:11', '2021-01-23 14:28:41'),
(99, '18', '-', '', '-7.885196257419409', '112.52512597546826', '2021-01-23 14:54:59', '2021-01-23 14:58:38'),
(100, '19', '-', '', '-7.885402438093976', '112.52498768658421', '2021-01-23 14:56:01', '2021-01-23 14:58:49'),
(101, '20', '-', '', '-7.885207604565721', '112.52478055552518', '2021-01-23 14:59:16', '2021-01-23 14:59:40'),
(102, '21', '-', '', '-7.884888267194711', '112.5245050085793', '2021-01-23 14:59:59', '2021-01-23 15:00:38'),
(103, '22', '-', '', '-7.885129298692888', '112.52400054884924', '2021-01-23 15:01:02', '2021-01-23 15:02:48'),
(104, '23', '-', '', '-7.88504361529543', '112.52363934449824', '2021-01-23 15:01:39', '2021-01-23 15:03:13'),
(105, '24', '-', '', '-7.884959641750186', '112.52402558039023', '2021-01-23 15:03:38', '2021-01-23 15:04:22'),
(106, '25', '-', '', '-7.8848338301201295', '112.52392282062266', '2021-01-23 15:04:38', '2021-01-23 15:04:58'),
(107, '26', '-', '', '-7.884697890735993', '112.52382092835325', '2021-01-23 15:05:16', '2021-01-23 15:05:42'),
(108, '27', '-', '', '-7.88463418131991', '112.5254196345706', '2021-01-23 15:06:00', '2021-01-23 15:06:58'),
(109, '28', '-', '', '-7.884927705619575', '112.52544596014178', '2021-01-23 15:07:16', '2021-01-23 15:07:46'),
(110, '29', '-', '', '-7.885095451920037', '112.52555503641429', '2021-01-23 15:08:09', '2021-01-23 15:08:36'),
(111, '30', '-', '', '-7.885159145080692', '112.52555561316086', '2021-01-23 15:08:55', '2021-01-23 15:09:22'),
(112, '31', '-', '', '-7.884805093216343', '112.5249907531371', '2021-01-23 15:09:39', '2021-01-23 15:11:48'),
(113, '32', '-', '', '-7.884669638625411', '112.52471760367138', '2021-01-23 15:12:06', '2021-01-23 15:12:24'),
(114, '33', '-', '', '-7.884580393769596', '112.52440188647273', '2021-01-23 15:12:43', '2021-01-23 15:13:10'),
(115, '34', '-', '', '-7.884607156352857', '112.5241985161473', '2021-01-23 15:13:26', '2021-01-23 15:14:08'),
(116, '35', '-', '', '-7.884468937518207', '112.52487989561956', '2021-01-23 15:14:27', '2021-01-23 15:16:37'),
(117, '36', '-', '', '-7.884497459185042', '112.52470202432727', '2021-01-23 15:15:20', '2021-01-23 15:16:46'),
(118, 'Pusat Informasi', 'gym', '', '-7.8846', '112.5244', '2021-01-23 15:32:16', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`adminID`) USING BTREE;

--
-- Indeks untuk tabel `tb_graf`
--
ALTER TABLE `tb_graf`
  ADD PRIMARY KEY (`graphID`) USING BTREE,
  ADD KEY `simpulMulai` (`simpulMulai`) USING BTREE,
  ADD KEY `simpulAkhir` (`simpulAkhir`) USING BTREE;

--
-- Indeks untuk tabel `tb_simpul`
--
ALTER TABLE `tb_simpul`
  ADD PRIMARY KEY (`simpulID`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `adminID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_graf`
--
ALTER TABLE `tb_graf`
  MODIFY `graphID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT untuk tabel `tb_simpul`
--
ALTER TABLE `tb_simpul`
  MODIFY `simpulID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_graf`
--
ALTER TABLE `tb_graf`
  ADD CONSTRAINT `tb_graf_ibfk_2` FOREIGN KEY (`simpulMulai`) REFERENCES `tb_simpul` (`simpulID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_graf_ibfk_3` FOREIGN KEY (`simpulAkhir`) REFERENCES `tb_simpul` (`simpulID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

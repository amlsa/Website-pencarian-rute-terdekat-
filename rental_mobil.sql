-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 02:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Jumlah_hari` int(11) NOT NULL,
  `Tanggal_pengambilan` date NOT NULL,
  `Tanggal_kembali` date NOT NULL,
  `Total_bayar` int(11) NOT NULL,
  `bukti_pembayaran` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_mobil`, `username`, `Status`, `Jumlah_hari`, `Tanggal_pengambilan`, `Tanggal_kembali`, `Total_bayar`, `bukti_pembayaran`) VALUES
(2, 1, '1', 'Selesai', 2, '2019-05-18', '2019-05-20', 1000000, '0'),
(5, 8, 'amallysa', 'Selesai', 1, '2019-05-21', '0000-00-00', 4000000, '24jam.png'),
(7, 1, 'amallysa', 'Selesai', 8, '0000-00-00', '0000-00-00', 8000000, 'baground.jp'),
(8, 1, 'linda', 'Menunggu konfirmasi', 3, '2019-05-25', '0000-00-00', 3000000, 'bukti pemba'),
(9, 1, 'amallysa', 'Selesai', 2, '2019-05-27', '0000-00-00', 2000000, ''),
(10, 1, 'linda', 'Belum dibayar', 3, '0000-00-00', '0000-00-00', 3000000, ''),
(11, 2, 'linda', 'Menunggu konfirmasi', 3, '2019-05-10', '0000-00-00', 7500000, 'bukti pemba');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id` int(11) NOT NULL,
  `nama_merk` varchar(20) NOT NULL,
  `gambar_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id`, `nama_merk`, `gambar_kategori`) VALUES
(1, 'Honda', 'honda.png'),
(2, 'Daihatsu', 'daihatsu.png'),
(3, 'Suzuki', 'suzuki.png'),
(4, 'Toyota', 'toyota.png'),
(5, 'Datsun', 'datsun.png');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `Merk` int(5) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Jumlah_kursi` int(11) NOT NULL,
  `Harga_Sewa` int(30) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `Status_mobil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `Merk`, `Type`, `Jumlah_kursi`, `Harga_Sewa`, `gambar`, `Status_mobil`) VALUES
(1, 1, 'brio', 6, 1000000, 'honda_brio.jpg', 'kosong'),
(2, 2, 'sigra', 8, 2500000, 'Daihatsu_sigra.jpg', 'Tersedia'),
(3, 3, 'pajero', 8, 2000000, 'suzuki_pajero.jpg', ''),
(4, 4, 'avanza', 6, 800000, 'toyota_avanza.jpg', ''),
(5, 5, 'redigo', 4, 600000, 'datsun_redigo.png', ''),
(6, 1, 'BRV', 8, 900000, 'honda_brv.jpg', ''),
(7, 1, 'CITY', 6, 750000, 'honda_city.jpg', ''),
(8, 1, 'CIVIC', 4, 400000, 'honda_civic.jpg', ''),
(9, 1, 'HRV', 6, 800000, 'honda_hrv.jpg', ''),
(10, 1, 'ACCORD', 8, 2000000, 'honda_accord.jpg', ''),
(11, 1, 'JAZZ', 6, 1000000, 'honda_jazz.jpg', ''),
(12, 1, 'WRV', 6, 1500000, 'honda_wrv.jpg', ''),
(13, 2, 'AYLA', 6, 1500000, 'Daihatsu_ayla.png', ''),
(14, 2, 'LUXIO', 8, 2000000, 'Daihatsu_luxio.jpg', ''),
(15, 2, 'SIRION', 6, 2000000, 'Daihatsu_sirion.jpg', ''),
(16, 2, 'TARUNA', 8, 1500000, 'Daihatsu_taruna.jpg', ''),
(17, 2, 'XENIA', 8, 2500000, 'Daihatsu_xenia.jpg', ''),
(18, 3, 'ALTO', 8, 1500000, 'suzuki_alto.jpg', ''),
(19, 3, 'APV', 6, 2000000, 'suzuki_apv.jpg', ''),
(20, 3, 'BALENO', 7, 2000000, 'suzuki_baleno.jpg', ''),
(21, 3, 'CELERIO', 7, 800000, 'suzuki_celerio.jpg', ''),
(22, 3, 'ERTIGA', 7, 600000, 'suzuki_ertiga.jpg', ''),
(23, 3, 'ESTILO', 6, 1000000, 'suzuki_estilo.jpg', ''),
(24, 3, 'KARIMUN', 6, 1500000, 'suzuki_karimun.jpg', ''),
(26, 3, 'SPLASH', 6, 1500000, 'suzuki_splash.jpg', ''),
(30, 3, 'SWIFT', 6, 1500000, 'suzuki_swift.jpg', ''),
(31, 3, 'lisa', 4, 20000, 'iconn.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Role` varchar(10) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `foto_profil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `Username`, `Password`, `Role`, `First_Name`, `Last_Name`, `Email`, `foto_profil`) VALUES
(1, 'amallysa', 'lisa', 'admin', 'amallysa', 'jayanti', 'amallysa@gmail.com', 'images (1).jpg'),
(8, 'jaya', 'jaya', 'user', 'jaya', 'amalindo', 'jaya@gmail.com', ''),
(9, 'linda', 'linda', 'user', 'amalinda', 'jayanty', 'amalinda@gmail.com', 'images.jpg'),
(10, 'ninin', 'ninin', 'user', 'ninin ', 'indah', 'ninin@gmail.com', 'images4.jpg'),
(11, 'lia', 'lia', 'user', 'faradisah', 'amelia', 'amelia@gmail.com', 'images2.jpg'),
(12, 'halim', 'halim', 'user', 'halim', 'aprianto', 'halim@gmail.com', 'images5.gif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

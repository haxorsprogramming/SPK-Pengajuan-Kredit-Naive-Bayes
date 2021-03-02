-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 10:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_misyah_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id` int(5) NOT NULL,
  `kd_kriteria` varchar(10) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `deksripsi` text NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id`, `kd_kriteria`, `nama_kriteria`, `deksripsi`, `bobot`) VALUES
(1, 'A1', 'Pendapatan', '-', 30),
(2, 'A2', 'Agunan', '-', 20),
(3, 'A3', 'Kepemilikan Rumah', '-', 10),
(4, 'A4', 'Karakter', '-', 10),
(5, 'A5', 'Pekerjaan', '-', 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nasabah`
--

CREATE TABLE `tbl_nasabah` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `phone` varchar(51) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `no_ktp` varchar(51) NOT NULL,
  `no_kk` varchar(51) NOT NULL,
  `nama_bapak` varchar(141) NOT NULL,
  `nama_ibu` varchar(151) NOT NULL,
  `no_hp_orang_tua` varchar(51) NOT NULL,
  `alamat_orang_tua` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nasabah`
--

INSERT INTO `tbl_nasabah` (`id`, `nama`, `phone`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `no_kk`, `nama_bapak`, `nama_ibu`, `no_hp_orang_tua`, `alamat_orang_tua`) VALUES
(4, 'Ainin Syahima', '0878228912331', 'Medan perjuangan', 'Medan', '1995-02-26', '6eb4e2ef-b2e8-4624-a161-70c11db2fb94', '6eb4e2ef-b2e8-4624-a161-70c11db2fb94', 'Ayah nurul', 'Ibu nurul', '087890117822', 'Medan'),
(5, 'Alfarizi Raihan', '087890782231', 'Padang Panjang', 'Medan', '1990-02-06', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227822', 'Medan'),
(6, 'Akmal Putra', '087890227812', 'Padang', 'Perbaungan', '2021-02-20', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227811', 'Padang'),
(7, 'Amalia Ibdahni', '078007912234', 'Bangun Purba', 'Galang', '2021-02-27', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '08782313413', 'Bangun Purba'),
(8, 'Bayu Tri Agustin', '087890227922', 'Sipirok', 'Sipirok', '2021-02-27', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Sipirok'),
(9, 'Dicky Ariesandi', '087890227922', 'Perbaungan', 'Perbaungan', '2021-02-20', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Perbaungan'),
(10, 'Dwi Ananda Perdana', '087890227922', 'Medan Johor', 'Medan Johor', '2021-03-11', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Medan Johor'),
(11, 'Fahruddin Umar', '087890227922', 'Tebing Tinggi', 'Tebing Tinggi', '2021-03-27', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Tebing Tinggi'),
(12, 'Fitri Suryani', '087890227922', 'Sei Rampah', 'Sei Rampah', '2021-02-20', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Sei Rampah'),
(13, 'Dwi Citra Utami', '087890227922', 'Jakarta Pusat', 'Jakarta Pusat', '2021-02-20', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Jakarta Pusat'),
(14, 'Ilham Wijaya', '087890227922', 'Sidoarjo', 'Sidoarjo', '2021-02-06', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Sidoarjo'),
(15, 'Kiki Dwijayanti', '087890227922', 'Lubuk Pakam', 'Lubuk Pakam', '2021-02-06', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Lubuk Pakam'),
(16, 'Muhammad Amri Hasibuan', '087890227922', 'Sei Bamban', 'Sei Bamban', '2021-02-27', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Sei Bamban'),
(17, 'Muhammad Syafii', '087890227922', 'Padang Sidempuan', 'Padang Sidempuan', '2021-03-12', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Padang Sidempuan'),
(18, 'Nadya Pratiwi', '087890227922', 'Bukitttingi', 'Bukitttingi', '2021-02-27', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Bukitttingi'),
(19, 'Naia Nurullina Annisa', '087890227922', 'Koto Balingka', 'Koto Balingka', '2021-02-13', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Koto Balingka'),
(20, 'Nanda Dwi Ariska', '087890227922', 'Sibolga', 'Sibolga', '2021-02-20', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Sibolga'),
(21, 'Rara Sulistiani', '087890227922', 'Tanjung Morawa', 'Tanjung Morawa', '2021-02-13', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Tanjung Morawa'),
(22, 'Rifah Sri Aulia', '087890227922', 'Ujung Gading', 'Ujung Gading', '2021-02-01', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Ujung Gading'),
(23, 'Rizky Pratama', '087890227922', 'Pariaman', 'Pariaman', '2021-02-05', '81b9c059-a3b6-418d-a562-6865133750c3', '81b9c059-a3b6-418d-a562-6865133750c3', 'Ayah nurul', 'Ibu nurul', '087890227922', 'Pariaman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan_kredit`
--

CREATE TABLE `tbl_pengajuan_kredit` (
  `id` int(10) NOT NULL,
  `kd_pengajuan` varchar(111) NOT NULL,
  `kd_nasabah` varchar(111) NOT NULL,
  `tanggal_pengajuan` varchar(111) NOT NULL,
  `kd_produk_kredit` varchar(111) NOT NULL,
  `nominal` int(50) NOT NULL,
  `C1` int(4) NOT NULL,
  `C2` int(4) NOT NULL,
  `C3` int(4) NOT NULL,
  `C4` int(4) NOT NULL,
  `C5` int(4) NOT NULL,
  `status_pelunasan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengajuan_kredit`
--

INSERT INTO `tbl_pengajuan_kredit` (`id`, `kd_pengajuan`, `kd_nasabah`, `tanggal_pengajuan`, `kd_produk_kredit`, `nominal`, `C1`, `C2`, `C3`, `C4`, `C5`, `status_pelunasan`) VALUES
(9, '04190658660883879483', '4', '', '1', 1000000, 1, 1, 1, 1, 4, 'tunda'),
(10, '49385284803952791333', '5', '', '1', 1000000, 1, 5, 2, 3, 4, 'tunda'),
(11, '57006288608571909168', '6', '', '1', 1000000, 1, 5, 5, 2, 4, 'tunda'),
(12, '34530549796639415736', '7', '', '1', 1000000, 1, 1, 1, 1, 2, 'tunda'),
(13, '78048166920635724944', '8', '', '1', 1000000, 1, 2, 1, 4, 3, 'tunda'),
(14, '38215364476737236539', '9', '', '1', 1000000, 1, 5, 1, 1, 3, 'tunda'),
(15, '47114591398069836023', '10', '', '1', 1000000, 1, 1, 3, 1, 3, 'tunda'),
(16, '09226318877510237454', '13', '', '1', 1000000, 1, 1, 2, 2, 4, 'tunda'),
(17, '47891302858361363507', '11', '', '1', 1000000, 1, 2, 2, 3, 1, 'tunda'),
(18, '16390270589985753296', '12', '', '1', 1000000, 1, 5, 1, 1, 3, 'tunda'),
(19, '94592950568286119518', '14', '', '1', 1000000, 1, 1, 1, 4, 3, 'tunda'),
(20, '26156357596403352794', '15', '', '1', 1000000, 1, 2, 1, 1, 4, 'tunda'),
(21, '90207995857068402861', '16', '', '1', 1000000, 1, 5, 1, 1, 3, 'tunda'),
(22, '38523369057246649177', '17', '', '1', 1000000, 2, 1, 1, 1, 4, 'tunda'),
(23, '85047889678013550719', '18', '', '1', 1000000, 1, 5, 5, 1, 3, 'tunda'),
(24, '09166188573314784239', '19', '', '1', 1000000, 1, 5, 3, 3, 4, 'tunda'),
(25, '41256531004801966348', '20', '', '1', 1000000, 1, 1, 5, 2, 3, 'tunda'),
(26, '38719345663452135846', '21', '', '1', 1000000, 1, 1, 2, 4, 3, 'tunda'),
(27, '92770578130956280666', '22', '', '1', 1000000, 1, 1, 2, 2, 4, 'tunda'),
(28, '13444469614857507038', '23', '', '1', 1000000, 2, 1, 1, 1, 1, 'tunda');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk_kredit`
--

CREATE TABLE `tbl_produk_kredit` (
  `id` int(5) NOT NULL,
  `nama_kredit` varchar(111) NOT NULL,
  `deksripsi` text NOT NULL,
  `minimal` int(51) NOT NULL,
  `maksimal` int(51) NOT NULL,
  `maksimal_tempo` int(5) NOT NULL,
  `minimal_tempo` int(5) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk_kredit`
--

INSERT INTO `tbl_produk_kredit` (`id`, `nama_kredit`, `deksripsi`, `minimal`, `maksimal`, `maksimal_tempo`, `minimal_tempo`, `active`) VALUES
(1, 'Mikro A', 'Pembiayaan UMKM Besar', 100000, 100000, 12, 24, 1),
(3, 'Mikro B', 'Pembiayaan UMKM Sedang', 10000, 10000, 10, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_simpangan_baku`
--

CREATE TABLE `tbl_simpangan_baku` (
  `id` int(5) NOT NULL,
  `kd_kriteria` varchar(111) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_simpangan_baku`
--

INSERT INTO `tbl_simpangan_baku` (`id`, `kd_kriteria`, `nilai`) VALUES
(1, 'A1', 0.660573),
(2, 'A2', 0.859098),
(3, 'A3', 0.00725891),
(4, 'A4', 0.75),
(5, 'A5', 0.107767);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `active` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `tipe`, `active`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nasabah`
--
ALTER TABLE `tbl_nasabah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengajuan_kredit`
--
ALTER TABLE `tbl_pengajuan_kredit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk_kredit`
--
ALTER TABLE `tbl_produk_kredit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_simpangan_baku`
--
ALTER TABLE `tbl_simpangan_baku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_nasabah`
--
ALTER TABLE `tbl_nasabah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_pengajuan_kredit`
--
ALTER TABLE `tbl_pengajuan_kredit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_produk_kredit`
--
ALTER TABLE `tbl_produk_kredit`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_simpangan_baku`
--
ALTER TABLE `tbl_simpangan_baku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

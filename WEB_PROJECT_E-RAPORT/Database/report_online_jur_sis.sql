-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 04:27 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `report_online_jur_sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `nama`, `level`) VALUES
('21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'admin'),
('eb0a191797624dd3a48fa681d3061212', 'eb0a191797624dd3a48fa681d3061212', 'Bagas', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
`inc` int(9) NOT NULL,
  `jurusan_id` varchar(14) NOT NULL,
  `jurusan_nama` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`inc`, `jurusan_id`, `jurusan_nama`) VALUES
(3, 'JUR-3', 'IPS'),
(4, 'JUR-4', 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`inc` int(9) NOT NULL,
  `kelas_id` varchar(14) NOT NULL,
  `kelas_nama` varchar(90) NOT NULL,
  `Jurusan_id` varchar(14) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`inc`, `kelas_id`, `kelas_nama`, `Jurusan_id`) VALUES
(1, 'KELAS-1', 'X IPA', 'JUR-4'),
(2, 'KELAS-2', 'X IPS', 'JUR-3');

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE IF NOT EXISTS `pelajaran` (
`inc` int(9) NOT NULL,
  `pelajaran_id` varchar(14) NOT NULL,
  `pelajaran_nama` varchar(90) NOT NULL,
  `pelajaran_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`inc`, `pelajaran_id`, `pelajaran_nama`, `pelajaran_kategori`) VALUES
(1, 'KODE-1', 'Pendidikan Agama', 'Normatif'),
(2, 'KODE-2', 'Pendidikan Kewarganegaraan', 'Normatif'),
(3, 'KODE-3', 'Bahasa Indonesia', 'Normatif'),
(4, 'KODE-4', 'Pendidikan Jasmani dan Olahraga', 'Normatif'),
(5, 'KODE-5', 'Bahasa Inggris', 'Adaptif'),
(6, 'KODE-6', 'Matematika', 'Adaptif'),
(7, 'KODE-7', 'Fisika', 'Adaptif'),
(8, 'KODE-8', 'seni budaya', 'normatif');

-- --------------------------------------------------------

--
-- Table structure for table `raport`
--

CREATE TABLE IF NOT EXISTS `raport` (
  `inc` int(9) NOT NULL,
  `raport_id` varchar(20) NOT NULL,
  `tgl_trans` varchar(10) NOT NULL,
  `siswa_id` varchar(9) NOT NULL,
  `tahunajaran` varchar(20) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raport`
--

INSERT INTO `raport` (`inc`, `raport_id`, `tgl_trans`, `siswa_id`, `tahunajaran`, `semester`, `jurusan`) VALUES
(1, 'RAPORT-1', '18/04/2015', 'SISWA-1', '2015/2016', '2', 'Multimedia'),
(2, 'RAPORT-2', '18/04/2015', 'SISWA-1', '2014/2015', '1', 'Multimedia'),
(3, 'RAPORT-3', '18/04/2015', 'SISWA-3', '2014/2015', '1', 'Multimedia'),
(4, 'RAPORT-4', '18/04/2015', 'SISWA-2', '2014/2015', '1', 'Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `raport_detail`
--

CREATE TABLE IF NOT EXISTS `raport_detail` (
  `raport_id` varchar(9) NOT NULL,
  `pelajaran_id` varchar(14) NOT NULL,
  `pelajaran_nama` varchar(90) NOT NULL,
  `nilai_angka` varchar(5) NOT NULL,
  `nilai_huruf` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raport_detail`
--

INSERT INTO `raport_detail` (`raport_id`, `pelajaran_id`, `pelajaran_nama`, `nilai_angka`, `nilai_huruf`) VALUES
('RAPORT-1', 'KODE-1', 'Pendidikan Agama', '10', 'A'),
('RAPORT-1', 'KODE-2', 'Pendidikan Kewarganegaraan', '9', 'A'),
('RAPORT-1', 'KODE-3', 'Bahasa Indonesia', '8', 'B'),
('RAPORT-1', 'KODE-4', 'Pendidikan Jasmani dan Olahraga', '8', 'B'),
('RAPORT-1', 'KODE-5', 'Bahasa Inggris', '10', 'A'),
('RAPORT-1', 'KODE-6', 'Matematika', '9', 'A'),
('RAPORT-1', 'KODE-7', 'Fisika', '7', 'C'),
('RAPORT-2', 'KODE-1', 'Pendidikan Agama', '10', 'A'),
('RAPORT-2', 'KODE-2', 'Pendidikan Kewarganegaraan', '10', 'A'),
('RAPORT-2', 'KODE-3', 'Bahasa Indonesia', '9', 'A'),
('RAPORT-2', 'KODE-4', 'Pendidikan Jasmani dan Olahraga', '10', 'A'),
('RAPORT-3', 'KODE-7', 'Fisika', '8', 'B'),
('RAPORT-3', 'KODE-8', 'Kimia', '9', 'A'),
('RAPORT-4', 'KODE-1', 'Pendidikan Agama', '1', 'A'),
('RAPORT-4', 'KODE-2', 'Pendidikan Kewarganegaraan', '1', 'A'),
('RAPORT-4', 'KODE-3', 'Bahasa Indonesia', '1', 'A'),
('RAPORT-4', 'KODE-4', 'Pendidikan Jasmani dan Olahraga', '1', 'A'),
('RAPORT-4', 'KODE-5', 'Bahasa Inggris', '1', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `inc` int(9) NOT NULL,
  `sekolah_id` varchar(9) NOT NULL,
  `sekolah_nama` varchar(90) NOT NULL,
  `sekolah_alamat` varchar(90) NOT NULL,
  `sekolah_kota` varchar(50) NOT NULL,
  `sekolah_email` varchar(90) NOT NULL,
  `sekolah_kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`inc`, `sekolah_id`, `sekolah_nama`, `sekolah_alamat`, `sekolah_kota`, `sekolah_email`, `sekolah_kontak`) VALUES
(1, 'SEKOLAH', 'SMA NURIS JEMBER', 'Jl. Pangandaran No.48 Sumbersari', 'Jember', 'pesantrennuris@gmail.com', '0331-0082563');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `inc` int(9) NOT NULL,
  `siswa_id` varchar(9) NOT NULL,
  `siswa_nama` varchar(90) NOT NULL,
  `siswa_alamat` varchar(90) NOT NULL,
  `siswa_kota` varchar(50) NOT NULL,
  `siswa_email` varchar(90) NOT NULL,
  `siswa_kontak` varchar(20) NOT NULL,
  `kelas_id` varchar(14) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`inc`, `siswa_id`, `siswa_nama`, `siswa_alamat`, `siswa_kota`, `siswa_email`, `siswa_kontak`, `kelas_id`, `password`) VALUES
(1, 'SISWA-1', 'SIGIT DWI PRASETYO', 'Kulon Progo, Yogyakarta', 'Yogyakarta', 'webmaster@sixghakreasi.com', '0818956973', 'KELAS-1', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'SISWA-2', 'GHALUH AYU IMAS LARASATI', 'Klaten, Jawa Tengah', 'Klaten', 'admin@sixghakreasi.com', '0818956973', 'KELAS-1', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'SISWA-3', 'NATHAN RIZQI MAULANA', 'Bekasi', 'Bekasi', 'Nathan@yahoo.com', '0987695879', 'KELAS-2', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `temp_raport_detail`
--

CREATE TABLE IF NOT EXISTS `temp_raport_detail` (
  `raport_id` varchar(9) NOT NULL,
  `pelajaran_id` varchar(14) NOT NULL,
  `pelajaran_nama` varchar(90) NOT NULL,
  `nilai_angka` varchar(7) NOT NULL,
  `nilai_huruf` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE IF NOT EXISTS `wali_kelas` (
`inc` int(9) NOT NULL,
  `walikelas_id` varchar(90) NOT NULL,
  `walikelas_nama` varchar(90) NOT NULL,
  `walikelas_alamat` varchar(50) NOT NULL,
  `walikelas_kota` varchar(90) NOT NULL,
  `walikelas_email` varchar(90) NOT NULL,
  `walikelas_kontak` varchar(20) NOT NULL,
  `kelas_id` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wali_kelas`
--

INSERT INTO `wali_kelas` (`inc`, `walikelas_id`, `walikelas_nama`, `walikelas_alamat`, `walikelas_kota`, `walikelas_email`, `walikelas_kontak`, `kelas_id`, `password`) VALUES
(1, 'WALIKELAS-1', 'Bombom', 'Situbondo', 'Jember', 'BOMBOM@gmail.com', '081445676879', 'KELAS-1', 'bombom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`inc`), ADD KEY `barang_id` (`jurusan_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`inc`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
 ADD PRIMARY KEY (`inc`), ADD KEY `barang_id` (`pelajaran_id`);

--
-- Indexes for table `raport`
--
ALTER TABLE `raport`
 ADD PRIMARY KEY (`inc`), ADD KEY `beli_id` (`raport_id`), ADD KEY `supplier_id` (`siswa_id`);

--
-- Indexes for table `raport_detail`
--
ALTER TABLE `raport_detail`
 ADD KEY `beli_id` (`raport_id`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
 ADD PRIMARY KEY (`inc`), ADD KEY `supplier_id` (`sekolah_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`inc`), ADD KEY `supplier_id` (`siswa_id`);

--
-- Indexes for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
 ADD PRIMARY KEY (`inc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
MODIFY `inc` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `inc` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
MODIFY `inc` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
MODIFY `inc` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

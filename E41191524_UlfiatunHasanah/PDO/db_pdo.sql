-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 02:16 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `nis` varchar(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `alamat`, `kelas`) VALUES
('NIS001', 'Ulfiatun Hasanah', 'Jl Lumbang No 14', '1'),
('NIS002', 'Syafri Syamsudin', 'Jl Nguling No 14', '2'),
('NIS003', 'Ahmad Idrus', 'Jl Lumbang No 87', '1'),
('NIS004', 'Aulia Novrin', 'Jl Mangli No 35', '1'),
('NIS005', 'Satsa Ratri', 'Jl Mangli No 99', '3'),
('NIS006', 'Rendy Pangalila', 'Jl Sumatera No 77', '2'),
('NIS007', 'Habibi', 'Jl Kungingan No 12', '1'),
('NIS008', 'Putri Halimatus', 'Jl Tambak Rejo No 89', '3'),
('NIS009', 'Wahyu Adi', 'Jl Kapuk No 66', '3'),
('NIS010', 'Budi Sakti', 'JL Nusantara No 1', '3'),
('NIS011', 'Akbar Rosidin', 'JL Palangka No 71', '2'),
('NIS012', 'Umi Kulsum', 'Jl Tongas No 02', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
 ADD PRIMARY KEY (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

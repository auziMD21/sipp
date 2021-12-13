-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 08:03 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipp`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_kabid`
--

CREATE TABLE `db_kabid` (
  `id_kabid` int(11) NOT NULL,
  `nama_kabid` varchar(100) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_kabid`
--

INSERT INTO `db_kabid` (`id_kabid`, `nama_kabid`, `nik`, `bidang`, `username`, `pass`, `status`) VALUES
(1, 'H.R.Firman, S.Sos., M.Si', '196705071993011001', 'Pemerintahan dan Pengkajian Peraturan', 'kabid1', 'kabid1', 1),
(2, 'Drs. Syafrial', '196101171989031004', 'Sosial dan Kependudukan', 'kabid2', 'kabid2', 2),
(3, 'Umar, ST, MT', '196810102000031003', 'Ekonomi dan Pembangunan', 'kabid3', 'kabid3', 3),
(4, 'Yefri Nelwin, S.Si', '196311151990031003', 'Inovasi dan Teknologi', 'kabid4', 'kabid', 4);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE `pemohon` (
  `id_pemohon` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `alamat` text,
  `email` text,
  `no_hp` varchar(13) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `foto_ktp` varchar(500) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemohon`
--

INSERT INTO `pemohon` (`id_pemohon`, `nama`, `tgl`, `alamat`, `email`, `no_hp`, `foto`, `foto_ktp`, `username`, `pass`, `status`) VALUES
(5, 'Auzi MAdani', '2019-09-03', 'KUbang', 'auzi@gmail.com', '081244232321', '', '', 'auzi21', 'auzi21', 1),
(8, 'asdasd', '1992-02-11', 'adas', 'asdalsmdalsm@asa.com', '8218919281', 'IMG-20180430-WA0008.jpg', NULL, 'aku', 'aku', 1),
(9, 'dah jauh dah', '1992-12-12', 'asdasd', 'asdasd@gma.com', '08212929192', 'IMG-20180430-WA00082.jpg', 'IMG-20180430-WA0010.jpg', 'balek', 'balek', 1),
(11, 'heri', '2019-09-20', 'kubang', 'heri@gmail.com', '081234567889', '11.jpg', '10.jpg', 'heri', 'heri', 1),
(12, 'rohman', '2019-09-26', 'bangau sakti', 'rohman@gmail.com', '08123456789', '399385_kaligrafi4.jpg', 'calligraphy.jpg', 'rohman', 'rohman', 1),
(13, 'Mas Rohman', '1997-02-14', 'jalan bangau sakti\r\n', 'khairulrohman448@gmail.com', '082285940501', 'FB_IMG_1438652777269.jpg', 'FB_IMG_1438652746650.jpg', 'mas rohman', 'masrohman', 1),
(14, 'Mas Rohman', '2019-10-09', 'merpati', 'mas@gmail.com', '081234556777', '399385_kaligrafi41.jpg', '399610_kaligrafi14.jpg', 'mas', 'mas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `total_hasil` varchar(1000) NOT NULL,
  `id_seminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` int(11) NOT NULL,
  `judul_proposal` text,
  `file_proposal` varchar(500) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `id_pemohon` int(11) DEFAULT NULL,
  `status_proposal` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `id_seminar` int(11) NOT NULL,
  `jam` time DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `ruangan` varchar(500) NOT NULL,
  `id_proposal` int(11) DEFAULT NULL,
  `kabid` int(11) NOT NULL,
  `status_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id_seminar`, `jam`, `tanggal`, `ruangan`, `id_proposal`, `kabid`, `status_nilai`) VALUES
(2, '10:00:00', '2019-09-26', 'Aula Banlitbang', 4, 1, 1),
(3, '00:00:00', '0000-00-00', 'FST 301', 5, 4, 1),
(4, '08:30:00', '2019-11-21', 'Teater Room', 1, 2, 1),
(5, '09:30:00', '2019-12-27', 'media center', 6, 3, 1),
(6, '12:12:00', '0000-00-00', 'GB 21', 7, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_kabid`
--
ALTER TABLE `db_kabid`
  ADD PRIMARY KEY (`id_kabid`);

--
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`id_pemohon`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`),
  ADD KEY `id_pemohon` (`id_pemohon`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id_seminar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_kabid`
--
ALTER TABLE `db_kabid`
  MODIFY `id_kabid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemohon`
--
ALTER TABLE `pemohon`
  MODIFY `id_pemohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id_seminar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `proposal`
--
ALTER TABLE `proposal`
  ADD CONSTRAINT `proposal_ibfk_1` FOREIGN KEY (`id_pemohon`) REFERENCES `pemohon` (`id_pemohon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

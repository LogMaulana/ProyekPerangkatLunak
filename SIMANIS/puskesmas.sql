-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 10:37 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `No Index` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Keluhan` varchar(255) NOT NULL,
  `Dll` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `identifikasi`
--

CREATE TABLE `identifikasi` (
  `No KTP` varchar(255) NOT NULL,
  `No Index` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `No Antari` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Keluhan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan`
--

CREATE TABLE `kesehatan` (
  `Gol Darah` varchar(255) NOT NULL,
  `Riwayat Penyakit Dulu` varchar(255) NOT NULL,
  `Riwayat Penyakit Keluarga` varchar(255) NOT NULL,
  `Alergi Obat` varchar(255) NOT NULL,
  `Tanggal` varchar(255) NOT NULL,
  `KIE` varchar(255) NOT NULL,
  `B/L/KL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `Nama` varchar(255) NOT NULL,
  `TTL` varchar(255) NOT NULL,
  `NIP` varchar(255) NOT NULL,
  `Ras` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `RT` varchar(255) NOT NULL,
  `Kelurahan` varchar(255) NOT NULL,
  `Telepon Rumah` varchar(255) NOT NULL,
  `Pekerjaan` varchar(255) NOT NULL,
  `Alamat Kantor` varchar(255) NOT NULL,
  `Telepon Kantor` varchar(255) NOT NULL,
  `Telepon Seluler` varchar(255) NOT NULL,
  `Jenis Kepesertaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `No Antri` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Perihal` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `No Antari` varchar(255) NOT NULL,
  `Tanggal` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Umur` varchar(255) NOT NULL,
  `Jenis Kelamin` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Jenis Pasien` varchar(255) NOT NULL,
  `Umum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `No Antri` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `No Index` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Resep` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rujukan`
--

CREATE TABLE `rujukan` (
  `Nama` varchar(255) NOT NULL,
  `Umur` varchar(255) NOT NULL,
  `Jenis Kelamin` varchar(255) NOT NULL,
  `Keluhan` varchar(255) NOT NULL,
  `Diagnosa Sementara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`No Index`),
  ADD KEY `Nama` (`Nama`);

--
-- Indexes for table `identifikasi`
--
ALTER TABLE `identifikasi`
  ADD KEY `No KTP` (`No KTP`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`No Antari`),
  ADD KEY `Nama` (`Nama`);

--
-- Indexes for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD PRIMARY KEY (`Gol Darah`),
  ADD KEY `Gol Darah` (`Gol Darah`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`Nama`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`No Antari`),
  ADD UNIQUE KEY `Nama` (`Nama`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`No Antri`),
  ADD KEY `Nama` (`Nama`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `identifikasi`
--
ALTER TABLE `identifikasi`
  ADD CONSTRAINT `identifikasi_ibfk_1` FOREIGN KEY (`No KTP`) REFERENCES `pasien` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `registrasi_ibfk_1` FOREIGN KEY (`Nama`) REFERENCES `pasien` (`Nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_ibfk_1` FOREIGN KEY (`Nama`) REFERENCES `pasien` (`Nama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

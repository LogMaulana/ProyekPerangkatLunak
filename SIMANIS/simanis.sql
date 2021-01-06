-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 03:08 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simanis`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarobat`
--

CREATE TABLE `daftarobat` (
  `No_Barang` int(11) NOT NULL,
  `Nama_Obat` varchar(50) NOT NULL,
  `Jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarobat`
--

INSERT INTO `daftarobat` (`No_Barang`, `Nama_Obat`, `Jumlah`) VALUES
(1001, 'Paracetamol', 1000),
(1002, 'Paramex', 1000),
(1003, 'Neozep', 1000),
(1004, 'Bodrex', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `datakesehatanpasien`
--

CREATE TABLE `datakesehatanpasien` (
  `No_Index` int(6) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Gol_Darah` varchar(3) NOT NULL,
  `Riwayat_Penyakit_Dahulu` text NOT NULL,
  `Riwayat_Penyakit_Keluarga` text NOT NULL,
  `Alergi_Obat` text NOT NULL,
  `Lain_Lain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datakesehatanpasien`
--

INSERT INTO `datakesehatanpasien` (`No_Index`, `Nama`, `Gol_Darah`, `Riwayat_Penyakit_Dahulu`, `Riwayat_Penyakit_Keluarga`, `Alergi_Obat`, `Lain_Lain`) VALUES
(123, 'Hasan', 'O', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', '-'),
(124, 'Danah', 'A', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', '-'),
(125, 'Massa', 'B', 'Tidak Ada', 'Tidak Ada', 'Bodrex', '-');

-- --------------------------------------------------------

--
-- Table structure for table `datapasien`
--

CREATE TABLE `datapasien` (
  `No_Index` int(4) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Tempat_Lahir` text NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `NIK` bigint(20) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Suku_Ras` varchar(15) NOT NULL,
  `Alamat` text NOT NULL,
  `RT` int(3) NOT NULL,
  `Kelurahan` varchar(30) NOT NULL,
  `TelpRumah` bigint(14) DEFAULT NULL,
  `Pekerjaan` varchar(20) NOT NULL,
  `Alamat_Kantor` text,
  `TelpKantor` bigint(14) DEFAULT NULL,
  `TelpSeluler` bigint(14) NOT NULL,
  `Jenis_Kepesertaan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapasien`
--

INSERT INTO `datapasien` (`No_Index`, `Nama`, `Tempat_Lahir`, `Tanggal_Lahir`, `NIK`, `Jenis_Kelamin`, `Suku_Ras`, `Alamat`, `RT`, `Kelurahan`, `TelpRumah`, `Pekerjaan`, `Alamat_Kantor`, `TelpKantor`, `TelpSeluler`, `Jenis_Kepesertaan`) VALUES
(123, 'Hasan', 'Tanah Air', '1987-10-01', 1000001234567891, 'Laki-laki', 'Banjar', 'Komp.Merdeka', 8, 'Sukawarga', 0, 'Wiraswasta', 'Banjarmasin', 0, 825372984, 'Umum'),
(124, 'Danah', 'Tanah Banyu', '1987-11-04', 1000001234567892, 'Perempuan', 'Banjar', 'Komp.Merdeka', 8, 'Sukawarga', 0, 'Wiraswasta', 'Banjarmasin', 0, 81213141314, 'Umum'),
(125, 'Massa', 'Banjarmasin', '1998-08-10', 1000012394567744, 'Laki-laki', 'Banjar', 'Komp.Permata Raya', 4, 'Sungai Intan', 0, 'Wiraswasta', 'Banjarmasin', 0, 1000088212349987, 'Umum'),
(127, 'Mas', 'Banjarmasin', '0000-00-00', 1000012394567724, 'Laki-laki', 'Banjar', 'Komp.Permata', 2, 'Sungai Intan', 0, 'Wiraswasta', '-', 0, 0, 'Umum'),
(128, 'Massao', 'Banjarmasin', '1998-08-10', 1000012394567746, 'Laki-laki', 'Banjar', 'Komp.Permata Raya', 4, 'Sungai Intan', 0, 'Wiraswasta', 'Banjarmasin', 0, 88212349987, 'Umum'),
(129, 'Massao', 'Banjarmasin', '1998-08-10', 1000012394567740, 'Laki-laki', 'Banjar', 'Komp.Permata Raya', 4, 'Sungai Intan', 0, 'Wiraswasta', '-', 0, 88212349982, 'BPJS');

-- --------------------------------------------------------

--
-- Table structure for table `keluhanpasien`
--

CREATE TABLE `keluhanpasien` (
  `NO` int(6) NOT NULL,
  `No_Index` int(6) NOT NULL,
  `Tanggal` date NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluhanpasien`
--

INSERT INTO `keluhanpasien` (`NO`, `No_Index`, `Tanggal`, `Nama`, `Keluhan`) VALUES
(1, 123, '2021-01-02', 'Hasan', 'Badan Panas dan Flu serta Batuk'),
(2, 124, '2021-01-05', 'Danah', 'Sakit GIGI'),
(5, 124, '2021-01-06', 'Danah', 'Pusing dan Badan Panas'),
(7, 125, '2021-01-06', 'Massa', 'Badan Panas dan Flu serta Batuk');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `No Induk` int(4) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`No Induk`, `Nama`, `Username`, `Password`) VALUES
(1003, 'Redha Adji Rizky', 'Adji123', 'Adji12'),
(1001, 'Muhammad Maulana', 'lana123', 'lana1234'),
(1002, 'Muhammad Nuzhan Nur', 'Zahan123', 'Zahan12');

-- --------------------------------------------------------

--
-- Table structure for table `registrasiharian`
--

CREATE TABLE `registrasiharian` (
  `NO` int(6) NOT NULL,
  `No_Index` int(6) NOT NULL,
  `Tanggal` date NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` text NOT NULL,
  `Umur` int(3) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Status` varchar(6) NOT NULL,
  `Jenis_Pasien` varchar(50) NOT NULL,
  `Kategori_Umum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasiharian`
--

INSERT INTO `registrasiharian` (`NO`, `No_Index`, `Tanggal`, `Nama`, `Alamat`, `Umur`, `Jenis_Kelamin`, `Status`, `Jenis_Pasien`, `Kategori_Umum`) VALUES
(1, 124, '2020-12-26', 'Danah', 'Komp.Merdeka', 30, 'Perempuan', 'Lama', 'Ibu Rumah Tangga', 'DW'),
(2, 123, '2021-01-02', 'Hasan', 'Komp.Merdeka', 40, 'Laki-laki', 'Lama', 'Wiraswasta', 'DW'),
(8, 124, '2021-01-05', 'Danah', 'Komp.Merdeka', 30, 'Perempuan', 'Lama', 'Ibu Rumah Tangga', 'DW'),
(15, 128, '2021-01-06', 'Massao', 'Komp.Permata Raya', 38, 'Laki-laki', 'Lama', 'Pedagang', 'DW'),
(18, 125, '2021-01-06', 'Massa', 'Komp.Permata Raya', 25, 'Laki-laki', 'Lama', 'Pedagang', 'DW');

-- --------------------------------------------------------

--
-- Table structure for table `riwayatberobat`
--

CREATE TABLE `riwayatberobat` (
  `No` int(6) NOT NULL,
  `No_Index` int(6) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Tanggal` date NOT NULL,
  `Diagnosa` text NOT NULL,
  `Status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayatberobat`
--

INSERT INTO `riwayatberobat` (`No`, `No_Index`, `Nama`, `Tanggal`, `Diagnosa`, `Status`) VALUES
(1, 124, 'Danah', '2020-10-30', 'Sakit Flu', 'B'),
(2, 124, 'Danah', '2021-01-03', 'Radang Tenggorokan', 'B'),
(18, 124, 'Danah', '2021-01-06', 'Kecapean', 'B'),
(19, 124, 'Danah', '2021-01-06', 'Kecapean', 'B'),
(20, 125, 'Massa', '2021-01-06', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `riwayatobat`
--

CREATE TABLE `riwayatobat` (
  `No` int(50) NOT NULL,
  `No_Index` int(6) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Tanggal` date NOT NULL,
  `Keperluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayatobat`
--

INSERT INTO `riwayatobat` (`No`, `No_Index`, `Nama`, `Tanggal`, `Keperluan`) VALUES
(1, 124, 'Danah', '2021-01-06', 'Parasetamol 3x Sehari 1 Sesudah Makan');

-- --------------------------------------------------------

--
-- Table structure for table `tabelkasir`
--

CREATE TABLE `tabelkasir` (
  `No_Index` int(4) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Perihal` text,
  `Biaya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelkasir`
--

INSERT INTO `tabelkasir` (`No_Index`, `Nama`, `Perihal`, `Biaya`) VALUES
(120, 'Hasan', 'Cek Mata', 5000),
(121, 'Hadi', 'Cek mulut', 10000),
(121, 'udo', 'Tes darah', 8000),
(121, 'Hasan', 'Cek mulut', 50000),
(127, 'tesss', 'Cek mulut', 50000),
(130, 'BINO', 'Cabut GiGI', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarobat`
--
ALTER TABLE `daftarobat`
  ADD PRIMARY KEY (`No_Barang`);

--
-- Indexes for table `datakesehatanpasien`
--
ALTER TABLE `datakesehatanpasien`
  ADD PRIMARY KEY (`No_Index`);

--
-- Indexes for table `datapasien`
--
ALTER TABLE `datapasien`
  ADD PRIMARY KEY (`No_Index`),
  ADD UNIQUE KEY `NIK` (`NIK`),
  ADD KEY `Nama` (`Nama`);

--
-- Indexes for table `keluhanpasien`
--
ALTER TABLE `keluhanpasien`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `no index` (`No Induk`);

--
-- Indexes for table `registrasiharian`
--
ALTER TABLE `registrasiharian`
  ADD PRIMARY KEY (`NO`),
  ADD KEY `Tanggal` (`Tanggal`),
  ADD KEY `Nama` (`Nama`),
  ADD KEY `No_Index` (`No_Index`);

--
-- Indexes for table `riwayatberobat`
--
ALTER TABLE `riwayatberobat`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `riwayatobat`
--
ALTER TABLE `riwayatobat`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tabelkasir`
--
ALTER TABLE `tabelkasir`
  ADD KEY `No_Index` (`No_Index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarobat`
--
ALTER TABLE `daftarobat`
  MODIFY `No_Barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `keluhanpasien`
--
ALTER TABLE `keluhanpasien`
  MODIFY `NO` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `No Induk` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `registrasiharian`
--
ALTER TABLE `registrasiharian`
  MODIFY `NO` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `riwayatberobat`
--
ALTER TABLE `riwayatberobat`
  MODIFY `No` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `riwayatobat`
--
ALTER TABLE `riwayatobat`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

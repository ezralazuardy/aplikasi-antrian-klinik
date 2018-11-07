-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2018 at 08:40 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antrian`
--

CREATE TABLE `tbl_antrian` (
  `id_antrian` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `antrian` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_antrian`
--

INSERT INTO `tbl_antrian` (`id_antrian`, `tanggal`, `antrian`, `status`) VALUES
(5, '2018-10-24', 'A002', 0),
(7, '2018-10-26', 'A001', 1),
(8, '2018-10-26', 'A002', 0),
(9, '2018-10-26', 'A003', 1),
(10, '2018-10-26', 'A004', 1),
(11, '2018-10-27', 'A001', 0),
(12, '2018-10-27', 'A002', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id_dok` int(11) NOT NULL,
  `nama_dokter` varchar(200) DEFAULT NULL,
  `tempat_lahir` varchar(200) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pendidikan_akhir` varchar(255) DEFAULT NULL,
  `id_layanan` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id_dok`, `nama_dokter`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `status`, `pendidikan_akhir`, `id_layanan`) VALUES
(1, 'Adexe', 'Lahirian', '2018-10-05', 'Jalan Sumbreng									', 'male', 'Raja', 'Magister', 1),
(2, 'AdexeHola', 'Lhiaraasn', '0000-00-00', 'Dimana Saja', 'female', 'Akademik', 'SMP', 1),
(3, 'adexeaad', 'a12321', '0000-00-00', 'asdasdads', 'male', 'asdasd', 'SMK', 1),
(6, 'asdasd', 'asdasd', '0000-00-00', 'asdasdasd', 'female', '123', 'SMK', 1),
(8, 'asdasd', 'asdasd', '2018-10-23', 'asdasdasd									', 'male', '123', 'SMK', 1),
(9, 'daasdsad', 'asdasdasd', '2018-10-10', 'asdasdasd', 'asdasd', 'asd', 'asd', 1),
(10, 'asdasdasd', 'asdasd', '2018-10-16', 'asdasdasd', 'female', '1231', 'SMA', 1),
(11, 'asdasdasd', 'asdasd', '2018-10-16', 'asdasdasd', 'female', '1231', 'SMA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hubungi`
--

CREATE TABLE `tbl_hubungi` (
  `id_hubungi` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `bagian` varchar(255) DEFAULT NULL,
  `hari` varchar(255) DEFAULT NULL,
  `jam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_dokter`, `bagian`, `hari`, `jam`) VALUES
(1, 2, '12', 'Jumat', '00:00 s/d 00:00'),
(2, 3, 'Hubker', 'Sabtu', '11:00 s/d 11:00'),
(3, 10, 'adexe12', 'Minggu', '09:00 s/d 23:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jamkes`
--

CREATE TABLE `tbl_jamkes` (
  `id_jamkes` int(11) NOT NULL,
  `singkatan` varchar(255) NOT NULL,
  `nama_jamkes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jamkes`
--

INSERT INTO `tbl_jamkes` (`id_jamkes`, `singkatan`, `nama_jamkes`) VALUES
(1, 'BPJS', 'Badan Penyelenggara Jaminan Sosial');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `layanan_medis` varchar(255) DEFAULT NULL,
  `info_medis` varchar(255) DEFAULT NULL,
  `code_layanan` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_layanan`
--

INSERT INTO `tbl_layanan` (`id_layanan`, `nama`, `layanan_medis`, `info_medis`, `code_layanan`) VALUES
(1, 'Demam Berdarah', 'Penyembuhan Demam Berdarah', 'Dikarenakan Demam Berdarah Sangat Berbahaya Bagi Kesehatan Kita Semua, Dan Menyebabkan Kematian', 'DB'),
(2, 'THT', 'Mengobati Telinga Hidung Tenggorokan', 'Kita disini dapat mengobati berbagai penyakit Telinga Hidung dan Tenggorokan									', 'THT'),
(3, 'Sakit Perut', 'Sakit Perut Maag dan Sebagainya', 'Mengobati berbagai penyakit yang menyerang perut.', 'SP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id_daftar` int(11) NOT NULL,
  `id_antrian` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `umur` varchar(255) DEFAULT NULL,
  `berat_badan` varchar(255) DEFAULT NULL,
  `tanggal_besuk` varchar(255) DEFAULT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_jamkes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id_daftar`, `id_antrian`, `nama`, `alamat`, `jenis_kelamin`, `umur`, `berat_badan`, `tanggal_besuk`, `id_dokter`, `id_jamkes`) VALUES
(1, '4', 'Muhammad Alifian Aqshol', 'adexeadexe', 'Laki-Laki', '22', '120', '2018-10-18', 9, 1),
(2, '5', 'asd', 'asdasd', 'Perempuan', '21', '12', '2018-10-17', 10, 1),
(3, '6', 'Desi', 'Dihati seseotrang', 'Perempuan', '22', '50', '2018-10-09', 2, 1),
(4, '7', 'Termonator', 'adexe asdaexe', 'Perempuan', '22', '12', '2018-10-27', 2, 1),
(5, '8', 'Teriyaki Bos', 'Adexe', 'Perempuan', '123', '100', '2018-10-31', 9, 1),
(6, '9', 'Saya kuandar', 'Tempat sepi', 'Laki-Laki', '201', '110', '2018-10-20', 10, 1),
(7, '10', 'Kurtwandar', 'Sepi di dalam gundah', 'Laki-Laki', '12', '110', '2018-10-27', 1, 1),
(8, '11', 'Muhammad Alifian Aqshol', 'adeexe', 'Laki-Laki', '18', '22', 'Saturday, 27 October 2018', 1, 1),
(9, '12', 'Draft you wild gonna ', 'adexeasd', 'Laki-Laki', '20', '12', 'Tuesday, 30 October 2018', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `akses` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama`, `akses`) VALUES
(1, 'adexe', '5e3cbd74208895175d545c310536b296', 'alifianadexe', 'Admin'),
(2, 'kimpoy', '5e3cbd74208895175d545c310536b296', 'Kimpoy Kuy', 'User'),
(3, 'zirly', '5e3cbd74208895175d545c310536b296', 'Zirly Fiera Q', 'Pengurus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indexes for table `tbl_hubungi`
--
ALTER TABLE `tbl_hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_jamkes`
--
ALTER TABLE `tbl_jamkes`
  ADD PRIMARY KEY (`id_jamkes`);

--
-- Indexes for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id_dok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_hubungi`
--
ALTER TABLE `tbl_hubungi`
  MODIFY `id_hubungi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jamkes`
--
ALTER TABLE `tbl_jamkes`
  MODIFY `id_jamkes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 08:13 PM
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
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenkel` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` int(13) NOT NULL,
  `poliklinik` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `jenkel`, `alamat`, `no_tlp`, `poliklinik`) VALUES
(100001, 'Raden Hilhamdan Muskit', 'Laki-laki', 'Cianjur', 838177719, 'umum'),
(100002, 'Aden', 'Laki-laki', 'bandung', 83817777, 'gigi'),
(100003, 'Raden', 'laki-laki', 'maluku', 86554674, 'gigi'),
(100004, 'ilham', 'Laki-laki', 'cianjur', 8435453, 'gizi'),
(100005, 'ifan', 'perempuan', 'cianjur', 9876, 'umum'),
(100006, 'Risma Agustina Setiawati', 'perempuan', 'cianjur', 98787, 'gigi'),
(100007, 'asd', 'laki-laki', 'asda', 3234, 'gizi'),
(100008, 'aa', 'laki-laki', 'cikadu', 8534535, 'kulit'),
(100009, 'aang', 'Laki-laki', 'jalan', 89877, 'Poliklinik Gigi');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenkel` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `umur` int(3) NOT NULL,
  `poliklinik` varchar(11) NOT NULL,
  `no_tlp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `jenkel`, `alamat`, `umur`, `poliklinik`, `no_tlp`) VALUES
(1, 'Risma Agustina Setiawati', 'perempuan', 'cianjur', 19, 'Mata', 876768768),
(2, 'aldio', 'lakilaki', 'cianjur', 17, 'Gigi', 879798),
(3, 'dada', 'Laki-Laki', 'kidul', 13, 'Gigi', 8097),
(4, 'wawa', 'Laki-Laki', 'ksks', 13, 'Mata', 9094856);

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `kode_poli` int(10) NOT NULL,
  `nama_poli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`kode_poli`, `nama_poli`) VALUES
(1, 'umum'),
(2, 'umum'),
(3, 'umum');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` enum('admin','pasien','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `password`, `level`) VALUES
(1, 'admin', 'Administrator', 'admin@admin.com', 'admin', 'admin'),
(2, 'member', 'Member web', 'member@member.com', 'member', ''),
(3, 'raden', 'Aden', 'aden@gmail.com', 'pasien', 'pasien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`kode_poli`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100010;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `kode_poli` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

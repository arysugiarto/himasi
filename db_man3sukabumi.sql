-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 04:32 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_man3sukabumi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `Nama`, `Username`, `Password`) VALUES
(1, 'Administrator', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `gambar_artikel` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isi_artikel` text NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `kategori`, `gambar_artikel`, `tanggal`, `isi_artikel`, `id_admin`) VALUES
(8, 'Acara Kelulusan MAN 3 Sukabumi tahun 2016', 'Pendidikan', '13173731_612968888855217_185147547765165552_n.jpg', '2018-05-28', '<p>kelulusan berlangsung sangat mengharukan</p>', 1),
(34, 'judul', 'biasa', '13173731_612968888855217_185147547765165552_n.jpg', '2018-06-04', 'wkwkwkwkwkwwk', 1),
(36, 'berita', 'Pendidikan', '1781975_596209857124222_980467585_n.jpg', '2018-06-07', '', 1),
(38, 'sd', 'berita', '13166001_612965502188889_7694151299086037506_n.jpg', '2018-06-07', '', 1),
(39, 'inafff', 'berita', 'DSCN6795.JPG', '2018-06-07', '', 1),
(40, 'makan minum ', 'Pendidikan', '1781975_596209857124222_980467585_n.jpg', '2018-06-07', '', 1),
(41, '32', 'berita', '13173731_612968888855217_185147547765165552_n.jpg', '2018-06-07', '', 1),
(42, 'cau', 'berita', '13124672_612966778855428_1417365193204893009_n.jpg', '2018-06-07', '', 1),
(43, 'moon', 'Pendidikan', 'DSCN6801.JPG', '2018-06-07', '<p>moon<br></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dafevent`
--

CREATE TABLE `tb_dafevent` (
  `id_dafevent` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dafevent`
--

INSERT INTO `tb_dafevent` (`id_dafevent`, `nama`, `kelas`, `asal_sekolah`, `email`, `jurusan`, `id_event`) VALUES
(2, 'opopo', 'opopop', 'popop', 'opopo@gmail.cuuuu', 'popopo', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `id_event` int(11) NOT NULL,
  `judul_event` varchar(255) NOT NULL,
  `tanggal_event` date NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `waktu_selesai` varchar(255) NOT NULL,
  `tempat_event` text NOT NULL,
  `sifat` varchar(255) NOT NULL,
  `harga_tiket` varchar(255) NOT NULL,
  `gambar_event` varchar(255) NOT NULL,
  `penyelenggara` text NOT NULL,
  `artikel_event` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`id_event`, `judul_event`, `tanggal_event`, `waktu`, `waktu_selesai`, `tempat_event`, `sifat`, `harga_tiket`, `gambar_event`, `penyelenggara`, `artikel_event`) VALUES
(7, 'Matematika', '2018-03-01', '01:59', '01:01', 'Auditorium Unikom Bandung', 'Free', '100.000', 'baliho.jpg', 'HIMA SI', '<p>isi event</p>'),
(10, 'Biologi', '2018-06-20', '09:00', '12:00', 'MAN 3 Sukabumi', 'Free', '', '20140816_113042-1.jpg', 'Science Biologi', '<p>event perlombaan biologi</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar_galeri` varchar(255) NOT NULL,
  `caption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `gambar_galeri`, `caption`) VALUES
(10, 'WhatsApp Image 2018-05-30 at 13.16.18.jpeg', 'Pembelajaran di Science Club'),
(15, 'WhatsApp Image 2018-05-30 at 13.16.11.jpeg', 'Juara 3 lomba biologi'),
(16, 'WhatsApp Image 2018-05-30 at 13.16.16.jpeg', ''),
(17, 'WhatsApp Image 2018-05-30 at 13.27.23.jpeg', ''),
(18, 'WhatsApp Image 2018-05-30 at 13.16.14(1).jpeg', ''),
(19, 'WhatsApp Image 2018-05-30 at 13.16.18(1).jpeg', ''),
(20, 'IMG_0292.JPG', 'Masa Orientasi siswa 2013'),
(22, '20151108_084723.jpg', 'Lintas Alam Kalibunder'),
(24, 'C360_2016-03-10-11-01-36-341.jpg', 'Praktikum Lab IPA'),
(25, 'IMG-20180121-WA0048.jpg', 'Expo Campus MAN 3 Sukabumi 2018'),
(26, 'IMG-20180121-WA0005.jpg', 'Expo Campus MAN 3 Sukabumi 2018'),
(29, '12993561_1685023238418009_6718288400410839839_n.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_admin_2` (`id_admin`);

--
-- Indexes for table `tb_dafevent`
--
ALTER TABLE `tb_dafevent`
  ADD PRIMARY KEY (`id_dafevent`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_dafevent`
--
ALTER TABLE `tb_dafevent`
  MODIFY `id_dafevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD CONSTRAINT `tb_artikel_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_dafevent`
--
ALTER TABLE `tb_dafevent`
  ADD CONSTRAINT `tb_dafevent_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `tb_event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

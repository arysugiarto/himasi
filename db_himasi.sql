-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 04:49 AM
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
-- Database: `db_himasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `kategori_2` varchar(255) NOT NULL,
  `gambar_artikel` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isi_artikel` text NOT NULL,
  `views` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `kategori`, `kategori_2`, `gambar_artikel`, `tanggal`, `isi_artikel`, `views`) VALUES
(5, 'Artikel 5', 'berita', '', 'gallery-image.jpg', '2018-03-12', '<p>ini isis artikel 5</p>', 9),
(6, 'Artikel 6', 'pendidikan', '', 'image-1.jpeg', '2018-03-12', '<p>ini sis artikel 7</p>', 2),
(7, 'Artikel 4', 'Pendidikan', 'berita', 'gallery-image.jpg', '2018-03-12', '', 2);

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
(3, 'Information System Cup 2018 Hima ', '2018-03-16', '', '', 'Lapangan Futsal', 'Free', '', '', '', ''),
(4, 'Event  Chat BOT', '2018-03-16', '09:30', '', 'Auditorium Unikom Bandung', '', '', 'baliho.jpg', 'HIMA SI', 'seminar chat bot&nbsp;'),
(5, 'Coba', '2018-01-09', '01:58', '', 'Auditorium Unikom Bandung', 'Free', '100.000', 'AAPamflet.jpg', 'HIMA SI', '<p>isis event</p>'),
(6, 'Artificale Intelegent', '2018-03-16', '01:01', '03:59', 'Auditorium Unikom Bandung', 'Bayar', '200.000', '', 'HIMA SI', '<p>ini adalah event AI</p>'),
(7, 'Matematika', '2018-03-01', '01:59', '01:01', 'Auditorium Unikom Bandung', 'Free', '100.000', 'baliho.jpg', 'HIMA SI', '<p>isi event</p>');

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
(4, 'dalih.jpg', ''),
(5, 'dalih1.jpg', 'Seminar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kesan`
--

CREATE TABLE `tb_kesan` (
  `id_kesan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `kesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kesan`
--

INSERT INTO `tb_kesan` (`id_kesan`, `nama`, `jabatan`, `kesan`) VALUES
(9, 'Firdhan Vandaru', 'Ketua HIMA 2016', '<h5 style=\"color: rgb(51, 51, 51); background-color: rgb(245, 245, 245);\">â€œ Hidup ini adalah perjuangan dan teruslah berjuang<br>&nbsp; &nbsp; kawan - kawan karena hidup di dunia ini tidak sekedar<br>&nbsp; &nbsp; hidup, kalo sekedar hidup hewan juga hidup, tapi hidup<br>&nbsp; &nbsp; untuk orang orang banyakâ€</h5>'),
(10, 'Firdhan Vandaru2', 'Ketua HIMA 2016', '<h5>â€œ Hidup ini adalah perjuangan dan teruslah berjuang<br>&nbsp; &nbsp; kawan - kawan karena hidup di dunia ini tidak sekedar<br>&nbsp; &nbsp; hidup, kalo sekedar hidup hewan juga hidup, tapi hidup<br>&nbsp; &nbsp; untuk orang orang banyakâ€</h5>'),
(11, 'Firdhan Vandaru2', 'Ketua HIMA 2016', '<h5>â€œ Hidup ini adalah perjuangan dan teruslah berjuang<br>&nbsp; &nbsp; kawan - kawan karena hidup di dunia ini tidak sekedar<br>&nbsp; &nbsp; hidup, kalo sekedar hidup hewan juga hidup, tapi hidup<br>&nbsp; &nbsp; untuk orang orang banyakâ€</h5>'),
(12, 'Firdhan Vandaru2', 'Ketua HIMA 2016', '<h5>â€œ Hidup ini adalah perjuangan dan teruslah berjuang<br>&nbsp; &nbsp; kawan - kawan karena hidup di dunia ini tidak sekedar<br>&nbsp; &nbsp; hidup, kalo sekedar hidup hewan juga hidup, tapi hidup<br>&nbsp; &nbsp; untuk orang orang banyakâ€</h5>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tampilan`
--

CREATE TABLE `tb_tampilan` (
  `id_tampilan` int(11) NOT NULL,
  `font` varchar(255) NOT NULL,
  `univ` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tampilan`
--

INSERT INTO `tb_tampilan` (`id_tampilan`, `font`, `univ`) VALUES
(9, '<h2 style=\"text-align: center; \"><span style=\"color: rgb(255, 255, 255);\">HIMPUNAN MAHASISWA&nbsp;<br>SISTEM INFORMASI</span></h2>', 'UNIVERSITAS KOMPUTER INDONESIA');

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
  ADD PRIMARY KEY (`id_artikel`);

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
-- Indexes for table `tb_kesan`
--
ALTER TABLE `tb_kesan`
  ADD PRIMARY KEY (`id_kesan`);

--
-- Indexes for table `tb_tampilan`
--
ALTER TABLE `tb_tampilan`
  ADD PRIMARY KEY (`id_tampilan`);

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
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kesan`
--
ALTER TABLE `tb_kesan`
  MODIFY `id_kesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_tampilan`
--
ALTER TABLE `tb_tampilan`
  MODIFY `id_tampilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

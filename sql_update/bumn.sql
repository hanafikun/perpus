-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2015 at 04:46 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_buku`
--

CREATE TABLE IF NOT EXISTS `master_buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `nama_buku` varchar(30) NOT NULL,
  `jenis_buku` varchar(30) NOT NULL,
  `tebal_halaman` varchar(30) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `navigasi`
--

CREATE TABLE IF NOT EXISTS `navigasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action_name` varchar(30) NOT NULL,
  `action_to` varchar(30) NOT NULL,
  `class` varchar(50) NOT NULL,
  `id_css` varchar(15) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `have_child` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `navigasi`
--

INSERT INTO `navigasi` (`id`, `action_name`, `action_to`, `class`, `id_css`, `icon`, `have_child`, `is_active`) VALUES
(1, 'Home', 'Welcome/index', 'active ', 'home', 'glyphicon glyphicon-home', 0, 0),
(2, 'Buku', 'Welcome/page', '', 'buku', 'glyphicon glyphicon-book', 0, 0),
(3, 'Peminjaman', 'Peminjaman/index', '', 'peminjaman', 'glyphicon glyphicon-hand-up', 0, 0),
(4, 'Pengembalian', 'Pengembalian/index', '', 'pengembalian', 'glyphicon glyphicon-hand-down', 0, 0),
(5, 'Anggota', '', '', 'anggota', 'glyphicon glyphicon-user', 0, 0),
(6, 'Laporan', '', '', 'laporan', 'glyphicon glyphicon-transfer', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

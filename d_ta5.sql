-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 07:00 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_ta5`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_ta5`
--

CREATE TABLE `t_ta5` (
  `nim` int(10) NOT NULL COMMENT 'primary_key',
  `nama` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `jk` varchar(50) NOT NULL,
  `programstudi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '@gmail.com',
  `komentar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_ta5`
--

INSERT INTO `t_ta5` (`nim`, `nama`, `tanggal`, `jk`, `programstudi`, `fakultas`, `email`, `komentar`) VALUES
(2147483647, 'Putri Aulianti Maulida Rumi', '1999-06-17', 'Perempuan', 'D3 Sistem Informasi', 'Fakultas Ilmu Terapan', 'putriaulianti@gmail.com', 'hey i love you'),
(2147483647, 'Putri Aulianti Maulida Rumi', '1999-06-17', 'Perempuan', 'D3 Sistem Informasi', 'Fakultas Ilmu Terapan', 'putriaulianti@gmail.com', 'pesan'),
(2147483647, 'Putri Aulianti Maulida Rumi', '1999-06-17', 'Perempuan', 'D3 Sistem Informasi', 'Fakultas Ilmu Terapan', 'putriaulianti@gmail.com', 'pesan'),
(2147483647, 'Putri Aulianti Maulida Rumi', '1999-06-17', 'Perempuan', 'D3 Sistem Informasi', 'Fakultas Ilmu Terapan', 'putriaulianti@gmail.com', 'pesan'),
(2147483647, 'Putri Aulianti Maulida Rumi', '1999-06-17', 'Perempuan', 'D3 Sistem Informasi', 'Fakultas Ilmu Terapan', 'putriaulianti@gmail.com', 'ini komentar'),
(2147483647, 'Putri Aulianti Maulida Rumi', '1999-06-17', 'Perempuan', 'D3 Sistem Informasi', 'Fakultas Ilmu Terapan', 'putriaulianti@gmail.com', 'ini komentar'),
(2147483647, 'snfksnfkjsdf', '2018-10-04', 'Laki-laki', 'Sistem Informasi Akuntansi', 'Fakultas Teknik Elektro', 'bla@gmail.com', 'yuuuu'),
(2147483647, 'snfksnfkjsdf', '2018-10-04', 'Laki-laki', 'Sistem Informasi Akuntansi', 'Fakultas Teknik Elektro', 'bla@gmail.com', 'yuuuu'),
(2147483647, 'Lucu', '2018-10-25', 'Perempuan', 'D3 Manajemen Pemasaran', 'Fakultas Teknik Elektro', 'bliii@gmail.com', 'uyuy'),
(2147483647, 'Lucu', '2018-10-25', 'Perempuan', 'D3 Manajemen Pemasaran', 'Fakultas Teknik Elektro', 'bliii@gmail.com', 'uyuy'),
(2147483647, 'Lucu', '2018-10-25', 'Perempuan', 'D3 Manajemen Pemasaran', 'Fakultas Teknik Elektro', 'bliii@gmail.com', 'uyuy'),
(2147483647, 'Lucu', '2018-10-25', 'Perempuan', 'D3 Manajemen Pemasaran', 'Fakultas Teknik Elektro', 'bliii@gmail.com', 'uyuy'),
(2147483647, 'Singa', '2018-10-20', 'Laki-laki', 'D3 Teknologi Komputer', 'Fakultas Ilmu Terapan', 'bliii@gmail.com', 'iuu'),
(2147483647, 'Singa', '2018-10-20', 'Laki-laki', 'D3 Teknologi Komputer', 'Fakultas Ilmu Terapan', 'bliii@gmail.com', 'iuu'),
(2147483647, 'Singa', '2018-10-20', 'Laki-laki', 'D3 Teknologi Komputer', 'Fakultas Ilmu Terapan', 'bliii@gmail.com', 'iuu'),
(2147483647, 'Putri Aulianti Maulida Rumi', '2018-10-17', 'Perempuan', 'D3 Perhotelan', 'Fakultas Ilmu Terapan', 'uiyy@gmail.com', 'kmlk'),
(2147483647, 'Putri Aulianti Maulida Rumi', '2018-10-17', 'Perempuan', 'D3 Perhotelan', 'Fakultas Ilmu Terapan', 'uiyy@gmail.com', 'kmlk'),
(2147483647, 'Singa', '2018-10-24', 'Perempuan', 'D3 Rekayasa Perangkat Lunak Aplikasi', 'Fakultas Ilmu Terapan', 'uiyy@gmail.com', 'mbhjvh'),
(2147483647, 'Singa', '2018-10-24', 'Perempuan', 'D3 Rekayasa Perangkat Lunak Aplikasi', 'Fakultas Ilmu Terapan', 'uiyy@gmail.com', 'mbhjvh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

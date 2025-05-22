-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2019 at 03:48 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(40) NOT NULL,
  `password` varchar(6) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama_lengkap`) VALUES
('admin', 'admin', 'administrator'),
('rafiq', '307b7e', 'okta rafiq');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `id_penyakit` varchar(5) NOT NULL,
  `nm_penyakit` varchar(70) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nm_penyakit`, `keterangan`) VALUES
('P01', 'Pulpitis Akut (Reversibel)', '<p><strong>Solusinya :</strong></p>\r\n\r\n<p>Apabila mengalami reversible pengobatan yang dilakukan akan menyesuaikan dengan penyebab terjadinya peradangan pulpa. Misalnya dengan melakukan penambalan pada gigi yang berlubang sehingga proses penyembuhan dapat terjadi dan pulpa dapat berangsur-angsur normal kembali. Pencegahannya yaitu:</p>\r\n\r\n<ol>\r\n	<li>Hindari makanan yang terlalu panas atau dingin</li>\r\n	<li>Tingkatkan kebersihan mulut dengan menyikat gigi setelah makan dan sebelum tidur</li>\r\n	<li>Jangan menggosok gigi terlalu keras sebab bias berdampak buruk</li>\r\n	<li>Menjaga pola makan sehat dengan kadar karbohidrat yang cukup</li>\r\n</ol>\r\n'),
('P02', 'Pulpitis Kronis (Irreversibel)', '<p><strong>Solusi yaitu :</strong></p>\r\n\r\n<p style="text-align:justify">Apabila mengalami irreversibel pengobatan yang diperlukan tentunya akan lebih rumit. Dokter gigi akan merujuk pada dokter gigi spesialis endodontik yang fokus menangani masalah yang berhubungan dengan perawatan saraf gigi. Dalam dunia kedokteran gigi, perawatan saraf disebut dengan pulpektomi atau perawatan saluran akar (PSA). Pulpektomi dapat dilakukan apabila saraf gigi (pulpa) yang mengalami peradangan masih dapat merespon tes sensitivitas terhadap rangsangan panas maupun dingin yang sebelumnya telah dilakukan oleh dokter gigi. Sedangkan perawatan saluran akar (PSA) merupakan pengobatan yang dilakukan apabila saraf gigi (pulpa) sudah mati atau tidak merespon terhadap tes sensitivitas panas maupun dingin.</p>\r\n\r\n<p><strong>Pencegahan : </strong></p>\r\n\r\n<ol>\r\n	<li>Menjaga kebersihan dan kesehatan rongga mulut dengan menyikat gigi dua kali sehari (setelah sarapan pagi dan sebelum tidur) serta membersihkan sela-sela gigi dengan dentalfloss fungsi menghindari terjadinya lubang pada gigi.</li>\r\n	<li>Rutin konsultasi ke dokter gigi setiap 6 bulan sekali untuk memeriksa keadaan seluruh gigi sehingga apabila terdapat masalah, dapat terdeteksi, dan tertangani sejak dini.</li>\r\n	<li>Mengurangi konsumsi makanan dan minuman yang dapat memicu terjadinya gigi berlubang seperti permen dan minuman bersoda.</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE IF NOT EXISTS `rule` (
  `id_rule` int(11) NOT NULL,
  `id_penyakit` varchar(5) NOT NULL,
  `id_gejala` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id_rule`, `id_penyakit`, `id_gejala`) VALUES
(0, 'P003', 'G002'),
(0, 'P003', 'G003'),
(0, 'P01', 'G01'),
(0, 'P01', 'G02'),
(0, 'P01', 'G03'),
(0, 'P01', 'G04'),
(0, 'P01', 'G05'),
(0, 'P01', 'G07'),
(0, 'P01', 'G06'),
(0, 'P01', 'G08'),
(0, 'P01', 'G09'),
(0, 'P02', 'G11'),
(0, 'P02', 'G01'),
(0, 'P02', 'G12'),
(0, 'P02', 'G12'),
(0, 'P02', 'G13');

-- --------------------------------------------------------

--
-- Table structure for table `tbgejala`
--

CREATE TABLE IF NOT EXISTS `tbgejala` (
  `id_gejala` varchar(5) NOT NULL,
  `nm_gejala` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbgejala`
--

INSERT INTO `tbgejala` (`id_gejala`, `nm_gejala`) VALUES
('G01', 'Kepala terasa sakit'),
('G02', 'Rasa sakitt pada gigi sangat hebat'),
('G03', 'Terasa lebih berdenyut seperti gigi yang ditekan kuat sekali'),
('G04', 'Menusuk-nusuk bagian gigi'),
('G05', 'Terbangun ditengah malam karena sakit'),
('G06', 'Selalu marah dengan tindakan apapun'),
('G07', 'Rasa sakit bertambah dengan adanya rangsangan panas'),
('G08', 'Kadang bisa berkurang sakit nya karena ransangan dingin'),
('G09', 'Rasa sakit akan timbul kembali dan bertambah hebat'),
('G10', 'Rasa sakit yang timbul tidak begitu hebat'),
('G11', 'Terkadang tidak merasa sakit sama sekali'),
('G12', 'Jika makanan masuk ke dalam ruang gigi terasa sangat sakit'),
('G13', 'Rasa sakit timbul karena adanya peninggian tekanan intrapulpa');

-- --------------------------------------------------------

--
-- Table structure for table `tbhasil_konsultasi`
--

CREATE TABLE IF NOT EXISTS `tbhasil_konsultasi` (
  `id_hasil` int(11) NOT NULL auto_increment,
  `id_user` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `id_penyakit` varchar(5) NOT NULL,
  `tgl_hasil` date NOT NULL,
  `gejala_dipilih` text NOT NULL,
  PRIMARY KEY  (`id_hasil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbhasil_konsultasi`
--

INSERT INTO `tbhasil_konsultasi` (`id_hasil`, `id_user`, `username`, `id_penyakit`, `tgl_hasil`, `gejala_dipilih`) VALUES
(1, '', 'sample', 'P02', '2019-11-27', 'G01,G10,G11,G12,G13'),
(2, '', 'sample', 'P02', '2019-11-27', 'G01,G10,G11,G12,G13'),
(3, '', 'sample', 'P02', '2019-11-27', 'G01,G10,G11,G12,G13'),
(4, '', 'sample', 'P02', '2019-11-27', 'G01,G10,G11,G12,G13'),
(5, '', 'sample', 'P02', '2019-11-27', 'G01,G10,G11,G12,G13'),
(6, '', 'sample', 'P02', '2019-11-27', 'G01,G10,G11,G12,G13'),
(7, '', 'sample', 'P02', '2019-11-27', 'G01,G10,G11,G12,G13'),
(8, '', 'sample', 'P02', '2019-11-27', 'G01,G10,G11,G12,G13'),
(9, '', 'sample', 'P02', '2019-11-27', 'G01,G10,G11,G12,G13'),
(10, '', 'sample', 'P02', '2019-11-28', 'G01,G10,G11,G12,G13'),
(11, '', 'bendahara', 'P02', '2019-11-28', 'G01,G10,G11,G12,G13'),
(12, '', 'sample', 'P02', '2019-11-28', 'G01,G10,G11,G12,G13'),
(13, '', 'sample', 'P02', '2019-11-28', 'G01,G10,G11,G12,G13'),
(14, '', 'sample', 'P02', '2019-11-28', 'G01,G10,G11,G12,G13'),
(15, '', 'sample', 'P01', '2019-11-28', 'G01,G02,G03,G04,G05,G06,G07,G08,G09'),
(16, '', 'chintia', 'P01', '2019-11-28', 'G01,G02,G03,G04,G05,G06,G07,G08,G09'),
(17, '', 'chintia', 'P02', '2019-11-29', 'G01,G10,G11,G12,G13'),
(18, '', 'user', 'P02', '2019-11-29', 'G01,G10,G11,G12,G13'),
(19, '', 'user', 'P02', '2019-11-29', 'G01,G10,G11,G12,G13'),
(20, '', 'user', 'P02', '2019-11-29', 'G01,G10,G11,G12,G13'),
(21, '', 'user', 'P02', '2019-11-29', 'G01,G10,G11,G12,G13'),
(22, '', 'user', 'P02', '2019-11-29', 'G01,G10,G11,G12,G13'),
(23, '', 'user', 'P02', '2019-11-29', 'G01,G10,G11,G12,G13'),
(24, '', 'user', 'P02', '2019-11-29', 'G01,G10,G11,G12,G13'),
(25, '', 'user', 'P02', '2019-11-29', 'G01,G10,G11,G12,G13'),
(26, '', 'user', 'P02', '2019-11-29', 'G01,G10,G11,G12,G13'),
(27, '', 'PSN002', 'P02', '2019-11-29', 'G01,G10,G11,G12,G13'),
(28, 'PSN002', 'user', 'P02', '2019-11-29', 'G01,G10,G11,G12,G13');

-- --------------------------------------------------------

--
-- Table structure for table `tbsaran`
--

CREATE TABLE IF NOT EXISTS `tbsaran` (
  `id_saran` int(11) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  `saran` text NOT NULL,
  `tgl_kirim` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id_saran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbsaran`
--

INSERT INTO `tbsaran` (`id_saran`, `nama`, `saran`, `tgl_kirim`) VALUES
(1, 'chintia marantika', 'menurut saya dg aplikasi ini sangat membantu saya', '2019-11-28 22:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE IF NOT EXISTS `tbuser` (
  `id_user` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(6) NOT NULL,
  `nm_pengguna` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  PRIMARY KEY  (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `username`, `password`, `nm_pengguna`, `email`, `nohp`) VALUES
('PSN001', 'asd', 'asd', 'asd', 'asd@asd.com', '33'),
('PSN002', 'user', '123', 'User', 'userbaru@gmail.com', '12');

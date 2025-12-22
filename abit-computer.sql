-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2025 at 02:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abit-computer`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_komputer` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `id_transaksi`, `id_komputer`, `qty`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 3, 3, 3),
(4, 4, 4, 1),
(5, 5, 5, 3),
(6, 6, 6, 1),
(7, 7, 7, 3),
(8, 8, 8, 4),
(9, 9, 9, 1),
(10, 10, 3, 3),
(11, 11, 10, 2),
(12, 12, 11, 2),
(13, 13, 12, 1),
(14, 14, 13, 1),
(15, 15, 14, 2),
(16, 16, 12, 2),
(17, 17, 3, 2),
(18, 18, 3, 2),
(19, 19, 8, 3),
(20, 20, 9, 3),
(21, 21, 8, 3),
(22, 22, 15, 3),
(23, 23, 7, 2),
(24, 24, 3, 2),
(25, 25, 6, 3),
(26, 26, 10, 2),
(27, 27, 5, 4),
(28, 28, 16, 1),
(29, 29, 9, 2),
(30, 30, 13, 1),
(31, 31, 14, 2),
(32, 32, 17, 3),
(33, 33, 9, 3),
(34, 34, 9, 2),
(35, 35, 9, 2),
(36, 36, 18, 1),
(37, 37, 19, 2),
(38, 38, 8, 3),
(39, 39, 8, 1),
(40, 40, 9, 3),
(41, 41, 20, 1),
(42, 42, 20, 2),
(43, 43, 9, 2),
(44, 44, 6, 2),
(45, 45, 6, 1),
(46, 46, 21, 2),
(47, 47, 8, 3),
(48, 48, 6, 3),
(49, 49, 9, 1),
(50, 50, 22, 3),
(51, 51, 23, 2),
(52, 52, 6, 2),
(53, 53, 9, 1),
(54, 54, 9, 1),
(55, 55, 7, 2),
(56, 56, 24, 1),
(57, 57, 10, 3),
(58, 58, 3, 3),
(59, 59, 8, 2),
(60, 60, 15, 2),
(61, 61, 14, 1),
(62, 62, 6, 2),
(63, 63, 3, 3),
(64, 64, 8, 3),
(65, 65, 19, 1),
(66, 66, 21, 3),
(67, 67, 9, 3),
(68, 68, 6, 3),
(69, 69, 3, 2),
(70, 70, 9, 1),
(71, 71, 13, 3),
(72, 72, 25, 3),
(73, 73, 13, 3),
(74, 74, 9, 3),
(75, 75, 26, 1),
(76, 76, 27, 4),
(77, 77, 13, 1),
(78, 78, 8, 2),
(79, 79, 28, 3),
(80, 80, 29, 1),
(81, 81, 3, 2),
(82, 82, 3, 1),
(83, 83, 23, 3),
(84, 84, 2, 3),
(85, 85, 9, 2),
(86, 86, 8, 3),
(87, 87, 11, 3),
(88, 88, 3, 3),
(89, 89, 3, 1),
(90, 90, 6, 2),
(91, 91, 22, 2),
(92, 92, 8, 3),
(93, 93, 30, 3),
(94, 94, 13, 2),
(95, 95, 27, 2),
(96, 96, 11, 2),
(97, 97, 31, 3),
(98, 98, 10, 3),
(99, 99, 3, 2),
(100, 100, 24, 2),
(101, 101, 25, 2),
(102, 102, 8, 2),
(103, 103, 3, 3),
(104, 104, 30, 2),
(105, 105, 32, 1),
(106, 106, 13, 1),
(107, 107, 3, 2),
(108, 108, 6, 1),
(109, 109, 12, 1),
(110, 110, 10, 2),
(111, 111, 8, 3),
(112, 112, 10, 2),
(113, 113, 10, 3),
(114, 114, 8, 1),
(115, 115, 8, 1),
(116, 116, 10, 2),
(117, 117, 13, 2),
(118, 118, 3, 2),
(119, 119, 10, 2),
(120, 120, 8, 2),
(121, 121, 3, 3),
(122, 122, 7, 1),
(123, 123, 33, 1),
(124, 124, 8, 1),
(125, 125, 13, 3),
(126, 126, 11, 3),
(127, 127, 17, 2),
(128, 128, 8, 3),
(129, 129, 3, 3),
(130, 130, 9, 1),
(131, 131, 34, 1),
(132, 132, 12, 2),
(133, 133, 6, 1),
(134, 134, 11, 2),
(135, 135, 7, 2),
(136, 136, 9, 3),
(137, 137, 13, 3),
(138, 138, 17, 2),
(139, 139, 10, 3),
(140, 140, 24, 1),
(141, 141, 27, 4),
(142, 142, 13, 1),
(143, 143, 16, 4),
(144, 144, 6, 3),
(145, 145, 11, 3),
(146, 146, 26, 1),
(147, 147, 6, 1),
(148, 148, 23, 2),
(149, 149, 28, 1),
(150, 150, 3, 1),
(151, 151, 28, 1),
(152, 152, 2, 2),
(153, 153, 6, 3),
(154, 154, 10, 3),
(155, 155, 10, 2),
(156, 156, 14, 2),
(157, 157, 26, 1),
(158, 158, 6, 2),
(159, 159, 6, 3),
(160, 160, 35, 1),
(161, 161, 36, 1),
(162, 162, 13, 3),
(163, 163, 30, 2),
(164, 164, 25, 4),
(165, 165, 9, 3),
(166, 166, 15, 2),
(167, 167, 2, 4),
(168, 168, 9, 1),
(169, 169, 29, 1),
(170, 170, 23, 1),
(171, 171, 13, 3),
(172, 172, 3, 2),
(173, 173, 6, 2),
(174, 174, 11, 4),
(175, 175, 33, 4),
(176, 176, 10, 1),
(177, 177, 9, 2),
(178, 178, 13, 1),
(179, 179, 9, 3),
(180, 180, 9, 1),
(181, 181, 6, 2),
(182, 182, 6, 1),
(183, 183, 6, 3),
(184, 184, 13, 1),
(185, 185, 10, 3),
(186, 186, 10, 3),
(187, 187, 13, 1),
(188, 188, 3, 2),
(189, 189, 6, 4),
(190, 190, 37, 1),
(191, 191, 8, 3),
(192, 192, 6, 3),
(193, 193, 33, 1),
(194, 194, 1, 1),
(195, 195, 25, 3),
(196, 196, 32, 3),
(197, 197, 20, 2),
(198, 198, 5, 1),
(199, 199, 2, 3),
(200, 200, 32, 2),
(201, 201, 13, 4),
(202, 202, 17, 1),
(203, 203, 1, 2),
(204, 204, 9, 4),
(205, 205, 5, 3),
(206, 206, 16, 2),
(207, 207, 25, 2),
(208, 208, 27, 2),
(209, 209, 14, 2),
(210, 210, 29, 1),
(211, 211, 11, 2),
(212, 212, 8, 3),
(213, 213, 32, 1),
(214, 214, 22, 2),
(215, 215, 38, 1),
(216, 216, 12, 1),
(217, 217, 6, 2),
(218, 218, 10, 1),
(219, 219, 26, 2),
(220, 220, 6, 4),
(221, 221, 21, 3),
(222, 222, 33, 2),
(223, 223, 39, 1),
(224, 224, 6, 4),
(225, 225, 10, 4),
(226, 226, 2, 1),
(227, 227, 33, 3),
(228, 228, 33, 3),
(229, 229, 18, 3),
(230, 230, 36, 4),
(231, 231, 31, 3),
(232, 232, 27, 2),
(233, 233, 14, 1),
(234, 234, 28, 3),
(235, 235, 28, 2),
(236, 236, 7, 3),
(237, 237, 16, 4),
(238, 238, 3, 2),
(239, 239, 13, 3),
(240, 240, 17, 3),
(241, 241, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `komputer`
--

CREATE TABLE `komputer` (
  `id_komputer` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `merk` varchar(125) NOT NULL,
  `deskripsi` text NOT NULL,
  `keterangan` varchar(125) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` text NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komputer`
--

INSERT INTO `komputer` (`id_komputer`, `id_kategori`, `merk`, `deskripsi`, `keterangan`, `harga`, `foto`, `stok`) VALUES
(1, 1, 'PRINTER EPSON L121 INK JET', 'deskripsi printer epson l121 ink jet', 'unit', 1800000, 'images1.png', 50),
(2, 1, 'OLIKE QUICK CHANGER POWER ADAPTER C307 WHITE', 'deskripsi olike quick changer power adapter c307 white', 'unit', 50000, 'images1.png', 50),
(3, 1, 'OLIKE WIRED EARPHONE E201 WHITE', 'deskripsi olike wired earphone e201 white', 'unit', 24000, 'images1.png', 50),
(4, 1, 'LAPTOP ASUS VIVOBOOK GO 14 E1404GA I3 N305 8CORE BLK -FHD321', 'deskripsi laptop asus vivobook go 14 e1404ga i3 n305 8core blk -fhd321', 'unit', 6850000, 'images1.png', 50),
(5, 1, 'OLIKE WIRELESS OPTICAL MOUSE M200 BLACK', 'deskripsi olike wireless optical mouse m200 black', 'unit', 49000, 'images1.png', 50),
(6, 1, 'OLIKE WIRED EARPHONE E13 GREEN', 'deskripsi olike wired earphone e13 green', 'unit', 30000, 'images1.png', 50),
(7, 1, 'MIKUSO GAMEPAD DOUBLE GP-USB008', 'deskripsi mikuso gamepad double gp-usb008', 'unit', 152000, 'images1.png', 50),
(8, 1, 'MOUSE MIKUSO USB WIRED CONNECTION MOS-372U', 'deskripsi mouse mikuso usb wired connection mos-372u', 'unit', 38000, 'images1.png', 50),
(9, 1, 'MIKUSO MOUSEPAD MP-118', 'deskripsi mikuso mousepad mp-118', 'unit', 11000, 'images1.png', 50),
(10, 1, 'KEYBOARD PROTECTOR 14 INCH', 'deskripsi keyboard protector 14 inch', 'unit', 6000, 'images1.png', 50),
(11, 1, 'MIKUSO 6-IN-1 CARD READER USB 2.0 CRD-010', 'deskripsi mikuso 6-in-1 card reader usb 2.0 crd-010', 'unit', 77000, 'images1.png', 50),
(12, 1, 'MIKUSO USB PRINTER 2.0 CBL-011', 'deskripsi mikuso usb printer 2.0 cbl-011', 'unit', 27000, 'images1.png', 50),
(13, 1, 'OLIKE DATA CABLE RDC011C WHITE TYPE C', 'deskripsi olike data cable rdc011c white type c', 'unit', 20000, 'images1.png', 50),
(14, 1, 'PRINTER BROTHER T820DW ALL IN ONE', 'deskripsi printer brother t820dw all in one', 'unit', 5050000, 'images1.png', 50),
(15, 1, 'OLIKE 16GB ALL METAL FLASHDISK OF216', 'deskripsi olike 16gb all metal flashdisk of216', 'unit', 60000, 'images1.png', 50),
(16, 1, 'TEKNIX 3.5MM IN-EAR EARPHONE EP-101 WHITE', 'deskripsi teknix 3.5mm in-ear earphone ep-101 white', 'unit', 68000, 'images1.png', 50),
(17, 1, 'MIKUSO WIRELESS MOUSE MOS-W085', 'deskripsi mikuso wireless mouse mos-w085', 'unit', 86000, 'images1.png', 50),
(18, 1, 'OLIKE BLITZ WIRELESS PORTABLE AUDIO SV1', 'deskripsi olike blitz wireless portable audio sv1', 'unit', 299000, 'images1.png', 50),
(19, 1, 'OLIKE BLITZ FAST CHARGING 20000MAH P6', 'deskripsi olike blitz fast charging 20000mah p6', 'unit', 375000, 'images1.png', 50),
(20, 1, 'KEYBOARD LENOVO THINKPAD X200', 'deskripsi keyboard lenovo thinkpad x200', 'unit', 360000, 'images1.png', 50),
(21, 1, 'OLIKE CAR PHONE HOLDER HC3', 'deskripsi olike car phone holder hc3', 'unit', 79000, 'images1.png', 50),
(22, 1, 'MIKUSO NOTEBOOK COOLING PAD NCP-063', 'deskripsi mikuso notebook cooling pad ncp-063', 'unit', 108000, 'images1.png', 50),
(23, 1, 'OLIKE WIRELESS PORTABLE RADIO OBS-600', 'deskripsi olike wireless portable radio obs-600', 'unit', 112000, 'images1.png', 50),
(24, 1, 'OLIKE PROCHARGE WIRELESS GAMING MOUSE GM2', 'deskripsi olike procharge wireless gaming mouse gm2', 'unit', 165000, 'images1.png', 50),
(25, 1, 'TEKNIX USB TO MICRO CBL-834-M PRO', 'deskripsi teknix usb to micro cbl-834-m pro', 'unit', 53000, 'images1.png', 50),
(26, 1, 'TEKNIX USB TO TYPE-C CBL-829-C', 'deskripsi teknix usb to type-c cbl-829-c', 'unit', 35000, 'images1.png', 50),
(27, 1, 'MIKUSO FLASHDISK MB-098 METAL', 'deskripsi mikuso flashdisk mb-098 metal', 'unit', 82000, 'images1.png', 50),
(28, 1, 'OLIKE WIRELESS KEYBOARD AND MOUSE SET KMS1', 'deskripsi olike wireless keyboard and mouse set kms1', 'unit', 199000, 'images1.png', 50),
(29, 1, 'LAPTOP HP 14-DQ5568TU I3 1215 SILVER', 'deskripsi laptop hp 14-dq5568tu i3 1215 silver', 'unit', 7600000, 'images1.png', 50),
(30, 1, 'TEKNIX SPEAKER SUBWOOFER SPK-S080', 'deskripsi teknix speaker subwoofer spk-s080', 'unit', 166000, 'images1.png', 50),
(31, 1, 'MIKUSO WIRELESS KEYBOARD+MOUSE MINI KB-C017', 'deskripsi mikuso wireless keyboard+mouse mini kb-c017', 'unit', 288000, 'images1.png', 50),
(32, 1, 'MIKUSO 4K HDMI CABLE CBL-022', 'deskripsi mikuso 4k hdmi cable cbl-022', 'unit', 66000, 'images1.png', 50),
(33, 1, 'TEKNIX USB TO TYPE-C CBL-834-C PRO', 'deskripsi teknix usb to type-c cbl-834-c pro', 'unit', 55000, 'images1.png', 50),
(34, 1, 'LAPTOP ASUS VIVOBOOK E1404FA-FHD321 AMD RYZEN 3-7320U MIXED BLACK', 'deskripsi laptop asus vivobook e1404fa-fhd321 amd ryzen 3-7320u mixed black', 'unit', 6600000, 'images1.png', 50),
(35, 1, 'LAPTOP ACER A514-56P-59SK 51335U', 'deskripsi laptop acer a514-56p-59sk 51335u', 'unit', 9950000, 'images1.png', 50),
(36, 1, 'OLIKE MICRO SD TF64G 64 GB', 'deskripsi olike micro sd tf64g 64 gb', 'unit', 99000, 'images1.png', 50),
(37, 1, 'OLIKE WIRELESS MINI HOME THEATER S3H', 'deskripsi olike wireless mini home theater s3h', 'unit', 229000, 'images1.png', 50),
(38, 1, 'TEKNIX CHARGER KIT USB TO MICRO CHR-094-M', 'deskripsi teknix charger kit usb to micro chr-094-m', 'unit', 93000, 'images1.png', 50),
(39, 1, 'LAPTOP LENOVO IDEAPAD 3-CVID 256 I3 1215U ARCTIC GREY', 'deskripsi laptop lenovo ideapad 3-cvid 256 i3 1215u arctic grey', 'unit', 6850000, 'images1.png', 50);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jk` varchar(125) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_member` int(11) NOT NULL,
  `recency` int(11) NOT NULL,
  `frequency` int(11) NOT NULL,
  `monetary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_hp`, `jk`, `username`, `password`, `level_member`, `recency`, `frequency`, `monetary`) VALUES
(1, 'A ABIL', 'Kuningan', '089066787654', 'Laki-Laki', 'a_abil', 'a_abil', 1, 89, 5, 988000),
(2, 'A DENDI', 'Kuningan', '089066787654', 'Laki-Laki', 'a_dendi', 'a_dendi', 2, 93, 9, 10738000),
(3, 'A HENDRA', 'Kuningan', '089066787654', 'Laki-Laki', 'a_hendra', 'a_hendra', 3, 128, 1, 112000),
(4, 'A YANTO', 'Kuningan', '089066787654', 'Laki-Laki', 'a_yanto', 'a_yanto', 4, 97, 5, 3907000),
(5, 'ACE', 'Kuningan', '089066787654', 'Laki-Laki', 'ace', 'ace', 4, 89, 7, 7309000),
(6, 'AGUS', 'Kuningan', '089066787654', 'Laki-Laki', 'agus', 'agus', 1, 96, 3, 596000),
(7, 'ANDRI', 'Kuningan', '089066787654', 'Laki-Laki', 'andri', 'andri', 3, 132, 5, 416000),
(8, 'ARIF', 'Kuningan', '089066787654', 'Laki-Laki', 'arif', 'arif', 1, 103, 8, 1129000),
(9, 'ASEP', 'Kuningan', '089066787654', 'Laki-Laki', 'asep', 'asep', 2, 133, 3, 8127000),
(10, 'BAHRIAN', 'Kuningan', '089066787654', 'Laki-Laki', 'bahrian', 'bahrian', 1, 144, 4, 654000),
(11, 'BAI SABARUDIN', 'Kuningan', '089066787654', 'Laki-Laki', 'bai_sabarudin', 'bai_sabarudin', 3, 133, 3, 264000),
(12, 'BAPAK ALI', 'Kuningan', '089066787654', 'Laki-Laki', 'bapak_ali', 'bapak_ali', 1, 96, 10, 1309000),
(13, 'BP ARIFIN', 'Kuningan', '089066787654', 'Laki-Laki', 'bp_arifin', 'bp_arifin', 3, 97, 1, 6000),
(14, 'BP ENDA', 'Kuningan', '089066787654', 'Laki-Laki', 'bp_enda', 'bp_enda', 3, 121, 4, 427000),
(15, 'BU ELI', 'Kuningan', '089066787654', 'Perempuan', 'bu_eli', 'bu_eli', 1, 94, 6, 1307000),
(16, 'BU IMAS', 'Kuningan', '089066787654', 'Perempuan', 'bu_imas', 'bu_imas', 2, 131, 2, 10064000),
(17, 'BU MANTRI ITIT', 'Kuningan', '089066787654', 'Perempuan', 'bu_mantri_itit', 'bu_mantri_itit', 3, 99, 3, 216000),
(18, 'CHELSEA', 'Kuningan', '089066787654', 'Perempuan', 'chelsea', 'chelsea', 3, 128, 4, 446000),
(19, 'CINTA', 'Kuningan', '089066787654', 'Perempuan', 'cinta', 'cinta', 3, 130, 3, 280000),
(20, 'DANI', 'Kuningan', '089066787654', 'Perempuan', 'dani', 'dani', 1, 88, 7, 636000),
(21, 'DINDA', 'Kuningan', '089066787654', 'Perempuan', 'dinda', 'dinda', 3, 93, 5, 514000),
(22, 'EFRIAN', 'Kuningan', '089066787654', 'Laki-Laki', 'efrian', 'efrian', 2, 132, 6, 17486000),
(23, 'EGA', 'Kuningan', '089066787654', 'Laki-Laki', 'ega', 'ega', 3, 144, 4, 526000),
(24, 'ERIS', 'Kuningan', '089066787654', 'Laki-Laki', 'eris', 'eris', 1, 96, 4, 570000),
(25, 'FARHAN', 'Kuningan', '089066787654', 'Laki-Laki', 'farhan', 'farhan', 1, 92, 3, 1038000),
(26, 'HERU', 'Kuningan', '089066787654', 'Laki-Laki', 'heru', 'heru', 1, 102, 5, 1142000),
(27, 'IBU FRAHMI', 'Kuningan', '089066787654', 'Perempuan', 'ibu_frahmi', 'ibu_frahmi', 1, 105, 3, 578000),
(28, 'IBU IIS', 'Kuningan', '089066787654', 'Perempuan', 'ibu_iis', 'ibu_iis', 3, 121, 3, 63000),
(29, 'IBU SUCIHARTI', 'Kuningan', '089066787654', 'Perempuan', 'ibu_suciharti', 'ibu_suciharti', 3, 129, 7, 508000),
(30, 'KANG UDIN', 'Kuningan', '089066787654', 'Laki-Laki', 'kang_udin', 'kang_udin', 1, 87, 4, 684000),
(31, 'KHARISMA ', 'Kuningan', '089066787654', 'Perempuan', 'kharisma_', 'kharisma_', 2, 93, 7, 10836000),
(32, 'M REZA', 'Kuningan', '089066787654', 'Laki-Laki', 'm_reza', 'm_reza', 3, 92, 5, 548000),
(33, 'MAE INDRIYANI', 'Kuningan', '089066787654', 'Perempuan', 'mae_indriyani', 'mae_indriyani', 1, 94, 5, 1163000),
(34, 'MAMAH AYU', 'Kuningan', '089066787654', 'Perempuan', 'mamah_ayu', 'mamah_ayu', 2, 103, 5, 10445000),
(35, 'NIKA', 'Kuningan', '089066787654', 'Perempuan', 'nika', 'nika', 1, 107, 5, 662000),
(36, 'OMAR SONJAYA', 'Kuningan', '089066787654', 'Laki-Laki', 'omar_sonjaya', 'omar_sonjaya', 1, 157, 2, 1860000),
(37, 'P IPIN', 'Kuningan', '089066787654', 'Perempuan', 'p_ipin', 'p_ipin', 3, 98, 2, 401000),
(38, 'PAK ANDRI', 'Kuningan', '089066787654', 'Laki-Laki', 'pak_andri', 'pak_andri', 2, 95, 8, 7793000),
(39, 'PAK APANG', 'Kuningan', '089066787654', 'Laki-Laki', 'pak_apang', 'pak_apang', 4, 123, 3, 5142000),
(40, 'PAK ASEP', 'Kuningan', '089066787654', 'Laki-Laki', 'pak_asep', 'pak_asep', 3, 125, 4, 314000),
(41, 'PAK BIHI EDI', 'Kuningan', '089066787654', 'Laki-Laki', 'pak_bihi_edi', 'pak_bihi_edi', 1, 106, 3, 795000),
(42, 'PAK DANI', 'Kuningan', '089066787654', 'Laki-Laki', 'pak_dani', 'pak_dani', 3, 124, 2, 177000),
(43, 'PAK HAJI IIP', 'Kuningan', '089066787654', 'Laki-Laki', 'pak_haji_iip', 'pak_haji_iip', 4, 91, 3, 5118000),
(44, 'PAK IMAM', 'Kuningan', '089066787654', 'Laki-Laki', 'pak_imam', 'pak_imam', 3, 89, 5, 485000),
(45, 'PAK KARMAD', 'Kuningan', '089066787654', 'Laki-Laki', 'pak_karmad', 'pak_karmad', 3, 111, 4, 331000),
(46, 'RAI ALVIN', 'Kuningan', '089066787654', 'Laki-Laki', 'rai_alvin', 'rai_alvin', 3, 91, 6, 405000),
(47, 'REZA', 'Kuningan', '089066787654', 'Laki-Laki', 'reza', 'reza', 2, 101, 3, 10220000),
(48, 'RINI', 'Kuningan', '089066787654', 'Laki-Laki', 'rini', 'rini', 3, 147, 4, 271000),
(49, 'RIZKI', 'Kuningan', '089066787654', 'Laki-Laki', 'rizki', 'rizki', 1, 84, 4, 1000000),
(50, 'ROBI', 'Kuningan', '089066787654', 'Laki-Laki', 'robi', 'robi', 3, 95, 4, 507000),
(51, 'SITI KHODIJAH', 'Kuningan', '089066787654', 'Perempuan', 'siti_khodijah', 'siti_khodijah', 3, 109, 5, 301000),
(52, 'TATA', 'Kuningan', '089066787654', 'Perempuan', 'tata', 'tata', 1, 88, 6, 1035000),
(53, 'TIA', 'Kuningan', '089066787654', 'Perempuan', 'tia', 'tia', 2, 101, 5, 8216000),
(54, 'ZAHIDIN', 'Kuningan', '089066787654', 'Laki-Laki', 'zahidin', 'zahidin', 3, 133, 4, 233000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_transaksi` varchar(125) NOT NULL,
  `total_transaksi` int(11) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `pengiriman` text NOT NULL,
  `stat_pembayaran` int(11) NOT NULL,
  `stat_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `tgl_transaksi`, `total_transaksi`, `ongkir`, `pengiriman`, `stat_pembayaran`, `stat_transaksi`) VALUES
(1, 36, '2025-07-01', 1800000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(2, 30, '2025-07-01', 100000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(3, 4, '2025-07-01', 72000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(4, 22, '2025-07-02', 6850000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(5, 42, '2025-07-02', 147000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(6, 1, '2025-07-02', 30000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(7, 38, '2025-07-03', 456000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(8, 15, '2025-07-03', 152000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(9, 21, '2025-07-03', 11000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(10, 29, '2025-07-03', 72000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(11, 45, '2025-07-03', 12000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(12, 12, '2025-07-04', 154000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(13, 28, '2025-07-04', 27000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(14, 46, '2025-07-04', 20000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(15, 31, '2025-07-05', 10100000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(16, 23, '2025-07-05', 54000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(17, 2, '2025-07-05', 48000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(18, 8, '2025-07-05', 48000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(19, 29, '2025-07-06', 114000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(20, 22, '2025-07-06', 33000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(21, 38, '2025-07-06', 114000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(22, 8, '2025-07-07', 180000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(23, 30, '2025-07-07', 304000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(24, 20, '2025-07-07', 48000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(25, 53, '2025-07-07', 90000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(26, 38, '2025-07-07', 12000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(27, 40, '2025-07-08', 196000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(28, 18, '2025-07-08', 68000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(29, 15, '2025-07-08', 22000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(30, 12, '2025-07-08', 20000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(31, 34, '2025-07-09', 10100000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(32, 18, '2025-07-09', 258000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(33, 31, '2025-07-09', 33000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(34, 11, '2025-07-09', 22000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(35, 49, '2025-07-09', 22000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(36, 27, '2025-07-10', 299000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(37, 49, '2025-07-10', 750000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(38, 44, '2025-07-10', 114000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(39, 32, '2025-07-10', 38000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(40, 7, '2025-07-10', 33000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(41, 23, '2025-07-11', 360000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(42, 26, '2025-07-11', 720000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(43, 25, '2025-07-11', 22000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(44, 20, '2025-07-11', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(45, 29, '2025-07-11', 30000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(46, 14, '2025-07-12', 158000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(47, 10, '2025-07-12', 114000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(48, 53, '2025-07-12', 90000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(49, 12, '2025-07-12', 11000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(50, 8, '2025-07-13', 324000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(51, 10, '2025-07-13', 224000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(52, 51, '2025-07-13', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(53, 44, '2025-07-13', 11000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(54, 54, '2025-07-13', 11000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(55, 10, '2025-07-14', 304000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(56, 31, '2025-07-14', 165000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(57, 45, '2025-07-14', 18000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(58, 23, '2025-07-14', 72000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(59, 21, '2025-07-14', 76000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(60, 54, '2025-07-15', 120000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(61, 39, '2025-07-15', 5050000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(62, 47, '2025-07-15', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(63, 39, '2025-07-15', 72000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(64, 24, '2025-07-15', 114000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(65, 22, '2025-07-16', 375000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(66, 7, '2025-07-16', 237000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(67, 2, '2025-07-16', 33000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(68, 51, '2025-07-17', 90000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(69, 46, '2025-07-17', 48000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(70, 26, '2025-07-17', 11000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(71, 36, '2025-07-17', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(72, 15, '2025-07-18', 159000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(73, 18, '2025-07-18', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(74, 48, '2025-07-18', 33000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(75, 52, '2025-07-19', 35000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(76, 9, '2025-07-19', 328000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(77, 29, '2025-07-19', 20000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(78, 12, '2025-07-19', 76000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(79, 12, '2025-07-20', 597000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(80, 9, '2025-07-20', 7600000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(81, 29, '2025-07-20', 48000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(82, 43, '2025-07-20', 24000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(83, 50, '2025-07-21', 336000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(84, 35, '2025-07-21', 150000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(85, 2, '2025-07-21', 22000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(86, 38, '2025-07-22', 114000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(87, 35, '2025-07-22', 231000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(88, 48, '2025-07-22', 72000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(89, 46, '2025-07-22', 24000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(90, 1, '2025-07-22', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(91, 49, '2025-07-23', 216000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(92, 16, '2025-07-23', 114000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(93, 41, '2025-07-23', 498000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(94, 52, '2025-07-23', 40000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(95, 24, '2025-07-24', 164000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(96, 48, '2025-07-24', 154000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(97, 15, '2025-07-24', 864000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(98, 28, '2025-07-24', 18000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(99, 7, '2025-07-24', 48000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(100, 53, '2025-07-25', 330000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(101, 53, '2025-07-25', 106000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(102, 44, '2025-07-25', 76000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(103, 5, '2025-07-25', 72000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(104, 33, '2025-07-26', 332000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(105, 31, '2025-07-26', 66000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(106, 12, '2025-07-26', 20000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(107, 32, '2025-07-26', 48000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(108, 19, '2025-07-26', 30000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(109, 12, '2025-07-27', 27000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(110, 48, '2025-07-27', 12000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(111, 1, '2025-07-27', 114000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(112, 44, '2025-07-28', 12000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(113, 50, '2025-07-28', 18000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(114, 22, '2025-07-28', 38000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(115, 7, '2025-07-29', 38000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(116, 20, '2025-07-30', 12000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(117, 23, '2025-07-30', 40000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(118, 51, '2025-07-30', 48000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(119, 10, '2025-07-30', 12000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(120, 31, '2025-07-31', 76000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(121, 40, '2025-07-31', 72000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(122, 25, '2025-08-01', 152000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(123, 24, '2025-08-01', 55000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(124, 19, '2025-08-01', 38000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(125, 35, '2025-08-01', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(126, 14, '2025-08-02', 231000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(127, 21, '2025-08-02', 172000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(128, 46, '2025-08-02', 114000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(129, 45, '2025-08-02', 72000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(130, 5, '2025-08-02', 11000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(131, 5, '2025-08-03', 6600000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(132, 5, '2025-08-03', 54000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(133, 8, '2025-08-03', 30000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(134, 2, '2025-08-04', 154000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(135, 52, '2025-08-04', 304000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(136, 50, '2025-08-04', 33000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(137, 15, '2025-08-05', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(138, 35, '2025-08-05', 172000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(139, 32, '2025-08-05', 18000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(140, 41, '2025-08-06', 165000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(141, 1, '2025-08-06', 328000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(142, 34, '2025-08-06', 20000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(143, 26, '2025-08-07', 272000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(144, 54, '2025-08-07', 90000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(145, 31, '2025-08-08', 231000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(146, 46, '2025-08-08', 35000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(147, 8, '2025-08-08', 30000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(148, 11, '2025-08-09', 224000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(149, 27, '2025-08-09', 199000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(150, 29, '2025-08-09', 24000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(151, 9, '2025-08-10', 199000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(152, 38, '2025-08-10', 100000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(153, 17, '2025-08-10', 90000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(154, 11, '2025-08-10', 18000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(155, 54, '2025-08-10', 12000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(156, 22, '2025-08-11', 10100000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(157, 40, '2025-08-11', 35000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(158, 7, '2025-08-11', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(159, 22, '2025-08-11', 90000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(160, 16, '2025-08-12', 9950000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(161, 34, '2025-08-12', 99000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(162, 47, '2025-08-12', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(163, 6, '2025-08-13', 332000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(164, 19, '2025-08-13', 212000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(165, 38, '2025-08-13', 33000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(166, 20, '2025-08-14', 120000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(167, 29, '2025-08-14', 200000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(168, 52, '2025-08-14', 11000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(169, 2, '2025-08-15', 7600000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(170, 3, '2025-08-15', 112000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(171, 18, '2025-08-15', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(172, 51, '2025-08-15', 48000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(173, 17, '2025-08-15', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(174, 37, '2025-08-16', 308000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(175, 8, '2025-08-16', 220000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(176, 4, '2025-08-16', 6000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(177, 30, '2025-08-16', 22000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(178, 2, '2025-08-17', 20000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(179, 26, '2025-08-17', 33000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(180, 40, '2025-08-18', 11000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(181, 5, '2025-08-18', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(182, 42, '2025-08-19', 30000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(183, 34, '2025-08-19', 90000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(184, 39, '2025-08-20', 20000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(185, 14, '2025-08-21', 18000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(186, 28, '2025-08-22', 18000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(187, 14, '2025-08-22', 20000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(188, 32, '2025-08-23', 48000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(189, 20, '2025-09-01', 120000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(190, 45, '2025-09-01', 229000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(191, 5, '2025-09-02', 114000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(192, 21, '2025-09-02', 90000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(193, 51, '2025-09-03', 55000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(194, 2, '2025-09-03', 1800000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(195, 4, '2025-09-04', 159000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(196, 12, '2025-09-04', 198000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(197, 33, '2025-09-05', 720000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(198, 35, '2025-09-05', 49000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(199, 8, '2025-09-06', 150000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(200, 41, '2025-09-06', 132000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(201, 27, '2025-09-07', 80000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(202, 12, '2025-09-07', 86000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(203, 4, '2025-09-08', 3600000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(204, 43, '2025-09-08', 44000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(205, 8, '2025-09-09', 147000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(206, 34, '2025-09-09', 136000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(207, 26, '2025-09-10', 106000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(208, 2, '2025-09-10', 164000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(209, 47, '2025-09-11', 10100000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(210, 53, '2025-09-11', 7600000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(211, 6, '2025-09-12', 154000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(212, 38, '2025-09-12', 114000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(213, 17, '2025-09-13', 66000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(214, 20, '2025-09-13', 216000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(215, 37, '2025-09-14', 93000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(216, 33, '2025-09-14', 27000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(217, 33, '2025-09-15', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(218, 13, '2025-09-15', 6000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(219, 4, '2025-09-15', 70000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(220, 12, '2025-09-16', 120000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(221, 24, '2025-09-16', 237000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(222, 6, '2025-09-16', 110000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(223, 38, '2025-09-17', 6850000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(224, 50, '2025-09-17', 120000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(225, 33, '2025-09-18', 24000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(226, 15, '2025-09-18', 50000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(227, 21, '2025-09-19', 165000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(228, 31, '2025-09-19', 165000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(229, 2, '2025-09-19', 897000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(230, 32, '2025-09-20', 396000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(231, 25, '2025-09-20', 864000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(232, 46, '2025-09-21', 164000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(233, 43, '2025-09-21', 5050000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(234, 52, '2025-09-21', 597000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(235, 5, '2025-09-23', 398000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(236, 1, '2025-09-23', 456000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(237, 44, '2025-09-23', 272000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(238, 52, '2025-09-24', 48000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(239, 20, '2025-09-24', 60000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(240, 30, '2025-09-25', 258000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4),
(241, 49, '2025-09-28', 12000, 0, 'Kota KUNINGAN Prov. JAWA BARATExpedisi. jneCTC', 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komputer`
--
ALTER TABLE `komputer`
  ADD PRIMARY KEY (`id_komputer`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komputer`
--
ALTER TABLE `komputer`
  MODIFY `id_komputer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

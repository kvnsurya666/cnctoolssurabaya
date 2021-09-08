-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2021 at 11:53 PM
-- Server version: 10.2.40-MariaDB-log-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediasol_cnctool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `username`, `password`, `gambar`) VALUES
(101, 'Ade Prisma Nugraha', 'adeprisma7@gmail.com', 'ade', '$2y$10$/UMYFXjnsFral7KA8W8oDujVTcwFk/tbs2ek2YEWJOARnyxgheMY.', 'ade.jpg'),
(102, 'Kevin Surya Perdana', 'kevinz_proJimin@gmail.com', 'kevin', '$2y$10$Z7L00t3mPwQrBRdWqY0NnOKh0kmeCmJFyjUR25q84B49t.1Bnkqiy', 'kevin.jpg'),
(104, 'Rachmansyah Anessa Putra', 'rachman_alucard@gmail.com', 'rachman', '$2y$10$4BQ665GXNiYeVC1PNhpSzuu7cx82znoGS86d8xPlpwihWlMYOEr2m', 'rachman.jpeg'),
(105, 'Ramdhani Kurniawan', 'ramdhani_balmond@gmail.com', 'ramdhani', '$2y$10$4BQ665GXNiYeVC1PNhpSzuu7cx82znoGS86d8xPlpwihWlMYOEr2m', 'ramdhani.jpg'),
(106, 'Ilyas', 'ilyas@gmail.com', 'Ilyas', '$2y$10$/UMYFXjnsFral7KA8W8oDujVTcwFk/tbs2ek2YEWJOARnyxgheMY.', 'nigga-david.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kode_kategori` int(1) NOT NULL,
  `kode_model` int(1) NOT NULL,
  `kode_merk` int(3) NOT NULL,
  `gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `kode_kategori`, `kode_model`, `kode_merk`, `gambar`) VALUES
(1000, 'Mesin bubut J&W CK6140', 0, 4, 5, 'ae38136838ad6a3c87e570917cbda76b.PNG'),
(1001, 'Mesin Tekuk Plate', 0, 5, 5, '3670fdccbc1dc6f2d2a7ba317f88dc5e.png'),
(1002, 'Mesin Potong J&W', 0, 5, 5, '3163d797f2185c1dc62ffd400bf6ffbe.png'),
(1003, 'Mesin CNC Milling VMC-320', 0, 5, 5, '2c8347ab198bcea5ef14b61c5e239a9a.png'),
(1004, 'Mesin Potong Dixon', 0, 5, 3, '9ca276a563585091215448cf06fd8cd2.jpeg'),
(1005, 'Mesin CNC Milling XH7125', 0, 5, 6, 'e2cd4963fc9fa4b933d6c5eeceaa4f4f.png'),
(1006, 'Mesin CNC Bubut CK6150A', 0, 4, 6, '548bcfae54bcfd07d7cc8556abdeb9c8.png'),
(1007, 'Universal Milling / Drilling Machine XZ6350ZS', 0, 5, 6, 'f93bf69ca755285a6c3683db6393b783.png'),
(2000, 'Gunting', 1, 1, 1, '84c42ce0fbb29ff11884219c8ad0a5de.png'),
(2001, 'Magnetic V Block', 1, 0, 7, 'fe6bebfec519ca030669ffdeb78d270c.png'),
(2002, '3 Jaw Scroll Chucks D1 Camlock Dirtect Mounting', 1, 0, 7, '5493e9a607dedcb1e26865c71a42b808.png'),
(2003, '4 Jaw Power Self Centering Chucks', 1, 5, 7, '0466f57dea3836e6536902574f7ff4c8.jpg'),
(2004, 'Horizontal / Vertical Rotary Table', 1, 0, 7, '1682925c468da06fae686b67b412e658.jpg'),
(2005, '4 Jaw Self Centering Lathe Chucks K12-160', 1, 2, 0, '00e453ce5eb15fee82133a6895ee1bdd.jpg'),
(2006, '3 Jaw Self Centering Lathe Chucks K11-160', 1, 2, 0, '4dc533f00fbf2a0ff382f4121b0fb401.jpg'),
(2007, 'Dustproof Halogen Lamp Beam - Water Proof', 1, 0, 7, '4a84b94b80f5853f4942329862083173.jpeg'),
(2008, 'Magnetic Base With Steel Nozzle', 1, 0, 7, '5d0cb2b7a1eb02bcfe4c8c46fe6b8dd5.jpg'),
(2009, 'Precision Universal Angle Plate', 1, 0, 7, '3cfd22dd4fe4cff503b1504034a24de4.jpg'),
(2010, 'Meteran Push botton', 1, 1, 1, '5b677a2988a9be2d1bb0563c1cd13859.png'),
(2011, 'Gergaji', 1, 1, 1, '5c4258582e9819044801957aeb3abc0d.png'),
(2012, 'Tools Set', 1, 1, 1, '264ff307b6f3eb1729250f575a31b26b.png'),
(2013, 'Kunci Inggris', 1, 1, 1, 'd912989de0649866c9803a6400397944.png'),
(2014, 'Obeng Cebol', 1, 1, 1, '3170e80435be899847a2b6c59f5bb5a3.png'),
(2015, 'Solder', 1, 1, 1, '531b9c963a83faa6b98f61d6bffbc9bc.png'),
(3000, 'Jasa Repair Bubut Manual', 2, 5, 9, 'f59bc4721c4975ccabaf647d4a93d6fb.jpeg'),
(3001, 'Repair Bubut Manual', 2, 3, 9, '4e783d794bbc025a94c624652c217817.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` int(1) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `nama_kategori`) VALUES
(0, 'industrial'),
(1, 'aksesoris'),
(2, 'perbaikan');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `kode_merk` int(3) NOT NULL,
  `nama_merk` varchar(100) NOT NULL,
  `gambar_merk` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`kode_merk`, `nama_merk`, `gambar_merk`) VALUES
(0, 'san ou', 'logo san_ou.png'),
(1, 'bosi tools', 'logobositools.png'),
(2, 'charles bubut', 'logocharlesbubut.png'),
(3, 'dixon', 'logodixon.png'),
(4, 'full mark', 'logofullmark.png'),
(5, 'j&w', 'logoj&w.jpg'),
(6, 'weida', 'logomesinbubutweida.png'),
(7, 'vertex', 'logovertex.png'),
(8, 'lainnya', 'transparan.jpg'),
(9, 'CBM', 'logocbm.png');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `kode_model` int(1) NOT NULL,
  `nama_model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`kode_model`, `nama_model`) VALUES
(0, 'vertex'),
(1, 'bosi'),
(2, 'san ou'),
(3, 'mesin bubut manual'),
(4, 'mesin bubut cnc'),
(5, 'Lainnya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `nama_sepatu` (`nama_barang`),
  ADD KEY `kode_kategori` (`kode_kategori`),
  ADD KEY `kode_model` (`kode_model`),
  ADD KEY `fk_foreign_kode_merk` (`kode_merk`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`kode_merk`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`kode_model`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori` (`kode_kategori`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori` (`kode_kategori`),
  ADD CONSTRAINT `barang_ibfk_3` FOREIGN KEY (`kode_model`) REFERENCES `model` (`kode_model`),
  ADD CONSTRAINT `fk_foreign_kode_merk` FOREIGN KEY (`kode_merk`) REFERENCES `merk` (`kode_merk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

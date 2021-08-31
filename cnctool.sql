-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2021 pada 03.11
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cnctool`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
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
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `username`, `password`, `gambar`) VALUES
(101, 'Ade Prisma Nugraha', 'adeprisma7@gmail.com', 'ade', '$2y$10$/UMYFXjnsFral7KA8W8oDujVTcwFk/tbs2ek2YEWJOARnyxgheMY.', 'ade.jpg'),
(102, 'Kevin Surya Perdana', 'kevinz_proJimin@gmail.com', 'kevin', '$2y$10$Z7L00t3mPwQrBRdWqY0NnOKh0kmeCmJFyjUR25q84B49t.1Bnkqiy', 'kevin.jpg'),
(103, 'Widyanjing Satrianjing Utamanjing', 'widyabrewok@gmail.com', 'widya1', '$2y$10$4BQ665GXNiYeVC1PNhpSzuu7cx82znoGS86d8xPlpwihWlMYOEr2m', 'widya.jpg'),
(104, 'Rachmansyah Anessa Putra', 'rachman_alucard@gmail.com', 'rachman', '$2y$10$4BQ665GXNiYeVC1PNhpSzuu7cx82znoGS86d8xPlpwihWlMYOEr2m', 'rachman.jpeg'),
(105, 'Ramdhani Kurniawan', 'ramdhani_balmond@gmail.com', 'ramdhani', '$2y$10$4BQ665GXNiYeVC1PNhpSzuu7cx82znoGS86d8xPlpwihWlMYOEr2m', 'ramdhani.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_sepatu` int(11) DEFAULT NULL,
  `kode_warna` int(11) NOT NULL,
  `nama_warna` varchar(50) NOT NULL,
  `gambar1` varchar(256) DEFAULT NULL,
  `gambar2` varchar(256) DEFAULT NULL,
  `gambar3` varchar(256) DEFAULT NULL,
  `gambar4` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` int(1) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `nama_kategori`) VALUES
(0, 'kids'),
(1, 'wanita'),
(2, 'pria');

-- --------------------------------------------------------

--
-- Struktur dari tabel `model`
--

CREATE TABLE `model` (
  `kode_model` int(1) NOT NULL,
  `nama_model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `model`
--

INSERT INTO `model` (`kode_model`, `nama_model`) VALUES
(0, 'Sport'),
(1, 'LAMPU'),
(2, 'BTS'),
(3, 'Casual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sepatu`
--

CREATE TABLE `sepatu` (
  `id_sepatu` int(11) NOT NULL,
  `nama_sepatu` varchar(50) NOT NULL,
  `kode_kategori` int(1) NOT NULL,
  `kode_model` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `warna`
--

CREATE TABLE `warna` (
  `kode_warna` int(11) NOT NULL,
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warna`
--

INSERT INTO `warna` (`kode_warna`, `kategori`) VALUES
(0, 'hitam'),
(1, 'merah'),
(2, 'abu'),
(3, 'hijau'),
(4, 'putih'),
(5, 'biru'),
(6, 'pirus'),
(7, 'kuning'),
(8, 'coklat'),
(9, 'ungu'),
(10, 'toska'),
(11, 'magenta'),
(12, 'oranye');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_sepatu` (`id_sepatu`),
  ADD KEY `kode_warna` (`kode_warna`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indeks untuk tabel `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`kode_model`);

--
-- Indeks untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id_sepatu`),
  ADD UNIQUE KEY `nama_sepatu` (`nama_sepatu`),
  ADD KEY `kode_kategori` (`kode_kategori`),
  ADD KEY `kode_model` (`kode_model`);

--
-- Indeks untuk tabel `warna`
--
ALTER TABLE `warna`
  ADD PRIMARY KEY (`kode_warna`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`id_sepatu`) REFERENCES `sepatu` (`id_sepatu`),
  ADD CONSTRAINT `gambar_ibfk_2` FOREIGN KEY (`kode_warna`) REFERENCES `warna` (`kode_warna`);

--
-- Ketidakleluasaan untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  ADD CONSTRAINT `sepatu_ibfk_1` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori` (`kode_kategori`),
  ADD CONSTRAINT `sepatu_ibfk_2` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori` (`kode_kategori`),
  ADD CONSTRAINT `sepatu_ibfk_3` FOREIGN KEY (`kode_model`) REFERENCES `model` (`kode_model`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

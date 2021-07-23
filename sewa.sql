-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2021 pada 11.54
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` double NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `nomor` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`, `nomor`, `email`, `alamat`, `foto`) VALUES
(1, 'randi', '123', '085156061121', 'randykelvin26@gmail.com', 'Kp.seuseupan no.70 Desa Cicangkang Hilir', 'assets/images/admin/randi.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangdisewa`
--

CREATE TABLE `barangdisewa` (
  `id` int(11) NOT NULL,
  `idP` varchar(30) DEFAULT NULL,
  `idB` varchar(30) DEFAULT NULL,
  `banyak` double DEFAULT NULL,
  `stat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barangdisewa`
--

INSERT INTO `barangdisewa` (`id`, `idP`, `idB`, `banyak`, `stat`) VALUES
(1, '1', '2', 3, 0),
(2, '2', '3', 5, 0),
(3, '3', '4', 7, 0),
(4, '4', '1', 12, 0),
(9, '7', '2', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangsewa`
--

CREATE TABLE `barangsewa` (
  `id` double NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `banyak` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barangsewa`
--

INSERT INTO `barangsewa` (`id`, `nama`, `banyak`) VALUES
(1, 'Matras', 41),
(2, 'Tenda', 19),
(3, 'Sleeping Bag', 32),
(4, 'Alat Masak Portable', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewa`
--

CREATE TABLE `penyewa` (
  `id` double NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nomor` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `identitas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyewa`
--

INSERT INTO `penyewa` (`id`, `nama`, `nomor`, `alamat`, `identitas`) VALUES
(1, 'Muhamad Rizki Arifin', '083746274645', 'Jl Haji Junaedi No 4 Palmerah', 'assets/images/penyewa/muhamad.jpg'),
(2, 'Ucok Firdiansyah', '087736437483', 'Jalan Pajajaran No.40 Kota Cimahi', 'assets/images/penyewa/ucok.jpg'),
(3, 'Rozak Rizki Akbar', '083625467365', 'Cililin No.72 Pasar Baru Kebayoran', 'assets/images/penyewa/rozak.jpg'),
(4, 'Abdul Mutolib', '087362636451', 'Jalan Cikadu No.27 Desa Cililin', 'assets/images/penyewa/abdul.jpg'),
(5, 'Romi Kusuma bakti', '083746274636', 'Sanghyang heleut No.48 Cipongkor', 'assets/images/penyewa/romi.jpg'),
(6, 'Danil Fauzan', '087354725463', 'Kp seuseupan No.70 Desa Cicangkang Hilir', 'assets/images/penyewa/danil.jpg'),
(7, 'Husnul Zaenal Arifin', '083957483868', 'Jalan perjuangan no.70 Kota Cimahi Bandung Barat', 'assets/images/penyewa/muhamad.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `idP` double DEFAULT NULL,
  `idB` double DEFAULT NULL,
  `banyak` double DEFAULT NULL,
  `stat` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `request`
--

INSERT INTO `request` (`id`, `idP`, `idB`, `banyak`, `stat`) VALUES
(1, 1, 1, 1, 0),
(4, 6, 4, 2, 0),
(5, 3, 3, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barangdisewa`
--
ALTER TABLE `barangdisewa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barangsewa`
--
ALTER TABLE `barangsewa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barangdisewa`
--
ALTER TABLE `barangdisewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `barangsewa`
--
ALTER TABLE `barangsewa`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

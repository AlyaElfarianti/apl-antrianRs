-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Nov 2024 pada 03.26
-- Versi server: 8.0.17
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `nomor_antrian` int(11) NOT NULL,
  `waktu_kedatangan` datetime NOT NULL,
  `status` enum('belum dilayani','selesai') DEFAULT 'belum dilayani'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id`, `nama_pasien`, `nomor_antrian`, `waktu_kedatangan`, `status`) VALUES
(23, 'anita', 2, '2024-11-16 16:22:00', 'selesai'),
(24, 'nia', 3, '2024-11-16 16:22:00', 'selesai'),
(26, 'nata', 5, '2024-11-17 12:53:00', 'selesai'),
(27, 'duta', 6, '2024-11-17 16:30:00', 'belum dilayani');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbusers`
--

CREATE TABLE `tbusers` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbusers`
--

INSERT INTO `tbusers` (`id`, `username`, `email`) VALUES
(24, 'alya', 'trea@gmail.com'),
(27, 'budi', 'budi56@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

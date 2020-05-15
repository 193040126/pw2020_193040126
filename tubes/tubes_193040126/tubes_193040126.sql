-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2020 pada 10.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040126`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `tahun_rilis` int(4) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `elektronik`
--

INSERT INTO `elektronik` (`id`, `foto`, `merk`, `tipe`, `tahun_rilis`, `harga`) VALUES
(2, 'ps4.jpg', 'SONY', 'PS4', 2018, 4299000),
(3, 'acerpre1.jpg', 'ACER', 'TRITON 300 PT315-51', 2018, 14999000),
(4, 'asusrog.jpg', 'ASUS', 'ROG STRIX G531GT', 2018, 14499000),
(5, 'cuci.jpg', 'SAMSUNG', 'WA70H4000 SG', 2018, 2399000),
(6, 'acpanas.jpg', 'PANASONIC', 'AC CS-RS9UKP', 2017, 1950000),
(7, 'kulkas.jpg', 'POLYTRON', 'BELLEZA', 2018, 2750000),
(8, 'tvchanghong.jpg', 'CHANGHONG', 'CHANGHONG 32 INCH L324H4', 2017, 2000000),
(9, 'redminote8.jpg', 'XIAOMI', 'REDMI NOTE 8', 2019, 2299000),
(10, 'ip11.jpeg', 'APPLE', 'IPHONE 11', 2019, 13499000),
(20, 'ps5.jpg', 'SONY', 'PS5', 2020, 7000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(5, 'asep', '$2y$10$G9.vZx5TlPLTFeHpVynn6.8QLac4Ge1pQ2s0w0uogy5nlUL64/XOq'),
(6, '123', '$2y$10$yq6o9.5xvVEd9XNZKOQoq.7.Nk3aUMlde5670m5liGMt3rGwvxkxG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

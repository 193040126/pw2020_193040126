-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 12:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

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
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `tahun rilis` int(4) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `foto`, `merk`, `tipe`, `tahun rilis`, `harga`) VALUES
(1, 'ps5.jpg', 'SONY', 'PS5', 2020, 7000000),
(2, 'ps4.jpg', 'SONY', 'PS4', 2018, 4299000),
(3, 'acerpre.jpg', 'ACER', 'TRITON 300 PT315-51', 2018, 14999000),
(4, 'asusrog.jpg', 'ASUS', 'ROG STRIX G531GT', 2018, 14499000),
(5, 'cuci.jpg', 'SAMSUNG', 'WA70H4000 SG', 2018, 2399000),
(6, 'acpanas.jpg', 'PANASONIC', 'AC CS-RS9UKP', 2017, 1950000),
(7, 'kulkas.jpg', 'POLYTRON', 'BELLEZA', 2018, 2750000),
(8, 'tvchanghong.jpg', 'CHANGHONG', 'CHANGHONG 32 INCH L324H4', 2017, 2000000),
(9, 'redminote8.jpg', 'XIAOMI', 'REDMI NOTE 8', 2019, 2299000),
(10, 'ip11.jpg', 'APPLE', 'IPHONE 11', 2019, 13499000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

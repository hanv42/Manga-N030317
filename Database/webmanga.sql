-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 06:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webmanga`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `matkhau`) VALUES
(0, 'admin@wru.vn', '123456'),
(1, 'hanv42@wru.vn', '123456'),
(2, 'binhnh32@wru.vn', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucmanga`
--

CREATE TABLE `danhmucmanga` (
  `id_dm` int(10) NOT NULL,
  `ten_dm` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmucmanga`
--

INSERT INTO `danhmucmanga` (`id_dm`, `ten_dm`) VALUES
(1, 'Action'),
(2, 'Romance'),
(3, 'Drama'),
(4, 'Comedy'),
(5, 'Adventure'),
(6, 'Mystery'),
(7, 'Fiction'),
(8, 'Tragedy');

-- --------------------------------------------------------

--
-- Table structure for table `manga`
--

CREATE TABLE `manga` (
  `id_m` int(10) NOT NULL,
  `ten_m` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_m` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinh_trang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dm` int(10) NOT NULL,
  `noi_bat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`id_m`, `ten_m`, `anh_m`, `tinh_trang`, `id_dm`, `noi_bat`) VALUES
(1, 'Dragon ball', 'dragonball.jpg', 'Đã hoàn thành', 1, 1),
(2, 'Doraemon', 'doraemon.jpg', 'Đã hoàn thành', 1, 1),
(3, 'Naruto', 'naruto.jpg', 'Đã hoàn thành', 1, 1),
(4, 'One piece', 'one piece.jpg', 'Đã hoàn thành', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmucmanga`
--
ALTER TABLE `danhmucmanga`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id_m`),
  ADD KEY `id_dm` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

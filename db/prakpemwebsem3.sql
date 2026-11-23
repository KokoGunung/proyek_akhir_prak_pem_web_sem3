-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2026 at 12:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakpemwebsem3`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin123@email.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `jalur` varchar(2) NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `jalur`, `waktu`) VALUES
(1, 'PY', '05:00:00'),
(2, 'PY', '06:05:00'),
(3, 'PY', '07:15:00'),
(4, 'PY', '08:56:00'),
(5, 'PY', '10:40:00'),
(6, 'PY', '12:50:00'),
(7, 'PY', '13:43:00'),
(8, 'PY', '15:35:00'),
(9, 'PY', '16:35:00'),
(10, 'PY', '18:05:00'),
(11, 'PY', '19:45:00'),
(12, 'PY', '20:42:00'),
(13, 'YP', '05:05:00'),
(14, 'YP', '06:00:00'),
(15, 'YP', '07:05:00'),
(16, 'YP', '07:54:00'),
(17, 'YP', '08:49:00'),
(18, 'YP', '10:56:00'),
(19, 'YP', '12:07:00'),
(20, 'YP', '13:57:00'),
(21, 'YP', '15:01:00'),
(22, 'YP', '16:10:00'),
(23, 'YP', '17:35:00'),
(24, 'YP', '18:08:00'),
(25, 'YP', '20:15:00'),
(26, 'YP', '21:25:00'),
(27, 'YP', '22:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `stasiun`
--

CREATE TABLE `stasiun` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stasiun`
--

INSERT INTO `stasiun` (`id`, `nama`) VALUES
(1, 'Yogyakarta'),
(2, 'Lempuyangan'),
(3, 'Maguwo'),
(4, 'Brambanan'),
(5, 'Srowot'),
(6, 'Klaten'),
(7, 'Ceper'),
(8, 'Delanggu'),
(9, 'Gawok'),
(10, 'Purwosari'),
(11, 'Solo Balapan'),
(12, 'Solo Jebres'),
(13, 'Palur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stasiun`
--
ALTER TABLE `stasiun`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

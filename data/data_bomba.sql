-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 05:56 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_bomba`
--

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `kid` int(11) NOT NULL,
  `tajukkursus` varchar(150) DEFAULT NULL,
  `tmula` varchar(50) DEFAULT NULL,
  `takhir` varchar(50) DEFAULT NULL,
  `tempat` varchar(150) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `hari` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`kid`, `tajukkursus`, `tmula`, `takhir`, `tempat`, `tahun`, `hari`) VALUES
(1, 'ee', '12/12/12', '12/12/12', 'kedah', '2020', 4),
(2, 'test', '12/3/12', '12/3/12', 'ererer', '2017', 2),
(3, 'ffg', '12/3/12', '12/3/12', 'fgfg', '2017', 4),
(4, 'dfdf', '12/3/12', '12/3/12', 'dfdfdf', '2017', 3),
(5, 'test', '12/3/12', '12/3/12', 'fgfg', '2017', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kursusattn`
--

CREATE TABLE `kursusattn` (
  `atid` int(11) NOT NULL,
  `one` int(11) DEFAULT NULL,
  `two` int(11) DEFAULT NULL,
  `three` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT NULL,
  `five` int(11) DEFAULT NULL,
  `six` int(11) DEFAULT NULL,
  `seven` int(11) DEFAULT NULL,
  `eight` int(11) DEFAULT NULL,
  `kursusid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usersbomba`
--

CREATE TABLE `usersbomba` (
  `id` int(11) NOT NULL,
  `nobadan` varchar(150) DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `nokp` varchar(150) DEFAULT NULL,
  `jawatan` varchar(150) DEFAULT NULL,
  `gredjawatan` varchar(150) DEFAULT NULL,
  `unitsokongan` varchar(150) DEFAULT NULL,
  `groupUnit` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersbomba`
--

INSERT INTO `usersbomba` (`id`, `nobadan`, `gambar`, `nama`, `nokp`, `jawatan`, `gredjawatan`, `unitsokongan`, `groupUnit`) VALUES
(1, '34333', 'default.jpg', 'test', '890214-02-5463', 'Penolong Jurutera', 'w223', 'P & P', '2'),
(2, 'dfdf', 'default.jpg', 'test', '931218-06-5444', 'd', 'w223', 'P & P', '2'),
(3, 'dfdf', 'default.jpg', 'test dfgfgfgfg', '931218-06-5444', 'd', 'w223', 'P & P', '2'),
(4, 'dfdfdffdf', 'default.jpg', 'ddfdfdfdf', '931218-06-5444', 'dfdfdf', 'dffdfdf', 'Sokongan 2', '2'),
(5, 'fghghgh', 'default.jpg', 'ghghhgh', '655555', 'ghghgh', 'ghghgh', 'Sokongan 1', '1'),
(6, 'fgfgfg', 'default.jpg', 'fggfg', '931218-06-5444', 'fgfgfg', 'gfgfg', 'Sokongan 1', '2'),
(7, 'ghghgh', 'default.jpg', 'ghhgh', '890214-02-5463', 'ghghgh', 'ghghgh', 'P & P', '1'),
(8, '34333', 'default.jpg', 'fgfgfg', '890214-02-5463', 'ghghgh', 'ghghgh', 'Sokongan 2', '2'),
(9, 'dffdf', 'default.jpg', 'dfdfdf', '931218-06-5444', 'ghghgh', 'ghghgh', 'Sokongan 1', '1'),
(10, 'dfdfdffdf', 'default.jpg', 'fgfgfg', 'fgfgfg', 'ghghgh', 'ghghgh', 'Sokongan 1', '1'),
(11, 'dfdfdffdf', 'default.jpg', 'fggfg', 'fgfgfg', 'Penolong Jurutera', 'ghghgh', 'Sokongan 1', '2'),
(12, '34333', 'default.jpg', 'dfgfgfg', '890214-02-5463', 'd', 'ghghgh', 'Sokongan 1', '3'),
(13, '34333', 'galaxy_stream_constellations_133098_1600x1200.jpg', 'dfgfgfg', '890214-02-5463', 'd', 'ghghgh', 'Sokongan 1', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`kid`);

--
-- Indexes for table `kursusattn`
--
ALTER TABLE `kursusattn`
  ADD PRIMARY KEY (`atid`);

--
-- Indexes for table `usersbomba`
--
ALTER TABLE `usersbomba`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `kid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kursusattn`
--
ALTER TABLE `kursusattn`
  MODIFY `atid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usersbomba`
--
ALTER TABLE `usersbomba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

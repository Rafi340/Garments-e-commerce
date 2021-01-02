-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 11:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garments`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_login`
--

CREATE TABLE `a_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a_login`
--

INSERT INTO `a_login` (`id`, `username`, `password`) VALUES
(11, 'rownok', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `b_login`
--

CREATE TABLE `b_login` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_login`
--

INSERT INTO `b_login` (`id`, `Name`, `username`, `Email`, `password`) VALUES
(1, 'rrr', 'rr', 'rrr', 'rr'),
(2, 'r', 'r', 'r', 'r'),
(3, 'q', 'q', 'q', 'q'),
(4, 'ii', 'io', 'io', 'io'),
(5, 'op', 'op', 'op', 'op');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_login`
--
ALTER TABLE `a_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_login`
--
ALTER TABLE `b_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_login`
--
ALTER TABLE `a_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `b_login`
--
ALTER TABLE `b_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

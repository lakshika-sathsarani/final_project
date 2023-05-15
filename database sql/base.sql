-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 02:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `base`
--

CREATE TABLE `base` (
  `id` int(50) NOT NULL,
  `ifsno` varchar(100) NOT NULL,
  `tireno` int(100) NOT NULL,
  `starttime` varchar(50) NOT NULL,
  `epfno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `base`
--

INSERT INTO `base` (`id`, `ifsno`, `tireno`, `starttime`, `epfno`) VALUES
(2, 'kj856', 856, '18:39:41', 'hj4563'),
(0, '4123455', 145236, '13:54:05', 'ABC1234'),
(1, '123as', 459856, '18:35:08', 'ghj7410');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `base`
--
ALTER TABLE `base`
  ADD PRIMARY KEY (`tireno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `base`
--
ALTER TABLE `base`
  MODIFY `tireno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=459856500;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

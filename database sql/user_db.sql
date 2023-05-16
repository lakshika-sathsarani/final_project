-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 12:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(50) NOT NULL,
  `epfno` varchar(100) NOT NULL,
  `starttime` datetime NOT NULL,
  `finishtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `epfno`, `starttime`, `finishtime`) VALUES
(1, 'ZCM4528745', '2023-04-04 18:07:00', '2023-04-04 19:09:00'),
(2, 'BOC4563987', '2023-04-04 18:29:00', '2023-04-05 18:29:00');

--
-- Indexes for dumped tables
--

--
-- Table structure for table `base`
--

CREATE TABLE `base` (
  `id` int(50) NOT NULL,
  `ifsno` varchar(100) NOT NULL,
  `tireno` varchar(100) NOT NULL,
  `starttime` varchar(50) NOT NULL,
  `epfno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `base`
--

INSERT INTO `base` (`id`, `ifsno`, `tireno`, `starttime`, `epfno`) VALUES
(1, '123as', '0', '18:35:08', 'ghj7410'),
(2, 'kj856', '0', '18:39:41', 'hj4563'),
(3, '4123455', '0', '13:54:05', 'ABC1234'),
(4, '', '0', '2023-02-03T14:55', '2'),
(7, '', '0', '2023-04-03T15:02', '2'),
(8, '1', '1', '2023-04-03T15:06', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cushion`
--

CREATE TABLE `cushion` (
  `id` int(20) NOT NULL,
  `ifsno` varchar(100) NOT NULL,
  `tireno` varchar(100) NOT NULL,
  `starttime` datetime NOT NULL,
  `epfno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cushion`
--

INSERT INTO `cushion` (`id`, `ifsno`, `tireno`, `starttime`, `epfno`) VALUES
(1, '1', '1', '2023-04-03 15:37:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tread`
--

CREATE TABLE `tread` (
  `id` int(100) NOT NULL,
  `ifsno` varchar(100) NOT NULL,
  `tireno` varchar(100) NOT NULL,
  `finishtime` datetime NOT NULL,
  `epfno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tread`
--

INSERT INTO `tread` (`id`, `ifsno`, `tireno`, `finishtime`, `epfno`) VALUES
(1, '1', '1', '2023-04-03 15:37:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`name`, `email`, `password`, `cpassword`, `user_type`) VALUES
('jone', 'jone@gmail.com', '15c70ebb880b7cfdae8885cee11ce3ef', '', 'user'),
('lakshika', 'lakshika.sp01@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '', 'admin'),
('mark', 'mark@gmail.com', 'ea82410c7a9991816b5eeeebe195e20a', '', 'user'),
('jone', 'jone@gmail.com', 'ea2889f76cfd2275f06e56321d931eb0', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `base`
--
ALTER TABLE `base`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cushion`
--
ALTER TABLE `cushion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- Indexes for table `tread`
--
ALTER TABLE `tread`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `base`
--
ALTER TABLE `base`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cushion`
--
ALTER TABLE `cushion`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tread`
--
ALTER TABLE `tread`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

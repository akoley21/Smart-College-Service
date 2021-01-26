-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 08:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `canteen`
--

CREATE TABLE `canteen` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `item` varchar(30) NOT NULL,
  `description` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `canteen`
--

INSERT INTO `canteen` (`id`, `name`, `phone`, `item`, `description`) VALUES
(1, 'ARIJIT KOLEY', '9038659240', '', 'dadasd'),
(3, 'ARIJIT KOLEY', '9038659240', '', 'SFSEFSF'),
(4, 'ARIJIT KOLEY', '9038659240', '', 'dadasd');

-- --------------------------------------------------------

--
-- Table structure for table `clean`
--

CREATE TABLE `clean` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uniroll` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `room` varchar(3) NOT NULL,
  `des` varchar(50) NOT NULL,
  `dtim` varchar(90) NOT NULL,
  `req` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clean`
--

INSERT INTO `clean` (`id`, `name`, `uniroll`, `contact`, `room`, `des`, `dtim`, `req`) VALUES
(10, 'ARIJIT KOLEY', '20600117051', '9038659240', '23f', 'cleaning', '04-11-2020 12:53', 'pending'),
(11, 'ARIJIT KOLEY', '20600117051', '9038659240', '52', 'desk', '04-11-2020 12:56', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `lnf`
--

CREATE TABLE `lnf` (
  `id` int(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `img` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lnf`
--

INSERT INTO `lnf` (`id`, `name`, `phone`, `description`, `img`) VALUES
(9, 'ARIJIT KOLEY', '9038659240', 'image', 'UD.png'),
(10, 'ARIJIT KOLEY', '9038659240', 'mobile', 'IMG_20200122_200253.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `uniroll` varchar(11) NOT NULL,
  `pass` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `phone`, `uniroll`, `pass`) VALUES
(1, 'ARIJIT KOLEY', 'koleyarijit12@gmail.com', '9038659240', '20600117051', 123456),
(2, 'ARIJIT', 'koleyarijit12@gmail.com', '9038659240', '20600117051', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `up`
--

CREATE TABLE `up` (
  `id` int(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `img` varchar(90) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `up`
--

INSERT INTO `up` (`id`, `description`, `img`, `date`) VALUES
(4, 'DATA SCIENCE', 'CV.pdf', '04-11-2020'),
(5, 'result out', 'CamScanner 10-18-2020 23.34.08_7.jpg', '04-11-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canteen`
--
ALTER TABLE `canteen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clean`
--
ALTER TABLE `clean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lnf`
--
ALTER TABLE `lnf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `up`
--
ALTER TABLE `up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canteen`
--
ALTER TABLE `canteen`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clean`
--
ALTER TABLE `clean`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lnf`
--
ALTER TABLE `lnf`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `up`
--
ALTER TABLE `up`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2016 at 03:36 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` tinyint(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `time`) VALUES
(1, 'Kamrul Islam', 'babulhmd@gmail.com', 123654, '2016-03-22 13:06:44'),
(2, 'Abu Huraira Bin Aman', 'shamsbd71@gmail.com', 546987, '2016-03-22 13:06:44'),
(3, 'Kamrul Islam2', 'babulhmd@gmail.com', 123654, '2016-03-22 13:06:53'),
(4, 'Abu Huraira Bin Aman', 'shamsbd71@gmail.com', 546987, '2016-03-22 13:06:53'),
(5, 'Kamrul Islam', 'babulhmd@gmail.com', 123654, '2016-03-22 13:07:04'),
(6, 'Abu Huraira Bin Aman', 'shamsbd71@gmail.com', 546987, '2016-03-22 13:07:04'),
(7, 'Kamrul Islam', 'babulhmd@gmail.com', 123654, '2016-03-22 13:07:07'),
(8, 'Abu Huraira Bin Aman', 'shamsbd71@gmail.com', 546987, '2016-03-22 13:07:07'),
(9, 'Kamrul Islam', 'babulhmd@gmail.com', 123654, '2016-03-22 13:07:10'),
(10, 'Abu Huraira Bin Aman', 'shamsbd71@gmail.com', 546987, '2016-03-22 13:07:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` tinyint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

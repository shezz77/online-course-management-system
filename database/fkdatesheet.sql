-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2017 at 10:27 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fkdatesheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `bcom`
--

CREATE TABLE `bcom` (
  `id` int(11) NOT NULL,
  `subjects` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(222) NOT NULL,
  `place` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bcom`
--

INSERT INTO `bcom` (`id`, `subjects`, `date`, `time`, `place`) VALUES
(1, 'English', '2017-01-18', '11:00', 'High school DGK'),
(2, 'Urdu', '2017-01-21', '11:00', 'High School DGK'),
(3, 'Accounting', '2017-01-18', '11:00', 'High school DGK'),
(4, 'Audit', '2017-01-18', '11:00', 'High school DGK'),
(5, 'Banking', '2017-01-18', '11:00', 'High school DGK');

-- --------------------------------------------------------

--
-- Table structure for table `dcom`
--

CREATE TABLE `dcom` (
  `id` int(11) NOT NULL,
  `subjects` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(222) NOT NULL,
  `place` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dcom`
--

INSERT INTO `dcom` (`id`, `subjects`, `date`, `time`, `place`) VALUES
(1, 'Short Hand', '2017-01-12', '11:00', 'PS school DGK'),
(2, 'Commerce', '2017-01-14', '11:00', 'PS School DGK'),
(3, 'Economics', '2017-01-19', '11:00', 'PS school DGK'),
(4, 'Islamiat', '2017-01-20', '11:00', 'PS school DGK'),
(5, 'Urdu', '2017-01-23', '11:00', 'PS school DGK'),
(6, 'Audit', '2017-01-11', '01:00', 'dgk'),
(7, 'Audit', '2017-01-11', '14:00', 'dgk'),
(8, 'jjkjj', '2017-01-05', '01:01', 'dgk'),
(9, 'Audit', '2017-01-11', '01:00', 'dgk');

-- --------------------------------------------------------

--
-- Table structure for table `mcom`
--

CREATE TABLE `mcom` (
  `id` int(11) NOT NULL,
  `subjects` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(222) NOT NULL,
  `place` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcom`
--

INSERT INTO `mcom` (`id`, `subjects`, `date`, `time`, `place`) VALUES
(1, 'Economics', '2017-01-04', '11:00', 'Ahad College DGK'),
(2, 'Cost', '2017-01-05', '11:00', 'Ahad College DGK'),
(3, 'Accounting', '2017-01-06', '11:00', 'Ahad College DGK'),
(4, 'Applied', '2017-01-16', '11:00', 'Ahad College DGK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bcom`
--
ALTER TABLE `bcom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dcom`
--
ALTER TABLE `dcom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcom`
--
ALTER TABLE `mcom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bcom`
--
ALTER TABLE `bcom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dcom`
--
ALTER TABLE `dcom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mcom`
--
ALTER TABLE `mcom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

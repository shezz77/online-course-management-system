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
-- Database: `fkteacher`
--

-- --------------------------------------------------------

--
-- Table structure for table `bcomt`
--

CREATE TABLE `bcomt` (
  `tid` int(11) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `class` varchar(111) NOT NULL DEFAULT 'Bcom',
  `cnic` varchar(255) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Email` varchar(222) NOT NULL,
  `Gender` varchar(222) NOT NULL,
  `Address` varchar(222) NOT NULL,
  `City` varchar(222) NOT NULL,
  `State` varchar(222) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `image_name` varchar(444) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `Registration_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bcomt`
--

INSERT INTO `bcomt` (`tid`, `reg_no`, `teacher_name`, `father_name`, `class`, `cnic`, `Birth_Date`, `Email`, `Gender`, `Address`, `City`, `State`, `salary`, `qualification`, `subjects`, `image_name`, `image_path`, `Registration_Date`) VALUES
(14, '4', 'asad', 'jamlycvb', 'Bcom', '32103-4764642-3', '2017-01-04', 'fkgeo@gamil.com', 'Male', 'add', 'city', 'punj', '4500', 'Mphil', 'Urdu,English', '2.jpg', 'Photo/', '2017-01-01'),
(15, '443', 'sharif', 'kam', 'Bcom', '303834909049803', '2017-01-04', 'sulosaqi@gmail.com', 'Male', 'ngkjkj', 'taunsa', 'state', '7777', 'Mcom', 'Accounting', '14639871_1131589390270289_8083491930173730049_n.jpg', 'Photo/', '2017-01-12'),
(16, '443', 'fiazz', 'fiz', 'Bcom', '32103-4764642-3', '2017-01-11', 'sulosaqi@gmail.com', 'Male', 'dfd', 'dgk', 'state', '5555', 'MPhil', 'Banking', '6.jpg', 'Photo/', '2017-01-13'),
(17, '443', 'fiazz', 'fiz', 'Bcom', '32103-4764642-3', '2017-01-11', 'sulosaqi@gmail.com', 'Male', 'dfd', 'dgk', 'state', '2222', 'Mcom', 'ShortHand', '6.jpg', 'Photo/', '2017-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `dcomt`
--

CREATE TABLE `dcomt` (
  `tid` int(11) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `class` varchar(111) NOT NULL DEFAULT 'Bcom',
  `cnic` varchar(255) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Email` varchar(222) NOT NULL,
  `Gender` varchar(222) NOT NULL,
  `Address` varchar(222) NOT NULL,
  `City` varchar(222) NOT NULL,
  `State` varchar(222) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `image_name` varchar(444) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `Registration_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dcomt`
--

INSERT INTO `dcomt` (`tid`, `reg_no`, `teacher_name`, `father_name`, `class`, `cnic`, `Birth_Date`, `Email`, `Gender`, `Address`, `City`, `State`, `salary`, `qualification`, `subjects`, `image_name`, `image_path`, `Registration_Date`) VALUES
(14, '4', 'asad', 'jamlycvb', 'Dcom', '32103-4764642-3', '2017-01-04', 'fkgeo@gamil.com', 'Male', 'add', 'city', 'punj', '4500', 'Mphil', 'Urdu,English', '2.jpg', 'Photo/', '2017-01-01'),
(15, '443', 'sharif', 'kam', 'Dcom', '303834909049803', '2017-01-04', 'sulosaqi@gmail.com', 'Male', 'ngkjkj', 'taunsa', 'state', '7777', 'Mcom', 'Accounting', '14639871_1131589390270289_8083491930173730049_n.jpg', 'Photo/', '2017-01-12'),
(16, '443', 'fiazz', 'fiz', 'Dcom', '32103-4764642-3', '2017-01-11', 'sulosaqi@gmail.com', 'Male', 'dfd', 'dgk', 'state', '5555', 'MPhil', 'Banking', '6.jpg', 'Photo/', '2017-01-13'),
(17, '443', 'fiazz', 'fiz', 'Dcom', '32103-4764642-3', '2017-01-11', 'sulosaqi@gmail.com', 'Male', 'dfd', 'dgk', 'state', '2222', 'Mcom', 'ShortHand', '6.jpg', 'Photo/', '2017-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(111) NOT NULL,
  `user_password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `user_password`) VALUES
(2, 'teacher', 'teacher'),
(3, 'fk', 'sfk');

-- --------------------------------------------------------

--
-- Table structure for table `mcomt`
--

CREATE TABLE `mcomt` (
  `tid` int(11) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `class` varchar(111) NOT NULL DEFAULT 'Bcom',
  `cnic` varchar(255) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Email` varchar(222) NOT NULL,
  `Gender` varchar(222) NOT NULL,
  `Address` varchar(222) NOT NULL,
  `City` varchar(222) NOT NULL,
  `State` varchar(222) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `image_name` varchar(444) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `Registration_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcomt`
--

INSERT INTO `mcomt` (`tid`, `reg_no`, `teacher_name`, `father_name`, `class`, `cnic`, `Birth_Date`, `Email`, `Gender`, `Address`, `City`, `State`, `salary`, `qualification`, `subjects`, `image_name`, `image_path`, `Registration_Date`) VALUES
(14, '4', 'asad', 'jamlycvb', 'Mcom', '32103-4764642-3', '2017-01-04', 'fkgeo@gamil.com', 'Male', 'add', 'city', 'punj', '4500', 'Mphil', 'Urdu,English', '2.jpg', 'Photo/', '2017-01-01'),
(15, '443', 'sharif', 'kam', 'Mcom', '303834909049803', '2017-01-04', 'sulosaqi@gmail.com', 'Male', 'ngkjkj', 'taunsa', 'state', '7777', 'Mcom', 'Accounting', '14639871_1131589390270289_8083491930173730049_n.jpg', 'Photo/', '2017-01-12'),
(16, '443', 'fiazz', 'fiz', 'Mcom', '32103-4764642-3', '2017-01-11', 'sulosaqi@gmail.com', 'Male', 'dfd', 'dgk', 'state', '5555', 'MPhil', 'Banking', '6.jpg', 'Photo/', '2017-01-13'),
(17, '443', 'fiazz', 'fiz', 'Mcom', '32103-4764642-3', '2017-01-11', 'sulosaqi@gmail.com', 'Male', 'dfd', 'dgk', 'state', '2222', 'Mcom', 'ShortHand', '6.jpg', 'Photo/', '2017-01-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bcomt`
--
ALTER TABLE `bcomt`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `dcomt`
--
ALTER TABLE `dcomt`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcomt`
--
ALTER TABLE `mcomt`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bcomt`
--
ALTER TABLE `bcomt`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `dcomt`
--
ALTER TABLE `dcomt`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mcomt`
--
ALTER TABLE `mcomt`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

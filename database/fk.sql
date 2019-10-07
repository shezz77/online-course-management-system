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
-- Database: `fk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `nic` varchar(15) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(33) NOT NULL,
  `state` varchar(33) NOT NULL,
  `country` varchar(33) NOT NULL,
  `Matric_Board` varchar(255) NOT NULL,
  `Matric_Percentage` varchar(255) NOT NULL,
  `Matric_PassingOfYear` varchar(255) NOT NULL,
  `Inter_Board` varchar(255) NOT NULL,
  `Inter_Percentage` varchar(255) NOT NULL,
  `Inter_PassingOfYear` varchar(255) NOT NULL,
  `Grad_Board` varchar(255) NOT NULL,
  `Grad_Percentage` varchar(255) NOT NULL,
  `Grad_PassingOfYear` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `Registration_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `sname`, `fname`, `nic`, `bday`, `email`, `gender`, `address`, `city`, `state`, `country`, `Matric_Board`, `Matric_Percentage`, `Matric_PassingOfYear`, `Inter_Board`, `Inter_Percentage`, `Inter_PassingOfYear`, `Grad_Board`, `Grad_Percentage`, `Grad_PassingOfYear`, `course`, `Registration_Date`) VALUES
(1, 'fsdf', 'fiz', '32104383838', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(2, 'fsdf', 'Donald', '32104383838', '2016-12-14', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(3, 'fiazz', 'fiz', '32104383838', '2016-12-14', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(4, 'Asif', 'Umar', '32104383838', '2016-12-27', 'realx4rd@gmail.com', '', 'shadan lund', 'taunsa', 'punjab', 'Pakistan', 'Bise DGK', '77', '2010', 'Bise DGK', '66', '2012', 'Lahore', '55', '2014', 'M.com', '2016-12-24'),
(5, 'Asif', 'Umar', '32104383838', '2016-12-27', 'realx4rd@gmail.com', '', 'shadan lund', 'taunsa', 'punjab', 'Pakistan', 'Bise DGK', '77', '2010', 'Bise DGK', '66', '2012', 'Lahore', '55', '2014', 'M.com', '2016-12-24'),
(6, 'Fayyaz Ahmad', 'M Umar', '32104383838', '2016-12-08', 'fkgeo1@gmail.com', 'Male', 'dgk', 'taunsa', 'punjab', 'Pakistan', 'Bise DGK', '77', '2010', 'Bise DGK', '66', '2012', 'Lahore', '55', '2014', 'D.com', '2016-12-24'),
(7, 'Fayyaz Ahmad', 'sadfasdfas', '32103-4764642-3', '2016-12-17', 'realx4rd@gmail.com', '', '', '', '', 'Pakistan', '', '', '', '', '', '', '', '', '', '-1', '2016-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `bcom`
--

CREATE TABLE `bcom` (
  `sid` int(11) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `class` varchar(111) NOT NULL DEFAULT 'Bcom',
  `cnic` varchar(255) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Email` varchar(222) NOT NULL,
  `Gender` varchar(222) NOT NULL,
  `Address` varchar(222) NOT NULL,
  `City` varchar(222) NOT NULL,
  `State` varchar(222) NOT NULL,
  `Matric_Course` varchar(255) NOT NULL,
  `Matric_Board` varchar(255) NOT NULL,
  `Matric_Percentage` varchar(255) NOT NULL,
  `Matric_PassingOfYear` varchar(222) NOT NULL,
  `inter_course` varchar(255) NOT NULL,
  `inter_board` varchar(255) NOT NULL,
  `inter_percentage` varchar(200) NOT NULL,
  `inter_year` varchar(255) NOT NULL,
  `image_name` varchar(444) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `Registration_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bcom`
--

INSERT INTO `bcom` (`sid`, `roll_no`, `student_name`, `father_name`, `class`, `cnic`, `Birth_Date`, `Email`, `Gender`, `Address`, `City`, `State`, `Matric_Course`, `Matric_Board`, `Matric_Percentage`, `Matric_PassingOfYear`, `inter_course`, `inter_board`, `inter_percentage`, `inter_year`, `image_name`, `image_path`, `Registration_Date`) VALUES
(14, '11', 'Fayyaz', 'M.Umar', 'Bcom', '32103-4764642-3', '1995-01-04', 'fkgeo@gamil.com', 'Male', 'add', 'city', 'punj', 'arts', 'taus', '22', '2014', 'fsc', 'barod', '33', '2222', 'C360_2016-03-29-07-19-d09-846.jpg', 'Photo/', '2017-01-01'),
(15, '22', 'Masood', 'Ali', 'Bcom', '303834909049803', '2017-01-04', 'sulosaqi@gmail.com', 'Male', 'ngkjkj', 'taunsa', 'state', 'Science', 'Bise Rajan pur', '33', '2012', 'fsc', 'pu', '44', '4444', '2 001.jpg', 'Photo/', '2017-01-12'),
(16, '443', 'Mansab', 'Anjum', 'Bcom', '32103-4764642-3', '2001-01-09', 'sulosaqi@gmail.com', 'Male', 'dfd', 'dgk', 'state', 'Science', 'PU', '77', '2010', 'fsc', 'lahoreuuu', '44', '4444', 'C360_2016-03-29-07-34-15-317.jpg', 'Photo/', '2017-01-13'),
(17, '443', 'Zahid ', 'Aslam', 'Bcom', '32103-4764642-3', '1996-01-11', 'sulosaqi@gmail.com', 'Male', 'dfd', 'dgk', 'state', 'Science', 'PU', '77', '2010', 'fsc', 'lahoreuuu', '44', '4444', 'FB_IMG_1455456254619.jpg', 'Photo/', '2017-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `dcom`
--

CREATE TABLE `dcom` (
  `sid` int(11) NOT NULL,
  `roll_no` varchar(33) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `father_name` varchar(2555) NOT NULL,
  `class` varchar(111) NOT NULL DEFAULT 'Dcom I',
  `cnic` varchar(255) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Matric_Course` varchar(255) NOT NULL,
  `Matric_Board` varchar(255) NOT NULL,
  `Matric_Percentage` varchar(255) NOT NULL,
  `Matric_PassingOfYear` varchar(255) NOT NULL,
  `image_name` varchar(444) NOT NULL,
  `image_path` varchar(444) NOT NULL,
  `Registration_Date` date NOT NULL,
  `paidfee` decimal(10,0) NOT NULL DEFAULT '0',
  `monthlyfee` decimal(10,0) NOT NULL DEFAULT '1500'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dcom`
--

INSERT INTO `dcom` (`sid`, `roll_no`, `student_name`, `father_name`, `class`, `cnic`, `Birth_Date`, `Email`, `Gender`, `Address`, `City`, `State`, `Matric_Course`, `Matric_Board`, `Matric_Percentage`, `Matric_PassingOfYear`, `image_name`, `image_path`, `Registration_Date`, `paidfee`, `monthlyfee`) VALUES
(28, '443', 'fk', 'this', 'Dcom I', '234342342342342', '2017-01-18', 'realx4rd@gmail.com', 'Male', 'fdfdfd', 'makwal', 'sindh', 'artsq', 'dgk', '33', '2012', 'Muhammad Fiaz.JPG', 'Photo/', '2017-01-01', '0', '1500'),
(29, '443', 'fiazz', 'khan', 'Dcom I', '32103-4764642-3', '2017-01-02', 'sulosaqi@gmail.com', 'Male', 'dfd', 'taunsa', 'punjab', 'Science', 'Bise DGK', '77', '2010', '12.jpg', 'Photo/', '2017-01-13', '1300', '1500'),
(31, '4', 'Masood Ahmad', 'Hamza Ali', 'Dcom I', '32103-7764642-3', '2017-01-13', 'iammsd@gmail.com', 'Male', 'Ada sanjar pull qamar', 'taunsa', 'punjab', 'Science', 'PU', '88', '2010', '2 001.jpg', 'Photo/', '2017-01-16', '700', '1500'),
(32, '33', 'malkani', 'fiz', 'Dcom I', '32103-7764642-3', '2017-01-09', 'sulosaqi@gmail.com', 'Male', 'Ada sanjar pull qamar', 'dgk', 'state', 'artsq', 'PU', '33', '2010', '2 001.jpg', 'Photo/', '2017-01-21', '0', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `dcomresult`
--

CREATE TABLE `dcomresult` (
  `sid` int(11) NOT NULL,
  `roll_no` varchar(22) NOT NULL,
  `English` float NOT NULL,
  `Urdu` float NOT NULL,
  `accounting` float NOT NULL,
  `commerce` float NOT NULL,
  `banking` float NOT NULL,
  `islamiat` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `ID` int(11) NOT NULL,
  `input` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`ID`, `input`) VALUES
(12, 'thisistesting'),
(13, 'thisis i am fk'),
(14, 'asif khan jatooi'),
(15, 'asif khan jatooi'),
(16, 'this is me khan sahb'),
(17, 'this is me khan sahb'),
(18, 'adnan khan jattooi');

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
(2, 'admin', 'admin'),
(3, 'fk', 'sfk');

-- --------------------------------------------------------

--
-- Table structure for table `mcom`
--

CREATE TABLE `mcom` (
  `McomID` int(11) NOT NULL,
  `Roll_no` varchar(255) NOT NULL,
  `Student_Name` varchar(255) NOT NULL,
  `Father_Name` varchar(255) NOT NULL,
  `Class` varchar(111) NOT NULL DEFAULT 'Mcom'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bcom`
--
ALTER TABLE `bcom`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `dcom`
--
ALTER TABLE `dcom`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `dcomresult`
--
ALTER TABLE `dcomresult`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcom`
--
ALTER TABLE `mcom`
  ADD PRIMARY KEY (`McomID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bcom`
--
ALTER TABLE `bcom`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `dcom`
--
ALTER TABLE `dcom`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `dcomresult`
--
ALTER TABLE `dcomresult`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mcom`
--
ALTER TABLE `mcom`
  MODIFY `McomID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

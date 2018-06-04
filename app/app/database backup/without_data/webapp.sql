-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 09:41 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `emptbl`
--

CREATE TABLE `emptbl` (
  `EmpNo` varchar(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `EmpType` varchar(30) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `TelNO` int(10) NOT NULL,
  `RegDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` varchar(20) NOT NULL,
  `uname` varchar(45) NOT NULL,
  `passwrd` varchar(255) NOT NULL,
  `role` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `uname`, `passwrd`, `role`) VALUES
('1', 'admin', '$2y$10$UFWwv./8iRTN29HVtja4kekUjfF.Qg4nEzAwqmvYRMCQGX0.2yNXG', 'admin'),
('2', 'assit', '$2y$10$IsJSLfMFCHLmufh11dwxPO04naqi0DMYJFYdiaXADTTwXjtPLdk8q', 'assit'),
('3', 'usr1', '$2y$10$hTGqg37ZGDGiVjo2eScjVuv6bFGm4orlauYbxHuRA36QoJedIYF22', 'user'),
('4', 'audit', '$2y$10$00J1ywger04JpdNhYK3GluDU0kYHsw0XoFRMU0B8vGIn35Dj1rM8O', 'audit');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PayID` int(11) NOT NULL,
  `UID` varchar(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `Amount` float NOT NULL,
  `PayDate` date NOT NULL,
  `Approved` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usrtbl`
--

CREATE TABLE `usrtbl` (
  `UID` varchar(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Bank` varchar(40) NOT NULL,
  `AccNO` varchar(30) NOT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `TelNO` int(10) DEFAULT NULL,
  `RegDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emptbl`
--
ALTER TABLE `emptbl`
  ADD PRIMARY KEY (`EmpNo`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PayID`);

--
-- Indexes for table `usrtbl`
--
ALTER TABLE `usrtbl`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PayID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

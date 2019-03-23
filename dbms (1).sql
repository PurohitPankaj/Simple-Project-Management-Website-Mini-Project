-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 03:17 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `BranchId` int(11) NOT NULL,
  `BranchName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BranchId`, `BranchName`) VALUES
(1, 'COMSP'),
(2, 'IT'),
(3, 'CIVIL'),
(4, 'EXTC'),
(5, 'ETRX'),
(6, 'MECH');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `femail` varchar(200) NOT NULL,
  `fpass` varchar(200) NOT NULL,
  `BranchId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `fname`, `femail`, `fpass`, `BranchId`) VALUES
(1, 'Mrs.Leena Raut', 'leenaraut@gmail.com', '111111', 1),
(2, 'Mr.Vikas Moore', 'vikasmoore@gmail.com', '111111', 1),
(3, 'Mr. Pankaj Purohit ', 'pankaj@gmail.com', '111111', 2),
(4, 'Mr. Prince Patel', 'prince@gmail.com', '111111', 3),
(5, 'futureman', 'future@gmail.com', '111111', 4);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `sid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `ptype` varchar(200) NOT NULL,
  `marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`sid`, `bid`, `pid`, `pname`, `ptype`, `marks`) VALUES
(2, 1, 1, 'AI in Study', 'COMPS - AI ', 90),
(3, 3, 4, 'Smart Bridge', 'CIVIL ', 94),
(4, 1, 5, 'Big Data in Medical ', 'COMPS', NULL),
(5, 2, 6, 'ML in medical', 'IT - DS ', NULL),
(5, 2, 8, 'CSS in FileShare', 'COMPS-CSS', 99),
(3, 3, 13, 'Dam Water Saving', 'CIVIL- Materials Building', 89),
(7, 3, 14, 'Bridge Building', 'CIVIL - Bridge str.', 100);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(11) NOT NULL,
  `semail` varchar(255) NOT NULL,
  `spass` varchar(255) NOT NULL,
  `BranchId` int(11) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `rno` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `college` varchar(200) NOT NULL DEFAULT 'UCOE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `semail`, `spass`, `BranchId`, `sname`, `rno`, `age`, `college`) VALUES
(2, 'arppankaj@gmail.com', '111111', 1, 'Pankaj Purohit ', 114, 19, 'UCOE'),
(3, 'arpprince@gmail.com', '111111', 3, 'prince', 107, 20, 'UCOE'),
(4, 'pritesh@gmail.com', '111111', 1, 'Pritesh', 117, 19, 'UCOE'),
(5, 'sai@gmail.com', '111111', 2, 'Sai ', 11, 20, 'UCOE'),
(6, 'future@gmail.com', '111111', 2, 'futureman', 111, 20, 'UCOE'),
(7, 'amar@gmail.com', '111111', 3, 'Amar ', 170, 21, 'UCOE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BranchId`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `femail_2` (`femail`),
  ADD KEY `femail` (`femail`),
  ADD KEY `BranchId` (`BranchId`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `sid_2` (`sid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `rno` (`rno`),
  ADD KEY `BranchId` (`BranchId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`BranchId`) REFERENCES `branch` (`BranchId`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `students` (`sid`),
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`bid`) REFERENCES `branch` (`BranchId`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`BranchId`) REFERENCES `branch` (`BranchId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

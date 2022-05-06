-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 05:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostelers`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentid` int(3) UNSIGNED DEFAULT NULL,
  `branch` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentid`, `branch`) VALUES
(100, 'cse'),
(102, 'cve'),
(101, 'mce');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `hostelid` varchar(4) NOT NULL,
  `hostelname` varchar(20) DEFAULT NULL,
  `noofstudent` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostelid`, `hostelname`, `noofstudent`) VALUES
('B100', 'Boys', 1000),
('G100', 'Girls', 1000),
('O100', 'Other', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `usn` varchar(10) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`usn`, `password`) VALUES
('1bh19cs035', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `usn` varchar(10) DEFAULT NULL,
  `roomno` varchar(5) DEFAULT NULL,
  `seater` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`usn`, `roomno`, `seater`) VALUES
('1bh19cs035', 's-42', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `hostelid` varchar(4) DEFAULT NULL,
  `usn` varchar(10) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `branch` varchar(3) DEFAULT NULL,
  `sem` varchar(2) DEFAULT NULL,
  `mobileno` int(10) DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`hostelid`, `usn`, `name`, `branch`, `sem`, `mobileno`, `sex`) VALUES
('B100', '1bh19cs035', 'Jitendra kohar', 'cse', '4', 2147483647, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `usn` varchar(10) DEFAULT NULL,
  `studentname` varchar(40) DEFAULT NULL,
  `visitorname` varchar(40) DEFAULT NULL,
  `relation` varchar(50) DEFAULT NULL,
  `visitorphoneno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`branch`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`hostelid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `usn` (`usn`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD KEY `usn` (`usn`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`),
  ADD KEY `hostelid` (`hostelid`),
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD KEY `usn` (`usn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`hostelid`) REFERENCES `hostel` (`hostelid`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`branch`) REFERENCES `department` (`branch`);

--
-- Constraints for table `visitor`
--
ALTER TABLE `visitor`
  ADD CONSTRAINT `visitor_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

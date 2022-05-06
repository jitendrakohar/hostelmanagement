-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 07:46 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `password`) VALUES
('jitendra', '12345'),
('jyotideep', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentid` int(3) UNSIGNED DEFAULT NULL,
  `branch` varchar(3) NOT NULL,
  `Boys` int(10) DEFAULT NULL,
  `Girls` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentid`, `branch`, `Boys`, `Girls`) VALUES
(100, 'cse', 1002, 1005),
(102, 'cve', 451, 1002),
(101, 'mce', 200, 20);

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
('G101', 'Girls', 1000),
('O102', 'Other', 1000);

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
('1bh19cs035', '1234'),
('1bh19cs034', '1234'),
('1bh19cs030', '1234'),
('1bh19cs033', '1234'),
('1bh19cs039', '1234');

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
('1bh19cs035', 's-42', 5),
('1bh19cs034', 's-45', 4),
('1bh19cs030', 's-45', 3),
('1bh19cs033', 'g-21', 4),
('1bh19cs039', 's-42', 4);

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
('B100', '1bh19cs030', 'Hemant Devkota', 'cse', '5', 214748364, 'm'),
('B100', '1bh19cs033', 'Sophia Ansari', 'cse', '5', 2147483647, 'm'),
('B100', '1bh19cs034', 'Jitendra kohar', 'cse', '5', 2147483647, 'm'),
('G101', '1bh19cs035', 'jyoti deep', 'cse', '5', 214748364, 'f'),
('B100', '1bh19cs039', 'snehal karki', 'cse', '5', 2147483647, 'f');

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
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`usn`, `studentname`, `visitorname`, `relation`, `visitorphoneno`) VALUES
('1bh19cs035', 'jyoti deep', 'Hirthik roshan', 'friend', 938839444),
('1bh19cs035', 'jitendra kohar', 'Hirthik roshan', 'father', 1243444),
('1bh19cs039', 'snehal karki', 'samjhana karki', 'Friend', 2147483647);

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
  ADD KEY `login_ibfk_1` (`usn`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD KEY `room_ibfk_1` (`usn`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`),
  ADD KEY `student_ibfk_1` (`hostelid`),
  ADD KEY `student_ibfk_2` (`branch`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD KEY `visitor_ibfk_1` (`usn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`hostelid`) REFERENCES `hostel` (`hostelid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`branch`) REFERENCES `department` (`branch`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visitor`
--
ALTER TABLE `visitor`
  ADD CONSTRAINT `visitor_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

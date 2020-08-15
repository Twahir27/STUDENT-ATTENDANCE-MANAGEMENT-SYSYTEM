-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 02:30 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendanceID` int(10) NOT NULL,
  `staff_courseID` int(10) NOT NULL,
  `studentID` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendanceID`, `staff_courseID`, `studentID`, `Date`, `Status`) VALUES
(444, 28, 'BITAM/6/18/039/TZ', '2018-07-06', 'Present'),
(445, 28, 'BITAM/5/17/261/TZ', '2018-07-06', 'Present'),
(446, 28, 'BITAM/6/18/024/TZ', '2018-07-06', 'Present'),
(447, 28, 'BITAM/6/18/057/TZ', '2018-07-06', 'Present'),
(448, 28, 'BITAM/6/18/039/TZ', '2018-07-09', 'Absent'),
(449, 28, 'BITAM/5/17/261/TZ', '2018-07-09', 'Present'),
(450, 28, 'BITAM/6/18/024/TZ', '2018-07-09', 'Present'),
(451, 28, 'BITAM/6/18/057/TZ', '2018-07-09', 'Present'),
(452, 28, 'BITAM/6/18/039/TZ', '2018-07-10', 'Absent'),
(453, 28, 'BITAM/5/17/261/TZ', '2018-07-10', 'Present'),
(454, 28, 'BITAM/6/18/024/TZ', '2018-07-10', 'Absent'),
(455, 28, 'BITAM/6/18/057/TZ', '2018-07-10', 'Present'),
(456, 28, 'BITAM/6/18/039/TZ', '2018-07-11', 'Present'),
(457, 28, 'BITAM/5/17/261/TZ', '2018-07-11', 'Present'),
(458, 28, 'BITAM/6/18/024/TZ', '2018-07-11', 'Present'),
(459, 28, 'BITAM/6/18/057/TZ', '2018-07-11', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseID` varchar(50) NOT NULL,
  `course_Name` varchar(50) NOT NULL,
  `course_Year` year(4) NOT NULL,
  `Attendance` int(100) NOT NULL,
  `semister` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `course_Name`, `course_Year`, `Attendance`, `semister`) VALUES
('DCS-0220', 'MATH', 2017, 100, 2),
('DINF-0221', 'GRAPHIC', 2017, 100, 2),
('DINF-0222', 'LINUX', 2017, 100, 2),
('DINF-0223', 'ANDROID', 2017, 100, 2);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `Firstname`, `Lastname`, `address`, `email`, `phone`, `Gender`, `DOB`) VALUES
('akram', 'Akram', 'Omar', 'Betrasi', 'akram@gmail.com', 2147483647, 'Male', '0020-02-20'),
('ali', 'ali', 'abdulla', 'jumbi', 'ali@gmail.com', 775432134, 'Male', '1997-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `staff_course`
--

CREATE TABLE `staff_course` (
  `staff_courseID` int(10) NOT NULL,
  `courseID` varchar(50) NOT NULL,
  `staffID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_course`
--

INSERT INTO `staff_course` (`staff_courseID`, `courseID`, `staffID`) VALUES
(28, 'DINF-0221', 'ali');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `Firstname`, `lastname`, `Address`, `Email`, `Phone`, `Gender`, `DOB`) VALUES
('BITAM/5/17/261/TZ', 'twahir', 'shafii', 'kwerekwe', 'thahir@gmail.com', 6574324, 'Male', '1995-07-04'),
('BITAM/6/18/024/TZ', 'juma', 'said', 'fuoni', 'juma@gmail.com', 7654325, 'Male', '1982-03-05'),
('BITAM/6/18/039/TZ', 'awena', 'salum', 'magogoni', 'awena@gmail.com', 777654378, 'Female', '1992-07-09'),
('BITAM/6/18/057/TZ', 'saida', 'mohd', 'mpendae', 'said@gmail.com', 776545687, 'Female', '2018-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `student_courseID` int(11) NOT NULL,
  `courseID` varchar(50) NOT NULL,
  `studentID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`student_courseID`, `courseID`, `studentID`) VALUES
(104, 'DCS-0220', 'BITAM/6/18/039/TZ'),
(105, 'DINF-0221', 'BITAM/6/18/039/TZ'),
(106, 'DINF-0222', 'BITAM/6/18/039/TZ'),
(107, 'DINF-0223', 'BITAM/6/18/039/TZ'),
(108, 'DCS-0220', 'BITAM/5/17/261/TZ'),
(109, 'DINF-0221', 'BITAM/5/17/261/TZ'),
(110, 'DINF-0222', 'BITAM/5/17/261/TZ'),
(111, 'DINF-0223', 'BITAM/5/17/261/TZ'),
(112, 'DCS-0220', 'BITAM/6/18/024/TZ'),
(113, 'DINF-0221', 'BITAM/6/18/024/TZ'),
(114, 'DINF-0222', 'BITAM/6/18/024/TZ'),
(115, 'DINF-0223', 'BITAM/6/18/024/TZ'),
(116, 'DCS-0220', 'BITAM/6/18/057/TZ'),
(117, 'DINF-0221', 'BITAM/6/18/057/TZ'),
(118, 'DINF-0222', 'BITAM/6/18/057/TZ'),
(119, 'DINF-0223', 'BITAM/6/18/057/TZ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `default_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `usertype`, `status`, `image`, `default_pass`) VALUES
('akram', '1234', 'lecture', '', '', 'notchanged'),
('ALABA', '12345', 'admin', 'active', 'active', ''),
('ali', '1234', 'lecture', '', '', 'changed'),
('BITAM/5/17/261/TZ', '123', 'student', '', '', 'changed'),
('BITAM/6/18/024/TZ', '123', 'student', '', '', 'changed'),
('BITAM/6/18/039/TZ', '123', 'student', '', '', 'changed'),
('BITAM/6/18/057/TZ', '123', 'student', '', '', 'changed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendanceID`),
  ADD KEY `staff_courseID` (`staff_courseID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `staff_course`
--
ALTER TABLE `staff_course`
  ADD PRIMARY KEY (`staff_courseID`),
  ADD KEY `courseID` (`courseID`,`staffID`),
  ADD KEY `staffID` (`staffID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`student_courseID`),
  ADD KEY `student_courseID` (`student_courseID`,`courseID`,`studentID`),
  ADD KEY `courseID` (`courseID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendanceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=460;

--
-- AUTO_INCREMENT for table `staff_course`
--
ALTER TABLE `staff_course`
  MODIFY `staff_courseID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `student_course`
--
ALTER TABLE `student_course`
  MODIFY `student_courseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`staff_courseID`) REFERENCES `staff_course` (`staff_courseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_course`
--
ALTER TABLE `staff_course`
  ADD CONSTRAINT `staff_course_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_course_ibfk_2` FOREIGN KEY (`courseID`) REFERENCES `course` (`courseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_course`
--
ALTER TABLE `student_course`
  ADD CONSTRAINT `student_course_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `course` (`courseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_course_ibfk_2` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

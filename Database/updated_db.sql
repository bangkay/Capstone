-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2015 at 09:07 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluation`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_desc` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_desc`) VALUES
(1, 'Teachers Personality'),
(2, 'Teaching Procedures'),
(3, 'Classroom Management'),
(4, 'Evaluation Factor'),
(5, 'Use of Teaching Aid');

-- --------------------------------------------------------

--
-- Table structure for table `current_record`
--

CREATE TABLE IF NOT EXISTS `current_record` (
  `cr_id` int(11) NOT NULL,
  `S_ID` int(11) NOT NULL,
  `Sub_ID` int(11) NOT NULL,
  `F_ID` int(11) NOT NULL,
  `Sem_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_record`
--

INSERT INTO `current_record` (`cr_id`, `S_ID`, `Sub_ID`, `F_ID`, `Sem_ID`) VALUES
(1, 24, 1, 1, 1),
(2, 24, 2, 1, 1),
(4, 24, 3, 1, 1),
(5, 24, 6, 3, 1),
(6, 24, 7, 3, 1),
(7, 172, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `Dept_ID` int(11) NOT NULL,
  `Dept_Name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept_ID`, `Dept_Name`) VALUES
(1, 'BSIT'),
(2, 'BSHRM'),
(3, 'BSBA'),
(4, 'BSTM');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `F_ID` int(11) NOT NULL,
  `F_Fname` varchar(50) NOT NULL,
  `F_Lname` varchar(50) NOT NULL,
  `F_Mname` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`F_ID`, `F_Fname`, `F_Lname`, `F_Mname`) VALUES
(1, 'Marc Van ', 'Buladaco', '1'),
(2, 'Bernardito ', 'Dacubor', '2'),
(3, 'Gary ', 'Sanchez', '3'),
(4, 'claire', 'barranco', '4');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_subjects`
--

CREATE TABLE IF NOT EXISTS `faculty_subjects` (
  `Fac_Sub_ID` int(11) NOT NULL,
  `F_ID` int(11) NOT NULL,
  `Sub_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_subjects`
--

INSERT INTO `faculty_subjects` (`Fac_Sub_ID`, `F_ID`, `Sub_ID`) VALUES
(1, 1, 1),
(2, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `Ques_ID` int(11) NOT NULL,
  `Ques_Desc` text NOT NULL,
  `Ques_Category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Ques_ID`, `Ques_Desc`, `Ques_Category`) VALUES
(1, 'Observes neatness and proper grooming (dress appropriate for the class)', 'Teachers Personality'),
(2, 'Uses appropriate language', 'Teachers Personality'),
(3, 'Show enthusiasm (lively, energetic)', 'Teachers Personality'),
(4, 'Projects self-confidence', 'Teachers Personality'),
(5, 'Respect students', 'Teachers Personality'),
(6, 'States the lesson objectives clearly', 'Teaching Procedures'),
(7, 'Organize the lesson well', 'Teaching Procedures'),
(8, 'Present the lesson clearly', 'Teaching Procedures'),
(9, 'Encourage the students to express opinions and ideas', 'Teaching Procedures'),
(10, 'Integrates values appropriately in the lesson', 'Teaching Procedures'),
(11, 'Answers questions clearly and appropriately', 'Teaching Procedures'),
(12, 'Report to class on time', 'Classroom Management'),
(13, 'Start class with prayer', 'Classroom Management'),
(14, 'Stays in class throughout the period', 'Classroom Management'),
(15, 'Ends the class with prayer', 'Classroom Management'),
(16, 'Check class attendance', 'Evaluation Factor'),
(17, 'Motivates student to actively participate in the class discussion/activities', 'Evaluation Factor'),
(18, 'Maintains teacher-student report (maintains harmonious relationship in the classroom)', 'Evaluation Factor'),
(19, 'Observes orderliness/arrangement of the chairs', 'Evaluation Factor'),
(20, 'Observes cleanliness in the classroom', 'Evaluation Factor'),
(21, 'Ensures that the board is clean before and after class', 'Evaluation Factor'),
(22, 'Observes the proper time of class dismissal', 'Evaluation Factor'),
(23, 'Uses appropriate teaching aid', 'Use of Teaching Aid'),
(24, 'Uses instructional teaching materials/equipment appropriately', 'Use of Teaching Aid'),
(25, 'Ensures that the teaching aid could be seen at a distance', 'Use of Teaching Aid'),
(26, 'Uses words and figures which are understandable', 'Use of Teaching Aid'),
(27, 'Writes on the board legibly', 'Use of Teaching Aid');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `Res_ID` int(11) NOT NULL,
  `F_ID` int(11) NOT NULL,
  `S_ID` int(11) NOT NULL,
  `Res_Score` int(11) NOT NULL,
  `Res_Remarks` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Res_ID`, `F_ID`, `S_ID`, `Res_Score`, `Res_Remarks`) VALUES
(1, 1, 0, 40, '0'),
(2, 1, 0, 10, 'hkajshdkjasdhhajdhakshdkashdkashdkhasjdhkashdk'),
(3, 1, 1, 50, 'Excellent'),
(4, 1, 1, 50, 'Excellent'),
(5, 1, 1, 18, 'Excellent'),
(6, 1, 1, 10, 'Excellent'),
(7, 1, 1, 37, 'Very Satisfactory'),
(8, 1, 1, 28, 'Very Good'),
(9, 1, 1, 20, 'Very Good'),
(10, 1, 1, 50, 'Excellent'),
(11, 1, 1, 50, 'Excellent'),
(12, 1, 1, 43, 'Excellent'),
(13, 1, 1, 43, 'Excellent'),
(14, 1, 1, 43, 'Excellent'),
(15, 1, 1, 43, 'Excellent'),
(16, 1, 1, 43, 'Excellent'),
(17, 1, 1, 43, 'Excellent'),
(18, 1, 1, 43, 'Excellent'),
(19, 1, 1, 43, 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE IF NOT EXISTS `student_record` (
  `S_ID` int(11) NOT NULL,
  `Student_name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_record`
--

INSERT INTO `student_record` (`S_ID`, `Student_name`, `age`, `address`) VALUES
(23, 'jessa lobaton', 30, 'DAVAO CITY'),
(24, 'Earl Lora', 24, 'Davao City'),
(172, 'James', 21, 'Davao City'),
(174, 'Lanz  bahinting', 18, 'davao city');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `Sub_ID` int(11) NOT NULL,
  `Sub_Name` varchar(100) NOT NULL,
  `Dept_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Sub_ID`, `Sub_Name`, `Dept_ID`) VALUES
(1, 'Database Management', 1),
(2, 'Object-oriented programming', 1),
(3, 'Principles of Programming Languages', 1),
(4, 'Cooking class', 2),
(5, 'Bartending', 2),
(6, 'Fundamentals of Accounting', 3),
(7, 'Marketing', 3),
(8, 'Financial Accounting', 3),
(9, 'Travelling', 4),
(10, 'English 4', 4),
(11, 'English and Communication', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `current_record`
--
ALTER TABLE `current_record`
  ADD PRIMARY KEY (`cr_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dept_ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `faculty_subjects`
--
ALTER TABLE `faculty_subjects`
  ADD PRIMARY KEY (`Fac_Sub_ID`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`Ques_ID`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Res_ID`);

--
-- Indexes for table `student_record`
--
ALTER TABLE `student_record`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`Sub_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `current_record`
--
ALTER TABLE `current_record`
  MODIFY `cr_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Dept_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `faculty_subjects`
--
ALTER TABLE `faculty_subjects`
  MODIFY `Fac_Sub_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `Ques_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `Res_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `Sub_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

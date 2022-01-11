-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 09:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'YASIR', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(11) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `staff_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_code`, `course_title`, `staff_id`) VALUES
(3, 'COM411', 'ADVANCE JAVA PROGRAMMING', 13),
(4, 'COM422', 'ARTIFICIAL INTELLIGENCE', 1),
(5, 'COM225', 'WEB TECHNOLOGY', 4),
(6, 'GNS 321', 'BUSINESS COMMUNICATION II', 7),
(7, 'COM322', 'COMPUTER ARCHITECTURE', 10),
(8, 'COM 325', 'DATABASE DESIGN II', 13),
(9, 'COM 413', 'DATA COMMUNICATION AND NETWORKING', 12),
(10, 'COM 326', 'HUMAN COMPUTER INTERACTION', 5),
(11, 'STA 421', 'OPERATIONS RESEARCH', 12),
(12, 'ACC 322', 'QUANTITATIVE TECHNIQUES', 6);

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `staff_Id` int(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `sname` varchar(10) NOT NULL,
  `oname` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `sno` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(200) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`staff_Id`, `fname`, `sname`, `oname`, `gender`, `dept`, `sno`, `phone`, `unit`, `rank`, `username`, `password`, `picture`, `entry_date`) VALUES
(1, 'Yasir', 'Murtala', '', 'Male', 'Computer Science', 'KPT/CST/1180', '08102564648', 'CST', 'PRINCIPAL LECTURER', 'MYASIR', '1234', 'IMG_20191001_160858_5[1].jpg', '2019-11-21 13:01:50'),
(5, 'HASSAN', 'INUWA', 'BWALA', 'Male', 'Computer Science', 'KPT/CST/1990', '08133604940', 'CST', 'CHIEF LECTURER', 'HASSAN', '12345', 'tut1.jpg', '2019-11-23 10:03:59'),
(6, 'SHEHU', 'ISAH', 'MUSA', 'Male', 'Applied Science', 'KPT/CST/1992', '09023332342', 'CST', 'LECTURER II', 'shehu', '12345', 'tut8.jpg', '2019-11-23 10:21:35'),
(7, 'HUSSAINA', 'ABDULKADIR', '', 'Female', 'Mass Communication', 'KPT/CASSS/1993', '09034483438', 'CASSS', 'CHIEF LECTURER', 'hussaina', '12345', '', '2019-11-23 10:48:22'),
(8, 'ABBA', 'ABDULLAHI', '', 'Male', 'Quantity Survey', 'KPT/CES/1994', '09012655732', 'CES', 'LECTURER III', 'abba', '12345', 'tut8.jpg', '2019-11-23 10:52:14'),
(10, 'Zainab', 'Murtala', '', 'Female', 'Computer Engineering', 'KPT/COE/1991', '09034243323', 'COE', 'ASSISTANT LECTURER', 'zee', '12345', 'tut3.jpg', '2019-11-23 11:42:02'),
(11, 'Hamisu', 'Ibrahim', 'Alhaji', 'Male', 'Computer Science', 'KPT/CST/1181', '08023154444', 'CST', 'CHIEF LECTURER', 'hamisu', '12345', '', '2019-11-23 11:50:22'),
(12, 'Auwal ', 'Ahmad', 'Muhammad', 'Female', 'Computer Science', 'KPT/CST/1182', '09053653831', 'CST', 'PRINCIPAL LECTURER', 'horare', '12345', 'IMG_20180426_102154.jpg', '2019-11-23 11:53:15'),
(13, 'Isiaka', 'Adekunle', 'Obasa', 'Male', 'Computer Science', 'KPT/CST/1186', '08038391202', 'CST', 'CHIEF LECTURER', 'obasa', '12345', 'IMG_20190110_155522_0~2.jpg', '2019-11-23 11:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `course_applied` varchar(255) NOT NULL,
  `subject_1` varchar(255) NOT NULL,
  `subject_2` varchar(255) NOT NULL,
  `subject_3` varchar(50) NOT NULL,
  `subject_4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `course_applied`, `subject_1`, `subject_2`, `subject_3`, `subject_4`) VALUES
(2, 'computer science', 'Java Programming', 'Human Computer Interface', 'C++ Programming', 'Artificial intelligence');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`staff_Id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `staff_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 05:15 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `session` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `session`) VALUES
(1, 'admin', 'admin123', 0),
(2, 'molla', 'molla', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(20) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `courseno` varchar(50) NOT NULL,
  `coursetitle` varchar(50) NOT NULL,
  `courseimg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `img_id` int(11) NOT NULL,
  `imagname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`img_id`, `imagname`) VALUES
(5, 'course_51.jpg'),
(7, 'comment_2.jpg'),
(8, 'comment_2.jpg'),
(9, 'contact_background.jpg'),
(10, 'course_8.jpg'),
(11, 'event_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lessonid` int(20) NOT NULL,
  `lessonname` varchar(50) NOT NULL,
  `lessontitle` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quesresult`
--

CREATE TABLE `quesresult` (
  `resul_id` int(50) NOT NULL,
  `totalquestion` int(50) NOT NULL,
  `wrongans` int(50) NOT NULL,
  `trueans` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(50) NOT NULL,
  `quesdescription` varchar(50) NOT NULL,
  `ans1` varchar(50) NOT NULL,
  `ans2` varchar(50) NOT NULL,
  `ans3` varchar(50) NOT NULL,
  `ans4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quize`
--

CREATE TABLE `quize` (
  `quize_id` int(11) NOT NULL,
  `lessonid` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_id` int(50) NOT NULL,
  `firsname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` int(11) NOT NULL,
  `confirmpass` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `firsname`, `lastname`, `fullname`, `password`, `confirmpass`, `address`, `phone`) VALUES
(1, 'sayeed', 'address', 'sayeed@gmail.com', 0, 0, 0, 0),
(2, 'azmal', 'borishal', 'azmal01@gmail.com', 0, 0, 0, 0),
(3, 'dad', 'afda', 'afeawe', 0, 0, 0, 0),
(4, 'dadda', 'dafa', 'afdaef', 0, 0, 0, 0),
(5, 'MD. ABU SAYEED', 'yugbyubyubu', 'sayeedazmal01@gmail.com', 0, 0, 0, 0),
(6, 'MD. ABU SAYEED', 'adaf', 'sayeedazmal01@gmail.com', 0, 0, 0, 0),
(7, 'constructor', 'adaf', '01726879021', 0, 0, 0, 0),
(8, 'constructor', 'adaf', '01726879021', 0, 0, 0, 0),
(9, '', '', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tech_id` int(50) NOT NULL,
  `techname` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tech_id`, `techname`, `designation`, `picture`) VALUES
(1, 'daf', 'adf', 'uploads/become.jpg'),
(2, 'abu sayeed', 'javaprogrammer', 'uploads/comment_1.jpg'),
(3, 'ad', 'adf', 'uploads/course_4.jpg'),
(4, 'daf', 'ad', 'uploads/course_1.jpg'),
(5, 'daf', 'ad', 'uploads/course_11.jpg'),
(6, 'daf', 'ad', 'uploads/course_12.jpg'),
(7, 'daf', 'ad', 'uploads/course_13.jpg'),
(9, 'abu sayeed', 'php', 'uploads/course_5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lessonid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `quesresult`
--
ALTER TABLE `quesresult`
  ADD PRIMARY KEY (`resul_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `quize`
--
ALTER TABLE `quize`
  ADD PRIMARY KEY (`quize_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tech_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lessonid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quesresult`
--
ALTER TABLE `quesresult`
  MODIFY `resul_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quize`
--
ALTER TABLE `quize`
  MODIFY `quize_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `st_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tech_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

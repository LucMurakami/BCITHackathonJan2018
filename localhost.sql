-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 05, 2018 at 11:10 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4166117_student`
--
CREATE DATABASE IF NOT EXISTS `id4166117_student` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id4166117_student`;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `course-teacher_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `q1` int(1) DEFAULT NULL,
  `q2` int(1) DEFAULT NULL,
  `q3` int(1) DEFAULT NULL,
  `q4` int(1) DEFAULT NULL,
  `q5` int(1) DEFAULT NULL,
  `q6` int(1) DEFAULT NULL,
  `q7` int(1) DEFAULT NULL,
  `q8` int(1) DEFAULT NULL,
  `q9` int(1) DEFAULT NULL,
  `q10` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`course-teacher_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
('COMP1510-A00100100', 3, 3, 3, 3, 3, 3, 3, 3, 3, ''),
('COMP1510-A00111011', 3, 3, 2, 4, 4, 2, 1, 4, 5, 'Num2'),
('COMP1510-A00100100', 1, 1, 1, 1, 1, 1, 1, 1, 1, 's2q1'),
('COMP1510-A00111011', 5, 5, 5, 5, 5, 5, 5, 5, 5, 's2q2'),
('COMP1510-A00100100', 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Amazing!');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `password`) VALUES
('A01010101', 'beta'),
('A01011900', 'alpha'),
('A01017800', 'gaurav');

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

CREATE TABLE `student_courses` (
  `student_id` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `course-teacher1_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `course-teacher1_bool` int(1) NOT NULL,
  `course-teacher2_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `course-teacher2_bool` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_courses`
--

INSERT INTO `student_courses` (`student_id`, `course-teacher1_id`, `course-teacher1_bool`, `course-teacher2_id`, `course-teacher2_bool`) VALUES
('A01010101', 'COMP1510-A00100100', 1, 'COMP1510-A00111011', 1),
('A01011900', 'COMP1510-A00100100', 1, 'COMP1510-A00111011', 1),
('A01017800', 'COMP1510-A00100100', 1, 'COMP1510-A00111011', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `password`) VALUES
('A00100100', 'bruce'),
('A00111011', 'chris');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_courses`
--

CREATE TABLE `teacher_courses` (
  `teacher_id` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher_courses`
--

INSERT INTO `teacher_courses` (`teacher_id`, `course_id`) VALUES
('A00100100', 'COMP1510'),
('A00111011', 'COMP1510');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  ADD PRIMARY KEY (`teacher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

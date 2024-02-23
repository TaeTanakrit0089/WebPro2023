-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 04:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab8`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `s_id` int(11) NOT NULL,
  `i_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `building` varchar(255) NOT NULL,
  `room_number` int(11) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(7) NOT NULL,
  `title` varchar(255) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_name` varchar(255) NOT NULL,
  `building` varchar(255) NOT NULL,
  `budget` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prereq`
--

CREATE TABLE `prereq` (
  `course_id` varchar(7) NOT NULL,
  `prereq_id` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `course_id` varchar(7) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `building` varchar(255) NOT NULL,
  `room_number` int(11) NOT NULL,
  `time_slot_id` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `tot_cred` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `ID` int(11) NOT NULL,
  `course_id` varchar(7) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `ID` int(11) NOT NULL,
  `course_id` varchar(7) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `time_slot_id` varchar(1) NOT NULL,
  `day` varchar(1) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `i_id` (`i_id`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`building`,`room_number`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_name`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `prereq`
--
ALTER TABLE `prereq`
  ADD PRIMARY KEY (`course_id`,`prereq_id`),
  ADD KEY `prereq_id` (`prereq_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`course_id`,`sec_id`,`semester`,`year`),
  ADD KEY `time_slot_id` (`time_slot_id`),
  ADD KEY `idx_sec_id` (`sec_id`),
  ADD KEY `building` (`building`,`room_number`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`ID`,`course_id`,`sec_id`,`semester`,`year`),
  ADD KEY `course_id` (`course_id`,`sec_id`,`semester`,`year`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`ID`,`course_id`,`sec_id`,`semester`,`year`),
  ADD KEY `course_id` (`course_id`,`sec_id`,`semester`,`year`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`time_slot_id`,`day`,`start_time`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advisor`
--
ALTER TABLE `advisor`
  ADD CONSTRAINT `advisor_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `advisor_ibfk_2` FOREIGN KEY (`i_id`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prereq`
--
ALTER TABLE `prereq`
  ADD CONSTRAINT `prereq_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prereq_ibfk_2` FOREIGN KEY (`prereq_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_2` FOREIGN KEY (`time_slot_id`) REFERENCES `time_slot` (`time_slot_id`),
  ADD CONSTRAINT `section_ibfk_3` FOREIGN KEY (`building`,`room_number`) REFERENCES `classroom` (`building`, `room_number`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `takes`
--
ALTER TABLE `takes`
  ADD CONSTRAINT `takes_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `student` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `takes_ibfk_2` FOREIGN KEY (`course_id`,`sec_id`,`semester`,`year`) REFERENCES `section` (`course_id`, `sec_id`, `semester`, `year`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `teaches_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teaches_ibfk_2` FOREIGN KEY (`course_id`,`sec_id`,`semester`,`year`) REFERENCES `section` (`course_id`, `sec_id`, `semester`, `year`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

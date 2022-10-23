-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 03:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgo`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_account_table`
--

CREATE TABLE `student_account_table` (
  `sr_code` varchar(10) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `privileges` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_account_table`
--

INSERT INTO `student_account_table` (`sr_code`, `password`, `privileges`) VALUES
('20-02126', 'eed20a72e5da2888138fd6f1b0770dc5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `sr_code` varchar(10) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_initial` varchar(1) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `year_level` varchar(10) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`sr_code`, `first_name`, `middle_initial`, `last_name`, `gender`, `birth_date`, `age`, `year_level`, `course`) VALUES
('20-02126', 'Justmyr', 'I', 'Gutierrez', 'Male', '2001-12-30', 20, '3rd Year', 'BS Information Technology');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_account_table`
--
ALTER TABLE `student_account_table`
  ADD KEY `sr_code` (`sr_code`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`sr_code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_account_table`
--
ALTER TABLE `student_account_table`
  ADD CONSTRAINT `student_account_table_ibfk_1` FOREIGN KEY (`sr_code`) REFERENCES `student_table` (`sr_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

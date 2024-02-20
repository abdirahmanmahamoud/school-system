-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2024 at 03:41 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `attedance`
--

CREATE TABLE `attedance` (
  `id` int NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `attedance`
--

INSERT INTO `attedance` (`id`, `firstname`, `class`, `status`) VALUES
(1, 'saiid Ali', 'form1', 'absent'),
(2, 'jamaal', 'form1', 'absent'),
(3, 'faadumo', 'form2', 'absent'),
(4, 'Abdirahman', 'form2', 'absent'),
(5, 'Abdirahman', 'form2', 'absent'),
(6, 'saciid', 'form2', 'absent'),
(7, 'saciid', 'form2', 'absent'),
(8, 'saiid Ali', 'form1', 'p'),
(9, 'jamaal', 'form1', 'p'),
(10, 'faadumo', 'form2', 'p'),
(11, 'Abdirahman', 'form2', 'p'),
(12, 'Abdirahman', 'form2', 'p'),
(13, 'saciid', 'form2', 'p'),
(14, 'saciid', 'form2', 'p'),
(15, 'saiid Ali', 'form1', 'WS'),
(16, 'jamaal', 'form1', 'WS'),
(17, 'faadumo', 'form2', 'WS'),
(18, 'Abdirahman', 'form2', 'WS'),
(19, 'Abdirahman', 'form2', 'WS'),
(20, 'saciid', 'form2', 'WS'),
(21, 'saciid', 'form2', 'WS'),
(22, 'saiid Ali', 'form1', 'Present'),
(23, 'jamaal', 'form1', 'Present'),
(24, 'faadumo', 'form2', 'Present'),
(25, 'Abdirahman', 'form2', 'Present'),
(26, 'Abdirahman', 'form2', 'Present'),
(27, 'saciid', 'form2', 'Present'),
(28, 'saciid', 'form2', 'Present'),
(29, 'saiid Ali', 'form1', 'Present'),
(30, 'jamaal', 'form1', 'Present'),
(31, 'faadumo', 'form2', 'Present'),
(32, 'Abdirahman', 'form2', 'Present'),
(33, 'Abdirahman', 'form2', 'Present'),
(34, 'saciid', 'form2', 'Present'),
(35, 'saciid', 'form2', 'Present'),
(36, 'saiid Ali', 'form1', 'Present'),
(37, 'jamaal', 'form1', 'Present'),
(38, 'faadumo', 'form2', 'Present'),
(39, 'Abdirahman', 'form2', 'Present'),
(40, 'Abdirahman', 'form2', 'Present'),
(41, 'saciid', 'form2', 'Present'),
(42, 'saciid', 'form2', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`) VALUES
(1, 'cali', '123');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int NOT NULL,
  `class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int NOT NULL,
  `firstname` varchar(254) DEFAULT NULL,
  `phone` int NOT NULL,
  `class` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `phone`, `class`, `section`) VALUES
(1, 'saiid Ali', 90765322, 'form1', 'A'),
(2, 'jamaal', 623633, 'form1', 'A'),
(3, 'faadumo', 976611, 'form2', 'A'),
(4, 'Abdirahman', 909897976, 'form2', 'A'),
(5, 'Abdirahman', 909897976, 'form2', 'A'),
(6, 'saciid', 90701778, 'form2', 'A'),
(7, 'saciid', 90701778, 'form2', 'A'),
(8, 'jamaal', 909897976, 'form2', 'B'),
(9, 'haruun', 90773233, 'form2', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attedance`
--
ALTER TABLE `attedance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attedance`
--
ALTER TABLE `attedance`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

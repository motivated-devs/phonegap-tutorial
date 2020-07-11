-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 12:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ettendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `mstusers`
--

CREATE TABLE `mstusers` (
  `UserId` bigint(20) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mstusers`
--

INSERT INTO `mstusers` (`UserId`, `FirstName`, `LastName`, `MiddleName`, `Gender`, `UserName`, `Password`, `date_added`, `date_updated`) VALUES
(1, 'Test', 'Test', 'test', 'Female', 'test', '098f6bcd4621d373cade4e832627b4f6', '2020-06-03 06:32:54', '0000-00-00 00:00:00'),
(2, 'Son Rhey', 'Deiparine', 'sonrhey', 'Male', 'sonrhey', 'ff29aa62b06e52bceb6235357664075a', '2020-06-03 06:37:42', '0000-00-00 00:00:00'),
(3, 'ds', 'sdsd', 'sd', 'Male', 'sd', '6226f7cbe59e99a90b5cef6f94f966fd', '2020-06-03 06:38:12', '0000-00-00 00:00:00'),
(4, 'sdsd', 'dsd', 'te', 'Male', 'te', '569ef72642be0fadd711d6a468d68ee1', '2020-06-03 06:39:11', '0000-00-00 00:00:00'),
(5, 'Pro', 'Pro', 'pro', 'Male', 'pro', '1f0f70bf2b5ad94c7387e64c16dc455a', '2020-06-03 06:39:29', '0000-00-00 00:00:00'),
(6, 'test', 'test', 'test', 'Male', 'test', '098f6bcd4621d373cade4e832627b4f6', '2020-06-25 21:42:10', '0000-00-00 00:00:00'),
(7, 'Son Rhey', 'Deiparine', 'son', 'Male', 'son', '498d3c6bfa033f6dc1be4fcc3c370aa7', '2020-06-25 22:25:30', '0000-00-00 00:00:00'),
(8, 'Test', 'Test', 'test', 'Female', 'test', '098f6bcd4621d373cade4e832627b4f6', '2020-07-08 11:13:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` bigint(20) NOT NULL,
  `task_code` varchar(10) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task_code`, `task_name`, `created_date`, `update_date`) VALUES
(1, 'TASK-001', 'TEST TASK TO DOS', '2020-06-25 15:23:21', '2020-06-25 15:23:21'),
(2, 'TASK-002', 'TEST 2 TASK MEN', '2020-06-25 15:24:11', '2020-06-25 15:24:11'),
(3, 'TASK-003', 'TEST 3', '2020-06-25 15:24:46', '2020-06-25 15:24:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mstusers`
--
ALTER TABLE `mstusers`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mstusers`
--
ALTER TABLE `mstusers`
  MODIFY `UserId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

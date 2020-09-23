-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 01:11 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `SID` int(8) NOT NULL,
  `Name` text NOT NULL,
  `FirstName` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Timing` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `SID`, `Name`, `FirstName`, `Email`, `Timing`) VALUES
(2, 16201006, 'Ashiqur Rahman', 'Ashiqur', 'ashiqur.rahm@hotmail.com', 'tue'),
(3, 16201005, 'Ashiqur Rahman', 'Ashiqur', 'ashiqur.rahm@hotmail.com', 'mon'),
(4, 16201004, 'Ashiqur Rahman', 'Ashiqur', 'ashiqur.rahm@hotmail.com', 'mon'),
(5, 16201006, 'Ashiqur Rahman', 'Ashiqur', 'ashiqur.rahm@hotmail.com', 'mon'),
(6, 16201003, 'Ashiqur Rahman', 'Ashiqur', 'ashiqur.rahm@hotmail.com', 'mon'),
(7, 16201002, 'Ashiqur Rahman', 'Ashiqur', 'ashiqur.rahm@hotmail.com', 'mon'),
(8, 16201001, 'Ashiqur Rahman', 'Ashiqur', 'ashiqur.rahm@hotmail.com', 'mon'),
(9, 16201007, 'Ashiqur Rahman', 'Ashiqur', 'ashiqur.rahm@hotmail.com', 'mon'),
(10, 16201008, 'Ashiqur Rahman', 'Ashiqur', 'ashiqur.rahm@hotmail.com', 'mon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

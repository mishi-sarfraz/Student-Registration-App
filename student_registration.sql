-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 02:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `C_Hrs` int(11) NOT NULL,
  `Created_By` varchar(30) NOT NULL,
  `Created_At` date NOT NULL,
  `Updated_By` varchar(30) DEFAULT NULL,
  `Updated_At` date DEFAULT NULL,
  `D_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Id`, `Name`, `C_Hrs`, `Created_By`, `Created_At`, `Updated_By`, `Updated_At`, `D_Id`) VALUES
(1, 'Chemistry', 30, '1', '2021-01-12', NULL, '2021-01-20', 13),
(3, 'Quantum Mechanics', 18, '1', '2021-01-12', NULL, '2021-01-20', 1),
(4, 'Mathematics', 37, '1', '2021-01-12', NULL, '2021-01-20', 3),
(6, 'Machine Learning', 30, '1', '2021-01-12', NULL, '2021-01-20', 12),
(7, 'Data Mining', 10, '1', '2021-01-12', NULL, '2021-01-20', 12),
(8, 'Technical Writing', 40, '1', '2021-01-12', NULL, '2021-01-20', 12),
(9, 'Calculus', 30, '1', '2021-01-12', NULL, '2021-01-20', 3),
(10, 'Software Engineering', 35, '1', '2021-01-12', NULL, '2021-01-20', 12),
(12, 'English Literature', 30, '1', '2021-01-14', NULL, '2021-01-20', 4),
(13, 'Shakespear Novel', 32, '1', '2021-01-20', NULL, '2021-01-20', 4),
(14, 'Solid State Physics', 17, '1', '2021-01-20', NULL, '2021-01-20', 1),
(15, 'Mathematical Methods of Physics', 20, '1', '2021-01-20', NULL, '2021-01-20', 1),
(16, 'Botany', 16, '1', '2021-01-20', NULL, NULL, 0),
(17, 'Mechanical Chemistry', 15, '1', '2021-01-20', NULL, '2021-01-20', 13),
(18, 'Bio Chemistry', 12, '1', '2021-01-20', NULL, '2021-01-20', 13);

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `Id` int(11) NOT NULL,
  `DName` varchar(30) NOT NULL,
  `Fees` int(30) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Created_By` varchar(50) NOT NULL,
  `Created_At` date NOT NULL,
  `Edited_By` varchar(10) DEFAULT NULL,
  `Edited_At` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`Id`, `DName`, `Fees`, `Course`, `Created_By`, `Created_At`, `Edited_By`, `Edited_At`) VALUES
(1, 'Msc(Phy)', 600000, '', '1', '2021-01-12', NULL, '2021-01-20'),
(2, 'Msc(Psycology)', 200000, '', '1', '2021-01-12', NULL, NULL),
(3, 'Msc(Math)', 300000, '', '1', '2021-01-12', NULL, NULL),
(4, 'M.A(Eng)', 100000, '', '1', '2021-01-12', NULL, NULL),
(5, 'M.A(Isl)', 100000, '', '1', '2021-01-12', NULL, '2021-01-12'),
(7, 'BBA', 800000, '', '1', '2021-01-17', NULL, NULL),
(9, 'MBA', 900000, '', '1', '2021-01-20', NULL, '2021-01-20'),
(11, 'Bsc(Phy)', 650000, '', '1', '2021-01-20', NULL, NULL),
(12, 'Ms(cs)', 800000, '', '1', '2021-01-20', NULL, NULL),
(13, 'Msc(chemistry)', 650000, '', '1', '2021-01-20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE `logintable` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`Id`, `Name`, `Password`) VALUES
(1, 'Admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Degree` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `Degree`) VALUES
(1, 'Abdullah Ahmad', '1'),
(2, 'Eshan Ahmad', '5'),
(3, 'Mahwish Sarfraz', '1'),
(4, 'Sarfraz Ahmad', '4'),
(5, 'Ali Zia', '7'),
(6, 'Hamza  Shah', '4'),
(7, 'Maryam Rayyaz', '13'),
(8, 'Mahwish Irshad', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `logintable`
--
ALTER TABLE `logintable`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `logintable`
--
ALTER TABLE `logintable`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

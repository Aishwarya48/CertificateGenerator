-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 05:32 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certificate`
--

-- --------------------------------------------------------

--
-- Table structure for table `bonafide_info`
--

CREATE TABLE `bonafide_info` (
  `Id` double NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Academic_Year` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bonafide_info`
--

INSERT INTO `bonafide_info` (`Id`, `Name`, `Class`, `Department`, `Academic_Year`, `Email`, `Mobile`) VALUES
(1, 'Aishwarya Sanjay Godse', 'TE', 'Computer Engineering', '2020-21', 'aishwaryagodse2607@gmail.com', 9067118389);

-- --------------------------------------------------------

--
-- Table structure for table `class_info`
--

CREATE TABLE `class_info` (
  `Class_id` varchar(255) NOT NULL,
  `Class_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_info`
--

INSERT INTO `class_info` (`Class_id`, `Class_name`) VALUES
('FoY02', 'Forth Year'),
('FY00', 'First Year'),
('SEA01', 'Second Year'),
('TEA00', 'Third Year');

-- --------------------------------------------------------

--
-- Table structure for table `department_info`
--

CREATE TABLE `department_info` (
  `Dept_id` varchar(255) NOT NULL,
  `Dept_name` varchar(255) NOT NULL,
  `HOD_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_info`
--

INSERT INTO `department_info` (`Dept_id`, `Dept_name`, `HOD_name`) VALUES
('DIC01', 'Computer Engineering', 'Dr. Archana Chaugule'),
('DICi04', 'Civil Engineering', 'QPR'),
('DIE05', 'ELECTRONICS AND TELECOMMUNICATION ENGINEERING', 'TRQ'),
('DIFY03', 'First-Year Engineering', 'ABC'),
('DIM02', 'Mechanical Engineering', 'prof. XYZ');

-- --------------------------------------------------------

--
-- Table structure for table `education_info`
--

CREATE TABLE `education_info` (
  `Schoolinfo_id` varchar(255) NOT NULL,
  `CAd_year` varchar(255) NOT NULL,
  `College_Name` varchar(255) NOT NULL DEFAULT 'PIMPRI CHINCHWAD COLLEGE OF ENGINEERING AND RESEARCH, RAVET',
  `Passing_year` varchar(255) NOT NULL,
  `Date_of_Admission` date DEFAULT NULL,
  `Academicyearstart` varchar(255) NOT NULL,
  `LastAttendedInstitute` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education_info`
--

INSERT INTO `education_info` (`Schoolinfo_id`, `CAd_year`, `College_Name`, `Passing_year`, `Date_of_Admission`, `Academicyearstart`, `LastAttendedInstitute`) VALUES
('EI01', '2020-21', 'PIMPRI CHINCHWAD COLLEGE OF ENGINEERING AND RESEARCH, RAVET', '2022', '2018-07-12', '2018', 'Sadguru Gadage Maharaj College Karad'),
('EI02', '2020-21', 'PIMPRI CHINCHWAD COLLEGE OF ENGINEERING AND RESEARCH, RAVET', '2022', '2018-07-17', '2018', 'ABC');

-- --------------------------------------------------------

--
-- Table structure for table `leaving_info`
--

CREATE TABLE `leaving_info` (
  `Id` double NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile_number` double NOT NULL,
  `Passing_Year` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaving_info`
--

INSERT INTO `leaving_info` (`Id`, `Name`, `Class`, `Department`, `Email`, `Mobile_number`, `Passing_Year`, `reason`) VALUES
(1, 'Amruta Kakasaheb Pandule', 'TE', 'Computer Engineering', 'amrutapandule2000@gmail.com', 9960724875, '2022', 'Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `UserName` varchar(255) NOT NULL,
  `NameofUser` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`UserName`, `NameofUser`, `Password`, `Usertype`) VALUES
('F0123456788', 'Aishwarya Godse', '2020', 'Student'),
('F0123456789', 'Admin', '2021', 'Faculty Member'),
('F0987655', 'XYZ', '2021', 'Faculty Member');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `Personalinfo_id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email_Id` varchar(255) NOT NULL,
  `Caste` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Place_of_Birth` varchar(255) NOT NULL,
  `Mothername` varchar(255) NOT NULL,
  `Fathername` varchar(255) NOT NULL,
  `Mobile` double NOT NULL,
  `Schoolinfo_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`Personalinfo_id`, `Name`, `Email_Id`, `Caste`, `Nationality`, `DateofBirth`, `Place_of_Birth`, `Mothername`, `Fathername`, `Mobile`, `Schoolinfo_id`) VALUES
('PI01', 'Aishwarya Sanjay Godse', 'aishwaryagodse48@gmail.com', 'Hindu-Maratha', 'Indian', '2000-07-26', 'Vaduj', 'Mangal', 'Sanjay Godse', 9067118389, 'EI01'),
('PI02', 'Amruta Kakasaheb Pandule', 'amrutapandule2000@gmail.com', '', 'Indian', '2000-06-06', 'Karjat', 'Meghana', 'Kakasaheb Pandule', 9960724875, 'EI02');

-- --------------------------------------------------------

--
-- Table structure for table `stud_info`
--

CREATE TABLE `stud_info` (
  `Stud_id` varchar(255) NOT NULL,
  `Stud_name` varchar(255) NOT NULL,
  `Dept_id` varchar(255) NOT NULL,
  `Class_id` varchar(255) NOT NULL,
  `Personalinfo_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_info`
--

INSERT INTO `stud_info` (`Stud_id`, `Stud_name`, `Dept_id`, `Class_id`, `Personalinfo_id`) VALUES
('FA01', 'Aishwarya Sanjay Godse', 'DIC01', 'TEA00', 'PI01'),
('FA02', 'Amruta Kakasaheb Pandule', 'DIC01', 'TEA00', 'PI02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonafide_info`
--
ALTER TABLE `bonafide_info`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `class_info`
--
ALTER TABLE `class_info`
  ADD PRIMARY KEY (`Class_id`);

--
-- Indexes for table `department_info`
--
ALTER TABLE `department_info`
  ADD PRIMARY KEY (`Dept_id`);

--
-- Indexes for table `education_info`
--
ALTER TABLE `education_info`
  ADD PRIMARY KEY (`Schoolinfo_id`);

--
-- Indexes for table `leaving_info`
--
ALTER TABLE `leaving_info`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`Personalinfo_id`),
  ADD KEY `Schoolinfo_id` (`Schoolinfo_id`);

--
-- Indexes for table `stud_info`
--
ALTER TABLE `stud_info`
  ADD PRIMARY KEY (`Stud_id`),
  ADD KEY `Dept_id` (`Dept_id`),
  ADD KEY `Class_id` (`Class_id`),
  ADD KEY `Personalinfo_id` (`Personalinfo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bonafide_info`
--
ALTER TABLE `bonafide_info`
  MODIFY `Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leaving_info`
--
ALTER TABLE `leaving_info`
  MODIFY `Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD CONSTRAINT `personal_info_ibfk_1` FOREIGN KEY (`Schoolinfo_id`) REFERENCES `education_info` (`Schoolinfo_id`);

--
-- Constraints for table `stud_info`
--
ALTER TABLE `stud_info`
  ADD CONSTRAINT `stud_info_ibfk_1` FOREIGN KEY (`Dept_id`) REFERENCES `department_info` (`Dept_id`),
  ADD CONSTRAINT `stud_info_ibfk_2` FOREIGN KEY (`Class_id`) REFERENCES `class_info` (`Class_id`),
  ADD CONSTRAINT `stud_info_ibfk_3` FOREIGN KEY (`Personalinfo_id`) REFERENCES `personal_info` (`Personalinfo_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

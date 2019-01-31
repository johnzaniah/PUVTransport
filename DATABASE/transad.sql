-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 10:19 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transad`
--

-- --------------------------------------------------------

--
-- Table structure for table `birth`
--

CREATE TABLE `birth` (
  `birthID` int(11) NOT NULL,
  `age` int(2) NOT NULL,
  `bdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birth`
--

INSERT INTO `birth` (`birthID`, `age`, `bdate`) VALUES
(1, 21, '1997-09-15'),
(2, 31, '1987-09-15'),
(3, 41, '1977-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `driver_license`
--

CREATE TABLE `driver_license` (
  `DriverID` int(11) NOT NULL,
  `license_no` varchar(20) NOT NULL,
  `plate_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_license`
--

INSERT INTO `driver_license` (`DriverID`, `license_no`, `plate_no`) VALUES
(1, '21-423-5123', 'Unga'),
(2, '32-5123-123', 'H4ck'),
(3, '81-2314-214', '51NGK0');

-- --------------------------------------------------------

--
-- Table structure for table `education_level`
--

CREATE TABLE `education_level` (
  `eduID` int(11) NOT NULL,
  `level` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_level`
--

INSERT INTO `education_level` (`eduID`, `level`) VALUES
(1, 'None'),
(2, 'Elementary Graduate'),
(3, 'Highschool Graduate'),
(4, 'College Graduate');

-- --------------------------------------------------------

--
-- Table structure for table `employee_contact`
--

CREATE TABLE `employee_contact` (
  `contactID` int(11) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Contact_no` bigint(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_contact`
--

INSERT INTO `employee_contact` (`contactID`, `Address`, `Contact_no`, `email`) VALUES
(1, '2373 F munoz', 9158152950, 'sleeplesszaniah@gmail.com'),
(2, '2819 Estrada', NULL, 'toastedbread69@yahoo.com'),
(3, '2562 Tondo', 9736159482, '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `emp_no` int(11) NOT NULL,
  `sex_id` int(11) NOT NULL,
  `eduID` int(11) NOT NULL,
  `contactID` int(11) NOT NULL,
  `vehicleID` int(11) NOT NULL,
  `Nationality` int(11) NOT NULL,
  `DriverID` int(11) NOT NULL,
  `BirthID` int(11) NOT NULL,
  `yrhired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`emp_no`, `sex_id`, `eduID`, `contactID`, `vehicleID`, `Nationality`, `DriverID`, `BirthID`, `yrhired`) VALUES
(1, 1, 3, 1, 2, 4, 1, 1, '2019-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `employee_name`
--

CREATE TABLE `employee_name` (
  `emp_no` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_name`
--

INSERT INTO `employee_name` (`emp_no`, `fname`, `lname`) VALUES
(1, 'John Kevin', 'Roman'),
(2, 'John Raphael', 'Deguzman'),
(3, 'Zandro', 'Dadulla');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `sex_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`sex_id`, `gender`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `nationID` int(11) NOT NULL,
  `nationality` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`nationID`, `nationality`) VALUES
(1, 'Filipino'),
(2, 'American'),
(3, 'Canadian'),
(4, 'Russian'),
(5, 'Japanese'),
(6, 'Korean'),
(7, 'German'),
(8, 'Chinese'),
(9, 'Indian'),
(10, 'French'),
(11, 'England'),
(12, 'Indonesia'),
(13, 'Malaysia');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_identity`
--

CREATE TABLE `vehicle_identity` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_identity`
--

INSERT INTO `vehicle_identity` (`vehicle_id`, `vehicle_type`) VALUES
(1, 'Bus'),
(2, 'Jeep'),
(3, 'UV'),
(4, 'Taxi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birth`
--
ALTER TABLE `birth`
  ADD PRIMARY KEY (`birthID`);

--
-- Indexes for table `driver_license`
--
ALTER TABLE `driver_license`
  ADD PRIMARY KEY (`DriverID`);

--
-- Indexes for table `education_level`
--
ALTER TABLE `education_level`
  ADD PRIMARY KEY (`eduID`);

--
-- Indexes for table `employee_contact`
--
ALTER TABLE `employee_contact`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD KEY `BirthID` (`BirthID`),
  ADD KEY `contactID` (`contactID`),
  ADD KEY `DriverID` (`DriverID`),
  ADD KEY `eduID` (`eduID`),
  ADD KEY `emp_no` (`emp_no`),
  ADD KEY `Nationality` (`Nationality`),
  ADD KEY `sex_id` (`sex_id`),
  ADD KEY `vehicleID` (`vehicleID`);

--
-- Indexes for table `employee_name`
--
ALTER TABLE `employee_name`
  ADD PRIMARY KEY (`emp_no`) USING BTREE;

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`sex_id`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`nationID`);

--
-- Indexes for table `vehicle_identity`
--
ALTER TABLE `vehicle_identity`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birth`
--
ALTER TABLE `birth`
  MODIFY `birthID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver_license`
--
ALTER TABLE `driver_license`
  MODIFY `DriverID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_contact`
--
ALTER TABLE `employee_contact`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_name`
--
ALTER TABLE `employee_name`
  MODIFY `emp_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD CONSTRAINT `employee_info_ibfk_1` FOREIGN KEY (`BirthID`) REFERENCES `birth` (`birthID`),
  ADD CONSTRAINT `employee_info_ibfk_2` FOREIGN KEY (`contactID`) REFERENCES `employee_contact` (`contactID`),
  ADD CONSTRAINT `employee_info_ibfk_3` FOREIGN KEY (`DriverID`) REFERENCES `driver_license` (`DriverID`),
  ADD CONSTRAINT `employee_info_ibfk_4` FOREIGN KEY (`eduID`) REFERENCES `education_level` (`eduID`),
  ADD CONSTRAINT `employee_info_ibfk_5` FOREIGN KEY (`emp_no`) REFERENCES `employee_name` (`emp_no`),
  ADD CONSTRAINT `employee_info_ibfk_6` FOREIGN KEY (`Nationality`) REFERENCES `nationality` (`nationID`),
  ADD CONSTRAINT `employee_info_ibfk_7` FOREIGN KEY (`sex_id`) REFERENCES `gender` (`sex_id`),
  ADD CONSTRAINT `employee_info_ibfk_8` FOREIGN KEY (`vehicleID`) REFERENCES `vehicle_identity` (`vehicle_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

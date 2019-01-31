-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 05:42 AM
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
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver_employee`
--

CREATE TABLE `driver_employee` (
  `id_no` int(30) NOT NULL,
  `licence` varchar(15) NOT NULL,
  `plateno` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `edulevel` varchar(50) NOT NULL,
  `vehicletype` varchar(15) NOT NULL,
  `yrhired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_employee`
--

INSERT INTO `driver_employee` (`id_no`, `licence`, `plateno`, `fname`, `lastname`, `age`, `gender`, `address`, `contact`, `email`, `bdate`, `nationality`, `edulevel`, `vehicletype`, `yrhired`) VALUES
(51235, '52-4513-126', 'MUrr4y', 'Phillip', 'Murray', 30, 'Male', '2715 Solaris Ridge', 1625381, 'Filipe_avalanche', '1980-04-21', 'Scottish', 'Elementary Graduate', 'Humvee', '2019-01-31'),
(271518, '21-512-2112', 'Ung4', 'Ellie', 'Weaver', 20, 'Female', '221 USS Cyberiad', 726481812, 'toasted@yahoo.com', '1998-02-19', 'American', 'Highschool Graduate', 'Space Bus', '2019-01-07'),
(1231124, '12-512-56', 'Hall4', 'Humba', 'Khalid', 21, 'Male', '241 GAfuhiuh', 122146861, 'asd1@gmail.com', '1990-01-09', 'Arab', 'Elementary Graduate', 'Virgin Bus', '2019-01-18'),
(1724129, '21-5121-12412', 'K0rn', 'Ali', 'Khalid', 25, 'Male', '52 sgyashdias', 1234234, '1242@gsf', '1990-01-08', 'Arab', 'Elementary Graduate', 'Virgin Bus', '2020-01-24'),
(12376865, '452-124-12', 'H0tD0g', 'Jong', 'Cayabyab', 52, 'Female', '215 Hell', 124618, 'q1sad@gmail.com', '1967-12-22', 'Demon', 'Highschool Graduate', 'Hell Bus', '2019-01-15'),
(1521512312, '15-2123-12212', 'Unga123', 'John Kevin', 'Roman', 21, 'Male', '2373 F Munoz', 5235057, 'sleeplesszaniah@gmail.com', '1997-09-15', 'Filipino', 'College Graduate', 'Bus', '2019-01-31'),
(2147483647, '1623-512-212', 'G4y', 'Karl', 'Dofitas', 29, 'Male', '232 gawe st', 23681263, 'gfsdjfh@gahfds.com', '1996-01-23', 'Filipono', 'College Graduate', 'Spess Jeep', '2019-01-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver_employee`
--
ALTER TABLE `driver_employee`
  ADD PRIMARY KEY (`id_no`),
  ADD UNIQUE KEY `licence` (`licence`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

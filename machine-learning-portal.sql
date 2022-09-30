-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 05:01 AM
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
-- Database: `machine-learning-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `userID` int(11) DEFAULT NULL,
  `username` varchar(55) DEFAULT NULL,
  `userPassWord` varchar(100) DEFAULT NULL,
  `displayName` varchar(100) DEFAULT NULL,
  `permissions` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`userID`, `username`, `userPassWord`, `displayName`, `permissions`) VALUES
(1, 'MacJones', 'Pats', 'Mac', 'All'),
(2, 'JoeyB', 'Cinci', 'Joe', 'All'),
(3, 'KirkC', 'trash', 'Kirk', 'None'),
(4, 'AARon', 'Oldman', 'Rodgers', 'All'),
(4, 'JoshA', 'Runner', 'Josh', 'All');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `topics` varchar(100) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `keywords` varchar(20) DEFAULT NULL,
  `Links` varchar(500) DEFAULT NULL,
  `userID` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `topics`, `Description`, `Type`, `keywords`, `Links`, `userID`) VALUES
(1, 'Dogs', 'Blue', 'Male', 'big', 'https://www.unitedartistsreleasing.com/dog/', '1'),
(2, 'Sea', 'Vast', 'Alex', 'Toast, Burn', 'https://sea.edu/', '2'),
(3, 'Blue origin', 'Space', 'Commercial', 'Fly', 'https://www.blueorigin.com/', '3'),
(4, 'spaceX', 'Space', 'Industrial ', 'Dark', 'https://www.spacex.com/', '4'),
(5, 'Football', 'Green', 'Sport', 'Minnesota', 'https://www.nfl.com/', '5'),
(6, 'Potatoes', 'Brown', 'Food', 'Good', 'https://potatogoodness.com/', '6'),
(7, 'Walmart', 'groceries ', 'Industrial', 'Chain', 'https://www.walmart.com/', '7'),
(8, 'Dolphins', 'Sleek', 'Animal ', 'Grey', 'https://www.miamidolphins.com/', '8'),
(9, 'Tigers', 'Orange', 'Animal', 'Hunter', 'https://www.bengals.com/', '9'),
(10, 'Pasta', 'Wheat', 'Food', 'Carb', 'https://www.foodnetwork.com/', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

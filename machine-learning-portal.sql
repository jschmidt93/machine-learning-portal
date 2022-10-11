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
  `description` varchar(2000) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `keywords` varchar(20) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `user_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `topics`, `description`, `type`, `keywords`, `link`, `user_id`) VALUES
(1, 'Gaussian Processes', 'a generic supervised learning method designed to solve regression and probabilistic classification problems.', 
'Supervised Learning', 'GPR', 'https://scikit-learn.org/stable/modules/gaussian_process.html#:~:text=Gaussian%20Processes%20(GP)%20are%20a,at%20least%20for%20regular%20kernels).', '1'),
(2, 'Naive Bayes', 'Is a classification algorithm that uses Bayes theorem', 'Supervised Learning', 
'Bayes', 'https://scikit-learn.org/stable/modules/naive_bayes.html', '2'),
(3, 'Cross decomposition', 'Is an algorithm that will find the similaries between two matrices', 'Supervised Learning', 'matrices', 'https://scikit-learn.org/stable/modules/cross_decomposition.html', '3'),
(4, 'Decision Trees', 'Are used for classicfication and regression methods', 'Supervised Learning ', 'Tree', 'https://scikit-learn.org/stable/modules/tree.html', '4'),
(5, 'Clustering', 'These algorithms have two parts one that trains the data. The other that trains the data', 
'Unsupervised Learning', 'Unsupervised Learning', 'https://scikit-learn.org/stable/modules/clustering.html', '5'),
(6, 'Manifold learning', 'Data in these sets take a non leaner approach', 'Unsupervised Learning', 'Unsupervised Learning', 'https://scikit-learn.org/stable/modules/manifold.html', '6'),
(7, 'Gaussian mixture models', 'Is a model that takes into account the possible of mixted finite numbers for data sets. It generates their proablilty ', 'Unsupervised learning', 'Unsupervised learning, Gaussian', 'https://www.walmart.com/', '7'),
(8, 'Biclustering', 'It will cluster rows and columns of matrixs', 'Unsupervised learning ', 'Unsupervised learning, clustering', 'https://www.miamidolphins.com/', '8'),
(9, 'Density Estimation', 'Can use models like Gaussian Mixtures or kernel density. To estimate the density of data sets.', 'Unsupervised learning', 'Unsupervised learning', 'https://scikit-learn.org/stable/modules/density.html', '9'),
(10, 'Neural network models', 'Restricted Boltzmann machines are one kind of neural network mdoels. This model assumes inputs are binary.This data would be encoded.',
 'Unsupervised learning', 'Unsupervised learning, Neural networks', 'https://scikit-learn.org/stable/modules/neural_networks_unsupervised.html', '10');

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

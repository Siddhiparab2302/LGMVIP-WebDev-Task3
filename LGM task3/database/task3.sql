-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 29, 2021 at 04:32 AM
-- Server version: 5.7.28
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) COLLATE latin1_bin NOT NULL,
  `admin_email` varchar(255) COLLATE latin1_bin NOT NULL,
  `admin_pass` varchar(255) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` text COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`) VALUES
(1, 'First Year'),
(2, 'Second Year'),
(3, 'Third Year'),
(4, 'Fourth Year');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `stu_roll` int(3) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  `p1` int(3) NOT NULL,
  `p2` int(3) NOT NULL,
  `p3` int(3) NOT NULL,
  `p4` int(3) NOT NULL,
  `p5` int(3) NOT NULL,
  `marks` int(3) NOT NULL,
  `percentage` float NOT NULL,
  KEY `class` (`class_name`),
  KEY `name` (`stu_roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`stu_roll`, `class_name`, `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage`) VALUES
(404, 'Fourth Year', 65, 72, 80, 89, 70, 376, 75.2),
(203, 'Second Year', 78, 93, 85, 89, 96, 441, 88.2),
(301, 'Third Year', 83, 77, 87, 94, 75, 416, 83.2),
(101, 'First Year', 83, 90, 96, 92, 93, 454, 90.8);

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

DROP TABLE IF EXISTS `student1`;
CREATE TABLE IF NOT EXISTS `student1` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `stu_roll` int(11) NOT NULL,
  `stu_class` varchar(255) COLLATE latin1_bin NOT NULL,
  UNIQUE KEY `stu_id` (`stu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`stu_id`, `stu_name`, `stu_roll`, `stu_class`) VALUES
(33, 'Harry Johnson', 301, 'Third Year'),
(32, 'Tim Taylor', 302, 'Third Year'),
(31, 'Michael', 204, 'Second Year'),
(30, 'Will Smith', 404, 'Fourth Year'),
(29, 'Flona Smith', 303, 'Third Year'),
(28, 'lisa', 201, 'Second Year'),
(27, 'John', 101, 'First Year'),
(34, 'David Hill', 105, 'First Year'),
(35, 'Priti Kabaria', 102, 'First Year'),
(36, 'Edwards Baker', 402, 'Fourth Year'),
(37, 'Charlie Monroy', 203, 'Second Year');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

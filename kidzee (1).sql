-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2017 at 01:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kidzee`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmission`
--

CREATE TABLE `addmission` (
  `date` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `father_name` text NOT NULL,
  `occupation` text NOT NULL,
  `mother_name` text NOT NULL,
  `mother_occupation` text NOT NULL,
  `address` varchar(60) NOT NULL,
  `telephone_no` bigint(15) NOT NULL,
  `mob_no` bigint(12) NOT NULL,
  `religion` text NOT NULL,
  `caste` text NOT NULL,
  `previous_school` text NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmission`
--

INSERT INTO `addmission` (`date`, `image`, `name`, `dob`, `gender`, `father_name`, `occupation`, `mother_name`, `mother_occupation`, `address`, `telephone_no`, `mob_no`, `religion`, `caste`, `previous_school`, `class`) VALUES
('2017-05-30', '', 'uuyy', '2017-06-01', 'Female', 'jyguyg', 'uyguyf', 'yguyug', 'jjyguyg', 'yjygyj', 5654, 0, 'rr', 'uuy', 'yuuyy', 'Play_Group');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

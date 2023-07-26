-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2022 at 07:38 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `holidaytrips`
--

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `PackageCode` varchar(10) NOT NULL,
  `PackageName` varchar(100) NOT NULL,
  `PlacesOfVisit` varchar(300) NOT NULL,
  `TripDuration` varchar(100) NOT NULL,
  `Fare` decimal(10,0) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `IncludeFood` varchar(3) NOT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`SNo`),
  UNIQUE KEY `SNo` (`SNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

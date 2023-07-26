-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2022 at 12:43 PM
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
-- Table structure for table `admintable`
--

CREATE TABLE IF NOT EXISTS `admintable` (
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`UserName`, `Password`) VALUES
('a', 'a'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `BookingCode` varchar(10) NOT NULL,
  `ScheduleCode` varchar(10) NOT NULL,
  `CustomerCode` varchar(10) NOT NULL,
  `EntryDate` date NOT NULL,
  `SeatsRequired` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`SNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`SNo`, `BookingCode`, `ScheduleCode`, `CustomerCode`, `EntryDate`, `SeatsRequired`, `Status`) VALUES
(1, 'B001', 'S001', 'C001', '2022-05-13', 1, 'Approved'),
(2, 'B002', 'S002', 'C001', '2022-05-13', 1, 'Pending'),
(3, 'B003', 'S003', 'C001', '2022-05-13', 1, 'Pending'),
(4, 'B004', 'S003', 'C001', '2022-05-13', 2, 'Approved'),
(5, 'B005', 'S004', 'C002', '2022-05-13', 4, 'Approved'),
(6, 'B006', 'S004', 'C002', '2022-05-13', 3, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `customertable`
--

CREATE TABLE IF NOT EXISTS `customertable` (
  `CustomerCode` varchar(10) NOT NULL,
  `CustomerName` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `ContactNo` varchar(12) NOT NULL,
  `EmailId` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (`EmailId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customertable`
--

INSERT INTO `customertable` (`CustomerCode`, `CustomerName`, `Address`, `ContactNo`, `EmailId`, `Password`) VALUES
('C002', 'ar', 'a', '8220454013', 'a@a.com', '12345678'),
('C001', 'Aruna', '10, PS Park, Erode', '8220454003', 'aruna@gmail.com', '12345678');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`SNo`, `PackageCode`, `PackageName`, `PlacesOfVisit`, `TripDuration`, `Fare`, `Description`, `IncludeFood`, `Image`) VALUES
(1, 'P001', 'Tirupati Yatra', 'Tirupati, Melmaruvatthur', '2 Days', '2500', '3 Star Hotel, Mineral Water, Pooja Booking Free', 'Yes', 'P001.jpg'),
(3, 'P002', 'KaalaHashthi Yatra', 'Kalahashthi, Tirupati, Melmaruvatthur', '3 Days', '3500', '3 Star Hotel, Mineral Water, Pooja Booking Free', 'Yes', 'P002.jpg'),
(4, 'P003', 'Palan Yatra', 'Palani, Tiruengoimalai', '2 Days', '2500', '3 Star Hotel, Mineral Water, Pooja Booking Free', 'Yes', 'P003.jpg'),
(5, 'P005', 'Rameshwaram', 'Rameshwaram, Tenkasi, Palani', '3 Days', '3000', '3 Star Hotel, Food 3 times', 'Yes', 'P005.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `BookingCode` varchar(10) NOT NULL,
  `EntryDate` date NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Mode` varchar(10) NOT NULL,
  `Amount` decimal(10,0) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`SNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`SNo`, `BookingCode`, `EntryDate`, `Status`, `Mode`, `Amount`, `Description`) VALUES
(1, 'B001', '2022-05-13', 'Approved', 'Cash', '2500', 'Received'),
(2, 'B001', '2022-05-13', 'Approved', 'Cash', '2500', 'Received'),
(4, 'B004', '2022-05-13', 'Approved', 'Cash', '5000', 'Amount received'),
(5, 'B005', '2022-05-13', 'Approved', 'Cash', '10000', 'Received'),
(6, 'B006', '2022-05-13', 'Approved', 'Cash', '7500', 'Received');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `EntryDate` date NOT NULL,
  `CustomerCode` varchar(10) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`SNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`SNo`, `EntryDate`, `CustomerCode`, `Rating`, `Description`) VALUES
(6, '2022-05-13', 'C001', 5, 'Nice');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `ScheduleCode` varchar(10) NOT NULL,
  `PackageCode` varchar(10) NOT NULL,
  `TransportCode` varchar(10) NOT NULL,
  `DepartureDate` date NOT NULL,
  `DepartureTime` varchar(20) NOT NULL,
  `MaxMembers` int(11) NOT NULL,
  `Available` int(11) NOT NULL,
  PRIMARY KEY (`SNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`SNo`, `ScheduleCode`, `PackageCode`, `TransportCode`, `DepartureDate`, `DepartureTime`, `MaxMembers`, `Available`) VALUES
(1, 'S001', 'P001', 'T001', '2022-05-13', '8:00 PM', 50, 50),
(3, 'S002', 'P002', 'T002', '2022-05-14', '8:00 PM', 50, 50),
(4, 'S003', 'P003', 'T003', '2022-05-15', '8:00 PM', 50, 50),
(5, 'S004', 'P001', 'T001', '2022-05-13', '10:00 pm', 50, 47);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `TransportCode` varchar(10) NOT NULL,
  `NameOfTransport` varchar(50) NOT NULL,
  `Registration` varchar(20) NOT NULL,
  `MFGYear` varchar(20) NOT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`SNo`),
  UNIQUE KEY `SNo` (`SNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

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

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`SNo`, `TransportCode`, `NameOfTransport`, `Registration`, `MFGYear`, `Image`) VALUES
(1, 'T001', 'Rajam Travels', 'TN 33-9089', '2017', 'T001.jpg'),
(2, 'T002', 'Rajam Divine Travellers', 'TN 33-9099', '2016', 'T002.jpg'),
(3, 'T003', 'Rajam Spiritual Journey', 'TN 33-9189', '2018', 'T003.jpg'),
(5, 'T004', 'Rajam Devotees Special', 'TN 33-9289', '2020', 'T004.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

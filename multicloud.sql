-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2025 at 12:41 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `multicloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `cloud`
--

CREATE TABLE IF NOT EXISTS `cloud` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `ufile` text NOT NULL,
  `location` text NOT NULL,
  `vc` int(5) NOT NULL,
  `customer` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `cloud`
--

INSERT INTO `cloud` (`cid`, `ufile`, `location`, `vc`, `customer`) VALUES
(1, 'pradeepa.txt', 'coimbatore', 5, 'pradheepa'),
(2, 'pavithra.txt', 'madurai', 1, 'pavithra'),
(3, 'ramesh.txt', 'chennai', 2, 'ramesh'),
(4, 'Jellyfish.jpg', 'coimbatore', 1, 'pradheepa'),
(5, 'Desert.jpg', 'chennai', 1, 'bharani'),
(6, 'Tulips.jpg', 'coimbatore', 0, 'pradheepa'),
(7, 'Penguins.jpg', 'coimbatore', 1, 'manoj'),
(8, 'c pro.txt', 'coimbatore', 0, 'bharani'),
(9, 'c pro.txt', 'chennai', 0, 'sandhiya'),
(10, 'c pro.txt', 'madurai', 0, 'sandhiya'),
(11, 'BMI Calculator.docx', 'coimbatore', 0, 'pavithra'),
(12, 'WhatsApp Image 2025-04-15 at 10.25.45 PM.jpeg', 'coimbatore', 2, 'rashik');

-- --------------------------------------------------------

--
-- Table structure for table `cloudmngr`
--

CREATE TABLE IF NOT EXISTS `cloudmngr` (
  `eid` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `upass` varchar(50) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cloudmngr`
--

INSERT INTO `cloudmngr` (`eid`, `fname`, `uname`, `upass`) VALUES
(1, 'cspadmin', 'admin', 'admin'),
(2, 'chellamani', 'chellamani', 'chellamani'),
(3, 'mani', 'mani', 'mani'),
(4, 'arthi', 'pappy', 'pappy'),
(5, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `eid` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `uplace` text NOT NULL,
  `registernumber` varchar(15) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`eid`, `fname`, `phone`, `email`, `uname`, `upass`, `uplace`, `registernumber`) VALUES
(5, 'aiswarya', '9543252353', 'aiswarya@gmail.com', 'aiswarya', 'aiswarya', 'coimbatore', '15bct102'),
(6, 'sandhiya', '3244124213', 'sandhiya@gmail.com', 'sandhiya', 'sandhiya', 'coimbatore', '4561245'),
(7, 'ramesh', '234124124', 'ramesh@gmail.com', 'ramesh', 'ramesh', 'chennai', '76848'),
(8, 'pavithra', '4563534', 'pavithra@gmail.com', 'pavithra', 'pavithra', 'madurai', '12345'),
(9, 'pradheepa', '5435354', 'pradheepak14mss034@skasc.ac.in', 'pradheepa', 'pradheepa', 'coimbatore', '14mss034'),
(10, 'bharani', '9885498745', 'bharani@gmail.com', 'bharani', 'bharani', 'chennai', '16bcs008'),
(11, 'manoj', '999432423', 'manoj@gmail.com', 'manoj', 'manoj', 'coimbatore', '16bcs001'),
(12, 'chellamani', '9597841162', 'mani@gmail.com', 'chellamani', 'chellamani', 'madurai', '6789'),
(13, 'Rashik', '9188304044', 'Rashikks715@gmail.com', 'rashik', 'rashik', 'coimbatore', '72092123045');

-- --------------------------------------------------------

--
-- Table structure for table `dresult`
--

CREATE TABLE IF NOT EXISTS `dresult` (
  `drid` int(5) NOT NULL AUTO_INCREMENT,
  `ufile` text NOT NULL,
  `dept` text NOT NULL,
  PRIMARY KEY (`drid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hour`
--

CREATE TABLE IF NOT EXISTS `hour` (
  `hid` int(5) NOT NULL AUTO_INCREMENT,
  `hour` int(5) NOT NULL,
  `user` text NOT NULL,
  `cost` int(5) NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `hour`
--

INSERT INTO `hour` (`hid`, `hour`, `user`, `cost`) VALUES
(1, 10, 'praveen', 200),
(2, 5, 'sandhiya', 1000),
(3, 10, 'ramesh', 0),
(4, 10, 'pavithra', 500),
(5, 2, 'pavithra', 1000),
(6, 8, 'pradheepa', 50),
(7, 5, 'ramesh', 0),
(8, 5, 'ramesh', 0),
(9, 2, 'rashik', 0);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `rid` int(5) NOT NULL AUTO_INCREMENT,
  `rtype` text NOT NULL,
  `sname1` text NOT NULL,
  `smark1` text NOT NULL,
  `sresult1` text NOT NULL,
  `sname2` text NOT NULL,
  `smark2` text NOT NULL,
  `sresult2` text NOT NULL,
  `sname3` text NOT NULL,
  `smark3` text NOT NULL,
  `sresult3` text NOT NULL,
  `sname4` text NOT NULL,
  `smark4` text NOT NULL,
  `sresult4` text NOT NULL,
  `sname5` text NOT NULL,
  `smark5` text NOT NULL,
  `sresult5` text NOT NULL,
  `usid` text NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

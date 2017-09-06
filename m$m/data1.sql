-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2017 at 01:26 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE IF NOT EXISTS `data1` (
  `event_id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `event_to` varchar(50) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `event_category` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `event_location` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`event_id`, `name`, `email`, `date`, `event_to`, `relation`, `event_category`, `contact_number`, `event_location`, `description`) VALUES
(3, 'amar', 'antipas.g@gmail.com', '2012-12-01', 'event to', 'relation', 'catagory', '32345765', 'LOCATION', 'discr;dlkf'),
(13, '', '', '0000-00-00', '', '', 'birthday', '', '', ''),
(15, 'name', 'email@gmail.com', '2012-12-12', 'brothe', 'sis', 'Anniversary/wedding', '1234568765', 'chalrk', 'discriptin'),
(16, 'name', 'email@gmail.com', '2012-12-12', 'brothe', 'sis', 'Anniversary/wedding', '1234568765', 'chalrk', 'discriptin'),
(17, 'name', 'email@gmail.com', '2012-12-12', 'brothe', 'sis', 'Anniversary/wedding', '1234568765', 'chalrk', 'discriptin'),
(18, 'name', 'email@gmail.com', '2012-12-12', 'brothe', 'sis', 'Anniversary/wedding', '1234568765', 'chalrk', 'discriptin'),
(19, 'dfdfd', 'antipas.g@gmail.com', '2017-09-13', 'dfdf', '', 'proposal', 'dfd', 'dfdf', 'dfdfdf'),
(20, 'dfdfd', 'antipas.g@gmail.com', '2017-09-01', 'dfdf', '', 'proposal', '', 'dfdf', 'dfdfdf'),
(21, 'dfdfd', 'antipas.g@gmail.com', '0000-00-00', 'dfdf', '', 'proposal', '', 'dfdf', 'dfdfdf'),
(22, 'dfdfd', 'antipas.g@gmail.com', '0000-00-00', 'dfdf', 'w', 'proposal', '', 'w', 'dfdfdf'),
(23, 'dfdfd', 'antipas.g@gmail.com', '0000-00-00', 'dfdf', 'w', 'proposal', 'dfd', 'w', 'dfdfdf'),
(24, 'dfdfd', 'antipas.g@gmail.com', '0000-00-00', 'dfdf', 'w', 'proposal', 'dfd', 'w', 'dfdfdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

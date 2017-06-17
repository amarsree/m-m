-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 09:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stdroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE IF NOT EXISTS `img` (
  `rid` int(11) NOT NULL,
  `img1` varchar(30) NOT NULL,
  `img2` varchar(30) DEFAULT NULL,
  `img3` varchar(30) DEFAULT NULL,
  `img4` varchar(30) DEFAULT NULL,
  `img5` varchar(30) DEFAULT NULL,
  UNIQUE KEY `rid` (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`rid`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(23, 'upd;fk', 'gg', 'df', 'df', 'df');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `rid` int(4) NOT NULL AUTO_INCREMENT,
  `lname` varchar(30) NOT NULL,
  `rent` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(6) NOT NULL,
  `for_g` varchar(5) NOT NULL,
  `discription` text NOT NULL,
  `conditions` text NOT NULL,
  `about_owner` text NOT NULL,
  `contact` varchar(12) NOT NULL,
  `photos` int(11) NOT NULL,
  `lat` int(20) NOT NULL,
  `lng` int(20) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`rid`, `lname`, `rent`, `total`, `status`, `for_g`, `discription`, `conditions`, `about_owner`, `contact`, `photos`, `lat`, `lng`, `time_stamp`) VALUES
(3, 'locstion', 12, 23, 'TOLET', 'GIRLS', 'DICS', 'COIND', 'ABOURT', 'CONT', 0, 14, 1, '2017-05-14 07:31:43'),
(4, 'bhiveram', 123, 4, 'TOLET', 'BOYS', 'thsgood', 'noii conds', 'worst', '134 \r\nDFDSLF', 24, 16, 24, '2017-05-14 08:33:23'),
(5, 'CHENAMERAN', 123, 2, 'FILLED', 'GIRLS', 'DHE IS GOOD BUT NO T AT AGGG\nHRE DNVEVT\nGLSDTJRLEKJDHE IS GOOD BUT NO T AT AGGG\nHRE DNVEVT\nGLSDTJRLEKJDHE IS GOOD BUT NO T AT AGGG\nHRE DNVEVT\nGLSDTJRLEKJ', 'CONDITON IS A DSKRJG KDJTHLDT chat is to be felt in the uyyala uaga telesinde kuricinde ', 'owner is a worst in the part so the he can do any thing he want vadana ooo', 'aaaa tintnd\r', 43, 83, 43, '2017-05-14 08:36:06'),
(6, 'koyyalagusen', 100, 2, 'TOLET', 'GIRLS', 'dist', 'hello', 'to sqlkjldkrj dfd fd f gd gd', 'hg5rerhfg rg', 74, 3, 73, '2017-05-14 09:34:22'),
(7, 'bhiveram', 200, 2, 'FILLED', 'BOYS', 'good', 'oncdd', 'woesrtkdgkj dgfds f', '21345865432', 1, 4, 1, '2017-05-24 05:05:21'),
(8, 'dsfdsf', 0, 0, 'TOLET', 'GIRLS', 'dsf', 'dsfdsf', 'dsfdsf', 'fdsf', 53, 78, 58, '2017-05-28 06:17:01'),
(9, 'klsdk`', 123, 121, 'TOLET', 'GIRLS', 'fdsf', 'dsfdsf', 'dsfdsf', 'dsf', 38, 56, 38, '2017-05-28 08:18:25'),
(10, 'klsdk`', 123, 121, 'TOLET', 'GIRLS', 'fdsf', 'dsfdsf', 'dsfdsf', 'dsf', 45, 47, 47, '2017-05-28 08:19:53'),
(12, 'bhiveram', 123, 1212, 'TOLET', 'GIRLS', 'fdfd', 'dfdf', 'dfdsfds', 'dfdsf', 47, 44, 49, '2017-05-28 08:21:45'),
(13, 'bhiveram', 123, 1212, 'TOLET', 'GIRLS', 'fdfd', 'dfdf', 'dfdsfds', 'dfdsf', 0, 0, 0, '2017-05-28 08:23:56'),
(14, 'bhiveram', 123, 1212, 'TOLET', 'GIRLS', 'fdfd', 'dfdf', 'dfdsfds', 'dfdsf', 0, 0, 0, '2017-05-28 08:24:31'),
(15, 'bhiveram', 123, 1212, 'TOLET', 'GIRLS', 'fdfd', 'dfdf', 'dfdsfds', 'dfdsf', 0, 0, 0, '2017-05-28 08:24:35'),
(16, 'bhiveram', 123, 1212, 'TOLET', 'GIRLS', 'fdfd', 'dfdf', 'dfdsfds', 'dfdsf', 0, 0, 0, '2017-05-28 08:25:52'),
(17, 'bhiveram', 123, 1212, 'TOLET', 'GIRLS', 'fdfd', 'dfdf', 'dfdsfds', 'dfdsf', 0, 0, 0, '2017-05-28 08:26:12'),
(18, 'bhiveram', 123, 1212, 'TOLET', 'GIRLS', 'fdfd', 'dfdf', 'dfdsfds', 'dfdsf', 0, 0, 0, '2017-05-28 08:26:17'),
(19, 'bhiaer', 123, 200, 'FILLED', 'BOYS', 'dlskjf', 'cddg', 'ssded', 'sadsds', 0, 0, 0, '2017-05-28 13:21:56'),
(20, 'new room', 200, 4, 'FILLED', 'BOYS', 'good roomq', 'ko', 'on good', 'on', 0, 0, 0, '2017-06-03 05:23:38'),
(21, 'new loction', 123, 3, 'TOLET', 'BOYS', 'discript', 'cpnrek', 'dlfkjd', 'lkdjfdskl', 0, 0, 0, '2017-06-11 10:51:50'),
(23, 'new room', 0, 0, 'FILLED', 'GIRLS', 'sdfdsf', 'dsfdsf', 'dsfdsf', 'dsfds', 0, 0, 0, '2017-06-11 10:56:45'),
(24, '', 0, 0, '', '', '', '', '', '', 0, 0, 0, '2017-06-11 10:57:38'),
(25, 'dsf', 0, 0, 'TOLET', 'BOYS', 'dsfdsf', 'dsf', 'dsfd', 'dsfdsf', 0, 0, 0, '2017-06-11 10:57:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

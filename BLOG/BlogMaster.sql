-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2018 at 10:32 AM
-- Server version: 5.5.58-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `BlogMaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `AdminMaster`
--

CREATE TABLE IF NOT EXISTS `AdminMaster` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `password` text,
  `name` text,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `AdminMaster`
--

INSERT INTO `AdminMaster` (`admin_id`, `username`, `password`, `name`) VALUES
(1, 'lLKuu7uSusyjtbt1wqCm', 'lLKuu7uShJF1', 'Prasad');

-- --------------------------------------------------------

--
-- Table structure for table `KitoDiet`
--

CREATE TABLE IF NOT EXISTS `KitoDiet` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `blog` text,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `release_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `writer_name` text,
  `isblog` int(11) DEFAULT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

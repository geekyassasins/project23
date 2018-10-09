-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2018 at 07:09 AM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitodiet_BlogMaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `AdminMaster`
--

CREATE TABLE `AdminMaster` (
  `admin_id` int(11) NOT NULL,
  `username` text,
  `password` text,
  `name` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AdminMaster`
--

INSERT INTO `AdminMaster` (`admin_id`, `username`, `password`, `name`) VALUES
(1, 'lLKuu7uSusyjtbt1wqCm', 'lLKuu7uShJF1', 'Prasad');

-- --------------------------------------------------------

--
-- Table structure for table `KitoDiet`
--

CREATE TABLE `KitoDiet` (
  `blog_id` int(11) NOT NULL,
  `title` text,
  `blog` text,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `release_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `writer_name` text,
  `isblog` int(11) DEFAULT NULL,
  `call_to_action` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `KitoDiet`
--

INSERT INTO `KitoDiet` (`blog_id`, `title`, `blog`, `create_date`, `release_date`, `writer_name`, `isblog`, `call_to_action`) VALUES
(3, 'Bootstrap', '<h2>Documentation Updates</h2>\n\n<p>You can now jump between Bootstrap 4.0 and 4.1 documentation in the UI like so:</p>\n\n<p><img alt=\"\" src=\"https://i1.wp.com/wp.laravel-news.com/wp-content/uploads/2018/04/bootstrap4-doc-version-dropdown.png?resize=525%2C259\" style=\"height:259px; width:525px\" /></p>\n\n<p>With Bootstrap 4.0, the documentation was moved to a versioned documentation setup, so that each minor release has its specific documentation URL. For example, 4.1 is <a href=\"https://getbootstrap.com/docs/4.1/\">getbootstrap.com/docs/4.1/</a>, and you can still get back to 4.0 with</p>\n', '2018-05-07 20:22:31', '2018-05-07 04:00:00', 'Bootstrap', 1, 'Bootstrap Call to action');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AdminMaster`
--
ALTER TABLE `AdminMaster`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `KitoDiet`
--
ALTER TABLE `KitoDiet`
  ADD PRIMARY KEY (`blog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AdminMaster`
--
ALTER TABLE `AdminMaster`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `KitoDiet`
--
ALTER TABLE `KitoDiet`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

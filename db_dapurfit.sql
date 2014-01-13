-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2014 at 05:30 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_dapurfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `pk_id_category` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` mediumtext,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `media_type` varchar(100) DEFAULT NULL,
  `media_url` varchar(100) NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  PRIMARY KEY (`pk_id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`pk_id_category`, `name`, `description`, `last_updated`, `media_type`, `media_url`, `updated_by`) VALUES
(1, 'WORKOUT', NULL, '2014-01-13 22:13:10', NULL, 'image1.jpg', 'ewish'),
(2, 'INTERVIEW', NULL, '2014-01-13 22:13:10', NULL, 'image2.jpg', 'ewish'),
(3, 'TUTORIAL', NULL, '2014-01-13 22:14:42', NULL, 'image3.jpg', 'ewish'),
(4, 'WARM UP', NULL, '2014-01-13 22:14:42', NULL, 'image4.jpg', 'ewish'),
(5, 'VLOG', NULL, '2014-01-13 22:14:42', NULL, 'image5.jpg', 'ewish');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `pk_id_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `caption` varchar(200) DEFAULT NULL,
  `date_published` datetime NOT NULL,
  `media_url` varchar(100) DEFAULT NULL,
  `media_type` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pk_id_gallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`pk_id_gallery`, `caption`, `date_published`, `media_url`, `media_type`, `last_updated`, `updated_by`, `status`) VALUES
(4, 'Image1', '2014-01-13 18:02:45', 'image1.jpg', 'jpg', '2014-01-13 19:57:18', 'ewish', 1),
(5, 'Image2', '2014-01-13 18:04:32', 'image2.jpg', 'jpg', '2014-01-13 19:54:04', 'ewish', 1),
(6, 'Image3', '2014-01-13 18:05:01', 'image3.jpg', 'jpg', '2014-01-13 19:54:13', 'ewish', 1),
(7, 'Image4', '2014-01-13 18:05:23', 'image4.jpg', 'jpg', '2014-01-13 19:54:24', 'ewish', 1),
(8, 'Image5', '2014-01-13 18:05:51', 'image5.jpg', 'jpg', '2014-01-13 19:54:31', 'ewish', 1),
(9, 'Image6', '2014-01-13 18:05:23', 'image6.jpg', 'jpg', '2014-01-13 20:20:47', 'ewish', 1),
(10, 'Image7', '2014-01-13 18:02:45', 'image7.jpg', 'jpg', '2014-01-13 19:55:09', 'ewish', 1),
(11, 'Image8', '2014-01-13 18:05:23', 'image8.jpg', 'jpg', '2014-01-13 19:55:16', 'ewish', 1),
(12, 'Image9', '2014-01-13 18:07:10', 'image9.jpg', 'jpg', '2014-01-13 19:55:27', 'ewish', 1),
(13, 'Image10', '2014-01-13 18:05:23', 'image10.jpg', 'jpg', '2014-01-13 19:55:32', 'ewish', 1),
(14, 'Image11', '2014-01-13 18:07:44', 'image11.jpg', 'jpg', '2014-01-13 19:55:46', 'ewish', 1),
(15, 'Image12', '2014-01-13 18:08:03', 'image12.jpg', 'jpg', '2014-01-13 19:55:54', 'ewish', 1),
(16, 'Image13', '2014-01-13 18:08:21', 'image13.jpg', 'jpg', '2014-01-13 19:56:00', 'ewish', 1),
(17, 'Image14', '2014-01-13 18:08:37', 'image14.jpg', 'jpg', '2014-01-13 19:56:06', 'ewish', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE IF NOT EXISTS `quote` (
  `pk_id_quote` int(11) NOT NULL AUTO_INCREMENT,
  `information` varchar(200) NOT NULL,
  `date_published` datetime NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(100) NOT NULL,
  PRIMARY KEY (`pk_id_quote`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `quote`
--


-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `pk_id_slideshow` int(11) NOT NULL AUTO_INCREMENT,
  `date_published` datetime NOT NULL,
  `media_url` varchar(100) NOT NULL,
  `media_type` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pk_id_slideshow`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`pk_id_slideshow`, `date_published`, `media_url`, `media_type`, `last_updated`, `updated_by`, `status`) VALUES
(4, '2014-01-13 23:34:29', 'img/slider/a.jpg', 'jpg', '2014-01-13 23:35:11', 'ewish', 1),
(5, '2014-01-13 23:34:51', 'img/slider/b.jpg', 'jpg', '2014-01-13 23:35:11', 'ewish', 1),
(6, '2014-01-13 23:35:25', 'img/slider/c.jpg', 'jpg', '2014-01-13 23:36:09', 'ewish', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `pk_id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_kind` varchar(20) NOT NULL,
  PRIMARY KEY (`pk_id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--


-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE IF NOT EXISTS `workout` (
  `pk_id_workout` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `date_published` datetime NOT NULL,
  `media_url` varchar(100) NOT NULL,
  `media_type` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `subtitle` varchar(100) DEFAULT NULL,
  `description` mediumtext NOT NULL,
  `fk_id_category` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pk_id_workout`),
  KEY `fk_id_category` (`fk_id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`pk_id_workout`, `title`, `date_published`, `media_url`, `media_type`, `last_updated`, `updated_by`, `status`, `subtitle`, `description`, `fk_id_category`) VALUES
(4, 'ABS-OLUTE', '2014-01-13 22:59:27', 'image1.jpg', NULL, '2014-01-13 23:01:14', 'ewish', 1, NULL, 'WORKOUT', 1),
(5, 'SQUAT THAT ASS', '2014-01-13 23:00:42', 'image5.jpg', NULL, '2014-01-13 23:01:14', 'ewish', 1, NULL, '', 1),
(6, 'NINA DOBREV', '2014-01-13 23:01:38', 'image2.jpg', NULL, '2014-01-13 23:08:15', 'ewish', 1, NULL, 'INTERVIEW', 2),
(7, 'FIT GIRL FRIDAY', '2014-01-13 23:02:24', 'image3.jpg', NULL, '2014-01-13 23:08:15', NULL, 1, NULL, 'Tutorial', 3),
(8, 'STRECTH IT OUT', '0000-00-00 00:00:00', 'image4.jpg', NULL, '2014-01-13 23:09:09', 'ewish', 1, NULL, 'WARM UP', 4),
(9, 'STRECTH IT OUT', '2014-01-13 23:09:25', 'image4.jpg', NULL, '2014-01-13 23:09:51', 'ewish', 1, NULL, 'WARMUP', 4),
(10, 'GRAPE SNACK', '2014-01-13 23:11:43', 'image6.jpg', NULL, '2014-01-13 23:13:15', 'ewish', 1, NULL, 'TUTORIAL', 3),
(11, 'EGG WHITE JUICE', '2014-01-13 23:12:44', 'image7.jpg', NULL, '2014-01-13 23:13:15', NULL, 1, NULL, 'TUTORIAL', 3),
(12, 'FIT DAYS', '2014-01-13 23:13:44', 'image8.jpg', NULL, '2014-01-13 23:15:10', NULL, 1, NULL, 'INTERVIEW', 2),
(13, 'THREE MISTAKES', '2014-01-13 23:14:31', 'image9.jpg', NULL, '2014-01-13 23:15:10', 'ewish', 1, NULL, 'VLOG', 5),
(14, 'NINA DOBREV', '2014-01-13 23:15:42', 'image2.jpg', NULL, '2014-01-13 23:17:19', 'ewish', 1, NULL, 'INTERVIEW', 2),
(15, 'FIT GIRL FRIDAY', '2014-01-13 23:16:16', 'image3.jpg', NULL, '2014-01-13 23:17:19', 'ewish', 1, NULL, 'TUTORIAL', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `workout`
--
ALTER TABLE `workout`
  ADD CONSTRAINT `workout_ibfk_1` FOREIGN KEY (`fk_id_category`) REFERENCES `category` (`pk_id_category`);

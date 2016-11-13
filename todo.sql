-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2016 at 04:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` text NOT NULL,
  `task` text NOT NULL,
  `cek` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `member_id`, `task`, `cek`) VALUES
(30, '7836847256', 'laravel', 0),
(31, '7836847256', 'json', 0),
(32, '7836847256', 'json', 0),
(33, '7836847256', 'json', 0),
(34, '7836847256', '', 0),
(35, '7836847256', '', 0),
(36, '7836847256', 'aaa', 0),
(37, '7836847256', 'dffd', 0),
(38, '7836847256', 'dffd', 0),
(39, '7836847256', 'à¦‡à§Ÿà¦¹à¦à¦œ', 0),
(60, '7836847256', 'it''s ok', 0),
(61, '7836847256', 'it''s ok', 0),
(71, '7836847256', '', 0),
(72, '7836847256', '', 0),
(74, '7836847256', '', 0),
(75, '7836847256', 'mbn', 1),
(76, '7836847256', 'dd', 0),
(89, '9', 'rafan', 0),
(90, '10852586284', 'hi i am reza', 0),
(91, '10852586284', 'as', 0),
(92, '10852586284', 'ww', 0),
(93, '10852586284', 'rafi', 0),
(94, '10852586284', 'rafi', 0),
(95, '10852586284', 'aaaa', 0),
(96, '10', 'aaaa', 0),
(97, '10', 'sss', 0),
(98, '10', 'wa', 0),
(110, '7836847256', 'SSS', 0),
(111, '7836847256', 'SSS', 0),
(112, '7836847256', 'SSSS', 0),
(113, '7836847256', 'SA', 0),
(140, '7', 'my task is very simple', 1),
(144, '7', 'shon', 1),
(164, '9', 'islam', 1),
(166, '7', 'RAFI', 0),
(167, '12', 'hasin_hayder', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `member_id`, `name`, `email`, `password`) VALUES
(7, '7836847256', 'firoz', 'firoz@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, '81388279762', 'nahid', 'nahid@gmail.com', '01cfcd4f6b8770febfb40cb906715822'),
(9, '91462224951', 'rafan', 'rafan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(10, '10852586284', 'REZA', 'reza@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, '111181102505', 'nahid', 'nahid@gmail.com', '01cfcd4f6b8770febfb40cb906715822'),
(12, '12527914186', 'hasin', 'hasin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

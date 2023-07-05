-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2020 at 02:41 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `yatidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(80) NOT NULL,
  `email` varchar(120) NOT NULL,
  `msg` varchar(400) NOT NULL,
  `cdt` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `msg`, `cdt`) VALUES
('Amit Kumar', 'admin@gmail.com', 'hi\r\n', '30/08/2020'),
('harsh', 'ra@gmail.com', 'bye\r\n', '30/08/2020');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `name` varchar(80) NOT NULL,
  `email` varchar(120) NOT NULL,
  `mob` varchar(40) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `pdonation` varchar(300) NOT NULL,
  `address` varchar(200) NOT NULL,
  `ddt` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`name`, `email`, `mob`, `amount`, `pdonation`, `address`, `ddt`) VALUES
('austin', 'ad@gmail.com', '9562343212', '1000', 'for charity', 'aligarh', '27/08/2020'),
('ram', 'abc@gmail.com', '5468423324', '2000', 'for charity', 'india', '27/08/2020');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userid` varchar(120) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `password`) VALUES
('abc@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `name` varchar(80) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `profile` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `vdt` varchar(40) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`name`, `gender`, `email`, `mob`, `profile`, `address`, `vdt`) VALUES
('Amit Kumar', 'male', 'shalu19991@gmail.com', '5763765334', '8.jpg', 'Baraula Jafrabad Chowk Koil', '30/08/2020'),
('ram', 'male', 'admin@gmail.com', '895623477', 'iii.jpg', 'aligarh', '30/08/2020');

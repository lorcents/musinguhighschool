-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 10:49 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musingu`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumini`
--

CREATE TABLE `alumini` (
  `tbl_image_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumini`
--

INSERT INTO `alumini` (`tbl_image_id`, `first_name`, `last_name`, `email`, `address`, `regno`, `year`, `dob`, `occupation`, `username`, `password`, `image_location`) VALUES
(1, 'John', 'Doe', 'joe@gmail.com', 'Nairobi', '11163', 0000, '0000-00-00', 'software-engineer', 'john', '1234', 'Celebrity-hair-styles-men.jpg'),
(0, 'juliet', 'resiatu', 'juliet@gmail.com', 'Eldoret', '4445545', 2020, '2002-02-06', 'Nurse', 'juliet', '1234', 'LRP_8175.jpg'),
(0, 'Tim ', 'Cook', 'tim@icloud.com', 'San-Fransisco', '1234', 2020, '2004-01-06', 'CEO', 'tim', '1234', 'admin.JPG'),
(0, 'Jacob', 'Zuma', 'Jacob@gmail.com', 'Pretoria', '5644', 2015, '1998-03-03', 'Politician', 'jacob', '1234', 'LRP_8778.JPG'),
(0, 'urur', 'ldld', 'dldf@gmail.com', 'kgkgk', '536', 2018, '2000-12-23', 'kkdfgkdf', 'jsdkfk', '1234', 'EDTG3941.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `category` text COLLATE utf8_unicode_ci NOT NULL,
  `priority` text COLLATE utf8_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `copy` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `human` char(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `category`, `priority`, `message`, `copy`, `human`) VALUES
('', '', '', '', '', '', ''),
('billy', 'bill@mail.com', 'Visitor', 'low', 'I am the goat', 'on', 'on'),
('Brian Njoroge', 'briannjoroge@yahoo.c', 'Teacher', 'normal', 'the fonts are a bit fady', '', 'on'),
('Dagi', 'dagi@gmail.com', 'Visitor', 'low', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '', 'on'),
('HARun', 'harun@mail.com', ' Student', 'low', 'awesome school', 'on', 'on'),
('hey', 'hey@outlook.com', 'Parent', 'normal', 'bfiegbxc clkdnc  cdsj', '', ''),
('Hillary', 'hilla@mail.com', ' Student', 'low', 'great school started my businesses career there', 'on', 'on'),
('', 'iannjoroge120@gmail.', ' student', 'high', 'best school ever', '', ''),
('Ian', 'iannjoroge120@outloo', 'student', 'low', 'best school ever from around.best teachers loved my days', '', ''),
('jairus', 'jairus@gmail.com', 'Teacher', 'low', 'i need my pay check', '', ''),
('jesus', 'jesus@gmail.com', 'Visitor', 'medium', 'I am GOD son and am here to confirm greatness of this insitution', '', ''),
('Fredrik kipkemboi', 'kipkemboifred@gmail.', 'Teacher', 'low', 'Love you guys', 'on', 'on'),
('mary', 'mary@gmail.com', ' Student', 'on', 'exam querry bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '', ''),
('me', 'me@gmail.com', 'Parent', 'high', 'i am the school', '', ''),
('Elon', 'Musk@gmail.com', 'Visitor', 'low', 'I want to donate to this school', 'on', 'on'),
('Juliet', 'ressy@gmail.com', 'Visitor', 'low', 'i love this school', '', 'on'),
('Reuben', 'rubenkhaemba@gmail.c', 'Visitor', 'low', 'Wished I would have joined your prestigious ðŸ˜‚', 'on', 'on'),
('trizah', 'trizah@gmail.com', ' Student', 'on', 'exam querry', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

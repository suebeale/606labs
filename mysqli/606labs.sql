-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 11:39 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `606labs`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactID` int(11) NOT NULL,
  `fullName` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `subject` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `message` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactID`, `fullName`, `email`, `subject`, `message`) VALUES
(1, 'Sue Beale', 'Sue.Beale@wintec.ac.nz', 'problem', 'Cant logon to complete the lab'),
(3, 'Tom Jones', 'jones@gmail.com', 'Forms', 'How do i connect to mysql database from my form'),
(4, 'Tom Jones', 'jones@gmail.com', 'Form Validation', 'Do we get to learn PHP form validation?'),
(5, 'PHP Guru', 'phpguru@php.net', 'PHP Expert', 'Please add me to your guest speaker list');

-- --------------------------------------------------------

--
-- Table structure for table `logon`
--

CREATE TABLE `logon` (
  `loginID` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(60) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `logon`
--

INSERT INTO `logon` (`loginID`, `username`, `email`, `password`) VALUES
(1, 'suebeale', 'sue.beale@wintec.ac.nz', 'phpisfun'),
(2, 'jones', 'tom.jones@wintec.ac.nz', 'phpiscool'),
(3, 'phpguru', 'phpguru@php.net', 'phpguru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `logon`
--
ALTER TABLE `logon`
  ADD PRIMARY KEY (`loginID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logon`
--
ALTER TABLE `logon`
  MODIFY `loginID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

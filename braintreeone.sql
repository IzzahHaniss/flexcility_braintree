-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2017 at 02:10 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `braintreeone`
--
CREATE DATABASE IF NOT EXISTS `braintreeone` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `braintreeone`;

-- --------------------------------------------------------

--
-- Table structure for table `akaun`
--

CREATE TABLE IF NOT EXISTS `akaun` (
  `username` varchar(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(6) NOT NULL,
  `status` varchar(50) NOT NULL,
  `plan` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akaun`
--

INSERT INTO `akaun` (`username`, `company`, `email`, `password`, `status`, `plan`) VALUES
('Haziq', 'MMU', 'haziq@flexcility.com', '123456', '', 'Basic'),
('Izzah', 'Flexcility', 'izzah@flexcility.com', '123qwe', '', 'Premium'),
('Syazwani', 'Petronas', 'syazwani@flexcility.com', '12qwas', '', 'Pro');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

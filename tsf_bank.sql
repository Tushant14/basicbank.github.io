-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 15, 2021 at 02:26 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `curr_balance` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `curr_balance`) VALUES
(1, 'Abhishek Singh', 'abhishek@gmail.com', 3000),
(2, 'Aakriti Dubey', 'aakriti@gmail.com', 2000),
(3, 'Yash Pandey', 'yash@gmail.com', 4000),
(4, 'Harshit Singhania', 'harshit@gmail.com', 1500),
(5, 'Nikita Sharma', 'nikita@gmail.com', 2200),
(6, 'Mohit Potdar', 'mohit@gmail.com', 1200),
(7, 'Yogesh Wadhwani', 'yogesh@gmail.com', 3300),
(8, 'Sumit Aggrawal', 'sumit@gmail.com', 5000),
(9, 'Priyanshi Ahirwar', 'priyanshi@gmail.com', 1300),
(10, 'Aanshi Garewal', 'aanshi@gmail.com', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

DROP TABLE IF EXISTS `transfers`;
CREATE TABLE IF NOT EXISTS `transfers` (
  `sno` int(50) NOT NULL,
  `sender` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `receiver` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

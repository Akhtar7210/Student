-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 05:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `self`
--

-- --------------------------------------------------------

--
-- Table structure for table `commit`
--

CREATE TABLE `commit` (
  `sr` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commit`
--

INSERT INTO `commit` (`sr`, `name`, `username`, `password`) VALUES
(1, 'Nilesh', 'nileshthaku', '123'),
(2, 'Bullet Expr', 'salman@gmai', '321'),
(3, 'Kharwarnaga', 'admin@123', '123'),
(4, 'Kharwarnaga', 'admin@123', '123'),
(5, 'Kanakpur Ex', 'salman@gmai', '123'),
(6, 'Kanakpur Ex', 'salman@gmai', '123'),
(7, 'Kanakpur Ex', 'salman@gmai', '123'),
(8, 'Kanakpur Ex', 'salman@gmai', '123'),
(9, 'Kanakpur Ex', 'salman@gmai', '123'),
(10, 'Kanakpur Ex', 'salman@gmai', '123'),
(11, 'Niles', 'nileshthaku', '87'),
(12, 'Niles', 'nileshthaku', '87'),
(13, 'Kanakpur Ex', 'salman@gmai', '123'),
(14, 'Kharwarnaga', 'admin@123', '123'),
(15, 'Nilesh', 'admin@123', '123'),
(16, 'Kanakpur Ex', 'nileshthaku', '123'),
(17, 'Kanakpur Ex', 'nileshthaku', '123'),
(18, 'Kanakpur Ex', 'nileshthaku', '123'),
(19, 'Nilesh', 'nileshthaku', '123'),
(20, 'Nilesh', 'nileshthaku', '123'),
(21, 'Nilesh', 'admin@123', '123'),
(22, 'rahul', 'rahul@gmail', '123'),
(23, 'srk', '', 'mannat'),
(24, 'brijesh', '', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commit`
--
ALTER TABLE `commit`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commit`
--
ALTER TABLE `commit`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

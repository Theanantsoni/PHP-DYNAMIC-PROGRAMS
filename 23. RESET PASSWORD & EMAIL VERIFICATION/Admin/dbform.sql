-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:1111
-- Generation Time: Aug 07, 2024 at 10:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbform`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`u_id`, `u_email`, `u_password`) VALUES
(1, 'MRANANTSSONI7@GMAIL.COM', '202020'),
(2, 'MRANANTSONI7@GMAIL.COM', '202020'),
(3, 'MRANANTSONI7@GMAIL.COM', '202020'),
(4, 'MRANANTSONI7@GMAIL.COM', '202020'),
(5, 'MRANANTSONI7@GMAIL.COM', '202020'),
(6, 'MRANANTSONI7@GMAIL.COM', '202020'),
(7, 'a58@gmail.com', '107107'),
(8, 'anantsoni@mailinator.com', '656564');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(30) NOT NULL,
  `u_lname` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_pass` varchar(30) NOT NULL,
  `u_conpass` varchar(30) NOT NULL,
  `u_mobile` bigint(11) NOT NULL,
  `u_address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`u_id`, `u_fname`, `u_lname`, `u_email`, `u_pass`, `u_conpass`, `u_mobile`, `u_address`) VALUES
(1, 'SONI', 'RAJESHKUMAR', 'mranantsoni7@gmail.com', 'asasas', 'asasas', 8140591020, 'Surat (M Corp.) (Part) 204-KIR'),
(2, 'anant', 'soni', 'anantsonii@mailinator.com', '565854', '107107', 8151817151, 's');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

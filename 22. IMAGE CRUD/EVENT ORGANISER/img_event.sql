-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:1111
-- Generation Time: Mar 20, 2024 at 01:55 PM
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
-- Database: `img_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `e_gallery`
--

CREATE TABLE `e_gallery` (
  `eg_id` int(11) NOT NULL,
  `eg_img` varchar(30) NOT NULL,
  `eg_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `e_gallery`
--

INSERT INTO `e_gallery` (`eg_id`, `eg_img`, `eg_name`) VALUES
(2, 'eg_2.jpg', 'eg_2'),
(3, 'eg_3.jpg', 'eg_3'),
(4, 'eg_5.jpg', 'eg_5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_gallery`
--
ALTER TABLE `e_gallery`
  ADD PRIMARY KEY (`eg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `e_gallery`
--
ALTER TABLE `e_gallery`
  MODIFY `eg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

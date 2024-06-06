-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 10:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curdseries`
--

-- --------------------------------------------------------

--
-- Table structure for table `seriescurd`
--

CREATE TABLE `seriescurd` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seriescurd`
--

INSERT INTO `seriescurd` (`id`, `fname`, `lname`, `email`, `mobile`) VALUES
(2, 'sweetha', 'hesaniii', 'swetha@gmail.com', 2147483647),
(3, 'isitha', 'raman', 'isitha@gmail.com', 123456),
(5, 'suhasini', 'radeesh', 'rade@gmail.com', 123456),
(7, 'isanii', 'ranveer', 'isahnani@gmail.com', 234567),
(9, 'emaa ', 'john', 'emajhon@gmail.com', 123456789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seriescurd`
--
ALTER TABLE `seriescurd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seriescurd`
--
ALTER TABLE `seriescurd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

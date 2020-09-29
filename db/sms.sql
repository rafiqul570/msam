-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 11:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(20) NOT NULL,
  `roll` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `ban` varchar(20) NOT NULL,
  `gr_ban` varchar(20) NOT NULL,
  `gpa_ban` varchar(20) NOT NULL,
  `eng` varchar(20) NOT NULL,
  `gr_eng` varchar(20) NOT NULL,
  `gpa_eng` varchar(20) NOT NULL,
  `math` varchar(20) NOT NULL,
  `gr_math` varchar(20) NOT NULL,
  `gpa_math` varchar(20) NOT NULL,
  `ag` varchar(20) NOT NULL,
  `gr_ag` varchar(20) NOT NULL,
  `gpa_ag` varchar(20) NOT NULL,
  `gpa_2_ag` varchar(20) NOT NULL,
  `obtmark` varchar(20) NOT NULL,
  `total_gpa1` varchar(20) NOT NULL,
  `total_gpa2` varchar(20) NOT NULL,
  `result` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`, `class`, `roll`, `year`, `ban`, `gr_ban`, `gpa_ban`, `eng`, `gr_eng`, `gpa_eng`, `math`, `gr_math`, `gpa_math`, `ag`, `gr_ag`, `gpa_ag`, `gpa_2_ag`, `obtmark`, `total_gpa1`, `total_gpa2`, `result`) VALUES
(1, 'kamrul Islam', 'Eight', '01', '2020', '80', 'A+', '5.0', '60', 'A-', '3.5', '90', 'A+', '5.0', '80', 'A+', '5.00', '3.00', '310', '4.5', '5.00', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'Rafiqul Islam', 'rafiqul.master5@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '5f2e67c27be0208_08_20_10_52_18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

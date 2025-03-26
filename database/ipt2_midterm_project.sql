-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2025 at 04:40 AM
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
-- Database: `ipt2_midterm_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `block` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `course`, `year`, `block`, `status`) VALUES
(7, 'Edzell', 'Gime', 'BSIT', '2', '3', 'REGULAR'),
(8, 'Chariza Mae', 'Demetrial', 'BSIT', '2', '3', 'REGULAR'),
(9, 'Lian', 'Fugosino', 'BSIT', '2', '3', 'REGULAR');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `created_at`) VALUES
(1, 'badjao', 'badjao@gmail.com', 'nigga', '$2y$10$UtTOrWQCYQ1J3ALgjASpIuj0ER7Rn4AFa1Qo4g8MCMpSxqqEOPAC.', '2025-03-10 07:05:18.908642'),
(2, 'Lian', 'lianfulgosino@gmail.com', 'lian', '$2y$10$InwF4oRFqSfm/NNPNsMwvuMfdb29ROqqVXbs5qQroIGQJsEwy3Iky', '2025-03-10 07:25:08.910155'),
(3, 'Lian', 'lianfulgosino@gmail.com', 'lian', '$2y$10$3BNnCS.kFIlFKsZL0//rweM4GmPVutLoSxWlJ9s7RAaY9gbfF3jDG', '2025-03-11 05:49:59.848718'),
(4, 'Christine Baniel', 'christinebaniel0909@gmail.com', 'Christine', '$2y$10$9G8jM17rfxi7FdWTM7DtCORcs3lDhdfU6ZCfGrFzmhHCzmZyzBSBq', '2025-03-11 06:39:14.549872'),
(5, 'Chariza Demetrial', 'demetrial@gmail.com', 'Cha', '$2y$10$dkfaXK26SXMSmhUi3PM.I.usdxYJBWaIHsJ5wjJmxdUpStqGxPmDy', '2025-03-11 07:21:30.604871'),
(6, 'charizz', 'demetrial@gmail.com', 'charr', '$2y$10$SQJHak0B9rUrr5VNRZJhvuyybQsJm/OqU55oIi5GMORC6FViUB0q6', '2025-03-11 08:58:14.413509'),
(7, 'chamm', 'dems@gmail.com', 'dems', '$2y$10$giWo7vu3gInOClnZKSdXEet1AWOpyAu47rswahtgPAjupTJ7VK7jW', '2025-03-11 09:11:30.629626'),
(8, 'd', 'd@gmail.com', 'd', '$2y$10$mLvY5wF1eoWRnTxW3MxsluM8fDrDAkpkheN58wRT59ShOBI8UHd5m', '2025-03-11 09:15:11.498499');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

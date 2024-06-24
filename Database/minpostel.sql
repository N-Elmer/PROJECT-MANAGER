-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 01:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minpostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'britney', '$2y$10$y.g4vqcWRdUPtj89yxgscOXXzdwe5wNyFzYZM6biklyEoFKiev2MW');

-- --------------------------------------------------------

--
-- Table structure for table `antic`
--

CREATE TABLE `antic` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antic`
--

INSERT INTO `antic` (`id`, `title`, `status`) VALUES
(1, 'Project 1', 'Incomplete'),
(2, 'Project 2', 'Complete'),
(3, 'Project 3', 'Incomplete'),
(4, 'Project 4', 'Complete'),
(5, 'Project 5', 'Incomplete'),
(6, 'Project 6', 'Complete'),
(7, 'Project 7', 'Incomplete'),
(8, 'Project 8', 'Complete'),
(9, 'Project 9', 'Incomplete'),
(10, 'Project 10', 'Complete'),
(11, 'Project 11', 'Incomplete'),
(12, 'Project 12', 'Complete'),
(13, 'Project 13', 'Incomplete'),
(14, 'Project 14', 'Complete'),
(15, 'Project 15', 'Incomplete'),
(16, 'Project 16', 'Complete'),
(17, 'Project 17', 'Incomplete'),
(18, 'Project 18', 'Complete'),
(19, 'Project 19', 'Incomplete'),
(20, 'Project 20', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`id`, `title`, `status`) VALUES
(1, 'Project 1', 'Incomplete'),
(2, 'Project 2', 'Complete'),
(3, 'Project 3', 'Incomplete'),
(4, 'Project 4', 'Complete'),
(5, 'Project 5', 'Incomplete'),
(6, 'Project 6', 'Complete'),
(7, 'Project 7', 'Incomplete'),
(8, 'Project 8', 'Complete'),
(9, 'Project 9', 'Incomplete'),
(10, 'Project 10', 'Complete'),
(11, 'Project 11', 'Incomplete'),
(12, 'Project 12', 'Complete'),
(13, 'Project 13', 'Incomplete'),
(14, 'Project 14', 'Complete'),
(15, 'Project 15', 'Incomplete'),
(16, 'Project 16', 'Complete'),
(17, 'Project 17', 'Incomplete'),
(18, 'Project 18', 'Complete'),
(19, 'Project 19', 'Incomplete'),
(20, 'Project 20', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `campost`
--

CREATE TABLE `campost` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campost`
--

INSERT INTO `campost` (`id`, `title`, `status`) VALUES
(1, 'Project 1', 'Incomplete'),
(2, 'Project 2', 'Complete'),
(3, 'Project 3', 'Incomplete'),
(4, 'Project 4', 'Complete'),
(5, 'Project 5', 'Incomplete'),
(6, 'Project 6', 'Complete'),
(7, 'Project 7', 'Incomplete'),
(8, 'Project 8', 'Complete'),
(9, 'Project 9', 'Incomplete'),
(10, 'Project 10', 'Complete'),
(11, 'Project 11', 'Incomplete'),
(12, 'Project 12', 'Complete'),
(13, 'Project 13', 'Incomplete'),
(14, 'Project 14', 'Complete'),
(15, 'Project 15', 'Incomplete'),
(16, 'Project 16', 'Complete'),
(17, 'Project 17', 'Incomplete'),
(18, 'Project 18', 'Complete'),
(19, 'Project 19', 'Incomplete'),
(20, 'Project 20', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `camtel`
--

CREATE TABLE `camtel` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camtel`
--

INSERT INTO `camtel` (`id`, `title`, `status`) VALUES
(1, 'Project 1', 'Incomplete'),
(2, 'Project 2', 'Complete'),
(3, 'Project 3', 'Incomplete'),
(4, 'Project 4', 'Complete'),
(5, 'Project 5', 'Incomplete'),
(6, 'Project 6', 'Complete'),
(7, 'Project 7', 'Incomplete'),
(8, 'Project 8', 'Complete'),
(9, 'Project 9', 'Incomplete'),
(10, 'Project 10', 'Complete'),
(11, 'Project 11', 'Incomplete'),
(12, 'Project 12', 'Complete'),
(13, 'Project 13', 'Incomplete'),
(14, 'Project 14', 'Complete'),
(15, 'Project 15', 'Incomplete'),
(16, 'Project 16', 'Complete'),
(17, 'Project 17', 'Incomplete'),
(18, 'Project 18', 'Complete'),
(19, 'Project 19', 'Incomplete'),
(20, 'Project 20', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `supttic`
--

CREATE TABLE `supttic` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supttic`
--

INSERT INTO `supttic` (`id`, `title`, `status`) VALUES
(1, 'Project 1', 'Incomplete'),
(2, 'Project 2', 'Complete'),
(3, 'Project 3', 'Incomplete'),
(4, 'Project 4', 'Complete'),
(5, 'Project 5', 'Incomplete'),
(6, 'Project 6', 'Complete'),
(7, 'Project 7', 'Incomplete'),
(8, 'Project 8', 'Complete'),
(9, 'Project 9', 'Incomplete'),
(10, 'Project 10', 'Complete'),
(11, 'Project 11', 'Incomplete'),
(12, 'Project 12', 'Complete'),
(13, 'Project 13', 'Incomplete'),
(14, 'Project 14', 'Complete'),
(15, 'Project 15', 'Incomplete'),
(16, 'Project 16', 'Complete'),
(17, 'Project 17', 'Incomplete'),
(18, 'Project 18', 'Complete'),
(19, 'Project 19', 'Incomplete'),
(20, 'Project 20', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'liam', '$2y$10$v8IbWkxhp.5PXMeTqprL2.DDJwS8eBa5yzhjDWVeLwd8cNdswsQ59JPYS'),
(2, 'john', '$2y$10q$WH6SNwjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(3, 'marry', '$2y$10$hKfIqRtS8RPF76fsHoy8oek3o.kA/ieHvkG6WdXgMeHlk.H3m8y3y'),
(4, 'harry', '$2y$10$WeH6SNwjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(5, 'enstein', '$2y$10$WrH6SNwjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(6, 'kerry', '$2y$10$WHt6SNwjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(7, 'hannah', '$2y$10$WyH6SNwjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(8, 'ben', '$2y$10$WH6aSNwjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(9, 'bradly', '$2y$10s$WH6SNwjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(10, 'kenned', '$2y$10$WdH6SNwjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(11, 'hervey', '$2y$10$WH6fSNwjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(12, 'sonia', '$2y$10$WH6SNwgjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(13, 'dora', '$2y$10$WH6SyNwdjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(14, 'jannet', '$2y$10$WH6ShNwjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(15, 'benned', '$2y$10$WH6SNwujjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(16, 'kent', '$2y$10$WH6iSNwjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(17, 'clark', '$2y$10j$WH6SNwjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(18, 'moris', '$2y$10k$WH6SNwjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(19, 'boris', '$2y$1o0$WH6SNwjjG4xVEI11jvsvKeEQ2bNeH4u74tyruo6pAo2xOXBRPrZOm'),
(20, 'leon', '$2y$10$PssysIHkylDn.0YVQ9NJTu00UsRPDR8oxSLjKTS1ZKsJuK/U8qGtW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `antic`
--
ALTER TABLE `antic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campost`
--
ALTER TABLE `campost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camtel`
--
ALTER TABLE `camtel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supttic`
--
ALTER TABLE `supttic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `antic`
--
ALTER TABLE `antic`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `campost`
--
ALTER TABLE `campost`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `camtel`
--
ALTER TABLE `camtel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `supttic`
--
ALTER TABLE `supttic`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

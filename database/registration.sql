-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 11:19 AM
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
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `mobile`, `password`, `repassword`) VALUES
(1, 'mani.singh_cs18', 'mani.singh_cs18@gla.ac.in', '8006836364', '$2y$10$2maJX4g0VIayiW2lBPpade3q85RXGcyDcOOJW8w/0B4/O6/yf6.vW', '$2y$10$Lyl5QmwHpFFEZh7rCteOSOUyw5LEaMwLBdmlWKvy6md81n4YG/l.W'),
(2, 'vanshika03', 'vanshika0307@gmail.com', '9166716693', '$2y$10$GQQTtyEdwXiZJXU37tummOfyeLXWTHH3rDdf9ymxyNIdFuDlhG3Sq', '$2y$10$wk//gwyopDk93gHKfadtVed/upEh/EXJAoqyX79WiqmBs5EYK3NFi'),
(3, 'pallavi solanki', 'pallavi.solanki_cs18@gla.ac.in', '9568941900', '$2y$10$FzO1AXpZ/Dz5r8F7F7CjceWXxs/.kEA54jxOlSk5KEzWsDeBXjA4m', '$2y$10$BChQ5.tv0UlHhU/BBCCgou6m7BJUcaZ8sWWRSF2Q1x7bpbOQnZD7q'),
(4, 'SIMRAN GUPTA', 'simran.gupta_cs18@gla.ac.in', '9557927129', '$2y$10$PNeTw4IfTVEpOapA0T4LnuHa4I3z8uZMHHYvLE07VeSyjJ2.E55Kq', '$2y$10$yWJtAkaR.eL1omOd/vtDq.qL57nu88UQqTU.0PH/DU3.snuOBzq0i'),
(5, 'mani.singh', 'mani.singh8@gla.ac.in', '8126912967', '$2y$10$4me1shRytPrtXpw7tZ4IMeSl.6SYVHChh3RKWeWsvFFRTwTPGryKe', '$2y$10$sPWer3wYSjijSliQU9F/0upmUjB1XDf.JtzdJRCL0tc3U6VOPrNNi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

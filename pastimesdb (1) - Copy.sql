-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2026 at 10:03 AM
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
-- Database: `pastimesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblclothes`
--

CREATE TABLE `tblclothes` (
  `itemID` int(11) NOT NULL,
  `itemName` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblclothes`
--

INSERT INTO `tblclothes` (`itemID`, `itemName`, `brand`, `price`, `image`) VALUES
(1, 'Nike Hoodie', 'Nike', 899.99, 'nikes.jpeg'),
(2, 'Addidas T-shirt', 'Addidas', 499.99, 'tshirt.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `userID` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(20) DEFAULT 'pending',
  `role` varchar(20) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`userID`, `fullName`, `email`, `username`, `password`, `status`, `role`) VALUES
(1, 'Admin User', 'admin@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', 'approved', 'admin'),
(3, 'Test User', 'test@gmail.com', 'test', '202cb962ac59075b964b07152d234b70', 'approved', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblclothes`
--
ALTER TABLE `tblclothes`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblclothes`
--
ALTER TABLE `tblclothes`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

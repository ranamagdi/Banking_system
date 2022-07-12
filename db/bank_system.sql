-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 01:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_ID` int(5) NOT NULL,
  `Name` char(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone_number` int(15) NOT NULL,
  `CURRENT_Balance` double NOT NULL,
  `Location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_ID`, `Name`, `Email`, `Phone_number`, `CURRENT_Balance`, `Location`) VALUES
(1, 'Noha salem', 'noha@gmail.com', 108895995, 10000, 'Egypt'),
(2, 'Rana Magdi', 'ranagrida@gmail.com', 1062137641, 20000, 'Egypt'),
(3, 'Mohammed Mansour', 'Mo@hotmail.com', 10959968, 30000, 'china'),
(4, 'salem', 'S@yahoo.com', 98956896, 489050, 'south Africa'),
(5, 'Yasser Ramez', 'YR@gmail.com', 99585988, 300000, 'china'),
(6, 'Mark Ramzy', 'Mark@yahoo.com', 440837424, 289980, 'America '),
(7, 'Jony Nader', 'Jony@hotmail.com', 97892974, 600000, 'America'),
(8, 'Fahed Al osamy', 'F@gmail.com', 108895990, 289998, 'Saudi Araibia'),
(9, 'Nesma Mostafa', 'N@yahoo.com', 987897711, 900000, 'Egypt'),
(10, 'Nehal Yassen', 'Nehal@hotmail.com', 108895997, 178607, 'south Africa');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `Transfer_ID` int(5) NOT NULL,
  `Sender_Name` varchar(20) NOT NULL,
  `Receiver_name` varchar(20) NOT NULL,
  `Amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`Transfer_ID`, `Sender_Name`, `Receiver_name`, `Amount`) VALUES
(1, ' Noha salem', 'Rana Magdi', 2000),
(2, ' Yasser Ramez', 'salem', 40000),
(3, ' Rana Magdi', 'Fahed Al osamy', 5000),
(4, ' Mohammed Mansour', 'Jony Nader', 100000),
(5, ' Rana Magdi', 'Noha salem', 78888),
(6, ' Noha salem', 'Nehal Yassen', 236890),
(7, ' salem', 'Nesma Mostafa', 90000),
(8, ' Mohammed Mansour', 'Yasser Ramez', 79999),
(9, ' Noha salem', 'Rana Magdi', 900000),
(10, ' Nehal Yassen', 'Noha salem', 12000),
(11, ' Rana Magdi', 'salem', 987890),
(12, ' Yasser Ramez', 'Nesma Mostafa', 30000),
(13, ' Nesma Mostafa', 'salem', 50000),
(14, ' Mark Ramzy', 'Nesma Mostafa', 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_ID`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`Transfer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `Transfer_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

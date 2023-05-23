-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 05:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luckydraw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `doc` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `email`, `password`, `doc`, `status`) VALUES
(1, 'agha', 'aghasalmankhan95@gmail.com', 'agha', '2023-05-13', 'active'),
(2, 'zeeshan', 'zeeshan@gmail.com', '1234', '0000-00-00', 'zeeshann'),
(3, 'alone', 'alone@gmail.com', '6666', '0000-00-00', 'agha');

-- --------------------------------------------------------

--
-- Table structure for table `contest`
--

CREATE TABLE `contest` (
  `contestid` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `dateofcreation` timestamp NULL DEFAULT NULL,
  `dateofexpiry` timestamp NULL DEFAULT NULL,
  `totaltickets` varchar(100) DEFAULT NULL,
  `ticketsremaining` varchar(100) DEFAULT NULL,
  `ticketsold` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `adminid` varchar(100) DEFAULT NULL,
  `winningamount` varchar(100) DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `Contest_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (`contestid`, `name`, `dateofcreation`, `dateofexpiry`, `totaltickets`, `ticketsremaining`, `ticketsold`, `amount`, `status`, `adminid`, `winningamount`, `image`, `Contest_status`) VALUES
(1, 'Contest 1 Name', '2023-05-19 15:04:24', '2023-05-25 15:04:24', '5', '12', '2', '20', 'Active', '1', '100,00,00', '1.png', 'Close'),
(9, 'Contest4', '2023-05-10 10:20:00', '2023-05-23 10:20:00', '30', '10', '10', '3000', 'Active', '9', '9000', NULL, 'Open'),
(10, 'Contest4', '2023-05-10 10:20:00', '2023-05-23 10:20:00', '30', '10', '10', '5000', 'Active', '9', '300', NULL, 'Open'),
(11, 'Contest4', '2023-05-10 10:20:00', '2023-05-23 10:20:00', '30', '10', '10', '5000', 'Active', '9', '0', NULL, 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `financial`
--

CREATE TABLE `financial` (
  `financialid` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `previousbalance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `financial`
--

INSERT INTO `financial` (`financialid`, `date`, `amount`, `type`, `userid`, `description`, `status`, `previousbalance`) VALUES
(1, '2023-05-17 12:34:00', '1000', 'agha', '1', 'agha', 'active', NULL),
(2, '2023-05-23 09:33:00', '120', 'rs', '2', 'agha', 'active', NULL),
(3, '2023-05-23 13:23:00', '5000', 'Credit', '9', 'initial deposit', 'Active', NULL),
(4, '2023-05-23 13:40:17', '3000', 'Debit', '9', 'Contest 1 Ticket Purchase (Ticket ID = 1)', 'Active', NULL),
(5, '2023-05-23 14:23:07', '0', 'Debit', '9', ' - (Ticket ID = 8)', 'Active', NULL),
(6, '2023-05-23 14:24:28', '0', 'Debit', '9', ' - (Ticket ID = 9)', 'Active', NULL),
(7, '2023-05-23 14:24:42', '0', 'Debit', '9', ' - (Ticket ID = 10)', 'Active', NULL),
(8, '2023-05-23 14:24:56', '0', 'Debit', '9', ' - (Ticket ID = 11)', 'Active', NULL),
(9, '2023-05-23 14:26:59', '5000', 'Debit', '9', 'Contest4 - (Ticket ID = 12)', 'Active', NULL),
(10, '2023-05-23 14:27:08', '5000', 'Debit', '9', 'Contest4 - (Ticket ID = 13)', 'Active', NULL),
(11, '2023-05-23 14:27:33', '3000', 'Debit', '9', 'Contest4 - (Ticket ID = 14)', 'Active', NULL),
(12, '2023-05-23 14:35:04', '3000', 'Debit', '9', 'Contest4 - (Ticket ID = 15)', 'Active', NULL),
(13, '2023-05-23 14:36:41', '3000', 'Debit', '9', 'Contest4 - (Ticket ID = 16)', 'Active', NULL),
(14, '2023-05-23 14:38:31', '3000', 'Debit', '9', 'Contest4 - (Ticket ID = 17)', 'Active', NULL),
(15, '2023-05-23 14:48:00', '20', 'Debit', '9', 'Deposite through bank', 'Active', NULL),
(16, '2023-05-23 14:50:00', '300', 'Debit', '9', 'testing ', 'Active', NULL),
(17, '2023-05-23 14:50:00', '300', 'Debit', '9', 'testing ', 'Active', 6980),
(18, '2023-05-23 14:50:00', '300', 'Debit', '9', 'testing ', 'Active', 6680),
(19, '2023-05-23 14:54:00', '3000', 'Debit', '9', 'testing 44', 'Active', 6380),
(20, '2023-05-23 14:58:00', '7000', 'Credit', '9', 'another transaction', 'Active', 3380),
(21, '2023-05-23 15:05:00', '5500', 'Credit', '14', 'Initial Deposit', 'Active', 0),
(22, '2023-05-23 15:06:12', '3000', 'Debit', '14', 'Contest4 - (Ticket ID = 18)', 'Active', 5500),
(23, '2023-05-23 15:08:00', '6000', 'Credit', '14', 'second deposit', 'Active', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticketid` int(11) NOT NULL,
  `contestid` varchar(100) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `dateofcreation` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticketid`, `contestid`, `userid`, `status`, `dateofcreation`) VALUES
(1, '1', '9', 'Winner', '2023-05-17 07:00:00'),
(2, '9', '9', 'Active', '2023-05-23 14:07:00'),
(3, '9', '9', 'Active', '2023-05-23 14:07:08'),
(14, '9', '9', 'Active', '2023-05-23 14:27:33'),
(15, '9', '9', 'Active', '2023-05-23 14:35:04'),
(16, '9', '9', 'Active', '2023-05-23 14:36:41'),
(17, '9', '9', 'Active', '2023-05-23 14:38:31'),
(18, '9', '14', 'Active', '2023-05-23 15:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `doc` timestamp NULL DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `pancard` varchar(100) DEFAULT NULL,
  `aadharcard` varchar(100) DEFAULT NULL,
  `balance` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `username`, `email`, `password`, `doc`, `status`, `pancard`, `aadharcard`, `balance`) VALUES
(1, 'agha', 'faiz', 'faiz@gmail.com', '2222', '0000-00-00 00:00:00', 'faizz', '1234567890', '1234567890', NULL),
(2, 'firstname', 'admin', 'zeeshan107526@gmail.com', '1122', '0000-00-00 00:00:00', 'active', '23214234', '325234543', NULL),
(3, 'firstname', 'admin', 'zeeshan107526@gmail.com', '1122', '2023-05-13 07:00:00', 'Active', NULL, NULL, NULL),
(4, 'firstname', 'admin', 'zeeshan107526@gmail.com', '1122', '2023-05-14 01:35:59', 'Active', NULL, NULL, NULL),
(5, 'firstname', 'admin', 'zeeshan107526@gmail.com', '1122', '2023-05-14 01:43:07', 'Active', '23142234', '345235423', NULL),
(6, 'khan', 'agha', 'khan@gmail.com', '1111', '0000-00-00 00:00:00', 'active', '23142234', '231312423', NULL),
(7, NULL, 'alone', 'alone@gmail.com', '112233', '0000-00-00 00:00:00', 'active', '23142234', '34234231', NULL),
(8, 'alone', 'salman', 'zeeshan107526@gmail.com', '1122', '0000-00-00 00:00:00', 'active', '23142234', '2314231412', NULL),
(9, 'salman', 'agha', 'aghasalmankhan95@gmail.com', 'agha', '0000-00-00 00:00:00', 'Active', '42201148102456', '42201148102456', 10380),
(11, 'salman', 'salman', 'aghasalmankhan14@gmail.com', 'agha', '2023-05-23 11:15:58', 'Active', NULL, NULL, NULL),
(12, 'agha', 'salman', 'aghasalmankhan99@gmail.com', 'agah', '2023-05-23 11:30:57', 'Active', NULL, NULL, NULL),
(13, 'Salman Agha', 'agha', 'aghasalmankhan55@gmail.com', 'agha', '2023-05-23 11:33:44', 'Active', NULL, NULL, NULL),
(14, 'Farhan', 'farhanhaider', 'farhan@gmail.com', 'agha', '2023-05-23 15:04:46', 'Active', NULL, NULL, 8500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `contest`
--
ALTER TABLE `contest`
  ADD PRIMARY KEY (`contestid`);

--
-- Indexes for table `financial`
--
ALTER TABLE `financial`
  ADD PRIMARY KEY (`financialid`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticketid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contest`
--
ALTER TABLE `contest`
  MODIFY `contestid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `financial`
--
ALTER TABLE `financial`
  MODIFY `financialid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticketid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

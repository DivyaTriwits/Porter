-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 10:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porter`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `id` int(11) NOT NULL,
  `role_id` varchar(100) NOT NULL,
  `route_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`id`, `role_id`, `route_id`, `status`) VALUES
(7, 'M5kHn3env1ACvDCK0G', 1, 1),
(8, 'M5kHn3env1ACvDCK0G', 2, 0),
(9, 'M5kHn3env1ACvDCK0G', 3, 0),
(10, 'M5kHn3env1ACvDCK0G', 4, 0),
(11, 'M5kHn3env1ACvDCK0G', 5, 0),
(12, 'M5kHn3env1ACvDCK0G', 6, 1),
(13, '2uIo6p2Z0FIkUBAhKb', 1, 1),
(14, '2uIo6p2Z0FIkUBAhKb', 2, 0),
(15, '2uIo6p2Z0FIkUBAhKb', 3, 0),
(16, '2uIo6p2Z0FIkUBAhKb', 4, 0),
(17, '2uIo6p2Z0FIkUBAhKb', 5, 0),
(18, '2uIo6p2Z0FIkUBAhKb', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `aid` int(11) NOT NULL,
  `airname` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`aid`, `airname`) VALUES
(1, 'Air India'),
(3, 'IndiGo'),
(4, 'SpiceJet'),
(5, 'Go First'),
(6, 'AirAsia India'),
(7, 'Vistara');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `billno` varchar(20) NOT NULL,
  `managerid` varchar(20) NOT NULL,
  `pname` varchar(300) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `porter_id` int(11) NOT NULL,
  `airline` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `time` datetime NOT NULL,
  `fligt_no` varchar(100) NOT NULL,
  `bags` varchar(300) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `cancel_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `UserId` varchar(300) NOT NULL,
  `emails` varchar(150) NOT NULL,
  `password` varchar(300) NOT NULL,
  `role` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `UserId`, `emails`, `password`, `role`, `role_name`) VALUES
(1, '2hn15ec10', 'admin@gmail.com', '123456', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `new_expenses`
--

CREATE TABLE `new_expenses` (
  `id` int(11) NOT NULL,
  `unique_id` text NOT NULL,
  `manager_id` varchar(20) NOT NULL,
  `name` varchar(300) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(300) NOT NULL,
  `airlineName` varchar(300) NOT NULL,
  `port_id` int(11) NOT NULL,
  `ptype` varchar(100) NOT NULL,
  `bags` varchar(300) NOT NULL,
  `price` float NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `cancel_port` varchar(1) NOT NULL DEFAULT '0',
  `enddate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `new_expenses`
--

INSERT INTO `new_expenses` (`id`, `unique_id`, `manager_id`, `name`, `contact`, `email`, `airlineName`, `port_id`, `ptype`, `bags`, `price`, `date`, `status`, `cancel_port`, `enddate`) VALUES
(13, 'I4PfNNZMvgDvA0ftWSba', 'u7ib4M44eUNaELx8V9', 'aasif aherikar', 8929939389, 'Impossitive@gmail.com', 'Vistara', 204, 'Regular', '1 to 3 Bags', 30, '2023-02-17 11:41:26', 0, '0', '2023-03-14 13:51:23'),
(9, 'NqTTz3ZXXO6Y03YQlu6G', 'u7ib4M44eUNaELx8V9', 'Test', 9513028895, 'Test@gmail.com', 'IndiGo', 201, 'Regular', '1 to 3 Bags', 30, '2023-02-17 11:41:26', 0, '0', '2023-03-14 13:51:23'),
(10, 'nEMtCPdEzQAnGNWeJLHN', 'u7ib4M44eUNaELx8V9', 'Test', 9513028895, 'Test@gmail.com', 'IndiGo', 201, 'Regular', '1 to 3 Bags', 30, '2023-02-17 11:41:26', 0, '0', '2023-03-14 13:51:23'),
(11, 'IUjwsfi1M4A1sN4o055s', 'u7ib4M44eUNaELx8V9', 'Test', 9513028895, 'Test@gmail.com', 'IndiGo', 201, 'Regular', '1 to 3 Bags', 30, '2023-02-17 11:41:26', 0, '0', '2023-03-14 13:51:23'),
(12, 'kUuZXCvfagPiFDVBWZzk', 'u7ib4M44eUNaELx8V9', 'Test', 9513028895, 'Test@gmail.com', 'IndiGo', 201, 'Regular', '1 to 3 Bags', 30, '2023-02-17 11:41:26', 0, '0', '2023-03-14 13:51:23'),
(16, 'dLo4wgJvqmn0fXZrUHg1', 'u7ib4M44eUNaELx8V9', '', 0, '', '', 0, 'VIP', '0 Bags', 0, '2023-02-17 11:41:26', 0, '0', '2023-03-14 13:51:23'),
(17, 'uLfL8kKPb7t4XChHY4pT', 'u7ib4M44eUNaELx8V9', 'John', 1234567890, 'john@gmail.com', 'Air India', 201, 'VIP', '1 to 3 Bags', 30, '2023-02-17 11:41:26', 1, '0', '2023-03-14 13:51:23'),
(18, 'gN5ckNqR8opGEgB56Afj', 'u7ib4M44eUNaELx8V9', 'Test', 1234567890, 'Test@gmail.com', 'Air India', 201, 'Regular', '9 to 12', 120, '2023-02-17 11:41:26', 0, '0', '2023-03-14 13:51:23'),
(19, 'gJOGVXac4dHbgz7qP6I2', 'u7ib4M44eUNaELx8V9', 'Tedt', 1234567890, 'john@gmail.com', 'Air India', 201, 'Regular', '6 to 9', 90, '2023-02-17 11:41:26', 0, '0', '2023-03-14 13:51:23'),
(20, 'fgwLPA2xIKT3Q5zsOLAA', 'u7ib4M44eUNaELx8V9', 'Test', 1234567890, 'test@gmail.com', 'Go First', 201, 'VIP', '1 to 3 Bags', 30, '2023-02-17 11:41:26', 0, '1', '2023-03-14 13:51:23'),
(21, 'i56TG4VWTrdBmXK3lw5T', 'u7ib4M44eUNaELx8V9', 'Vip', 1234567890, 'Vip@gmail.com', 'Vistara', 201, 'VIP', '3 to 6 Bags', 60, '2023-02-17 11:41:26', 1, '0', '2023-03-14 13:51:23'),
(22, 'rzSJfXMJYluTzdyhkRFR', 'u7ib4M44eUNaELx8V9', 'Tyr', 465337886544, 'Ggfg@gmail.com', 'IndiGo', 201, 'VIP', '1 to 3 Bags', 30, '2023-02-17 11:41:26', 0, '1', '2023-03-14 13:51:23'),
(23, 'RQlKU0Wq83lMNKw8ef02', 'u7ib4M44eUNaELx8V9', 'Testing', 1234567890, 'test@gmail.com', 'Go First', 201, 'Regular', '3 to 6 Bags', 60, '2023-02-17 11:41:26', 0, '0', '2023-03-14 13:51:23'),
(24, 'ZOyOhAQMc53AyQEkZY49', 'u7ib4M44eUNaELx8V9', 'Test', 1234567890, 'tabassum@gmail.com', 'SpiceJet', 201, 'VIP', '6 to 9', 90, '2023-02-17 11:41:26', 0, '0', '2023-03-14 13:51:23'),
(25, 'RNBT2BB1vzfujmlZKcmu', 'u7ib4M44eUNaELx8V9', 'Testing', 1234567890, 'tabassum@gmail.com', 'Go First', 201, 'Regular', '6 to 9', 90, '2023-02-17 11:41:26', 0, '0', '2023-03-14 13:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(20) NOT NULL,
  `expense_id` varchar(20) NOT NULL,
  `payment_mode` varchar(200) NOT NULL,
  `upi_code` varchar(300) NOT NULL,
  `amount` varchar(300) NOT NULL,
  `pdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `expense_id`, `payment_mode`, `upi_code`, `amount`, `pdate`) VALUES
(1, 'I4PfNNZMvgDvA0ftWSba', 'xIxWitQTAmkuFQferuM2', 'upi', 'Hmnh', '36', '2022-12-19 11:57:08'),
(2, 'I4PfNNZMvgDvA0ftWSba', 'I4PfNNZMvgDvA0ftWSba', 'Cash', 'Fhhh', '24', '2022-12-19 11:57:47'),
(3, 'kUuZXCvfagPiFDVBWZzk', 'kUuZXCvfagPiFDVBWZzk', 'Cash', '...', '1500', '2022-12-19 11:57:52'),
(4, 'UjV2YQUZWBfFsgLQ4K', 'uLfL8kKPb7t4XChHY4pT', 'Cash', '.....', '1500', '2022-12-20 08:05:28'),
(5, 'O04wjvyyMyaRsJARFA', 'i56TG4VWTrdBmXK3lw5T', 'Cash', '.', '3000', '2022-12-20 11:54:13'),
(6, 'epRm8Kdn9REIVazpjm', 'bZG2YThSAwc4DvwN9LtT', '10', 'test', '10', '2023-02-10 11:16:28'),
(7, 'ALi4wD7zXM5pr202sS', '7euaetLX4avUJ1YX86sF', 'online', 'helloooooo', '127.2', '2023-02-13 11:00:36'),
(8, 'Tt5ZDQtAsRn8VRfuSG', 'YiibDoD2mT3VujpmRIQG', 'online ', 'helloooooooo', '127.2', '2023-02-13 11:02:43'),
(9, 'R0aUMziHaBiRmmepXG', 'StYEPftRIZXFHECKTrjW', 'cash', 'ffgh', '31', '2023-03-24 09:56:49'),
(10, 'rABhjLfZXOu2DTDtHE', 'u6aSXNSGgMN1DGPId4YZ', 'tg55', 'tyh', '31', '2023-03-24 09:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `porter`
--

CREATE TABLE `porter` (
  `id` int(11) NOT NULL,
  `porterid` varchar(11) NOT NULL,
  `uniqueid` varchar(20) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `joining_date` date NOT NULL,
  `shift` varchar(100) NOT NULL,
  `salary` float(10,2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `porter`
--

INSERT INTO `porter` (`id`, `porterid`, `uniqueid`, `first_name`, `last_name`, `mobile`, `joining_date`, `shift`, `salary`, `created_date`) VALUES
(32, 'AV1', 'dg22McpyuzNbwh695j', 'MD SABBIR', 'HOSEN', 0, '2023-04-06', 'Shift-1', 0.00, '2023-04-08 13:05:36'),
(33, 'AV2', '2zun8oc0WTrtMJe9qK', 'MD HASIBUL', 'HOSSEN', 0, '0000-00-00', '', 0.00, '2023-04-08 12:12:53'),
(34, 'AV3', 'TzS5gxfJVjAStSZ0Bp', 'SAFIGUL', 'ISLAM', 0, '0000-00-00', '', 0.00, '2023-04-08 12:13:09'),
(35, 'AV4', 'ScyZAva2T2SM1lWUzv', 'MD KAWSAR', '', 0, '0000-00-00', '', 0.00, '2023-04-08 12:14:15'),
(36, 'AV5', 'kLcNJ9BFvXKNOSqEqT', 'MD JULHAS', '', 0, '0000-00-00', '', 0.00, '2023-04-08 12:14:29'),
(37, 'AV6', 'fpEVxq8uBvF1fc9F7X', 'MD RAIHAN', '', 0, '0000-00-00', '', 0.00, '2023-04-08 12:14:43'),
(38, 'AV7', '63IHzfit6UI1UPD8TN', 'PARVEZ', 'ALAM', 0, '0000-00-00', '', 0.00, '2023-04-08 12:14:58'),
(39, 'AV8', 'fXHL65plha8zNysm0u', 'SADDAM', 'HOSSAIN', 0, '0000-00-00', '', 0.00, '2023-04-08 12:15:24'),
(40, 'AV9', 'H9y9K0ov0QjDpOi5G1', 'MD MEHEDI', '', 0, '0000-00-00', '', 0.00, '2023-04-08 12:15:40'),
(41, 'AV10', 'LrlQscTIWWnpSMhqa6', 'MD KOBIRUL', '', 0, '0000-00-00', '', 0.00, '2023-04-08 12:15:56'),
(42, 'AV11', '5ou0wEsswPZNxyNl6E', 'MD ASRAFUL', '', 0, '0000-00-00', '', 0.00, '2023-04-08 12:16:26'),
(43, 'AV12', 'uRkdmjvpZTJSag9ICC', 'MD DABIR', 'HOSEN', 0, '0000-00-00', '', 0.00, '2023-04-08 12:16:43'),
(44, 'AV13', 'kdb0jqG9AT5UxpiKTt', 'MIJANUR', 'RAHMAN', 0, '0000-00-00', '', 0.00, '2023-04-08 12:17:15'),
(45, 'AV14', '8Z9seoMPJbp7imEokw', 'MOHAMMAD SHEIKH', 'RASEL', 0, '0000-00-00', '', 0.00, '2023-04-08 12:18:08'),
(46, 'AV15', '9mzx08AqYYk1bqYtCZ', 'ALAMIN', '', 0, '0000-00-00', '', 0.00, '2023-04-08 12:18:32'),
(47, 'AV16', 'MsDSXzWgxmAXT370HT', 'MD RIYAD HOSSAIN', 'SAKIN', 0, '0000-00-00', '', 0.00, '2023-04-08 12:19:00'),
(48, 'AV17', 'eVRN9a49yprMprcqU9', 'MD HUMAYYUN', 'KABIR', 0, '0000-00-00', '', 0.00, '2023-04-08 12:20:11'),
(49, 'AV18', 'bhRnG5uVRqjDMZHFxg', 'MD ZAHID', 'HASAN', 0, '0000-00-00', '', 0.00, '2023-04-08 12:21:27'),
(50, 'AV19', 'xsvKyV7uVOgvMlQKy7', 'MD AMANULLAH', '', 0, '0000-00-00', '', 0.00, '2023-04-08 12:21:55'),
(51, 'AV20', 'v9sQfCMWe749znFhUz', 'MD MIRAJ', 'BHUIYAN', 0, '0000-00-00', '', 0.00, '2023-04-08 12:24:09'),
(52, 'AV21', 'SXBXLl0tPmEDmrWTln', 'MD AL', 'MAMUN', 0, '0000-00-00', '', 0.00, '2023-04-08 12:30:06'),
(53, 'AV22', 'NIs6FFadWeR6HUOmmC', 'MD SHOVON', 'ALI', 0, '0000-00-00', '', 0.00, '2023-04-08 12:30:42'),
(54, 'AV23', 'RpryCZS1mlWudFP6IX', 'MOHD LAN BIN', 'MAD JALAN', 0, '0000-00-00', '', 0.00, '2023-04-08 12:36:01'),
(55, 'AV24', 'RpQTi9a6c5ZuV1AaiU', 'MOHD ZAMREE', 'BIN AJAID', 0, '0000-00-00', '', 0.00, '2023-04-08 12:36:39'),
(56, 'AV25', '1EHR0Xlf0vKsYVCtxR', 'SAUF PARADI', 'BIN ABD NABI', 0, '0000-00-00', '', 0.00, '2023-04-08 12:37:36'),
(57, 'AV26', 'wnBX6SPBK2NXoRXY99', 'MOHD AMIN BIN', 'SALASADDIN', 0, '0000-00-00', '', 0.00, '2023-04-08 12:38:17'),
(58, 'AV27', 'Pxoe0vcB4z5Dw9A3X0', 'ZULKIFLI BIN', 'SAGOH', 0, '0000-00-00', '', 0.00, '2023-04-08 12:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `rid` int(11) NOT NULL,
  `role_id` varchar(150) NOT NULL,
  `roles` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`rid`, `role_id`, `roles`) VALUES
(3, 'U1Bt8aGtyzolU7hHXA', 'ttttt'),
(4, 'tDBJSmmZLJ9eIFHD5Q', 'asa'),
(5, 'M5kHn3env1ACvDCK0G', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `rt_id` int(11) NOT NULL,
  `route_name` varchar(300) NOT NULL,
  `route` varchar(300) NOT NULL,
  `routestatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`rt_id`, `route_name`, `route`, `routestatus`) VALUES
(1, 'Bills', 'bills', ''),
(2, 'Employee Management', 'employee-management', ''),
(3, 'Manager', 'manager', ''),
(4, 'Porter', 'porter', ''),
(5, 'Reports', 'reports', ''),
(6, 'Airlines', 'airlines', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(300) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `joining_date` date NOT NULL,
  `shift` varchar(300) NOT NULL,
  `salary` float(10,2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `unique_id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `joining_date`, `shift`, `salary`, `created_date`) VALUES
(1, 'u7ib4M44eUNaELx8V9', 'testing', 'testing', 1234567890, '00112', '1234', '2022-12-17', 'day', 10000.00, '2023-03-24 09:45:28'),
(3, 'zGPuZdJokZLuAdkHav', 'John', 'Doe', 9999999999, '', '', '2023-02-13', 'Day', 2000.00, '2023-02-17 11:41:26'),
(5, 'BWdRsYcxYLpK7LNyyo', 'Chan', 'Joy', 9999900000, '', '', '2023-03-24', 'Day', 10000.00, '2023-03-24 09:44:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_expenses`
--
ALTER TABLE `new_expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porter`
--
ALTER TABLE `porter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`rt_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airline`
--
ALTER TABLE `airline`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `new_expenses`
--
ALTER TABLE `new_expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `porter`
--
ALTER TABLE `porter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `rt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

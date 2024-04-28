-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 08:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customer_id` char(150) NOT NULL,
  `name_customer` varchar(50) NOT NULL,
  `gender_c` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_id`, `name_customer`, `gender_c`, `address`, `phone`) VALUES
(1, 'P000', 'Claire Blake', 'Female', 'Sample Address 102', '09789654123');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` char(4) NOT NULL,
  `name_employee` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `number` varchar(15) NOT NULL,
  `salary` int(11) NOT NULL,
  `date_join` date NOT NULL,
  `date_stop` date NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name_employee`, `gender`, `address`, `number`, `salary`, `date_join`, `date_stop`, `active`) VALUES
('K000', 'John Smith', 'Male', '23 St., There, Here City', '09123654789', 0, '2018-01-01', '0000-00-00', 2),
('K001', 'George WIlson', 'Male', 'Sample Address 101', '09123456879', 1500, '2022-02-22', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `expenditure_id` varchar(14) NOT NULL,
  `total` int(11) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `date_expenditure` date NOT NULL,
  `employee_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`expenditure_id`, `total`, `detail`, `date_expenditure`, `employee_id`) VALUES
('20220628094542', 1500, 'Employee Salary Payment June 2022', '2022-06-28', 'K000'),
('20220628094556', 100, 'Sample Expense', '2022-06-28', 'K001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedback_type` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `customer_name`, `phone_number`, `email`, `feedback_type`, `description`) VALUES
(1, 'Sittie Jamaica Solaiman Macarambon', 2147483647, 'simoneganados24@gmail.com', 'Comments', 'I love BINI'),
(2, 'Jessie john paul', 1234432454, 'simoneganados24@gmail.com', 'Suggestions', 'sisieieudddudodkdmd'),
(3, 'simone june', 1345432345, 'simoneganados24@gmail.com', 'Comments', 'sdfdefirgyhsjmdjkxaskdjwqead'),
(4, 'simone june', 1345432345, 'simoneganados24@gmail.com', 'Comments', 'qsrtxshbxhshbhduwysjxjs'),
(5, 'simone homdus ganados', 2147483647, 'simoneganados24@gmail.com', 'Suggestions', 'dksndniw');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` varchar(14) NOT NULL,
  `customer_id` char(7) NOT NULL,
  `employee_id` char(6) NOT NULL,
  `weight` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date_order` date NOT NULL,
  `date_finish` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `customer_id`, `employee_id`, `weight`, `total`, `date_order`, `date_finish`) VALUES
('20220628143538', 'P000', 'K001', 15, 58, '2022-06-28', '2022-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` char(4) NOT NULL,
  `namauser` varchar(30) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` char(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `namauser`, `username`, `password`, `level`) VALUES
('U001', 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', 'superuser');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `UNIQUE` (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`expenditure_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

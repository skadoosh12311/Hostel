-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 06:00 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `q1` varchar(100) DEFAULT NULL,
  `q2` varchar(100) DEFAULT NULL,
  `q3` varchar(100) DEFAULT NULL,
  `q4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`q1`, `q2`, `q3`, `q4`) VALUES
('It was good', 'Friends', 'NO its the best', '100%'),
('Good site', 'Colleague', 'No', '90%'),
('qweeeee', 'qasasassa', 'asasasasas', 'aassaassa'),
('hello', 'aas', 'asdf', 'dssf');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `m_id` int(5) NOT NULL,
  `m_email` varchar(50) DEFAULT NULL,
  `m_pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`m_id`, `m_email`, `m_pass`) VALUES
(1, 'jerindgr8@gmail.com', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `r_id` int(5) NOT NULL,
  `r_type` varchar(30) DEFAULT NULL,
  `r_price` varchar(10) DEFAULT NULL,
  `r_checkin` date DEFAULT NULL,
  `r_checkout` date DEFAULT NULL,
  `r_finalprice` varchar(10) DEFAULT NULL,
  `s_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`r_id`, `r_type`, `r_price`, `r_checkin`, `r_checkout`, `r_finalprice`, `s_id`) VALUES
(7, 'Male Dorm', '899', '2019-10-16', '2019-10-18', '1798', 1),
(9, 'Mixed Dorm', '699', '2019-10-25', '2019-11-01', '4893', 2),
(10, 'Deluxe Private Dorm', '1299', '2019-11-01', '2019-11-08', '9093', 5);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(5) NOT NULL,
  `s_first` varchar(20) DEFAULT NULL,
  `s_middle` varchar(20) DEFAULT NULL,
  `s_last` varchar(20) DEFAULT NULL,
  `s_mobno` varchar(10) NOT NULL,
  `s_course` varchar(20) DEFAULT NULL,
  `s_gender` varchar(10) DEFAULT NULL,
  `s_address` varchar(50) DEFAULT NULL,
  `s_email` varchar(40) DEFAULT NULL,
  `s_pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_first`, `s_middle`, `s_last`, `s_mobno`, `s_course`, `s_gender`, `s_address`, `s_email`, `s_pass`) VALUES
(1, 'Jerin', 'Thomas', 'Varghese', '9869808141', 'BE', 'Male', 'Vasai', 'jerindgr8@gmail.com', 'pass'),
(2, 'Robin', 'Rajan', 'Varghese', '9920940893', 'MCA', 'Male', 'Bhayandar', 'rrvarghese741@gmail.com', '123'),
(3, 'Riya', 'Rajan', 'Anna', '8779248213', 'BDS', 'Female', 'Dadar', 'riya@gmail.com', 'xyz'),
(4, 'Annie', '', 'Mathew', '8097485038', 'BE', 'Female', 'Uttan Road', 'anie2007@rediffmail.com', '1234'),
(5, 'Jeetu', '', 'Jangid', '988878899', 'BE', 'Male', 'Bhayandar', 'jeetu@gmail.com', 'pass'),
(6, '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `m_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `r_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

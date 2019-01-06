-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 01:55 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_info`
--

CREATE TABLE `blood_info` (
  `id` int(10) NOT NULL,
  `blood_name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `hospital_name` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_info`
--

INSERT INTO `blood_info` (`id`, `blood_name`, `type`, `hospital_name`, `quantity`, `price`) VALUES
(1, 'A', '+ve', 'AIIMS', 5, 500),
(2, 'O ', '+ve', 'AIIMS', 2, 500);

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE `blood_request` (
  `id` int(10) NOT NULL,
  `blood_id` varchar(200) NOT NULL,
  `user_contact` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`id`, `blood_id`, `user_contact`, `date`, `time`) VALUES
(5, '1', '7631200530', '2019-01-06', '00:00:00'),
(6, '2', '7631200530', '2019-01-06', '00:00:00'),
(7, '1', '7631200530', '2019-01-06', '01:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_registration`
--

CREATE TABLE `hospital_registration` (
  `id` varchar(20) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `specialization` varchar(200) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` bigint(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_registration`
--

INSERT INTO `hospital_registration` (`id`, `hospital_name`, `specialization`, `username`, `password`, `email`, `contact`, `city`, `address`) VALUES
('AIIMS123', 'AIIMS', 'Surgery', 'aiims@admin', 'aiims', 'admin@aiims.com', 8888282828, 'New Delhi', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `receiver_registration`
--

CREATE TABLE `receiver_registration` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `contact` bigint(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver_registration`
--

INSERT INTO `receiver_registration` (`first_name`, `last_name`, `dob`, `blood_group`, `contact`, `password`, `email`, `city`, `state`, `address`) VALUES
('Umesh', 'Rana', '1992-12-24', 'O +ve', 7631200530, 'umesh', 'umesh.rana0269@gmail.com', 'Delhi', 'New Delhi', 'New Delhi'),
('Umesh', 'Rana', '2019-01-17', 'O +ve', 7631200578, '', 'umesh.rana0269@gmail.com', 'New Delhi', 'new delhi', 'Virender Nagar'),
('Ashish', 'Sharma', '1994-03-22', 'A +ve', 8378383883, '', 'admin@gmail.com', 'Delhi', 'new delhi', 'Tilak Nagar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_info`
--
ALTER TABLE `blood_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_registration`
--
ALTER TABLE `hospital_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver_registration`
--
ALTER TABLE `receiver_registration`
  ADD PRIMARY KEY (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_info`
--
ALTER TABLE `blood_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blood_request`
--
ALTER TABLE `blood_request`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

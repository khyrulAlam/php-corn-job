-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 12:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsubscriber`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `access_level` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_name`, `username`, `password`, `create_date`, `access_level`) VALUES
(1, 'super admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-12-23 13:29:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_list`
--

CREATE TABLE `subscriber_list` (
  `s_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `toDate` varchar(50) NOT NULL,
  `fromDate` varchar(50) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriber_list`
--

INSERT INTO `subscriber_list` (`s_id`, `name`, `profession`, `company`, `phone`, `email`, `address`, `toDate`, `fromDate`, `status`) VALUES
(1, 'Khyrul Alam', 'Web Developer', 'Tech World BD', '01671508871', 'alamtechsolutions@gmail.com', '404, Golam Rasul Plaza, 1st Floor, A-4, Dilu Road, New Eskaton, Dhaka.', '2017-12-28', '2018-01-13', 1),
(2, 'Arifur Rahman', 'Jr. Programmer', 'TechsolutionsBD', '01769966956', 'ariftechsolutions@gmail.com', '404, Golam Rasul Plaza, 1st Floor, A-4, Dilu Road, New Eskaton, Dhaka.', '2017-12-28', '2018-01-15', 1),
(3, 'Tanvir Shaikat', 'Jr. Programmer', 'TechsolutionsBD', '01878228654', 'ta.shaikat@gmail.com', '404, Golam Rasul Plaza, 1st Floor, A-4, Dilu Road, New Eskaton, Dhaka.', '2017-12-28', '2018-01-12', 1),
(4, 'Bony Hamza', 'Content Developer', 'Tech World BD', '01725846855', 'bonyhamja@gmail.com', '404, Golam Rasul Plaza, 1st Floor, A-4, Dilu Road, New Eskaton, Dhaka.', '2017-12-28', '2018-01-14', 1),
(5, 'Yousuf Ahmed', 'Business Developer', 'Rallyround BD', '02554484552', 'yusuf.ng.bd@gmail.com', '404, Golam Rasul Plaza, 1st Floor, A-4, Dilu Road, New Eskaton, Dhaka.', '2017-12-28', '2018-01-11', 0),
(6, 'Ujjal Chandra Barman', 'Media Coordinator', 'Tech World BD', '01678545556', 'ujjal.chandra.bd@gmail.com', '404, Golam Rasul Plaza, 1st Floor, A-4, Dilu Road, New Eskaton, Dhaka.', '2017-12-28', '2018-01-10', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber_list`
--
ALTER TABLE `subscriber_list`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subscriber_list`
--
ALTER TABLE `subscriber_list`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 09:28 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handiya_poly`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `ad_date` datetime NOT NULL,
  `status` enum('active','block') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `name`, `email`, `pass`, `ad_date`, `status`) VALUES
(1356400, 'admin', 'admin@gmail.com', 'admin', '2018-12-26 00:00:00', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `msg_tbl`
--

CREATE TABLE `msg_tbl` (
  `id` int(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `msg` longtext NOT NULL,
  `sent_date` datetime NOT NULL,
  `status` enum('active','block') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg_tbl`
--

INSERT INTO `msg_tbl` (`id`, `name`, `email`, `subject`, `msg`, `sent_date`, `status`) VALUES
(7, 'Ajay Kumar', 'admin@gmail.com', 'dsfhfhrth', 'hgtrhrtgege\r\n\r\nsgrge\r\nsrt', '2018-12-27 14:45:23', 'active'),
(8, 'admin', 'sd@sjdf.cxk', 'sdgfghrhr', 'sghetgrewgwerergergetegeeer', '2018-12-27 14:45:38', 'active'),
(9, 'zsdfgergfwr', 'sfsf@sdf.sad', 'sdsfdgsgsf', 'dgbsfsf\r\nf\r\n', '2018-12-27 14:45:51', 'active'),
(10, 'awertyu', 'ssds@gns.cdj', 'aerty', 'zfkjdsfhewiewn', '2018-12-27 14:46:02', 'active'),
(12, 'sandeep Kumar', 'sandeep@gmail.com', 'addmission', 'Addmission nahi ho pa rha hai', '2018-12-27 15:20:12', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `not_tbl`
--

CREATE TABLE `not_tbl` (
  `id` int(11) NOT NULL,
  `msg` longtext NOT NULL,
  `ad_date` datetime NOT NULL,
  `status` enum('active','block') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `not_tbl`
--

INSERT INTO `not_tbl` (`id`, `msg`, `ad_date`, `status`) VALUES
(1, 'hello this is Fisrt notification', '2018-12-27 15:09:33', 'active'),
(2, 'second notification is here', '2018-12-27 15:09:53', 'active'),
(5, 'sdfghj', '2018-12-27 15:14:22', 'active'),
(6, 'aertyuj rggreger rger', '2018-12-27 15:14:30', 'active'),
(7, 'asrdtyguhtrtr reter', '2018-12-27 15:14:40', 'active'),
(9, 'sandeep padhai likhai nahi kr rha hai', '2018-12-27 15:16:53', 'active'),
(10, 'safdsfs sdkfjsf sdkfhf dkfh', '2018-12-27 15:23:17', 'active'),
(11, 'sandeep kumar yadav', '2018-12-27 15:42:06', 'active'),
(12, 'final ho gaya...', '2018-12-27 17:08:47', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg_tbl`
--
ALTER TABLE `msg_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `not_tbl`
--
ALTER TABLE `not_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1356401;

--
-- AUTO_INCREMENT for table `msg_tbl`
--
ALTER TABLE `msg_tbl`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `not_tbl`
--
ALTER TABLE `not_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

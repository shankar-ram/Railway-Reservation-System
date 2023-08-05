-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 06:01 PM
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
-- Database: `dbms`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getRegistration` (IN `u_id` VARCHAR(50))  NO SQL
SELECT * FROM registration WHERE id= u_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `age` date NOT NULL,
  `id` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`firstname`, `lastname`, `age`, `id`, `p_id`) VALUES
('', '', '0000-00-00', 'HIDDEN', ''),
('Vinay', 'Shetty', '2019-11-06', 'messi', 'abc'),
('Vinay', 'Shetty', '2019-12-05', 'mmm', 'ABCD'),
('Vinay', 'Shetty', '2019-11-06', 'HIDDEN', 'BAN'),
('Vinay', 'Shetty', '2019-11-13', 'messi', 'god'),
('Vaishak', 'Shetty', '2020-10-22', 'HIDDEN', 'HIDDEN'),
('Vaishak', 'Shetty M', '2020-09-30', 'messi', 'jeeva'),
('Vinay', 'Shetty', '2019-11-07', 'HIDDEN', 'LORD'),
('Vinay', 'Shetty', '2019-11-07', 'HIDDEN', 'mac'),
('Vinay', 'Shetty', '2019-11-08', 'KK', 'MACC'),
('Vinay', 'Shetty', '2019-11-06', 'HIDDEN', 'max'),
('Vinay', 'Shetty', '2019-12-04', 'HIDDEN', 'mnb'),
('Vinay', 'Shetty', '2019-11-13', 'HIDDEN', 'NJN'),
('pratheek', 'rns', '2019-11-07', 'HR', 'ps'),
('Vinay', 'Shetty', '2019-12-04', 'HIDDEN', 'rod'),
('ritesh', 'shetty', '2019-11-07', 'HR', 'RS'),
('Vinay', 'Shetty', '2019-11-14', 'HIDDEN', 'SAM'),
('Vinay', 'Shetty', '2019-12-03', 'HIDDEN', 'shettys'),
('Vinay', 'Shetty', '2019-11-21', 'shree', 'shrees');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birth` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('m','f','o') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstname`, `lastname`, `id`, `password`, `number`, `address`, `birth`, `age`, `gender`) VALUES
('Vinay', 'Shetty', 'HIDDEN', 'messi', 8762790223, 'Ratnagiri Bore Extension', '2014-01-07', 5, 'm'),
('HITESHWAR', 'REDDY', 'HR', '12345', 8762790223, 'Ratnagiri Bore Extension, Swathi Nilaya', '2013-01-08', 6, 'm'),
('Vinay', 'Shetty', 'KK', 'KK', 8762790223, 'Ratnagiri Bore Extension, Swathi Nilaya', '2014-02-05', 5, 'm'),
('vaishak', 'shetty', 'macc', 'macc', 8762790223, 'Ratnagiri Bore Extension, Swathi Nilaya', '1999-01-07', 20, 'm'),
('vaishak', 'shetty', 'messi', '12345', 8762790223, 'Ratnagiri Bore Extension, Swathi Nilaya', '1999-01-07', 20, 'm'),
('Vinay', 'Shetty', 'mmm', '123', 8762790223, 'Ratnagiri Bore Extension', '2009-01-06', 10, 'm'),
('shreedhar', 'Shetty', 'shree', 'shree', 8762790223, 'Ratnagiri Bore Extension, Swathi Nilaya', '2007-01-01', 12, 'm');

--
-- Triggers `registration`
--
DELIMITER $$
CREATE TRIGGER `insert_age_trigger` BEFORE INSERT ON `registration` FOR EACH ROW BEGIN
set new.age=(year(curdate()))-(year(new.birth));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `st_id` varchar(50) NOT NULL,
  `st_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`st_id`, `st_name`) VALUES
('BOM007', 'BOMBAY'),
('BYD002', 'BYADGI'),
('CKM003', 'CHIKKAMAGALURU'),
('GOA008', 'GOA'),
('KER005', 'KERALA'),
('MNG004', 'MANGALORE'),
('SBC001', 'BENGALURU'),
('TAN006', 'TAMIL NADU');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `t_id` varchar(20) NOT NULL,
  `fare` int(11) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `u_id` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`t_id`, `fare`, `p_id`, `u_id`, `date`) VALUES
('28518', 250, 'mac', 'HIDDEN', '2019-11-29'),
('3203', 250, 'NJN', 'HIDDEN', '2019-11-28'),
('33835', 125, 'HIDDEN', 'HIDDEN', '2020-10-23'),
('46253', 250, 'rod', 'HIDDEN', '2019-12-04'),
('93148', 125, 'abc', 'messi', '2019-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `tr_id` varchar(20) NOT NULL,
  `tr_nm` varchar(50) NOT NULL,
  `fst_id` varchar(20) NOT NULL,
  `tst_id` varchar(20) NOT NULL,
  `dep_time` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`tr_id`, `tr_nm`, `fst_id`, `tst_id`, `dep_time`) VALUES
('TBOM004', 'BULLET EXPRESS', 'BOM007', 'SBC001', '12am'),
('TBOM004', 'BULLET EXPRESS', 'SBC001', 'BOM007', '2pm'),
('TKER005', 'RANI EXPRESS', 'SBC001', 'KER005', '12AM'),
('TMNG002', 'GOLGUMBAZ EXPRESS', 'GOA008', 'SBC001', '10AM'),
('TMNG002', 'GOLGUMBAZ EXPRESS', 'MNG004', 'GOA008', '4PM'),
('TMNG002', 'GOLGUMBAZ EXPRESS', 'SBC001', 'GOA008', '5PM'),
('TSBC001', 'RAJATHADRI EXPRESS', 'BYD002', 'SBC001', '9PM'),
('TSBC001', 'RAJATHADRI EXPRESS', 'CKM003', 'BYD002', '3PM'),
('TSBC001', 'RAJATHADRI EXPRESS', 'SBC001', 'BYD002', '10PM');

-- --------------------------------------------------------

--
-- Table structure for table `train_status`
--

CREATE TABLE `train_status` (
  `tr_id` varchar(20) NOT NULL,
  `a_seats` int(11) NOT NULL,
  `fare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_status`
--

INSERT INTO `train_status` (`tr_id`, `a_seats`, `fare`) VALUES
('TSBC001', 32, 125),
('TMNG002', 38, 250),
('TBOM004', 38, 275),
('TKER005', 40, 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `ticket_ibfk_1` (`p_id`),
  ADD KEY `ticket_ibfk_2` (`u_id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`tr_id`,`fst_id`,`tst_id`),
  ADD KEY `fst_id` (`fst_id`),
  ADD KEY `tst_id` (`tst_id`);

--
-- Indexes for table `train_status`
--
ALTER TABLE `train_status`
  ADD PRIMARY KEY (`fare`),
  ADD KEY `train_status_ibfk_1` (`tr_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `passenger` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `train`
--
ALTER TABLE `train`
  ADD CONSTRAINT `train_ibfk_1` FOREIGN KEY (`fst_id`) REFERENCES `station` (`st_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `train_ibfk_2` FOREIGN KEY (`tst_id`) REFERENCES `station` (`st_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `train_status`
--
ALTER TABLE `train_status`
  ADD CONSTRAINT `train_status_ibfk_1` FOREIGN KEY (`tr_id`) REFERENCES `train` (`tr_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 11:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `mechanical`
--

CREATE TABLE `mechanical` (
  `mechid` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `mech_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` bigint(20) NOT NULL,
  `fees` bigint(20) NOT NULL,
  `balance` bigint(20) NOT NULL,
  `address` varchar(80) NOT NULL,
  `covered_area` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechanical`
--

INSERT INTO `mechanical` (`mechid`, `user_id`, `mech_name`, `email`, `password`, `fees`, `balance`, `address`, `covered_area`, `specialization`, `image`) VALUES
(1, 46546351, 'Hassan', 'hassan@gmail.com', 0, 100, 100, '22 street', 'Ismailia Desert Road', 'Italian Car Specialist', 'cut4-mech3.png'),
(2, 8767532542, 'ahmed', 'ahmed@gmail.com', 123, 200, 600, '56street', 'Cairo - Alexandria Desert Road', 'Chinese Car Specialist', 'cut2-mech4.png'),
(3, 7857857852, 'mohamed', 'mohamed@yahoo.com', 123, 200, 400, '56street', 'Ismailia Desert Road', 'American Car Specialist', 'cut-mech8.jpg'),
(4, 58752752, 'omar', 'omar@yahoo.com', 123, 150, 0, '23street', 'Ismailia Desert Road', ' German Car Specialist', 'cut-mech12.png'),
(5, 58757585, 'mostafa', 'mostafa@gmail.com', 123, 100, 0, '20 street', 'Suez Road', 'Korean Car Specialist', 'cut-mech7.png'),
(7, 587587278, 'adam', 'adam@yahoo.com', 123, 50, 0, '13 street', 'Cairo - Alexandria Desert Road', ' Malaysian Car Specialist', 'cut-mech14.jpg'),
(8, 471577607257, 'Yassen', 'yassen@yahoo.com', 1234, 150, 0, 'Shobra', 'Cairo - Alexandria Desert Road', ' German Car Specialist', '1615073887cut-mech 6.png'),
(9, 5875875875, 'hamza', 'hamza@gmail.com', 123, 220, 0, '9street', 'Suez Road', ' Malaysian Car Specialist', 'cut-mech9.jpg'),
(23, 393167772135, 'Mohsen', 'mohsen@gmail.com', 12345, 150, 150, 'mohndsen', 'Cairo - Alexandria Desert Road', 'Chinese Car Specialist', '1615121025Gabl El 7alal.jpg'),
(24, 916022, 'pavly ', 'pavly@yahoo.com', 1234, 0, 0, 'cairo', 'Cairo', 'Chinese Car Specialist', '1615147930Picture1.jpg'),
(25, 9223372036854775807, 'ahmed', 'ah@yahoo.com', 1, 0, 0, '1', 'Cairo - Alexandria Desert Road', 'Chinese Car Specialist', ''),
(26, 8581002341667314867, 'ahmed', 'ahmed5@yahoo.com', 123, 0, 0, '123', 'Cairo - Alexandria Desert Road', 'Italian Car Specialist', ''),
(27, 7283380295039164044, 'ahmed', 'mohamed@yahoo.com', 9999999999, 500, 0, 'cairo', 'Cairo - Alexandria Desert Road', 'Chinese Car Specialist', '1615154400Picture1.jpg'),
(28, 49882463275177299, 'Mohsen', 'mmm@gmail.com', 12345678, 500, 0, 'masr el gdida', 'Suez Road', 'Select your Specialization', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mechanical`
--
ALTER TABLE `mechanical`
  ADD PRIMARY KEY (`mechid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mechanical`
--
ALTER TABLE `mechanical`
  MODIFY `mechid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

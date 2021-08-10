-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 09:39 PM
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
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `CID` int(11) NOT NULL,
  `seller_name` varchar(100) NOT NULL,
  `seller_phone` bigint(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `km` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`CID`, `seller_name`, `seller_phone`, `type`, `description`, `amount`, `price`, `color`, `status`, `km`, `brand`, `model`, `image`) VALUES
(1, 'merna', 1052562541, '4x4', 'engine is 4461 cc, have 7 seats and 5 doors, it have 4 cylinders and it\'s top speed 175 km/h', '1', '$500,000', 'Black', 'used', '50,000', 'Toyota', 'Prado', 'shop2.png'),
(2, 'hana', 1254120123, 'Sedan', 'Model 2017, it have 5 seats with 4 doors, it\'s engine capacity 1,595cc with a 130Mph top speed', '1', '600,000', 'Red', 'used', '200,000', 'Mercedes', 'CLA 180', 'shop3 .png'),
(3, 'maya', 1222547896, 'Sedan', 'It have 4 seats with 2 doors, the engine capacity is 1968 cc with 235 km/h top speed', '1', '$400,000', 'White', 'used ', '100,000', 'Audi ', 'A5', 'shop12.png'),
(4, 'bob1', 1021236526, '4x4', 'It has 4 doors with 7 seats , and it has 2199 cc engine capacity with 185 km/h top speed', '1', '$550,000', 'Grey', 'used', '140,000', 'Hyundai', 'Santa Fe', 'shop5 .png'),
(27, 'Roby', 111, 'Octavia', '', '1', '200000', 'Black', '2nd Hand', '100000', 'Skoda', '2030', '1615122781Gabl El 7alal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `balance` bigint(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `car_model` varchar(20) NOT NULL,
  `brand_car` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `user_id`, `name`, `email`, `password`, `balance`, `phone`, `address`, `car_model`, `brand_car`, `gender`) VALUES
(1, 541245, 'merna', 'marna@yahoo.com', '123', 10000, 1052562541, '19 street', '2020', 'BMW', 'Female'),
(2, 1254512, 'hana', 'hana@yahoo.com', '123', 4000, 1254120123, '19 street', '2020', 'BMW', 'Male'),
(3, 484564, 'hana', 'hana@yahoo.com', '123', 2500, 1125321478, '19 street', '2020', 'BMW', 'Male'),
(4, 4645156, 'Mohamed', 'mo@yahoo.com', '123', 2800, 1247852014, '19 street', '2020', 'BMW', 'Male'),
(5, 594556132, 'hana', 'hana@gmail.com', '123', 300, 1023658475, '66 street', '2018', 'BMW', 'Female'),
(6, 6454651, 'seif', 'seif@gmail.com', '123', 4500, 1025324585, '37 street', '2017', 'BMW', 'Male'),
(7, 54465456, 'ahmed', 'ahmed@gmail.com', '123', 5000, 1232521014, '66 street', '2020', 'BMW', 'Male'),
(8, 546545, 'yasser', 'yasser@yahoo.com', '123', 6000, 1232520222, '66 street', '2017', 'volvo', 'Male'),
(9, 5456465, 'yassmin', 'yassmin@yahoo.com', '123', 2400, 1025698452, '19 street', '2020', 'volvo', 'Female'),
(10, 464564, 'adam', 'adam@yahoo.com', '123', 2800, 1023522236, '66 street', '2017', 'volvo', 'Male'),
(11, 464645, 'maya', 'maya@gmail.com', '123', 2900, 1222547896, '37 street', '2017', 'volvo', 'Female'),
(12, 445646, 'bob3', 'bob3@gmail.com', '123', 7000, 1236524521, '95 street', '2018', 'toyota', 'Male'),
(13, 909246, 'bob1', 'bob1@gmail.com', '123', 12100, 1021236526, '55 street', '2015', 'toyota', 'Female'),
(15, 28075435353124315, 'bob2', 'bob2@gmail.com', '123', 6500, 1025632145, '56 street, nasr city', '2014', 'fiat', 'Male'),
(16, 995175353308647, 'Pavly Maged', 'pavlymaged6696@gmail.com', 'MeSsi{655)', 9650, 1288996784, '8 st 6 taqsim el nasr lel siarat - Hadayek Helwan', '2003', 'Opel Vectra', 'Male');

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
(8, 471577607257, 'Yassen', 'yassen@yahoo.com', 1234, 150, 300, 'Shobra', 'Cairo - Alexandria Desert Road', ' German Car Specialist', '1615073887cut-mech 6.png'),
(9, 5875875875, 'hamza', 'hamza@gmail.com', 123, 220, 0, '9street', 'Suez Road', ' Malaysian Car Specialist', 'cut-mech9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mech_orders`
--

CREATE TABLE `mech_orders` (
  `id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_phone` bigint(20) NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `mech_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mech_orders`
--

INSERT INTO `mech_orders` (`id`, `user_name`, `user_phone`, `description`, `mech_name`) VALUES
(2, 'bob1', 1021236526, 'this is the state that i have', 'mohamed'),
(3, 'bob1', 1021236526, 'another bad state of mine', 'omar'),
(4, 'bob1', 1021236526, 'you have to see this desc', 'ahmed'),
(5, 'bob1', 1021236526, 'i need help from you now', 'ahmed'),
(6, 'bob1', 1021236526, 'i need mechanic now', 'ahmed'),
(7, 'bob1', 1021236526, 'my car is stuck and i need help', 'hassan'),
(8, 'bob1', 1021236526, 'i need help from you now', 'mohamed'),
(9, 'bob1', 1021236526, 'i need mechanical to help me out please', 'mohamed'),
(11, 'Pavly Maged', 1288996784, 'عندي مشكلة في الحرارة', 'ahmed'),
(13, 'Yousef', 1290203040, 'عندي مشكلة في عداد السرعة', 'Yassen');

-- --------------------------------------------------------

--
-- Table structure for table `rescue_winch`
--

CREATE TABLE `rescue_winch` (
  `RWID` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `Wname` varchar(50) NOT NULL,
  `Wemail` varchar(80) NOT NULL,
  `Wpassword` bigint(20) NOT NULL,
  `Wfees` bigint(20) NOT NULL,
  `Wbalance` bigint(20) NOT NULL,
  `Waddress` varchar(50) NOT NULL,
  `Wcovered_area` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rescue_winch`
--

INSERT INTO `rescue_winch` (`RWID`, `user_id`, `Wname`, `Wemail`, `Wpassword`, `Wfees`, `Wbalance`, `Waddress`, `Wcovered_area`, `image`) VALUES
(1, 5412456, 'ahmed', 'ahmed@yahoo.com', 123, 400, 0, '12street', 'Suez Road', 'winch1.jpg'),
(2, 47894561561, 'nader', 'nader@yahoo.com', 123, 500, 1500, '12street', 'Cairo - Alexandria Desert Road', 'winch2.png'),
(3, 564215645, 'salah', 'salah@gmail.com', 123, 400, 400, 'street 9', 'Suez Road', 'winch3.jpg'),
(4, 448512184, 'mohamed', 'mohamed@gmail.com', 123, 800, 0, 'street', 'Cairo - Alexandria Desert Road', 'winch4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts`
--

CREATE TABLE `spare_parts` (
  `spid` int(11) NOT NULL,
  `seller_name` varchar(100) NOT NULL,
  `seller_phone` bigint(20) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spare_parts`
--

INSERT INTO `spare_parts` (`spid`, `seller_name`, `seller_phone`, `amount`, `status`, `description`, `price`, `brand`, `model`, `image`) VALUES
(1, 'Mohamed', 1247852014, '1', 'used', 'Battery', '$500', 'varta', '2020', 'battery.png'),
(2, 'seif', 1025324585, '1', 'New', 'Filter', '200L.E', 'varta', '2020', 'filter.png'),
(3, 'ahmed', 1232521014, '1', 'New', 'Engine', '1000L.E', 'varta', '2019', 'engine.png'),
(4, 'yasser', 1232520222, '1', 'New', 'Tiers', '250L.E', 'BMW', '2020', 'tiers.png');

-- --------------------------------------------------------

--
-- Table structure for table `winch_orders`
--

CREATE TABLE `winch_orders` (
  `id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_phone` bigint(20) NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `winch_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `winch_orders`
--

INSERT INTO `winch_orders` (`id`, `user_name`, `user_phone`, `description`, `winch_name`) VALUES
(1, 'bob1', 1021236526, 'i need winch here', 'ahmed'),
(2, 'bob1', 1021236526, 'help me and come with winch to my car', 'salah'),
(3, 'bob1', 1021236526, 'i\'m stuck and need winch to pick me up', 'mohamed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `mechanical`
--
ALTER TABLE `mechanical`
  ADD PRIMARY KEY (`mechid`);

--
-- Indexes for table `mech_orders`
--
ALTER TABLE `mech_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rescue_winch`
--
ALTER TABLE `rescue_winch`
  ADD PRIMARY KEY (`RWID`);

--
-- Indexes for table `spare_parts`
--
ALTER TABLE `spare_parts`
  ADD PRIMARY KEY (`spid`);

--
-- Indexes for table `winch_orders`
--
ALTER TABLE `winch_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mechanical`
--
ALTER TABLE `mechanical`
  MODIFY `mechid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `mech_orders`
--
ALTER TABLE `mech_orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rescue_winch`
--
ALTER TABLE `rescue_winch`
  MODIFY `RWID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `spare_parts`
--
ALTER TABLE `spare_parts`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `winch_orders`
--
ALTER TABLE `winch_orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 02:41 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(169, 'aish', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bed_types`
--

CREATE TABLE `bed_types` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `bed_type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `last_update` datetime NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `vacant_beds` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bed_types`
--

INSERT INTO `bed_types` (`id`, `categories_id`, `bed_type`, `price`, `last_update`, `description`, `status`, `vacant_beds`) VALUES
(100, 101, 'Covid-19 Beds', '2000', '2021-08-19 15:14:38', '*24hrs nursing\r\n*good quality food', 1, '2678'),
(101, 101, 'Covid-19 Oxygen Beds', '3000', '2021-08-21 14:22:17', '*oxygen supply\r\n*24hrs nursing\r\n*good quality food', 1, '1434'),
(102, 101, 'Covid-19 ICU Beds', '3500', '2021-08-21 14:30:56', '*ICU bed\r\n*24hrs nursing\r\n*good quality food', 1, '1277'),
(103, 101, 'Covid-19 ICU Beds with Ventilators', '4500', '2021-08-21 14:30:56', '*ICU bed\r\n*ventilators\r\n*24hrs nursing\r\n*good quality food', 1, '1596');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `address`, `phone`, `status`) VALUES
(100, 'Apollo Gleneagles Hospitals\r\n', ' 58, Canal Circular Rd, Kadapara, Phool Bagan, Kankurgachi, Kolkata, West Bengal 700054', ' 033 2320 3040', 1),
(101, 'AMRI HOSPITAL, SALT LAKE', '17,Lane, Central Park Road,Stadium Entrance Road,, 16, Broadway Rd, opposite salt lake, JC Block, Sector III, Bidhannagar, Kolkata, West Bengal 700098', '033 6606 3800', 1),
(102, 'Horizon Life Line Private Limited', ' P- 34, CIT Rd, Park Circus, Entally, Kolkata, West Bengal 700014', '+91 7596067200', 1),
(103, 'New Mayfair Hospital Private Limited ', '12/A N C MITRA ROAD BL-A; GR-FR; FL-1/A KOLKATA-700028 KOLKATA Kolkata WB 700028 IN', ' 098361 93420', 1),
(104, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017', ' 098361 93420', 1),
(105, 'NH Rabindranath Tagore International Institute Of Cardiac Science,', 'Premises No: 1489, Mukundapur Main Road, 124, Eastern Metropolitan Bypass, Mukundapur, Kolkata, West Bengal 700099', '+91 9903 335544', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `Patient Id` int(11) DEFAULT NULL,
  `Patient Name` varchar(255) NOT NULL,
  `Patient Age` int(11) NOT NULL,
  `Patient Phone No` int(10) NOT NULL,
  `Patient Relative Phone no` int(10) NOT NULL,
  `Patient Gender` varchar(255) NOT NULL,
  `Patient Blood Group` text NOT NULL,
  `Patient Heart Rate (beats per minute, or BPM)` int(11) NOT NULL,
  `SPO2 (percentage or,%)` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed_types`
--
ALTER TABLE `bed_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bed_types`
--
ALTER TABLE `bed_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

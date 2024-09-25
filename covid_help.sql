-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 08:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_help`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `role` varchar(20) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `status`, `role`) VALUES
(1, 'Admin', 'admin@admin.com', '1234', '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `id` int(11) NOT NULL,
  `ambulance_type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(5) NOT NULL,
  `pickup_address` varchar(255) NOT NULL,
  `drop_address` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `amount` int(10) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`id`, `ambulance_type`, `name`, `contact`, `email`, `age`, `pickup_address`, `drop_address`, `date`, `amount`, `transaction_id`, `session`, `status`) VALUES
(2, 'BLS', 'Rimi', '7894333', '', 890, '290/3, Purba Sinthi Road, Dum Dum', 'Kolkata 700030', '2021-08-29 19:46:22', 0, '', '', ''),
(3, 'PTS', 'Dubey', '1234567', '', 101, '290/3, Purba Sinthi Road, Dum Dum\r\nKolkata 700030', '290/3, Purba Sinthi Road, Dum Dum\r\nKolkata 700030', '2021-08-29 19:46:22', 0, '', '', ''),
(4, 'PTS', 'Anushree Chakraborty', '2147483647', 'canushree18@gmail.com', 22, '290/3, Purba Sinthi Road, Dum Dum', 'Kolkata 700030', '2021-09-06 01:39:30', 500, '8810b43985caf58c6080', 't3opmjartq9utp8ktk2h5895in', 'paid'),
(5, 'BLS', 'Anushree Chakraborty', '2147483647', 'canushree18@gmail.com', 22, '290/3, Purba Sinthi Road, Dum Dum', 'Kolkata 700030', '2021-09-06 01:50:01', 500, '8810b43985caf58c6080', 't3opmjartq9utp8ktk2h5895in', 'paid');

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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'Esa Jha', 'esa@esa.com', 'Type your Message..', '2021-08-29 16:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `grocery`
--

CREATE TABLE `grocery` (
  `g_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `g_name` varchar(30) NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grocery`
--

INSERT INTO `grocery` (`g_id`, `c_id`, `g_name`, `price`, `image`) VALUES
(1, 1, 'Pearl millet(Bajra)', 45, '6b6c1514206e2cd7d01d5a1f43a26e84.jpg'),
(2, 1, 'Rice', 170, '1802163c5273912137c0c3619053a8d0.jpg'),
(3, 1, 'Wheat', 20, '9350b4bf294e3f97f967750b6776f17a.jpg'),
(4, 1, 'Sorghum(Jowar)', 30, '5b03dd019bd5dd9e323fa0d3ecd2d8b1.jpg'),
(5, 1, 'Barley', 50, 'df551588907b6ee59f187961404203c6.jpg'),
(6, 1, 'Red gram(Arhar)', 70, '3d5dfafed03d185e6e055a5781ed6f74.jpg'),
(7, 1, 'Chickpeas(Brown)', 60, 'e04cf0e2b8cf243c279161232e7b0ac8.jpg'),
(8, 1, 'Broken wheat(Dalia)', 70, '292084a488c9d80c002c37ddbdec603a.jpg'),
(9, 1, 'Red lentils(Masoor)', 70, '6da996d4e0c6b932883cd2ff82d1e1e9.jpg'),
(10, 1, 'Green gram(Moong)', 60, '58614abf822b04c4db41c4fe02f9200f.jpg'),
(11, 1, 'Kidney beans(Rajma)', 80, '592f0713da56c5e31b46fbfdadac71db.jpg'),
(12, 2, 'Poultry egg', 50, 'fc2a4ff016c5a1499ad9ee38103002d1.jpg'),
(13, 2, 'Chicken(Skinless)', 160, '538b5f623b02c8e8e95df3fe45e34398.png'),
(14, 2, 'Oats', 70, '667f086ee49bd4a906bfb77d697c7104.jpg'),
(15, 2, 'Cottage cheese', 180, '8bca3e618098ef74ce7e8a98c441fc1c.jpg'),
(16, 2, 'Tuna fish', 140, 'af5bc674a9d5551982e5893ab05660d5.jpg'),
(17, 2, 'Whole wheat pasta', 60, 'ff09e11db0a41d62c1e8efa208161081.jpg'),
(18, 2, 'Whole wheat bread', 35, '485aab145d5e7e7fe6f0cfdb25905458.jpg'),
(19, 3, 'Green Spinach', 20, '14c89eac2087b0ad0f0aaf7ce09157e4.jpg'),
(20, 3, 'Fresh green Broccoli', 30, '32a78f9b42d172a86118cc03fc619ab2.jpg'),
(21, 3, 'Fresh green Peas', 15, '74e3a64dc8518d68f95264fc8eaae4a0.jpg'),
(22, 3, 'Potatoes', 25, 'e2dfc7c8894e520547c5bf4cf0f73528.jpg'),
(23, 3, 'Sweet Potatoes', 30, '48f753d6a207771b787ef0d556af85d4.jpg'),
(24, 3, 'Beetroots', 15, '44acf451f272981addf8df5b43285932.jpg'),
(25, 3, 'Fresh Carrots', 25, '05941029bfa559073ee3070225cbc6e1.jpg'),
(26, 3, 'Fresh Tomatoes', 15, '50f1a69a762ba704807495b70017089a.jpg'),
(27, 3, 'Fresh Onions', 20, '89775fb1ea83fb572bff7de6824c7871.jpg'),
(28, 3, 'Fresh Garlics', 25, '51e772892dbe082b46f7c6dee68d7b28.jpg'),
(29, 3, 'Green Cabbage', 15, '0071fd3e9f5c6a4e4b5aca914a18a8b4.jpg'),
(30, 3, 'Fresh White Cauliflower', 20, 'c0d399e8e3dc0c9f5dedd7f257077ed6.jpg'),
(31, 4, 'Fresh Lemons', 30, '2155415a65b74975802608d7ece95f65.jpg'),
(32, 4, 'Orange', 25, 'f3f16ca8c3086b8536a46a40274988c8.png'),
(33, 4, 'Fresh Lime', 15, '14b8aa5547a698ca14823db3323d59c9.jpg'),
(34, 4, 'Fresh Red Strawberries', 80, 'c72a8834ae11c257dfe6ed6d142f6104.jpg'),
(35, 4, 'Fresh White Grapes', 35, '7295e9483b79aa8b0ba378c655aa18d7.jpg'),
(36, 4, 'Fresh Red Apples', 140, 'ed1b4666ab7053b07aa28f954dc9b836.jpg'),
(37, 4, 'Avocado', 120, '4988e877989df6b6bae6dbeb3d3c92de.jpg'),
(38, 4, 'Yellow Banana', 60, '9a16bf0cd761f1f04c216a3272a61ac9.jpg'),
(39, 4, 'Pineapple', 90, '7beb9ebb10fd2c0666ddf85ed299ee42.jpg'),
(40, 4, 'Green Guava', 80, '8c9422cb7463d00fd86647235b22b723.jpg'),
(41, 4, 'Pomegranate', 110, '1d4ae7048a4cc4efa0e19b42ebdbda08.jpg'),
(42, 5, 'Almonds', 500, '0c2bc351d684d991bf04568b7407ca82.jpg'),
(43, 5, 'Cashews', 450, '15729220001eb749193652541078ded6.jpg'),
(44, 5, 'Raisins', 350, 'a91bede342ad48adc7d290693a65dbe7.jpg'),
(45, 5, 'Dates', 400, '3c3460750b9c3288ecf64f2577c0c7da.jpg'),
(46, 5, 'Walnuts', 500, 'd11e17b331677b1d2bf4dc32e1dfc9df.jpg'),
(47, 5, 'Pistachios', 650, 'da9c7074374d851f64dc35b7c39251df.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `grocery_category`
--

CREATE TABLE `grocery_category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grocery_category`
--

INSERT INTO `grocery_category` (`c_id`, `c_name`, `status`) VALUES
(1, 'Cereals & Pulses', '1'),
(2, 'High Protein Foods', '1'),
(3, 'Vegetables', '1'),
(4, 'Fruits', '1'),
(5, 'Dry Fruits & Nuts', '1');

-- --------------------------------------------------------

--
-- Table structure for table `healthy_meal`
--

CREATE TABLE `healthy_meal` (
  `hm_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `hm_name` varchar(50) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `healthy_meal`
--

INSERT INTO `healthy_meal` (`hm_id`, `c_id`, `hm_name`, `descrip`, `price`, `image`) VALUES
(1, 1, 'Roti & Veg Curry', '3 rotis, mixed veg curry', 30, 'd2242e846e12a717ed424caab7be3909.jpg'),
(2, 1, 'Roti & Paneer', '3 rotis, paneer curry', 35, '672214435bfd00419d1102cd18c02bcc.jpg'),
(3, 1, 'Rice & Veg Curry', '1 plate rice, mixed veg curry', 32, 'dbb68732bd82a7cecb79a307143089af.jpg'),
(4, 1, 'Rice & Paneer', '1 plate rice, paneer curry', 37, 'ac4bcf3ada83c547d631101f5a444509.jpg'),
(5, 2, 'Roti & Chicken', '3 rotis, chicken curry(4 pieces)', 50, '4d54168356710a5780b3503f1011e9fc.jpg'),
(6, 2, 'Roti & Egg', '3 rotis, egg curry(2 pieces)', 30, '403dcce17ea1e123aa67c711f9f8429c.jpg'),
(7, 2, 'Rice & Chicken', '1 plate rice, chicken curry(4 pieces)', 55, '760f6fc4aa7defc5b24a64cb60565d31.jpg'),
(8, 2, 'Rice & Fish', '1 plate rice, fish curry(2 pieces)', 60, '820e8d1e247c72053160f6669837695f.jpg'),
(9, 2, 'Rice & Egg', '1 plate rice, egg curry(2 pieces)', 40, '19208ced78f9ff749162605c44493454.jpg'),
(10, 3, 'Thick Tomato Soup', '', 40, '65f595bbce739ee0091ffd87d83c2b27.jpg'),
(11, 3, 'Hot & Sour Chicken Soup', '', 50, '198f0515bc43abf7c3ffb63af62c2378.jpg'),
(12, 3, 'Mixed Veg Soup', '', 40, 'bf08185aeeef8ba6f0acdc7d262ab865.jpg'),
(13, 3, 'Sweet Corn Soup', '', 35, '2704058bdc093b14851206aaa4d17f1e.jpg'),
(14, 3, 'Mixed Fruit Juice', '', 45, '00c7b74b7ad4069126951e0c85c201cd.jpg'),
(15, 3, 'Apple Juice', '', 45, '1e5b6c9e41ae1cf972ef532531c047bd.jpg'),
(16, 3, 'Lemon Juice', '', 45, 'a13b00754b7213f30566b51b72a615f6.jpg'),
(17, 3, 'Orange Juice', '', 45, '296b11d2880485aef9e43e4307ffd7a4.jpg'),
(18, 3, 'Grape Juice', '', 45, 'd8ea11ce04294e76739961f203a7a631.jpg'),
(19, 3, 'Pineapple Juice', '', 45, '7a5be9bbe1c5a814f89012a703f3fc3c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `categories`, `address`, `phone`, `status`) VALUES
(100, 'Apollo Gleneagles Hospitals\r\n', ' 58, Canal Circular Rd, Kadapara, Phool Bagan, Kankurgachi, Kolkata, West Bengal 700054', ' 033 2320 3040', 1),
(101, 'AMRI HOSPITAL, SALT LAKE', '17,Lane, Central Park Road,Stadium Entrance Road,, 16, Broadway Rd, opposite salt lake, JC Block, Sector III, Bidhannagar, Kolkata, West Bengal 700098', '033 6606 3800', 1),
(102, 'Horizon Life Line Private Limited', ' P- 34, CIT Rd, Park Circus, Entally, Kolkata, West Bengal 700014', '+91 7596067200', 1),
(103, 'New Mayfair Hospital Private Limited ', '12/A N C MITRA ROAD BL-A; GR-FR; FL-1/A KOLKATA-700028 KOLKATA Kolkata WB 700028 IN', ' 098361 93420', 1),
(104, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017', ' 098361 93420', 1),
(105, 'NH Rabindranath Tagore International Institute Of Cardiac Science,', 'Premises No: 1489, Mukundapur Main Road, 124, Eastern Metropolitan Bypass, Mukundapur, Kolkata, West Bengal 700099', '+91 9903 335544', 1);

-- --------------------------------------------------------

--
-- Table structure for table `masks`
--

CREATE TABLE `masks` (
  `m_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meal_category`
--

CREATE TABLE `meal_category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal_category`
--

INSERT INTO `meal_category` (`c_id`, `c_name`, `status`) VALUES
(1, 'Veg Platter', '1'),
(2, 'Non-veg Platter', '1'),
(3, 'Canned Food', '1');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `med_id` int(11) NOT NULL,
  `symptom_id` int(11) NOT NULL,
  `med_name` varchar(30) NOT NULL,
  `descrip` varchar(50) NOT NULL,
  `price` int(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`med_id`, `symptom_id`, `med_name`, `descrip`, `price`, `image`) VALUES
(1, 1, 'Dolo 650mg Strip of 15 Tablets', '15 Tablet(s) in Strip', 25, '2da1b869a52f3793ce29f4a36850cb69.jpg'),
(2, 1, 'Paracetamol 650mg Tablet 15', '15 Tablet(s) in Strip', 30, '17b04cf226d368b89ba58949c0c6220d.jpg'),
(3, 1, 'Crocin 650mg Advance Tablet 15', '15 Tablet(s) in Strip', 25, '61efd7d5dfe0a72b05f469327015daaa.jpg'),
(4, 1, 'Calpol 650mg Strip of 15 Table', '15 Tablet(s) in Strip', 26, 'f99f8e5bd1a884765f3554273ddc1023.JPG'),
(5, 2, 'Paracip 500mg Tablet', '10 Tablet(s) in Strip', 12, 'd587705c906d861357109351f0550ce1.png'),
(6, 2, 'Alchemlife Phytorelief', 'Pack of 1 for Cold', 30, '7b0e40faa96041aa12e70c30f91941ef.png'),
(8, 2, 'Becosules Z Capsule', '1mg Capsule Strip', 30, 'd8248b463e89e43fe5ad1ca9b3f2ba97.png'),
(9, 2, 'Cetzine Tablet 10S', '10 Tablet(s) in Strip', 18, 'cfe18e1bf49dc8ebcc7b5cd5c705c058.png'),
(10, 3, 'Loperamide (Imodium) Caplet', '4 Caplet(s) in 2 Strips', 32, 'c70562c2dd4040b8ad78b3c950a3c582.jpg'),
(11, 3, 'Pepto Bismol', '24 Caplets ', 28, 'baa8a0ffd38c6b5a8c93030ea5a968e6.png');

-- --------------------------------------------------------

--
-- Table structure for table `order_final`
--

CREATE TABLE `order_final` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_final`
--

INSERT INTO `order_final` (`id`, `item_id`, `table_id`, `qty`, `session`) VALUES
(1, 1, 2, 4, 't3opmjartq9utp8ktk2h5895in'),
(2, 3, 2, 3, 't3opmjartq9utp8ktk2h5895in'),
(3, 7, 2, 1, 't3opmjartq9utp8ktk2h5895in'),
(4, 1, 1, 2, 't3opmjartq9utp8ktk2h5895in'),
(5, 2, 3, 2, 't3opmjartq9utp8ktk2h5895in');

-- --------------------------------------------------------

--
-- Table structure for table `order_invoice`
--

CREATE TABLE `order_invoice` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `amount` int(20) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_invoice`
--

INSERT INTO `order_invoice` (`id`, `name`, `address`, `email`, `phone`, `amount`, `transaction_id`, `session`, `status`, `date`) VALUES
(1, 'Anushree Chakraborty', '290/3, Purba Sinthi Road, Dum Dum\r\nKolkata 700030', 'canushree18@gmail.com', '9163602776', 420, '77c66070b010b6c20ddf', 't3opmjartq9utp8ktk2h5895in', 'paid', '2021-09-07 17:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `order_session`
--

CREATE TABLE `order_session` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_session`
--

INSERT INTO `order_session` (`id`, `item_id`, `table_id`, `qty`, `session`) VALUES
(8, 1, 1, 1, 't3opmjartq9utp8ktk2h5895in');

-- --------------------------------------------------------

--
-- Table structure for table `oxygen`
--

CREATE TABLE `oxygen` (
  `id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `PhoneNo` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Cylinder` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `amount` int(10) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oxygen`
--

INSERT INTO `oxygen` (`id`, `Name`, `Age`, `PhoneNo`, `email`, `Address`, `Type`, `Cylinder`, `date`, `amount`, `transaction_id`, `session`, `status`) VALUES
(1, 'Trina Banerjee', 22, '9830051431', '', 'Newtown', '46.7_Litres_Steel', 3, '2021-08-29 19:48:23', 0, '', '', ''),
(2, 'Anushree Chakraborty', 22, '1000', '', 'Dum Duum', '4.5_Litres_Almunium', 21, '2021-08-29 19:48:23', 0, '', '', ''),
(3, 'Aishwarya Ghosh', 22, '456789222', '', 'Dum Dum', '10.2_Litres_Mild_Steel', 15, '2021-08-29 19:48:23', 0, '', '', ''),
(4, 'Aishwarya Ghosh', 22, '456789222', '', 'Dum Dum', '10.2_Litres_Mild_Steel', 15, '2021-08-29 19:48:23', 0, '', '', ''),
(5, 'Anushree Chakraborty', 22, '9163602776', 'canushree18@gmail.com', '290/3, Purba Sinthi Road, Dum Dum\r\nKolkata 700030', '4.5_Litres_Almunium', 5, '2021-09-06 02:24:07', 500, 'e635a5c12058e169a58d', 't3opmjartq9utp8ktk2h5895in', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL,
  `hospital_id` int(10) NOT NULL,
  `bed_type_id` int(10) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_phone_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `patient_relative_phone_no` varchar(10) NOT NULL,
  `patient_gender` varchar(255) NOT NULL,
  `patient_blood_group` text NOT NULL,
  `patient_heart_rate` varchar(20) NOT NULL,
  `spo2` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `amount` int(10) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `hospital_id`, `bed_type_id`, `patient_name`, `patient_age`, `patient_phone_no`, `email`, `patient_relative_phone_no`, `patient_gender`, `patient_blood_group`, `patient_heart_rate`, `spo2`, `date`, `amount`, `transaction_id`, `session`, `status`) VALUES
(1, 100, 101, 'Aishwarya Ghosh', 76, '2147483647', '', '2147483647', 'Female', 'B+', '70 - 98 bpm', '>=90%', '2021-08-29 19:49:08', 0, '', '', ''),
(2, 101, 101, 'Debangana Banerjee', 87, '2147483647', '', '2147483647', 'Female', 'A+', '85 - 119 bpm', '>=70%', '2021-08-29 19:49:08', 0, '', '', ''),
(3, 101, 101, 'Rahul Das', 99, '2147483647', '', '2147483647', 'Male', 'B-', '75 - 105 bpm', '>=90%', '2021-08-29 19:49:08', 0, '', '', ''),
(4, 100, 101, 'Anushree Chakraborty', 22, '9163602776', 'canushree18@gmail.com', '7888900012', 'Female', 'B+', '80 - 112 bpm', '91-95%', '2021-09-06 03:18:58', 500, 'd085036fac056e3d125a', 't3opmjartq9utp8ktk2h5895in', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `symptom`
--

CREATE TABLE `symptom` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `symptom`
--

INSERT INTO `symptom` (`id`, `name`, `status`) VALUES
(1, 'Fever', '1'),
(2, 'Sore Throat', '1'),
(3, 'Diarrhoea', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`) VALUES
(1, 'medicine'),
(2, 'grocery'),
(3, 'healthy_meal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ambulance`
--
ALTER TABLE `ambulance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed_types`
--
ALTER TABLE `bed_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grocery`
--
ALTER TABLE `grocery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `grocery_category`
--
ALTER TABLE `grocery_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `healthy_meal`
--
ALTER TABLE `healthy_meal`
  ADD PRIMARY KEY (`hm_id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masks`
--
ALTER TABLE `masks`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `meal_category`
--
ALTER TABLE `meal_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `order_final`
--
ALTER TABLE `order_final`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_invoice`
--
ALTER TABLE `order_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_session`
--
ALTER TABLE `order_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oxygen`
--
ALTER TABLE `oxygen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `symptom`
--
ALTER TABLE `symptom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ambulance`
--
ALTER TABLE `ambulance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bed_types`
--
ALTER TABLE `bed_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grocery`
--
ALTER TABLE `grocery`
  MODIFY `g_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `grocery_category`
--
ALTER TABLE `grocery_category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `healthy_meal`
--
ALTER TABLE `healthy_meal`
  MODIFY `hm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `masks`
--
ALTER TABLE `masks`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meal_category`
--
ALTER TABLE `meal_category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `med_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_final`
--
ALTER TABLE `order_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_invoice`
--
ALTER TABLE `order_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_session`
--
ALTER TABLE `order_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `oxygen`
--
ALTER TABLE `oxygen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `symptom`
--
ALTER TABLE `symptom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

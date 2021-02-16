-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 04:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `id` int(11) NOT NULL,
  `productname` varchar(60) NOT NULL,
  `productnumber` bigint(20) NOT NULL,
  `gstcode` varchar(90) NOT NULL,
  `dateandtime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abc`
--

INSERT INTO `abc` (`id`, `productname`, `productnumber`, `gstcode`, `dateandtime`) VALUES
(61, 'harsh', 7667, 'itfyfy', '2020-01-21 21:45:11'),
(75, 'sfdjbhdfb', 7968, 'jgvgh', '2020-01-22 13:43:27'),
(76, 'sdfbhj', 86587, 'gvgh', '2020-01-22 13:43:48'),
(77, 'sdfbhj', 86587, 'gvgh', '2020-01-22 13:43:51'),
(78, 'sdfbhj', 86587, 'gvgh', '2020-01-22 13:43:51'),
(79, 'sdfbhj', 86587, 'gvgh', '2020-01-22 13:43:51'),
(81, 'sddfbh', 8697, 'ugg', '2020-01-22 13:45:01'),
(82, 'sdf', 78698, 'kjhv', '2020-01-22 13:46:23'),
(84, 'sdf', 78698, 'kjhv', '2020-01-22 13:46:24'),
(85, 'sdf', 78698, 'kjhv', '2020-01-22 13:46:24'),
(86, 'sdf', 78698, 'kjhv', '2020-01-22 13:46:24'),
(87, 'sdf', 78698, 'kjhv', '2020-01-22 13:46:24'),
(88, 'sdf', 78698, 'kjhv', '2020-01-22 13:46:24'),
(94, 'sdfsdfsd', 5765, 'yfv', '2020-01-23 21:44:35'),
(98, 'sdfg', 5557757555557, 'ufg', '2020-01-25 11:29:27'),
(101, 'sdciuiu', 869, 'iygiyg', '2020-02-06 21:10:59'),
(102, 'dsfjhiu', 55, 'guygy', '2020-02-06 21:11:46'),
(103, 'sdfsdg', 998, 'igi', '2020-02-13 17:56:14'),
(104, 'serhui', 65, 'jghggjh', '2020-02-14 10:51:02'),
(105, 'serhui', 65767868, 'jghggjh', '2020-02-14 10:51:02'),
(106, 'sdfhjb', 66967, 'yfyt', '2020-02-14 10:51:13'),
(107, 'sdgjhs', 0, 'ihwif', '2020-02-23 11:29:19'),
(109, 'sfkbsdk', 8789, 'jhvj', '2020-02-23 11:53:50'),
(110, 'sdfhb', 7698, 'ugvuk', '2020-02-23 11:54:42'),
(111, 'sdfhb', 7698, 'ugvuk', '2020-02-23 11:54:43'),
(112, 'sdfhb', 7698, 'ugvuk', '2020-02-23 11:54:43'),
(113, 'sdfhb', 7698, 'ugvuk', '2020-02-23 11:54:43'),
(114, 'sdfhb', 7698, 'ugvuk', '2020-02-23 11:54:43'),
(115, 'sdb', 878, 'ug', '2020-02-23 11:55:00'),
(116, 'sdfkjkb', 869, 'uvguj', '2020-02-23 11:55:56'),
(117, 'sdfkjkb', 869, 'uvguj', '2020-02-23 11:55:57'),
(118, 'sdfkjkb', 869, 'uvguj', '2020-02-23 11:55:57'),
(119, 'sdfjh', 66967, 'uyg', '2020-02-23 11:56:08'),
(122, 'sudgfuygduf', 596598, 'ugu', '2020-02-23 11:59:06'),
(124, 'dkjbsdlk', 776897, 'igh', '2020-02-23 12:00:05'),
(125, 'sdkb', 87687, 'igi', '2020-02-23 12:00:24'),
(127, 'sdfkjb', 87689, 'ig', '2020-02-23 12:01:29'),
(130, 'hcy', 3367, 'yres', '2020-02-23 14:33:20'),
(131, 'fhdf', 346, 'erh', '2020-02-23 19:21:08'),
(133, 'tftdtt', 4373, 'dyd', '2020-02-24 18:26:37'),
(135, 'sdfhb', 78, 'jh', '2020-03-08 12:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `admin` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_id` int(11) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `admin`, `password`, `role_id`, `admin_status`) VALUES
(1, 'aman', 'aman', 18, 0);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area` varchar(60) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `city_id`, `area`, `pincode`) VALUES
(1, 7, 'km', 456),
(3, 15, 'sdg', 346),
(4, 12, 'sg', 346),
(5, 20, 'zsdfbhjl', 65759),
(6, 15, 'zddfhdf', 4534),
(9, 19, 'sdfgi', 7326478),
(10, 19, 'sfsduh', 23),
(11, 15, 'fsdfsd', 213),
(12, 7, 'sdfsd', 385001),
(13, 18, 'xbgcv', 435),
(14, 19, 'sdfsdfsdf', 324),
(15, 12, 'asdfds', 324),
(16, 15, 'AHmedabad', 385001);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(60) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`, `image`, `description`) VALUES
(15, 't-shirt', 'assets/uploads/sg.png', 'sdfsd'),
(25, 'shirt', 'assets/uploads/sg.png', 'hkbsd');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `cityname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `cityname`) VALUES
(1, 'ahmedabad'),
(2, 'palanpur'),
(3, 'bhavnager'),
(4, 'asdf'),
(5, 'dskjb'),
(6, 'bhavnager'),
(7, 'vadodra'),
(12, 'bopal'),
(14, 'palanpur'),
(15, 'palanpur'),
(16, 'palanpur'),
(17, 'palanpur'),
(18, 'ahmedabad'),
(19, 'desaa');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `emp_username` varchar(70) NOT NULL,
  `emp_password` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `job` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `textarea` varchar(100) NOT NULL,
  `image` varchar(80) NOT NULL,
  `emp_number` bigint(20) DEFAULT NULL,
  `dateandtime` datetime DEFAULT current_timestamp(),
  `emp_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `role_id`, `emp_username`, `emp_password`, `email`, `job`, `birthdate`, `textarea`, `image`, `emp_number`, `dateandtime`, `emp_status`) VALUES
(4, 11, 'maulik', 'maulik', 'maulikparamar9@gmail.com', 'http://localhost/ajax/home.php?p=edit_profile', '2000-12-05', 'sdh', 'assets/profile/sg.PNG', 7435864306, '2020-03-14 21:15:25', 0),
(10, 14, 'aman', 'aman', '', '', '0000-00-00', '', '', NULL, '2020-05-28 19:40:04', 0),
(11, 15, 'khushbu', 'khushbu', 'bablooharsh17@gmail.com', 'sidifhiusdhknoi@hgma1il.com', '2020-06-19', 'hello sdjhfsjhdf', 'assets/profile/sg.png', 21345678, '2020-06-04 19:29:32', 0),
(12, 24, 'sd', 'sd', '', '', '0000-00-00', '', '', NULL, '2020-11-02 11:30:06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gst`
--

CREATE TABLE `gst` (
  `gst_id` int(11) NOT NULL,
  `gst` varchar(60) NOT NULL,
  `gst_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst`
--

INSERT INTO `gst` (`gst_id`, `gst`, `gst_value`) VALUES
(1, 'sgst', 40),
(2, 'cgst', 12),
(3, 'igst', 18),
(19, 'cgst', 6),
(27, 'cgst', 30),
(28, 'cgst', 3);

-- --------------------------------------------------------

--
-- Table structure for table `partybill`
--

CREATE TABLE `partybill` (
  `bill_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `productname` varchar(60) NOT NULL,
  `billnumber` varchar(60) NOT NULL,
  `xyz` varchar(60) NOT NULL,
  `dateandtime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partybill`
--

INSERT INTO `partybill` (`bill_id`, `employee_id`, `productname`, `billnumber`, `xyz`, `dateandtime`) VALUES
(1, 61, 'dthy', '436', 'fj', '2020-02-21 12:14:51'),
(2, 101, 'fgj', '2246', 'sfh', '2020-02-21 12:14:51');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `hsn_code` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `price` int(11) NOT NULL,
  `unitview_id` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `description` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_code`, `product_name`, `hsn_code`, `image`, `price`, `unitview_id`, `quality`, `description`) VALUES
(1, 25, 'sdgkjb', 'sg', 986597, 'assets/uploads/sg.png', 789, 2, 6759, 'ksgil'),
(6, 15, '155', 'shirt', 74586547, 'assets/uploads/sg.png', 600, 5, 45, 'sdf'),
(7, 25, 'sdfj', 'black', 64, 'assets/uploads/black.png', 150, 3, 64, 'sdjn'),
(12, 15, '30', 'Green', 30, 'assets/uploads/green.jpg', 300, 8, 0, 'harsh'),
(13, 25, '45', 'red', 0, 'assets/uploads/red.jpg', 320, 0, 0, 'harsh'),
(14, 15, '45', 'Blue', 0, 'assets/uploads/blue.jpg', 200, 0, 0, 'harsh'),
(15, 25, 'sdfsd', 'Black', 50, 'assets/uploads/black.png', 500, 2, 50, 'sdfkgisdhfbisbdfisd'),
(16, 15, 'asfsdf', 'Red', 0, 'assets/uploads/red.jpg', 700, 5, 50, 'sdjfhsd'),
(17, 25, 'asdfsd', 'Green', 23423, 'assets/uploads/green.jpg', 325, 5, 23543, 'maulik');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_data`
--

CREATE TABLE `purchase_data` (
  `purchase_data_id` int(11) NOT NULL,
  `purchase_no` varchar(11) NOT NULL,
  `bill_no` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `bill_date` date NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quan` varchar(100) NOT NULL,
  `unitview_id` varchar(100) NOT NULL,
  `gst_id` varchar(100) NOT NULL,
  `subtotal` varchar(100) NOT NULL,
  `gsttotal` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_data`
--

INSERT INTO `purchase_data` (`purchase_data_id`, `purchase_no`, `bill_no`, `purchase_date`, `bill_date`, `purchase_id`, `remarks`, `category_id`, `product_id`, `price`, `quan`, `unitview_id`, `gst_id`, `subtotal`, `gsttotal`, `total`) VALUES
(6, 'harsh', 23, '2020-05-06', '2020-05-13', 2, '23', '[\"25\"]', '[\"1\"]', '[\"23\"]', '[\"3\"]', '[\"5\"]', '[\"3\"]', '[\"69.0\"]', '[\"71.07\"]', '\"71.07\"'),
(8, 'aman', 13, '2020-05-21', '2020-05-06', 2, 'asdf', '[\"15\"]', '[\"6\"]', '[\"2434\"]', '[\"3\"]', '[\"7\"]', '[\"3\"]', '[\"7302.0\"]', '[\"7521.06\"]', '\"7521.06\"'),
(9, 'aman', 13, '2020-05-21', '2020-05-06', 3, 'asdf', '[\"25\"]', '[\"1\"]', '[\"12\"]', '[\"2\"]', '[\"5\"]', '[\"3\"]', '[\"24.0\"]', '[\"24.72\"]', '\"24.72\"'),
(10, 'maulikkkk', 234, '2020-06-10', '2020-07-03', 3, '234', '[\"25\",\"15\"]', '[\"6\",\"13\"]', '[\"23\",\"23\"]', '[\"4\",\"2\"]', '[\"5\",\"5\"]', '[\"3\",\"1\"]', '[\"92.0\",\"46.0\"]', '[\"94.76\",\"46.46\"]', '\"141.22\"'),
(14, 'km cho', 123, '2020-06-11', '2020-06-12', 2, '12', '[\"15\",\"15\"]', '[\"12\",\"13\"]', '[\"45\",\"40\"]', '[\"3\",\"3\"]', '[\"7\",\"5\"]', '[\"2\",\"2\"]', '[\"135.0\",\"120.0\"]', '[\"137.70\",\"122.40\"]', '\"260.1\"'),
(16, 'maulsdfgjdf', 587, '0065-07-08', '0000-00-00', 3, 'gfgh', '[\"25\",\"15\"]', '[\"14\",\"16\"]', '[\"12\",\"23\"]', '[\"2\",\"5\"]', '[\"7\",\"5\"]', '[\"28\",\"2\"]', '[\"24.0\",\"115.0\"]', '[\"30.72\",\"117.30\"]', '\"148.01999999999998\"'),
(19, '213', 23, '0000-00-00', '2020-06-08', 3, 'asd', '[\"15\",\"15\"]', '[\"7\",\"12\"]', '[\"12\",\"12\"]', '[\"3\",\"2\"]', '[\"5\",\"5\"]', '[\"3\",\"2\"]', '[\"36.0\",\"24.0\"]', '[\"42.48\",\"26.88\"]', '\"69.36\"');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_party`
--

CREATE TABLE `purchase_party` (
  `purchase_id` int(11) NOT NULL,
  `party_name` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `number` bigint(20) NOT NULL,
  `number1` bigint(20) NOT NULL,
  `email` varchar(90) NOT NULL,
  `gst_no` varchar(50) NOT NULL,
  `bank_details` varchar(90) NOT NULL,
  `company_name` varchar(90) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_party`
--

INSERT INTO `purchase_party` (`purchase_id`, `party_name`, `address`, `city`, `area`, `pin_code`, `number`, `number1`, `email`, `gst_no`, `bank_details`, `company_name`, `url`) VALUES
(2, 'maulik', '57865', '7865', '76', 5786, 5786, 5876, '578@gmail.com', '6578', '65', '765', '876'),
(3, 'harsh', 'nonono', 'aaisfb', 'jabsfk', 2989, 2749, 6759, 'hu', 'u', 'wefwef', 'wefwe', 'wef');

-- --------------------------------------------------------

--
-- Table structure for table `role_name`
--

CREATE TABLE `role_name` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_name`
--

INSERT INTO `role_name` (`role_id`, `role_name`) VALUES
(11, 'maulik'),
(14, 'aman'),
(15, 'khushbu'),
(19, 'hello'),
(20, 'hello'),
(21, 'hello'),
(22, 'sd'),
(23, 'sd'),
(24, 'sd');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit`) VALUES
(2, 60),
(5, 888),
(7, 12),
(8, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abc`
--
ALTER TABLE `abc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `role_id` (`role_id`);

--
-- Indexes for table `gst`
--
ALTER TABLE `gst`
  ADD PRIMARY KEY (`gst_id`);

--
-- Indexes for table `partybill`
--
ALTER TABLE `partybill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `productid` (`employee_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase_data`
--
ALTER TABLE `purchase_data`
  ADD PRIMARY KEY (`purchase_data_id`),
  ADD KEY `purchase_id` (`purchase_id`);

--
-- Indexes for table `purchase_party`
--
ALTER TABLE `purchase_party`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `role_name`
--
ALTER TABLE `role_name`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abc`
--
ALTER TABLE `abc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gst`
--
ALTER TABLE `gst`
  MODIFY `gst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `partybill`
--
ALTER TABLE `partybill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `purchase_data`
--
ALTER TABLE `purchase_data`
  MODIFY `purchase_data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `purchase_party`
--
ALTER TABLE `purchase_party`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_name`
--
ALTER TABLE `role_name`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `role_id` FOREIGN KEY (`role_id`) REFERENCES `role_name` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

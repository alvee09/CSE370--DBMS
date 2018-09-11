-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2016 at 06:32 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruzlanpanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `username` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `created`, `modified`, `username`, `password`) VALUES
(1, 'Test User', 'testuser@gmail.com', '9999999999', 'New York, NY, USA', '2016-08-17 08:21:25', '2016-08-17 08:21:25', '', ''),
(2, 'Alvee', '123456', '1234', 'dubai', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'iamrich', ''),
(3, 'rezwan', '09876', '543', 'gulshan', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'rez1', 'rez2'),
(4, 'Sazzad Hossain', 'sazzadhossain1206@gmail.com', '01655445', '94/9  Dina Nathsen Road Gandaria', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'sazzy', '123');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location` varchar(55) NOT NULL,
  `res_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location`, `res_name`) VALUES
('gulshan', 'BFC'),
('dubai', 'bismillah'),
('new york', 'HANDI'),
('banani', 'KFC');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `confirmed` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total_price`, `created`, `modified`, `confirmed`) VALUES
(9, 1, 1289.00, '2016-11-19 07:46:00', '2016-11-19 07:46:00', 'yes'),
(10, 1, 638.00, '2016-11-19 07:59:41', '2016-11-19 07:59:41', 'yes'),
(11, 1, 419.00, '2016-11-19 08:39:06', '2016-11-19 08:39:06', 'no'),
(12, 4, 30.00, '2016-11-24 18:40:28', '2016-11-24 18:40:28', 'no'),
(13, 3, 560.00, '2016-11-26 13:32:05', '2016-11-26 13:32:05', 'not');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(10, 9, 10, 1),
(11, 9, 9, 1),
(12, 9, 8, 1),
(13, 9, 11, 1),
(14, 9, 12, 2),
(15, 10, 3, 1),
(16, 10, 9, 2),
(17, 10, 8, 1),
(18, 11, 9, 1),
(19, 11, 8, 2),
(20, 11, 12, 2),
(21, 12, 6, 1),
(22, 13, 7, 2),
(23, 13, 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `res_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `created`, `modified`, `res_name`, `status`) VALUES
(1, 'chicken', 60.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', 'KFC', '1'),
(2, 'BURGER', 120.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', 'KFC', '1'),
(3, 'PIZZA', 300.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', 'KFC', '1'),
(4, 'chicken', 50.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', 'BFC', '1'),
(5, 'DOSA', 60.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', 'BFC', '1'),
(6, 'IDLI', 30.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', 'BFC', '1'),
(7, 'BIRYANI', 250.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', 'HANDI', '1'),
(8, 'KICHURI', 140.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', 'HANDI', '1'),
(9, 'BEEF', 99.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', 'HANDI', '1'),
(10, 'pizza', 1000.00, '2016-11-18 16:07:58', '0000-00-00 00:00:00', 'pizza hut', '1'),
(11, 'bhaat', 10.00, '2016-11-19 07:27:05', '0000-00-00 00:00:00', 'bismillah', '1'),
(12, 'bhaat', 20.00, '2016-11-19 07:28:21', '0000-00-00 00:00:00', 'bismillah', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location`),
  ADD KEY `res_name` (`res_name`),
  ADD KEY `res_name_2` (`res_name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `res_name` (`res_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

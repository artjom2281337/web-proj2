-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 16, 2025 at 02:50 PM
-- Server version: 8.0.34
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int NOT NULL,
  `userid` int NOT NULL,
  `itemid` int NOT NULL,
  `quantity` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fav_items`
--

CREATE TABLE `fav_items` (
  `fav_id` int NOT NULL,
  `userid` int NOT NULL,
  `itemid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fav_items`
--

INSERT INTO `fav_items` (`fav_id`, `userid`, `itemid`) VALUES
(6, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemid` int NOT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `price_kilo` float DEFAULT NULL,
  `item_type` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `ingred` varchar(50) DEFAULT NULL,
  `allergies` varchar(50) DEFAULT NULL,
  `isDiscount` tinyint(1) NOT NULL DEFAULT '0',
  `discount_percentage` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `item_name`, `img`, `price`, `price_kilo`, `item_type`, `country`, `company`, `ingred`, `allergies`, `isDiscount`, `discount_percentage`) VALUES
(1, 'Banana', 'img/items/fruits/banana.png', 1, 2, 'fruit', 'Guatemala', 'BananaGuatenana', 'Calcium', 'Many', 1, 0.25),
(2, 'Apple', 'img/items/fruits/apple.png', 0.5, 2.3, 'fruit', 'Appland', 'Apple', 'Yummy', 'Doctors', 0, NULL),
(3, 'Coconut', 'img/items/fruits/coconut.png', 1, 1.5, 'fruit', 'Cocoland', 'Coco co.', 'Milk', 'Lactose', 1, 0.35),
(4, 'Milk', 'img/items/diary/milk.png', 2, 2, 'Dairy', 'Germany', 'DairyCo', 'Milk', 'Lactose', 1, 0.1),
(5, 'Chocolate', 'img/items/diary/chocolate.png', 3.5, 20, 'Diary', 'Belgium', 'Sweet Treats', 'Cocoa, Sugar, Milk', 'Nuts', 0, NULL),
(6, 'Bread', 'img/items/bakery/bread.png', 1.8, 3, 'Bakery', 'France', 'Boulangerie', 'Flour, Water, Yeast, Salt', 'Gluten', 1, 0.15),
(7, 'Salmon', 'img/items/meat/salmon.png', 10.5, 21, 'Seafood', 'Norway', 'Ocean Fresh', 'Salmon', 'Fish', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `postcode` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `name`, `startdate`, `enddate`, `location`, `postcode`) VALUES
(1, 'Cashier', '2024-01-15', '2024-12-31', 'Helsinki', '00100'),
(2, 'CEO', '2024-02-01', '2024-08-01', 'Espoo', '02100'),
(3, 'Store Manager', '2023-09-01', NULL, 'Vantaa', '01310'),
(4, 'Hitman', '2024-03-10', '2024-09-10', 'Tampere', '33100'),
(5, 'Logistic Manager', '2024-04-01', NULL, 'Oulu', '99100'),
(6, 'Cleaner', '2024-01-05', '2024-06-30', 'Turku', '01100'),
(7, 'Security Guard', '2024-02-15', NULL, 'Hämeenlinna', '11100'),
(8, 'Cashier', '2024-03-20', '2024-09-30', 'Kuopio', '12100'),
(9, 'Cashier', '2024-05-01', NULL, 'Lahti', '15100'),
(10, 'Meat Department Worker', '2024-06-01', '2024-12-31', 'Rovaniemi', '10100');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `iscorp` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `email`, `password`, `iscorp`) VALUES
(4, 'fucker', 'motherfucker', 'fuckingfucker@fuck.com', 'fUckkk', 0),
(5, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(6, 'a', 'a', 'a', '0cc175b9c0f1b6a831c399e269772661', 0),
(7, 'b', 'b', 'b', '92eb5ffee6ae2fec3ad71c777531578f', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `itemid` (`itemid`);

--
-- Indexes for table `fav_items`
--
ALTER TABLE `fav_items`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `itemid` (`itemid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fav_items`
--
ALTER TABLE `fav_items`
  MODIFY `fav_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`itemid`) REFERENCES `items` (`itemid`) ON DELETE CASCADE;

--
-- Constraints for table `fav_items`
--
ALTER TABLE `fav_items`
  ADD CONSTRAINT `fav_items_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE,
  ADD CONSTRAINT `fav_items_ibfk_2` FOREIGN KEY (`itemid`) REFERENCES `items` (`itemid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

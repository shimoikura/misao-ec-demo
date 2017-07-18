-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 7 朁E18 日 05:34
-- サーバのバージョン： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ec_demo`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cateName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `category`
--

INSERT INTO `category` (`id`, `cateName`) VALUES
(1, 'Shoes'),
(2, 'Mobile'),
(3, 'Laptop'),
(4, 'Fashion'),
(5, 'Foods'),
(6, 'Mens'),
(7, 'women');

-- --------------------------------------------------------

--
-- テーブルの構造 `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `proName` varchar(30) DEFAULT NULL,
  `proPrice` int(11) DEFAULT NULL,
  `proDiscription` varchar(100) DEFAULT NULL,
  `imgName` varchar(30) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `product`
--

INSERT INTO `product` (`id`, `proName`, `proPrice`, `proDiscription`, `imgName`, `categoryId`) VALUES
(15, 'New Blance', 12000, 'è»½ã„ã‚ˆ', 'shoes1.jpg', 1),
(16, 'Pump', 5200, 'very qute', 'shoes_ctg_01.jpg', 1),
(17, 'Fast food meal', 500, 'delicious ', 'Fast_food_meal.jpg', 5),
(18, 'Sushi', 1000, 'Japan food', 'sush0istock-gkrphoto.jpg', 5),
(19, 'Asus', 40000, 'great', 'Asus_X555LA-XX290H_budget_lapt', 3),
(20, 'Yellow T-shirt', 800, '', 'tshirts.jpg', 4),
(21, 'mountain', 111111, 'a', '1_mm_nature_photography.jpg', 6),
(22, 'women', 123, '', '1_mm_nature_photography.jpg', 7);

-- --------------------------------------------------------

--
-- テーブルの構造 `ship_address`
--

CREATE TABLE `ship_address` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `delivery` varchar(10) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL,
  `gift` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `ship_address`
--

INSERT INTO `ship_address` (`id`, `name`, `phone`, `address`, `email`, `delivery`, `payment`, `gift`) VALUES
(1, '', 0, '', '', '', '', 'wrap'),
(2, '', 0, '', '', '', '', 'wrap'),
(3, '', 0, '', '', '', '', 'wrap'),
(4, 'yoshiki', 12345678, 'Grgrum', 'abc@gmail.com', 'home', 'card', 'wrap'),
(5, 'yoshiki', 12345678, 'Grgrum', 'abc@gmail.com', 'home', 'card', 'wrap'),
(6, 'yoshiki', 12345678, 'Grgrum', 'abc@gmail.com', 'home', 'card', 'wrap'),
(7, 'yoshiki', 12345678, 'Grgrum', 'abc@gmail.com', 'home', 'card', 'wrap'),
(8, 'yoshiki', 12345678, 'Grgrum', 'abc@gmail.com', 'home', 'card', 'wrap'),
(9, 'yoshiki', 12345678, 'Grgrum', 'abc@gmail.com', 'home', 'card', 'wrap'),
(10, 'yoshiki', 12345678, 'Grgrum', 'abc@gmail.com', 'home', 'card', 'wrap'),
(11, 'yoshiki', 12345678, 'Grgrum', 'abc@gmail.com', 'home', 'card', 'wrap');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_information`
--

CREATE TABLE `user_information` (
  `id` int(11) NOT NULL,
  `userName` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `userImg` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `user_information`
--

INSERT INTO `user_information` (`id`, `userName`, `password`, `email`, `gender`, `day`, `month`, `year`, `userImg`) VALUES
(1, 'yoshiki', '123456', 'abc@gmail.com', 1, 1, 1, 1900, '1_mm_nature_photography.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_address`
--
ALTER TABLE `ship_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `ship_address`
--
ALTER TABLE `ship_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

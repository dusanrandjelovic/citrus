-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2020 at 09:41 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12059569_basec`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(191) NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `username`, `email`, `password`, `date`) VALUES
(1, 'Admin1', 'admin1@mail.com', 'd80f6d6e6e3699416038fbee70dcf51b', '0000-00-00 00:00:00'),
(2, 'Admin2', 'alonso@mail.com', '3e0469fb134991f8f75a2760e409c6ed', '2020-03-11 18:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `is_approved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `name`, `email`, `message`, `is_approved`) VALUES
(1, 'Vin Highel', 'vin@mail.com', 'A variety of flavours can be derived from different parts and treatments of citrus fruits.', 1),
(3, 'Bradley Monk', 'monk@gmail.com', 'I agree with that.', 0),
(6, 'Lorem Ipsum', 'ipsum@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 1),
(13, 'Dean Romero', 'dean@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 0),
(15, 'Michael Bill', 'bill@mail.com', 'Did you know that you can upload multiple files much easier and faster with FTP absolutely for free?', 1),
(16, 'John Lesnar', 'lesnar@mail.com', 'This is my message.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_products` int(11) NOT NULL,
  `image` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_products`, `image`, `title`, `description`) VALUES
(1, 'img/product1.jpg', 'Product 1', 'Many citrus fruits, such as oranges, tangerines, grapefruits,\r\n           and clementines, are generally eaten fresh. They are typically peeled.'),
(2, 'img/product2.jpg', 'Product 2', 'A variety of flavours can be derived from different parts and treatments of citrus fruits.\r\n        And can be easily split into segments.'),
(3, 'img/product3.jpg', 'Product 3', 'Lemon or lime is commonly used as a garnish for water, soft drinks, or cocktails. Citrus juices, rinds,\r\n           or slices are used in a variety of mixed drinks.'),
(4, 'img/product4.jpg', 'Product 4', 'The colourful outer skin of some citrus fruits, known as zest, is used as a flavouring in cooking;\r\n           the white inner portion of the peel.'),
(5, 'img/product5.jpg', 'Product 5', 'Many citrus fruits, such as oranges, tangerines, grapefruits,\r\n           and clementines, are generally eaten fresh. They are typically peeled.'),
(6, 'img/product6.jpg', 'Product 6', 'A variety of flavours can be derived from different parts and treatments of citrus fruits.\r\n        And can be easily split into segments.'),
(7, 'img/product7.jpg', 'Product 7', 'Lemon or lime is commonly used as a garnish for water, soft drinks, or cocktails. Citrus juices, rinds,\r\n           or slices are used in a variety of mixed drinks.'),
(8, 'img/product8.jpg', 'Product 8', 'The colourful outer skin of some citrus fruits, known as zest, is used as a flavouring in cooking;\r\n           the white inner portion of the peel.'),
(9, 'img/product9.jpg', 'Product 9', 'Many citrus fruits, such as oranges, tangerines, grapefruits,\r\n           and clementines, are generally eaten fresh. They are typically peeled.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_products`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

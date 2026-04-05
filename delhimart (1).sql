-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2024 at 01:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delhimart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'Admin123', 'Admin@321');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` tinyint(1) DEFAULT 0,
  `images` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `sub_category`, `images`) VALUES
(2, 'men', 1, 'uploads/66c431efcb3f8.jpg,uploads/66c431efcb822.jpg,uploads/66c431efcbbe3.jpg'),
(3, 'men', 1, 'uploads/66c4363064122.jpg,uploads/66c4363064723.jpg'),
(4, 'men', 1, 'uploads/66c441e1a9570.jpg,uploads/66c441e1a9f84.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `product_name`, `slug`, `price`, `discount`, `images`, `quantity`, `meta_title`, `description`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 2, 0, 'shoes', 'shoes', 1900.00, 10.00, 'uploads/66c4359b384d4.jpg,uploads/66c4359b390c1.jpg,uploads/66c4359b3c3a2.jpg', 4, 'xyz', 'xyz', 'xyz', '2024-08-20 06:20:11', '2024-08-20 06:20:11'),
(3, 3, NULL, 't-shirt', 't-shirt', 1900.00, 10.00, 'uploads/66c43f842991c.jpg,uploads/66c43f842a4d5.jpg,uploads/66c43f842aaf6.jpg', 4, 'xyz', 'sss', 'ss', '2024-08-20 07:02:28', '2024-08-20 07:02:28'),
(5, 2, 1, 'jeans', 'jeans', 2000.00, 5.00, 'uploads/66c44bd701b2d.jpg,uploads/66c44bd702157.jpg,uploads/66c44bd70272b.jpg', 4, 'xyz', 'sakjd', 'sssssj', '2024-08-20 07:55:03', '2024-08-20 07:55:03'),
(8, 3, 1, 'new jeans', 'new-jeans', 1000.00, 10.00, 'uploads/66c450500c8ae.jpg,uploads/66c450500d639.jpg,uploads/66c450500dc2d.jpg', 2, 'new jeans', 'jeans', 'jaens', '2024-08-20 08:14:08', '2024-08-20 08:14:08'),
(9, 3, 1, 'Shirts', 'shirts', 1200.00, 5.00, 'uploads/66c4701326e49.jpg,uploads/66c47013286ef.jpg,uploads/66c470132af3e.jpg', 4, 'Shirts', 'Cantabel Shirts', 'Cantabel Shirts', '2024-08-20 10:29:39', '2024-08-20 10:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `images` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `cid`, `name`, `images`) VALUES
(1, 2, 'men t-shirt', NULL),
(2, 3, 'Men Clothes', NULL),
(3, 4, 'jeans', NULL),
(4, 5, 'Top', NULL),
(5, 6, 'shirts', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

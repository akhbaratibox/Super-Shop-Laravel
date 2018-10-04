-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 02:09 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(2, 'HP', 'uploads/mKAhZmLkVcP4Pr55M9WpPJCLVE8kin3gOLFlXHzE.jpeg', '2018-10-01 00:52:19', '2018-10-01 00:52:19'),
(3, 'Audi', 'uploads/vMSmHD9hyzHNX3YnkzS8rAUsTbEE8KC6q44PeHM4.png', '2018-10-01 01:12:31', '2018-10-01 01:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `banner`, `icon`, `created_at`, `updated_at`) VALUES
(7, 'Auto Mobiles', 'uploads/LntG9daqoJqQ077ZUzjjApqNygNgYVf2PZGVBnYd.jpeg', 'uploads/ftpL20ddrhYGvw8a9oAGfkxWHJc5FhMpfXhqv0Gl.png', '2018-09-30 12:01:43', '2018-09-30 06:01:43'),
(8, 'Furniture', 'uploads/ae4aNYkbh5zqRvvryc3vimjPOuoAMMnRWShUuods.jpeg', 'uploads/dWBFvWcVSE7kkfdw3HWxbp72ok2Xjj4JXv5wBYLa.jpeg', '2018-10-01 01:32:24', '2018-10-01 01:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mehedi.iitdu@gmail.com', '$2y$10$WM.7GeUsSAAvOpYNJspaquJCjKbwwiGNNycYmtCmK6ECDbVCPrNga', '2018-09-27 02:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `added_by` varchar(6) NOT NULL DEFAULT 'admin',
  `user_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `tags` text,
  `description` text,
  `unit_price` double(8,2) NOT NULL,
  `purchase_price` double(8,2) NOT NULL,
  `shipping_cost` double(8,2) NOT NULL,
  `price_variations` text NOT NULL,
  `todays_deal` int(11) NOT NULL DEFAULT '0',
  `published` int(11) NOT NULL DEFAULT '0',
  `featured` int(11) NOT NULL DEFAULT '0',
  `current_stock` int(10) NOT NULL DEFAULT '0',
  `unit` varchar(20) NOT NULL,
  `colors` text,
  `discount` double(8,2) DEFAULT NULL,
  `discount_type` varchar(10) DEFAULT NULL,
  `tax` double(8,2) DEFAULT NULL,
  `tax_type` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `added_by`, `user_id`, `subsubcategory_id`, `brand_id`, `photo`, `tags`, `description`, `unit_price`, `purchase_price`, `shipping_cost`, `price_variations`, `todays_deal`, `published`, `featured`, `current_stock`, `unit`, `colors`, `discount`, `discount_type`, `tax`, `tax_type`, `created_at`, `updated_at`) VALUES
(1, 'Ryder Willis', 'admin', 1, 5, 2, 'uploads/1jusV7gSqCAqVEKv7ainH6IQaCDrPsfSG3H8v1Kt.jpeg', '[\"fgfdg,kj\"]', NULL, 415.00, 430.00, 82.00, '{\"choices_0_S_variation\":\"decrease\",\"choices_0_S_price\":\"108\",\"choices_0_M_variation\":\"decrease\",\"choices_0_M_price\":\"964\",\"choices_0_L_variation\":\"decrease\",\"choices_0_L_price\":\"203\"}', 0, 0, 0, 0, 'PC', '[\"#000\",\"#ff0000\"]', 90.00, 'percent', 98.00, 'percent', '2018-10-04 05:02:39', '2018-10-04 05:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `banner`, `created_at`, `updated_at`) VALUES
(3, 'Motor Cycle', 7, 'uploads/s9kAydCtyXRXF7CYkcCYQqf0BsZUY4NeDOouI2WE.jpeg', '2018-10-01 01:31:58', '2018-10-01 01:31:58'),
(4, 'Cars', 7, 'uploads/ASt5PzynNc5wNgZ0IQ1HWe5kHiQ7OhwilZ7cuV7x.jpeg', '2018-10-01 01:43:54', '2018-10-01 01:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `brands` varchar(100) NOT NULL,
  `options` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `subcategory_id`, `name`, `banner`, `brands`, `options`, `created_at`, `updated_at`) VALUES
(5, 3, 'Private Cars', 'uploads/sctkUXlTXuERQkNmhtXbFVeNwGSxeUIyL5OJ6Pnn.jpeg', '[\"2\",\"3\"]', '[{\"name\":\"choices_0\",\"title\":\"Size\",\"type\":\"radio\",\"options\":[\"S\",\"M\",\"L\"]}]', '2018-10-01 02:31:47', '2018-10-04 04:59:09'),
(6, 3, 'Clio Baxter', 'uploads/RdBo95yeom3lO45zQ8I7qysodhtOHPbtF6RWJkwN.jpeg', '[\"2\",\"3\"]', '[{\"name\":\"choices_0\",\"title\":\"Size\",\"type\":\"radio\",\"options\":[\"S\",\"M\",\"L\"]},{\"name\":\"choices_1\",\"title\":\"Fabric\",\"type\":\"select\",\"options\":[\"Cotton\",\"Semi-Cotton\"]}]', '2018-10-03 05:19:27', '2018-10-04 04:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'admin@example.com', NULL, '$2y$10$LB5/.OWjDuXpVQ3qp3ZgAevv0ZDFT8WcO5mlQqKLudgPYw46kBsIm', 'oqRjaDNwfPETo5Y4EV5nx1S1cvZ6MSasOYt38HSzwu4BSaF3HtbPbyObfP4A', '2018-09-26 02:08:48', '2018-09-26 02:08:48'),
(2, 'customer', 'Santu Roy', 'santu@gmail.com', NULL, '$2y$10$X90n.h20O1Z0pzDfoQjwvu.Thxe6EsRcQDPYZ8Lf/7fy6qkZV.qnq', '5yIwJmGbwc0wCHWmyVdLcdksRJp7VQnFxky7dE3avkEnhgS8Anmagxqp4692', '2018-09-30 02:55:40', '2018-09-30 02:55:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_id` (`category_id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sub_category_id` (`subcategory_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD CONSTRAINT `fk_sub_category_id` FOREIGN KEY (`subcategory_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

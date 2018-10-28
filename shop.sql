-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 09:48 AM
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
  `name` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(2, 'HP', 'uploads/mKAhZmLkVcP4Pr55M9WpPJCLVE8kin3gOLFlXHzE.jpeg', '2018-09-30 18:52:19', '2018-09-30 18:52:19'),
(3, 'Audi', 'uploads/vMSmHD9hyzHNX3YnkzS8rAUsTbEE8KC6q44PeHM4.png', '2018-09-30 19:12:31', '2018-09-30 19:12:31'),
(4, 'Brighton', 'uploads/9l2Vpq9NkvU6ESG2B3Wd0QhWKXRTVWFFgWnL4GM3.png', '2018-10-14 23:57:09', '2018-10-14 23:57:09'),
(5, 'Tanishq', 'uploads/CtNGOBu2Shec7EfIQ31wkJ5yB98fG76MEIp8xA5I.png', '2018-10-14 23:57:26', '2018-10-14 23:57:26'),
(6, 'Dior', 'uploads/NyDDkOdNaRfozGBy7zqqk4ckJt3BtgtKXa4FC8kL.png', '2018-10-14 23:57:41', '2018-10-14 23:57:41'),
(7, 'Polo', 'uploads/GA7FfkRjAr2CeRRWOtGIWIbaqfRSq13yDWMHWn5t.png', '2018-10-14 23:58:09', '2018-10-14 23:58:09'),
(8, 'Enor', 'uploads/slnJ9BrY92ZcNKz0jZvPpBDnOHnVayD52Sa5akL1.png', '2018-10-14 23:58:22', '2018-10-14 23:58:22'),
(9, 'Aigner', 'uploads/90qOQc0Chqza2hTXcAFHXaW0hqdcOXYlhzgaM5lR.png', '2018-10-14 23:58:41', '2018-10-14 23:58:41'),
(10, 'Axe', 'uploads/DOHSSffN8YvlNDKysV9wSx2bkvwYRMq2cK7wcyo0.png', '2018-10-14 23:58:53', '2018-10-14 23:58:53'),
(11, 'Nike', 'uploads/vxs3U2KeTTLI8yimyVBsQgADMrKZL8rCtsNMleg8.png', '2018-10-14 23:59:05', '2018-10-14 23:59:05'),
(12, 'Hudson', 'uploads/dOERC6qAk4DrHAh4HuYbCh9QPtxp747l5L5dvNE8.png', '2018-10-14 23:59:34', '2018-10-14 23:59:34'),
(13, 'Toshiba', 'uploads/996CMMUjkO6OP3AeZ3txYHDv2vIbKHeANmgKbr2t.png', '2018-10-14 23:59:50', '2018-10-14 23:59:50'),
(14, 'Logitech', 'uploads/YifbluJqeMUcWmMfLj7ieeO6odKzEK7ToGzkoiLp.png', '2018-10-15 00:00:03', '2018-10-15 00:00:03'),
(15, 'Sandisk', 'uploads/KC69IaF9PY1PzsdkQeckq5BvZryXNdSluQYcoLTL.png', '2018-10-15 00:00:16', '2018-10-15 00:00:16'),
(16, 'Intel', 'uploads/I0LmEfMYjzogc3Wd46rJSX9b599ZaQdkgRQlTOhj.png', '2018-10-15 00:00:27', '2018-10-15 00:00:27'),
(17, 'Benq', 'uploads/JWv5floIXVZ4eAqxCgsA6xdTejXV9P33mxus2Ga3.png', '2018-10-15 00:00:39', '2018-10-15 00:00:39'),
(18, 'Asus', 'uploads/A7ENkfpQkScm0q5NhzXZP5ExBZOgv5lOmu4cGAuh.png', '2018-10-15 00:00:53', '2018-10-15 00:00:53'),
(19, 'Acer', 'uploads/vrRl90qPmzokSIxtemguNoqKMVFAPpsMNRA2osUM.png', '2018-10-15 00:01:14', '2018-10-15 00:01:14'),
(20, 'Rolex', 'uploads/RXvzfbfK3iU6BfYHyBQE5ZleEZ4u3IovulaIAwzu.png', '2018-10-15 00:01:57', '2018-10-15 00:01:57'),
(21, 'Rolex', 'uploads/BGNFZsaJXa4wtQa5MnIQ7my6YCFr8Us11AO2MoKG.png', '2018-10-15 00:01:58', '2018-10-15 00:01:58'),
(22, 'Audi', 'uploads/7yt0r5jnSOc1w14mce2hrWXnHI1IbLvVBdSQMkqn.jpeg', '2018-10-22 03:04:18', '2018-10-22 03:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `business_settings`
--

CREATE TABLE `business_settings` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `value` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_settings`
--

INSERT INTO `business_settings` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'home_default_currency', '1', '2018-10-16 01:35:52', '2018-10-16 01:37:16'),
(2, 'system_default_currency', '1', '2018-10-16 01:36:58', '2018-10-16 01:36:58'),
(3, 'currency_format', '1', '2018-10-17 03:01:59', '2018-10-17 03:01:59'),
(4, 'symbol_format', '1', '2018-10-17 03:01:59', '2018-10-28 00:20:36'),
(5, 'no_of_decimals', '0', '2018-10-17 03:01:59', '2018-10-17 03:01:59'),
(6, 'product_activation', '1', '2018-10-28 01:38:37', '2018-10-28 01:42:36'),
(7, 'vendor_system_activation', '0', '2018-10-28 07:44:16', '2018-10-28 01:46:51'),
(8, 'show_vendors', '1', '2018-10-28 07:44:47', '2018-10-28 01:46:34'),
(9, 'paypal_payment', '1', '2018-10-28 07:45:16', '2018-10-28 01:46:40'),
(10, 'stripe_payment', '1', '2018-10-28 07:45:47', '2018-10-28 01:46:39'),
(11, 'cash_payment', '1', '2018-10-28 07:46:05', '2018-10-28 01:46:37'),
(12, 'payumoney_payment', '0', '2018-10-28 07:46:27', '2018-10-28 01:46:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `banner`, `icon`, `created_at`, `updated_at`) VALUES
(7, 'Automobile', 'uploads/LntG9daqoJqQ077ZUzjjApqNygNgYVf2PZGVBnYd.jpeg', 'uploads/ftpL20ddrhYGvw8a9oAGfkxWHJc5FhMpfXhqv0Gl.png', '2018-10-24 09:19:43', '2018-10-12 23:39:15'),
(8, 'Women\'s clothing', 'uploads/ae4aNYkbh5zqRvvryc3vimjPOuoAMMnRWShUuods.jpeg', 'uploads/dWBFvWcVSE7kkfdw3HWxbp72ok2Xjj4JXv5wBYLa.jpeg', '2018-10-13 05:38:55', '2018-10-12 23:38:55'),
(9, 'Cellphone & Accessories', 'uploads/9Y0Z0sspWsZGrIbeBwqHI7WpaJwpHQzOcDr2nvna.jpeg', 'uploads/JO2gZJmfmzOEMoEy8FFHIzh0bwRsRp5klevRY0hl.png', '2018-10-14 19:54:43', '2018-10-14 19:54:43'),
(10, 'Computer,Office, Security', 'uploads/D3y6VjYfpKKzZsgFT13DIjXOrIw0Iyu5XTscH6sh.jpeg', 'uploads/KvCl7flxmS9M52UQ4DXIvKbMoNrWWbeJdqE0JikI.png', '2018-10-14 21:48:07', '2018-10-14 21:48:07'),
(11, 'Consumer Electronics', 'uploads/XBQehfa2gpybSpfXN9jpfXCC0LTJzeFX21g8gb9A.jpeg', 'uploads/CdXRyERshiQ6CQ2Cu8GoAVYkJWzMozYnQG6ZWTun.png', '2018-10-14 21:49:26', '2018-10-14 21:49:26'),
(12, 'Jewelry & Watches', 'uploads/lRYBHVrNo5opv0NVWbnfjtMGpW11kGr3ZOds7RYI.jpeg', 'uploads/iABztWhWCJZ8sq7nAnSqDxVne2pQ5BrfLaP1DLIJ.png', '2018-10-14 22:36:26', '2018-10-14 22:36:26'),
(13, 'Home Appliance', 'uploads/ZFiw5Xcrs6iIcFkj3K0TrSa8oIoy4pkhpnUukZhy.jpeg', 'uploads/xSIZbEpy3OsC6ANLSIJfP7ieaGP02E40rQVkjTOu.png', '2018-10-14 22:38:48', '2018-10-14 22:38:48'),
(14, 'bags & Shoes', 'uploads/T7OdflyLppCVLfcQbrcNX2u5NplxZO6GxUXqYb5V.jpeg', 'uploads/4V6kp42dRmq9xWOChshL2lc5LHF55DsAjZlieBm7.png', '2018-10-14 22:39:57', '2018-10-14 22:39:57'),
(15, 'Kids & Toys', 'uploads/uqSmE0jswOwy5nWd4yPSh4fT4bTgIFMyb0Z8zUdi.jpeg', 'uploads/bZxBw0f5vy4MFz9XoR7EQML3JMc8heT10ZbIAc5d.png', '2018-10-14 22:41:17', '2018-10-14 22:41:17'),
(16, 'Health & Beauty', 'uploads/9C62APIf0N332pUqTXGIxSKeDhsmI5kLTC9YZ1OE.jpeg', 'uploads/QpFFOJvkYITZkIbeXnsHLsZbof7IfcW1z49YJ8uF.png', '2018-10-14 22:43:04', '2018-10-14 22:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `exchange_rate` double(10,5) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  `code` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `symbol`, `exchange_rate`, `status`, `code`, `created_at`, `updated_at`) VALUES
(1, 'U.S. Dollar', '$', 1.00000, 1, 'USD', '2018-10-09 11:35:08', '2018-10-17 05:50:52'),
(2, 'Australian Dollar', '$', 1.28000, 0, 'AUD', '2018-10-09 11:35:08', '2018-10-17 05:40:12'),
(5, 'Brazilian Real', 'R$', 3.25000, 0, 'BRL', '2018-10-09 11:35:08', '2018-10-17 05:51:00'),
(6, 'Canadian Dollar', '$', 1.27000, 0, 'CAD', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(7, 'Czech Koruna', 'Kč', 20.65000, 0, 'CZK', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(8, 'Danish Krone', 'kr', 6.05000, 0, 'DKK', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(9, 'Euro', '€', 0.85000, 0, 'EUR', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(10, 'Hong Kong Dollar', '$', 7.83000, 0, 'HKD', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(11, 'Hungarian Forint', 'Ft', 255.24000, 0, 'HUF', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(12, 'Israeli New Sheqel', '₪', 3.48000, 0, 'ILS', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(13, 'Japanese Yen', '¥', 107.12000, 0, 'JPY', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(14, 'Malaysian Ringgit', 'RM', 3.91000, 0, 'MYR', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(15, 'Mexican Peso', '$', 18.72000, 0, 'MXN', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(16, 'Norwegian Krone', 'kr', 7.83000, 0, 'NOK', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(17, 'New Zealand Dollar', '$', 1.38000, 0, 'NZD', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(18, 'Philippine Peso', '₱', 52.26000, 0, 'PHP', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(19, 'Polish Zloty', 'zł', 3.39000, 0, 'PLN', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(20, 'Pound Sterling', '£', 0.72000, 0, 'GBP', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(21, 'Russian Ruble', 'руб', 55.93000, 0, 'RUB', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(22, 'Singapore Dollar', '$', 1.32000, 0, 'SGD', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(23, 'Swedish Krona', 'kr', 8.19000, 0, 'SEK', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(24, 'Swiss Franc', 'CHF', 0.94000, 0, 'CHF', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(26, 'Thai Baht', '฿', 31.39000, 0, 'THB', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(27, 'Taka', '/-', 84.50000, 1, 'BDT', '2018-10-09 11:35:08', '2018-10-17 05:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 8, '2018-10-17 02:35:55', '2018-10-17 02:35:55');

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
  `name` varchar(200) NOT NULL,
  `added_by` varchar(6) NOT NULL DEFAULT 'admin',
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `photos` varchar(2000) DEFAULT NULL,
  `thumbnail_img` varchar(100) DEFAULT NULL,
  `featured_img` varchar(100) DEFAULT NULL,
  `flash_deal_img` varchar(100) DEFAULT NULL,
  `video_provider` varchar(20) DEFAULT NULL,
  `video_link` varchar(100) DEFAULT NULL,
  `tags` text,
  `description` text,
  `unit_price` double(8,2) NOT NULL,
  `purchase_price` double(8,2) NOT NULL,
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
  `slug` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `added_by`, `user_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `brand_id`, `photos`, `thumbnail_img`, `featured_img`, `flash_deal_img`, `video_provider`, `video_link`, `tags`, `description`, `unit_price`, `purchase_price`, `price_variations`, `todays_deal`, `published`, `featured`, `current_stock`, `unit`, `colors`, `discount`, `discount_type`, `tax`, `tax_type`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Ryder Willis', 'seller', 3, 7, 4, 5, 3, '[\"uploads\\/aHYPnKoKTrNTb2VX7ld47vaadvKI04eSgAdniFED.jpeg\", \"uploads\\/PYakQfept0XJfeoYtvG6nqHLYwOwLl1HS88IFO5b.png\"]', NULL, NULL, NULL, NULL, NULL, '[\"fgfdg,kj\"]', '<p><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">The company name is based on the Latin translation of the surname of the founder, August Horch. \"Horch\", meaning \"listen\" in German, becomes \"</span><b style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">audi</b><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">\" in Latin. The four rings of the&nbsp;</span><b style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">Audi</b><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;logo each represent one of four&nbsp;</span><b style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">car</b><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;companies that banded together to create&nbsp;</span><b style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">Audi\'s</b><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;predecessor company, Auto Union.</span></span><br></p>', 400.00, 430.00, '{\"choices_0_S_variation\":\"decrease\",\"choices_0_S_price\":\"50\",\"choices_0_M_variation\":\"increase\",\"choices_0_M_price\":\"100\",\"choices_0_L_variation\":\"increase\",\"choices_0_L_price\":\"150\"}', 1, 1, 1, 0, 'PC', '[\"#000\",\"#0000ff\",\"#ff0000\"]', 10.00, 'percent', 98.00, 'percent', 'Ryder-Willis-tuIHs', '2018-10-04 05:02:39', '2018-10-17 06:28:08'),
(2, 'Cole Mcfadden', 'admin', 1, 7, 4, 6, 2, '[\"uploads\\/hKBJF3ybnwPoqFb0tugQWD39ibxff5JDp86OXig2.png\",\"uploads\\/MTm5YPuXIALhFQeD4BivTJcgUAMQs0Dl4hs09RxW.jpeg\"]', NULL, NULL, NULL, 'youtube', 'https://www.youtube.com/watch?v=Kvl-JXkPoNo', '[\"Libero aperiam asperiores veritatis excepturi consequatur laborum Quia ex aliquam tempor optio dolor possimus,Autem voluptas et quod minus dolor corrupti\"]', '<p><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">The company name is based on the Latin translation of the surname of the founder, August Horch. \"Horch\", meaning \"listen\" in German, becomes \"</span><b style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">audi</b><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">\" in Latin. The four rings of the&nbsp;</span><b style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">Audi</b><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;logo each represent one of four&nbsp;</span><b style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">car</b><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;companies that banded together to create&nbsp;</span><b style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">Audi\'s</b><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;predecessor company, Auto Union.</span></span><br></p>', 759.00, 849.00, '{\"choices_0_S_variation\":\"decrease\",\"choices_0_S_price\":\"160\",\"choices_0_M_variation\":\"decrease\",\"choices_0_M_price\":\"119\",\"choices_0_L_variation\":\"decrease\",\"choices_0_L_price\":\"465\",\"choices_1_Cotton_variation\":\"decrease\",\"choices_1_Cotton_price\":\"274\",\"choices_1_Semi-Cotton_variation\":\"decrease\",\"choices_1_Semi-Cotton_price\":\"288\"}', 1, 1, 1, 0, 'PC', '[\"#3d85c6\",\"#cc0000\",\"#f1c232\"]', 20.00, 'percent', 53.00, 'percent', 'Cole-Mcfadden-qwidY', '2018-10-07 02:03:37', '2018-10-25 00:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_stocks`
--

CREATE TABLE `product_stocks` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `stocks` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `permissions` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Manager', '[\"1\",\"2\",\"4\"]', '2018-10-10 04:39:47', '2018-10-10 04:51:37'),
(2, 'Accountant', '[\"2\",\"3\"]', '2018-10-10 04:52:09', '2018-10-10 04:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, '2018-10-07 04:42:57', '2018-10-07 04:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(3, 9, 1, '2018-10-17 06:26:53', '2018-10-17 06:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `banner`, `created_at`, `updated_at`) VALUES
(3, 'Motor Cycle', 7, 'uploads/s9kAydCtyXRXF7CYkcCYQqf0BsZUY4NeDOouI2WE.jpeg', '2018-09-30 19:31:58', '2018-09-30 19:31:58'),
(4, 'Cars', 7, 'uploads/ASt5PzynNc5wNgZ0IQ1HWe5kHiQ7OhwilZ7cuV7x.jpeg', '2018-09-30 19:43:54', '2018-09-30 19:43:54'),
(5, 'Hot Categories', 8, 'uploads/FzADYY2fe864tPSw7wsjVjpyuJMC9URyKsdlIFqV.jpeg', '2018-10-14 22:45:14', '2018-10-14 22:45:14'),
(6, 'Outwear & jackets', 8, 'uploads/FSqtkpSCQlDdkCfOizrQd1XpQ7bIlG94E7dDqpuI.jpeg', '2018-10-14 23:40:19', '2018-10-14 23:40:19'),
(7, 'Tops & Sets', 8, 'uploads/NJzRF153uyDJeLmapTdEfHDJ7N65Ang5jckHfrSH.jpeg', '2018-10-14 23:40:45', '2018-10-14 23:40:45'),
(8, 'Bottoms', 8, 'uploads/jWMsEN01p7KnDPQYnYLxfwc7edVdgBvENdZDNp6s.jpeg', '2018-10-14 23:41:32', '2018-10-14 23:41:32'),
(9, 'Wedding & Events', 8, 'uploads/5jtTozQajBWNyfzQ0ZojG6V0FNgOFgXQtQ9m7E1F.jpeg', '2018-10-14 23:42:43', '2018-10-14 23:42:43'),
(10, 'Outwear & jackets', 7, 'uploads/0Jzlwavx2KTUWqYwKiUE7c8Z9I4PVF0SFecXXc6d.jpeg', '2018-10-14 23:43:32', '2018-10-14 23:43:32'),
(11, 'Bottoms', 7, 'uploads/aKzZAmDyTMxRbvzSWznGfiH7sLowZousPJOdEiYM.jpeg', '2018-10-14 23:44:05', '2018-10-14 23:44:05'),
(12, 'Accessories', 7, 'uploads/4LLm9FCvULwfZs3ih8rfF5CNXQ6fnOXAizdp5HtE.jpeg', '2018-10-14 23:44:29', '2018-10-14 23:44:29'),
(13, 'Hot sale', 7, 'uploads/7nful2UIcbcVOzAc0HOSOjNug7w56KFHlVfgnTss.jpeg', '2018-10-14 23:44:49', '2018-10-14 23:44:49'),
(14, 'Shirts', 7, 'uploads/PKpcrQ9h5C8abFdzWDGDlQd0OjMGOaPqRuUaMcja.jpeg', '2018-10-14 23:45:14', '2018-10-14 23:45:14'),
(15, 'Suits & blazers', 7, 'uploads/cZRJnQD2NzpWyZCnZnr7C8yn5ppRSBPlLGBEpnR1.jpeg', '2018-10-14 23:45:33', '2018-10-14 23:45:33'),
(16, 'Tops & tees', 7, 'uploads/CfxdDitRuM06ba11uRf0th9NbXvCYx6pwNHKd0Hq.jpeg', '2018-10-14 23:46:01', '2018-10-14 23:46:01'),
(17, 'Mobile Phones', 9, 'uploads/uMJ1jXLqq10L2br1K1SnzV4HS8HiL3wDVMdcGWqk.jpeg', '2018-10-14 23:46:43', '2018-10-14 23:51:29'),
(18, 'Accessories', 9, 'uploads/dNpwR2FiLX8O3E014KTW12EHSIQOpmbSZBp8qIsH.jpeg', '2018-10-14 23:47:11', '2018-10-14 23:52:32'),
(19, 'Phone Bags', 9, 'uploads/JD40WmhZ816wzWW769TulA9cC35RULrEy1e1OhXa.jpeg', '2018-10-14 23:47:39', '2018-10-14 23:52:55'),
(20, 'Office Electronics', 9, 'uploads/v8xcEG9ctpbKOVFsYOBSefERARkbXP356PYEZ0Mt.jpeg', '2018-10-14 23:48:27', '2018-10-14 23:51:49'),
(21, 'Computer PeriPherals', 9, 'uploads/zSYJnRZbYsaurNuMMTtSUAHgUw4xM0lG5QTWZPvg.jpeg', '2018-10-14 23:48:53', '2018-10-14 23:51:08'),
(22, 'Mini PC', 9, 'uploads/mSSG48mEmbUQez9CXPLu2n6f8e0liTBloQ18jKPB.jpeg', '2018-10-14 23:49:17', '2018-10-14 23:50:57'),
(23, 'laptop Accessories', 10, 'uploads/vJZLPZREKv65KNwkC03VmwfrjRYMGiXaeaLzx7Hr.jpeg', '2018-10-14 23:50:05', '2018-10-14 23:50:40'),
(24, 'Home Audio & video', 11, 'uploads/FoPIRgiq8ORhAIqmWEARacsodP4Q4VdrsBvU9ir2.jpeg', '2018-10-14 23:54:33', '2018-10-14 23:54:33'),
(25, 'Smart Electronics', 11, 'uploads/4YI2ztpm3dzoz96a8Tq1dcX6fgclRdoxVD5kAHry.jpeg', '2018-10-14 23:54:58', '2018-10-14 23:54:58'),
(26, 'Camera & photo', 11, 'uploads/tn0MOurgI1lfqoCdX1GcVhzXasU99wrozar4Nx0H.jpeg', '2018-10-14 23:55:36', '2018-10-14 23:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `brands` varchar(100) NOT NULL,
  `options` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `sub_category_id`, `name`, `banner`, `brands`, `options`, `created_at`, `updated_at`) VALUES
(5, 4, 'Private Cars', 'uploads/sctkUXlTXuERQkNmhtXbFVeNwGSxeUIyL5OJ6Pnn.jpeg', '[\"2\",\"3\"]', '[{\"name\":\"choices_0\",\"title\":\"Size\",\"type\":\"radio\",\"options\":[\"S\",\"M\",\"L\"]}]', '2018-09-30 20:31:47', '2018-10-03 22:59:09'),
(6, 4, 'Clio Baxter', 'uploads/RdBo95yeom3lO45zQ8I7qysodhtOHPbtF6RWJkwN.jpeg', '[\"2\",\"3\"]', '[{\"name\":\"choices_0\",\"title\":\"Size\",\"type\":\"radio\",\"options\":[\"S\",\"M\",\"L\"]},{\"name\":\"choices_1\",\"title\":\"Fabric\",\"type\":\"select\",\"options\":[\"Cotton\",\"Semi-Cotton\"]}]', '2018-10-02 23:19:27', '2018-10-03 22:59:30'),
(7, 5, 'Dresses', 'uploads/lIt4mtq48QLqKaMBdKVOAXz6Sa0fANWw4IRmds10.jpeg', '[\"2\"]', '[]', '2018-10-14 23:56:41', '2018-10-14 23:56:41'),
(8, 10, 'Hoodie', 'uploads/0rAwm5yze0Qt2xeE33HuwptQzl75ix5FufmncaVV.jpeg', '[\"6\"]', '[]', '2018-10-15 00:03:37', '2018-10-15 00:03:37'),
(9, 12, 'jackets  t-ahirt', 'uploads/IgX5hzUYEJwB0kepD3TztTkkUOgUoBwaXT3Rd86W.jpeg', '[\"7\"]', '[]', '2018-10-15 00:04:36', '2018-10-15 00:04:36'),
(10, 9, 'Hats & Belts', 'uploads/7FyQgJOyVw2UCl7tYQmj3PsVFSSIIVz6tkLEphwm.jpeg', '[\"5\"]', '[]', '2018-10-15 00:06:08', '2018-10-15 00:06:08'),
(12, 3, 'Test', 'uploads/Axq44o3nPuJKEjrdHCCX8ZqL22QEQsKe5ZZS5XRj.jpeg', '[\"15\"]', '[{\"name\":\"choices_0\",\"title\":\"Text check\",\"type\":\"text\",\"options\":null},{\"name\":\"choices_1\",\"title\":\"Select check\",\"type\":\"select\",\"options\":[\"Select 1\",\"Select 2\",\"Select 3\",\"Select 4\"]},{\"name\":\"choices_2\",\"title\":\"Radio Check\",\"type\":\"radio\",\"options\":[\"Radio 1\",\"Radio 2\",\"Radio 3\",\"Radio 4\"]}]', '2018-10-22 03:20:37', '2018-10-22 03:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `provider_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar_original` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `provider_id`, `user_type`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `avatar`, `avatar_original`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin', 'Admin', 'admin@example.com', NULL, '$2y$10$gvCDdhUvi/0N0cKo3pWrdOyx46qzfOLCJ/6D8TkADgChDEDlI7RHm', 'Fw07WJy5Vndql8xqvjNuK4F7L8D8AtfzVKGUpa23Nxow8vctA9tcc2CjKlgD', NULL, NULL, '2018-09-26 02:08:48', '2018-09-26 02:08:48'),
(3, NULL, 'seller', 'Seller ', 'seller@example.com', NULL, '$2y$10$eUKRlkmm2TAug75cfGQ4i.WoUbcJ2uVPqUlVkox.cv4CCyGEIMQEm', 'bcaPsqMy96FQNW4ipv8MqoqOuAgGRz8csmF3Eaum1lvwrjsWwGwAwkT4EyoU', NULL, NULL, '2018-10-07 04:42:57', '2018-10-07 04:48:43'),
(9, NULL, 'customer', 'Customer', 'customer@example.com', NULL, '$2y$10$0NbLnWt7DAbrhqZrFZ7Nw.tvE.Jnff2Il/jrdgtqBiblKpgGwLyom', 'XauKzQYmFg7mSBWbQ0ueCNcUQPRsKtmI4LnlkHIT8iLiU7rxdgvWNS57q4eJ', NULL, NULL, '2018-10-17 06:26:52', '2018-10-17 06:26:52'),
(14, '103887660140114486052', 'customer', 'Md. Mehedi Hasan', 'bsse0607@iit.du.ac.bd', NULL, NULL, '4uWNYPwxgf5g42l2xt5ZZSTMS0hcyvEVZ9oumlwJc32c6XTUvmXL44z4ZRPF', 'https://lh4.googleusercontent.com/-xw_DuhMKF9k/AAAAAAAAAAI/AAAAAAAAACw/g4RUSLrD2Y0/photo.jpg?sz=50', 'https://lh4.googleusercontent.com/-xw_DuhMKF9k/AAAAAAAAAAI/AAAAAAAAACw/g4RUSLrD2Y0/photo.jpg', '2018-10-22 05:01:51', '2018-10-22 05:01:51'),
(15, '113510401900359638362', 'customer', 'Mehedi Hasan', 'mehedi.iitdu@gmail.com', NULL, NULL, 'XLHbLxlttt5qWur9ZEVLgegVuvWA1KyScGGiTe86Nk2GZU95ZbGIL3jXEPyB', 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg?sz=50', 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg', '2018-10-22 05:16:10', '2018-10-22 05:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 8, 1, '2018-10-22 02:18:58', '2018-10-22 02:18:58'),
(2, 8, 2, '2018-10-22 02:18:59', '2018-10-22 02:18:59'),
(4, 1, 1, '2018-10-25 01:29:08', '2018-10-25 01:29:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_settings`
--
ALTER TABLE `business_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- Indexes for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
  ADD KEY `fk_sub_category_id` (`sub_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `business_settings`
--
ALTER TABLE `business_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_stocks`
--
ALTER TABLE `product_stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `fk_sub_category_id` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

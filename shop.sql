-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 11:00 AM
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
(1, 'home_default_currency', '1', '2018-10-16 01:35:52', '2018-11-03 23:45:08'),
(2, 'system_default_currency', '1', '2018-10-16 01:36:58', '2018-10-16 01:36:58'),
(3, 'currency_format', '1', '2018-10-17 03:01:59', '2018-10-17 03:01:59'),
(4, 'symbol_format', '1', '2018-10-17 03:01:59', '2018-11-03 23:45:25'),
(5, 'no_of_decimals', '0', '2018-10-17 03:01:59', '2018-10-17 03:01:59'),
(6, 'product_activation', '1', '2018-10-28 01:38:37', '2018-11-03 06:10:45'),
(7, 'vendor_system_activation', '1', '2018-10-28 07:44:16', '2018-11-03 06:10:51'),
(8, 'show_vendors', '1', '2018-10-28 07:44:47', '2018-10-28 01:46:34'),
(9, 'paypal_payment', '1', '2018-10-28 07:45:16', '2018-10-28 01:46:40'),
(10, 'stripe_payment', '1', '2018-10-28 07:45:47', '2018-11-03 06:10:59'),
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
(8, 'Men\'s clothing', 'uploads/ae4aNYkbh5zqRvvryc3vimjPOuoAMMnRWShUuods.jpeg', 'uploads/dWBFvWcVSE7kkfdw3HWxbp72ok2Xjj4JXv5wBYLa.jpeg', '2018-11-06 07:53:08', '2018-11-06 01:53:08'),
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
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'IndianRed', '#CD5C5C', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(2, 'LightCoral', '#F08080', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(3, 'Salmon', '#FA8072', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(4, 'DarkSalmon', '#E9967A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(5, 'LightSalmon', '#FFA07A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(6, 'Crimson', '#DC143C', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(7, 'Red', '#FF0000', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(8, 'FireBrick', '#B22222', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(9, 'DarkRed', '#8B0000', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(10, 'Pink', '#FFC0CB', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(11, 'LightPink', '#FFB6C1', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(12, 'HotPink', '#FF69B4', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(13, 'DeepPink', '#FF1493', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(14, 'MediumVioletRed', '#C71585', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(15, 'PaleVioletRed', '#DB7093', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(16, 'LightSalmon', '#FFA07A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(17, 'Coral', '#FF7F50', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(18, 'Tomato', '#FF6347', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(19, 'OrangeRed', '#FF4500', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(20, 'DarkOrange', '#FF8C00', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(21, 'Orange', '#FFA500', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(22, 'Gold', '#FFD700', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(23, 'Yellow', '#FFFF00', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(24, 'LightYellow', '#FFFFE0', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(25, 'LemonChiffon', '#FFFACD', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(26, 'LightGoldenrodYellow', '#FAFAD2', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(27, 'PapayaWhip', '#FFEFD5', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(28, 'Moccasin', '#FFE4B5', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(29, 'PeachPuff', '#FFDAB9', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(30, 'PaleGoldenrod', '#EEE8AA', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(31, 'Khaki', '#F0E68C', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(32, 'DarkKhaki', '#BDB76B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(33, 'Lavender', '#E6E6FA', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(34, 'Thistle', '#D8BFD8', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(35, 'Plum', '#DDA0DD', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(36, 'Violet', '#EE82EE', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(37, 'Orchid', '#DA70D6', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(38, 'Fuchsia', '#FF00FF', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(39, 'Magenta', '#FF00FF', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(40, 'MediumOrchid', '#BA55D3', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(41, 'MediumPurple', '#9370DB', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(42, 'Amethyst', '#9966CC', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(43, 'BlueViolet', '#8A2BE2', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(44, 'DarkViolet', '#9400D3', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(45, 'DarkOrchid', '#9932CC', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(46, 'DarkMagenta', '#8B008B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(47, 'Purple', '#800080', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(48, 'Indigo', '#4B0082', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(49, 'SlateBlue', '#6A5ACD', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(50, 'DarkSlateBlue', '#483D8B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(51, 'MediumSlateBlue', '#7B68EE', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(52, 'GreenYellow', '#ADFF2F', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(53, 'Chartreuse', '#7FFF00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(54, 'LawnGreen', '#7CFC00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(55, 'Lime', '#00FF00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(56, 'LimeGreen', '#32CD32', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(57, 'PaleGreen', '#98FB98', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(58, 'LightGreen', '#90EE90', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(59, 'MediumSpringGreen', '#00FA9A', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(60, 'SpringGreen', '#00FF7F', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(61, 'MediumSeaGreen', '#3CB371', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(62, 'SeaGreen', '#2E8B57', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(63, 'ForestGreen', '#228B22', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(64, 'Green', '#008000', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(65, 'DarkGreen', '#006400', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(66, 'YellowGreen', '#9ACD32', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(67, 'OliveDrab', '#6B8E23', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(68, 'Olive', '#808000', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(69, 'DarkOliveGreen', '#556B2F', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(70, 'MediumAquamarine', '#66CDAA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(71, 'DarkSeaGreen', '#8FBC8F', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(72, 'LightSeaGreen', '#20B2AA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(73, 'DarkCyan', '#008B8B', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(74, 'Teal', '#008080', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(75, 'Aqua', '#00FFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(76, 'Cyan', '#00FFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(77, 'LightCyan', '#E0FFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(78, 'PaleTurquoise', '#AFEEEE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(79, 'Aquamarine', '#7FFFD4', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(80, 'Turquoise', '#40E0D0', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(81, 'MediumTurquoise', '#48D1CC', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(82, 'DarkTurquoise', '#00CED1', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(83, 'CadetBlue', '#5F9EA0', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(84, 'SteelBlue', '#4682B4', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(85, 'LightSteelBlue', '#B0C4DE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(86, 'PowderBlue', '#B0E0E6', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(87, 'LightBlue', '#ADD8E6', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(88, 'SkyBlue', '#87CEEB', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(89, 'LightSkyBlue', '#87CEFA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(90, 'DeepSkyBlue', '#00BFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(91, 'DodgerBlue', '#1E90FF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(92, 'CornflowerBlue', '#6495ED', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(93, 'MediumSlateBlue', '#7B68EE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(94, 'RoyalBlue', '#4169E1', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(95, 'Blue', '#0000FF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(96, 'MediumBlue', '#0000CD', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(97, 'DarkBlue', '#00008B', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(98, 'Navy', '#000080', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(99, 'MidnightBlue', '#191970', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(100, 'Cornsilk', '#FFF8DC', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(101, 'BlanchedAlmond', '#FFEBCD', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(102, 'Bisque', '#FFE4C4', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(103, 'NavajoWhite', '#FFDEAD', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(104, 'Wheat', '#F5DEB3', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(105, 'BurlyWood', '#DEB887', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(106, 'Tan', '#D2B48C', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(107, 'RosyBrown', '#BC8F8F', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(108, 'SandyBrown', '#F4A460', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(109, 'Goldenrod', '#DAA520', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(110, 'DarkGoldenrod', '#B8860B', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(111, 'Peru', '#CD853F', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(112, 'Chocolate', '#D2691E', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(113, 'SaddleBrown', '#8B4513', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(114, 'Sienna', '#A0522D', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(115, 'Brown', '#A52A2A', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(116, 'Maroon', '#800000', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(117, 'White', '#FFFFFF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(118, 'Snow', '#FFFAFA', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(119, 'Honeydew', '#F0FFF0', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(120, 'MintCream', '#F5FFFA', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(121, 'Azure', '#F0FFFF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(122, 'AliceBlue', '#F0F8FF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(123, 'GhostWhite', '#F8F8FF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(124, 'WhiteSmoke', '#F5F5F5', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(125, 'Seashell', '#FFF5EE', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(126, 'Beige', '#F5F5DC', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(127, 'OldLace', '#FDF5E6', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(128, 'FloralWhite', '#FFFAF0', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(129, 'Ivory', '#FFFFF0', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(130, 'AntiqueWhite', '#FAEBD7', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(131, 'Linen', '#FAF0E6', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(132, 'LavenderBlush', '#FFF0F5', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(133, 'MistyRose', '#FFE4E1', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(134, 'Gainsboro', '#DCDCDC', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(135, 'LightGrey', '#D3D3D3', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(136, 'Silver', '#C0C0C0', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(137, 'DarkGray', '#A9A9A9', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(138, 'Gray', '#808080', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(139, 'DimGray', '#696969', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(140, 'LightSlateGray', '#778899', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(141, 'SlateGray', '#708090', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(142, 'DarkSlateGray', '#2F4F4F', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(143, 'Black', '#000000', '2018-11-05 02:12:30', '2018-11-05 02:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `code` varchar(2) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'SS', 'South Sudan'),
(203, 'ES', 'Spain'),
(204, 'LK', 'Sri Lanka'),
(205, 'SH', 'St. Helena'),
(206, 'PM', 'St. Pierre and Miquelon'),
(207, 'SD', 'Sudan'),
(208, 'SR', 'Suriname'),
(209, 'SJ', 'Svalbard and Jan Mayen Islands'),
(210, 'SZ', 'Swaziland'),
(211, 'SE', 'Sweden'),
(212, 'CH', 'Switzerland'),
(213, 'SY', 'Syrian Arab Republic'),
(214, 'TW', 'Taiwan'),
(215, 'TJ', 'Tajikistan'),
(216, 'TZ', 'Tanzania, United Republic of'),
(217, 'TH', 'Thailand'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad and Tobago'),
(222, 'TN', 'Tunisia'),
(223, 'TR', 'Turkey'),
(224, 'TM', 'Turkmenistan'),
(225, 'TC', 'Turks and Caicos Islands'),
(226, 'TV', 'Tuvalu'),
(227, 'UG', 'Uganda'),
(228, 'UA', 'Ukraine'),
(229, 'AE', 'United Arab Emirates'),
(230, 'GB', 'United Kingdom'),
(231, 'US', 'United States'),
(232, 'UM', 'United States minor outlying islands'),
(233, 'UY', 'Uruguay'),
(234, 'UZ', 'Uzbekistan'),
(235, 'VU', 'Vanuatu'),
(236, 'VA', 'Vatican City State'),
(237, 'VE', 'Venezuela'),
(238, 'VN', 'Vietnam'),
(239, 'VG', 'Virgin Islands (British)'),
(240, 'VI', 'Virgin Islands (U.S.)'),
(241, 'WF', 'Wallis and Futuna Islands'),
(242, 'EH', 'Western Sahara'),
(243, 'YE', 'Yemen'),
(244, 'ZR', 'Zaire'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe'),
(247, 'AF', 'Afghanistan'),
(248, 'AL', 'Albania'),
(249, 'DZ', 'Algeria'),
(250, 'DS', 'American Samoa'),
(251, 'AD', 'Andorra'),
(252, 'AO', 'Angola'),
(253, 'AI', 'Anguilla'),
(254, 'AQ', 'Antarctica'),
(255, 'AG', 'Antigua and Barbuda'),
(256, 'AR', 'Argentina'),
(257, 'AM', 'Armenia'),
(258, 'AW', 'Aruba'),
(259, 'AU', 'Australia'),
(260, 'AT', 'Austria'),
(261, 'AZ', 'Azerbaijan'),
(262, 'BS', 'Bahamas'),
(263, 'BH', 'Bahrain'),
(264, 'BD', 'Bangladesh'),
(265, 'BB', 'Barbados'),
(266, 'BY', 'Belarus'),
(267, 'BE', 'Belgium'),
(268, 'BZ', 'Belize'),
(269, 'BJ', 'Benin'),
(270, 'BM', 'Bermuda'),
(271, 'BT', 'Bhutan'),
(272, 'BO', 'Bolivia'),
(273, 'BA', 'Bosnia and Herzegovina'),
(274, 'BW', 'Botswana'),
(275, 'BV', 'Bouvet Island'),
(276, 'BR', 'Brazil'),
(277, 'IO', 'British Indian Ocean Territory'),
(278, 'BN', 'Brunei Darussalam'),
(279, 'BG', 'Bulgaria'),
(280, 'BF', 'Burkina Faso'),
(281, 'BI', 'Burundi'),
(282, 'KH', 'Cambodia'),
(283, 'CM', 'Cameroon'),
(284, 'CA', 'Canada'),
(285, 'CV', 'Cape Verde'),
(286, 'KY', 'Cayman Islands'),
(287, 'CF', 'Central African Republic'),
(288, 'TD', 'Chad'),
(289, 'CL', 'Chile'),
(290, 'CN', 'China'),
(291, 'CX', 'Christmas Island'),
(292, 'CC', 'Cocos (Keeling) Islands'),
(293, 'CO', 'Colombia'),
(294, 'KM', 'Comoros'),
(295, 'CG', 'Congo'),
(296, 'CK', 'Cook Islands');

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
(27, 'Taka', '৳', 84.50000, 1, 'BDT', '2018-10-09 11:35:08', '2018-11-03 06:13:02');

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
(1, 8, '2018-10-17 02:35:55', '2018-10-17 02:35:55'),
(2, 17, '2018-11-01 04:52:33', '2018-11-01 04:52:33'),
(3, 18, '2018-11-07 05:20:57', '2018-11-07 05:20:57');

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
  `choice_options` text,
  `colors` text,
  `variations` text NOT NULL,
  `todays_deal` int(11) NOT NULL DEFAULT '0',
  `published` int(11) NOT NULL DEFAULT '0',
  `featured` int(11) NOT NULL DEFAULT '0',
  `current_stock` int(10) NOT NULL DEFAULT '0',
  `unit` varchar(20) NOT NULL,
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

INSERT INTO `products` (`id`, `name`, `added_by`, `user_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `brand_id`, `photos`, `thumbnail_img`, `featured_img`, `flash_deal_img`, `video_provider`, `video_link`, `tags`, `description`, `unit_price`, `purchase_price`, `choice_options`, `colors`, `variations`, `todays_deal`, `published`, `featured`, `current_stock`, `unit`, `discount`, `discount_type`, `tax`, `tax_type`, `slug`, `created_at`, `updated_at`) VALUES
(7, 'Brandon Allen', 'admin', 1, 7, 4, 5, 2, '[\"uploads\\/OQcGouo2SRyHNtIKShdEkQYKYg060Wy6NDwFvQzq.jpeg\"]', 'uploads/zqfa562pIYzK1sLRkmUVTvSRvXkS40Pz09kElzgV.png', 'uploads/GGFIKYTfvhDQ3Vs2OcE1dvtDzwAJX6Ogm6lUdeqd.png', 'uploads/pdns0VNucRbEW4bm4bWAY8uEK1I9Bmxs0x7PWbNx.png', 'youtube', 'https://www.youtube.com/watch?v=5hFd6zGkxLE', '[\"aaaa,bbbb\"]', NULL, 400.00, 340.00, '[{\"name\":\"choice_0\",\"title\":\"Size\",\"options\":[\"S\",\"M\"]}]', '[\"#000000\",\"#0000FF\",\"#FF0000\"]', '{\"Black-S\":{\"price\":\"500\",\"sku\":\"BA-Black-S\",\"qty\":\"10\"},\"Black-M\":{\"price\":\"400\",\"sku\":\"BA-Black-M\",\"qty\":\"10\"},\"Blue-S\":{\"price\":\"380\",\"sku\":\"BA-Blue-S\",\"qty\":\"10\"},\"Blue-M\":{\"price\":\"400\",\"sku\":\"BA-Blue-M\",\"qty\":\"10\"},\"Red-S\":{\"price\":\"400\",\"sku\":\"BA-Red-S\",\"qty\":\"10\"},\"Red-M\":{\"price\":\"400\",\"sku\":\"BA-Red-M\",\"qty\":\"10\"}}', 0, 0, 0, 0, 'PC', 10.00, 'amount', 10.00, 'amount', 'Brandon-Allen-oKFHd', '2018-11-05 06:22:11', '2018-11-08 03:01:53'),
(11, 'Kelly Strickland', 'admin', 1, 7, 3, 12, 15, '[\"uploads\\/OQcGouo2SRyHNtIKShdEkQYKYg060Wy6NDwFvQzq.jpeg\"]', 'uploads/khae9EVNwywxcELFPw28WjxAcZCoEGbO81kbV21P.png', 'uploads/GZ6PW14G2rYGsZMypwfuxPLX9SPs5Hsjceivq2Wq.png', 'uploads/NxEPzuctrxkSXIC4j8AugrAv39uZQkwYbLDm8xgh.png', 'youtube', 'https://www.youtube.com/watch?v=5hFd6zGkxLE', '[\"Qui distinctio Sit eaque totam similique quia nulla similique quis animi\"]', NULL, 900.00, 870.00, '[{\"name\":\"choice_0\",\"title\":\"Size\",\"options\":[\"Small\",\"Large\"]}]', '[\"#9966CC\",\"#00FFFF\",\"#0000FF\",\"#00FFFF\"]', '{\"Amethyst-Small\":{\"price\":\"700\",\"sku\":\"KS-Amethyst-Small\",\"qty\":\"10\"},\"Amethyst-Large\":{\"price\":\"900\",\"sku\":\"KS-Amethyst-Large\",\"qty\":\"10\"},\"Aqua-Small\":{\"price\":\"800\",\"sku\":\"KS-Aqua-Small\",\"qty\":\"10\"},\"Aqua-Large\":{\"price\":\"900\",\"sku\":\"KS-Aqua-Large\",\"qty\":\"10\"},\"Blue-Small\":{\"price\":\"900\",\"sku\":\"KS-Blue-Small\",\"qty\":\"10\"},\"Blue-Large\":{\"price\":\"900\",\"sku\":\"KS-Blue-Large\",\"qty\":\"10\"}} ', 0, 0, 0, 0, 'PC', 100.00, 'amount', 80.00, 'amount', 'Kelly-Strickland-cYqur', '2018-11-05 06:40:17', '2018-11-08 03:02:11'),
(12, 'Casual Shirt Slim Fit', 'admin', 1, 8, 7, 13, 7, '[\"uploads\\/OQcGouo2SRyHNtIKShdEkQYKYg060Wy6NDwFvQzq.jpeg\"]', NULL, 'uploads/Mbm40lTUKaKTQ2PaZgx6WR4V3Xfr0XK4rawNWSy7.png', 'uploads/DddxkbGm7kQ2NauNxrgoyIhuPEFZH36mz2TDt2Ok.png', 'youtube', 'https://www.youtube.com/watch?v=5hFd6zGkxLE', '[\"Shirt,Casual\"]', NULL, 80.00, 75.00, '[{\"name\":\"choice_0\",\"title\":\"Size\",\"options\":[\"Small\",\"Medium\",\"Large\",\"Extra Large\"]},{\"name\":\"choice_1\",\"title\":\"Fabric\",\"options\":[\"Cotton\",\"Semi-Cotton\"]}]', '[\"#000000\",\"#0000FF\"]', '{\"Black-Small-Cotton\":{\"price\":\"80\",\"sku\":\"CSSF-Black-Small-Cotton\",\"qty\":\"10\"},\"Black-Small-Semi-Cotton\":{\"price\":\"80\",\"sku\":\"CSSF-Black-Small-Semi-Cotton\",\"qty\":\"10\"},\"Black-Medium-Cotton\":{\"price\":\"80\",\"sku\":\"CSSF-Black-Medium-Cotton\",\"qty\":\"10\"},\"Black-Medium-Semi-Cotton\":{\"price\":\"80\",\"sku\":\"CSSF-Black-Medium-Semi-Cotton\",\"qty\":\"10\"},\"Black-Large-Cotton\":{\"price\":\"80\",\"sku\":\"CSSF-Black-Large-Cotton\",\"qty\":\"10\"},\"Black-Large-Semi-Cotton\":{\"price\":\"80\",\"sku\":\"CSSF-Black-Large-Semi-Cotton\",\"qty\":\"10\"},\"Black-Extra Large-Cotton\":{\"price\":null,\"sku\":null,\"qty\":null},\"Black-Extra Large-Semi-Cotton\":{\"price\":null,\"sku\":null,\"qty\":null},\"Blue-Small-Cotton\":{\"price\":\"80\",\"sku\":\"CSSF-Blue-Small-Cotton\",\"qty\":\"10\"},\"Blue-Small-Semi-Cotton\":{\"price\":\"80\",\"sku\":\"CSSF-Blue-Small-Semi-Cotton\",\"qty\":\"10\"},\"Blue-Medium-Cotton\":{\"price\":\"80\",\"sku\":\"CSSF-Blue-Medium-Cotton\",\"qty\":\"10\"},\"Blue-Medium-Semi-Cotton\":{\"price\":\"80\",\"sku\":\"CSSF-Blue-Medium-Semi-Cotton\",\"qty\":\"10\"},\"Blue-Large-Cotton\":{\"price\":\"80\",\"sku\":\"CSSF-Blue-Large-Cotton\",\"qty\":\"10\"},\"Blue-Large-Semi-Cotton\":{\"price\":\"80\",\"sku\":\"CSSF-Blue-Large-Semi-Cotton\",\"qty\":\"10\"},\"Blue-Extra Large-Cotton\":{\"price\":null,\"sku\":null,\"qty\":null},\"Blue-Extra Large-Semi-Cotton\":{\"price\":null,\"sku\":null,\"qty\":null}}', 0, 0, 0, 0, 'PC', 0.00, 'amount', 0.00, 'amount', 'Casual-Shirt-Slim-Fit-GHrDu', '2018-11-06 01:59:37', '2018-11-06 05:48:23'),
(13, 'Casual Shirt', 'seller', 3, 8, 7, 13, 7, '[\"uploads\\/L95p4MtXv65BqUOxJbNAhLdhFds7xEUxfkDnovir.jpeg\"]', 'uploads/RHQiM4mGoGCkz72LPxKx0rwk41085BwxYZtO0RGI.png', 'uploads/ML928PUJuPZkdMDaiauXfRTpkY0Hn0YZ7kOG3jsw.png', 'uploads/grmztPglL37hYxYWcFM6u7uol80X31E9Nm5QYTB4.png', 'youtube', 'https://www.youtube.com/watch?v=5hFd6zGkxLE', '[\"shirt\"]', '<p><b><u>Thanks</u></b></p>', 454.00, 45.00, '[{\"name\":\"choice_0\",\"title\":\"Size\",\"options\":[\"S\",\"M\",\"L\"]}]', '[\"#000000\",\"#0000FF\"]', '{\"Black-S\":{\"price\":\"400\",\"sku\":\"CS-Black-S\",\"qty\":\"10\"},\"Black-M\":{\"price\":\"455\",\"sku\":\"CS-Black-M\",\"qty\":\"10\"},\"Black-L\":{\"price\":\"454\",\"sku\":\"CS-Black-L\",\"qty\":\"10\"},\"Blue-S\":{\"price\":\"454\",\"sku\":\"CS-Blue-S\",\"qty\":\"10\"},\"Blue-M\":{\"price\":\"454\",\"sku\":\"CS-Blue-M\",\"qty\":\"10\"},\"Blue-L\":{\"price\":\"454\",\"sku\":\"CS-Blue-L\",\"qty\":\"100\"}}', 0, 0, 0, 0, 'PC', 10.00, 'amount', 10.00, 'amount', 'Tarik-Stewart-evAKZ', '2018-11-07 02:44:28', '2018-11-08 06:53:37'),
(14, 'Men Striped Tuxedo Shirt', 'seller', 3, 8, 7, 13, 7, '[\"uploads\\/i1mEnQzQI5iMblTAxMykji8T0aLa58QRyMKauXkX.jpeg\",\"uploads\\/ZeXOZEd7wgsGjd9GyfsWEcNuh0NVe88pyTjtA8uA.jpeg\"]', 'uploads/AHhiU3I8eDfiaKl0tZ0xRb8bh5BmWrtbFjcOMppA.jpeg', 'uploads/LwyWKF0Q0vTdWOpvkMUY7VOULfsLaTFWVJmCQKNJ.jpeg', 'uploads/qDt1kyCTSN3JcY2EADaBTrYrzAR5TOMQIpjwxEqo.jpeg', 'youtube', 'https://www.youtube.com/watch?v=H1EB7SH4ZqM', '[\"shirt,polo\"]', '<div>Item specifics<br></div><ul class=\"product-property-list util-clearfix\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style-position: initial; list-style-image: initial; zoom: 1;\"><li class=\"property-item\" id=\"product-prop-2\" data-attr=\"201722811\" data-title=\"KK GEEZER\" style=\"margin: 0px; padding: 5px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 16px; vertical-align: baseline; position: relative; width: 465px; float: left; list-style: none;\"><span class=\"propery-title\" data-spm-anchor-id=\"2114.12010108.0.i6.374e5a36efuhGS\" style=\"margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left;\">Brand Name:</span><span class=\"propery-des\" title=\"KK GEEZER\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left; max-width: 300px; overflow: hidden; text-overflow: ellipsis;\">KK GEEZER</span></li><li class=\"property-item\" id=\"product-prop-200000137\" data-attr=\"3236\" data-title=\"Shirts\" style=\"margin: 0px; padding: 5px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 16px; vertical-align: baseline; position: relative; width: 465px; float: left; list-style: none;\"><span class=\"propery-title\" style=\"margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left;\">Item Type:</span><span class=\"propery-des\" title=\"Shirts\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left; max-width: 300px; overflow: hidden; text-overflow: ellipsis;\">Shirts</span></li><li class=\"property-item\" id=\"product-prop-284\" data-attr=\"493\" data-title=\"Men\" style=\"margin: 0px; padding: 5px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 16px; vertical-align: baseline; position: relative; width: 465px; float: left; list-style: none;\"><span class=\"propery-title\" style=\"margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left;\">Gender:</span><span class=\"propery-des\" title=\"Men\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left; max-width: 300px; overflow: hidden; text-overflow: ellipsis;\">Men</span></li><li class=\"property-item\" id=\"product-prop-100007732\" data-attr=\"200001500\" data-title=\"Full\" style=\"margin: 0px; padding: 5px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 16px; vertical-align: baseline; position: relative; width: 465px; float: left; list-style: none;\"><span class=\"propery-title\" style=\"margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left;\">Sleeve Length(cm):</span><span class=\"propery-des\" title=\"Full\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left; max-width: 300px; overflow: hidden; text-overflow: ellipsis;\">Full</span></li><li class=\"property-item\" id=\"product-prop-200000449\" data-attr=\"100006586\" data-title=\"Dress Shirts\" data-spm-anchor-id=\"2114.12010108.0.i5.374e5a36efuhGS\" style=\"margin: 0px; padding: 5px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 16px; vertical-align: baseline; position: relative; width: 465px; float: left; list-style: none;\"><span class=\"propery-title\" style=\"margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left;\">Shirts Type:</span><span class=\"propery-des\" title=\"Dress Shirts\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left; max-width: 300px; overflow: hidden; text-overflow: ellipsis;\">Dress Shirts</span></li><li class=\"property-item\" id=\"product-prop-200000329\" data-attr=\"519\" data-title=\"Striped\" style=\"margin: 0px; padding: 5px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 16px; vertical-align: baseline; position: relative; width: 465px; float: left; list-style: none;\"><span class=\"propery-title\" style=\"margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left;\">Pattern Type:</span><span class=\"propery-des\" title=\"Striped\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left; max-width: 300px; overflow: hidden; text-overflow: ellipsis;\">Striped</span></li><li class=\"property-item\" id=\"product-prop-200000457\" data-attr=\"200003574\" data-title=\"Turn-down Collar\" style=\"margin: 0px; padding: 5px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 16px; vertical-align: baseline; position: relative; width: 465px; float: left; list-style: none;\"><span class=\"propery-title\" style=\"margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left;\">Collar:</span><span class=\"propery-des\" title=\"Turn-down Collar\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left; max-width: 300px; overflow: hidden; text-overflow: ellipsis;\">Turn-down Collar</span></li><li class=\"property-item\" id=\"product-prop-100002012\" data-attr=\"100006537\" data-title=\"Broadcloth\" style=\"margin: 0px; padding: 5px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 16px; vertical-align: baseline; position: relative; width: 465px; float: left; list-style: none;\"><span class=\"propery-title\" style=\"margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left;\">Fabric Type:</span><span class=\"propery-des\" title=\"Broadcloth\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left; max-width: 300px; overflow: hidden; text-overflow: ellipsis;\">Broadcloth</span></li><li class=\"property-item\" id=\"product-prop-326\" data-attr=\"1893\" data-title=\"Formal\" style=\"margin: 0px; padding: 5px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 16px; vertical-align: baseline; position: relative; width: 465px; float: left; list-style: none;\"><span class=\"propery-title\" style=\"margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left;\">Style:</span><span class=\"propery-des\" title=\"Formal\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left; max-width: 300px; overflow: hidden; text-overflow: ellipsis;\">Formal</span></li><li class=\"property-item\" id=\"product-prop-10\" data-attr=\"47\" data-title=\"Cotton\" style=\"margin: 0px; padding: 5px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 16px; vertical-align: baseline; position: relative; width: 465px; float: left; list-style: none;\"><span class=\"propery-title\" style=\"margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left;\">Material:</span><span class=\"propery-des\" title=\"Cotton\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left; max-width: 300px; overflow: hidden; text-overflow: ellipsis;\">Cotton</span></li><li class=\"property-item\" id=\"product-prop-200000306\" data-attr=\"200001125\" data-title=\"Single Breasted\" style=\"margin: 0px; padding: 5px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 16px; vertical-align: baseline; position: relative; width: 465px; float: left; list-style: none;\"><span class=\"propery-title\" style=\"margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left;\">Closure Type:</span><span class=\"propery-des\" title=\"Single Breasted\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left; max-width: 300px; overflow: hidden; text-overflow: ellipsis;\">Single Breasted</span></li><li class=\"property-item\" id=\"product-prop-200000362\" data-attr=\"200013017\" data-title=\"Regular\" style=\"margin: 0px; padding: 5px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 16px; vertical-align: baseline; position: relative; width: 465px; float: left; list-style: none;\"><span class=\"propery-title\" style=\"margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left;\">Sleeve Style:</span><span class=\"propery-des\" title=\"Regular\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left; max-width: 300px; overflow: hidden; text-overflow: ellipsis;\">Regular</span></li><li class=\"property-item\" id=\"product-prop-3\" data-attr=\"\" data-title=\"SY1899\" style=\"margin: 0px; padding: 5px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 16px; vertical-align: baseline; position: relative; width: 465px; float: left; list-style: none;\"><span class=\"propery-title\" style=\"margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left;\">Model Number:</span><span class=\"propery-des\" title=\"SY1899\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; float: left; max-width: 300px; overflow: hidden; text-overflow: ellipsis;\">SY1899</span></li><li class=\"property-item\" id=\"product-prop-\" data-attr=\"\" data-title=\"Commerce Leisure\" style=\"margin: 0px; padding: 5px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 16px; vertical-align: baseline; position: relative; width: 465px; float: left; list-style: none;\"><span class=\"propery-title\" style=\"font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; margin: 0px 3px 0px 0px; padding: 0px; border: 0px; vertical-align: baseline; float: left;\">Style:</span><span class=\"propery-des\" title=\"Commerce Leisure\" style=\"font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; float: left; max-width: 300px; overflow: hidden; text-overflow: ellipsis;\">Commerce Leisure</span></li></ul>', 20.99, 11.96, '[]', '[\"#F0F8FF\",\"#FAEBD7\",\"#00FFFF\",\"#00FFFF\"]', '{\"AliceBlue\":{\"price\":\"20.99\",\"sku\":\"MSTS-AliceBlue\",\"qty\":\"10\"},\"AntiqueWhite\":{\"price\":\"20.99\",\"sku\":\"MSTS-AntiqueWhite\",\"qty\":\"10\"},\"Aqua\":{\"price\":\"20.99\",\"sku\":\"MSTS-Aqua\",\"qty\":\"10\"}}', 0, 0, 0, 0, 'pc', 5.00, 'amount', 0.00, 'amount', 'Men-Striped-Tuxedo-Shirt-u70Ih', '2018-11-11 00:52:10', '2018-11-11 02:03:47'),
(15, 'Men Shirts', 'seller', 3, 8, 7, 13, 7, '[\"uploads\\/jckV7yL9FWHi3kV33RdMNlfOcpibmwWMqNsQck0N.jpeg\"]', 'uploads/EBehavfW4SH6rLz03fa3oDAe6epAnMfn7HDcpdLM.jpeg', 'uploads/90L7KUXtNTeKYr4B1IE2bz66TuT8TJKcgzfEEIw2.jpeg', 'uploads/N1KYwopzircLAFd4OK6rC8fDdfzv81hx39iQZANc.jpeg', 'youtube', 'https://www.youtube.com/watch?v=H1EB7SH4ZqM', '[\"shirt\"]', '<p>sddfghgjhkl</p>', 34.00, 21.00, '[{\"name\":\"choice_0\",\"title\":\"size\",\"options\":[\"m\",\"l\",\"xl\",\"xxl\"]}]', '[\"#9966CC\",\"#A52A2A\",\"#FFF8DC\"]', '{\"Amethyst-m\":{\"price\":\"34\",\"sku\":\"MS-Amethyst-m\",\"qty\":\"10\"},\"Amethyst-l\":{\"price\":\"34\",\"sku\":\"MS-Amethyst-l\",\"qty\":\"10\"},\"Amethyst-xl\":{\"price\":\"34\",\"sku\":\"MS-Amethyst-xl\",\"qty\":\"10\"},\"Amethyst-xxl\":{\"price\":\"34\",\"sku\":\"MS-Amethyst-xxl\",\"qty\":\"10\"},\"Brown-m\":{\"price\":\"34\",\"sku\":\"MS-Brown-m\",\"qty\":\"10\"},\"Brown-l\":{\"price\":\"34\",\"sku\":\"MS-Brown-l\",\"qty\":\"10\"},\"Brown-xl\":{\"price\":\"34\",\"sku\":\"MS-Brown-xl\",\"qty\":\"10\"},\"Brown-xxl\":{\"price\":\"34\",\"sku\":\"MS-Brown-xxl\",\"qty\":\"10\"},\"Cornsilk-m\":{\"price\":\"34\",\"sku\":\"MS-Cornsilk-m\",\"qty\":\"10\"},\"Cornsilk-l\":{\"price\":\"34\",\"sku\":\"MS-Cornsilk-l\",\"qty\":\"10\"},\"Cornsilk-xl\":{\"price\":\"34\",\"sku\":\"MS-Cornsilk-xl\",\"qty\":\"10\"},\"Cornsilk-xxl\":{\"price\":\"34\",\"sku\":\"MS-Cornsilk-xxl\",\"qty\":\"10\"}}', 0, 0, 0, 0, 'pc', 10.00, '2', 0.00, '1', 'Men-Shirts-23B39', '2018-11-11 02:10:51', '2018-11-11 02:10:51');

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
(6, 'Outwear & jackets', 8, 'uploads/FSqtkpSCQlDdkCfOizrQd1XpQ7bIlG94E7dDqpuI.jpeg', '2018-10-14 23:40:19', '2018-10-14 23:40:19'),
(7, 'Casual Wears', 8, 'uploads/H6U7LyNn5SJD8eTu0gRrzOaHfBx0gTNBPMeJM8ZX.jpeg', '2018-10-14 23:40:45', '2018-11-06 01:54:30'),
(8, 'Bottoms', 8, 'uploads/jWMsEN01p7KnDPQYnYLxfwc7edVdgBvENdZDNp6s.jpeg', '2018-10-14 23:41:32', '2018-10-14 23:41:32'),
(9, 'Wedding & Events', 8, 'uploads/5jtTozQajBWNyfzQ0ZojG6V0FNgOFgXQtQ9m7E1F.jpeg', '2018-10-14 23:42:43', '2018-10-14 23:42:43'),
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `sub_category_id`, `name`, `banner`, `brands`, `created_at`, `updated_at`) VALUES
(5, 4, 'Private Cars', 'uploads/sctkUXlTXuERQkNmhtXbFVeNwGSxeUIyL5OJ6Pnn.jpeg', '[\"2\",\"3\"]', '2018-09-30 20:31:47', '2018-10-03 22:59:09'),
(6, 4, 'Clio Baxter', 'uploads/RdBo95yeom3lO45zQ8I7qysodhtOHPbtF6RWJkwN.jpeg', '[\"2\",\"3\"]', '2018-10-02 23:19:27', '2018-10-03 22:59:30'),
(9, 12, 'jackets  t-ahirt', 'uploads/IgX5hzUYEJwB0kepD3TztTkkUOgUoBwaXT3Rd86W.jpeg', '[\"7\"]', '2018-10-15 00:04:36', '2018-10-15 00:04:36'),
(10, 9, 'Hats & Belts', 'uploads/7FyQgJOyVw2UCl7tYQmj3PsVFSSIIVz6tkLEphwm.jpeg', '[\"5\"]', '2018-10-15 00:06:08', '2018-10-15 00:06:08'),
(12, 3, 'Test', 'uploads/Axq44o3nPuJKEjrdHCCX8ZqL22QEQsKe5ZZS5XRj.jpeg', '[\"15\"]', '2018-10-22 03:20:37', '2018-10-22 03:20:37'),
(13, 7, 'Shirts', 'uploads/e8zAZurwMos8ohOZNIOnBYbwrP3NuGbda09anSEo.jpeg', '[\"7\"]', '2018-11-06 01:56:56', '2018-11-06 01:56:56');

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
  `address` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `provider_id`, `user_type`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `avatar`, `avatar_original`, `address`, `country`, `city`, `postal_code`, `phone`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin', 'Admin', 'admin@example.com', NULL, '$2y$10$gvCDdhUvi/0N0cKo3pWrdOyx46qzfOLCJ/6D8TkADgChDEDlI7RHm', 'euoMVq0jlLippUMD3ucYaA1avSUwA8d2GRdff90tdwWCxayHFx2VA1o3CCa5', 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg?sz=50', 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg', '', NULL, NULL, NULL, NULL, '2018-09-26 02:08:48', '2018-09-26 02:08:48'),
(3, NULL, 'seller', 'Seller', 'seller@example.com', NULL, '$2y$10$eUKRlkmm2TAug75cfGQ4i.WoUbcJ2uVPqUlVkox.cv4CCyGEIMQEm', 'fcZeHIlEX4RcKcMNefHaEnDEkxAGKPxZrDT1JJTPaY4EhobMZjdZ3tlk3EtF', 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg?sz=50', 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg', 'Uttara', 'BD', 'Dhaka', '1230', '01642954885', '2018-10-07 04:42:57', '2018-11-12 03:58:48'),
(8, NULL, 'customer', 'Customer', 'customer@example.com', NULL, '$2y$10$0NbLnWt7DAbrhqZrFZ7Nw.tvE.Jnff2Il/jrdgtqBiblKpgGwLyom', 'L6JGodOT4Z2u8RZ6id5YqdbhHq38fh5u1IdesJX5CjReyWdxyiNN3SIyUXet', 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg?sz=50', 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg', NULL, NULL, NULL, NULL, NULL, '2018-10-17 06:26:52', '2018-10-17 06:26:52'),
(17, '113510401900359638362', 'customer', 'Mehedi Hasan', 'mehedi.iitdu@gmail.com', NULL, NULL, '0q1qtndIw7cEjIZBYxv8TIjsK0oobA7Np84SGvljAGgj22r8elsgRgQLW7yj', 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg?sz=50', 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg', NULL, NULL, NULL, NULL, NULL, '2018-11-01 04:52:33', '2018-11-01 04:52:33'),
(18, '103887660140114486052', 'customer', 'Md. Mehedi Hasan', 'bsse0607@iit.du.ac.bd', NULL, NULL, 'QWxGkOrlVIxrABQ2Qj0xTPsVoZKgNc4OsRNGKdgYp3D7BaUeMJiNqia8otbx', 'https://lh4.googleusercontent.com/-xw_DuhMKF9k/AAAAAAAAAAI/AAAAAAAAACw/g4RUSLrD2Y0/photo.jpg?sz=50', 'https://lh4.googleusercontent.com/-xw_DuhMKF9k/AAAAAAAAAAI/AAAAAAAAACw/g4RUSLrD2Y0/photo.jpg', NULL, NULL, NULL, NULL, NULL, '2018-11-07 05:20:57', '2018-11-07 05:20:57');

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
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
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
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2024 at 05:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bidding_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `bid_amount` float NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=bid,2=confirmed,3=cancelled',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `user_id`, `product_id`, `bid_amount`, `status`, `date_created`) VALUES
(1, 1, 20, 50, 1, '2024-02-04 16:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `icon` varchar(225) NOT NULL DEFAULT 'no-img.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`) VALUES
(1, 'Household Stuff', 'Household Stuff.png'),
(2, 'Accessories', 'Accessories.jpg'),
(3, 'Digital Art', 'Digital Art.jfif'),
(4, 'Antiques', 'Antiques.jpg'),
(5, 'Electronics', 'Electronics.png'),
(6, 'Fashion', 'Fashion.jpg'),
(7, 'Vehicles', 'Vehicles.png');

-- --------------------------------------------------------

--
-- Table structure for table `contactus_form`
--

CREATE TABLE `contactus_form` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `img_fname` text NOT NULL,
  `start_bid` float NOT NULL,
  `regular_price` float NOT NULL,
  `bid_start_datetime` datetime DEFAULT NULL,
  `bid_end_datetime` datetime NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `userid`, `img_fname`, `start_bid`, `regular_price`, `bid_start_datetime`, `bid_end_datetime`, `date_created`) VALUES
(1, 7, 'Tyota Horizon X: Elevate', '<p>Tyota Horizon X -This exceptional car seamlessly blends cutting-edge \r\ntechnology, unparalleled performance, and sophisticated design, offering\r\n a driving experience like no other.</p>', 1, '7-1702300311.jpg,4-1702300198.jpg,2-1702300198.jpg,3-1702300198.jpg', 500, 500, '2024-02-04 15:44:00', '2024-02-10 00:00:00', '2024-02-04 15:44:34'),
(2, 5, 'SwiftSync Precision Wireless Mouse', '<p>SwiftSync Precision Wireless Mouse, a technological marvel that \r\nredefines the way you navigate your digital world. Seamlessly blending \r\nprecision.</p>', 1, '5-1702303074.jpg,2-1702303074.jpg,1-1702303074.jpg,8-1702303074.jpg', 300, 298, '2024-02-01 00:00:00', '2024-02-13 00:00:00', '2024-02-04 15:46:51'),
(3, 6, 'Elegance Defined: Serenity Chic Leather', '<p>Serenity Chic Leather Tote, a sophisticated and versatile accessory \r\ndesigned to complement the lifestyle of the modern woman. Crafted with \r\nmeticulous .</p>', 1, '7-1702301599.jpg,7-1702301597.jpg', 501, 497, '2024-02-02 00:00:00', '2024-02-29 00:00:00', '2024-02-04 15:48:48'),
(4, 6, 'Creative Fashion Riboon Digital Watch Little Elegant ', '<p>Transform your living space into a haven of comfort and style with our \r\ncurated collection of household stuffs. From everyday essentials to \r\ninnovative gadgets, we have everything you need to make your home a \r\nsanctuary of functionality and aesthetics.</p>', 1, 'prod-gallery3-1683461599-1703665324.png,prod-gallery2-1683454862-1703665324.png,prod-gallery3-1683461599.png', 31, 31, '2024-02-17 00:00:00', '2024-02-29 00:00:00', '2024-02-04 15:50:42'),
(5, 5, 'Cyber Security', '\r\n                        <p class=\"para\">Ø¹Ø§ÙŠØ²ØªØ§Ø®Ø¯ Ø´Ù‡Ø§Ø¯Ø§Øª Ø§Ù„ Cyber Security Ø§Ù„Ø¯ÙˆÙ„ÙŠØ© ØŸ \r\nØ¯Ù‡ Ø§Ù„ÙØ±Ù‚ Ø¨ÙŠÙ†Ø§ ÙˆØ¨ÙŠÙ† Ø§ÙŠ Ù…ÙƒØ§Ù† ØªØ§Ù†ÙŠ ÙˆÙ‡Ùˆ Ø£Ù†Ù†Ø§ Ø¨Ù†Ø®Ù„ÙŠÙƒ Ù…Ø¤Ù‡Ù„ Ø§Ù†Ùƒ ØªØ§Ø®Ø¯ Ø´Ù‡Ø§Ø¯Ø© Ø§Ù„Ø³Ø§ÙŠØ¨Ø± Ø³ÙŠÙƒÙˆØ±ØªÙŠ Ø§Ù„Ø¯ÙˆÙ„ÙŠØ© \r\nÙ…Ø´ Ù…Ø¬Ø±Ø¯ Ø´Ø±Ø­ Ù„Ù…Ù†Ù‡Ø¬ ÙˆØ®Ù„Ø§Øµ \r\nÙ„Ø§ Ø£Ø­Ù†Ø§ Ø¨Ù†Ø®Ù„ÙŠÙƒ ÙØ§Ù‡Ù… ÙˆÙ‚Ø§Ø¯Ø± ØªØ§Ø®Ø¯ Ø§ÙŠ Ø´Ù‡Ø§Ø¯Ø© \r\nÙˆØ¯ÙŠ Ø´Ù‡Ø§Ø¯Ø§Øª\r\n Ù…/ Ø§Ø­Ù…Ø¯ Ø­Ø³Ù† Ù‚Ø¯Ø± ÙŠØ­ØµÙ„ ÙŠØ¯Ø®Ù„ Ø§Ù„Ø§Ù…ØªØ­Ø§Ù† ÙˆÙŠÙ†Ø¬Ø­ Ø§Ù„Ø­Ù…Ø¯Ù„Ù„Ù‡ Ø¨ØªÙÙˆÙ‚ \r\nØ§Ø¹ØªÙ‚Ø¯ Ø§Ù†Ùƒ Ø¯Ù„ÙˆÙ‚ØªÙ‰ Ù‚Ø§Ø¯Ø± Ø§Ù†Ùƒ ØªØ®ØªØ§Ø± Ø§Ù„Ù…ÙƒØ§Ù† Ø§Ù„Ù„ÙŠ ØªØ¨Ø¯Ø£ ÙÙŠÙ‡ ÙˆÙˆØ§Ø«Ù‚ ÙˆÙ…Ø·Ù…Ù† \r\nÙˆØ§Ø·Ù…Ù† Ø§Ø­Ù†Ø§ Ø¨Ù†Ø¨Ø¯Ø§ Ù…Ø¹Ø§Ùƒ Ù…Ù† Ø§Ù„ØµÙØ± Ø®Ø§Ù„Øµ\r\nÙ…Ø³ØªÙ†ÙŠ Ø§ÙŠØ© Ø§Ø­Ø¬Ø² Ù…ÙƒØ§Ù†Ùƒ Ø¯Ù„ÙˆÙ‚ØªÙŠ\r\nÙÙŠØ¯ÙŠÙˆ Ù…/Ø§Ø­Ù…Ø¯ Ø¹Ù† Ø§Ù„Ø´Ù‡Ø§Ø¯Ø§Øª</p><p></p>', 1, '406574210_334227289386899_426073511097545459_n-1706618189.jpg,406574210_334227289386899_426073511097545459_n-1706618189.jpg', 2601, 2601, '2024-02-19 00:00:00', '2024-02-29 00:00:00', '2024-02-04 15:54:26'),
(20, 6, 'Poutsicle Hydrating Lip Stain.', 'Aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos only placerat felis non aliquam.Mauris nec justo vitae ante auctor tol euismod sit amet Praesent commodo at massa eget suscipit. Utani vitae enim velit.', 2, 'Mask group3-1705242266.png,Mask group2-1705242266.png,Mask group1-1705242266.png,Mask group-1705242266.png', 32, 443, '2024-02-04 03:02:00', '2024-02-20 23:02:00', '2024-02-04 16:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `reporter_id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `explanation` text NOT NULL,
  `report_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'Bid-Based Functioning Platform', 'info@sample.comm', '+2347067325266', '1603344720_1602738120_pngtree-purple-hd-business-banner-image_5493.jpg', 'A web application on the Design and Implementation of a Bid-Based Functioning Platform');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=Admin,2=Subscriber',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `contact`, `address`, `type`, `date_created`) VALUES
(1, 'Super Admin', 'Administrator', 'e10adc3949ba59abbe56e057f20f883e', 'info@bidout.com', '+2347067325266', '007, Bidout Villa, Bidding Estate, Bidgeria.', 1, '2024-02-04 14:56:26'),
(2, 'Adeyemi Fodilulahi', 'horlyman', 'e10adc3949ba59abbe56e057f20f883e', 'horlymansoft@yahoo.com', '07067325266', 'Abeokuta, Ogun state, Nigeria', 2, '2024-02-04 15:57:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus_form`
--
ALTER TABLE `contactus_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contactus_form`
--
ALTER TABLE `contactus_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

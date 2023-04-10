-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 14, 2020 at 02:57 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(8) NOT NULL,
  `p_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `u_id` int(8) NOT NULL,
  `u_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(8) NOT NULL,
  `u_address` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `u_contact` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `p_id` (`p_id`),
  KEY `u_id` (`u_id`),
  KEY `p_name` (`p_name`),
  KEY `u_name` (`u_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `p_id`, `p_name`, `u_id`, `u_name`, `quantity`, `u_address`, `u_contact`) VALUES
(1, 1, 'YSL Jacket', 1, 'johny', 1, 'California', '34324143243'),
(3, 1, 'YSL Jacket', 2, 'admin', 1, 'Sydney', '6473758362');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(32) NOT NULL,
  `detail` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `price`, `detail`, `img`) VALUES
(1, 'YSL Jacket', 'YSL', 299, 'Black saint laurant jacket 2020', 'ysl-jacket.jpg'),
(2, 'Crop Trop', 'Talentless', 69, 'For new generation fashionista', 'womenshort.jpg'),
(4, 'Pink Hoodie', 'Pink Talent', 32332, 'asdfsaf', 'pink.jpg'),
(5, 'Black sleeve', 'long sleeve', 213, 'marketma ayp', 'sleeve.png'),
(7, 'Shadow Cloth', 'Shadow ', 3234, 'adsffsa', 'sleeve.png'),
(8, 'Beast Product', 'sdaf', 3234, 'adfaf', 'goldwatch.jpg'),
(9, 'Yellow TSHirt', 'ello', 345, 'This color suits the dirty fellows', 'yellowt.jpg'),
(10, 'Men White T-Shirt with print', 'Adidas', 782, 'smooth and quality clothes', 'tshirt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'buyer',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `role`) VALUES
(1, 'johny', '$2y$10$v9rF8ZMOtjRw43i3XSwz1ezLLDGtGgg9HewOdwMI/G3wOlj9AqhFm', '2020-04-17 17:42:21', 'buyer'),
(2, 'admin', '$2y$10$xJVDq3HjKeYFd3jqJU6XTuxXtjaK5sVYVtYE4BM4vh.UJpPC9JI6.', '2020-04-19 05:39:04', 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `p_name` FOREIGN KEY (`p_name`) REFERENCES `products` (`name`),
  ADD CONSTRAINT `prod_id` FOREIGN KEY (`p_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `u_id` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `u_name` FOREIGN KEY (`u_name`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

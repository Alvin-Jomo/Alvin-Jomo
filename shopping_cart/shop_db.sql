-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2023 at 08:13 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop_db`
--
CREATE DATABASE IF NOT EXISTS `shop_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shop_db`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `name` varchar(255) NOT NULL,
  `number` int(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `flat` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin_code` varchar(25) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product2`
--

CREATE TABLE IF NOT EXISTS `product2` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product2`
--

INSERT INTO `product2` (`id`, `name`, `price`, `image`) VALUES
(3, 'CHICKEN', '600', 'download (11).jpeg'),
(4, 'NYAMA CHOMA', '400', 'images (1).jpeg'),
(5, 'FISH', '330', 'download (10).jpeg'),
(6, 'EGGS', '480', 'images.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `product3`
--

CREATE TABLE IF NOT EXISTS `product3` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `product3`
--

INSERT INTO `product3` (`id`, `name`, `price`, `image`) VALUES
(6, 'FANTA ORANGE', '130', 'download (25).jpeg'),
(7, 'COCA-COLA', '130', 'download (23).jpeg'),
(8, 'COCA-COLA ', '150', 'download (24).jpeg'),
(9, 'SPRITE', '100', 'images (6).jpeg'),
(10, 'SPRITE', '365', 'download (29).jpeg'),
(11, 'STONEY', '30', 'download (28).jpeg'),
(12, 'STONEY', '80', 'download (27).jpeg'),
(13, 'FANTA KADOGO', '30', 'download (26).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `product4`
--

CREATE TABLE IF NOT EXISTS `product4` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product4`
--

INSERT INTO `product4` (`id`, `name`, `price`, `image`) VALUES
(3, 'CHEESE', '100', 'images (4).jpeg'),
(4, 'SILK', '130', 'images (5).jpeg'),
(5, 'DELAMERE', '140', 'download (20).jpeg'),
(6, 'LACTOSE', '156', 'download (22).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(6, 'MANAGU', '100', 'download (15).jpeg'),
(7, 'KUNDE', '60', 'download (16).jpeg'),
(8, 'SUKUMA', '40', 'download (12).jpeg'),
(9, 'CABBAGE', '60', 'download (14).jpeg'),
(11, 'MANGO', '30', 'images (3).jpeg'),
(12, 'PINNAPPLE', '130', 'download (18).jpeg'),
(13, 'WATER MELON', '200', 'download (19).jpeg'),
(14, 'BANANA', '130', 'download (17).jpeg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

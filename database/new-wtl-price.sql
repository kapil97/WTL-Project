-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2017 at 03:23 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wtl-price`
--
CREATE DATABASE IF NOT EXISTS `wtl-price` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wtl-price`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ProdID` int(11) NOT NULL,
  `ProdName` varchar(30) DEFAULT NULL,
  `ProdCat` varchar(15) DEFAULT NULL,
  `CostAma` bigint(20) DEFAULT NULL,
  `CostFlip` bigint(20) DEFAULT NULL,
  `CostSnap` bigint(20) DEFAULT NULL,
  `ProdImg` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`ProdID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProdID`, `ProdName`, `ProdCat`, `CostAma`, `CostFlip`, `CostSnap`, `ProdImg`) VALUES
(1, 'HP-Pavilion', 'Laptop', 45000, 47999, 45999, 'assets/img/products/hp-pav.png'),
(2, 'Dell-7560', 'Laptop', 81000, 83999, 79999, 'assets/img/products/dell-7560.jpg'),
(3, 'Dell-7560', 'MostRec', 81000, 83999, 79999, 'assets/img/products/dell-7560.jpg'),
(4, 'Moto g5s+', 'MostRec', 15999, 16999, 15599, 'assets/img/products/motog5s+.jpg'),
(5, 'Moto g5s+', 'Mobile', 15999, 16999, 15599, 'assets/img/products/motog5s+.jpg'),
(6, 'One plus 5', 'Mobile', 35999, 33000, 35000, 'assets/img/products/oneplus5.jpg'),
(7, 'One plus 5', 'MostRec', 35999, 33000, 35000, 'assets/img/products/oneplus5.jpg'),
(8, 'Ipad air', 'Tablet', 55000, 51000, 53500, 'assets/img/products/ipadair.jpeg'),
(9, 'Samsung s note', 'Tablet', 58000, 58000, 58500, 'assets/img/products/samsung-snote.jpg'),
(10, 'Samsung s note', 'MostRec', 58000, 58000, 58500, 'assets/img/products/samsung-snote.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `u_id` int(5) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(20) DEFAULT NULL,
  `u_mail` varchar(30) DEFAULT NULL,
  `u_pass` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`u_id`, `u_name`, `u_mail`, `u_pass`) VALUES
(1, 'test123', 'test1@gmail.com', 'test123'),
(2, 'kapil', 'kapil123', '0514a615be29e74c01ff');

-- --------------------------------------------------------

--
-- Table structure for table `webinfo`
--

CREATE TABLE IF NOT EXISTS `webinfo` (
  `w_id` varchar(20) NOT NULL,
  `w_name` varchar(20) DEFAULT NULL,
  `w_link` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webinfo`
--

INSERT INTO `webinfo` (`w_id`, `w_name`, `w_link`) VALUES
('ecw1', 'flipkart', 'www.flipkart.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

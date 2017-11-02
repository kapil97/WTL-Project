-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 01:07 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtl-price`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` varchar(5) NOT NULL,
  `P_name` varchar(50) DEFAULT NULL,
  `p_ecw1` varchar(8) DEFAULT NULL,
  `p_ecw2` varchar(8) DEFAULT NULL,
  `p_ecw3` varchar(8) DEFAULT NULL,
  `p_link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `P_name`, `p_ecw1`, `p_ecw2`, `p_ecw3`, `p_link`) VALUES
('lap1', 'HP-Pavilion', '45000', '47999', '45999', '/../pics/hp-pav'),
('lap2', 'Dell-7560', '81000', '83999', '79999', '/../pics/dell-756');

-- --------------------------------------------------------

--
-- Table structure for table `smartphone`
--

CREATE TABLE `smartphone` (
  `s_id` varchar(5) NOT NULL,
  `s_name` varchar(50) DEFAULT NULL,
  `s_ecw1` varchar(8) DEFAULT NULL,
  `s_ecw2` varchar(8) DEFAULT NULL,
  `s_ecw3` varchar(8) DEFAULT NULL,
  `s_link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smartphone`
--

INSERT INTO `smartphone` (`s_id`, `s_name`, `s_ecw1`, `s_ecw2`, `s_ecw3`, `s_link`) VALUES
('s_1', 'Moto g5s+', '15999', '16999', '15599', '/../pics/smart/moto-g5s'),
('s_2', 'one plus 5', '38999', '33000', '35000', '/../pics/smart/One-p5');

-- --------------------------------------------------------

--
-- Table structure for table `tablet`
--

CREATE TABLE `tablet` (
  `t_id` varchar(5) NOT NULL,
  `t_name` varchar(50) DEFAULT NULL,
  `t_ecw1` varchar(8) DEFAULT NULL,
  `t_ecw2` varchar(8) DEFAULT NULL,
  `t_ecw3` varchar(8) DEFAULT NULL,
  `t_link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablet`
--

INSERT INTO `tablet` (`t_id`, `t_name`, `t_ecw1`, `t_ecw2`, `t_ecw3`, `t_link`) VALUES
('t_1', 'ipad air', '55000', '51000', '53500', '/../pics/tab/ipad-air'),
('t_2', 'samsung s note', '58000', '58500', '58000', '/../pics/tab/sam-snote');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `u_id` int(5) NOT NULL,
  `u_name` varchar(20) DEFAULT NULL,
  `u_mail` varchar(30) DEFAULT NULL,
  `u_pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `webinfo` (
  `w_id` varchar(20) NOT NULL,
  `w_name` varchar(20) DEFAULT NULL,
  `w_link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webinfo`
--

INSERT INTO `webinfo` (`w_id`, `w_name`, `w_link`) VALUES
('ecw1', 'flipkart', 'www.flipkart.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `smartphone`
--
ALTER TABLE `smartphone`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tablet`
--
ALTER TABLE `tablet`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `webinfo`
--
ALTER TABLE `webinfo`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

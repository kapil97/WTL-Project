-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 06:43 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

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
-- Table structure for table `buylink`
--

CREATE TABLE `buylink` (
  `BuyID` int(11) NOT NULL,
  `BuySite` varchar(10) DEFAULT NULL,
  `SiteLink` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buylink`
--

INSERT INTO `buylink` (`BuyID`, `BuySite`, `SiteLink`) VALUES
(1, 'CostAma', 'https://www.amazon.in/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords='),
(2, 'CostFlip', 'https://www.flipkart.com/search?q='),
(3, 'CostSnap', 'https://www.snapdeal.com/search?keyword=');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `LapId` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `ProcessorType` varchar(20) DEFAULT NULL,
  `Memory` int(10) DEFAULT NULL,
  `Storage` varchar(20) DEFAULT NULL,
  `Price` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`LapId`, `Name`, `ProcessorType`, `Memory`, `Storage`, `Price`) VALUES
(1, 'Acer-Aspire 10 E', 'Intel atom x5 6gen', 2, '32 gb', 14999),
(2, 'iball CompBook Excelance', 'Intel atom', 2, '32GB', 10399),
(3, 'lenevo ideaad 11o', 'AMD A8', 8, '1TB', 28190),
(4, 'ASUS Vivobook X540YA', 'AMD A8', 4, '1TB', 21990),
(5, 'ASUS A540LJ', 'Intel i3 5th gen', 4, '1TB', 32499),
(6, 'Acer travelMate P2', 'Intel i5 7th gen', 8, '1TB', 39900),
(7, 'Asus R558UQ', 'Intel i7 7th gen', 8, '1TB', 58870),
(8, 'Dell Inspiron 3567', 'Intel i7 7th gen', 8, '1TB', 59990),
(9, 'hp pavilion BR010TX', 'Intel i7 7th gen', 8, '1TB', 69790),
(10, 'Dell inspiron 7560', 'Intel i7 7th gen', 8, '1TB', 84150);

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `MobID` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `ScreenSize` varchar(10) DEFAULT NULL,
  `Camera` varchar(10) DEFAULT NULL,
  `Memory` varchar(30) DEFAULT NULL,
  `Price` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`MobID`, `Name`, `ScreenSize`, `Camera`, `Memory`, `Price`) VALUES
(1, 'Moto g5s plus', '5.5 inch', '13MP(8MP)', '64GB(4GB)/32GB(3GB)', 15999),
(2, 'One plus 5', '5.5 inch', '20MP(16MP)', '64GB(6GB)', 32999),
(3, 'Samsung Z2 Tizen', '4 inch', '5MP(0.3MP)', '8GB(1GB)', 4650),
(4, 'Coolpad Note 5', '5.5 inch', '13MP(8MP)', '32GB(4GB)', 8999),
(5, 'Apple iPhone 6', '4.7 inch', '8MP(1.2MP)', '16GB(1GB)', 24999),
(6, 'Apple iPhone 8', '4.7 inch', '12MP(7MP)', '64GB(2GB)', 54999);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProdID` int(11) NOT NULL,
  `ProdName` varchar(30) DEFAULT NULL,
  `ProdCat` varchar(15) DEFAULT NULL,
  `CostAma` bigint(20) DEFAULT NULL,
  `CostFlip` bigint(20) DEFAULT NULL,
  `CostSnap` bigint(20) DEFAULT NULL,
  `ProdImg` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProdID`, `ProdName`, `ProdCat`, `CostAma`, `CostFlip`, `CostSnap`, `ProdImg`) VALUES
(1, 'HP-Pavilion', 'Laptop', 45000, 47999, 45999, 'assets/img/products/hp-pav.jpg'),
(2, 'Dell-7560', 'Laptop', 81000, 83999, 79999, 'assets/img/products/dell-7560.jpg'),
(3, 'Dell-7560', 'MostRec', 81000, 83999, 79999, 'assets/img/products/dell-7560.jpg'),
(4, 'Moto g5s plus', 'MostRec', 15999, 16999, 15599, 'assets/img/products/motog5s+.jpg'),
(5, 'Moto g5s plus', 'Mobile', 15999, 16999, 15599, 'assets/img/products/motog5s+.jpg'),
(6, 'One plus 5', 'Mobile', 35999, 33000, 35000, 'assets/img/products/oneplus5.jpg'),
(7, 'One plus 5', 'MostRec', 35999, 33000, 35000, 'assets/img/products/oneplus5.jpg'),
(8, 'Ipad air', 'Tablet', 55000, 51000, 53500, 'assets/img/products/ipadair.jpeg'),
(9, 'Samsung s note', 'Tablet', 58000, 58000, 58500, 'assets/img/products/samsung-snote.jpg'),
(10, 'Samsung s note', 'MostRec', 58000, 58000, 58500, 'assets/img/products/samsung-snote.jpg'),
(11, 'Samsung Z2 Tizen', 'Mobile', 4650, 4650, 4425, 'assets/img/products/z2-tizen.jpg'),
(12, 'Coolpad Note 5', 'Mobile', 8999, 9899, 9929, 'assets/img/products/coolpad-note-5.jpg'),
(13, 'Apple iPhone 6', 'Mobile', 24999, 26999, 24499, 'assets/img/products/apple-iPhone6.jpg'),
(14, 'Apple iPhone 8', 'Mobile', 64000, 61999, 59999, 'assets/img/products/apple-iPhone8.jpg'),
(15, 'Acer-Aspire 10 E', 'Laptop', 14999, 15000, 15172, 'assets/img/products/acer-aspire.jpg'),
(16, 'iball CompBook Excelance', 'Laptop', 10990, 10900, 9471, 'assets/img/products/iball-compbook.jpg'),
(17, 'Lenevo Ideapad 110', 'Laptop', 24911, 24900, 33490, 'assets/img/products/lenevo-ideapad.jpg'),
(18, 'ASUS Vivobook X540YA', 'Laptop', 28900, 28990, 28999, 'assets/img/products/asus-vivobook.jpg'),
(19, 'ASUS A540LJ', 'Laptop', 32499, 33679, 34484, 'assets/img/products/Asus-a540LJ.jpg'),
(20, 'Acer travelMate P2', 'Laptop', 39900, 39990, 39999, 'assets/img/products/travelmate-P2.jpg'),
(21, 'Asus R558UQ', 'Laptop', 54028, 58660, 55506, 'assets/img/products/asus-r558.jpg'),
(22, 'Dell Inspiron 3567', 'Laptop', 56100, 43990, 47000, 'assets/img/products/dell-3567.jpg'),
(23, 'MoreGmax 4G7', 'Tablet', 4650, 4700, 4750, 'assets/img/products/more-gmax.jpg'),
(24, 'iBall Slide Brisk 4G', 'Tablet', 7999, 8100, 8985, 'assets/img/products/iball-slide.jpg'),
(25, 'Lenevo yoga tab 3 8', 'Tablet', 12999, 13000, 13100, 'assets/img/products/lenevo-yoga.jpg'),
(26, 'samsung galaxy tab s', 'Tablet', 30000, 29900, 31000, 'assets/img/products/samsung-tab-s.jpg'),
(27, 'samsung galaxy tab s2', 'Tablet', 47990, 48000, 8500, 'assets/img/products/samsung-tab-s.jpg'),
(28, 'Apple Ipad Pro', 'Tablet', 25000, 24500, 25500, 'assets/img/products/ipad-pro.jpg'),
(29, 'Apple Ipad Pro 4g', 'Tablet', 37000, 36290, 37100, 'assets/img/products/ipad-pro-4g.jpg'),
(30, 'Apple Ipad 4g-128', 'Tablet', 44911, 45000, 45100, 'assets/img/products/IPAD-4g.jpg'),
(31, 'Apple ipad Pro 10.5', 'Tablet', 59889, 59999, 59500, 'assets/img/products/ipad-pro-10.5.jpg'),
(32, 'Google Pixel C', 'Tablet', 62990, 63000, 62999, 'assets/img/products/google-pixel-c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tablet`
--

CREATE TABLE `tablet` (
  `TabId` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `ScreenSize` varchar(10) DEFAULT NULL,
  `Storage` varchar(20) DEFAULT NULL,
  `Battery` varchar(20) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablet`
--

INSERT INTO `tablet` (`TabId`, `Name`, `ScreenSize`, `Storage`, `Battery`, `price`) VALUES
(1, 'MoreGmax 4G7', '7 inch', '8GB', '3000 MAH', 4650),
(2, 'iBall Slide Brisk 4G', '7 inch', '16GB', '3500 MAH', 7899),
(3, 'Lenevo yoga tab 3 8.', '8 inch', '16GB', '6200 MAH', 12990),
(4, 'samsung galaxy tab s', '9.7 inch', '32GB', '5870 MAH', 29990),
(5, 'Apple Ipad Pro', '9.7 inch', '32GB', '7306 MAH', 24400),
(6, 'Apple Ipad Pro 4G', '9.7 inch', '32GB', '7306 MAH', 36290),
(7, 'Apple Ipad  4G', '9.7 inch', '128GB', '8610 MAH', 44911),
(8, 'Samsung Tab S2', '9.7 inch', '32GB', '6000MAH', 47990),
(9, 'Apple ipad Pro 10.5', '10.5 inch', '64GB', '7306 MAH', 59889),
(10, 'Google Pixel C', '10.2 inch', '32GB', '9243 MAH', 62990);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `u_id` int(5) NOT NULL,
  `u_namer` varchar(20) DEFAULT NULL,
  `u_name` varchar(20) DEFAULT NULL,
  `u_mail` varchar(30) DEFAULT NULL,
  `u_pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`u_id`, `u_namer`, `u_name`, `u_mail`, `u_pass`) VALUES
(1, 'test', 'test123', 'test1@gmail.com', 'test123'),
(2, 'kapil', 'kapil', 'kapil123', '0514a615be29e74c01ff'),
(3, 'Sid', 'sid', 'sid@gmail.com', 'qwerty');

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

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `WishID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `ProdName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`WishID`, `UserID`, `ProdName`) VALUES
(1, 1, 'Dell-7560'),
(3, 1, 'Samsung s note');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buylink`
--
ALTER TABLE `buylink`
  ADD PRIMARY KEY (`BuyID`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`LapId`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`MobID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProdID`);

--
-- Indexes for table `tablet`
--
ALTER TABLE `tablet`
  ADD PRIMARY KEY (`TabId`);

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
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`WishID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `LapId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tablet`
--
ALTER TABLE `tablet`
  MODIFY `TabId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

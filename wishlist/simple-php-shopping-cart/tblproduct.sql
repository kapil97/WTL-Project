CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
)

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'HP-Pavilion-15', 'hp15', 'product-images/hp-pav.jpg', 35000.00),
(2, 'DELL-7560', 'dell15', 'product-images/dell15.jpg', 80000.00),
(3, 'asus-zenbook', 'ux304ua', 'product-images/asus.jpg', 60000.00);

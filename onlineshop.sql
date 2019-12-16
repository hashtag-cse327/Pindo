-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 11:02 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `iftiaz`
--

CREATE TABLE `iftiaz` (
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `purchased_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iftiaz`
--

INSERT INTO `iftiaz` (`name`, `quantity`, `price`, `image`, `purchased_time`) VALUES
('Magenta PU Leather Close Heel for Women', '1', '1850', '', '11:16:pm  |  15-12-2019'),
('Navy Blue Cotton Trouser for Men', '1', '780', '', '11:17:pm  |  15-12-2019'),
('Leather Formal Shoes - Black', '1', '3000', '', '11:17:pm  |  15-12-2019'),
('Magenta PU Leather Close Heel for Women', '1', '1850', '', '01:51:pm  |  16-12-2019'),
('Black Artificial Leather Wedges for Women', '1', '2450', '', '01:51:pm  |  16-12-2019'),
('Multi Color Leather Sandal For Women', '1', '1155', '', '01:51:pm  |  16-12-2019'),
('Pack of 2 Black Cotton T-shirts for Couple', '1', '500', '', '01:51:pm  |  16-12-2019'),
('Navy Blue Cotton Tanjim Casual Shirt for Men', '1', '1838', '', '01:51:pm  |  16-12-2019'),
('White Synthetic Leather Magista Onda TF Sports', '1', '4500', '', '01:51:pm  |  16-12-2019'),
('Teal and Peru Georgette Lehenga For Women', '1', '2042', '', '01:51:pm  |  16-12-2019'),
('Olive Twill Gabardine Pant for Men', '1', '590', '', '01:51:pm  |  16-12-2019'),
('Orange Leather High Heel Sandals for Women', '1', '3990', '', '01:51:pm  |  16-12-2019');

-- --------------------------------------------------------

--
-- Table structure for table `latest_collections`
--

CREATE TABLE `latest_collections` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latest_collections`
--

INSERT INTO `latest_collections` (`id`, `name`, `image`, `price`) VALUES
(7, 'Navy Blue Cotton Tanjim Casual Shirt for Men', 'men_shirts\\0007.jpg', 1838.00),
(14, 'Light Beige Twill Gabardine Pant for Men', 'men_pants\\0014.jpg', 590.00),
(18, 'Black Denim Jeans Pant for Men', 'men_pants\\0018.jpg', 1700.00),
(21, 'White Synthetic Leather Magista Onda TF Sports ', 'men_shoes\\0021.jpg', 4500.00),
(23, 'Camel Leather Casual Boots For Men', 'men_shoes\\0023.jpg', 6820.00),
(28, 'Blue Georgette Gown For Women', 'wedding_wear\\0028.jpg', 2800.00),
(36, 'Teal and Peru Georgette Lehenga For Women', 'wedding_wear\\0036.jpg', 2042.00),
(37, 'Pink Silk Katan Saree For Women', 'sarees\\0037.jpg', 4250.00),
(38, 'Forest Green Indian Embroidery Work Silk Katan Saree', 'sarees\\0038.jpg', 4490.00),
(47, 'Orange Leather High Heel Sandals for Women', 'women_shoes\\0047.jpg', 3990.00);

-- --------------------------------------------------------

--
-- Table structure for table `men_pants`
--

CREATE TABLE `men_pants` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men_pants`
--

INSERT INTO `men_pants` (`id`, `name`, `image`, `price`) VALUES
(10, 'Royl Blue Twill Gabardine Pant for Men', 'men_pants\\0010.jpg', 490.00),
(11, 'Olive Twill Gabardine Pant for Men', 'men_pants\\0011.jpg', 590.00),
(12, 'Gray Phillies Joggers Trouser For Men', 'men_pants\\0012.jpg', 600.00),
(13, 'Ash Fleece Joggers For Men', 'men_pants\\0013.jpg', 789.00),
(14, 'Light Beige Twill Gabardine Pant for Men', 'men_pants\\0014.jpg', 590.00),
(15, 'Navy Blue Denim Jeans Pant for Men', 'men_pants\\0015.jpg', 550.00),
(16, 'Black Denim Jeans For Men', 'men_pants\\0016.jpg', 550.00),
(17, 'Navy Blue Cotton Trouser for Men', 'men_pants\\0017.jpg', 780.00),
(18, '	\r\nBlack Denim Jeans Pant for Men', 'men_pants\\0018.jpg', 1700.00);

-- --------------------------------------------------------

--
-- Table structure for table `men_shirt`
--

CREATE TABLE `men_shirt` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men_shirt`
--

INSERT INTO `men_shirt` (`id`, `name`, `image`, `price`) VALUES
(1, 'Navy Blue Cotton Long Sleeves Shirt For Men', 'men_shirts\\0001.jpg', 1200.00),
(2, 'Black Cotton Formal Shirt For Men', 'men_shirts\\0002.jpg', 350.00),
(3, 'Maroon Cotton Long Sleeve T-Shirt for Men by Swapon\'s World', 'men_shirts\\0003.jpg', 345.00),
(4, 'Navy Blue Cotton Batman Logo T-Shirt for Men', 'men_shirts\\0004.jpg', 148.00),
(5, 'Red and Black Check Cotton Shirt For Men', 'men_shirts\\0005.jpg', 800.00),
(6, 'Black Cotton Short Sleeve T-Shirt for Men', 'men_shirts\\0006.jpg', 280.00),
(7, 'Navy Blue Cotton Tanjim Casual Shirt for Men', 'men_shirts\\0007.jpg', 1838.00),
(8, 'Pack of 2 Black Cotton T-shirts for Couple', 'men_shirts\\0008.jpg', 500.00),
(9, 'Maroon Cotton Formal Shirt for Men', 'men_shirts\\0009.jpg', 320.00);

-- --------------------------------------------------------

--
-- Table structure for table `men_shoes`
--

CREATE TABLE `men_shoes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men_shoes`
--

INSERT INTO `men_shoes` (`id`, `name`, `image`, `price`) VALUES
(19, 'PU Formal Shoe For Men - Black', 'men_shoes\\0019.jpg', 1650.00),
(20, 'PU Leather Sandal For Men', 'men_shoes\\0020.jpg', 1955.00),
(21, 'White Synthetic Leather Magista Onda TF Sports', 'men_shoes\\0021.jpg', 4500.00),
(22, 'Black Leather Sandal For Men', 'men_shoes\\0022.jpg', 1160.00),
(23, 'Camel Leather Casual Boots For Men', 'men_shoes\\0023.jpg', 6820.00),
(24, 'Full Leather Boot for Men', 'men_shoes\\0024.jpg', 2500.00),
(25, 'Black Velvet Casual Shoe For Men', 'men_shoes\\0025.jpg', 1099.00),
(26, 'Leather Casual Boat Shoe For Men - Dark Blue', 'men_shoes\\0026.jpg', 2070.00),
(27, 'Leather Formal Shoes - Black', 'men_shoes\\0027.jpg', 3000.00);

-- --------------------------------------------------------

--
-- Table structure for table `rahmat47`
--

CREATE TABLE `rahmat47` (
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `purchased_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rahmat47`
--

INSERT INTO `rahmat47` (`name`, `quantity`, `price`, `image`, `purchased_time`) VALUES
('Light Beige Twill Gabardine Pant for Men', '1', '590', '', '02:29:pm  |  16-12-2019'),
('Navy Blue Cotton Trouser for Men', '1', '780', '', '02:30:pm  |  16-12-2019'),
('Navy Blue Cotton Trouser for Men', '1', '780', '', '02:33:pm  |  16-12-2019'),
('Orange Leather High Heel Sandals for Women', '1', '3990', '', '03:03:pm  |  16-12-2019'),
('Gray Phillies Joggers Trouser For Men', '10', '6000', '', '03:03:pm  |  16-12-2019');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `rating` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `username`, `review`, `rating`) VALUES
(10, 'sohan69', 'Nice Product!', 5),
(10, 'rumman', 'valo', 4),
(10, 'rumman', 'valo na', 3),
(47, 'rahmat47', 'Nice product, my wife loved it...', 4);

-- --------------------------------------------------------

--
-- Table structure for table `rumman`
--

CREATE TABLE `rumman` (
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `purchased_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rumman`
--

INSERT INTO `rumman` (`name`, `quantity`, `price`, `image`, `purchased_time`) VALUES
('Navy Blue Cotton Trouser for Men', '1', '780', '', '02:26:pm  |  16-12-2019'),
('Brown PU Leather Flat Sandal For Women', '1', '1350', '', '02:26:pm  |  16-12-2019');

-- --------------------------------------------------------

--
-- Table structure for table `sarees`
--

CREATE TABLE `sarees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sarees`
--

INSERT INTO `sarees` (`id`, `name`, `image`, `price`) VALUES
(37, 'Pink Silk Katan Saree For Women', 'sarees\\0037.jpg', 4250.00),
(38, 'Forest Green Indian Embroidery Work Silk Katan Saree', 'sarees\\0038.jpg', 4490.00),
(39, 'Navy Blue and Golden Indian Embroidery Work Silk Katan Saree', 'sarees\\0039.jpg', 3150.00),
(40, 'Maroon and Bisque Indian Georgette Saree For Women', 'sarees\\0040.jpg', 1755.00),
(41, 'Purple and Golden Indian Embroidery Work Silk Katan', 'sarees\\0041.jpg', 2890.00),
(42, 'Golden and Blue - Georgette Sharee with Unstitched blouse piece', 'sarees\\0042.jpg', 2850.00),
(43, 'Black Georgette Saree for Women', 'sarees\\0043.jpg', 2100.00),
(44, 'Red And Cream Georgette Saree For Women', 'sarees\\0044.jpg', 1200.00),
(45, 'Blue Silk Saree for Women', 'sarees\\0045.jpg', 1299.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `fullname`, `email`, `gender`, `password`, `image`, `address`, `phone`) VALUES
('rumman', 'Fatematuj Zahura Rumman', 'rumman22@gmail.com', 'Female', 'pass', '', '22, Dhanmondi, Dhaka - 1230', '01984563255'),
('iftiaz', 'Iftiaz Ahmed', 'iftiaz.alfi@northsouth.edu', 'Male', 'pass', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_wear`
--

CREATE TABLE `wedding_wear` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wedding_wear`
--

INSERT INTO `wedding_wear` (`id`, `name`, `image`, `price`) VALUES
(28, 'Blue Georgette Gown For Women', 'wedding_wear\\0028.jpg', 2800.00),
(29, 'Navy and Green Georgette Anarkali for Women', 'wedding_wear\\0029.jpg', 2490.00),
(30, 'Light Slate Gray Georgette Lehenga For Women', 'wedding_wear\\0030.jpg', 1990.00),
(31, 'Unstitched Crimson Georgette Lehenga For Women', 'wedding_wear\\0031.jpg', 1900.00),
(32, 'Red Georgette Ustitched Lehenga for Women', 'wedding_wear\\0032.jpg', 2299.00),
(33, 'Multi-Color Georgette Semi Stitched Long Dress for Women', 'wedding_wear\\0033.jpg', 1690.00),
(34, 'Sandy Brown Georgette Semi Stitched Lehenga for Women', 'wedding_wear\\0034.jpg', 2000.00),
(35, 'Red Georgette Semi Stitched Lehenga for Women', 'wedding_wear\\0035.jpg', 2280.00),
(36, 'Teal and Peru Georgette Lehenga For Women', 'wedding_wear\\0036.jpg', 2042.00);

-- --------------------------------------------------------

--
-- Table structure for table `women_shoes`
--

CREATE TABLE `women_shoes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women_shoes`
--

INSERT INTO `women_shoes` (`id`, `name`, `image`, `price`) VALUES
(46, 'Red PU Heel Sandal for Women', 'women_shoes\\0046.jpg', 2990.00),
(47, 'Orange Leather High Heel Sandals for Women', 'women_shoes\\0047.jpg', 3990.00),
(48, 'Black Artificial Leather Wedges for Women', 'women_shoes\\0048.jpg', 2450.00),
(49, 'Blue and Golden Artificial Leather Heeled Sandal for Women', 'women_shoes\\0049.jpg', 3595.00),
(50, 'Magenta PU Leather Close Heel for Women', 'women_shoes\\0050.jpg', 1850.00),
(51, 'Red Velvet Heeled Ballerina For Women', 'women_shoes\\0051.jpg', 1620.00),
(52, 'Multi Color Leather Sandal For Women', 'women_shoes\\0052.jpg', 1155.00),
(53, 'Black and Red Fabric Pump Shoe for Women', 'women_shoes\\0053.jpg', 2495.00),
(54, 'Brown PU Leather Flat Sandal For Women', 'women_shoes\\0054.jpg', 1350.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `latest_collections`
--
ALTER TABLE `latest_collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men_pants`
--
ALTER TABLE `men_pants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men_shirt`
--
ALTER TABLE `men_shirt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men_shoes`
--
ALTER TABLE `men_shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarees`
--
ALTER TABLE `sarees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_wear`
--
ALTER TABLE `wedding_wear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `women_shoes`
--
ALTER TABLE `women_shoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `latest_collections`
--
ALTER TABLE `latest_collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `men_pants`
--
ALTER TABLE `men_pants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `men_shirt`
--
ALTER TABLE `men_shirt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `men_shoes`
--
ALTER TABLE `men_shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sarees`
--
ALTER TABLE `sarees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `wedding_wear`
--
ALTER TABLE `wedding_wear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `women_shoes`
--
ALTER TABLE `women_shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

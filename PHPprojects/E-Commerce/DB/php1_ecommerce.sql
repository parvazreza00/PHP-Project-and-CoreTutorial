-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 05:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php1_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Bata '),
(2, 'Oppo'),
(3, 'Electronics'),
(4, 'FashionsBd'),
(5, 'RuchiJhal'),
(6, 'Babor'),
(7, 'Easy'),
(8, 'Vivo');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(3, '::1', 0),
(7, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_titile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_titile`) VALUES
(1, 'Fruits'),
(2, 'Fruits'),
(3, 'Juices'),
(4, 'Chips'),
(5, 'mobile'),
(6, 'Freeze'),
(7, 'button set');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_des` varchar(255) NOT NULL,
  `product_keywords` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `image_1` varchar(100) NOT NULL,
  `image_2` varchar(100) NOT NULL,
  `image_3` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_des`, `product_keywords`, `category_id`, `brand_id`, `image_1`, `image_2`, `image_3`, `product_price`, `date`, `status`) VALUES
(1, 'Mango Fruits', 'rwerjwoeruiowj', 'rwerew,rtyrt,utyuyt', 1, 1, 'mango3.jpeg', 'mango2.jpeg', 'mango1.jpeg', '120', '2023-07-19 00:53:18', 'true'),
(2, 'ewew', 'ewwwwwwwwwwwww', 'wewe,trtrtr', 3, 1, 'batamans.jpeg', 'bata-ladies.jpeg', 'bata-kids.jpeg', '300', '2023-07-22 09:45:11', 'true'),
(3, 'ewew', 'ewwwwwwwwwwwww', 'wewe,trtrtr', 3, 1, 'batamans.jpeg', 'bata-ladies.jpeg', 'bata-kids.jpeg', '200', '2023-07-22 09:45:20', 'true'),
(4, 'erer', 'dffdxc', 'dfdf,reer,trterer', 4, 3, '20181201_rOOM_rENDER_001_edit.jpg', 'luks-hercai-klasik-yatak-odasi.jpg', 'wall-ceramics.jpeg', '100', '2023-07-22 09:45:26', 'true'),
(5, 'dsdsd', 'wewew wewewe  ewererer rerere  fdsdsds sdsds sds sdsdsds sdsdsdffdfd dfdfd dffdf', 'wewew, wewewe,  ewererer, rerere', 7, 4, 'mango1.jpeg', 'phones.jpeg', 'oppo-mobile.jpeg', '150', '2023-07-22 09:45:33', 'true'),
(6, 'dsdsd', 'wewew wewewe  ewererer rerere  fdsdsds sdsds sds sdsdsds sdsdsdffdfd dfdfd dffdf', 'fdfdf,tyty,qwqwqw', 7, 4, 'mango1.jpeg', 'phones.jpeg', 'oppo-mobile.jpeg', '250', '2023-07-22 09:45:41', 'true'),
(7, 'wewe', 'wewewe ewew wwewewe', 'rererer ,rtrt, ghjghg', 3, 2, 'bsu-cement.jpeg', 'luks-hercai-klasik-yatak-odasi.jpg', 'phones.jpeg', '500', '2023-07-22 09:45:47', 'true'),
(8, 'nice tshirt', 'The shoulders have twill tape for improved durability. Heather colors and sports grey include polyester.', 'durability, twill, Heather ', 7, 2, 'timesLogo.jpeg', 'm-full-shirt3.jpeg', 'w-thumbnail-tshirt.jpeg', '550', '2023-07-22 09:45:55', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

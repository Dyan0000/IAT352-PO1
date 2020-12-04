-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2020 at 06:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dan_peng`
--
CREATE DATABASE IF NOT EXISTS `dan_peng` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dan_peng`;

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

DROP TABLE IF EXISTS `dishes`;
CREATE TABLE `dishes` (
  `dish_id` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `unit_price` decimal(4,2) NOT NULL,
  `description` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `dietary` varchar(20) NOT NULL,
  `meat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dish_id`, `name`, `unit_price`, `description`, `img_path`, `category`, `dietary`, `meat`) VALUES
(1, 'Tomato Kimchi', '4.99', 'Sweet and spicy tomato salad\r\n', 'img/starters/tomato-kimchi.jpeg', 'Starters', 'Vegetarian', ''),
(2, 'Spicy Gyoza', '6.99', 'Deep fried gyoza mixed with greens feat Korean style spicy sauce.\r\n', 'img/starters/spicy-gyoza.jpeg', 'Starters', '', 'Pork'),
(3, 'Edamame', '2.99', 'Steamed and seasoned with salt', 'img/starters/edamame.jpeg', 'Starters', 'Vegetarian', ''),
(4, 'Takoyaki', '7.99', 'Filled with diced octopus, tempura scraps, pickled ginger, and green onion.', 'img/starters/tako-yaki.jpeg', 'Starters', 'No Peanut', ''),
(5, 'Chashu Don', '14.99', 'Japanese style braised pork rice feat. hatcho miso sauce and mustard mayo', 'img/donburi/chashu.jpg', 'Donburi', 'No Peanut', 'Pork'),
(6, 'Kimchi Don', '13.99', 'Korean style pan fried kimchi and bacon.', 'img/donburi/kimchi.jpg', 'Donburi', 'No Soy', 'Pork'),
(7, 'Mushroom Don', '16.99', 'Mushroom \"Shiitake and shimeji\" rice in hot stone bowl seaweed \"Nori\" sauce.', 'img/donburi/mushroom.jpeg', 'Donburi', 'Vegetarian', ''),
(8, 'Salmon Don', '15.99', 'Wild Salmon sashimi on top of sushi rice', 'img/donburi/salmon.jpeg', 'Donburi', 'No Peanut', 'Salmon'),
(9, 'Unagi Don', '16.99', 'Japanese Unagi with sliced eggs on top of sushi rice', 'img/donburi/unagi.jpeg', 'Donburi', 'No Peanut', 'Assorted'),
(10, 'Salmon Sashimi', '13.99', '9 pieces of wild Salmon sashimi', 'img/sashimi/salmon.jpeg', 'Sashimi', 'No Peanut', 'Salmon'),
(11, 'Toro Sashimi', '15.99', '9 pieces of Toro sashimi (Tuna belly)', 'img/sashimi/toro.jpeg', 'Sashimi', 'No Peanut', 'Tuna'),
(12, 'Aburi Tobiko', '12.49', 'Crab meat, salmon, cucumber, fish egg oshi sauce, and serano.', 'img/sushi/aburi-tobiko.jpeg', 'Sushi', 'No Soy', 'Assorted'),
(13, 'Hotate Oshi Sushi', '12.49', 'Scallop, fish egg, and oshi sauce.', 'img/sushi/hotate.jpeg', 'Sushi', 'No Soy', 'Assorted'),
(14, 'Kani Ume Oshi Sushi', '12.99', 'Real crab, prawn, ume oshi sauce, crispy capers, and ume dressing.', 'img/sushi/kani-ume.jpeg', 'Sushi', '', 'Assorted'),
(15, 'Salmon Oshi Sushi', '12.99', 'Sockeye salmon, oshi sauce, and jalapeno.', 'img/sushi/salmon.jpeg', 'Sushi', '', 'Salmon'),
(16, 'Tofu Sushi', '11.99', 'Seasoned soft tofu and soybean paper.', 'img/sushi/tofu.jpeg', 'Sushi', 'Vegetarian', ''),
(17, 'Unagi Oshi Sushi', '13.99', 'Double layer BBQ eel, sweet spicy miso, garlic chip, green onion, and sesame oil.\r\n', 'img/sushi/unagi.jpeg', 'Sushi', 'No Peanut', 'Pork'),
(18, 'Yukke Tuna Sushi', '12.49', 'Soy marinated minced tuna and sweet onion sauce.', 'img/sushi/yukke-tuna.jpg', 'Sushi', 'No Peanut', 'Tuna'),
(19, 'Sime Saba Sushi', '12.99', 'Sweet vinegar marinated mackerel and katsuo miso sauce.', 'img/sushi/sime-saba.jpeg', 'Sushi', '', ''),
(24, 'Assorted Tempura', '6.99', 'Two pieces prawn and four pieces veggie.', 'img/tempura/appetizer.jpeg', 'Tempura', '', 'Prawn'),
(25, 'Prawn Tempura', '8.99', '6 pieces of prawn tempura', 'img/tempura/prawn.jpeg', 'Tempura', '', 'Prawn'),
(26, 'Snapper Tempura', '9.49', 'Deep fried battered snapper, unagi & wasabi sauce 6 pieces', 'img/tempura/snapper.jpeg', 'Tempura', 'No Soy', 'Assorted'),
(27, 'Spicy Crunch Ebi ', '9.49', 'Five pieces. Deep fried spicy battered tiger prawn.', 'img/tempura/spicy-ebi-mayo.jpeg', 'Tempura', '', 'Prawn'),
(28, 'Apple Juice', '2.49', '250ml ', 'img/drinks/apple-juice.png', 'Drinks', '', ''),
(29, 'Canada Dry', '2.00', '250ml', 'img/drinks/canada-dry.png', 'Drinks', '', ''),
(30, 'Ice Tea', '2.00', '250ml', 'img/drinks/nestea.png', 'Drinks', '', ''),
(31, 'Orange Juice', '2.49', '250ml', 'img/drinks/orange-juice.png', 'Drinks', '', ''),
(32, 'Sprite', '2.00', '250ml', 'img/drinks/sprite.png', 'Drinks', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `like_dish`
--

DROP TABLE IF EXISTS `like_dish`;
CREATE TABLE `like_dish` (
  `id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `total_price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `like_dish`
--
ALTER TABLE `like_dish`
  ADD PRIMARY KEY (`id`,`dish_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10015;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

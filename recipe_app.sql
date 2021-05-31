-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 10:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(10) DEFAULT NULL,
  `admin_password` varchar(10) DEFAULT NULL,
  `admin_role` varchar(10) NOT NULL,
  `admin_title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_username`, `admin_password`, `admin_role`, `admin_title`) VALUES
(1, 'mustafa', 'admin', 'superadmin', 'Mustafa Guner');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) DEFAULT NULL,
  `category_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` int(11) NOT NULL,
  `recipe_name` varchar(20) NOT NULL,
  `recipe_description` varchar(150) NOT NULL,
  `recipe_image` text NOT NULL,
  `recipe_difficulty` int(1) NOT NULL,
  `recipe_calory` int(4) NOT NULL,
  `recipe_duration` int(11) NOT NULL,
  `recipe_class` varchar(15) NOT NULL,
  `recipe_ingredients` varchar(300) NOT NULL,
  `recipe_rating` int(1) NOT NULL,
  `recipe_steps` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `recipe_name`, `recipe_description`, `recipe_image`, `recipe_difficulty`, `recipe_calory`, `recipe_duration`, `recipe_class`, `recipe_ingredients`, `recipe_rating`, `recipe_steps`) VALUES
(58, 'Hamburger', 'Served on a bed of thin rice noodles and wrapped in lettuce, these curried beef patties make for a bright.', 'hamburger.png', 5, 300, 5, 'Grill', 'Grimming 1/3 cup unsalted roasted peanuts or cashews, finely chopped\r\n3 medium green onions, white and green parts, finely chopped\r\n', 5, 'To refresh the noodles, sprinkle them with water and microwave on high for 60 to 90 seconds.\r\n'),
(59, 'Cheese Burger', '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder ', 'cheeseburger.png', 1, 300, 90, 'Frying', '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder r', 3, '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder (preferably Sun brand)\r\n3/4 teaspoon recently gro'),
(60, 'Pizza', '3 medium green onions, white and green parts, finely chopped\r\n', 'pizza.png', 3, 600, 90, 'Broiling', '3 medium green onions, white and green parts, finely chopped\r\n', 2, '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder '),
(61, 'Chicken Salad', '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder ', 'chicken_salad.png', 3, 300, 120, 'Blanching', '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder r', 5, '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder '),
(62, 'Kebab', '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder ', 'Kebab.png', 2, 500, 30, 'Baking', '3 medium green onions, white and green parts, finely chopped\r\n', 5, '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder (preferably Sun brand)\r\n3/4 teaspoon recently gro'),
(63, 'Asian Chicken', '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder (preferably Sun brand)', 'chicken.png', 3, 258, 60, 'Frying', '1 tablespoon Madras-style curry powder (preferably Sun brand)\r\n3/4 teaspoon recently ground black pepper', 5, '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder (preferably Sun brand)\r\n3/4 teaspoon recently gro'),
(64, 'Kalamar', '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder (preferably Sun brand)\r\n3/4 teaspoon recently gro', 'kalamar.png', 4, 178, 80, 'Poaching', '3 medium green onions, white and green parts, finely chopped\r\n', 5, '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder (preferably Sun brand)\r\n3/4 teaspoon recently gro'),
(65, 'Fish & Chips', '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder (preferably Sun brand)\r\n', 'fish.png', 3, 800, 79, 'Frying', '3 medium green onions, white and green parts, finely chopped\r\n', 5, '3 medium green onions, white and green parts, finely chopped\r\n1 tablespoon Madras-style curry powder ');

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `steps_id` int(11) NOT NULL,
  `steps_description` int(11) DEFAULT NULL,
  `steps_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

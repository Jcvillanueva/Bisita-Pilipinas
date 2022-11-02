-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 03:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bisita_pilipinas`
--

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_accepted` tinyint(1) NOT NULL DEFAULT 0,
  `owner_fullname` varchar(255) NOT NULL,
  `owner_bnb_name` varchar(255) NOT NULL,
  `owner_bnb_address` varchar(255) NOT NULL,
  `owner_bnb_desc` varchar(255) NOT NULL,
  `owner_contact_num` varchar(12) NOT NULL,
  `price_range_from` int(255) NOT NULL,
  `price_range_to` int(255) NOT NULL,
  `owner_valid_id` varchar(500) NOT NULL,
  `owner_bnb_image` varchar(500) NOT NULL,
  `owner_bnb_image2` varchar(500) NOT NULL,
  `owner_bnb_image3` varchar(500) NOT NULL,
  `owner_bnb_image4` varchar(500) NOT NULL,
  `owner_bnb_image5` varchar(500) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `user_id`, `is_accepted`, `owner_fullname`, `owner_bnb_name`, `owner_bnb_address`, `owner_bnb_desc`, `owner_contact_num`, `price_range_from`, `price_range_to`, `owner_valid_id`, `owner_bnb_image`, `owner_bnb_image2`, `owner_bnb_image3`, `owner_bnb_image4`, `owner_bnb_image5`, `usertype`) VALUES
(1, 4, 1, 'Kyle Roy Guzman Robles', 'Roy House', 'Nueva Ecija, Carranglan', 'ABC123', '09773184493', 500, 900, 'andriyko-podilnyk-RCfi7vgJjUY-unsplash.jpg', 'brianna-r-_-54wJzpH6Q-unsplash.jpg', 'colin-watts-0z6HSSeMOiY-unsplash.jpg', 'colin-watts-UFhbYAEQJ9s-unsplash.jpg', 'peter-burdon-iYN9QeFETQA-unsplash.jpg', 'peter-burdon-VWy0C3oOmQk-unsplash.jpg', 'Owner'),
(2, 6, 1, 'Lowell Alvarez', 'Lowell house', 'Nueva Ecija, Carranglan', 'DEF456', '09773184493', 300, 400, 'mount.png', 'alohafalls.png', 'ranch.png', 'calo.png', 'cat.png', 'mount2.png', 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'admin', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(2, 'tourist1', 'tourist1@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Tourist'),
(4, 'owner1', 'owner1@mail.com', '482c811da5d5b4bc6d497ffa98491e38', 'Owner'),
(6, 'lowell1', 'lowell1@mail.com', '202cb962ac59075b964b07152d234b70', 'Owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `owner_fullname` (`owner_fullname`),
  ADD UNIQUE KEY `owner_bnb_name` (`owner_bnb_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

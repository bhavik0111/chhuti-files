-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 03:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_addfeatures`
--

CREATE TABLE `products_addfeatures` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_addfeatures`
--

INSERT INTO `products_addfeatures` (`id`, `product_id`, `title`, `description`, `updated_at`, `created_at`) VALUES
(1, 9, 'add new', 'all over new ', '2023-04-29 04:55:40', '2023-04-29 04:55:40'),
(4, 10, 'add new1', 'asdasd', '2023-04-29 08:07:04', '2023-04-29 08:07:04'),
(5, 10, 'samsung', 'new model', '2023-04-29 08:07:04', '2023-04-29 08:07:04'),
(6, 10, 'samsung s7 altra', 'new shap', '2023-04-29 08:07:04', '2023-04-29 08:07:04'),
(7, 2, 'sony', 'This has been upgraded from 1GB to 2GB for all activations after 10 April 2019. Supports 3G+ / 4G speed wherever available.', '2023-04-29 08:11:57', '2023-04-29 08:11:57'),
(8, 3, 'sony', 'This has been upgraded from 1GB to 2GB for all activations after 10 April 2019. Supports 3G+ / 4G speed wherever available.', '2023-04-29 08:13:16', '2023-04-29 08:13:16'),
(9, 3, 'TV', 'This has been upgraded from 1GB to 2GB for all activations after 10 April 2019. Supports 3G+ / 4G speed wherever available.This has been upgraded from 1GB to 2GB for all activations after 10 April 2019. Supports 3G+ / 4G speed wherever available.', '2023-04-29 08:13:16', '2023-04-29 08:13:16'),
(10, 4, 'sa', 'This has been upgraded from 1GB to 2GB for all activations after 10 April 2019. Supports 3G+ / 4G speed wherever available.', '2023-04-29 08:13:52', '2023-04-29 08:13:52'),
(11, 4, 'enne', 'This has been upgraded from 1GB to 2GB for all activations after 10 April 2019. Supports 3G+ / 4G speed wherever available.', '2023-04-29 08:13:52', '2023-04-29 08:13:52'),
(12, 4, 'end', 'This has been upgraded from 1GB to 2GB for all activations after 10 April 2019. Supports 3G+ / 4G speed wherever available.', '2023-04-29 08:13:52', '2023-04-29 08:13:52'),
(13, 5, 'asad', 'This has been upgraded from 1GB to 2GB for all activations after 10 April 2019. Supports 3G+ / 4G speed wherever available.', '2023-04-29 08:14:29', '2023-04-29 08:14:29'),
(14, 6, 'sonny', 'This has been upgraded from 1GB to 2GB for all activations after 10 April 2019. Supports 3G+ / 4G speed wherever available.', '2023-04-29 08:15:03', '2023-04-29 08:15:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_addfeatures`
--
ALTER TABLE `products_addfeatures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_addfeatures`
--
ALTER TABLE `products_addfeatures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

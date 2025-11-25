-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2025 at 11:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpforms`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` char(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `place_of_birth` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `password`, `phone_number`, `address`, `date_of_birth`, `place_of_birth`, `created_at`, `updated_at`) VALUES
(1, 'Ifeoma Moran', 'pysobosu@mailinator.com', 'female', '$2y$10$7DqN2GHgqWAB8P4xgTAH6uq3m2GNZGBtq49DezvH8fkKTzmalHNWC', '+1 (802) 196-2331', 'Quisquam incidunt e', '2019-05-21', 'Aut adipisicing ea a', '2025-11-25 09:47:22', '2025-11-25 09:47:22'),
(2, 'Lysandra Huber', 'gexysud@mailinator.com', 'female', '$2y$10$SywuhgITrEaXi8Z42jJTrOMrmBo2j8Ie5N/XkXC/cuSAuW5kW0Nja', '+1 (652) 292-3152', 'Iste pariatur Dolor', '2019-04-18', 'Soluta aperiam paria', '2025-11-25 09:47:58', '2025-11-25 09:47:58'),
(3, 'Sigourney Webster', 'lohyf@mailinator.com', 'rather_not', '$2y$10$HPe9YAGpcUquZT/msfZXAueaaE9wAjhsX.MjgObF.YZas4Wk5mYTO', '+1 (236) 557-8402', 'Provident ab nulla', '1980-06-12', 'Sed nihil qui rerum', '2025-11-25 09:48:00', '2025-11-25 09:48:00'),
(4, 'Wang Daniel', 'puveno@mailinator.com', 'rather_not', '$2y$10$v3myx1ZCk6IaIz0UO0/RK.5Jb8DcZHCeWo8oTkf/XnG../lWjPlES', '+1 (253) 992-5839', 'Consequat Explicabo', '2006-09-11', 'Est illo dolor nihil', '2025-11-25 09:48:03', '2025-11-25 09:48:03'),
(5, 'Norman Key', 'byvopare@mailinator.com', 'rather_not', '$2y$10$tZtEsMszidveevaSv8hiYeJkjZrT8.k0FcYQZDO67KwNy718giaKK', '+1 (723) 939-5273', 'Error laboriosam ve', '2017-07-21', 'Consectetur sapient', '2025-11-25 09:48:11', '2025-11-25 09:48:11'),
(6, 'Brenna Franco', 'winuc@mailinator.com', 'female', '$2y$10$OHbbMXwxA6JdeHTxEjhkK.hVFAyKVrtqtdL4zr7hriO/aOXACp4Ja', '+1 (111) 872-3755', 'Dicta itaque exercit', '2013-03-28', 'Eu totam architecto', '2025-11-25 10:06:35', '2025-11-25 10:06:35'),
(7, 'Zoe Fry', 'govegyrot@mailinator.com', 'male', '$2y$10$hqq6DcXP2dP.8NHRSVrOBuSKrn2pBBfHufHyM3tdo6ZQu0bbYzIlG', '+1 (589) 524-8257', 'Quas nisi fuga Dolo', '1972-09-19', 'Dolore laboriosam a', '2025-11-25 10:06:40', '2025-11-25 10:06:40'),
(8, 'Regina Sharp', 'xutehagu@mailinator.com', 'male', '$2y$10$hbKWohXM8iD8a4k7rwGyxew9bHR4AtQoLWTI78g3QI5umrT6urYiG', '+1 (176) 144-9292', 'Obcaecati et provide', '1974-08-02', 'Ut esse ex maxime re', '2025-11-25 10:06:43', '2025-11-25 10:06:43'),
(9, 'Bianca Woodard', 'dovas@mailinator.com', 'female', '$2y$10$JN/TYrD4/q8CZv71vttwzOTB3Et/LNNKWBdeGb1Rk9w1eTM7GW7oC', '+1 (449) 219-6024', 'Quos sit cupiditate', '1988-03-19', 'Rerum mollit dolorum', '2025-11-25 10:06:48', '2025-11-25 10:06:48'),
(10, 'Abel Chen', 'cucudumyja@mailinator.com', 'rather_not', '$2y$10$9TA9LR5wDaklOzLvZbB4AOBYnlY3mi6R0IQeDpZQ9yr/plLag9k6G', '+1 (185) 758-5671', 'Eligendi velit accus', '1978-09-19', 'Ex enim earum nihil', '2025-11-25 10:10:42', '2025-11-25 10:10:42'),
(13, 'Nigel Riggs', 'hevegaleli@mailinator.com', 'female', '$2y$10$xPag1Dsnl92vZ2dOZNy/OuUJc5AuEeux.4M3MD01bGYTY41VV7Szu', '+1 (103) 391-6721', 'Enim deleniti harum', '2015-04-11', 'Non veniam et minus', '2025-11-25 10:17:35', '2025-11-25 10:17:35'),
(18, 'Cedric Slater', 'makuwixi@mailinator.com', 'female', '$2y$10$pn.XnYGBFNeMZIZAh/zT6uggbarOLjMV65iOY6dH/T6ieummNiHIm', '+1 (681) 442-7503', 'Ipsum ut reprehender', '2020-04-01', 'Amet ducimus dolor', '2025-11-25 10:28:43', '2025-11-25 10:28:43'),
(19, 'Teagan Pearson', 'waba@mailinator.com', 'female', '$2y$10$MCuhr4vyFnA2oalkoCIfHenIcd4keodKtY2kuHjPFASaisKsyi0e2', '+1 (738) 771-1112', 'Doloribus laudantium', '2001-08-10', 'Sed eos quam dolor', '2025-11-25 10:28:47', '2025-11-25 10:28:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

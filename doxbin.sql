-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 09:30 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doxbin`
--

-- --------------------------------------------------------

--
-- Table structure for table `past`
--

CREATE TABLE `past` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `com` int(11) NOT NULL,
  `add` datetime NOT NULL DEFAULT current_timestamp(),
  `view` int(11) NOT NULL,
  `num` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `past`
--

INSERT INTO `past` (`id`, `username`, `title`, `com`, `add`, `view`, `num`) VALUES
(1, 'Anonymous-7789-1564044411', 'pedophiliac_egirl', 0, '2021-07-15 22:29:29', 6, '-7789-1564044411'),
(9, 'hello-2b7b82a7ec6de40781fd6ef338b41892-05ca5af59eb807520da42600c84a826b', 'wadwdadaw', 0, '2021-07-16 00:13:42', 0, '-2b7b82a7ec6de40781fd6ef338b41892-05ca5af59eb807520da42600c84a826b'),
(2, 'hello-330-492006950', 'pedo_eslut', 0, '2021-07-15 22:32:33', 1, '-330-492006950'),
(8, 'hello-602d1305678a8d5fdb372271e980da6a-9d584165a7cf537209d24797535a4576', 'wad', 0, '2021-07-16 00:10:41', 0, '-602d1305678a8d5fdb372271e980da6a-9d584165a7cf537209d24797535a4576'),
(3, 'hello-692f93be8c7a41525c0baf2076aecfb4-748d7690a354e3b7951afb8709a0da34', 'dy', 0, '2021-07-15 23:55:24', 0, '-692f93be8c7a41525c0baf2076aecfb4-748d7690a354e3b7951afb8709a0da34'),
(4, 'hello-8ce5d989374d216a867cdc8871484b43-970a523104f7ad579dbded2c930fc18d', 'awdawd', 0, '2021-07-15 23:55:43', 2, '-8ce5d989374d216a867cdc8871484b43-970a523104f7ad579dbded2c930fc18d'),
(5, 'hello-c15203a83f778ce8934d0efaf2d5c6f3-6c50426078c7539742b2da98a1ebf8d7', 'awdawdaw', 0, '2021-07-15 23:58:51', 2, '-c15203a83f778ce8934d0efaf2d5c6f3-6c50426078c7539742b2da98a1ebf8d7'),
(7, 'hello-c35bc9eaa4a930e006ab98bf3ef90408-f78246adcdf6be312a32daca87e40f64', 'uwuwu', 0, '2021-07-16 00:10:32', 2, '-c35bc9eaa4a930e006ab98bf3ef90408-f78246adcdf6be312a32daca87e40f64'),
(6, 'hello-d53697441ef12a45422f6660202f9840-d119c41230d879d04123cadd5717d7ff', 'awdawdadw', 0, '2021-07-16 00:10:17', 1, '-d53697441ef12a45422f6660202f9840-d119c41230d879d04123cadd5717d7ff');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rank` int(11) NOT NULL,
  `add` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `rank`, `add`) VALUES
(9471, 'n1337testing', 'Nano@gmail.com', 'nano', 0, '2021-07-14 14:23:15'),
(9806, 'Nano', 'nigg@gmail.com', 'nano', 0, '2021-07-14 14:16:26'),
(91818, 'awdawdawd', 'uwuwuw@gmail.com', 'nano', 0, '2021-07-14 14:29:42'),
(91819, 'hacker', 'faggot@gmail.com', 'nano', 0, '2021-07-14 14:31:01'),
(91820, 'Nano2323', 'wdawdawdD@gmail.com', '$2y$10$jkJ9wj8zN35uKioK4Js/7.wakpZjxR543WM.4LvLECzIw84g.ka5O', 0, '2021-07-14 14:32:21'),
(91821, 'StrikeGetsBeamed', 'idk@gmail.com', '$2y$10$E6QXOYw7NL37xKrpmk9U1O1YTalnUKw8PXPclIg5gDTMcTwoln/Re', 0, '2021-07-14 20:23:38'),
(91822, 'hacker21212', 'fadwadwggota@gmail.com', '$2y$10$bq/PNXaAZYnZrqOv2ea4velj5dDW7t8miTuO0vmXwovE5TqWspgqC', 0, '2021-07-14 20:27:24'),
(91823, 'testing', 'test@gmail.com', '$2y$10$3zFZ3DmAbXbNk8y/hq9FFe/kBAfAPdDClHJoPTjOFXCgtjaOhPlzW', 0, '2021-07-14 20:40:13'),
(91824, 'charge', 'charge@d0xbin.org', '$2y$10$NUg.UCB8OjzlMBtYDeL14O8IIqlTso33Lgus0yUbQD3Dyq7SgF6Li', 0, '2021-07-14 20:50:06'),
(91825, 'uwu', 'uwu@gmail.com', '$2y$10$uDhxDysHg6/Rnjx5jL5H2OxUy6aixMoFm7Y3z0lZik4FcIWWze.s6', 0, '2021-07-15 22:12:15'),
(91826, 'hello', 'hello@doxbin.remake', '$2y$10$dgnFL/RkjVWoY4LweoKl.uisb3q4xnRTR816Wie75HkAdW7LaIDXe', 0, '2021-07-15 22:31:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `past`
--
ALTER TABLE `past`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `title` (`title`);

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
-- AUTO_INCREMENT for table `past`
--
ALTER TABLE `past`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91827;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

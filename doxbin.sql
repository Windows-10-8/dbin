-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 05:15 AM
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
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `past`
--

INSERT INTO `past` (`id`, `username`, `title`, `com`, `add`, `view`) VALUES
(91824, 'Anonymous-5286-5186', '_love_charge', 0, '2021-07-14 22:11:08', 0),
(91818, 'charge', '', 0, '2021-07-14 21:11:30', 0),
(91819, 'testing', 'awdawdawd', 0, '2021-07-14 21:12:49', 3),
(91823, 'testing-8867', 'wowo', 0, '2021-07-14 21:30:10', 12);

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
(91824, 'charge', 'charge@d0xbin.org', '$2y$10$NUg.UCB8OjzlMBtYDeL14O8IIqlTso33Lgus0yUbQD3Dyq7SgF6Li', 0, '2021-07-14 20:50:06');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91825;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91825;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

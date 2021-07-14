-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 09:37 AM
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
  `add` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `past`
--

INSERT INTO `past` (`id`, `username`, `title`, `com`, `add`) VALUES
(1967, 'Anonymous-6947', 'asdasdad', 1967, '2021-07-13 23:16:10'),
(5839, 'Anonymous-9513', 'asdasdas', 5839, '2021-07-14 01:21:24'),
(26925, 'Anonymous', 'awdawdadw', 26925, '2021-07-13 21:53:48'),
(29310, 'Anonymous-2122', 'charge_is_a_nigger', 29310, '2021-07-14 01:47:35'),
(40315, 'Anonymous-5067', 'upp', 40315, '2021-07-14 01:54:51'),
(43474, 'Anonymous-4322', 'uwu', 43474, '2021-07-13 23:17:47'),
(58194, 'Anonymous-8180', 'teasdasd', 58194, '2021-07-13 22:45:15'),
(64042, 'Anonymous-5794', 'asdasdasd', 64042, '2021-07-14 01:01:46'),
(64778, 'Anonymous-189', 'worldaw', 64778, '2021-07-14 01:21:05'),
(66186, 'Anonymous-5981', 'test', 66186, '2021-07-13 22:41:28'),
(73196, 'Anonymous-2616', 'testuwu', 73196, '2021-07-13 23:23:53'),
(84993, 'Anonymous-3282', 'kt dox', 84993, '2021-07-14 01:21:50'),
(86089, 'Anonymous-8376', 'charge was here', 86089, '2021-07-13 22:44:19'),
(88921, 'Anonymous-9170', 'kt_haxor', 88921, '2021-07-14 01:24:32'),
(91817, 'Anonymous-1929', 'world', 91817, '2021-07-14 01:20:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `past`
--
ALTER TABLE `past`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `past`
--
ALTER TABLE `past`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91818;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

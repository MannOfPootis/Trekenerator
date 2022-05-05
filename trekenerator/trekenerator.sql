-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 04:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trekenerator`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `first_name`, `last_name`) VALUES
(8, '123', '$2y$10$3ok0sqLqQiEgINZjlEyG9u1V0qKr9CDxtIhOP8UZfX7bnSZhStUjW', '123', '123'),
(9, '1234', '$2y$10$0yKoKz2bkplim80.lqf0AOBPBbkX4lY860hZae6HXXiQ9fWFLVWFS', '1234', '1234'),
(10, 'LIGMA', '$2y$10$ksWe58sdidWQev1MSni/nOsM.MxHZDryni7lcDvbtla94Vkj71ZBO', 'JOE', 'MAMA');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(50) NOT NULL,
  `poster` int(50) NOT NULL,
  `text` text NOT NULL,
  `topic` varchar(20) NOT NULL,
  `towards` int(50) NOT NULL COMMENT 'this one is fuckety cos I want comments to be for both paths and locations in one table so I will use both TOwards and topic to make that a thing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `height` int(50) NOT NULL,
  `poster` int(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `height`, `poster`, `comment`) VALUES
(1, '123', 123, 3, ''),
(2, 'a place', 1233, 3, 'my balls itch'),
(3, '123222', 1111, 3, 'sdasxx'),
(4, '1232222', 111, 3, 'sadxxx'),
(5, 'lick', 0, 3, ''),
(6, '123sss', 1222, 3, 'my balls itch'),
(7, '2122ssss', 1233, 3, 'xx'),
(8, '1223xxxxx', 0, 3, 'sex'),
(9, 'Ursla gora', 1800, 5, 'is nice'),
(10, 'velenje', 300, 5, 'veleje');

-- --------------------------------------------------------

--
-- Table structure for table `path`
--

CREATE TABLE `path` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `length` int(50) NOT NULL,
  `location1` int(50) NOT NULL,
  `location2` int(50) NOT NULL,
  `poster` int(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `path`
--

INSERT INTO `path` (`id`, `name`, `length`, `location1`, `location2`, `poster`, `comment`) VALUES
(1, 'xxx', 0, 1, 1, 3, 'sss'),
(2, 'sssxxxxx', 12345, 1, 7, 3, 'no'),
(3, 'xxxx', 12232, 1, 7, 3, 'my balls itch'),
(4, 'you will die', 10000, 1, 7, 5, 'no'),
(5, 'janez', 20000, 10, 9, 5, 'sussy buku'),
(6, 'path1', 230, 5, 9, 5, ''),
(7, 'susy', 2341, 10, 2, 5, ''),
(8, 'no', 12, 1, 2, 5, ''),
(9, '23', 23, 2, 3, 5, ''),
(10, '34', 34, 3, 4, 5, ''),
(11, '45', 45, 4, 5, 5, ''),
(12, '56', 56, 5, 6, 5, ''),
(13, '78', 78, 7, 8, 5, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_commenter` (`poster`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_poster` (`poster`);

--
-- Indexes for table `path`
--
ALTER TABLE `path`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_location1` (`location1`),
  ADD KEY `FK_location2` (`location2`),
  ADD KEY `FK_poster_path` (`poster`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `path`
--
ALTER TABLE `path`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_commenter` FOREIGN KEY (`poster`) REFERENCES `account` (`id`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `FK_poster` FOREIGN KEY (`poster`) REFERENCES `account` (`id`);

--
-- Constraints for table `path`
--
ALTER TABLE `path`
  ADD CONSTRAINT `FK_location1` FOREIGN KEY (`location1`) REFERENCES `location` (`id`),
  ADD CONSTRAINT `FK_location2` FOREIGN KEY (`location2`) REFERENCES `location` (`id`),
  ADD CONSTRAINT `FK_poster_path` FOREIGN KEY (`poster`) REFERENCES `account` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

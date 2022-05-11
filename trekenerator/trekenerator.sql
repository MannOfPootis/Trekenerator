-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 10:17 PM
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
(13, 'ligma', '$2y$10$FMBqP9ItieXWE1Jv3Z/8tOn5l2/NuuBwo4bTfV.Bxxt9bfeLbcB.m', 'christ', 'jesus'),
(14, 'bad', '$2y$10$ydIxlR611ov6rA5UQ4opYe0etIp0DMyXFCpVLIsizkmh3DdU6Zk9W', 'guge', 'your');

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
(17, 'database', 0, 13, 'this is the database'),
(18, 'home page', 0, 13, 'this is the home page'),
(19, 'dodajanje lokacij', 0, 13, 'tukaj se dodajajo lokacije'),
(20, 'dodajanje poti', 0, 13, 'tukaj se dodajajo poti'),
(21, 'trekeneracija', 0, 13, 'tukaj se generirajo poti'),
(25, 'sprememba gesla', 0, 13, 'tukaj si uporabnik spremeni geslo'),
(27, 'vpisan na home page', 0, 13, ''),
(28, 'prikaz informacij', 0, 13, 'prikaz informacij'),
(29, 'prikaz trekeneriranje poti', 0, 13, 'tukaj se prikaže trekenerirana pot');

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
(19, 'vpis', 1, 18, 27, 13, 'uporabnik se vpiše in s tem dobi dostop do drugih funkcij spletne strani'),
(20, 'klik na dodajanje poti', 0, 27, 20, 13, 'na dodajanju poti lahko uporanik doda pot ki se shrani v podatkovno bazo  tam se shrani začetna lokacija, končna lokacija in uporabnik ki jo je nastavil'),
(21, 'klik na dodajanje lokacij', 1, 27, 19, 13, 'na dodajanju lokacij lahko uporabnik doda  določeno lokacijo v podatkovno bazo kjer se tudi shrani kdo je nastavil to lokacijo'),
(22, 'klik na trekeneracijo', 1, 27, 21, 13, 'ob kliku uporabniku ponudi možnost vpisa dolžine poti '),
(23, 'prenos informacij z post', 1, 21, 29, 13, 'z post se prenesejo informacije na naslednjo stran'),
(24, 'klik na uporabniško ime', 1, 27, 28, 13, 's klikom na uporabniško ime lahko uporabnika poese na prikaz informacij  z get se prenesejo informacije o točno čemj naj prenese'),
(25, 'klik na link', 2, 28, 25, 13, 'če ste vpisani v račun, ki ga gledate lahko kliknete na povezavo ki vas bo vodila do  lokacije kjer si lahko spremenite geslo');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `path`
--
ALTER TABLE `path`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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

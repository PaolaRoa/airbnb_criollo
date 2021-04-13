-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2021 at 07:50 PM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_services`
--

CREATE TABLE `additional_services` (
  `idadditional_services` int(11) NOT NULL,
  `service` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `additional_services`
--

INSERT INTO `additional_services` (`idadditional_services`, `service`) VALUES
(1, 'piscina'),
(2, 'limpieza'),
(3, 'aire'),
(4, 'agua'),
(5, 'sauna');

-- --------------------------------------------------------

--
-- Table structure for table `additional_services_help`
--

CREATE TABLE `additional_services_help` (
  `houses_idhouses` int(11) NOT NULL,
  `idadditional_services` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Bookings`
--

CREATE TABLE `Bookings` (
  `idBookings` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `final_date` date NOT NULL,
  `users_idusers` int(11) NOT NULL,
  `housesId` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `idhouses` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `num_rooms` int(11) NOT NULL,
  `num_toilets` int(11) NOT NULL,
  `parking_lot` enum('Si','No') DEFAULT NULL,
  `internet` enum('Si','No') DEFAULT NULL,
  `users_idusers` int(11) NOT NULL,
  `price_pn` float NOT NULL,
  `direccion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `idimages` int(11) NOT NULL,
  `url` varchar(256) DEFAULT NULL,
  `main` tinyint(1) NOT NULL,
  `houses_idhouses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `name_user` varchar(45) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password_user` varchar(256) NOT NULL,
  `city` varchar(70) NOT NULL,
  `pdata` tinyint(4) NOT NULL,
  `rol` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_services`
--
ALTER TABLE `additional_services`
  ADD PRIMARY KEY (`idadditional_services`);

--
-- Indexes for table `additional_services_help`
--
ALTER TABLE `additional_services_help`
  ADD PRIMARY KEY (`houses_idhouses`,`idadditional_services`),
  ADD KEY `fk_houses_has_additional_services_additional_services1_idx` (`idadditional_services`),
  ADD KEY `fk_houses_has_additional_services_houses1_idx` (`houses_idhouses`);

--
-- Indexes for table `Bookings`
--
ALTER TABLE `Bookings`
  ADD PRIMARY KEY (`idBookings`),
  ADD KEY `fk_Bookings_users1_idx` (`users_idusers`),
  ADD KEY `fk_Bookings_houses1_idx` (`housesId`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`idhouses`),
  ADD KEY `fk_houses_users1_idx` (`users_idusers`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idimages`),
  ADD KEY `fk_images_houses1_idx` (`houses_idhouses`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_services`
--
ALTER TABLE `additional_services`
  MODIFY `idadditional_services` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `Bookings`
--
ALTER TABLE `Bookings`
  MODIFY `idBookings` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `idhouses` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `idimages` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additional_services_help`
--
ALTER TABLE `additional_services_help`
  ADD CONSTRAINT `fk_houses_has_additional_services_additional_services1` FOREIGN KEY (`idadditional_services`) REFERENCES `additional_services` (`idadditional_services`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_houses_has_additional_services_houses1` FOREIGN KEY (`houses_idhouses`) REFERENCES `houses` (`idhouses`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Bookings`
--
ALTER TABLE `Bookings`
  ADD CONSTRAINT `fk_Bookings_houses1` FOREIGN KEY (`housesId`) REFERENCES `houses` (`idhouses`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Bookings_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `houses`
--
ALTER TABLE `houses`
  ADD CONSTRAINT `fk_houses_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_houses1` FOREIGN KEY (`houses_idhouses`) REFERENCES `houses` (`idhouses`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-04-2021 a las 17:08:46
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `additional_services`
--

CREATE TABLE `additional_services` (
  `idadditional_services` int(11) NOT NULL,
  `service` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Bookings`
--

CREATE TABLE `Bookings` (
  `idBookings` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `final_date` date NOT NULL,
  `users_idusers` int(11) NOT NULL,
  `total` float DEFAULT NULL,
  `houseId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `houses`
--

CREATE TABLE `houses` (
  `idhouses` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `num_rooms` int(11) NOT NULL,
  `num_toilets` int(11) NOT NULL,
  `parking_lot` enum('sí','no') DEFAULT NULL,
  `internet` enum('sí','no') DEFAULT NULL,
  `users_idusers` int(11) NOT NULL,
  `price_pn` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `houses_has_additional_services`
--

CREATE TABLE `houses_has_additional_services` (
  `houses_idhouses` int(11) NOT NULL,
  `idadditional_services` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `idimages` int(11) NOT NULL,
  `url` varchar(256) DEFAULT NULL,
  `main` tinyint(4) DEFAULT NULL,
  `houses_idhouses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `additional_services`
--
ALTER TABLE `additional_services`
  ADD PRIMARY KEY (`idadditional_services`);

--
-- Indices de la tabla `Bookings`
--
ALTER TABLE `Bookings`
  ADD PRIMARY KEY (`idBookings`),
  ADD KEY `fk_Bookings_users1_idx` (`users_idusers`),
  ADD KEY `houseId` (`houseId`);

--
-- Indices de la tabla `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`idhouses`),
  ADD KEY `fk_houses_users1_idx` (`users_idusers`);

--
-- Indices de la tabla `houses_has_additional_services`
--
ALTER TABLE `houses_has_additional_services`
  ADD PRIMARY KEY (`houses_idhouses`,`idadditional_services`),
  ADD KEY `fk_houses_has_additional_services_additional_services1_idx` (`idadditional_services`),
  ADD KEY `fk_houses_has_additional_services_houses1_idx` (`houses_idhouses`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idimages`),
  ADD KEY `fk_images_houses1_idx` (`houses_idhouses`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `additional_services`
--
ALTER TABLE `additional_services`
  MODIFY `idadditional_services` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Bookings`
--
ALTER TABLE `Bookings`
  MODIFY `idBookings` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `houses`
--
ALTER TABLE `houses`
  MODIFY `idhouses` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `idimages` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Bookings`
--
ALTER TABLE `Bookings`
  ADD CONSTRAINT `Bookings_ibfk_1` FOREIGN KEY (`houseId`) REFERENCES `houses` (`idhouses`),
  ADD CONSTRAINT `fk_Bookings_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `houses`
--
ALTER TABLE `houses`
  ADD CONSTRAINT `fk_houses_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `houses_has_additional_services`
--
ALTER TABLE `houses_has_additional_services`
  ADD CONSTRAINT `fk_houses_has_additional_services_additional_services1` FOREIGN KEY (`idadditional_services`) REFERENCES `additional_services` (`idadditional_services`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_houses_has_additional_services_houses1` FOREIGN KEY (`houses_idhouses`) REFERENCES `houses` (`idhouses`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_houses1` FOREIGN KEY (`houses_idhouses`) REFERENCES `houses` (`idhouses`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

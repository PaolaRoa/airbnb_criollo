-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: hotel
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `additional_services`
--

DROP TABLE IF EXISTS `additional_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `additional_services` (
  `idadditional_services` int NOT NULL AUTO_INCREMENT,
  `services` varchar(50) DEFAULT NULL,
  `housesid` int DEFAULT NULL,
  `usersid` int DEFAULT NULL,
  PRIMARY KEY (`idadditional_services`),
  KEY `housesid` (`housesid`),
  KEY `usersid` (`usersid`),
  CONSTRAINT `additional_services_ibfk_1` FOREIGN KEY (`housesid`) REFERENCES `houses` (`idhouses`),
  CONSTRAINT `additional_services_ibfk_2` FOREIGN KEY (`usersid`) REFERENCES `users` (`idusers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `additional_services`
--

LOCK TABLES `additional_services` WRITE;
/*!40000 ALTER TABLE `additional_services` DISABLE KEYS */;
/*!40000 ALTER TABLE `additional_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `idbookings` int NOT NULL AUTO_INCREMENT,
  `usersid` int DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `finaldate` date DEFAULT NULL,
  `housesid` int DEFAULT NULL,
  PRIMARY KEY (`idbookings`),
  KEY `usersid` (`usersid`),
  KEY `housesid` (`housesid`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`usersid`) REFERENCES `users` (`idusers`),
  CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`housesid`) REFERENCES `houses` (`idhouses`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `houses`
--

DROP TABLE IF EXISTS `houses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `houses` (
  `idhouses` int NOT NULL AUTO_INCREMENT,
  `usersid` int DEFAULT NULL,
  `nameh` varchar(50) NOT NULL,
  `desciption` varchar(50) NOT NULL,
  `num_rooms` int NOT NULL,
  `num_toilets` int NOT NULL,
  `parking_lot` tinyint(1) NOT NULL,
  `internet` tinyint(1) NOT NULL,
  PRIMARY KEY (`idhouses`),
  KEY `usersid` (`usersid`),
  CONSTRAINT `houses_ibfk_1` FOREIGN KEY (`usersid`) REFERENCES `users` (`idusers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `houses`
--

LOCK TABLES `houses` WRITE;
/*!40000 ALTER TABLE `houses` DISABLE KEYS */;
/*!40000 ALTER TABLE `houses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `idimages` int NOT NULL AUTO_INCREMENT,
  `imgp` text,
  `imgs` text,
  `housesid` int DEFAULT NULL,
  PRIMARY KEY (`idimages`),
  KEY `housesid` (`housesid`),
  CONSTRAINT `images_ibfk_1` FOREIGN KEY (`housesid`) REFERENCES `houses` (`idhouses`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `idusers` int NOT NULL AUTO_INCREMENT,
  `nameu` varchar(50) NOT NULL,
  `email` varchar(256) NOT NULL,
  `passwords` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pdata` tinyint(1) NOT NULL,
  `rol` tinyint(1) NOT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-20 22:58:37

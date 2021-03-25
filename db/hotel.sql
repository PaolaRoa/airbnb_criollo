-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: hotelp2
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
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `idBooking` int NOT NULL AUTO_INCREMENT,
  `houses` int NOT NULL,
  `users` int NOT NULL,
  `datestart` date DEFAULT NULL,
  `datefinish` date DEFAULT NULL,
  PRIMARY KEY (`idBooking`),
  KEY `houses` (`houses`),
  KEY `users` (`users`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`houses`) REFERENCES `houses` (`idhouse`),
  CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`users`) REFERENCES `users` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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
  `idhouse` int NOT NULL AUTO_INCREMENT,
  `users` int NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description_house` varchar(200) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `image_p` varchar(256) DEFAULT NULL,
  `images` varchar(256) DEFAULT NULL,
  `num_rooms` int DEFAULT NULL,
  `num_toilets` int DEFAULT NULL,
  `parking_lot` tinyint(1) DEFAULT NULL,
  `internet` tinyint(1) DEFAULT NULL,
  `additional_services` int DEFAULT NULL,
  PRIMARY KEY (`idhouse`),
  KEY `users` (`users`),
  KEY `additional_services` (`additional_services`),
  CONSTRAINT `houses_ibfk_1` FOREIGN KEY (`users`) REFERENCES `users` (`iduser`),
  CONSTRAINT `houses_ibfk_2` FOREIGN KEY (`additional_services`) REFERENCES `services` (`idservice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `houses`
--

LOCK TABLES `houses` WRITE;
/*!40000 ALTER TABLE `houses` DISABLE KEYS */;
/*!40000 ALTER TABLE `houses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `image` (
  `idimage` int NOT NULL AUTO_INCREMENT,
  `houses` int NOT NULL,
  `image` varchar(256) DEFAULT NULL,
  `type_image` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idimage`),
  KEY `houses` (`houses`),
  CONSTRAINT `image_ibfk_1` FOREIGN KEY (`houses`) REFERENCES `houses` (`idhouse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `idservice` int NOT NULL AUTO_INCREMENT,
  `houses` int NOT NULL,
  `service` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idservice`),
  KEY `houses` (`houses`),
  CONSTRAINT `services_ibfk_1` FOREIGN KEY (`houses`) REFERENCES `houses` (`idhouse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `iduser` int NOT NULL AUTO_INCREMENT,
  `name_user` varchar(50) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password_user` varchar(256) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `rol` tinyint(1) DEFAULT NULL,
  `pdata` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'David M','davidmx755@hotmail.com','e10adc3949ba59abbe56e057f20f883e','Soacha',1,1);
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

-- Dump completed on 2021-03-23 22:32:27
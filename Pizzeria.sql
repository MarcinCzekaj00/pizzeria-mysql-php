-- MySQL dump 10.18  Distrib 10.3.27-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: maczek
-- ------------------------------------------------------
-- Server version	10.3.27-MariaDB-0+deb10u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ceny_dodatkow_mala`
--

DROP TABLE IF EXISTS `ceny_dodatkow_mala`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ceny_dodatkow_mala` (
  `id` int(11) NOT NULL DEFAULT 0,
  `cena` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ceny_dodatkow_mala`
--

LOCK TABLES `ceny_dodatkow_mala` WRITE;
/*!40000 ALTER TABLE `ceny_dodatkow_mala` DISABLE KEYS */;
INSERT INTO `ceny_dodatkow_mala` VALUES (1,5),(2,5),(3,6),(4,6),(5,3),(6,3),(7,3),(8,11),(9,11),(10,13),(11,13),(12,7),(13,7),(14,7);
/*!40000 ALTER TABLE `ceny_dodatkow_mala` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ceny_dodatkow_srednia`
--

DROP TABLE IF EXISTS `ceny_dodatkow_srednia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ceny_dodatkow_srednia` (
  `id` int(11) NOT NULL DEFAULT 0,
  `cena` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ceny_dodatkow_srednia`
--

LOCK TABLES `ceny_dodatkow_srednia` WRITE;
/*!40000 ALTER TABLE `ceny_dodatkow_srednia` DISABLE KEYS */;
INSERT INTO `ceny_dodatkow_srednia` VALUES (1,6),(2,6),(3,7),(4,7),(5,4),(6,4),(7,4),(8,12),(9,12),(10,14),(11,14),(12,8),(13,8),(14,8);
/*!40000 ALTER TABLE `ceny_dodatkow_srednia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ceny_dodatkow_duza`
--

DROP TABLE IF EXISTS `ceny_dodatkow_duza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ceny_dodatkow_duza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cena` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ceny_dodatkow_duza`
--

LOCK TABLES `ceny_dodatkow_duza` WRITE;
/*!40000 ALTER TABLE `ceny_dodatkow_duza` DISABLE KEYS */;
INSERT INTO `ceny_dodatkow_duza` VALUES (1,7),(2,7),(3,8),(4,8),(5,5),(6,5),(7,5),(8,13),(9,13),(10,15),(11,15),(12,9),(13,9),(14,9);
/*!40000 ALTER TABLE `ceny_dodatkow_duza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ceny_standardowych_pizz`
--

DROP TABLE IF EXISTS `ceny_standardowych_pizz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ceny_standardowych_pizz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cena_mala` int(11) DEFAULT NULL,
  `cena_srednia` int(11) DEFAULT NULL,
  `cena_duza` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ceny_standardowych_pizz`
--

LOCK TABLES `ceny_standardowych_pizz` WRITE;
/*!40000 ALTER TABLE `ceny_standardowych_pizz` DISABLE KEYS */;
INSERT INTO `ceny_standardowych_pizz` VALUES (1,15,20,26),(2,20,24,30),(3,23,28,36),(4,27,32,39),(5,34,39,46),(6,24,28,35);
/*!40000 ALTER TABLE `ceny_standardowych_pizz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dodatki`
--

DROP TABLE IF EXISTS `dodatki`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dodatki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa_dodatku` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dodatki`
--

LOCK TABLES `dodatki` WRITE;
/*!40000 ALTER TABLE `dodatki` DISABLE KEYS */;
INSERT INTO `dodatki` VALUES (1,'ser'),(2,'szynka'),(3,'boczek'),(4,'kurczak'),(5,'ogórek'),(6,'pomidor'),(7,'kukurydza'),(8,'podwójny ser'),(9,'podwójna szynka'),(10,'podwójny boczek'),(11,'podwójny kurczak'),(12,'podwójny ogórek'),(13,'podwójny pomidor'),(14,'podwójna kukurydza');
/*!40000 ALTER TABLE `dodatki` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faktura`
--

DROP TABLE IF EXISTS `faktura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faktura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(30) DEFAULT NULL,
  `nazwisko` varchar(50) DEFAULT NULL,
  `cena_brutto` int(11) DEFAULT NULL,
  `cena_netto` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `zamowienie` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faktura`
--

LOCK TABLES `faktura` WRITE;
/*!40000 ALTER TABLE `faktura` DISABLE KEYS */;
INSERT INTO `faktura` VALUES (1,'dasas','adssad',52,67,'2021-01-19','Kompozycja własna'),(2,'','',18,23,'2021-01-19','Sorento'),(3,'dasas','adssad',59,76,'2021-01-19','Kompozycja własna'),(4,'dasas','daww',59,76,'2021-01-19','Kompozycja własna'),(5,'das','das',59,76,'2021-01-19','Kompozycja własna'),(6,'das','dasdasasd',59,76,'2021-01-19','Kompozycja własna'),(7,'das','dasdasasd',59,76,'2021-01-19','Kompozycja własna'),(8,'das','dasdasasd',59,76,'2021-01-19','Kompozycja własna'),(9,'das','dasdasasd',59,76,'2021-01-19','Kompozycja własna'),(10,'das','dasdasasd',59,76,'2021-01-19','Kompozycja własna'),(11,'das','dasdasasd',59,76,'2021-01-19','Kompozycja własna'),(12,'das','dasdasasd',59,76,'2021-01-20','Kompozycja własna'),(13,'das','dasdasasd',59,76,'2021-01-20','Kompozycja własna'),(14,'das','dasdasasd',59,76,'2021-01-20','Kompozycja własna'),(15,'','',43,56,'2021-01-20','Kompozycja własna'),(16,'das','aas',64,83,'2021-01-20','Kompozycja własna'),(17,'1321','31231',64,83,'2021-01-20','Kompozycja własna'),(18,'aaa','tttt',64,83,'2021-01-20','Kompozycja własna'),(19,'aaa','111',58,75,'2021-01-20','Kompozycja własna'),(20,'aaa','111',58,75,'2021-01-20','Kompozycja własna'),(21,'1112','41241',58,75,'2021-01-20','Kompozycja własna'),(22,'saddasdsa','dasdasadsdasdas',15,20,'2021-01-20','Margherita'),(23,'tttttttttt','aaaaaaaaaa',58,75,'2021-01-20','Kompozycja własna'),(24,'saddasdsa','dasdasadsdasdas',12,15,'2021-01-20','Margherita'),(25,'saddasdsa','dasdasadsdasdas',12,15,'2021-01-20','Margherita'),(26,'saddasdsa','dasdasadsdasdas',12,15,'2021-01-20','Margherita'),(27,'saddasdsa','dasdasadsdasdas',12,15,'2021-01-20','Margherita'),(28,'saddasdsa','dasdasadsdasdas',12,15,'2021-01-20','Margherita'),(29,'saddasdsa','dasdasadsdasdas',12,15,'2021-01-20','Margherita'),(30,'saddasdsa','dasdasadsdasdas',12,15,'2021-01-20','Margherita'),(31,'saddasdsa','dasdasadsdasdas',15,20,'2021-01-20','Margherita'),(32,'saddasdsa','dasdasadsdasdas',15,20,'2021-01-20','Margherita'),(33,'saddasdsa','dasdasadsdasdas',15,20,'2021-01-20','Margherita'),(34,'saddasdsa','dasdasadsdasdas',15,20,'2021-01-20','Margherita'),(35,'saddasdsa','dasdasadsdasdas',15,20,'2021-01-20','Margherita'),(36,'saddasdsa','dasdasadsdasdas',15,20,'2021-01-20','Margherita'),(37,'saddasdsa','dasdasadsdasdas',15,20,'2021-01-20','Margherita'),(38,'saddasdsa','dasdasadsdasdas',15,20,'2021-01-20','Margherita'),(39,'saddasdsa','dasdasadsdasdas',15,20,'2021-01-20','Margherita'),(40,'saddasdsa','dasdasadsdasdas',15,20,'2021-01-20','Margherita'),(41,'saddasdsa','dasdasadsdasdas',15,20,'2021-01-20','Margherita'),(42,'saddasdsa','dasdasadsdasdas',15,20,'2021-01-20','Margherita'),(43,'saddasdsa','dasdasadsdasdas',15,20,'2021-01-20','Margherita'),(44,'tttttttttt','aaaaaaaaaa',58,75,'2021-01-20','Kompozycja własna'),(45,'yyyyyyyyyyy','yyyyyyyyy',58,75,'2021-01-20','Kompozycja własna'),(46,'qqqqqqqqq','qqqqqqqqq',58,75,'2021-01-20','Kompozycja własna'),(47,'nnnnnnnn','nnnnnnnnn',22,28,'2021-01-20','Sorento'),(48,'lllllll','lllllll',62,81,'2021-01-20','Kompozycja własna'),(49,';;;;;;;',';;;;;;;;;',62,81,'2021-01-20','Kompozycja własna'),(50,'kkkkkkk','kkkkkkk',62,81,'2021-01-20','Kompozycja własna'),(51,'','',43,56,'2021-01-20','Kompozycja własna'),(52,'ta','da',57,74,'2021-01-20','Kompozycja własna'),(53,'da','13',57,74,'2021-01-20','Kompozycja własna'),(54,'33','515',57,74,'2021-01-20','Kompozycja własna'),(55,'aa','aas',65,85,'2021-01-20','Kompozycja własna'),(56,'aa33','33',65,85,'2021-01-20','Kompozycja własna'),(57,'bb','bb',65,85,'2021-01-20','Kompozycja własna'),(58,'aaa','aas',63,82,'2021-01-20','Kompozycja własna'),(59,'gg','gg',63,82,'2021-01-20','Kompozycja własna'),(60,'hh','hh',63,82,'2021-01-20','Kompozycja własna'),(61,'rr','rr',52,67,'2021-01-20','Kompozycja własna'),(62,'t','t',52,67,'2021-01-20','Kompozycja własna'),(63,'tb','tb',52,67,'2021-01-20','Kompozycja własna'),(64,'aaa','aa',65,84,'2021-01-20','Kompozycja własna'),(65,'aaa','aa',65,84,'2021-01-20','Kompozycja własna'),(66,'aaa','aa',65,84,'2021-01-20','Kompozycja własna'),(67,'vv','vv',55,72,'2021-01-20','Kompozycja własna'),(68,'vv','vv',55,72,'2021-01-20','Kompozycja własna'),(69,'vv','vv',55,72,'2021-01-20','Kompozycja własna'),(70,'vv','vv',55,72,'2021-01-20','Kompozycja własna'),(71,'asd','adsasdasads',45,58,'2021-01-20','Kompozycja własna'),(72,'asd','adsasdasads',45,58,'2021-01-20','Kompozycja własna'),(73,'asd','adsasdasads',45,58,'2021-01-20','Kompozycja własna'),(74,'asd','adsasdasads',54,70,'2021-01-20','Kompozycja własna'),(75,'asd','adsasdasads',54,70,'2021-01-20','Kompozycja własna'),(76,'asd','adsasdasads',54,70,'2021-01-20','Kompozycja własna'),(77,'asd','adsasdasads',54,70,'2021-01-20','Kompozycja własna'),(78,'ads','asd',45,58,'2021-01-20','Kompozycja własna'),(79,'ads','asd',45,58,'2021-01-20','Kompozycja własna'),(80,'ads','asd',45,58,'2021-01-20','Kompozycja własna'),(81,'ads','asd',45,58,'2021-01-20','Kompozycja własna'),(82,'ads','asd',55,72,'2021-01-20','Kompozycja własna'),(83,'ads','asd',55,72,'2021-01-20','Kompozycja własna'),(84,'ads','asd',55,72,'2021-01-20','Kompozycja własna'),(85,'ads','asd',55,72,'2021-01-20','Kompozycja własna'),(86,'qwe','rtd',58,75,'2021-01-20','Kompozycja własna'),(87,'rrrr','gggg',58,75,'2021-01-20','Kompozycja własna'),(88,'rrrr','zzz',58,75,'2021-01-20','Kompozycja własna'),(89,'adsdd','aadas',47,61,'2021-01-20','Kompozycja własna'),(90,'adsdd','aadas',47,61,'2021-01-20','Kompozycja własna'),(91,'adsdd','aadas',47,61,'2021-01-20','Kompozycja własna'),(92,'a','aa',70,91,'2021-01-20','Kompozycja własna'),(93,'a','vv',70,91,'2021-01-20','Kompozycja własna'),(94,'a','vv',70,91,'2021-01-20','Kompozycja własna'),(95,'a','a',49,64,'2021-01-20','Kompozycja własna'),(96,'a','a',49,64,'2021-01-20','Kompozycja własna'),(97,'a','a',49,64,'2021-01-20','Kompozycja własna'),(98,'a','a',49,64,'2021-01-20','Kompozycja własna'),(99,'asd','ads',12,15,'2021-01-20','Margherita'),(100,'asd','ads',12,15,'2021-01-20','Margherita'),(101,'asd','ads',12,15,'2021-01-20','Margherita'),(102,'asd','ads',12,15,'2021-01-20','Margherita'),(103,'asd','ads',22,28,'2021-01-20','Sorento'),(104,'','',77,100,'2021-01-20','Kompozycja własna'),(105,'','',59,77,'2021-01-20','Kompozycja własna'),(106,'','',12,15,'2021-01-20','Margherita'),(107,'','',43,56,'2021-01-24','Kompozycja własna'),(108,'sdds','sds',22,28,'2021-01-24','Sorento');
/*!40000 ALTER TABLE `faktura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelnerzy`
--

DROP TABLE IF EXISTS `kelnerzy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelnerzy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(30) DEFAULT NULL,
  `nazwisko` varchar(50) DEFAULT NULL,
  `stawka` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelnerzy`
--

LOCK TABLES `kelnerzy` WRITE;
/*!40000 ALTER TABLE `kelnerzy` DISABLE KEYS */;
INSERT INTO `kelnerzy` VALUES (1,'Grzegorz','Winiarski',2307),(2,'Marta','Ziuta',1918),(3,'Zuzanna','Baran',2359);
/*!40000 ALTER TABLE `kelnerzy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rodzaj_ciasta`
--

DROP TABLE IF EXISTS `rodzaj_ciasta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rodzaj_ciasta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rodzaj_ciasta` varchar(15) DEFAULT NULL,
  `cena` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rodzaj_ciasta`
--

LOCK TABLES `rodzaj_ciasta` WRITE;
/*!40000 ALTER TABLE `rodzaj_ciasta` DISABLE KEYS */;
INSERT INTO `rodzaj_ciasta` VALUES (1,'cienkie',3),(2,'grube',5);
/*!40000 ALTER TABLE `rodzaj_ciasta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rozmiar`
--

DROP TABLE IF EXISTS `rozmiar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rozmiar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rozmiar` varchar(15) DEFAULT NULL,
  `cena` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rozmiar`
--

LOCK TABLES `rozmiar` WRITE;
/*!40000 ALTER TABLE `rozmiar` DISABLE KEYS */;
INSERT INTO `rozmiar` VALUES (1,'mała',12),(2,'średnia',18),(3,'duża',24);
/*!40000 ALTER TABLE `rozmiar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `standardowe_pizze`
--

DROP TABLE IF EXISTS `standardowe_pizze`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `standardowe_pizze` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(255) DEFAULT NULL,
  `skladniki` varchar(255) DEFAULT NULL,
  `cena` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `standardowe_pizze`
--

LOCK TABLES `standardowe_pizze` WRITE;
/*!40000 ALTER TABLE `standardowe_pizze` DISABLE KEYS */;
INSERT INTO `standardowe_pizze` VALUES (1,'Margherita','Sos pomidorowy,ser',1),(2,'Prosciuto','Sos pomidorowy,ser,szynka',2),(3,'Sorento','Sos pomidorowy,ser,szynka,kukurydza',3),(4,'Hawaii','Sos pomidorowy,ser,kurczak,ogórek,pomidory',4),(5,'Bimatella','Sos pomidorowy,ser,boczek,szynka,kurczak,kukurydza',5),(6,'Vegetariana','Sos pomidorowy,ser,pomidor,ogórek,kukurydza',6),(7,'qwertdrrrrggggrrrrzzz',NULL,NULL),(8,'aaaavvavv',NULL,NULL),(9,'aaaaaaaa',NULL,NULL);
/*!40000 ALTER TABLE `standardowe_pizze` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stolik`
--

DROP TABLE IF EXISTS `stolik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stolik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stolik`
--

LOCK TABLES `stolik` WRITE;
/*!40000 ALTER TABLE `stolik` DISABLE KEYS */;
INSERT INTO `stolik` VALUES (1),(2),(3),(4);
/*!40000 ALTER TABLE `stolik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp`
--

DROP TABLE IF EXISTS `temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rozmiar` varchar(20) DEFAULT NULL,
  `rodzaj_ciasta` varchar(20) DEFAULT NULL,
  `ser` int(11) DEFAULT NULL,
  `ser_podwojny` int(11) DEFAULT NULL,
  `szynka` int(11) DEFAULT NULL,
  `szynka_podwojny` int(11) DEFAULT NULL,
  `boczek` int(11) DEFAULT NULL,
  `boczek_podwojny` int(11) DEFAULT NULL,
  `kurczak` int(11) DEFAULT NULL,
  `kurczak_podwojny` int(11) DEFAULT NULL,
  `ogorek` int(11) DEFAULT NULL,
  `ogorek_podwojny` int(11) DEFAULT NULL,
  `pomidor` int(11) DEFAULT NULL,
  `pomidor_podwojny` int(11) DEFAULT NULL,
  `kukurydza` int(11) DEFAULT NULL,
  `kukurydza_podwojny` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `klient` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp`
--

LOCK TABLES `temp` WRITE;
/*!40000 ALTER TABLE `temp` DISABLE KEYS */;
INSERT INTO `temp` VALUES (1,'duza','grube',0,1,0,1,0,1,0,1,1,0,1,0,1,0,'2021-01-20',''),(2,'srednia','cienkie',1,0,1,0,0,1,0,1,0,1,1,0,1,0,'2021-01-20',''),(3,'srednia','',1,0,1,0,1,0,1,0,1,0,1,0,1,0,'2021-01-24','');
/*!40000 ALTER TABLE `temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp2`
--

DROP TABLE IF EXISTS `temp2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelner_id` int(11) DEFAULT NULL,
  `kelner_cena` int(11) DEFAULT NULL,
  `kelner_prowizja` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp2`
--

LOCK TABLES `temp2` WRITE;
/*!40000 ALTER TABLE `temp2` DISABLE KEYS */;
/*!40000 ALTER TABLE `temp2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zamowinia`
--

DROP TABLE IF EXISTS `zamowinia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zamowinia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa_pizzy_jesli_dotyczy` varchar(75) DEFAULT NULL,
  `rozmiar` varchar(50) DEFAULT NULL,
  `rodzaj_ciasta` varchar(25) DEFAULT NULL,
  `ser` int(11) DEFAULT NULL,
  `ser_podwojny` int(11) DEFAULT NULL,
  `szynka` int(11) DEFAULT NULL,
  `szynka_podwojny` int(11) DEFAULT NULL,
  `boczek` int(11) DEFAULT NULL,
  `boczek_podwojny` int(11) DEFAULT NULL,
  `kurczak` int(11) DEFAULT NULL,
  `kurczak_podwojny` int(11) DEFAULT NULL,
  `ogorek` int(11) DEFAULT NULL,
  `ogorek_podwojny` int(11) DEFAULT NULL,
  `pomidor` int(11) DEFAULT NULL,
  `pomidor_podwojny` int(11) DEFAULT NULL,
  `kukurydza` int(11) DEFAULT NULL,
  `kukurydza_podwojny` int(11) DEFAULT NULL,
  `kelner_id` int(11) DEFAULT NULL,
  `stolik` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zamowinia`
--

LOCK TABLES `zamowinia` WRITE;
/*!40000 ALTER TABLE `zamowinia` DISABLE KEYS */;
INSERT INTO `zamowinia` VALUES (1,'NULL','srednia','grube',1,0,1,0,0,1,0,1,1,0,1,0,1,0,3,3),(2,'NULL','srednia','grube',1,0,1,0,0,1,0,1,1,0,1,0,1,0,3,3),(3,'NULL','srednia','grube',1,0,1,0,0,1,0,1,1,0,1,0,1,0,3,3),(4,'NULL','srednia','grube',1,0,1,0,0,1,0,1,1,0,1,0,1,0,3,3),(5,'Margherita','srednia','cienkie',0,0,0,0,0,0,0,0,0,0,0,0,0,0,3,1),(6,'Margherita','srednia','cienkie',0,0,0,0,0,0,0,0,0,0,0,0,0,0,3,1),(7,'Margherita','srednia','cienkie',0,0,0,0,0,0,0,0,0,0,0,0,0,0,3,1),(8,'NULL','srednia','grube',1,0,1,0,0,1,0,1,1,0,1,0,1,0,3,3),(9,'NULL','srednia','grube',1,0,1,0,0,1,0,1,1,0,1,0,1,0,3,3),(10,'NULL','srednia','grube',1,0,1,0,0,1,0,1,1,0,1,0,1,0,3,3),(11,'Sorento','srednia','cienkie',0,0,0,0,0,0,0,0,0,0,0,0,0,0,3,1),(12,'NULL','srednia','grube',1,0,0,1,0,1,0,1,1,0,1,0,1,0,3,3),(13,'NULL','srednia','grube',1,0,0,1,0,1,0,1,1,0,1,0,1,0,3,3),(14,'NULL','srednia','grube',1,0,0,1,0,1,0,1,1,0,1,0,1,0,3,3),(15,'NULL','srednia','grube',1,0,0,1,0,1,1,0,1,0,1,0,1,0,1,1),(16,'NULL','srednia','grube',1,0,0,1,0,1,1,0,1,0,1,0,1,0,1,1),(17,'NULL','srednia','grube',1,0,0,1,0,1,1,0,1,0,1,0,1,0,1,1),(18,'NULL','srednia','grube',1,0,0,1,0,1,0,1,1,0,0,1,1,0,1,2),(19,'NULL','srednia','grube',1,0,0,1,0,1,0,1,1,0,0,1,1,0,1,2),(20,'NULL','srednia','grube',1,0,0,1,0,1,0,1,1,0,0,1,1,0,1,2),(21,'NULL','duza','cienkie',0,1,1,0,1,0,1,0,1,0,1,0,0,1,1,3),(22,'NULL','duza','cienkie',0,1,1,0,1,0,1,0,1,0,1,0,0,1,1,3),(23,'NULL','duza','cienkie',0,1,1,0,1,0,1,0,1,0,1,0,0,1,1,3),(24,'NULL','srednia','cienkie',1,0,1,0,1,0,1,0,1,0,0,1,0,1,1,4),(25,'NULL','srednia','cienkie',1,0,1,0,1,0,1,0,1,0,0,1,0,1,1,4),(26,'NULL','srednia','cienkie',1,0,1,0,1,0,1,0,1,0,0,1,0,1,1,4),(27,'NULL','duza','grube',0,1,1,0,1,0,1,0,1,0,1,0,0,1,1,3),(28,'NULL','duza','grube',0,1,1,0,1,0,1,0,1,0,1,0,0,1,1,3),(29,'NULL','duza','grube',0,1,1,0,1,0,1,0,1,0,1,0,0,1,1,3),(30,'NULL','srednia','cienkie',1,0,0,1,0,1,1,0,1,0,1,0,1,0,3,3),(31,'NULL','srednia','cienkie',1,0,0,1,0,1,1,0,1,0,1,0,1,0,3,3),(32,'NULL','srednia','cienkie',1,0,0,1,0,1,1,0,1,0,1,0,1,0,3,3),(33,'NULL','srednia','cienkie',1,0,0,1,0,1,1,0,1,0,1,0,1,0,3,3),(34,'NULL','mala','cienkie',0,1,0,1,1,0,1,0,1,0,1,0,1,0,1,4),(35,'NULL','mala','cienkie',0,1,0,1,1,0,1,0,1,0,1,0,1,0,1,4),(36,'NULL','mala','cienkie',0,1,0,1,1,0,1,0,1,0,1,0,1,0,1,4),(37,'NULL','mala','cienkie',0,1,0,1,1,0,1,0,0,1,0,1,0,1,2,4),(38,'NULL','mala','cienkie',0,1,0,1,1,0,1,0,0,1,0,1,0,1,2,4),(39,'NULL','mala','cienkie',0,1,0,1,1,0,1,0,0,1,0,1,0,1,2,4),(40,'NULL','mala','cienkie',0,1,0,1,1,0,1,0,0,1,0,1,0,1,2,4),(41,'NULL','mala','cienkie',1,0,1,0,1,0,1,0,0,1,0,1,0,1,1,1),(42,'NULL','mala','cienkie',1,0,1,0,1,0,1,0,0,1,0,1,0,1,1,1),(43,'NULL','mala','cienkie',1,0,1,0,1,0,1,0,0,1,0,1,0,1,1,1),(44,'NULL','mala','cienkie',1,0,1,0,1,0,1,0,0,1,0,1,0,1,1,1),(45,'NULL','mala','cienkie',1,0,1,0,0,1,0,1,0,1,0,1,0,1,1,1),(46,'NULL','mala','cienkie',1,0,1,0,0,1,0,1,0,1,0,1,0,1,1,1),(47,'NULL','mala','cienkie',1,0,1,0,0,1,0,1,0,1,0,1,0,1,1,1),(48,'NULL','mala','cienkie',1,0,1,0,0,1,0,1,0,1,0,1,0,1,1,1),(49,'NULL','srednia','grube',1,0,1,0,0,1,0,1,1,0,1,0,1,0,1,1),(50,'NULL','srednia','grube',1,0,1,0,0,1,0,1,1,0,1,0,1,0,1,1),(51,'NULL','srednia','grube',1,0,1,0,0,1,0,1,1,0,1,0,1,0,1,1),(52,'NULL','mala','cienkie',1,0,1,0,1,0,0,1,0,1,0,1,1,0,1,1),(53,'NULL','mala','cienkie',1,0,1,0,1,0,0,1,0,1,0,1,1,0,1,1),(54,'NULL','mala','cienkie',1,0,1,0,1,0,0,1,0,1,0,1,1,0,1,1),(55,'NULL','duza','cienkie',0,1,0,1,0,1,1,0,1,0,1,0,1,0,1,1),(56,'NULL','duza','cienkie',0,1,0,1,0,1,1,0,1,0,1,0,1,0,1,1),(57,'NULL','duza','cienkie',0,1,0,1,0,1,1,0,1,0,1,0,1,0,1,1),(58,'NULL','mala','cienkie',1,0,1,0,0,1,0,1,0,1,1,0,1,0,1,1),(59,'NULL','mala','cienkie',1,0,1,0,0,1,0,1,0,1,1,0,1,0,1,1),(60,'NULL','mala','cienkie',1,0,1,0,0,1,0,1,0,1,1,0,1,0,1,1),(61,'NULL','mala','cienkie',1,0,1,0,0,1,0,1,0,1,1,0,1,0,1,1),(62,'Margherita','mala','cienkie',0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,3),(63,'Margherita','mala','cienkie',0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,3),(64,'Margherita','mala','cienkie',0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,3),(65,'Margherita','mala','cienkie',0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,3),(66,'Sorento','srednia','cienkie',0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,4),(67,'NULL','duza','grube',0,1,0,1,0,1,0,1,1,0,1,0,1,0,3,1),(68,'NULL','srednia','cienkie',1,0,1,0,0,1,0,1,0,1,1,0,1,0,3,3),(69,'Margherita','mala','cienkie',0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1),(70,'Sorento','srednia','grube',0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,2);
/*!40000 ALTER TABLE `zamowinia` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-25 18:06:03

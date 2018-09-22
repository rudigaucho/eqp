CREATE DATABASE  IF NOT EXISTS `equipamentos` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `equipamentos`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: equipamentos
-- ------------------------------------------------------
-- Server version	5.7.15-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `patrimonio`
--

DROP TABLE IF EXISTS `patrimonio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patrimonio` (
  `patrimonio` varchar(45) NOT NULL,
  `tecnico` varchar(80) DEFAULT NULL,
  `id_tec` int(11) DEFAULT NULL,
  `ga` varchar(80) DEFAULT NULL,
  `id_ga` int(11) DEFAULT NULL,
  `base` varchar(60) DEFAULT NULL,
  `status_equip` varchar(100) DEFAULT NULL,
  `equip` varchar(60) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`patrimonio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patrimonio`
--

LOCK TABLES `patrimonio` WRITE;
/*!40000 ALTER TABLE `patrimonio` DISABLE KEYS */;
INSERT INTO `patrimonio` VALUES ('a3202j','rudinei',391789,'cassiano',391789,'cta','9','maquina','mqn',NULL),('k2390','fabio',398726,'marcio',398899,'cta','2','maquina','HHH',NULL),('li8877','fabio',391788,'marcio',398899,'cta','0','maquina','jhhj',NULL),('lk9877','rudinei',391789,'cassiano',391789,'cta','2','maqquina','jjj',NULL);
/*!40000 ALTER TABLE `patrimonio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `protocolo` int(11) NOT NULL AUTO_INCREMENT,
  `data_envio_almox_cta` date DEFAULT NULL,
  `data_recebimento_almox_cta` date DEFAULT NULL,
  `data_envio_assis` date DEFAULT NULL,
  `data_retorno_assis` date DEFAULT NULL,
  `data_retorno_base` date DEFAULT NULL,
  `data_recebimento_ga` date DEFAULT NULL,
  `id_patrimonio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`protocolo`),
  KEY `fk_status_patrimonio_idx` (`id_patrimonio`),
  CONSTRAINT `fk_status_patrimonio` FOREIGN KEY (`id_patrimonio`) REFERENCES `patrimonio` (`patrimonio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'2017-06-06',NULL,NULL,NULL,NULL,NULL,'a3202j'),(6,'2017-05-25','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','a3202j');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `acesso` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (387766,'JAINE','ADM','3','3'),(391789,'RUDINEI ROSSALES','GA','1','1'),(398877,'EMERSON','ALMOX','2','2');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'equipamentos'
--

--
-- Dumping routines for database 'equipamentos'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-25 17:39:58

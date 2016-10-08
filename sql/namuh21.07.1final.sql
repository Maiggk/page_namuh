CREATE DATABASE  IF NOT EXISTS `namuhdb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `namuhdb`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: namuhdb
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id_categorias` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_categorias`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'SALA\r',NULL,2),(2,'COMEDOR\r',NULL,2),(3,'RECÁMARA\r',NULL,2),(4,'ILUMINACIÓN\r',NULL,2),(5,'TAPETES\r',NULL,2),(6,'TEXTIL\r',NULL,2),(7,'DECOR\r',NULL,2),(8,'PIEZAS UNICAS\r',NULL,2),(9,'MUSEO NAMUH\r',NULL,2),(10,'ESTUDIO\r',NULL,2),(11,'EXTERIOR\r',NULL,2),(12,'ARQUITECTONICO\r',NULL,1);
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'Inactivo'),(2,'Activo'),(3,'Eliminado');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupos`
--

DROP TABLE IF EXISTS `grupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `id_categoria` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupos`
--

LOCK TABLES `grupos` WRITE;
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
INSERT INTO `grupos` VALUES (1,'MESAS','',1,2),(2,'SILLAS OCASIONALES','',1,2),(3,'CONSOLAS','',1,2),(4,'SOFAS','',1,2),(5,'GABINETES','',1,2),(6,'LIBREROS','',1,2),(7,'SILLAS','',2,2),(8,'BANCOS','',2,2),(9,'BANCAS','',2,2),(10,'MESAS','',2,2),(11,'BUFET','',2,2),(12,'TABLEWARE','',2,2),(13,'CANTINA','',2,2),(14,'CABECERA','',3,2),(15,'BURÓ','',3,2),(16,'PIECERA','',3,2),(17,'ASIENTO','',3,2),(18,'MESA AUXILIAR','',3,2),(19,'ESPEJOS','',3,2),(20,'PISO','',4,2),(21,'TECHO','',4,2),(22,'PARED','',4,2),(23,'MESA','',4,2),(24,'BOMBILLAS VINTAGE','',4,2),(25,'VELA','',4,2),(26,'HECHO A MANO','',5,2),(27,'YUTE','',5,2),(28,'LONA','',5,2),(29,'NOMADAS','',5,2),(30,'PIEL','',5,2),(31,'FUNDA','',6,2),(32,'COJIN','',6,2),(33,'CAMINO DE MESA','',6,2),(34,'ROPA DE CAMA','',6,2),(35,'CRISTALERÍA','',7,2),(36,'ESPEJOS','',7,2),(37,'VELAS','',7,2),(38,'ACCESORIOS','',7,2),(39,'BUFET','',8,2),(40,'MESA','',8,2),(41,'BAUL','',8,2),(42,'SILLA','',8,2),(43,'GABINETE','',8,2),(44,'CAMARA','',9,2),(45,'CAJA FUERTE','',9,2),(46,'TORA','',9,2),(47,'ESCRITORIO','',10,2),(48,'SILLAS','',10,2),(49,'LIBREROS','',10,2),(50,'MESA LATERAL','',10,2),(51,'ACCESORIOS','',10,2),(52,'MESAS','',11,2),(53,'SILLA','',11,2),(54,'SALA','',11,2),(55,'ACCESORIOS','',11,2),(56,'BANCAS','',11,2),(65,'LANA',NULL,5,2),(66,'CAMAS PARA PERRO',NULL,11,2),(67,'PUFF',NULL,11,2),(68,'CONSOLAS',NULL,11,2);
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `namuhdb_usuarios`
--

DROP TABLE IF EXISTS `namuhdb_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `namuhdb_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ap_paterno` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ap_materno` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `username` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `namuhdb_usuarios`
--

LOCK TABLES `namuhdb_usuarios` WRITE;
/*!40000 ALTER TABLE `namuhdb_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `namuhdb_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(250) DEFAULT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `precio` float DEFAULT NULL,
  `extra` text,
  `imagen` text,
  `estado` int(11) DEFAULT '2',
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'01RM05373G','CABECERA ESTELLA ','<p>\r\n	218 x 5 x 146</p>\r\n',13843.5,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','9311d-01rm05373g.jpg',2),(2,'01RM05368G','CABECERA CARLOS','<p>\r\n	173 x 30 x 150</p>\r\n',17440,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','91cb2-01rm05368g.jpg',2),(3,'02-1261','BURO NAGA','<p>\r\n	66 x 41 x 82</p>\r\n',12510,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','a5b23-02-1261.jpg',2),(4,'00-770','BURO 3 CAJONES','<p>\r\n	65 x 42 x 85</p>\r\n',9918,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','c22a3-00-770.jpg',2),(5,'02-1298','MESA CENTRO BAUL ','<p>\r\n	143 x 69 x 46</p>\r\n',18250,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','ae8c9-02-1298.jpg',2),(6,'01RM07147','MESA LATERAL VALENCIA','<p>\r\n	70 x 70 x 50</p>\r\n',8045,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','13fc6-01rm07147.jpg',2),(7,'01RM04588M','MESA 2 NIVELES ','<p>\r\n	122.5 x 58 x 74</p>\r\n',9704,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','d486c-01rm04588m.jpg',2),(8,'00-38','MESA REMO','<p>\r\n	D46 x H59</p>\r\n',6564,'<p>\r\n	&nbsp; &nbsp;&nbsp;</p>\r\n','b377e-00-38.jpg',2),(9,'02RA02587C','PUFF VINTAGE MUNDI','<p>\r\n	D60</p>\r\n',2929,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','6e383-02ra02587c.jpg',2),(10,'01-705','PUFF FATO','<p>\r\n	75 x 120</p>\r\n',3687,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','cc7f9-01-705.jpg',2),(11,'01-706','PUFF EMMA','<p>\r\n	75 x 120</p>\r\n',3687,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','0d61b-01-706.jpg',2),(12,'01RM01539C','SILLA RAQUEL','<p>\r\n	50 x 59 x 102</p>\r\n',8241,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','eaa61-01rm01539c.jpg',2),(13,'01-1375','SILLA NEGRA X','<p>\r\n	47 x 42 x 89.5</p>\r\n',1985,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','6ff1a-01-1375.jpg',2),(14,'00-113','ESPEJO TORRE 3','<p>\r\n	27 x 82 x 3</p>\r\n',1742,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','217ca-00-113.jpg',2),(15,'00-1930','ESPEJO SIAM','<p>\r\n	71 x 71 x 7.5</p>\r\n',4792,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','1b156-00-1930.jpg',2),(16,'00RA07158','ESPEJO MIHRAB CONVEXO','<p>\r\n	D51</p>\r\n',3914,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','535ba-00ra07158.jpg',2),(17,'02-1027','ESPEJO IZMIR','<p>\r\n	D112 x H5</p>\r\n',8788,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','3d497-02-1027.jpg',2),(18,'02AA07211','ESPEJO ATALA','<p>\r\n	41 x 8 x 35 APROX</p>\r\n',941,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','cf539-02aa07211.jpg',2),(19,'00-520','TAPETE DE RAYAS TENA','<p>\r\n	180 x 120 APROX</p>\r\n',3508,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','a9078-00-520.jpg',2),(20,'00-380','TAPETE DE LANA YACA','<p>\r\n	180 x 122</p>\r\n',3566,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','28f79-00-380.jpg',2),(21,'02RT00071GC','TAPETE YUTE CAFE','<p>\r\n	400 x 300</p>\r\n',14857.5,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','cc849-02rt00071gc.jpg',2),(22,'02RT04237GC','TAPETE YUTE BERENJENA','<p>\r\n	400 x 300</p>\r\n',14857.5,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','adda4-02rt04237gc.jpg',2),(23,'02RT00060GC','TAPETE YUTE AZUL','<p>\r\n	200 x 300</p>\r\n',7429,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','7c00e-02rt00060gc.jpg',2),(24,'02RT02590M','TAPETE VINTAGE CRUZ','<p>\r\n	130 x 180</p>\r\n',1741,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','97f4c-02rt02590m.jpg',2),(25,'02RT00127GC','TAPETE TIRAS DE PIEL NEGRO','<p>\r\n	300 x 300</p>\r\n',12219.5,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','c4227-02rt00127gc.jpg',2),(26,'02RT00133GC','TAPETE TIRAS DE PIEL BEIGE','<p>\r\n	300 x 300</p>\r\n',12219.5,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','190ad-02rt00133gc.jpg',2),(27,'01-1687','FUNDA P/COJIN LECHUZA','<p>\r\n	50 x 50</p>\r\n',245,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','26eda-01-1687.jpg',2),(28,'01-1690','FUNDA P/COJIN HEXAGONO','<p>\r\n	50 x 50</p>\r\n',245,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','5c729-01-1690.jpg',2),(29,'01-1684','FUNDA P/COJIN BINDI','<p>\r\n	50 x 50</p>\r\n',245,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','0dbec-01-1684.jpg',2),(30,'00RT07100','COJIN TIQUE','<p>\r\n	60 x 35</p>\r\n',1400,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','b5078-00rt07100.jpg',2),(31,'00-1507','COJIN MERRIGOLD','<p>\r\n	60 x 32</p>\r\n',950,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','d478c-00-1507.jpg',2),(32,'02RA02584C','COJIN C/RELLENO VINTAGE NR','<p>\r\n	50 x 50</p>\r\n',879,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','cc765-02ra02584c.jpg',2),(33,'00-2105','COJIN BALCHE','<p>\r\n	60 x 30</p>\r\n',1463,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','699b5-00-2105.jpg',2),(34,'04RA05817M','CAMINO MESA','<p>\r\n	150 x 52</p>\r\n',1885,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','63a78-04ra05817m.jpg',2),(35,'04RT01601G','FUNDA EDR. KING YUCA/LINO','<p>\r\n	275 x 220</p>\r\n',5067,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','25291-04rt01601g.jpg',2),(36,'04RT01603C','SABANA FLAT IND. YUCA/ LINO','<p>\r\n	160 x 280</p>\r\n',2172,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','dda5f-04rt01603c.jpg',2),(37,'04-2163','MESA COLONIAL DE TECA','<p>\r\n	D60 x H70</p>\r\n',5418,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','a1c21-04-2163.jpg',2),(38,'00-111','MESA MOTU ','<p>\r\n	60 x 60 x 34</p>\r\n',11527,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','853d2-00-111.jpg',2),(39,'03-1424','MESA CENTRO 50-100 AÑOS PRAVAT','<p>\r\n	100 x 90 x 62</p>\r\n',28139,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','2344b-03-1424.jpg',2),(40,'01-698','CAMA LOLA MORADA P/EXTERIOR','<p>\r\n	55 x 40 x 10</p>\r\n',819,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','e4eed-01-698.jpg',2),(41,'01-704','PUFF POLY P/EXTERIOR','<p>\r\n	135 x 180</p>\r\n',3648,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','95427-01-704.jpg',2),(42,'04-2005','ESCULTURA DE RAIZ DE TECA C/BASE','<p>\r\n	180 x 50 x 210</p>\r\n',253973,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','e7851-04-2005.jpg',2),(43,'03-1445','CANDELABRO TECA 10 AÑOS GDE','<p>\r\n	&nbsp;&nbsp;</p>\r\n',375,'<p>\r\n	&nbsp; &nbsp;&nbsp;</p>\r\n','55acd-03-1445.jpg',2),(44,'02AA02428C','PISO PARQUET DE TECA','<p>\r\n	60 x 60</p>\r\n',1846,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','e539e-02aa02428c.jpg',2),(45,'04-1995','CUBIERTA P/CONSOLA LICHI NEGRA','<p>\r\n	250 x 85 x 10 APROX</p>\r\n',27911,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','3f6a1-04-1995.jpg',2),(46,'04-1999','BANCA DE LICHI ','<p>\r\n	380 x 60 x 25 APROX</p>\r\n',104668,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','44f11-04-1999.jpg',2),(47,'02RM07202','MESA LATERAL CAROLA ','<p>\r\n	47 x 47 x 39 CMS APROX</p>\r\n',3242,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','53a4f-02rm07202.jpg',2),(48,'03-1162','MESA LATERAL ORIGO','<p>\r\n	30 x 30 x 43 CMS APROX / DE 50 A 100 A&Ntilde;OS DE ANTIG&Uuml;EDAD</p>\r\n',4377,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','b9629-03-1162.jpg',2),(49,'01RM07150','MESA LATERAL TORINO ','<p>\r\n	48.5 x 75 x 55 CMS APROX</p>\r\n',5551,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','19ea9-01rm07150.jpg',2),(50,'01RM07147','MESA LATERAL VALENCIA ','<p>\r\n	70 x 70 x 50</p>\r\n',8045,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','e59a5-01rm07147.jpg',2),(51,'00-40','MESA ULISES ','<p>\r\n	D116 x H41 CUBIERTA DE MARMOL/NOGAL</p>\r\n',17115,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','77144-00-40.jpg',2),(52,'02-1287','MESA DE CENTRO SUMBA ','<p>\r\n	137 x 92 x 49</p>\r\n',21607,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','1eeb6-02-1287.jpg',2),(53,'02-1298','MESA DE CENTRO BAÚL ','<p>\r\n	140 x 69 x 46 APROX</p>\r\n',18250,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','16f99-02-1298.jpg',2),(54,'01RM07146','MESA DE CENTRO VALENCIA','<p>\r\n	130 x 70 x 40</p>\r\n',9879,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','63f62-01rm07146.jpg',2),(55,'00RM06249G','CONSOLA FILIPO ','<p>\r\n	214 x 40 x 57</p>\r\n',9903,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','dce59-00rm06249g.jpg',2),(56,'02RM07243','CONSOLA KALI','<p>\r\n	68 x 36 x 75</p>\r\n',10265,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','98a5f-02rm07243.jpg',2),(57,'01RM04587M','CONSOLA MEDIA LUNA','<p>\r\n	142 x 56 x 88</p>\r\n',10044,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','72d93-01rm04587m.jpg',2),(58,'02-1288','CONSOLA SUMBA ','<p>\r\n	182 x 46 x 90</p>\r\n',18764,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','b6c3b-02-1288.jpg',2),(59,'00RM07074G','SOFA HOMERO CHOCOLATE','<p>\r\n	230 x 110 x 67</p>\r\n',71050,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','2f216-00rm07074g.jpg',2),(60,'01RM04694M','SILLON ALVA','<p>\r\n	77 x 76.5 x 134.5</p>\r\n',15848,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','5a71b-01rm04694m.jpg',2),(61,'00RM07076M','SILLON HORACIO','<p>\r\n	61 x 65 x 70</p>\r\n',19140,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','c28fb-00rm07076m.jpg',2),(62,'00RM00859C','GABINETE MEDERIK','<p>\r\n	80 x 55 x 248</p>\r\n',24500,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','34066-00rm00859c.jpg',2),(63,'01RM06026M','GABINETE PARA MEDICINA BLANCO ','<p>\r\n	120 x 51 x 150</p>\r\n',70644,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','0234b-01rm06026m.jpg',2),(64,'00RM00986C','GABINETE PHARMACIST','<p>\r\n	80 x 46 x 250</p>\r\n',27720,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','bd232-00rm00986c.jpg',2),(65,'00RM04596G','LIBRERO JOSEL ','<p>\r\n	111 x 50 x 252</p>\r\n',22320,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','64bdc-00rm04596g.jpg',2),(66,'00RI04732G','LAMPARA DE PISO CON ESFERAS','C/PANTALLA 30 x 30 x 189',6062,'\r',NULL,2),(67,'00-289','LAMPARA DE AGUA LATON','DORADA ICOSAEDRO 38 x 45',4370,'\r',NULL,2),(68,'00-105','LAMPARA BALERO','12 x 16',3529,'\r',NULL,2),(69,'00-83','LAMPARA HORMIGON GRANDE','D27 x H24',1882,'\r',NULL,2),(70,'00-1471','LAMPARA KABUL GRANDE','D90 x H41/CADENA 2M',8200,'\r',NULL,2),(71,'00-856','LAMPARA LOTUS','',3432,'\r',NULL,2),(72,'00-1674','LAMPARA OTTO','D32 x H36 ',4671,'COBRE\r',NULL,2),(73,'00-252','LAMPARA UNIVERSO DE LATON','DORADA 12 LADOS',4175,'\r',NULL,2),(74,'02-1307','ARBOTANTE DE MARMOL  CHICO','14 x 13 x 26',2502,'\r',NULL,2),(75,'00-2155','ARBOTANTE MUTI GRIS OSCURO','24.8 x 47 x 2',2186,'\r',NULL,2),(76,'00RI00762C','LAMPARA DE MESA PETRANOVA OBSCURA ','C/1 FOCO EDISON LARGO 28 x 28 x 100',3840,'\r',NULL,2),(77,'00-2498','LINTERNILLA JALI DE MESA CHICA','D22 x H26',2125,'\r',NULL,2),(78,'02-859','BOTELLA PARA VINO MADA ','<p>\r\n	D9 x H25</p>\r\n',131,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','77c86-02-859.jpg',2),(79,'02-890','CONTENEDOR BISCOTTI ','<p>\r\n	D15 x H20</p>\r\n',616,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','dd342-02-890.jpg',2),(80,'02-888','CONTENEDOR DOLCE ','<p>\r\n	D9 x H16</p>\r\n',235,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','83620-02-888.jpg',2),(81,'02-861','JARRA PARA LECHE ','<p>\r\n	D8 x D25</p>\r\n',308,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','8a880-02-861.jpg',2),(82,'02RA06903C','BOTELLA ACQUA ','<p>\r\n	D18 x H32</p>\r\n',569,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','904ac-02ra06903c.jpg',2),(83,'02RA01491C','BOTELLA PORTO','<p>\r\n	10 x 10 x 19</p>\r\n',308,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','9c9ea-02ra01491c.jpg',2),(84,'00-115','ESPEJO TORRE 5 PIEZAS','<p>\r\n	27 x 137 x 3</p>\r\n',2903,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','5191e-00-115.jpg',2),(85,'00-268','ESPEJO SOL','<p>\r\n	D90 /NOGAL Y VARIAS MADERAS</p>\r\n',7287,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','16535-00-268.jpg',2),(86,'00-263','ESPEJO LANDI PLANO','<p>\r\n	SET 9</p>\r\n',7879,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','5f621-00-263.jpg',2),(87,'00RA03473G','ESPEJO CARLO GRANDE','<p>\r\n	D80</p>\r\n',3500,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','e7359-00ra03473g.jpg',2),(88,'02-1312','LINTERNILLA OMAN GRANDE','<p>\r\n	32 x 32 x 90</p>\r\n',4435,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','c34a9-02-1312.jpg',2),(89,'03-1447','CANDELABRO PRAVAT MEDIANO ','<p>\r\n	10-20 A&Ntilde;OS</p>\r\n',225,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','a25b7-03-1447.jpg',2),(90,'00RA06342M','VELA ESFERA ESCAMADA CREMA CHICA','<p>\r\n	D16 C/1 VELA</p>\r\n',385,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','ba7e6-00ra06342m.jpg',2),(91,'00RA06343M','VELA ESFERA ESCAMADA GRIS CHICA','<p>\r\n	D16 C/1 VELA</p>\r\n',385,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','e1384-00ra06343m.jpg',2),(92,'02AA06699C','PLATON PARAT ','<p>\r\n	48 x 34 x 7</p>\r\n',1825,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','7d35d-02aa06699c.jpg',2),(93,'01AA04418C','CESTO SHANXI DE RATAN ','<p>\r\n	60-40 x 23 x 39 APROX</p>\r\n',2567,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','f0aa4-01aa04418c.jpg',2),(94,'03-1450','BOWL','<p>\r\n	10-20 A&Ntilde;OS 45 x 20 x 7</p>\r\n',2001,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','650c2-03-1450.jpg',2),(95,'01RA03160C','BUSTO MAO','<p>\r\n	18 x 25 x 10</p>\r\n',1204,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','974d0-01ra03160c.jpg',2),(96,'01RA06514C','ESCULTURA LUCIUS','<p>\r\n	36 x 36 x 68</p>\r\n',3770,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','8f10d-01ra06514c.jpg',2),(97,'01RM04520C','SILLA INDUSTRIAL ','<p>\r\n	36 x 52 x 86</p>\r\n',3863,'<p>\r\n	ACERO INOXIDABLE</p>\r\n','611dd-01rm04520c.jpg',2),(98,'01-1374','SILLA BISTROT','<p>\r\n	48 x 43 x 90</p>\r\n',1528,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','47aca-01-1374.jpg',2),(99,'01RM01539C','SILLA RAQUEL','<p>\r\n	50 x 59 x 102</p>\r\n',8241,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','59149-01rm01539c.jpg',2),(100,'07RM02718C','SILLA BAR ÁVILA ','<p>\r\n	54 x 44 x 113</p>\r\n',3445,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','e3de8-07rm02718c.jpg',2),(101,'08RM05289M','SILLA MAX BLANCA ','<p>\r\n	62 x 52 x 80</p>\r\n',15247,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','f36a3-08rm05289m.jpg',2),(102,'08RM04892M','SILLA MAX OLIVO ','<p>\r\n	62 x 52 x 80</p>\r\n',15247,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','b8ad7-08rm04892m.jpg',2),(103,'01RM07142','SILLA MILÁN ','<p>\r\n	60.5 x 47 x 89</p>\r\n',3664,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','47a78-01rm07142.jpg',2),(104,'00-87','BANCO AARON','<p>\r\n	48 x 39 x 86</p>\r\n',13739,'<p>\r\n	NOGAL</p>\r\n','ef8ff-00-87.jpg',2),(105,'02RM03677C','BANCO INDUSTRIAL ','<p>\r\n	30 x 30 x 70</p>\r\n',2476,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','0be5e-02rm03677c.jpg',2),(106,'00-1681','BANCO OSKAR','<p>\r\n	41 x 44 x 82</p>\r\n',10097,'<p>\r\n	NOGAL</p>\r\n','e3d06-00-1681.jpg',2),(107,'02-1309','BANCO BANTI ','<p>\r\n	D36 x H41</p>\r\n',4321,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','698c2-02-1309.jpg',2),(108,'01RM02041G','COMEDOR AMPARO MEDIANO','<p>\r\n	280 x 110 x 78</p>\r\n',49525,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','90e24-01rm02041g.jpg',2),(109,'01RM07145','COMEDOR VALENCIA','<p>\r\n	240 x 100 x 76</p>\r\n',18771,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','ba06f-01rm07145.jpg',2),(110,'00-1663','MESA ASKANA','<p>\r\n	D90 x H70 C/CUBIERTA DE VIDRIO</p>\r\n',11900,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','14209-00-1663.jpg',2),(111,'02-1289','MESA BANTI MEDIANA','<p>\r\n	D76 x H78</p>\r\n',21607,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','a0c08-02-1289.jpg',2),(112,'00-684','MESA JULIÁN REDONDA ','<p>\r\n	D120 x H75</p>\r\n',26100,'<p>\r\n	NOGAL</p>\r\n','9a8ea-00-684.jpg',2),(113,'01RM07144','COMEDOR BILBAO ','<p>\r\n	140 x 140 x 76</p>\r\n',18582,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','66962-01rm07144.jpg',2),(114,'00RM03271G','PERIQUERA DE TECA','<p>\r\n	300 x 110 x 90</p>\r\n',41120,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','27b4b-00rm03271g.jpg',2),(115,'01-825','BUFFET CON 5 PUERTAS II','<p>\r\n	218 x 48 x 92</p>\r\n',83642,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','aab2b-01-825.jpg',2),(116,'01-772','BUFFET CON 5 PUERTAS IV','<p>\r\n	224 x 45 x 87</p>\r\n',65598,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','b791d-01-772.jpg',2),(117,'01RM00264M','BUFFET XIAN ','<p>\r\n	170 x 50 x 80</p>\r\n',25753,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','7fac0-01rm00264m.jpg',2),(118,'00-752','PLATO BASE MARIE ','<p>\r\n	29 x 29 x 2.5</p>\r\n',215,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','995d1-00-752.jpg',2),(119,'00RA01261C','PLATO BASE TUSCANY ','<p>\r\n	33 x 33 x 3.5</p>\r\n',207,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','02498-00ra01261c.jpg',2),(120,'00RA01267C','PLATO BASE YVANA','<p>\r\n	30 x 30 x 3</p>\r\n',176,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','ec454-00ra01267c.jpg',2),(121,'00RA01301C','TAZA TUSCANY CON PLATO','<p>\r\n	9 x 8</p>\r\n',147,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','c451c-00ra01301c.jpg',2),(122,'04-274','CHAROLA DE RATÁN IV','<p>\r\n	D50 x H8</p>\r\n',980,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','45162-04-274.jpg',2),(123,'11RA05739C','CHAROLA DE RATÁN REDONDA','<p>\r\n	48 x 48 x 5</p>\r\n',1024,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','d4274-11ra05739c.jpg',2),(124,'11RA05726C','TERMO RATÁN','<p>\r\n	16 x 16 x 24</p>\r\n',2791,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','70ef8-11ra05726c.jpg',2),(125,'02-862','CAPELO KAFEDI CON CUERDA','<p>\r\n	D25 x H20 APROX</p>\r\n',517,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','8c67f-02-862.jpg',2),(126,'01-825','BUFET 5 PTS','<p>\r\n	218 x 48 x 92</p>\r\n',83642,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','be048-01-825.jpg',2),(127,'01-772','BUFET 5 PTS ','<p>\r\n	224 x 45 x 87</p>\r\n',65598,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','48ad3-01-772.jpg',2),(128,'03-1424','MESA CENTRO PRAVAT ','<p>\r\n	100 x 90 x 62 / 50-100 A&Ntilde;OS</p>\r\n',28139,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','41fac-03-1424.jpg',2),(129,'03-1171','MESA CENTRO PRAVAT ','<p>\r\n	100 x 40 x 38 / 150-200 A&Ntilde;OS</p>\r\n',15008,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','ef77e-03-1171.jpg',2),(130,'03-1452','MESA CENTRO SUNAN ','<p>\r\n	144 x 105 x 45 / 10-20 A&Ntilde;OS</p>\r\n',56278,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','ec9d5-03-1452.jpg',2),(131,'04AA03164M','CAJA FUERTE','<p>\r\n	165 x 70 x 60</p>\r\n',255971,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','6f6b0-04aa03164m.jpg',2),(132,'04AA03166C','CAMARA DE PLACAS','<p>\r\n	&nbsp; &nbsp;</p>\r\n',356134,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','46252-04aa03166c.jpg',2),(133,'03AA00163C','TAMBOR DE BRONCE ','<p>\r\n	40 x 40 x 60</p>\r\n',190766,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','eb70e-03aa00163c.jpg',2),(134,'02AM03336M','PUERTA ANTIGUA RAJASTAN','<p>\r\n	170 x 88</p>\r\n',108054,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','c1a0a-02am03336m.jpg',2),(135,'01-1882','PORTAVIANDAS CAZADOR ROJO','<p>\r\n	79 x 79 x 102</p>\r\n',82500,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','7cfc2-01-1882.jpg',2),(136,'11AM05685C','ALTAR','<p>\r\n	75 x 65 x 62</p>\r\n',37700,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','bafaa-11am05685c.jpg',2);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prueba`
--

DROP TABLE IF EXISTS `prueba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prueba` (
  `idprueba` int(11) NOT NULL AUTO_INCREMENT,
  `dato` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idprueba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prueba`
--

LOCK TABLES `prueba` WRITE;
/*!40000 ALTER TABLE `prueba` DISABLE KEYS */;
/*!40000 ALTER TABLE `prueba` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos`
--

DROP TABLE IF EXISTS `tipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `id_grupo` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT '2',
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos`
--

LOCK TABLES `tipos` WRITE;
/*!40000 ALTER TABLE `tipos` DISABLE KEYS */;
INSERT INTO `tipos` VALUES (1,'CENTRO','',1,1,2),(2,'LATERAL','',1,1,2),(3,'ALINE','',2,1,1),(4,'PIEL','',2,1,1),(5,'PARA SOFA','',3,1,1),(6,'MUEBLE PLASMA','',3,1,1),(7,'BUFET','',3,1,1),(8,'ESCUADRA','',4,1,1),(9,'4 PLAZAS','',4,1,1),(10,'3 PLAZAS','',4,1,1),(11,'2 PLAZAS','',4,1,1),(12,'INDIVIDUAL','',4,1,1),(13,'SOFA CAMA','',4,1,1),(14,'CHAISE LONGUE','',4,1,1),(15,'TABURETE','',4,1,1),(16,'GIRATORIAS','',7,2,1),(17,'METAL','',7,2,1),(18,'TELA','',7,2,1),(19,'ALTAS','',7,2,1),(20,'PIEL','',7,2,1),(21,'QUETZAL','',8,2,1),(22,'AARON','',8,2,1),(23,'KARIMA','',9,2,1),(24,'CAMPESINO','',9,2,1),(25,'RECTANGULAR','',10,2,1),(26,'REDONDA','',10,2,1),(27,'PERIQUERA','',10,2,1),(28,'CUADRADA','',10,2,1),(29,'VAJILLA','',12,2,1),(30,'CESTERÍA','',12,2,1),(31,'CAMINO PARA MESA','',12,2,1),(32,'INDIVIDUALES','',12,2,1),(33,'CRISTALERIA','',12,2,1),(34,'TABURETE','',17,3,1),(35,'CHAISE LONGUE','',17,3,1),(36,'PUFF','',17,3,1),(37,'SILLÓN','',17,3,1),(38,'PARED','',19,3,1),(39,'PISO','',19,3,1),(40,'LANA','',26,5,1),(41,'YORUK','',29,5,1),(42,'HEMP DESLAVADO','',29,5,1),(43,'LANA','',31,6,1),(44,'PIE DE CAMA','',34,6,1),(45,'SABANA','',34,6,1),(46,'RAICES','',40,8,1),(47,'PUERTAS','',40,8,1),(48,'CAMAS DE OPIO','',40,8,1),(49,'PETRIFICADAS','',40,8,1),(50,'LYCHEE','',40,8,1),(51,'RAICES','',48,10,1),(52,'PUERTAS','',48,10,1),(53,'CAMAS DE OPIO','',48,10,1),(54,'PETRIFICADAS','',48,10,1),(55,'LYCHEE','',48,10,1),(56,'RAICES','',53,11,1),(57,'PUERTAS','',53,11,1),(58,'CAMAS DE OPIO','',53,11,1),(59,'PETRIFICADAS','',53,11,1),(60,'LYCHEE','',53,11,1),(65,'CENTRO',NULL,40,8,2);
/*!40000 ALTER TABLE `tipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `union_grupo_categoria`
--

DROP TABLE IF EXISTS `union_grupo_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `union_grupo_categoria` (
  `id_union_grupo_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `id_tipo` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_union_grupo_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `union_grupo_categoria`
--

LOCK TABLES `union_grupo_categoria` WRITE;
/*!40000 ALTER TABLE `union_grupo_categoria` DISABLE KEYS */;
INSERT INTO `union_grupo_categoria` VALUES (1,3,14,0,1),(2,3,14,0,2),(3,3,15,0,3),(4,3,15,0,4),(5,3,16,0,5),(6,3,18,0,6),(7,3,18,0,7),(8,3,18,0,8),(9,3,17,0,9),(10,3,17,0,10),(11,3,17,0,11),(12,3,17,0,12),(13,3,17,0,13),(14,3,19,0,14),(15,3,19,0,15),(16,3,19,0,16),(17,3,19,0,17),(18,3,19,0,18),(19,5,65,0,19),(20,5,65,0,20),(21,5,27,0,21),(22,5,27,0,22),(23,5,27,0,23),(24,5,28,0,24),(25,5,30,0,25),(26,5,30,0,26),(27,6,31,0,27),(28,6,31,0,28),(29,6,31,0,29),(30,6,32,0,30),(31,6,32,0,31),(32,6,32,0,32),(33,6,32,0,33),(34,6,33,0,34),(35,6,34,0,35),(36,6,34,0,36),(37,11,52,0,37),(38,11,52,0,38),(39,11,52,0,39),(40,11,66,0,40),(41,11,67,0,41),(42,11,55,0,42),(43,11,55,0,43),(44,11,55,0,44),(45,11,68,0,45),(46,11,56,0,46),(47,1,1,2,47),(48,1,1,2,48),(49,1,1,2,49),(50,1,1,2,50),(51,1,1,1,51),(52,1,1,1,52),(53,1,1,1,53),(54,1,1,1,54),(55,1,3,0,55),(56,1,3,0,56),(57,1,3,0,57),(58,1,3,0,58),(59,1,4,0,59),(60,1,4,0,60),(61,1,4,0,61),(62,1,5,0,62),(63,1,5,0,63),(64,1,5,0,64),(65,1,6,0,65),(66,4,20,0,66),(67,4,21,0,67),(68,4,21,0,68),(69,4,21,0,69),(70,4,21,0,70),(71,4,21,0,71),(72,4,21,0,72),(73,4,21,0,73),(74,4,22,0,74),(75,4,22,0,75),(76,4,23,0,76),(77,4,23,0,77),(78,7,35,0,78),(79,7,35,0,79),(80,7,35,0,80),(81,7,35,0,81),(82,7,35,0,82),(83,7,35,0,83),(84,7,36,0,84),(85,7,36,0,85),(86,7,36,0,86),(87,7,36,0,87),(88,7,37,0,88),(89,7,37,0,89),(90,7,37,0,90),(91,7,37,0,91),(92,7,38,0,92),(93,7,38,0,93),(94,7,38,0,94),(95,7,38,0,95),(96,7,38,0,96),(97,2,7,0,97),(98,2,7,0,98),(99,2,7,0,99),(100,2,7,0,100),(101,2,7,0,101),(102,2,7,0,102),(103,2,7,0,103),(104,2,8,0,104),(105,2,8,0,105),(106,2,8,0,106),(107,2,8,0,107),(108,2,10,0,108),(109,2,10,0,109),(110,2,10,0,110),(111,2,10,0,111),(112,2,10,0,112),(113,2,10,0,113),(114,2,10,0,114),(115,2,11,0,115),(116,2,11,0,116),(117,2,11,0,117),(118,2,12,0,118),(119,2,12,0,119),(120,2,12,0,120),(121,2,12,0,121),(122,2,12,0,122),(123,2,12,0,123),(124,2,12,0,124),(125,2,12,0,125),(126,8,39,0,126),(127,8,39,0,127),(128,8,40,65,128),(129,8,40,65,129),(130,8,40,65,130),(131,9,0,0,131),(132,9,0,0,132),(133,9,0,0,133),(134,9,0,0,134),(135,9,0,0,135),(136,9,0,0,136);
/*!40000 ALTER TABLE `union_grupo_categoria` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-21 14:16:29

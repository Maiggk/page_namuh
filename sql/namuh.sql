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
-- Table structure for table `albums_postales`
--

DROP TABLE IF EXISTS `albums_postales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albums_postales` (
  `id_albums_postales` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_album` text,
  `caratula_album` text,
  PRIMARY KEY (`id_albums_postales`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albums_postales`
--

LOCK TABLES `albums_postales` WRITE;
/*!40000 ALTER TABLE `albums_postales` DISABLE KEYS */;
INSERT INTO `albums_postales` VALUES (1,'Matriz namuh','c217e-intro-home6.jpg'),(2,'prueba','b748f-2.jpg'),(3,'prueba 4','123d4-2.jpg');
/*!40000 ALTER TABLE `albums_postales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artistas`
--

DROP TABLE IF EXISTS `artistas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artistas` (
  `id_artista` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCompleto` varchar(500) DEFAULT NULL,
  `nombre_galeria` varchar(500) DEFAULT NULL,
  `biografia` text,
  `descripcion` text,
  `estado_artista` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_artista`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artistas`
--

LOCK TABLES `artistas` WRITE;
/*!40000 ALTER TABLE `artistas` DISABLE KEYS */;
INSERT INTO `artistas` VALUES (1,'Flow','El flow','<p>\r\n	fsdf</p>\r\n','<p>\r\n	asdfsdf</p>\r\n',1),(2,'May','May dsd','<p>\r\n	casdcsd</p>\r\n','<p>\r\n	casdc</p>\r\n',1),(3,'Cruz','El may Cruz ','<p>\r\n	asdfasdf</p>\r\n','<p>\r\n	sdfgsdfg</p>\r\n',1);
/*!40000 ALTER TABLE `artistas` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `categorias` VALUES (1,'SALA\r',NULL,2),(2,'COMEDOR\r',NULL,2),(3,'RECÁMARA\r',NULL,2),(4,'ILUMINACIÓN\r',NULL,2),(5,'TAPETES\r',NULL,2),(6,'TEXTIL\r',NULL,2),(7,'DECOR\r',NULL,2),(8,'PIEZAS UNICAS\r',NULL,2),(9,'MUSEO NAMUH\r',NULL,2),(10,'ESTUDIO',NULL,1),(11,'EXTERIOR\r',NULL,2),(12,'ARQUITECTONICO\r',NULL,1);
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
-- Table structure for table `galeria_artistas`
--

DROP TABLE IF EXISTS `galeria_artistas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeria_artistas` (
  `id_galeria_artista` int(11) NOT NULL AUTO_INCREMENT,
  `id_artista` int(11) DEFAULT NULL,
  `foto_ruta` text,
  `detalles` text,
  `estado_galeria_artista` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_galeria_artista`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeria_artistas`
--

LOCK TABLES `galeria_artistas` WRITE;
/*!40000 ALTER TABLE `galeria_artistas` DISABLE KEYS */;
INSERT INTO `galeria_artistas` VALUES (1,1,'82ee7-14333780_10154963232176840_782409773556675836_n.jpg','<div>\r\n	Por ello, cada producto es un tema inagotable de conversaci&oacute;n.&nbsp;</div>\r\n<div>\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Recientemente, se cre&oacute; un despacho de dise&ntilde;o industrial, Studio Namuh, que complementa un negocio disruptivo en iluminaci&oacute;n y mobiliario, diferente y osado, as&iacute; como una f&aacute;brica moderna que materializa su filosof&iacute;a en productos innovadores.</div>\r\n<div>\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sus modelos son siempre cambiantes, &nbsp;con una alta rotaci&oacute;n de inventario pero sin alterar su estilo de colores neutros, ricos en maderas y tierras ocres, delicadamente combinados con metales y con el nuevo exotismo mexicano, que se funden en piezas extravangantes dif&iacute;cil de igualar.</div>\r\n',1),(2,3,'7ea46-14333581_1594698290833490_4603846850566859406_n.jpg','   Por ello, cada producto es un tema inagotable de conversación. ',1),(3,2,'493c6-14355160_544691285732401_7444550057709210252_n.jpg','   Por ello, cada producto es un tema inagotable de conversación. ',1),(4,1,'51bc9-14333687_528142914051843_7294542294029988564_n.jpg','   Por ello, cada producto es un tema inagotable de conversación. ',1),(5,1,'22867-14316720_544697455731784_7382846259359985869_n.jpg','   Por ello, cada producto es un tema inagotable de conversación. ',1),(6,1,'1ce58-14344849_672254092951620_5209635002785289616_n.jpg','   Por ello, cada producto es un tema inagotable de conversación. ',1);
/*!40000 ALTER TABLE `galeria_artistas` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupos`
--

LOCK TABLES `grupos` WRITE;
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
INSERT INTO `grupos` VALUES (1,'MESAS','',1,2),(2,'SILLAS OCASIONALES',NULL,1,1),(3,'CONSOLAS','',1,2),(4,'SOFAS','',1,2),(5,'GABINETES','',1,2),(6,'LIBREROS','',1,2),(7,'SILLAS','',2,2),(8,'BANCOS','',2,2),(9,'BANCAS',NULL,2,1),(10,'MESAS','',2,2),(11,'BUFET','',2,2),(12,'TABLEWARE','',2,2),(13,'CANTINA',NULL,2,1),(14,'CABECERA',NULL,3,1),(15,'BURÓ','',3,2),(16,'PIECERA',NULL,3,1),(17,'ASIENTO','',3,2),(18,'MESA AUXILIAR','',3,2),(19,'ESPEJOS','',3,2),(20,'PISO','',4,2),(21,'TECHO','',4,2),(22,'PARED','',4,2),(23,'MESA','',4,2),(24,'BOMBILLAS VINTAGE',NULL,4,1),(25,'VELA',NULL,4,1),(26,'HECHO A MANO',NULL,5,1),(27,'YUTE','',5,2),(28,'LONA','',5,2),(29,'NOMADAS',NULL,5,1),(30,'PIEL','',5,2),(31,'FUNDA','',6,2),(32,'COJIN','',6,2),(33,'CAMINO DE MESA','',6,2),(34,'ROPA DE CAMA','',6,2),(35,'CRISTALERÍA','',7,2),(36,'ESPEJOS','',7,2),(37,'VELAS','',7,2),(38,'ACCESORIOS','',7,2),(39,'BUFET','',8,2),(40,'MESA','',8,2),(41,'BAUL',NULL,8,1),(42,'SILLA',NULL,8,1),(43,'GABINETE',NULL,8,1),(44,'CAMARA',NULL,9,1),(45,'CAJA FUERTE',NULL,9,1),(46,'TORA',NULL,9,1),(47,'ESCRITORIO','',10,2),(48,'SILLAS',NULL,10,1),(49,'LIBREROS','',10,2),(50,'MESA LATERAL','',10,2),(51,'ACCESORIOS','',10,2),(52,'MESAS','',11,2),(53,'SILLA',NULL,11,1),(54,'SALA',NULL,11,1),(55,'ACCESORIOS','',11,2),(56,'BANCAS','',11,2),(65,'LANA',NULL,5,2),(66,'CAMAS PARA PERRO',NULL,11,2),(67,'PUFF',NULL,11,2),(68,'CONSOLAS',NULL,11,2),(69,'CANDILES',NULL,4,2);
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes_postales`
--

DROP TABLE IF EXISTS `imagenes_postales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes_postales` (
  `id_imagenes_postales` int(11) NOT NULL AUTO_INCREMENT,
  `pie_foto` text,
  `id_album` int(11) DEFAULT NULL,
  `ruta_imagen` text,
  `estado_imagen` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_imagenes_postales`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes_postales`
--

LOCK TABLES `imagenes_postales` WRITE;
/*!40000 ALTER TABLE `imagenes_postales` DISABLE KEYS */;
INSERT INTO `imagenes_postales` VALUES (1,'visita namuh',1,'1c74d-1.jpg',2),(2,'foto 1',2,'21dea-3.jpg',2),(3,'ejemplo 2',2,'a58ed-6.jpg',2),(4,'ejemplo 3',2,'2b856-4.jpg',2),(5,'ejemplo 4',2,'34002-1.jpg',2),(6,'prueba wallpaper',3,'70757-ball.jpg',2),(7,'dedede',1,'4a1a8-ball.jpg',2),(8,'2323',1,'111df-5.jpg',2),(9,'fwerfwerf',1,'22a7f-ball.jpg',2);
/*!40000 ALTER TABLE `imagenes_postales` ENABLE KEYS */;
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
  `tipo_usuario` int(11) DEFAULT NULL,
  `passwordTemp` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `namuhdb_usuarios`
--

LOCK TABLES `namuhdb_usuarios` WRITE;
/*!40000 ALTER TABLE `namuhdb_usuarios` DISABLE KEYS */;
INSERT INTO `namuhdb_usuarios` VALUES (1,'Administrador','admin','admin','info@namuhmex.com','3b612c75a7b5048a435fb6ec81e52ff92d6d795a8b5a9c17070f6a63c97a53b2','admin',NULL,NULL,1,1,NULL),(2,'2','2','2','2','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','cruz',NULL,NULL,1,2,NULL),(3,'jl','cruz','romero','prueba@prueba.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','JL_CRUZ1','4423425778',NULL,0,2,NULL),(4,'jl','cruz','romero','cruz1@cerbero.com.mx','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','JL_CRUZ2','4423425778',NULL,0,2,NULL),(5,'jl','cruz','romero','cruz2@cerbero.com.mx','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','JL_CRUZ3','4423425778',NULL,0,2,NULL),(6,'1','1','1','cruz3@cerbero.com.mx','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','JL_CRUZ4','1',NULL,1,2,NULL),(7,'1','1','1','cruz33@cerbero.com.mx','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','JL_CRUZ','1',NULL,1,2,NULL),(8,'1','1','1','prueba2@prueba.com','ef6d562d372a2978b827d204932668d860691727821e9a36f6f532df6fb581bd','12','1',NULL,0,2,'4614219c09e196fbed8af833e2df11df'),(9,'11','1','1','prueba3@prueba.com','ef6d562d372a2978b827d204932668d860691727821e9a36f6f532df6fb581bd','11','4422282144',NULL,0,2,NULL),(10,'11','1','1','prueba4@prueba.com','ef6d562d372a2978b827d204932668d860691727821e9a36f6f532df6fb581bd','11','4422282144',NULL,0,2,NULL),(11,NULL,NULL,NULL,NULL,'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855',NULL,NULL,NULL,0,2,NULL),(12,NULL,NULL,NULL,NULL,'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855',NULL,NULL,NULL,0,2,NULL),(13,'1','1','1','cruz@cerberfro.com.mx','ef6d562d372a2978b827d204932668d860691727821e9a36f6f532df6fb581bd','dedede','1',NULL,1,2,NULL),(14,NULL,NULL,NULL,NULL,'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855',NULL,NULL,NULL,0,2,NULL),(15,'José Luis','Cruz','1','cruz@cerbero.com.mx','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','1','1',NULL,1,2,NULL),(16,'jl','Cruz','romero','luis.mixer@gmail.com','651275fb0d55e95f656502cef7a3763e2ccfe6e97f30f1c85a890d06a1b286d5','jl Cruz','11111111',NULL,1,2,'8eab953d5cf005eef5b023d1bba9f952');
/*!40000 ALTER TABLE `namuhdb_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prensa_articulos`
--

DROP TABLE IF EXISTS `prensa_articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prensa_articulos` (
  `id_prensa_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(400) DEFAULT NULL,
  `foto_prensa_articulo` text,
  `id_prensa_caratula` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prensa_articulo`),
  KEY `caratula_idx` (`id_prensa_caratula`),
  CONSTRAINT `caratula` FOREIGN KEY (`id_prensa_caratula`) REFERENCES `prensa_caratulas` (`id_prensa_caratula`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prensa_articulos`
--

LOCK TABLES `prensa_articulos` WRITE;
/*!40000 ALTER TABLE `prensa_articulos` DISABLE KEYS */;
/*!40000 ALTER TABLE `prensa_articulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prensa_caratulas`
--

DROP TABLE IF EXISTS `prensa_caratulas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prensa_caratulas` (
  `id_prensa_caratula` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(400) DEFAULT NULL,
  `foto_prensa_caratula` text,
  PRIMARY KEY (`id_prensa_caratula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prensa_caratulas`
--

LOCK TABLES `prensa_caratulas` WRITE;
/*!40000 ALTER TABLE `prensa_caratulas` DISABLE KEYS */;
/*!40000 ALTER TABLE `prensa_caratulas` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'01RM05373G','CABECERA ESTELLA ','<p>\r\n	218 x 5 x 146</p>\r\n',13843.5,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','9311d-01rm05373g.jpg',1),(2,'01RM05368G','CABECERA CARLOS','<p>\r\n	173 x 30 x 150</p>\r\n',17440,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','91cb2-01rm05368g.jpg',1),(3,'02-1261','BURO NAGA','<p>\r\n	66 x 41 x 82</p>\r\n',12510,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','a7e4d-02-1261.jpg',2),(4,'00-770','BURO 3 CAJONES','<p>\r\n	65 x 42 x 85</p>\r\n',9918,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','24d64-00-770.jpg',2),(5,'02-1298','MESA CENTRO BAUL APROX','<p>\r\n	143 x 69 x 46</p>\r\n',18250,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','ae8c9-02-1298.jpg',1),(6,'01RM07147','MESA LATERAL VALENCIA','<p>\r\n	70 x 70 x 50</p>\r\n',8045,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','13fc6-01rm07147.jpg',2),(7,'01RM04588M','MESA 2 NIVELES ','<p>\r\n	122.5 x 58 x 74</p>\r\n',9704,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','d486c-01rm04588m.jpg',3),(8,'00-38','MESA REMO','<p>\r\n	D46 x H59</p>\r\n',6564,'<p>\r\n	&nbsp; &nbsp;&nbsp;</p>\r\n','b377e-00-38.jpg',2),(9,'02RA02587C','PUFF VINTAGE MUNDI','<p>\r\n	D60</p>\r\n',2929,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','06254-02ra02587c.jpg',2),(10,'01-705','PUFF FATO','<p>\r\n	75 x 120</p>\r\n',3687,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','cc7f9-01-705.jpg',2),(11,'01-706','PUFF EMMA','<p>\r\n	75 x 120</p>\r\n',3687,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','0d61b-01-706.jpg',2),(12,'01RM01539C','SILLA RAQUEL','<p>\r\n	50 x 59 x 102</p>\r\n',8241,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','2c3bb-c2e54-01rm01539c.jpg',2),(13,'01-1375','SILLA NEGRA X','<p>\r\n	47 x 42 x 89.5</p>\r\n',1985,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','0fe88-01-1375.jpg',2),(14,'00-113','ESPEJO TORRE 3','<p>\r\n	27 x 82 x 3</p>\r\n',1742,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','217ca-00-113.jpg',2),(15,'00-1930','ESPEJO SIAM','<p>\r\n	71 x 71 x 7.5</p>\r\n',4792,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','1b156-00-1930.jpg',2),(16,'00RA07158','ESPEJO MIHRAB CONVEXO','<p>\r\n	D51</p>\r\n',3914,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','535ba-00ra07158.jpg',2),(17,'02-1027','ESPEJO IZMIR','<p>\r\n	D112 x H5</p>\r\n',8788,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','3be4e-02-1027.jpg',2),(18,'02AA07211','ESPEJO ATALA','<p>\r\n	41 x 8 x 35 APROX</p>\r\n',941,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','cf539-02aa07211.jpg',3),(19,'00-520','TAPETE DE RAYAS TENA','<p>\r\n	180 x 120 APROX</p>\r\n',3508,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','a9078-00-520.jpg',2),(20,'00-380','TAPETE DE LANA YACA','<p>\r\n	180 x 122</p>\r\n',3566,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','28f79-00-380.jpg',2),(21,'02RT00071GC','TAPETE YUTE CAFE','<p>\r\n	400 x 300</p>\r\n',14857.5,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','06608-02rt00071gc.jpg',2),(22,'02RT04237GC','TAPETE YUTE BERENJENA','<p>\r\n	400 x 300</p>\r\n',14857.5,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','be258-02rt04237gc.jpg',2),(23,'02RT00060GC','TAPETE YUTE AZUL','<p>\r\n	200 x 300</p>\r\n',7429,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','a4c7c-02rt00060gc.jpg',2),(24,'02RT02590M','TAPETE VINTAGE CRUZ','<p>\r\n	130 x 180</p>\r\n',1741,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','97f4c-02rt02590m.jpg',1),(25,'02RT00127GC','TAPETE TIRAS DE PIEL NEGRO','<p>\r\n	300 x 300</p>\r\n',12219.5,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','5ea63-02rt00127gc.jpg',2),(26,'02RT00133GC','TAPETE TIRAS DE PIEL BEIGE','<p>\r\n	300 x 300</p>\r\n',12219.5,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','80c74-02rt00133gc.jpg',2),(27,'01-1687','FUNDA P/COJIN LECHUZA','<p>\r\n	50 x 50</p>\r\n',245,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','26eda-01-1687.jpg',2),(28,'01-1690','FUNDA P/COJIN HEXAGONO','<p>\r\n	50 x 50</p>\r\n',245,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','243c6-01-1690.jpg',2),(29,'01-1684','FUNDA P/COJIN BINDI','<p>\r\n	50 x 50</p>\r\n',245,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','0dbec-01-1684.jpg',2),(30,'00RT07100','COJIN TIQUE','<p>\r\n	60 x 35</p>\r\n',1400,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','b5078-00rt07100.jpg',2),(31,'00-1507','COJIN MERRIGOLD','<p>\r\n	60 x 32</p>\r\n',950,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','d478c-00-1507.jpg',2),(32,'02RA02584C','COJIN C/RELLENO VINTAGE NR','<p>\r\n	50 x 50</p>\r\n',879,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','cc765-02ra02584c.jpg',2),(33,'00-2105','COJIN BALCHE','<p>\r\n	60 x 30</p>\r\n',1463,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','e872c-00-2105.jpg',2),(34,'04RA05817M','CAMINO MESA','<p>\r\n	150 x 52</p>\r\n',1885,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','63a78-04ra05817m.jpg',2),(35,'04RT01601G','FUNDA EDR. KING YUCA/LINO','<p>\r\n	275 x 220</p>\r\n',5067,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','25291-04rt01601g.jpg',2),(36,'04RT01603C','SABANA FLAT IND. YUCA/ LINO','<p>\r\n	160 x 280</p>\r\n',2172,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','dda5f-04rt01603c.jpg',2),(37,'04-2163','MESA COLONIAL DE TECA','<p>\r\n	D60 x H70</p>\r\n',5418,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','6690c-04-2163.jpg',2),(38,'00-111','MESA MOTU ','<p>\r\n	60 x 60 x 34</p>\r\n',11527,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','853d2-00-111.jpg',2),(39,'03-1424','MESA CENTRO 50-100 AÑOS PRAVAT','<p>\r\n	100 x 90 x 62</p>\r\n',28139,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','2344b-03-1424.jpg',2),(40,'01-698','CAMA LOLA MORADA P/EXTERIOR','<p>\r\n	55 x 40 x 10</p>\r\n',819,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','e4eed-01-698.jpg',2),(41,'01-704','PUFF POLY P/EXTERIOR','<p>\r\n	135 x 180</p>\r\n',3648,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','95427-01-704.jpg',2),(42,'04-2005','ESCULTURA DE RAIZ DE TECA C/BASE','<p>\r\n	180 x 50 x 210</p>\r\n',253973,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','280fa-04-2005.jpg',2),(43,'03-1445','CANDELABRO TECA 10 AÑOS GDE','<p>\r\n	&nbsp;&nbsp;</p>\r\n',375,'<p>\r\n	&nbsp; &nbsp;&nbsp;</p>\r\n','55acd-03-1445.jpg',2),(44,'02AA02428C','PISO PARQUET DE TECA','<p>\r\n	60 x 60</p>\r\n',1846,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','e539e-02aa02428c.jpg',2),(45,'04-1995','CUBIERTA P/CONSOLA LICHI NEGRA','<p>\r\n	250 x 85 x 10 APROX</p>\r\n',27911,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','3f6a1-04-1995.jpg',2),(46,'04-1999','BANCA DE LICHI ','<p>\r\n	380 x 60 x 25 APROX</p>\r\n',104668,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','44f11-04-1999.jpg',2),(47,'02RM07202','MESA LATERAL CAROLA ','<p>\r\n	47 x 47 x 39 CMS APROX</p>\r\n',3242,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','122f2-02rm07202.jpg',2),(48,'03-1162','MESA LATERAL ORIGO','<p>\r\n	30 x 30 x 43 CMS APROX / DE 50 A 100 A&Ntilde;OS DE ANTIG&Uuml;EDAD</p>\r\n',4377,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','2f0ee-03-1162.jpg',2),(49,'01RM07150','MESA LATERAL TORINO ','<p>\r\n	48.5 x 75 x 55 CMS APROX</p>\r\n',5551,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','19ea9-01rm07150.jpg',2),(50,'01RM07147','MESA LATERAL VALENCIA ','<p>\r\n	70 x 70 x 50</p>\r\n',8045,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','e59a5-01rm07147.jpg',2),(51,'00-40','MESA ULISES ','<p>\r\n	D116 x H41 CUBIERTA DE MARMOL/NOGAL</p>\r\n',17115,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','aa4d9-00-40.jpg',2),(52,'02-1287','MESA DE CENTRO SUMBA ','<p>\r\n	137 x 92 x 49</p>\r\n',21607,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','95a29-9af7e-02-1287.jpg',2),(53,'02-1298','MESA DE CENTRO BAUL ','<p>\r\n	140 x 69 x 46 APROX</p>\r\n',18250,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','55fcb-692d3-02-1298.jpg',2),(54,'01RM07146','MESA DE CENTRO VALENCIA','<p>\r\n	130 x 70 x 40</p>\r\n',9879,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','63f62-01rm07146.jpg',2),(55,'00RM06249G','CONSOLA FILIPO ','<p>\r\n	214 x 40 x 57</p>\r\n',9903,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','7993c-00rm06249g.jpg',2),(56,'02RM07243','CONSOLA KALI','<p>\r\n	68 x 36 x 75</p>\r\n',10265,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','327f8-02rm07243.jpg',2),(57,'01RM04587M','CONSOLA MEDIA LUNA','<p>\r\n	142 x 56 x 88</p>\r\n',10044,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','72d93-01rm04587m.jpg',2),(58,'02-1288','CONSOLA SUMBA ','<p>\r\n	182 x 46 x 90</p>\r\n',18764,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','cec82-02-1288.jpg',2),(59,'00RM07074G','SOFA HOMERO CHOCOLATE','<p>\r\n	230 x 110 x 67</p>\r\n',71050,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','2f216-00rm07074g.jpg',2),(60,'01RM04694M','SILLON ALVA','<p>\r\n	77 x 76.5 x 134.5</p>\r\n',15848,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','5a71b-01rm04694m.jpg',2),(61,'00RM07076M','SILLON HORACIO','<p>\r\n	61 x 65 x 70</p>\r\n',19140,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','8cde5-00rm07076m.jpg',2),(62,'00RM00859C','GABINETE MEDERIK','<p>\r\n	80 x 55 x 248</p>\r\n',24500,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','1b1c2-00rm00859c.jpg',2),(63,'01RM06026M','GABINETE PARA MEDICINA BLANCO ','<p>\r\n	120 x 51 x 150</p>\r\n',70644,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','0234b-01rm06026m.jpg',2),(64,'00RM00986C','GABINETE PHARMACIST','<p>\r\n	80 x 46 x 250</p>\r\n',27720,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','a21dc-00rm00986c.jpg',2),(65,'00RM04596G','LIBRERO JOSEL ','<p>\r\n	111 x 50 x 252</p>\r\n',22320,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','0c428-bd6a8-00rm04596g.jpg',2),(66,'00RI04732G','LAMPARA DE PISO CON ESFERAS','<p>\r\n	C/PANTALLA 30 x 30 x 189</p>\r\n',6062,'<p>\r\n	ALTAS</p>\r\n','3bc50-00ri04732g.jpg',2),(67,'00-289','LAMPARA DE AGUA LATON','<p>\r\n	DORADA ICOSAEDRO 38 x 45</p>\r\n',4370,'<p>\r\n	GEOMETRICA</p>\r\n','12afd-00-289.jpg',2),(68,'00-105','LAMPARA BALERO','<p>\r\n	12 x 16</p>\r\n',3529,'<p>\r\n	BICOLOR</p>\r\n','29109-00-105.jpg',2),(69,'00-83','LAMPARA HORMIGON GRANDE','<p>\r\n	D27 x H24</p>\r\n',1882,'<p>\r\n	CONTEMPO</p>\r\n','537e9-00-83.jpg',2),(70,'00-1471','LAMPARA KABUL GRANDE','<p>\r\n	D90 x H41/CADENA 2M</p>\r\n',8200,'<p>\r\n	INDUSTRIAL</p>\r\n','861ab-00-1471.jpg',2),(71,'00-856','LAMPARA LOTUS','<p>\r\n	CRISTAL</p>\r\n',3432,'<p>\r\n	COLGANTE</p>\r\n','e7d4d-00-856.jpg',2),(72,'00-1674','LAMPARA OTTO','<p>\r\n	D32 x H36</p>\r\n',4671,'<p>\r\n	COBRE</p>\r\n','b8eb1-00-1674.jpg',2),(73,'00-252','LAMPARA UNIVERSO DE LATON','<p>\r\n	DORADA 12 LADOS</p>\r\n',4175,'<p>\r\n	GEOMETRICA</p>\r\n','841e6-00-252.jpg',2),(74,'02-1307','ARBOTANTE DE MARMOL  CHICO','<p>\r\n	14 x 13 x 26</p>\r\n',2502,'<p>\r\n	BCO</p>\r\n','ba173-02-1307.jpg',2),(75,'00-2155','ARBOTANTE MUTI GRIS OSCURO','<p>\r\n	24.8 x 47 x 2</p>\r\n',2186,'<p>\r\n	PARED</p>\r\n','40ce8-00-2155.jpg',2),(76,'00RI00762C','LAMPARA DE MESA PETRANOVA OBSCURA ','<p>\r\n	C/1 FOCO EDISON LARGO 28 x 28 x 100</p>\r\n',3840,'<p>\r\n	NEGRA</p>\r\n','f168c-00ri00762c.jpg',2),(77,'00-2498','LINTERNILLA JALI DE MESA CHICA','<p>\r\n	D22 x H26</p>\r\n',2125,'<p>\r\n	METAL</p>\r\n','c51b7-00-2498.jpg',2),(78,'02-859','BOTELLA PARA VINO MADA ','<p>\r\n	D9 x H25</p>\r\n',131,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','143c2-5297b-02-859.jpg',2),(79,'02-890','CONTENEDOR BISCOTTI ','<p>\r\n	D15 x H20</p>\r\n',616,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','a347b-02-890.jpg',2),(80,'02-888','CONTENEDOR DOLCE ','<p>\r\n	D9 x H16</p>\r\n',235,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','2c046-02-888.jpg',2),(81,'02-861','JARRA PARA LECHE ','<p>\r\n	D8 x D25</p>\r\n',308,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','c06ce-0bc08-02-861.jpg',2),(82,'02RA06903C','BOTELLA ACQUA ','<p>\r\n	D18 x H32</p>\r\n',569,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','d4731-02ra06903c.jpg',2),(83,'02RA01491C','BOTELLA PORTO','<p>\r\n	10 x 10 x 19</p>\r\n',308,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','3ca44-02ra01491c.jpg',2),(84,'00-115','ESPEJO TORRE 5 PIEZAS','<p>\r\n	27 x 137 x 3</p>\r\n',2903,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','7d3bf-00-115.jpg',2),(85,'00-268','ESPEJO SOL','<p>\r\n	D90 /NOGAL Y VARIAS MADERAS</p>\r\n',7287,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','46120-00-268.jpg',2),(86,'00-263','ESPEJO LANDI PLANO','<p>\r\n	SET 9</p>\r\n',7879,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','881eb-00-263.jpg',2),(87,'00RA03473G','ESPEJO CARLO GRANDE','<p>\r\n	D80</p>\r\n',3500,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','7cfcf-00ra03473g.jpg',2),(88,'02-1312','LINTERNILLA OMAN GRANDE','<p>\r\n	32 x 32 x 90</p>\r\n',4435,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','c34a9-02-1312.jpg',3),(89,'03-1447','CANDELABRO PRAVAT MEDIANO ','<p>\r\n	10-20 A&Ntilde;OS</p>\r\n',225,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','808f3-03-1447.jpg',2),(90,'00RA06342M','VELA ESFERA ESCAMADA CREMA CHICA','<p>\r\n	D16 C/1 VELA</p>\r\n',385,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','ba7e6-00ra06342m.jpg',2),(91,'00RA06343M','VELA ESFERA ESCAMADA GRIS CHICA','<p>\r\n	D16 C/1 VELA</p>\r\n',385,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','e1384-00ra06343m.jpg',2),(92,'02AA06699C','PLATON PARAT ','<p>\r\n	48 x 34 x 7</p>\r\n',1825,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','7d35d-02aa06699c.jpg',2),(93,'01AA04418C','CESTO SHANXI DE RATAN ','<p>\r\n	60-40 x 23 x 39 APROX</p>\r\n',2567,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','ddaa2-01aa04418c.jpg',2),(94,'03-1450','BOWL','<p>\r\n	10-20 A&Ntilde;OS / 45 x 20 x 7</p>\r\n',2001,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','9f794-03-1450.jpg',2),(95,'01RA03160C','BUSTO MAO','<p>\r\n	18 x 25 x 10</p>\r\n',1204,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','81a1c-01ra03160c.jpg',2),(96,'01RA06514C','ESCULTURA LUCIUS','<p>\r\n	36 x 36 x 68</p>\r\n',3770,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','8f10d-01ra06514c.jpg',2),(97,'01RM04520C','SILLA INDUSTRIAL ','<p>\r\n	36 x 52 x 86</p>\r\n',3863,'<p>\r\n	ACERO INOXIDABLE</p>\r\n','bc6c0-01rm04520c.jpg',2),(98,'01-1374','SILLA BISTROT','<p>\r\n	48 x 43 x 90</p>\r\n',1528,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','9ea49-01-1374.jpg',2),(99,'01RM01539C','SILLA RAQUEL','<p>\r\n	50 x 59 x 102</p>\r\n',8241,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','857f0-c2e54-01rm01539c.jpg',2),(100,'07RM02718C','SILLA BAR AVILA ','<p>\r\n	54 x 44 x 113</p>\r\n',3445,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','83649-07rm02718c.jpg',2),(101,'08RM05289M','SILLA MAX BLANCA ','<p>\r\n	62 x 52 x 80</p>\r\n',15247,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','2a75b-08rm05289m.jpg',2),(102,'08RM04892M','SILLA MAX OLIVO ','<p>\r\n	62 x 52 x 80</p>\r\n',15247,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','09dc4-08rm04892m.jpg',2),(103,'01RM07142','SILLA MILAN ','<p>\r\n	60.5 x 47 x 89</p>\r\n',3664,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','03bb0-01rm07142.jpg',2),(104,'00-87','BANCO ARON','<p>\r\n	48 x 39 x 86</p>\r\n',13739,'<p>\r\n	NOGAL</p>\r\n','051fe-00-87.jpg',2),(105,'02RM03677C','BANCO INDUSTRIAL ','<p>\r\n	30 x 30 x 70</p>\r\n',2476,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','09d8f-02rm03677c.jpg',2),(106,'00-1681','BANCO OSKAR','<p>\r\n	41 x 44 x 82</p>\r\n',10097,'<p>\r\n	NOGAL</p>\r\n','d2825-00-1681.jpg',2),(107,'02-1309','BANCO BANTI ','<p>\r\n	D36 x H41</p>\r\n',4321,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','81b52-02-1309.jpg',2),(108,'01RM02041G','COMEDOR AMPARO MEDIANO','<p>\r\n	280 x 110 x 78</p>\r\n',49525,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','ea0c2-01rm02041g.jpg',2),(109,'01RM07145','COMEDOR VALENCIA','<p>\r\n	240 x 100 x 76</p>\r\n',18771,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','ba06f-01rm07145.jpg',2),(110,'00-1663','MESA ASKANA','<p>\r\n	D90 x H70 C/CUBIERTA DE VIDRIO</p>\r\n',11900,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','14209-00-1663.jpg',2),(111,'02-1289','MESA BANTI MEDIANA','<p>\r\n	D76 x H78</p>\r\n',21607,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','27b55-02-1289.jpg',2),(112,'00-684','MESA JULIÁN REDONDA ','<p>\r\n	D120 x H75</p>\r\n',26100,'<p>\r\n	NOGAL</p>\r\n','9a8ea-00-684.jpg',2),(113,'01RM07144','COMEDOR BILBAO ','<p>\r\n	140 x 140 x 76</p>\r\n',18582,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','66962-01rm07144.jpg',2),(114,'00RM03271G','PERIQUERA DE TECA','<p>\r\n	300 x 110 x 90</p>\r\n',41120,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','caebb-00rm03271g.jpg',2),(115,'01-825','BUFET CON 5 PUERTAS ','<p>\r\n	218 x 48 x 92</p>\r\n',83642,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','1c7c8-01-825.jpg',2),(116,'01-772','BUFET CON 5 PUERTAS ','<p>\r\n	224 x 45 x 87</p>\r\n',65598,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','ae5cd-01-772.jpg',2),(117,'01RM00264M','BUFFET XIAN ','<p>\r\n	170 x 50 x 80</p>\r\n',25753,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','062a4-01rm00264m.jpg',2),(118,'00-752','PLATO BASE MARIE ','<p>\r\n	29 x 29 x 2.5</p>\r\n',215,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','995d1-00-752.jpg',2),(119,'00RA01261C','PLATO BASE TUSCANY ','<p>\r\n	33 x 33 x 3.5</p>\r\n',207,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','02498-00ra01261c.jpg',2),(120,'00RA01267C','PLATO BASE YVANA','<p>\r\n	30 x 30 x 3</p>\r\n',176,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','ec454-00ra01267c.jpg',2),(121,'00RA01301C','TAZA TUSCANY CON PLATO','<p>\r\n	9 x 8</p>\r\n',147,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','9d47b-00ra01301c.jpg',2),(122,'04-274','CHAROLA DE RATAN ','<p>\r\n	D50 x H8</p>\r\n',980,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','2f49c-04-274.jpg',2),(123,'11RA05739C','CHAROLA DE RATAN REDONDA','<p>\r\n	48 x 48 x 5</p>\r\n',1024,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','8ab8d-11ra05739c.jpg',2),(124,'11RA05726C','TERMO RATÁN','<p>\r\n	16 x 16 x 24</p>\r\n',2791,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','70ef8-11ra05726c.jpg',2),(125,'02-862','CAPELO KAFEDI CON CUERDA','<p>\r\n	D25 x H20 APROX</p>\r\n',517,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','58854-02-862.jpg',2),(126,'01-825','BUFET CON 5 PUERTAS ','<p>\r\n	218 x 48 x 92</p>\r\n',83642,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','600d6-01-825.jpg',2),(127,'01-772','BUFET CON 5 PUERTAS ','<p>\r\n	224 x 45 x 87</p>\r\n',65598,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','b4ebe-01-772.jpg',2),(128,'03-1424','MESA CENTRO PRAVAT ','<p>\r\n	100 x 90 x 62 / 50-100 A&Ntilde;OS</p>\r\n',28139,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','41fac-03-1424.jpg',2),(129,'03-1171','MESA CENTRO PRAVAT ','<p>\r\n	100 x 40 x 38 / 150-200 A&Ntilde;OS</p>\r\n',15008,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','ef77e-03-1171.jpg',2),(130,'03-1452','MESA CENTRO SUNAN ','<p>\r\n	144 x 105 x 45 / 10-20 A&Ntilde;OS</p>\r\n',56278,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','ec9d5-03-1452.jpg',2),(131,'04AA03164M','CAJA FUERTE','<p>\r\n	165 x 70 x 60</p>\r\n',255971,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','45248-04aa03164m.jpg',2),(132,'04AA03166C','CAMARA DE PLACAS','<p>\r\n	&nbsp; &nbsp;</p>\r\n',356134,'<p>\r\n	&nbsp; &nbsp;</p>\r\n','64de5-04aa03166c.jpg',2),(133,'03AA00163C','TAMBOR DE BRONCE ','<p>\r\n	40 x 40 x 60</p>\r\n',190766,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','0556f-03aa00163c.jpg',2),(134,'02AM03336M','PUERTA ANTIGUA RAJASTAN','<p>\r\n	170 x 88</p>\r\n',108054,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','03986-02am03336m.jpg',2),(135,'01-1882','PORTAVIANDAS CAZADOR ROJO','<p>\r\n	79 x 79 x 102</p>\r\n',82500,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','35aaa-01-1882.jpg',2),(136,'11AM05685C','ALTAR','<p>\r\n	75 x 65 x 62</p>\r\n',37700,'<p>\r\n	&nbsp;&nbsp;</p>\r\n','ef593-11am05685c.jpg',2),(137,'00-1934','BANCA AMPARO','<p>\r\n	C/RESPALDO&nbsp;&nbsp;200 x 34 x 90 &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n',9396,'<p>\r\n	RUSTICO</p>\r\n','6d142-00-1934.jpg',2),(138,'00-1935','BANCA AMPARO   ','<p>\r\n	200 x 34 x 47 &nbsp;&nbsp;</p>\r\n',8665,'<p>\r\n	RUSTICO</p>\r\n','5364a-00-1935.jpg',2),(139,'00-3268','REVISTERO ','<p>\r\n	CON MARMOL 46 x 23 x 50 &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n',5324,'<p>\r\n	CONTEMPO</p>\r\n','855f5-00-3268.jpg',2),(140,'00-2145','BURO SAMA ','<p>\r\n	55 x 40 x 50 &nbsp;&nbsp;</p>\r\n',11638,'<p>\r\n	CONTEMPO</p>\r\n','00a94-00-2145.jpg',2),(141,'00-2147','BURO SALIM ','<p>\r\n	60 x 40 x 60 &nbsp; &nbsp;&nbsp;</p>\r\n',10530,'<p>\r\n	CONTEMPO</p>\r\n','a417b-00-2147.jpg',2),(142,'00-48','MESA JULIAN   ','<p>\r\n	&nbsp;220 x 100 x 75 /NOGAL &nbsp;</p>\r\n',32949,'<p>\r\n	CONTEMPO</p>\r\n','c5d0a-00-48.jpg',2),(143,'00-254','MESA JULIAN CUBIERTA DE MARMOL    ','<p>\r\n	220 x 100 x 75 /NOGAL &nbsp;&nbsp;</p>\r\n',41134,'<p>\r\n	CONTEMPO</p>\r\n','eba86-00-254.jpg',2),(144,'00-1940','MESA AMPARO ','<p>\r\n	300 x 105 x 78 / OYAMEL &nbsp; &nbsp;&nbsp;</p>\r\n',28200,'<p>\r\n	RUSTICO</p>\r\n','28854-00-1940.jpg',2),(145,'00-3219','MESA DE TECA              ','<p>\r\n	300 x 100 x 79 &nbsp; &nbsp;&nbsp;</p>\r\n',77800,'<p>\r\n	EXTERIOR</p>\r\n','377d7-00-3219.jpg',2),(146,'00-653','PERIQUERA ALCOCER       ','<p>\r\n	160 x 80 x 110 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n',9508,'<p>\r\n	RUSTICO</p>\r\n','b7c3a-00-653.jpg',2),(147,'00-3247','COMEDOR RENEE   ','<p>\r\n	C/CEMENTO 240 x 105 x 76 / ALDER &nbsp;&nbsp;</p>\r\n',30589,'<p>\r\n	CONTEMPO</p>\r\n','31ffc-00-3247.jpg',2),(148,'00-89','SILLA GASPAR                  ','<p>\r\n	53 x 48 x 66 /NOGAL &nbsp;&nbsp;</p>\r\n',13062,'<p>\r\n	CONTEMPO</p>\r\n','78589-00-89.jpg',2),(149,'00-90','SILLA EUGENIO          ','<p>\r\n	53 x 48 x 66 /NOGAL&nbsp;</p>\r\n',13062,'<p>\r\n	CONTEMPO</p>\r\n','c4454-00-90.jpg',2),(150,'00-88','SILLA EMILIO ','<p>\r\n	&nbsp;49.5 x 49 x 81 / NOGAL / PIEL NEGRA &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n',12841,'<p>\r\n	CONTEMPO</p>\r\n','ec1ee-00-88.jpg',2),(151,'00-270','SILLA ALVARO ','<p>\r\n	53 x 47 x 75 /NOGAL &nbsp; &nbsp;</p>\r\n',14351,'<p>\r\n	CONTEMPO</p>\r\n','c9f0a-00-270.jpg',2),(152,'00-1828','BANCO ARON ','<p>\r\n	C/RESPALDO 48 x 39 x 110 / NOGAL &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n',15138,'<p>\r\n	CONTEMPO</p>\r\n','cf258-69bad-00-1828.jpg',2),(153,'00-1936','MESA LATERAL UBUD ','<p>\r\n	65 x 65 x 65 &nbsp; &nbsp;&nbsp;</p>\r\n',2730,'<p>\r\n	RUSTICO</p>\r\n','b3118-00-1936.jpg',2),(154,'00-1831','MESA MOLDAVIA ','<p>\r\n	D50 x 54 /HAYA C/PZA BRONCE &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n',8044,'<p>\r\n	CONTEMPO</p>\r\n','77422-00-1831.jpg',2),(155,'00-2509','CANDIL DALIAN       ','<p>\r\n	&nbsp;72 x 72 x 75 &nbsp; &nbsp;</p>\r\n',4936,'<p>\r\n	COLGANTE</p>\r\n','19931-00-2509.jpeg',2),(156,'00-2510','CANDIL ORISSA  ','<p>\r\n	&nbsp;80 x 80 x 60&nbsp;</p>\r\n',4135,'<p>\r\n	COLGANTE</p>\r\n','ef80d-00-2510.jpg',2),(157,'00-324','LAMPARA DE PIE NORMAN ','<p>\r\n	C/PATALLA NEGRA 51 x 154 /NOGAL &nbsp;&nbsp;</p>\r\n',9459.9,'<p>\r\n	CONTEMPO</p>\r\n','301c5-00-324.jpg',2),(158,'00-82','LAMPARA PEDRO           ','<p>\r\n	D60 x H160 &nbsp; &nbsp;&nbsp;</p>\r\n',5364,'<p>\r\n	RUSTICO</p>\r\n','a1767-00-82.jpg',2),(159,'00RI07025C','LAMPARA AXIOMA           ','<p>\r\n	40 x 40 x 40 &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n',1227,'<p>\r\n	CONTEMPO</p>\r\n','9f8d4-00ri07025c.jpg',2),(160,'00-1832','LAMPARA PASCUAL   ','<p>\r\n	30 &nbsp;x 20 x 38&nbsp;</p>\r\n',2390,'<p>\r\n	RUSTICO</p>\r\n','738db-00-1832.jpg',2),(161,'00-529','LAMPARA DE PIE AGUA ','<p>\r\n	57 x 57 x 170 &nbsp; &nbsp;&nbsp;</p>\r\n',2134,'<p>\r\n	CONTEMPO</p>\r\n','ea8e3-00-529.jpg',2),(162,'00-2129','LAMPARA TROMPO ','<p>\r\n	D17 x H19.5 / NOGAL &nbsp; &nbsp; &nbsp;</p>\r\n',3042,'<p>\r\n	CONTEMPO</p>\r\n','4f322-00-2129.jpg',2),(163,'00-2489','CANDIL TRAPECIO      ','<p>\r\n	C/NOGAL 127 x 60 x 67 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n',17539,'<p>\r\n	COLGANTE</p>\r\n','bf3a8-00-2489.jpg',2),(164,'00-3201','CANDIL CUNA CHICO   ','<p>\r\n	D70 x H195 APROX &nbsp; &nbsp;</p>\r\n',20880,'<p>\r\n	DISE&Ntilde;O</p>\r\n','6aa9d-00-3201.jpg',2),(165,'00-1951','CANDIL ORBITA ','<p>\r\n	D81 &nbsp;&nbsp;</p>\r\n',6467,'<p>\r\n	COLGANTE</p>\r\n','b792a-00-1951.jpg',2),(166,'00-1842','CANDIL ARAT ','<p>\r\n	D60 x H45 &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n',11574,'<p>\r\n	COLGANTE</p>\r\n','49ea0-00-1842.jpg',2),(167,'00-2662','BANCO OSSIA ','<p>\r\n	ENCINO/NOGAL D31 x H55 &nbsp; &nbsp; &nbsp;</p>\r\n',6160,'<p>\r\n	CONTEMPO</p>\r\n','090b3-00-2662.jpg',2),(168,'00-1929','BANQUITO MIX ','<p>\r\n	49 x 39 x 49 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n',2808,'<p>\r\n	CONTEMPO</p>\r\n','e2e72-00-1929.jpg',2),(169,'00-3463','LAMPARA FAUSTO','<p>\r\n	D24 x H26</p>\r\n',5786,'<p>\r\n	COLGANTE</p>\r\n','0b179-00-3463.jpg',2),(170,'00-3464','LAMPARA ROMAN','<p>\r\n	D16 x H25</p>\r\n',3613,'<p>\r\n	COLGANTE</p>\r\n','826e4-00-3464.jpg',2),(171,'00-3465','LAMPARA DONATO','<p>\r\n	D24 x H22</p>\r\n',5786,'<p>\r\n	COLGANTE</p>\r\n','66722-00-3465.jpg',2),(172,'00-3466','LAMPARA AGRA','<p>\r\n	D26 x H25</p>\r\n',2250,'<p>\r\n	COLGANTE</p>\r\n','1e2b9-00-3466.jpg',2),(173,'00-3467','LAMPARA BURSA ','<p>\r\n	D26 x H24</p>\r\n',2021,'<p>\r\n	COLGANTE</p>\r\n','c72d2-00-3467.jpg',2),(174,'00-3468','LAMPARA ABEL','<p>\r\n	D11 x H27</p>\r\n',1810,'<p>\r\n	COLGANTE</p>\r\n','15bdb-00-3468.jpg',2),(175,'00-3469','LAMPARA EMMA','<p>\r\n	D13 x H30</p>\r\n',2062,'<p>\r\n	COLGANTE</p>\r\n','58d1a-00-3469.jpg',2),(176,'00-3471','ARBOTANTE KATIA','<p>\r\n	13 x 16 x 40</p>\r\n',1550,'<p>\r\n	PARED</p>\r\n','10a07-00-3471.jpg',2),(177,'00-3472','ARBOTANTE INES','<p>\r\n	15 x 24 x 41</p>\r\n',1596,'<p>\r\n	PARED</p>\r\n','74248-00-3472.jpg',2),(178,'00-3473','ARBOTANTE ULAN','<p>\r\n	13 x 22 x 38</p>\r\n',1596,'<p>\r\n	PARED</p>\r\n','6643d-00-3473.jpg',2),(179,'00-3474','ARBOTANTE PUSAN       ','<p>\r\n	22 x 33 x 37</p>\r\n',4322,'<p>\r\n	PARED</p>\r\n','9af92-00-3474.jpg',2),(180,'00-3475','ARBOTANTE STAN       ','<p>\r\n	31 x 50 x 45</p>\r\n',4584,'<p>\r\n	PARED</p>\r\n','4f4c3-00-3475.jpg',2),(181,'00-3476','ARBOTANTE OTTO  ','<p>\r\n	32 x 52 x 42</p>\r\n',4294,'<p>\r\n	PARED</p>\r\n','00362-00-3476.jpg',2),(182,'00-3477','ARBOTANTE DAKAR','<p>\r\n	10 x 14 x 19</p>\r\n',1469,'<p>\r\n	PARED</p>\r\n','205f6-00-3477.jpg',2),(183,'00-1550','ESFERA MADERA ENCHINADA 	                              ','<p>\r\n	ELECTRIFICADA C/BASE D45 x H65 APROX &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n',6168,'<p>\r\n	MESA</p>\r\n','2935f-00-1550.jpg',2),(184,'00-1662	','LAMPARA TORRE BRONCE	','<p>\r\n	50 x 36 x 190 &nbsp;&nbsp;</p>\r\n',10900,'<p>\r\n	PISO</p>\r\n','737d6-00-1662.jpg',2),(185,'00-2166		       ','LAMPARA BRUNO COBRE/NEGRO','<p>\r\n	D31 x H25&nbsp;</p>\r\n',2981,'<p>\r\n	COLGANTE</p>\r\n','823ec-00-2166.jpg',2),(186,'00-2167	 	       	','LAMPARA DARIO COBRE/NEGRO','<p>\r\n	D11 x H26</p>\r\n',2594,'<p>\r\n	COLGANTE</p>\r\n','0bdb6-00-2167.jpg',2),(187,'00-2168	 	           	','LAMPARA ANTON COBRE/NEGRO','<p>\r\n	D19.5 x H21&nbsp;</p>\r\n',2723,'<p>\r\n	COLGANTE</p>\r\n','c054e-00-2168.jpg',2);
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
-- Table structure for table `slides_home`
--

DROP TABLE IF EXISTS `slides_home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slides_home` (
  `id_slides_home` int(11) NOT NULL AUTO_INCREMENT,
  `foto` text NOT NULL,
  `descripcion` text NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_slides_home`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slides_home`
--

LOCK TABLES `slides_home` WRITE;
/*!40000 ALTER TABLE `slides_home` DISABLE KEYS */;
INSERT INTO `slides_home` VALUES (1,'8d1e9-12cdc-1.jpg','<p>\r\n	<span style=\"color:#f0f8ff;\"><span bitstream=\"\" courier=\"\" line-height:=\"\" sans=\"\" vera=\"\" white-space:=\"\">DESCUENTOS EN LUMINARIAS</span></span></p>\r\n',2),(2,'12d17-79c40-5.jpg','<p>\r\n	<span style=\"color:#ffffff;\"><span bitstream=\"\" courier=\"\" line-height:=\"\" sans=\"\" vera=\"\" white-space:=\"\">JULIO</span></span></p>\r\n<p>\r\n	<span style=\"color:#ffffff;\"><span bitstream=\"\" courier=\"\" line-height:=\"\" sans=\"\" vera=\"\" white-space:=\"\">MESES SIN INTERESES</span></span></p>\r\n',2),(3,'095c9-302ce-4.jpg','<p>\r\n	<span style=\"color:#ffffff;\"><span bitstream=\"\" courier=\"\" line-height:=\"\" sans=\"\" vera=\"\" white-space:=\"\">DESCUENTOS EN MANIQU&Iacute;ES</span></span></p>\r\n',2),(4,'9c207-63240-3.jpg','<p>\r\n	<span style=\"color:#ffffff;\"><span bitstream=\"\" courier=\"\" line-height:=\"\" sans=\"\" vera=\"\" white-space:=\"\">DECOESTYLO EXPO 2016</span></span></p>\r\n<p>\r\n	<span style=\"color:#ffffff;\"><span bitstream=\"\" courier=\"\" line-height:=\"\" sans=\"\" vera=\"\" white-space:=\"\">WORLD TRADE CENTER CD MX</span></span></p>\r\n<p>\r\n	<span style=\"color:#ffffff;\"><span bitstream=\"\" courier=\"\" line-height:=\"\" sans=\"\" vera=\"\" white-space:=\"\">JULIO 25 al 29</span></span></p>\r\n',2);
/*!40000 ALTER TABLE `slides_home` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slides_interiorismo`
--

DROP TABLE IF EXISTS `slides_interiorismo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slides_interiorismo` (
  `id_slides_interiorismo` int(11) NOT NULL AUTO_INCREMENT,
  `foto` text,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_slides_interiorismo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slides_interiorismo`
--

LOCK TABLES `slides_interiorismo` WRITE;
/*!40000 ALTER TABLE `slides_interiorismo` DISABLE KEYS */;
INSERT INTO `slides_interiorismo` VALUES (1,'37aaf-1.jpg',2),(2,'253f6-2.jpg',2),(3,'3cd0a-3.jpg',2),(4,'6523e-4.jpg',2);
/*!40000 ALTER TABLE `slides_interiorismo` ENABLE KEYS */;
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
  `estado_union` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_union_grupo_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=191 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `union_grupo_categoria`
--

LOCK TABLES `union_grupo_categoria` WRITE;
/*!40000 ALTER TABLE `union_grupo_categoria` DISABLE KEYS */;
INSERT INTO `union_grupo_categoria` VALUES (1,3,14,0,1,1),(2,3,14,0,2,1),(3,3,15,0,3,1),(4,3,15,0,4,1),(5,3,16,0,5,1),(6,3,18,0,6,1),(7,3,18,0,7,1),(8,3,18,0,8,1),(9,3,17,0,9,1),(10,3,17,0,10,1),(11,3,17,0,11,1),(12,3,17,0,12,1),(13,3,17,0,13,1),(14,3,19,0,14,1),(15,3,19,0,15,1),(16,3,19,0,16,1),(17,3,19,0,17,1),(18,3,19,0,18,1),(19,5,65,0,19,1),(20,5,65,0,20,1),(21,5,27,0,21,1),(22,5,27,0,22,1),(23,5,27,0,23,1),(24,5,28,0,24,1),(25,5,30,0,25,1),(26,5,30,0,26,1),(27,6,31,0,27,1),(28,6,31,0,28,1),(29,6,31,0,29,1),(30,6,32,0,30,1),(31,6,32,0,31,1),(32,6,32,0,32,1),(33,6,32,0,33,1),(34,6,33,0,34,1),(35,6,34,0,35,1),(36,6,34,0,36,1),(37,11,52,0,37,1),(38,11,52,0,38,1),(39,11,52,0,39,1),(40,11,66,0,40,1),(41,11,67,0,41,1),(42,11,55,0,42,1),(43,11,55,0,43,1),(44,11,55,0,44,1),(45,11,68,0,45,1),(46,11,56,0,46,1),(47,1,1,2,47,1),(48,1,1,2,48,1),(49,1,1,2,49,1),(50,1,1,2,50,1),(51,1,1,1,51,1),(52,1,1,1,52,1),(53,1,1,1,53,1),(54,1,1,1,54,1),(55,1,3,0,55,1),(56,1,3,0,56,1),(57,1,3,0,57,1),(58,1,3,0,58,1),(59,1,4,0,59,1),(60,1,4,0,60,1),(61,1,4,0,61,1),(62,1,5,0,62,1),(63,1,5,0,63,1),(64,1,5,0,64,1),(65,1,6,0,65,1),(66,4,20,0,66,1),(67,4,21,0,67,1),(68,4,21,0,68,1),(69,4,21,0,69,1),(70,4,21,0,70,1),(71,4,21,0,71,1),(72,4,21,0,72,1),(73,4,21,0,73,1),(74,4,22,0,74,1),(75,4,22,0,75,1),(76,4,23,0,76,1),(77,4,23,0,77,1),(78,7,35,0,78,1),(79,7,35,0,79,1),(80,7,35,0,80,1),(81,7,35,0,81,1),(82,7,35,0,82,1),(83,7,35,0,83,1),(84,7,36,0,84,1),(85,7,36,0,85,1),(86,7,36,0,86,1),(87,7,36,0,87,1),(88,7,37,0,88,1),(89,7,37,0,89,1),(90,7,37,0,90,1),(91,7,37,0,91,1),(92,7,38,0,92,1),(93,7,38,0,93,1),(94,7,38,0,94,1),(95,7,38,0,95,1),(96,7,38,0,96,1),(97,2,7,0,97,1),(98,2,7,0,98,1),(99,2,7,0,99,1),(100,2,7,0,100,1),(101,2,7,0,101,1),(102,2,7,0,102,1),(103,2,7,0,103,1),(104,2,8,0,104,1),(105,2,8,0,105,1),(106,2,8,0,106,1),(107,2,8,0,107,1),(108,2,10,0,108,1),(109,2,10,0,109,1),(110,2,10,0,110,1),(111,2,10,0,111,1),(112,2,10,0,112,1),(113,2,10,0,113,1),(114,2,10,0,114,1),(115,2,11,0,115,1),(116,2,11,0,116,1),(117,2,11,0,117,1),(118,2,12,0,118,1),(119,2,12,0,119,1),(120,2,12,0,120,1),(121,2,12,0,121,1),(122,2,12,0,122,1),(123,2,12,0,123,1),(124,2,12,0,124,1),(125,2,12,0,125,1),(126,8,39,0,126,1),(127,8,39,0,127,1),(128,8,40,65,128,1),(129,8,40,65,129,1),(130,8,40,65,130,1),(131,9,0,0,131,1),(132,9,0,0,132,1),(133,9,0,0,133,1),(134,9,0,0,134,1),(135,9,0,0,135,1),(136,9,0,0,136,1),(137,11,56,0,137,1),(138,11,56,0,138,1),(139,4,20,0,184,1),(140,4,23,0,183,1),(141,4,21,0,187,1),(142,4,21,0,186,1),(143,4,21,0,185,1),(144,4,22,0,182,1),(145,4,22,0,181,1),(146,4,22,0,180,1),(147,4,22,0,179,1),(148,4,22,0,178,1),(149,4,22,0,177,1),(150,4,22,0,176,1),(151,4,21,0,175,1),(152,4,21,0,174,1),(153,4,21,0,173,1),(154,4,21,0,172,1),(155,4,21,0,171,1),(156,4,21,0,170,1),(157,4,21,0,169,1),(158,3,15,0,140,1),(159,3,15,0,141,1),(160,1,0,0,139,1),(161,4,20,0,157,1),(162,4,21,0,159,1),(163,4,23,0,158,1),(164,4,20,0,158,1),(165,4,23,0,160,1),(166,4,21,0,162,1),(167,4,20,0,161,1),(168,4,69,0,155,1),(169,4,69,0,156,1),(170,4,69,0,163,1),(171,4,69,0,164,1),(172,4,69,0,165,1),(173,4,69,0,166,1),(174,11,56,0,137,1),(175,11,56,0,138,1),(176,2,8,0,167,1),(177,2,8,0,168,1),(178,2,7,0,148,1),(179,2,7,0,149,1),(180,2,7,0,150,1),(181,2,7,0,151,1),(182,2,7,0,152,1),(183,1,1,2,153,1),(184,1,1,2,154,1),(185,2,10,25,144,1),(186,2,10,25,145,1),(187,2,10,27,146,1),(188,2,10,25,142,1),(189,2,10,25,143,1),(190,2,10,25,147,1);
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

-- Dump completed on 2016-09-22 17:59:14

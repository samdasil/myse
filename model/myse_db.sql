CREATE DATABASE  IF NOT EXISTS `myse_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `myse_db`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: myse_db
-- ------------------------------------------------------
-- Server version	5.6.15-log

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
-- Table structure for table `tb_autonomo`
--

DROP TABLE IF EXISTS `tb_autonomo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_autonomo` (
  `autid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `autnome` varchar(120) NOT NULL COMMENT 'Nome Completo',
  `autfone` varchar(15) NOT NULL COMMENT 'Fone',
  `autemail` varchar(80) NOT NULL COMMENT 'E-mail',
  `autcep` varchar(10) NOT NULL COMMENT 'CEP',
  `autrua` varchar(120) NOT NULL COMMENT 'Rua (Logradouro)',
  `autnumero` varchar(15) NOT NULL COMMENT 'Nº',
  `autcomplemento` varchar(80) DEFAULT NULL COMMENT 'Complemento',
  `autlogin` varchar(15) NOT NULL COMMENT 'Login',
  `autsenha` varchar(8) NOT NULL COMMENT 'Senha',
  `auttpuid` int(11) NOT NULL COMMENT 'Tipo Usuario',
  `autbaiid` int(11) NOT NULL COMMENT 'Bairro',
  PRIMARY KEY (`autid`),
  UNIQUE KEY `usuid_UNIQUE` (`autid`),
  UNIQUE KEY `usulogin_UNIQUE` (`autlogin`),
  KEY `fk_tb_usuario_tb_tipousuario1_idx` (`auttpuid`),
  KEY `fk_tb_usuario_tb_bairro1_idx` (`autbaiid`),
  CONSTRAINT `fk_tb_usuario_tb_tipousuario10` FOREIGN KEY (`auttpuid`) REFERENCES `tb_tipousuario` (`tpuid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_usuario_tb_bairro10` FOREIGN KEY (`autbaiid`) REFERENCES `tb_bairro` (`baiid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_autonomo`
--

LOCK TABLES `tb_autonomo` WRITE;
/*!40000 ALTER TABLE `tb_autonomo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_autonomo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_autorizados`
--

DROP TABLE IF EXISTS `tb_autorizados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_autorizados` (
  `atzid` int(11) NOT NULL COMMENT 'ID',
  `atzautid` int(11) NOT NULL COMMENT 'Autônomo',
  `atzconid` int(11) NOT NULL COMMENT 'Condomínio',
  PRIMARY KEY (`atzid`),
  KEY `fk_tb_autonomo_has_tb_condominio_tb_condominio1_idx` (`atzconid`),
  KEY `fk_tb_autonomo_has_tb_condominio_tb_autonomo1_idx` (`atzautid`),
  CONSTRAINT `fk_tb_autonomo_has_tb_condominio_tb_autonomo1` FOREIGN KEY (`atzautid`) REFERENCES `tb_autonomo` (`autid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_autonomo_has_tb_condominio_tb_condominio1` FOREIGN KEY (`atzconid`) REFERENCES `tb_condominio` (`conid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_autorizados`
--

LOCK TABLES `tb_autorizados` WRITE;
/*!40000 ALTER TABLE `tb_autorizados` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_autorizados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_bairro`
--

DROP TABLE IF EXISTS `tb_bairro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_bairro` (
  `baiid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `bainome` varchar(120) NOT NULL COMMENT 'Nome',
  `baicidid` int(11) NOT NULL COMMENT 'Cidade',
  PRIMARY KEY (`baiid`),
  UNIQUE KEY `baiid_UNIQUE` (`baiid`),
  KEY `fk_tb_bairro_tb_cidade1_idx` (`baicidid`),
  CONSTRAINT `fk_tb_bairro_tb_cidade1` FOREIGN KEY (`baicidid`) REFERENCES `tb_cidade` (`cidid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_bairro`
--

LOCK TABLES `tb_bairro` WRITE;
/*!40000 ALTER TABLE `tb_bairro` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_bairro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_categoria`
--

DROP TABLE IF EXISTS `tb_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_categoria` (
  `catid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `catdescricao` varchar(80) NOT NULL COMMENT 'Descricao',
  PRIMARY KEY (`catid`),
  UNIQUE KEY `catid_UNIQUE` (`catid`),
  UNIQUE KEY `catdescricao_UNIQUE` (`catdescricao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_categoria`
--

LOCK TABLES `tb_categoria` WRITE;
/*!40000 ALTER TABLE `tb_categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cidade`
--

DROP TABLE IF EXISTS `tb_cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cidade` (
  `cidid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `cidnome` varchar(50) NOT NULL COMMENT 'Nome',
  `cidufid` int(11) NOT NULL COMMENT 'UF',
  PRIMARY KEY (`cidid`),
  UNIQUE KEY `cidid_UNIQUE` (`cidid`),
  KEY `fk_tb_cidade_tb_uf_idx` (`cidufid`),
  CONSTRAINT `fk_tb_cidade_tb_uf` FOREIGN KEY (`cidufid`) REFERENCES `tb_uf` (`ufid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cidade`
--

LOCK TABLES `tb_cidade` WRITE;
/*!40000 ALTER TABLE `tb_cidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cliente` (
  `cliid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `clinome` varchar(120) NOT NULL COMMENT 'Nome Completo',
  `clifone` varchar(15) NOT NULL COMMENT 'Fone',
  `cliemail` varchar(80) NOT NULL COMMENT 'E-mail',
  `clicep` varchar(10) NOT NULL COMMENT 'CEP',
  `clirua` varchar(120) NOT NULL COMMENT 'Rua (Logradouro)',
  `clinumero` varchar(15) NOT NULL COMMENT 'Nº',
  `clicomplemento` varchar(80) DEFAULT NULL COMMENT 'Complemento',
  `clilogin` varchar(15) NOT NULL COMMENT 'Login',
  `clisenha` varchar(8) NOT NULL COMMENT 'Senha',
  `clitpuid` int(11) NOT NULL COMMENT 'Tipo Usuario',
  `cliconid` int(11) NOT NULL COMMENT 'Condomínio',
  PRIMARY KEY (`cliid`),
  UNIQUE KEY `usuid_UNIQUE` (`cliid`),
  UNIQUE KEY `usulogin_UNIQUE` (`clilogin`),
  KEY `fk_tb_usuario_tb_tipousuario1_idx` (`clitpuid`),
  KEY `fk_tb_cliente_tb_condominio1_idx` (`cliconid`),
  CONSTRAINT `fk_tb_usuario_tb_tipousuario1` FOREIGN KEY (`clitpuid`) REFERENCES `tb_tipousuario` (`tpuid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_cliente_tb_condominio1` FOREIGN KEY (`cliconid`) REFERENCES `tb_condominio` (`conid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente`
--

LOCK TABLES `tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_condominio`
--

DROP TABLE IF EXISTS `tb_condominio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_condominio` (
  `conid` int(11) NOT NULL,
  `connome` varchar(120) NOT NULL,
  `concep` varchar(10) NOT NULL,
  `conrua` varchar(120) NOT NULL,
  `connumero` varchar(15) NOT NULL,
  `conbaiid` int(11) NOT NULL COMMENT 'Bairro',
  `consinid` int(11) NOT NULL COMMENT 'Síndico',
  `consubsindico` int(11) NOT NULL COMMENT 'Subsindico',
  PRIMARY KEY (`conid`),
  UNIQUE KEY `conid_UNIQUE` (`conid`),
  UNIQUE KEY `connome_UNIQUE` (`connome`),
  KEY `fk_tb_condominio_tb_bairro1_idx` (`conbaiid`),
  KEY `fk_tb_condominio_tb_sindico1_idx` (`consinid`),
  KEY `fk_tb_condominio_tb_sindico2_idx` (`consubsindico`),
  CONSTRAINT `fk_tb_condominio_tb_bairro1` FOREIGN KEY (`conbaiid`) REFERENCES `tb_bairro` (`baiid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_condominio_tb_sindico1` FOREIGN KEY (`consinid`) REFERENCES `tb_sindico` (`sinid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_condominio_tb_sindico2` FOREIGN KEY (`consubsindico`) REFERENCES `tb_sindico` (`sinid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_condominio`
--

LOCK TABLES `tb_condominio` WRITE;
/*!40000 ALTER TABLE `tb_condominio` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_condominio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_servico`
--

DROP TABLE IF EXISTS `tb_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_servico` (
  `serid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `serdescricao` varchar(100) NOT NULL COMMENT 'Descrição',
  `sercatid` int(11) NOT NULL COMMENT 'Categoria',
  PRIMARY KEY (`serid`),
  UNIQUE KEY `serid_UNIQUE` (`serid`),
  UNIQUE KEY `serdescricao_UNIQUE` (`serdescricao`),
  KEY `fk_tb_servico_tb_categoria1_idx` (`sercatid`),
  CONSTRAINT `fk_tb_servico_tb_categoria1` FOREIGN KEY (`sercatid`) REFERENCES `tb_categoria` (`catid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_servico`
--

LOCK TABLES `tb_servico` WRITE;
/*!40000 ALTER TABLE `tb_servico` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_sindico`
--

DROP TABLE IF EXISTS `tb_sindico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_sindico` (
  `sinid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `sinnome` varchar(120) NOT NULL COMMENT 'Nome Completo',
  `sinfone` varchar(15) NOT NULL COMMENT 'Fone',
  `sinemail` varchar(80) NOT NULL COMMENT 'E-mail',
  `sincep` varchar(10) NOT NULL COMMENT 'CEP',
  `sinrua` varchar(120) NOT NULL COMMENT 'Rua (Logradouro)',
  `sinnumero` varchar(15) NOT NULL COMMENT 'Nº',
  `sincomplemento` varchar(80) DEFAULT NULL COMMENT 'Complemento',
  `sinlogin` varchar(15) NOT NULL COMMENT 'Login',
  `sinsenha` varchar(8) NOT NULL COMMENT 'Senha',
  `sintpuid` int(11) NOT NULL COMMENT 'Tipo Usuario',
  `sinbaiid` int(11) NOT NULL COMMENT 'Bairro',
  PRIMARY KEY (`sinid`),
  UNIQUE KEY `usuid_UNIQUE` (`sinid`),
  UNIQUE KEY `usulogin_UNIQUE` (`sinlogin`),
  KEY `fk_tb_usuario_tb_tipousuario1_idx` (`sintpuid`),
  KEY `fk_tb_usuario_tb_bairro1_idx` (`sinbaiid`),
  CONSTRAINT `fk_tb_usuario_tb_tipousuario100` FOREIGN KEY (`sintpuid`) REFERENCES `tb_tipousuario` (`tpuid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_usuario_tb_bairro100` FOREIGN KEY (`sinbaiid`) REFERENCES `tb_bairro` (`baiid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_sindico`
--

LOCK TABLES `tb_sindico` WRITE;
/*!40000 ALTER TABLE `tb_sindico` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_sindico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_solicitacao`
--

DROP TABLE IF EXISTS `tb_solicitacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_solicitacao` (
  `solid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `soldata` varchar(10) NOT NULL COMMENT 'Data da Solicitação',
  `solhora` varchar(5) NOT NULL COMMENT 'Hora da Solicitação',
  `solvalor` double DEFAULT NULL COMMENT 'Valor',
  `solobs` varchar(250) DEFAULT NULL COMMENT 'Observações',
  `soldatafinal` varchar(10) DEFAULT NULL COMMENT 'Data final',
  `solhorafinal` varchar(5) DEFAULT NULL COMMENT 'Hora final',
  `solstatus` varchar(50) NOT NULL COMMENT 'Status',
  `solnota` double DEFAULT NULL COMMENT 'Nota',
  `solcliid` int(11) NOT NULL COMMENT 'Cliente',
  `solserid` int(11) NOT NULL COMMENT 'Serviço',
  `solautid` int(11) NOT NULL COMMENT 'Autônomo',
  PRIMARY KEY (`solid`),
  UNIQUE KEY `solid_UNIQUE` (`solid`),
  KEY `fk_tb_solicitacao_tb_servico1_idx` (`solserid`),
  KEY `fk_tb_solicitacao_tb_cliente1_idx` (`solcliid`),
  KEY `fk_tb_solicitacao_tb_autonomo1_idx` (`solautid`),
  CONSTRAINT `fk_tb_solicitacao_tb_servico1` FOREIGN KEY (`solserid`) REFERENCES `tb_servico` (`serid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_solicitacao_tb_cliente1` FOREIGN KEY (`solcliid`) REFERENCES `tb_cliente` (`cliid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_solicitacao_tb_autonomo1` FOREIGN KEY (`solautid`) REFERENCES `tb_autonomo` (`autid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_solicitacao`
--

LOCK TABLES `tb_solicitacao` WRITE;
/*!40000 ALTER TABLE `tb_solicitacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_solicitacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_tipousuario`
--

DROP TABLE IF EXISTS `tb_tipousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_tipousuario` (
  `tpuid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `tpudescricao` varchar(45) NOT NULL COMMENT 'Descrição',
  PRIMARY KEY (`tpuid`),
  UNIQUE KEY `tpuid_UNIQUE` (`tpuid`),
  UNIQUE KEY `tpudescricao_UNIQUE` (`tpudescricao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tipousuario`
--

LOCK TABLES `tb_tipousuario` WRITE;
/*!40000 ALTER TABLE `tb_tipousuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_tipousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_uf`
--

DROP TABLE IF EXISTS `tb_uf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_uf` (
  `ufid` int(11) NOT NULL COMMENT 'ID',
  `ufnome` varchar(45) NOT NULL COMMENT 'Estado',
  `ufsigla` varchar(2) NOT NULL COMMENT 'Sigla',
  PRIMARY KEY (`ufid`),
  UNIQUE KEY `ufid_UNIQUE` (`ufid`),
  UNIQUE KEY `ufnome_UNIQUE` (`ufnome`),
  UNIQUE KEY `ufsigla_UNIQUE` (`ufsigla`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_uf`
--

LOCK TABLES `tb_uf` WRITE;
/*!40000 ALTER TABLE `tb_uf` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_uf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'myse_db'
--

--
-- Dumping routines for database 'myse_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-03 18:00:48

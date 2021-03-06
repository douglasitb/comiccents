-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.8


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema comiccentsdb
--

CREATE DATABASE IF NOT EXISTS comiccentsdb;
USE comiccentsdb;

--
-- Definition of table `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE `compra` (
  `COD_COMPRA` int(11) NOT NULL,
  `DATA_COMPRA` date DEFAULT NULL,
  `VALORTOTAL_COMPRA` float DEFAULT NULL,
  `VALORPAGO_COMPRA` float DEFAULT NULL,
  `DESCONTO_VENDA` float DEFAULT NULL,
  `STATUS_VENDA` tinyint(1) DEFAULT NULL,
  `DATAENTREGA_COMPRA` date DEFAULT NULL,
  `USUARIO_COD_USUARIO` int(11) NOT NULL,
  PRIMARY KEY (`COD_COMPRA`),
  KEY `fk_COMPRA_USUARIO1_idx` (`USUARIO_COD_USUARIO`),
  CONSTRAINT `fk_COMPRA_USUARIO1` FOREIGN KEY (`USUARIO_COD_USUARIO`) REFERENCES `usuario` (`COD_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compra`
--

/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;


--
-- Definition of table `fornecedores`
--

DROP TABLE IF EXISTS `fornecedores`;
CREATE TABLE `fornecedores` (
  `COD_FORNECEDOR` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_FORNECEDOR` varchar(45) DEFAULT NULL,
  `SITE_FORNECEDOR` varchar(45) DEFAULT NULL,
  `LOGRADOURO_FORNECEDOR` varchar(45) DEFAULT NULL,
  `CNPJ_FORNECEDOR` varchar(20) DEFAULT NULL,
  `TEL_FORNECEDOR` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`COD_FORNECEDOR`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fornecedores`
--

/*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
INSERT INTO `fornecedores` (`COD_FORNECEDOR`,`NOME_FORNECEDOR`,`SITE_FORNECEDOR`,`LOGRADOURO_FORNECEDOR`,`CNPJ_FORNECEDOR`,`TEL_FORNECEDOR`) VALUES 
 (1,'Saraiva','www.saraiva.com','Tamboré','4213568','42062393');
/*!40000 ALTER TABLE `fornecedores` ENABLE KEYS */;


--
-- Definition of table `itens`
--

DROP TABLE IF EXISTS `itens`;
CREATE TABLE `itens` (
  `COD_ITENS` int(11) NOT NULL,
  `QUANTIDADE_ITENS` int(11) DEFAULT NULL,
  `PRODUTOS_COD_PRODUTO` int(11) NOT NULL,
  `COMPRA_COD_COMPRA` int(11) NOT NULL,
  PRIMARY KEY (`COD_ITENS`),
  KEY `fk_ITENS_PRODUTOS1_idx` (`PRODUTOS_COD_PRODUTO`),
  KEY `fk_ITENS_COMPRA1_idx` (`COMPRA_COD_COMPRA`),
  CONSTRAINT `fk_ITENS_PRODUTOS1` FOREIGN KEY (`PRODUTOS_COD_PRODUTO`) REFERENCES `produtos` (`COD_PRODUTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ITENS_COMPRA1` FOREIGN KEY (`COMPRA_COD_COMPRA`) REFERENCES `compra` (`COD_COMPRA`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itens`
--

/*!40000 ALTER TABLE `itens` DISABLE KEYS */;
/*!40000 ALTER TABLE `itens` ENABLE KEYS */;


--
-- Definition of table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `COD_PRODUTO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_PRODUTO` varchar(45) DEFAULT NULL,
  `DESCRICAO_PRODUTO` varchar(100) DEFAULT NULL,
  `PRECO_CAPA` varchar(20) NOT NULL,
  `PRECOVENDA_PRODUTO` float DEFAULT NULL,
  `QUANTIDADEESTOQUE_PRODUTO` varchar(45) DEFAULT NULL,
  `IMAGEMURL_PRODUTO` varchar(45) DEFAULT NULL,
  `TAMANHO_PRODUTO` varchar(7) DEFAULT NULL,
  `FORNECEDORES_COD_FORNECEDOR` int(11) NOT NULL,
  `ESTADO_FISICO` varchar(10) DEFAULT NULL,
  `EDITORA_PRODUTO` varchar(45) DEFAULT NULL,
  `NUMERO_PAGS` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`COD_PRODUTO`),
  KEY `fk_PRODUTOS_FORNECEDORES_idx` (`FORNECEDORES_COD_FORNECEDOR`),
  CONSTRAINT `fk_PRODUTOS_FORNECEDORES` FOREIGN KEY (`FORNECEDORES_COD_FORNECEDOR`) REFERENCES `fornecedores` (`COD_FORNECEDOR`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produtos`
--

/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;


--
-- Definition of table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `COD_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_USUARIO` varchar(45) DEFAULT NULL,
  `EMAIL_USUARIO` varchar(45) DEFAULT NULL,
  `SENHA_USUARIO` varchar(45) DEFAULT NULL,
  `LOGRADOURO_USUARIO` varchar(45) DEFAULT NULL,
  `RG_USUARIO` varchar(12) DEFAULT NULL,
  `CPF_USUARIO` varchar(135) DEFAULT NULL,
  `SEXO_USUARIO` char(1) DEFAULT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  `TIPO_USUARIO` char(3) DEFAULT NULL,
  `TELEFONE_USUARIO` char(12) DEFAULT NULL,
  `CEP_USUARIO` char(10) DEFAULT NULL,
  `BAIRRO_USUARIO` varchar(50) NOT NULL,
  `CIDADE_USUARIO` varchar(50) NOT NULL,
  `ESTADO_USUARIO` varchar(50) NOT NULL,
  `NUMERO_USUARIO` int(10) unsigned NOT NULL,
  `COMPLEMENTO_USUARIO` int(10) unsigned NOT NULL,
  PRIMARY KEY (`COD_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`COD_USUARIO`,`NOME_USUARIO`,`EMAIL_USUARIO`,`SENHA_USUARIO`,`LOGRADOURO_USUARIO`,`RG_USUARIO`,`CPF_USUARIO`,`SEXO_USUARIO`,`DATA_NASCIMENTO`,`TIPO_USUARIO`,`TELEFONE_USUARIO`,`CEP_USUARIO`,`BAIRRO_USUARIO`,`CIDADE_USUARIO`,`ESTADO_USUARIO`,`NUMERO_USUARIO`,`COMPLEMENTO_USUARIO`) VALUES 
 (1,'vitu','vitu@gmail.com','123456','ali','388875728','05804777880','M','2011-12-26','RES','11 41625579','06447100','','','',0,0),
 (2,'vitu2','vitu2@gmail.com','12345678','ali','498745430','4356408882','M','2011-12-26','ADM','11 41625579','06516001','','','',0,0),
 (3,'Victor','victor@gmail.com','12345678','Avenida Marginal','123456789','42044476062','M','0000-00-00','RES','(11) 7186-23','06447100','Paulista','Barueri','SP',41,0),
 (4,'Rogerio','rogerio@gmail.com','12345678','Avenida Marginal','12345789','42044476061','M','0000-00-00','RES','(11) 7186-23','06447100','Paulista','Barueri','SP',41,0),
 (5,'Victor','rogerio2@gmail.com','12345678','Avenida Marginal','1234567897','42044476063','','0000-00-00','RES','1198073879','06447100','Paulista','Barueri','SP',41,0),
 (6,'Victor2','gmdosite@gmail.com','12345678','Master Yi','0580477798','1234565767','','0000-00-00','ADM','(11) 7186-23','1102140512','Ks','Summoners Rift','LOL',21,0),
 (10,'Victor4','victor10@gmail.com','12345678','Avenida Marginal','12345789','1234565769','','0000-00-00','RES','1198073879','06447100','Paulista','Barueri','RJ',41,0),
 (11,'Willian','willian@hotmail.com','123456','Rua Casablanca','498745430','456987123645','','0000-00-00','RES','(11) 9807-38','06516-001','Vale do Sol','Barueri','AC',32,2),
 (12,'_siimoone','simone.silva_96@hotmail.com','avidaeumadroga123*','Rua Adoniran Barbosa','380254931','','','0000-00-00','ADM','1146890365','06462000','Parque Imperial','Barueri','SP',1181,0),
 (13,'leticia','leticia123_tonacio@hotmail.com','leticia1511','Rua Bélgica','','','','0000-00-00','ADM','1128051091','06416200','Engenho Novo','Barueri','SP',109,0);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

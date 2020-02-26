# Host: 127.0.0.1  (Version 5.5.5-10.4.11-MariaDB)
# Date: 2020-02-26 00:04:08
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "produtos"
#

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `preco` double(5,2) DEFAULT NULL,
  `datacad` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `vendido` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

#
# Data for table "produtos"
#

INSERT INTO `produtos` VALUES (1,'Caneta','CanetaC',10.00,'2020-02-12',1,1),(2,'HD','HD de 3000 Teras, HD chines',200.00,'2020-02-12',1,1),(3,'Antonio Silva','HD testetstets',999.99,NULL,1,1),(4,'hjhkkhj','10000000000000000000',911.00,NULL,1,1),(5,'Antonio Silva','12333123123',999.99,NULL,12,1),(6,'Bola de futebol','Bola de futebol assinado por Pele\r\nBola de futebol de couro\r\nBola de futebol cinza e branca\r\n<script>\r\nalert(\"DEU CERTO!\");\r\n</script>',999.99,NULL,1,1),(8,'Antonio Silva','wwwww',10.00,NULL,1,1),(9,'Antonio Silva','bola novas',999.99,NULL,1,1),(10,'Computador 50','Computador da nasa',999.99,NULL,15,1),(11,'Bola de futebol','Bola autografado pelo o pele',999.99,NULL,15,1),(12,'Bola de futebol 2','teste, teste, teste',999.99,NULL,15,1);

#
# Structure for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(35) DEFAULT NULL,
  `datacad` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

#
# Data for table "usuarios"
#

INSERT INTO `usuarios` VALUES (1,'Toni','toni@t.com','202cb962ac59075b964b07152d234b70','2020-02-12'),(2,'Marcos','m@m.com','202cb962ac59075b964b07152d234b70','2020-02-12'),(3,'Guilhemer','g@g.com','202cb962ac59075b964b07152d234b70','2020-02-12'),(4,'Antonio Silva','t@tcom','c4301ef7d06b1564f0716d98a6b8ba35',NULL),(5,NULL,NULL,'d41d8cd98f00b204e9800998ecf8427e','0000-00-00'),(6,'Antonio Silva','t@tcom','c4301ef7d06b1564f0716d98a6b8ba35','0000-00-00'),(7,'Antonio Silva','t@tcom','c4301ef7d06b1564f0716d98a6b8ba35','0000-00-00'),(8,'Antonio Silva','t@tcom','c4301ef7d06b1564f0716d98a6b8ba35','0000-00-00'),(9,'Antonio Silva','t@tcom','c4301ef7d06b1564f0716d98a6b8ba35','0000-00-00'),(10,'Antonio Silva','t@tcom','c4301ef7d06b1564f0716d98a6b8ba35','0000-00-00'),(12,'Toni','toni@goto.com','202cb962ac59075b964b07152d234b70','0000-00-00'),(13,'','toni.cpd@t.com','202cb962ac59075b964b07152d234b70','0000-00-00'),(14,'','toni.cpd@t.com','202cb962ac59075b964b07152d234b70','0000-00-00'),(15,'Antonio Silva','toni.cpd3@gmail.com','e10adc3949ba59abbe56e057f20f883e','0000-00-00');

#
# Structure for table "vendas"
#

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE `vendas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `produto_id` int(11) DEFAULT NULL,
  `comprador_id` int(11) DEFAULT NULL,
  `data_entrega` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "vendas"
#

INSERT INTO `vendas` VALUES (1,1,1,'2020-02-25'),(2,2,1,'2020-02-26'),(3,5,1,'2020-01-01'),(4,9,1,'2020-01-01'),(5,8,1,'2020-01-01'),(6,4,1,'2020-01-01'),(7,6,15,'2020-01-01'),(8,5,15,'2020-01-01'),(9,5,15,'2020-01-01'),(10,5,15,'2020-01-01'),(11,5,15,'2020-01-01'),(12,5,15,'2020-01-01'),(13,5,15,'2020-01-01'),(14,5,15,'2020-01-01'),(15,5,15,'2020-01-01'),(16,5,15,'2020-01-01'),(17,5,15,'2020-01-01'),(18,5,15,'2020-01-01'),(19,5,15,'2020-01-01'),(20,5,15,'2020-01-01'),(21,5,15,'2020-01-01'),(22,5,15,'2020-01-01'),(23,5,15,'2020-01-01'),(24,2,15,'2020-01-01'),(25,2,15,'2020-01-01'),(26,2,15,'2020-01-01'),(27,10,15,'2020-01-01'),(28,3,15,'2020-01-01'),(29,1,15,'2020-01-02'),(30,1,15,'2020-01-02'),(31,11,15,'2020-01-02'),(32,12,15,'2020-01-01'),(33,12,15,'2020-01-01'),(34,12,15,'2020-01-01');

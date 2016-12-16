
/*CREATE DATABASE /*!32312 IF NOT EXISTS*`test` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `xxxx`; /*base de datos*/

/*Table structure for table `clientes` */

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nac` date NOT NULL,
  `peso` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;
/*
MySQL Backup
Source Server Version: 5.7.17
Source Database: listadopst
Date: 03/02/2020 18:28:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `municipalidad`
-- ----------------------------
DROP TABLE IF EXISTS `municipalidad`;
CREATE TABLE `municipalidad` (
  `id_municipalidad` int(11) NOT NULL,
  `nombre_municipalidad` varchar(50) DEFAULT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_municipalidad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `ordencompra`
-- ----------------------------
DROP TABLE IF EXISTS `ordencompra`;
CREATE TABLE `ordencompra` (
  `pst` varchar(30) NOT NULL,
  `motivo` text,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `municipalidad` int(11) DEFAULT NULL,
  `portal` int(11) DEFAULT NULL,
  `sistema` int(11) DEFAULT NULL,
  `placa_rol` varchar(10) NOT NULL,
  `fecha_transaccion` varchar(10)not null,
  PRIMARY KEY (`pst`),
  FOREIGN KEY (`municipalidad`) REFERENCES `municipalidad` (`id_municipalidad`),
  FOREIGN KEY (`portal`) REFERENCES `portal` (`id_portal`),
  FOREIGN KEY (`sistema`) REFERENCES `sistema` (`id_sistema`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `portal`
-- ----------------------------
DROP TABLE IF EXISTS `portal`;
CREATE TABLE `portal` (
  `id_portal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_portal` varchar(50) DEFAULT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_portal`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `sistema`
-- ----------------------------
DROP TABLE IF EXISTS `sistema`;
CREATE TABLE `sistema` (
  `id_sistema` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_sistema` varchar(50) DEFAULT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_sistema`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `municipalidad` VALUES ('1','COLINA','2020-01-23 16:06:14','13'), ('2','TALCA','2020-01-27 17:36:56','22');
INSERT INTO `portal` VALUES ('1','ECOM','2020-01-22 16:03:29'), ('2','ECOM INTESIS','2020-01-22 16:04:30'), ('3','VECINO','2020-01-22 16:05:00'), ('4','VECINO ÑUÑOA','2020-01-22 16:05:05'), ('5','VECINO INTESIS','2020-01-22 16:05:11'), ('6','COMERCIO DIGITAL','2020-01-23 10:25:00');
INSERT INTO `sistema` VALUES ('9','PERMISOS DE CIRCULACION','2020-01-27 12:15:39'), ('10','PATENTES COMERCIALES','2020-01-27 12:16:44');

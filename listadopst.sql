CREATE TABLE `municipalidad` (
  `id_municipalidad` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(`id_municipalidad`)
)

CREATE TABLE `ordencompra` (
  `pst` varchar(30) NOT NULL,
  `motivo` text,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `municipalidad` int(11) DEFAULT NULL,
  `portal` int(11) DEFAULT NULL,
  `sistema` int(11) DEFAULT NULL,
  PRIMARY KEY(`pst`),
  FOREIGN KEY(`municipalidad`)references municipalidad(`id_municipalidad`),
  FOREIGN KEY(`portal`)references portal(`id_portal`),
  FOREIGN KEY(`sistema`)references sistema(`id_sistema`)
)

CREATE TABLE `sistema` (
  `id_sistema` int NOT NULL AUTO_INCREMENT,
  `nombre_sistema` varchar(50) DEFAULT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(`id_sistema`)
)

CREATE TABLE `portal` (
  `id_portal` int NOT NULL AUTO_INCREMENT,
  `nombre_portal` varchar(50) DEFAULT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(`id_portal`)
)



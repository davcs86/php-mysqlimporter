
-- MySQL Import File Example

/*create database if not exists pruebaimporter;
use pruebaimporter;*/

CREATE TABLE if not exists `nombre` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `nombre` VARCHAR(60) NOT NULL, 
  `apellidos` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = myisam;


CREATE TABLE if not exists `facturas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `factura` VARCHAR(60) NOT NULL, 
  `fecha` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = myisam;


CREATE TABLE if not exists `direcciones` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `calle` VARCHAR(60) NOT NULL, 
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = myisam;

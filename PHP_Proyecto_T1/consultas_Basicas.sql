/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Portatil_Bot
 * Created: 13-nov-2016
 */

CREATE TABLE `portal`.`usuarios` ( `id_usuario` INT(10) NOT NULL , `nombre` INT NOT NULL , `fechaNacimiento` DATE NOT NULL , `ciudad` VARCHAR(30) NOT NULL , `genero` VARCHAR(20) NOT NULL , `imagen_usuario` BLOB NOT NULL , `email` VARCHAR(30) NOT NULL , `biografia` VARCHAR(100) NOT NULL , `password` VARCHAR(30) NOT NULL , PRIMARY KEY (`id_usuario`)) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT = 'Tabla de los usuarios que se registran en la aplicacion';

CREATE TABLE `portal`.`Videos` ( `id_video` INT(10) NOT NULL , `id_usuario` INT(10) NOT NULL , `titulo` VARCHAR(30) NOT NULL , `duracion` VARCHAR(10) NOT NULL , `estreno` YEAR NOT NULL , `sinopsis` VARCHAR(50) NOT NULL , `genero` VARCHAR(20) NOT NULL , `tipo` INT(5) NOT NULL , `formato` VARCHAR(20) NOT NULL , `enlace` BLOB NOT NULL , `imagen` BLOB NOT NULL , PRIMARY KEY (`id_video`)) ENGINE = InnoDB;

CREATE TABLE `portal`.`personas` ( `id_actores` INT(10) NOT NULL , `nombre` VARCHAR(50) NOT NULL , `fechaNacimiento` YEAR NOT NULL , `fechaFallecimiento` YEAR NOT NULL , `nacionalidad` VARCHAR(20) NOT NULL , PRIMARY KEY (`id_actores`)) ENGINE = InnoDB CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

CREATE TABLE `portal`.`actuan` ( `id_video` INT(10) NOT NULL , `id_actores` INT(10) NOT NULL ) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `portal`.`dirigen` ( `id_video` INT(10) NOT NULL , `id_actores` INT(10) NOT NULL ) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `portal`.`temporadas` ( `id_temporada` INT(10) NOT NULL , `n_temporada` INT(5) NOT NULL , `duracion` VARCHAR(10) NOT NULL , PRIMARY KEY (`id_temporada`)) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `portal`.`comentarios` ( `id_comentarios` INT(10) NOT NULL , `texto` VARCHAR(150) NOT NULL , `fecha` DATETIME NOT NULL , `votaciones` INT(4) NOT NULL , `alerta` INT(4) NOT NULL , PRIMARY KEY (`id_comentarios`)) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `portal`.`comentario_temporada` ( `id_comentarios` INT(10) NOT NULL , `id_temporada` INT(10) NOT NULL ) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
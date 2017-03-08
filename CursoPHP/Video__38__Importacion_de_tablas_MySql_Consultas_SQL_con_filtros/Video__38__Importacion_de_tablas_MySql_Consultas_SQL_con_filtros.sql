/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Portatil_Bot
 * Created: 23-dic-2016
 */

-- renombar bd
rename table hoja1 to productos

-- Importar una base de datos
-- Crear bd
create table productos3(codigo_articulo varchar(4),seccion varchar(11),nombre_articulo(varchar 20));

-- Insertar registros
INSERT INTO productos3(codigo_articulo,seccion,nombre_articulo) VALUES 
("ar1","deportes","raqueta"),
("ar2","ferreteria","chincheta"),
("ar3","ferreteria3","chincheta3"),
("ar4","ferreteria4","chincheta4"),
("ar5","ferreteria5","chincheta5"),
("ar6","ferreteria6","chincheta6");

-- Por defecto ANSI




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Portatil_Bot
 * Created: 23-dic-2016
 Crear y Eliminar tablas en un BD Mysql
 Mostrar campos de la tabla
 1º instrucciones del lenguaje SQL
 El acceso a la bd - con instrucciones SQL
 */

-- 1º Crear Base de datos
create database pruebas;

use pruebas; 

create table datospersonales (nif varchar(10),nombre varchar(40),apellido varchar(20),edad int(2));

alter table datospersonales drop edad;

alter table datospersonales add column edad int(2);

insert into datospersonales (nif,nombre,apellido,edad) values ("1111","asd","qwe",30);




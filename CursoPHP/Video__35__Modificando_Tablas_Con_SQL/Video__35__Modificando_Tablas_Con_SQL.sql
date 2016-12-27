/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Portatil_Bot
 * Created: 23-dic-2016
 */


-- 1º Crear Base de datos
create database pruebas;

-- 2º Seleccionar
use pruebas; 

-- 3º Crear tabla
create table datospersonales (nif varchar(10),nombre varchar(40),apellido varchar(20),edad int(2));

-- 4º Borrar campo
alter table datospersonales drop edad;

-- 5º aniadir campo
alter table datospersonales add column edad int(2);

-- 6º insertar datos
insert into datospersonales (nif,nombre,apellido,edad) values ("1111","asd","qwe",30);


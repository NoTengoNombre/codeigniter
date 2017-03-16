create table users (
id int(11) not null auto_increment primary key,
usuario varchar(30) not null,
password varchar(30) not null,
email varchar(30) not null,
fecha timestamp );

insert into users (id,usuario,password,email,fecha) values ('1','pepe','123','pepe@gmail.com','2010-01-01 00:00:00');

ALTER TABLE `users` CHANGE `usuario` `username` VARCHAR(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

-- XSS Enrutamiento
-- UPDATE `users` SET `username` = '<script>location.href="www.example.com"</script>' WHERE `users`.`id` = 5;

-- CREAR CLAVE FORANEA DENTRO DE LA TABLA que se relaciona con la tabla principal
ALTER TABLE `documentos` ADD INDEX(`usuario_id`);

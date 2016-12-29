/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Portatil_Bot
 * Created: 28-dic-2016
 */

ALTER TABLE `datos_usuarios` CHANGE `id` `Id` INT(100) NOT NULL AUTO_INCREMENT;

DELETE FROM datos_usuarios WHERE id= 'criterio';


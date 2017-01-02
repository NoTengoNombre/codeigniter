/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Portatil_Bot
 * Created: 29-dic-2016
 */

ALTER TABLE `productos` CHANGE `F` `IMPORTADO` VARCHAR(9) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `productos` CHANGE `G` `PAISDEORIGEN` VARCHAR(12) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
 /**
 * Author:  Portatil_Bot
 * Created: 21-ene-2017
 */

-- Renombrar tabla
RENAME TABLE nombre_tabla TO nuevo_nombre_tabla  

-- Todas las consultas en phpAdmin llevan este tipo de coma
ALTER TABLE usuarios CHANGE `telef_` `telef` VARCHAR(200) NOT NULL

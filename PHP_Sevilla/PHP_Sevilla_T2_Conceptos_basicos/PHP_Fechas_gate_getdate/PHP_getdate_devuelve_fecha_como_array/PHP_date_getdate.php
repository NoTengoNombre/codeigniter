<!--
    @Created on : 23-nov-2016, 21:52:50
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Devuelve una cadena formateada según el formato dado usando el parámetro 
de tipo integer timestamp dado o el momento actual si no se da una marca de tiempo. 
En otras palabras, timestamp es opcional y por defecto es el valor de time().
-->

<?php
$hoy = getdate();

foreach ($hoy as $key => $valor) {
  echo '<br>' . $valor . " - tipo " . $key . " - ";
}


print_r($hoy);

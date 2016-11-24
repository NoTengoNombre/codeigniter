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
//$utc = date_default_timezone_set('UTC');
//echo $utc . '<br>';
$europa = date_default_timezone_get('Europe/Madrid');
echo '<hr>';
echo 'valor : ' . $europa;
echo '<hr>';

// devuelve el dia;
echo date("l");

$dia = date("l");
$fecha_completa = date('l jS \of F Y h:i:s A');
echo '<hr>';
echo $fecha_completa;
echo '<hr>';
echo gettype($dia);
echo '<hr>';
echo gettype($fecha_completa);
echo '<hr>';
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

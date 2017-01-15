<!--
    @Created on : 14-ene-2017, 13:01:48
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$declarar = array();

echo gettype($declarar) . '<br><br>';

print_r($declarar);

var_dump($declarar);

//Array que almacena otro array
$declarar2[] = $declarar;

echo gettype($declarar2) . '<br><br>';

print_r($declarar2);

var_dump($declarar2);

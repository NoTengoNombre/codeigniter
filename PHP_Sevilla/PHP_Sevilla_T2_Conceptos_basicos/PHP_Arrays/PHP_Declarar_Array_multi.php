<!--
    @Created on : 14-ene-2017, 13:01:48
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

$otro[] = 2;

$declarar = array(1, 2, 3, 4);

echo gettype($declarar) . '<br><br>';

print_r($declarar);

var_dump($declarar);

echo '<hr>';

foreach ($declarar as $value) {
  echo $value;
}


//Array que almacena otro array
$declarar2[] = $declarar;

echo '<hr>';

echo gettype($declarar2) . '<br><br>';

echo '<hr>';

print_r($declarar2);

echo '<hr>';

var_dump($declarar2);
 
echo '<hr>';




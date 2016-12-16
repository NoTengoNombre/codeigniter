<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$arrays_asociativos = 3;
$aa = 4;
$b = 5;
$media = 52.75;
$texto = "Hoy es Lunes";
echo "Primera linea php a separar de la 2";
echo "<br>";
echo "Separar de la anterior";

echo "<br> Otro salto de linea";
echo "<br> Separar la linea anterior ";

echo "Primera linea php a separar con la 2 "."\n";

$arrays_asociativos = &$b;
echo "<br>";
echo $arrays_asociativos;
echo "<br>";
echo $aa;
echo "<br>";
echo $b;
?>
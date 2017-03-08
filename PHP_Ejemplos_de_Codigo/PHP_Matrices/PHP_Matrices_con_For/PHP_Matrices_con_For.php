<!--
    @Created on : 17-ene-2017, 0:25:13
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : https://trucosphp.wikispaces.com/Arrays+en+PHP
-->

<?php
$columnas = 7;
$filas = 3;

for ($i = 0; $i < $columnas; $i++) {
  for ($j = 0; $j < $filas; $j++) {
    echo $matriz[$i][$j] = $i + $j;
    echo '<br>';
  }
}
var_dump($matriz);

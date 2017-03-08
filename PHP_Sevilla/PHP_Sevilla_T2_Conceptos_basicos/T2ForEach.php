<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$tabla = array(1, 2, 3, 4);

foreach ($tabla as $numero) {
  echo "<p>$numero</p>";
}

$variable = 10;
$indice = 1;

foreach ($tabla as $indice => $variable){
  echo $variable;
}




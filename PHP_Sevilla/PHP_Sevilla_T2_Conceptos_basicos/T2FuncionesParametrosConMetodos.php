<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$base = 5;
$altura = 5;

function calcular_Cuadrado($lado1, $lado2) {
  echo "<br>" . $total = ($lado2 * $lado1) . "<br>";
}

function calcular_Cuadrado1($lado1, $lado2, $info) {
  echo "<br>" . $total = ($lado2 * $lado1) . "<br>";
}

$lado1 = 4;
$lado2 = 3;

calcular_Cuadrado($lado1, $lado2);
calcular_Cuadrado(5, 5);


echo "<br> prueba functions estandar dentro de functions creados";


/*
 * Si el parametro pasado es un metodo que es VOID devuelve 0
 * Si no devuelve valor asisgnado
 */

//                var_dump = Void -> devuelve 0
calcular_Cuadrado(var_dump(rand(1, 10)), var_dump(rand(10, 20)));
//                rand = devuelve valor numerico
calcular_Cuadrado(rand(1, 10), rand(10, 20));
?>










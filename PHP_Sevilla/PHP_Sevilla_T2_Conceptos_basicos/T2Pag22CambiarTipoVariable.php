<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$a = "10";
echo $a;
settype($a, "integer");
echo $a + 10;

// settype — Establece el tipo de una variable

$foo = "5bar"; // cadena
$bar = true; // boolean

settype($foo, "integer"); //$foo es ahora 5 (entero)
$foo1 = $foo + 4;
echo "<br> valor de foo ";
echo $foo1;
echo "<br> Integer ";
settype($bar, "string"); // $bar es ahora "1" (cadena)
echo "<br> String ";
echo "<br>";
echo "Maximo valor ";
echo PHP_INT_MAX;
?>

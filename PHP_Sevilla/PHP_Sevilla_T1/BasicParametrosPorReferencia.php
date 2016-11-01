<!-- No Fear No Distractions -->
<!-- T.E.D , I.T.W.T -->

<?php

/**
 * * Official Guide .. : http://php.net/manual/es/index.php
 * * Guide Help........: http://www.cristalab.com/tutoriales/variables-por-referencia-y-valor-en-php-c64201l/
 * * Author............: RadWulf Candle
 * * Notes.............: 
 * 
 * Los parámetros, es un poco 'diferente' que las funciones. 
 * Puesto que, el operador (&) puede estar en la 
 * definición del parámetro de la función, 
 * o en la invocación de la función 
 * y pasar una variable por referencia como parámetro.
 * * Last changed......:
 */
//        tiene el ampersand
function miFuncion(&$a) {
  return ++$a;
}

function otraFuncion($a) {
  return ++$a;
}

$param = 0;

echo 'miFuncion($param): ';
miFuncion($param);
var_dump($param);

$variable = 0;

echo 'otraFuncion(&$variable): ';
//otraFuncion(&$variable); // da ERROR
otraFuncion($variable);
var_dump($variable);
?>



















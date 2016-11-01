<!--
    @Created on : 30-oct-2016, 11:00:49
    @Author     : RVS - N.F.N.D
    @Pag        : Apuntes
    @version    :
    @TODO       : 
-->

<?php
// Tipos Predefinidos

$numero = "1";
$entero = settype($numero, "integer");

if (is_int($numero)) {
  echo '<br>';
  echo 'si - es un numero : ' . $numero;
} else {
  echo '<br>';
  echo 'no - es un numero : ' . $numero;
}

$double = "1.2";
$decimal = settype($double, "double");

if (is_double($double)) {
  echo '<br>';
  echo 'si - es un decimal : ' . $double;
} else {
  echo '<br>';
  echo 'no - es un decimal : ' . $double;
}

$verdadero = "true";
$booleano = settype($verdadero, "boolean");

if (is_bool($verdadero)) {
  echo '<br>';
  echo 'si - es un booleano : ' . $verdadero;
} else {
  echo '<br>';
  echo 'no - es un booleano : ' . $verdadero;
}

$string = 2;
$cadena = settype($string, "string");

if (is_string($string)) {
  echo '<br>';
  echo 'si - es un string : ' . $string;
} else {
  echo '<br>';
  echo 'no - es un string : ' . $string;
}

$array;
$arreglo = settype($array, "array");

if (is_array($array)) {
  echo '<br>';
  echo 'si';
  for ($v = 0; $v < count($array); $v++) {
    echo $v;
  }
}

if (is_array($array)) {
  echo '<br>';
  $array[0] = "a";
  $array[1] = "b";
  $array[2] = "c";
  $array[3] = "d";
  for ($v = 0; $v < count($array); $v++) {
    echo '<br>';
    echo $v . " - " . $array[$v];
  }
}



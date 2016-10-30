<!--
    @Created on : 30-oct-2016, 11:00:49
    @Author     : RVS - N.F.N.D
    @Pag        : Apuntes
    @version    :
    @TODO       : 
-->

<?php
$a = "10";
settype($a, "integer");

is_int($a);

if (is_int($a)) {
  echo "$a si es un entero ";
} else {
  echo "$a no es un entero ";
}

$bar = true;
settype($bar, "string");
echo "<br>";
echo "booleano a string : " . $bar;

echo "<hr>";
$bar1 = false;
settype($bar1, "string");
echo "<br>";
echo "booleano a string : " . $bar1 . '<br>';

if (is_bool($bar1)) {
  echo "$bar1 Si es un booleano <br>";
} else {
  echo "$bar1 No es un booleano <br>";
}

if (is_string($bar1)) {
  echo "$bar1 Si es un string <br>";
} else {
  echo "$bar1 No es un string <br>";
}





<!--
    @Created on : 30-oct-2016, 11:00:49
    @Author     : RVS - N.F.N.D
    @Pag        : Apuntes
    @version    :
    @TODO       : 
-->

<?php
// Tipos Predefinidos

$foo = "5bar"; // cadena
$bart = true;   // booleano
$barf = false;   // booleano

$var = settype($foo, "integer"); // $foo es ahora 5   (entero)

if (is_int($foo)) {
  echo 'valor : ' . $foo;
  echo var_dump($foo);
  echo 'suma : ';
  echo $foo + 1;
  echo '<hr>';
}

  echo '<hr>';
  echo var_dump($var);
  echo '<hr>';


settype($bart, "string");
echo '<br> valor de true :  ' . $bart;
var_dump($bart);
echo '<hr>';

settype($barf, "string");
echo '<br> valor de false :  ' . $barf;
echo '<br> ' . $barf;
var_dump($barf);
echo '<hr>';

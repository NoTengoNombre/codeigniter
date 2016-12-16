<!--
    @Created on : 24-nov-2016, 10:19:14
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://php.net/manual/es/language.variables.scope.php
    @version    : 
    @TODO       :
-->

<?php
include './PHP_Variables_Globales.php';
echo '2º Script <br>';

$arrays_asociativos;
$b = 5;

function Suma() {
  global $arrays_asociativos, $b;
  echo '<br>';
  echo '• valor de $a ' . $arrays_asociativos;
  echo '<br>';
  echo '• valor de $b ' . $b;
}

function Suma2() {
  global $arrays_asociativos, $b;
  $b += $arrays_asociativos;
  echo $b;
}

echo '<br> valor de \'a\' ';
echo $arrays_asociativos;
echo '<br> valor de b: ';
echo $b;
echo '<br>';

echo '<br> Suma() - ';
Suma();
echo '<br> a - ';
echo $arrays_asociativos;
echo '<br> b - ';
echo $b;
echo '<br> Suma2() - ';
Suma2();
echo '<br>';

echo '<br>Fin 2º Script';
echo '<hr>';

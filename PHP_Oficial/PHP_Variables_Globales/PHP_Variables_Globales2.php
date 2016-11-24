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

$a;
$b = 5;

function Suma() {
  global $a, $b;
  echo '<br>';
  echo '• valor de $a ' . $a;
  echo '<br>';
  echo '• valor de $b ' . $b;
}

function Suma2() {
  global $a, $b;
  $b += $a;
  echo $b;
}

echo '<br> valor de \'a\' ';
echo $a;
echo '<br> valor de b: ';
echo $b;
echo '<br>';

echo '<br> Suma() - ';
Suma();
echo '<br> a - ';
echo $a;
echo '<br> b - ';
echo $b;
echo '<br> Suma2() - ';
Suma2();
echo '<br>';

echo '<br>Fin 2º Script';
echo '<hr>';

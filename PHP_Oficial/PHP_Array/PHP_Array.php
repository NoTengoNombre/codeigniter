<!--
    @Created on : 30-oct-2016, 13:10:24
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$arrays_asociativos["ESP"] = "Spain";
$arrays_asociativos["FRA"] = "France";
$arrays_asociativos["POR"] = "Portugal";


foreach ($arrays_asociativos as $valor) {
  echo $valor;
  echo '<br>';
}

$array = [];

var_dump($array);

$array1 = [10];

var_dump($array1);

$array3[10] = 5;

var_dump($array3);

$array_multiple = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
);

var_dump($array_multiple);


$array = array(
    "a",
    "bbbb",
    6 => "c",
    "d",
);
var_dump($array);


$array_nuevo3 = array(5 => 1, 12 => 2);
$array_nuevo3[] = 56;

foreach ($array_nuevo3 as $value) {
  echo '<b>' . $value . '</b>|';
}

$array_nuevo3["x"] = 42;

echo '<hr>';

foreach ($array_nuevo3 as $value) {
  echo '<b>' . $value . '</b>|';
}

var_dump($array_nuevo3);

$valor = $array_nuevo3["x"];

echo gettype($valor);

class A {

  private $A; //  Este campo se convertirá en '\0A\0A'

}

class B extends A {

  private $A = "Private A"; // Este campo se convertirá en '\0B\0A'
  public $AA = "Public AA"; // Este campo se convertirá en 'AA'

}

var_dump((array) new B());





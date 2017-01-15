<!--
    @Created on : 14-ene-2017, 13:01:48
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$array = array();
$array[0][0] = "00 ";
$array[0][1] = " 01";
$array[1][0] = " 10";
$array[1][1] = " 11";

foreach ($array as $v1) {
  foreach ($v1 as $v2) {
    echo '<pre>';
    echo "$v2\n";
    echo '</pre>';
  }
}

foreach (array(1, 2, 3, 4, 5) as $v) {
  echo "$v\n";
}

foreach ($array as $element):

  echo '<hr>' . "hello";

endforeach;


$cadena [] = "a";
$cadena [] = "b";
$cadena [] = "c";
$cadena [] = "d";

foreach ($cadena as $c) {
  print $c;
}








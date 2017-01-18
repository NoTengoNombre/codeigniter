<!--
    @Created on : 16-ene-2017, 21:44:58
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$array[0][0] = "Uno";
$array[0][1] = "Dos";
$array[1][0] = "Tres";
$array[1][1] = "Cuatro";
for ($i = 0; $i < count($array); $i++) {
  for ($j = 0; $j < count($array[$i]); $j++) {
    echo $array[$i][$j] . '<br />';
  }
}
echo "--------------------";
$array2[0][0][0] = "Cinco";
$array2[0][0][1] = "Seis";
$array2[0][0][2] = "Siete";
$array2[0][1][0] = "Ocho";
$array2[0][1][1] = "Nueve";
for ($i = 0; $i < count($array2); $i++) {
  for ($j = 0; $j < count($array2[$i]); $j++) {
    for ($k = 0; $k < count($array2[$i][$j]); $k++) {
      echo $array2[$i][$j][$k] . '<br />';
    }
  }
}

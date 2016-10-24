<!--
    @Created on : 22-oct-2016, 14:43:41
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$texto = "0123456789";
$longitud = strlen($texto);
print "longitud : " . $texto;
$longitud_menos_1 = strlen($texto) - 1;
$longitud_mas_1 = strlen($texto) + 1;

$indice = 0;

while ($indice < $longitud) {
  print "<hr> • " . $texto[$indice];
  $indice++;
}

$indice1 = 0;

while ($indice1 < $longitud_menos_1) {
  print "<hr> ♦ " . $texto[$indice1];
  $indice1++;
}


 
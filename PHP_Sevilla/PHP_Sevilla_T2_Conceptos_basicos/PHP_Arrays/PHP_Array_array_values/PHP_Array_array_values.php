<!--
    @Created on : 14-ene-2017, 13:54:28
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$cadena = array();

$cadena[] = "a";
$cadena[] = "b";
$cadena[] = "c";
$cadena[] = "d";
$cadena[] = "e";

foreach ($cadena as $value) {
  print $value . '<br>';
}

echo '<hr>';

$otro = array_values($cadena);

print_r($otro);

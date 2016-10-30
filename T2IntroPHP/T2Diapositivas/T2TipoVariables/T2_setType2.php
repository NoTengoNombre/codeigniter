<!--
    @Created on : 30-oct-2016, 11:00:49
    @Author     : RVS - N.F.N.D
    @Pag        : Apuntes
    @version    :
    @TODO       : 
-->

<?php
$var = "true";
settype($var, 'bool');
var_dump($var);

$var = "false";
settype($var, 'bool');
var_dump($var);

$var = "";
settype($var, 'bool');
var_dump($var);

$vari = $var;
echo "valor : " . $vari;
echo '<br>';

if (is_bool($vari) && $vari === FALSE) {
  echo "$vari • Si es " . FALSE;
} else {
  echo "$vari • No";
}

echo "<hr>";

if (is_bool($vari) && $vari === TRUE) {
  echo $vari . " ♦ Si";
} else {
  echo $vari . " ♦ No es " . TRUE;
}


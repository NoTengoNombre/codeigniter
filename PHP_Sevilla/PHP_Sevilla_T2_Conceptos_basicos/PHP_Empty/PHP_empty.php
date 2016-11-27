<!--
    @Created on : 23-nov-2016, 21:37:59
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$a = "";
if (empty($a)) {
  echo "vacia";
} else {
  echo "NO vacia";
}

echo "<hr>";

$aa = "a";
if (empty($aa)) {
  echo "vacia";
} else {
  echo "NO vacia";
}

echo '<hr> EQUIVALENTE';
echo '<hr>';
$var = "a";
if (!isset($var) || $var == false) {
  echo '<br>Variable no fijada';
} else {
  echo '<br>Variable Fijada';
}
echo '<hr>';
$var1;
if (!isset($var1) || $var1 == false) {
  echo '<br>Variable no fijada';
} else {
  echo '<br>Variable Fijada';
}



<!--
    @Created on : 24-nov-2016, 12:41:34
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
$arrays_asociativos = rand(1, 10);
echo "soy a : $arrays_asociativos";
echo "<br>";
$b = rand(1, 10);
echo "soy b : $b";
echo "<hr>";

//for ($a; $a < 10; $a++) {
if ($arrays_asociativos < $b) {
  print "$arrays_asociativos es menor que $b";
  echo "<br>";
} elseif ($arrays_asociativos > $b) {
  print "$arrays_asociativos es mayor que $b";
  echo "<br>";
} else {
  print "$arrays_asociativos es igual que $b";
  echo "<br>";
}
//}
?>

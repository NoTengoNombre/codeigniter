<!--
    @Created on : 24-nov-2016, 12:41:34
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
$a = rand(1, 10);
echo "soy a : $a";
echo "<br>";
$b = rand(1, 10);
echo "soy b : $b";
echo "<hr>";

//for ($a; $a < 10; $a++) {
if ($a < $b) {
  print "$a es menor que $b";
  echo "<br>";
} elseif ($a > $b) {
  print "$a es mayor que $b";
  echo "<br>";
} else {
  print "$a es igual que $b";
  echo "<br>";
}
//}
?>
